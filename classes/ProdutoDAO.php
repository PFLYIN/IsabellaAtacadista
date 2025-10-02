<?php

require_once __DIR__ . '/Produto.php';

class ProdutoDAO {

    private PDO $pdo;
    
    // Construtor recebe a conexão 
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
    
    /**
     * 
     * @param int
     * @return Produto[] 
     */
    public function buscarPorCategoria(int $categoriaId): array {
        $produtos = [];
        // Busca todos os produtos daquela categoria, ordenando do mais novo para o mais antigo
        $sql = "SELECT * FROM produtos WHERE categoria_id = :categoria_id ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':categoria_id', $categoriaId, PDO::PARAM_INT);
        $stmt->execute();
 
        while ($dadosProduto = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // cria um objeto Produto preenchendo os campos principais
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
            $produto->imagens = $urls;

            $produtos[] = $produto;
        }
       
        return $produtos;
    }

    /**
     * 
     * @param int 
     * @return ?Produto 
     */
    public function buscarPorId(int $id): ?Produto {
        //busca o produto pelo ID
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
