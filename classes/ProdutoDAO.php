<?php

require_once __DIR__ . '/Produto.php';

class ProdutoDAO {
    private PDO $pdo;
    
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
    
    /**
     * Busca todos os produtos de uma categoria específica.
     * @param int $categoriaId
     * @return Produto[]
     */
    public function buscarPorCategoria(int $categoriaId): array {
        $produtos = [];
        $sql = "SELECT * FROM produtos WHERE categoria_id = :categoria_id ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':categoria_id', $categoriaId, PDO::PARAM_INT);
        $stmt->execute();
        while ($dadosProduto = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produto = new Produto(
                $dadosProduto['titulo'],
                $dadosProduto['preco_varejo'],
                $dadosProduto['preco_atacado'],
                $dadosProduto['descricao']
            );
            $produto->id = $dadosProduto['id'];
            $produto->data_cadastro = $dadosProduto['data_cadastro'];

            // Busca imagens
            $sqlImagens = "SELECT url_imagem FROM produto_imagens WHERE produto_id = :produto_id";
            $stmtImagens = $this->pdo->prepare($sqlImagens);
            $stmtImagens->bindValue(':produto_id', $produto->id);
            $stmtImagens->execute();
            $urls = $stmtImagens->fetchAll(PDO::FETCH_COLUMN);
            $produto->imagens = $urls;

            $produtos[] = $produto;
        }
        return $produtos;
    }

    /**
     * Busca um único produto pelo seu ID, incluindo suas imagens.
     * @param int $id O ID do produto a ser buscado.
     * @return ?Produto Retorna um objeto Produto completo ou null se não encontrar.
     */
    public function buscarPorId(int $id): ?Produto {
        $sqlProduto = "SELECT * FROM produtos WHERE id = :id";
        $stmtProduto = $this->pdo->prepare($sqlProduto);
        $stmtProduto->bindValue(':id', $id);
        $stmtProduto->execute();

        $dadosProduto = $stmtProduto->fetch(PDO::FETCH_ASSOC);
        if (!$dadosProduto) {
            return null;
        }
        $produto = new Produto(
            $dadosProduto['titulo'],
            $dadosProduto['preco_varejo'],
            $dadosProduto['preco_atacado'],
            $dadosProduto['descricao']
        );
        $produto->id = $dadosProduto['id'];
        $produto->data_cadastro = $dadosProduto['data_cadastro'];

        $sqlImagens = "SELECT url_imagem FROM produto_imagens WHERE produto_id = :produto_id";
        $stmtImagens = $this->pdo->prepare($sqlImagens);
        $stmtImagens->bindValue(':produto_id', $produto->id);
        $stmtImagens->execute();
        $urls = $stmtImagens->fetchAll(PDO::FETCH_COLUMN);
        $produto->imagens = $urls;

        return $produto;
    }
}
