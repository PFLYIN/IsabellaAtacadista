<?php
session_start();

// 1. SEGURANÇA: Verifica se um admin está logado
if (!isset($_SESSION['admin_logado']) || $_SESSION['admin_logado'] !== true) {
    // Se não estiver logado como admin, expulsa para a página de login de admin
    $_SESSION['mensagem_erro'] = 'Acesso negado. Você precisa ser um administrador.';
    header('Location: adminlogin.php');
    exit();
}


require_once 'conexao.php';


if (isset($_POST['id'])) {
    $id = $_POST['id'];

    try {
        $sql = "DELETE FROM produtos WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        $_SESSION['mensagem_sucesso'] = "Produto excluído com sucesso!";
        header('Location: painel_admin.php');
        exit();

    } catch (PDOException $e) {
        // Em caso de erro no banco
        $_SESSION['mensagem_erro'] = "Erro ao excluir o produto: " . $e->getMessage();
        header('Location: painel_admin.php');
        exit();
    }
} else {
    // Se o ID não foi enviado, apenas redireciona
    $_SESSION['mensagem_erro'] = "ID do produto não fornecido.";
    header('Location: painel_admin.php');
    exit();
}
?>