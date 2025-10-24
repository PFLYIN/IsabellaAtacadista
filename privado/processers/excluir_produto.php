<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 1. SEGURANÇA: Verifica se um admin está logado
if (!isset($_SESSION['admin_logado']) || $_SESSION['admin_logado'] !== true) {
    // Se não estiver logado como admin, expulsa para a página de login de admin
    $_SESSION['mensagem_erro'] = 'Acesso negado. Você precisa ser um administrador.';
    header('Location: /IsabellaAtacadista/public/index.php?url=adminlogin');
    exit();
}

require_once __DIR__ . '/../includes/conexao.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    try {
        $sql = "DELETE FROM produtos WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        $_SESSION['mensagem_sucesso'] = "Produto excluído com sucesso!";
        header('Location: /IsabellaAtacadista/public/index.php?url=painel_admin');
        exit();

    } catch (PDOException $e) {
        // Em caso de erro no banco
        $_SESSION['mensagem_erro'] = "Erro ao excluir o produto: " . $e->getMessage();
        header('Location: /IsabellaAtacadista/public/index.php?url=painel_admin');
        exit();
    }
} else {
    // Se o ID não foi enviado, apenas redireciona
    $_SESSION['mensagem_erro'] = "ID do produto não fornecido.";
    header('Location: /IsabellaAtacadista/public/index.php?url=painel_admin');
    exit();
}
?>