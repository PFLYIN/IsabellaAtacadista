<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "isabela_atacadista";

try {
    
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES utf8mb4");
    date_default_timezone_set('America/Sao_Paulo');
    
} catch (PDOException $e) {
    die("Falha na conexão com o banco de dados: " . $e->getMessage());
}
?>
