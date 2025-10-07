<?php
session_start();
require_once 'conexao.php';

// Segurança: só admins podem editar produtos
if (!isset($_SESSION['admin_logado']) || $_SESSION['admin_logado'] !== true) {
    die('Acesso negado.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pega todos os dados do formulário de edição
    $id = $_POST['id'] ?? null;
    $titulo = $_POST['titulo'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
    $preco_varejo = $_POST['preco_varejo'] ?? 0;
    $preco_atacado = $_POST['preco_atacado'] ?? 0;

    // Validação básica
    if (!$id || empty($titulo) || empty($preco_varejo)) {
        die('Dados insuficientes para atualizar o produto.');
    }

    try {
        // Atualiza os dados do produto no banco
        $sql = "UPDATE produtos SET 
                    titulo = :titulo, 
                    descricao = :descricao, 
                    preco_varejo = :preco_varejo, 
                    preco_atacado = :preco_atacado 
                WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':titulo' => $titulo,
            ':descricao' => $descricao,
            ':preco_varejo' => $preco_varejo,
            ':preco_atacado' => $preco_atacado,
            ':id' => $id
        ]);
        // (A lógica de atualizar imagens virá aqui depois)

        // Mensagem de sucesso e redirecionamento
        $_SESSION['mensagem_sucesso'] = "Produto atualizado com sucesso!";
        header('Location: painel_admin.php');
        exit();

    } catch (PDOException $e) {
        die("Erro ao atualizar o produto: " . $e->getMessage());
    }
} else {
    // Se não for POST, volta para o painel
    header('Location: painel_admin.php');
    exit();
}
?>