<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../includes/conexao.php';

// Segurança: só admins podem editar produtos
if (!isset($_SESSION['admin_logado']) || $_SESSION['admin_logado'] !== true) {
    $_SESSION['mensagem_erro'] = 'Acesso negado. Você precisa ser um administrador.';
    header('Location: /IsabellaAtacadista/public/index.php?url=adminlogin');
    exit();
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
        header('Location: /IsabellaAtacadista/public/index.php?url=painel_admin');
        exit();

    } catch (PDOException $e) {
        $_SESSION['mensagem_erro'] = "Erro ao atualizar o produto: " . $e->getMessage();
        header('Location: /IsabellaAtacadista/public/index.php?url=painel_admin');
        exit();
    }
} else {
    // Se não for POST, volta para o painel
    header('Location: /IsabellaAtacadista/public/index.php?url=painel_admin');
    exit();
}
?>