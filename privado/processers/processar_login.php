<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../includes/conexao.php';
//valida

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (empty($email) || empty($senha)) {
        $_SESSION['mensagem_erro'] = "Por favor, preencha o email e a senha.";
        header('Location: login.php');
        exit();
    }

    try {
      //procura
        $sql = "SELECT * FROM login_pessoa WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        
        $login = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($login && $senha === $login['senha']) {
            
            $sqlCadastro = "SELECT id_cadastro, nome FROM pessoa_cadastro WHERE id_cadastro = :id_cadastro";
            $stmtCadastro = $pdo->prepare($sqlCadastro);
            $stmtCadastro->execute([':id_cadastro' => $login['id_cadastro']]);
            $cadastro = $stmtCadastro->fetch(PDO::FETCH_ASSOC);

            $_SESSION['usuario_logado'] = true;
            $_SESSION['usuario_id'] = $cadastro['id_cadastro'];
            $_SESSION['usuario_nome'] = $cadastro['nome'];

            // vai para o perfil
            header('Location: /IsabellaAtacadista/public/index.php?url=perfil');
            exit();
            
        } else {
            $_SESSION['mensagem_erro'] = "Email ou senha inválidos.";
            header('Location: login.php');
            exit();
        }

    } catch (PDOException $e) {
        die("Erro ao consultar o banco de dados: " . $e->getMessage());
    }
} else {
 
    header('Location: login.php');
    exit();
}
?>