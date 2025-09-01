<?php
// Configurações de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "isabela_atacadista"; // Corrigido para um único 'l'

try {
    // Cria a conexão usando PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Configura o PDO para lançar exceções em caso de erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Configura o charset para utf8mb4
    $pdo->exec("SET NAMES utf8mb4");
    
    // Configura o fuso horário (opcional)
    date_default_timezone_set('America/Sao_Paulo');
    
} catch (PDOException $e) {
    // Em caso de erro na conexão
    die("Falha na conexão com o banco de dados: " . $e->getMessage());
}
?>
