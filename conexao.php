<?php

// Configurações de acesso ao banco de dados MySQL
$servername = "localhost"; // Host do banco (localhost para ambiente local)
$username = "root";       // Usuário do banco (padrão do XAMPP)
$password = "";           // Senha do banco (vazia no XAMPP por padrão)
$dbname = "isabela_atacadista"; // Nome do banco de dados

try {
    // Cria a conexão PDO com o banco de dados
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Define o modo de erro para exceção (melhor para debug)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Garante que a conexão use UTF-8 para acentuação e emojis
    $pdo->exec("SET NAMES utf8mb4");
    // Define o fuso horário padrão para o Brasil
    date_default_timezone_set('America/Sao_Paulo');

} catch (PDOException $e) {
    // Em caso de erro, exibe mensagem amigável
    die("Falha na conexão com o banco de dados: " . $e->getMessage());
}
?>
