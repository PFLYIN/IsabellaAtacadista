<?php
// Sempre inicie a sessão no topo dos arquivos que a utilizam
session_start();

// 1. Inclui o arquivo de conexão (usando o caminho da pasta _setup, que é a melhor prática)
require_once 'conexao.php';

// 2. Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // 3. Pega o email e a senha do formulário
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (empty($email) || empty($senha)) {
        $_SESSION['mensagem_erro'] = "Por favor, preencha o email e a senha.";
        header('Location: login.php');
        exit();
    }

    try {
        // 4. Busca no banco de dados se existe um usuário com o email fornecido
        $sql = "SELECT * FROM login_pessoa WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);
        
        $login = $stmt->fetch(PDO::FETCH_ASSOC);

        // 5. Verifica se encontrou um usuário E se a senha está correta
        // (No futuro, usaríamos password_verify() para senhas criptografadas)
        if ($login && $senha === $login['senha']) {
            
            // SUCESSO!
            // Buscamos os dados do cadastro para guardar na sessão
            $sqlCadastro = "SELECT id_cadastro, nome FROM pessoa_cadastro WHERE id_cadastro = :id_cadastro";
            $stmtCadastro = $pdo->prepare($sqlCadastro);
            $stmtCadastro->execute([':id_cadastro' => $login['id_cadastro']]);
            $cadastro = $stmtCadastro->fetch(PDO::FETCH_ASSOC);

            // 6. Guarda as informações importantes do usuário na sessão
            // É isso que "mantém o usuário logado" entre as páginas
            $_SESSION['usuario_logado'] = true;
            $_SESSION['usuario_id'] = $cadastro['id_cadastro'];
            $_SESSION['usuario_nome'] = $cadastro['nome'];

            // 7. Redireciona para a página de perfil
            header('Location: perfil.php');
            exit();
            
        } else {
            // FALHA! Email não encontrado ou senha incorreta.
            $_SESSION['mensagem_erro'] = "Email ou senha inválidos.";
            header('Location: login.php');
            exit();
        }

    } catch (PDOException $e) {
        die("Erro ao consultar o banco de dados: " . $e->getMessage());
    }
} else {
    // Se alguém tentar acessar o arquivo diretamente, redireciona para o login
    header('Location: login.php');
    exit();
}
?>