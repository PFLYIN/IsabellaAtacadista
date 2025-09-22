<?php
require_once 'conexao.php';
$stmt = $pdo->query('SELECT id, nome FROM categorias ORDER BY id');
$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: application/json');
echo json_encode($categorias);