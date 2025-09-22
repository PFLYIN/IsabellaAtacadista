<?php

require_once __DIR__ . '/Produto.php';

// Classe responsável por acessar e manipular os produtos no banco de dados
class ProdutoDAO {
    // Instância do PDO para conexão com o banco
    private PDO $pdo;
    
    // Construtor recebe a conexão PDO já aberta
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
    
    /**
     * Busca todos os produtos de uma categoria específica.
     * @param int $categoriaId ID da categoria desejada
     * @return Produto[] Lista de objetos Produto encontrados
     */
    public function buscarPorCategoria(int $categoriaId): array {
        $produtos = [];
        // Busca todos os produtos daquela categoria, ordenando do mais novo para o mais antigo
        $sql = "SELECT * FROM produtos WHERE categoria_id = :categoria_id ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':categoria_id', $categoriaId, PDO::PARAM_INT);
        $stmt->execute();
        // Para cada produto encontrado...
        while ($dadosProduto = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Cria um objeto Produto preenchendo os campos principais
            $produto = new Produto(
                $dadosProduto['titulo'],
                $dadosProduto['preco_varejo'],
                $dadosProduto['preco_atacado'],
                $dadosProduto['descricao']
            );
            $produto->id = $dadosProduto['id'];
            $produto->data_cadastro = $dadosProduto['data_cadastro'];

            // Busca todas as imagens desse produto na tabela produto_imagens
            $sqlImagens = "SELECT url_imagem FROM produto_imagens WHERE produto_id = :produto_id";
            $stmtImagens = $this->pdo->prepare($sqlImagens);
            $stmtImagens->bindValue(':produto_id', $produto->id);
            $stmtImagens->execute();
            $urls = $stmtImagens->fetchAll(PDO::FETCH_COLUMN);
            $produto->imagens = $urls; // Array de URLs das imagens

            $produtos[] = $produto;
        }
        // Retorna todos os produtos encontrados
        return $produtos;
    }

    /**
     * Busca um único produto pelo seu ID, incluindo suas imagens.
     * @param int $id O ID do produto a ser buscado.
     * @return ?Produto Retorna um objeto Produto completo ou null se não encontrar.
     */
    public function buscarPorId(int $id): ?Produto {
        // Busca o produto pelo ID
        $sqlProduto = "SELECT * FROM produtos WHERE id = :id";
        $stmtProduto = $this->pdo->prepare($sqlProduto);
        $stmtProduto->bindValue(':id', $id);
        $stmtProduto->execute();

        $dadosProduto = $stmtProduto->fetch(PDO::FETCH_ASSOC);
        if (!$dadosProduto) {
            // Retorna null se não encontrar
            return null;
        }
        // Cria o objeto Produto preenchendo os campos
        $produto = new Produto(
            $dadosProduto['titulo'],
            $dadosProduto['preco_varejo'],
            $dadosProduto['preco_atacado'],
            $dadosProduto['descricao']
        );
        $produto->id = $dadosProduto['id'];
        $produto->data_cadastro = $dadosProduto['data_cadastro'];

        // Busca todas as imagens desse produto
        $sqlImagens = "SELECT url_imagem FROM produto_imagens WHERE produto_id = :produto_id";
        $stmtImagens = $this->pdo->prepare($sqlImagens);
        $stmtImagens->bindValue(':produto_id', $produto->id);
        $stmtImagens->execute();
        $urls = $stmtImagens->fetchAll(PDO::FETCH_COLUMN);
        $produto->imagens = $urls;

        return $produto;
    }
}
