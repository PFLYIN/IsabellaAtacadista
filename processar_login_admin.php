<?php
session_start();

// Inclui o arquivo de conexão
require_once '_setup/conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (empty($email) || empty($senha)) {
        $_SESSION['mensagem_erro'] = "Por favor, preencha todos os campos.";
        header('Location: adminlogin.php');
        exit();
    }

    try {
        // Busca na tabela de login de ADMINS
        $sql = "SELECT * FROM admin_login WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        
        $admin_login = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verifica se encontrou um admin E se a senha está correta
        if ($admin_login && $senha === $admin_login['senha']) {
            
            // SUCESSO!
            // Buscamos os dados do cadastro do admin
            $sqlCadastro = "SELECT id_admincdst, nome FROM admin_cadastro WHERE id_admincdst = :id_admincdst";
            $stmtCadastro = $pdo->prepare($sqlCadastro);
            $stmtCadastro->execute([':id_admincdst' => $admin_login['id_admincdst']]);
            $admin_cadastro = $stmtCadastro->fetch(PDO::FETCH_ASSOC);

            // Guarda as informações do ADMIN na sessão (com nomes diferentes para não confundir com usuário normal)
            $_SESSION['admin_logado'] = true;
            $_SESSION['admin_id'] = $admin_cadastro['id_admincdst'];
            $_SESSION['admin_nome'] = $admin_cadastro['nome'];

            // Redireciona para o painel do admin
            header('Location: painel_admin.php');
            exit();
            
        } else {
            // FALHA!
            $_SESSION['mensagem_erro'] = "Email ou senha de admin inválidos.";
            header('Location: adminlogin.php');
            exit();
        }

    } catch (PDOException $e) {
        die("Erro ao consultar o banco de dados: " . $e->getMessage());
    }
} else {
    // Se alguém tentar acessar o arquivo diretamente, redireciona
    header('Location: adminlogin.php');
    exit();
}
?>