<?php
try {
    // Conecta ao servidor MySQL sem especificar um banco de dados
    $pdo = new PDO("mysql:host=localhost", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Cria o banco de dados com o nome correto se ele não existir
    $sql = "CREATE DATABASE IF NOT EXISTS isabela_atacadista CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
    $pdo->exec($sql);
    
    echo "Banco de dados 'isabela_atacadista' criado ou já existente.<br>";
    
    // Seleciona o banco de dados recém-criado
    $pdo->exec("USE isabela_atacadista");
    
    // Cria a tabela produtos se não existir
    $sqlProdutos = "CREATE TABLE IF NOT EXISTS produtos (
        id INT(11) NOT NULL AUTO_INCREMENT,
        titulo VARCHAR(255) NOT NULL,
        descricao TEXT,
        preco_varejo DECIMAL(10,2) NOT NULL,
        preco_atacado DECIMAL(10,2) NOT NULL,
        data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
    
    $pdo->exec($sqlProdutos);
    echo "Tabela 'produtos' criada ou já existente.<br>";
    
    // Cria a tabela de imagens de produtos se não existir
    $sqlImagens = "CREATE TABLE IF NOT EXISTS produto_imagens (
        id INT(11) NOT NULL AUTO_INCREMENT,
        produto_id INT(11) NOT NULL,
        url_imagem VARCHAR(255) NOT NULL,
        ordem INT(3) DEFAULT 0,
        PRIMARY KEY (id),
        FOREIGN KEY (produto_id) REFERENCES produtos(id) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
    
    $pdo->exec($sqlImagens);
    echo "Tabela 'produto_imagens' criada ou já existente.<br>";
    
    echo "Configuração do banco de dados concluída com sucesso!";
    
} catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
}
?>
