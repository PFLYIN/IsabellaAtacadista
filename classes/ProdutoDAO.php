<?php

require_once __DIR__ . '/Produto.php';

class ProdutoDAO {
    private PDO $pdo;
    
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
    
    // ... métodos existentes ...
    
    /**
     * Busca um único produto pelo seu ID, incluindo suas imagens.
     * @param int $id O ID do produto a ser buscado.
     * @return ?Produto Retorna um objeto Produto completo ou null se não encontrar.
     */
    public function buscarPorId(int $id): ?Produto {
        // 1. Busca os dados principais do produto
        $sqlProduto = "SELECT * FROM produtos WHERE id = :id";
        $stmtProduto = $this->pdo->prepare($sqlProduto);
        $stmtProduto->bindValue(':id', $id);
        $stmtProduto->execute();

        $dadosProduto = $stmtProduto->fetch(PDO::FETCH_ASSOC);

        // Se não encontrou o produto, retorna null
        if (!$dadosProduto) {
            return null;
        }

        // 2. Se encontrou, cria o objeto Produto
        $produto = new Produto(
            $dadosProduto['titulo'],
            $dadosProduto['preco_varejo'],
            $dadosProduto['preco_atacado'],
            $dadosProduto['descricao']
        );
        $produto->id = $dadosProduto['id'];
        $produto->data_cadastro = $dadosProduto['data_cadastro'];

        // 3. Busca as imagens associadas a este produto
        $sqlImagens = "SELECT url_imagem FROM produto_imagens WHERE produto_id = :produto_id";
        $stmtImagens = $this->pdo->prepare($sqlImagens);
        $stmtImagens->bindValue(':produto_id', $produto->id);
        $stmtImagens->execute();

        // Pega todas as URLs e coloca no array do objeto
        $urls = $stmtImagens->fetchAll(PDO::FETCH_COLUMN);
        $produto->imagens = $urls;

        return $produto;
    }
}
