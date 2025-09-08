<?php


// Inicia a sessão para que possamos usar mensagens de feedback
session_start();

echo "<pre>";
var_dump($_POST);
die("</pre><p>Teste: Acima estão os dados recebidos pelo formulário.</p>");

// 1. Inclui nosso arquivo de conexão com o banco de dados
require_once 'conexao.php';

// 1. Inclui nosso arquivo de conexão com o banco de dados
require_once 'conexao.php';

// 2. Verifica se o formulário foi realmente enviado (método POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // 3. Pega os dados do formulário de forma segura
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? ''; // ATENÇÃO: Por enquanto, salvamos a senha sem criptografia.

    // 4. Validação simples para ver se os campos não estão vazios
    if (empty($nome) || empty($email) || empty($senha)) {
        // Se algo estiver faltando, morre e exibe uma mensagem.
        die("Erro: Por favor, preencha todos os campos obrigatórios.");
    }

    try {
        // 5. Inicia uma transação: ou tudo funciona, ou nada é salvo.
        $pdo->beginTransaction();

        // 6. Insere os dados na tabela 'pessoa_cadastro'
        $sqlCadastro = "INSERT INTO pessoa_cadastro (nome) VALUES (:nome)";
        $stmtCadastro = $pdo->prepare($sqlCadastro);
        $stmtCadastro->execute([':nome' => $nome]);

        // Pega o ID da pessoa que acabamos de cadastrar
        $ultimoIdCadastro = $pdo->lastInsertId();

        // 7. Insere os dados na tabela 'login_pessoa', ligando com o ID do cadastro
        $sqlLogin = "INSERT INTO login_pessoa (email, senha, id_cadastro) VALUES (:email, :senha, :id_cadastro)";
        $stmtLogin = $pdo->prepare($sqlLogin);
        $stmtLogin->execute([
            ':email' => $email,
            ':senha' => $senha,
            ':id_cadastro' => $ultimoIdCadastro
        ]);

        // 8. Se chegou até aqui sem erros, confirma as alterações no banco
        $pdo->commit();

        // 9. Guarda uma mensagem de sucesso na sessão e redireciona para a página de login
        $_SESSION['mensagem_sucesso'] = "Cadastro realizado com sucesso! Por favor, faça o login.";
        header('Location: login.php');
        exit();

    } catch (PDOException $e) {
        // 10. Se deu qualquer erro no banco, desfaz tudo o que foi feito
        $pdo->rollBack();

        // Verifica se o erro é de email duplicado (código 23000 do SQL)
        if ($e->getCode() == 23000) {
            die("Erro ao cadastrar: O e-mail informado já está em uso. Por favor, tente outro.");
        } else {
            // Para outros erros de banco de dados
            die("Erro ao salvar no banco de dados: " . $e->getMessage());
        }
    }

} else {
    // Se alguém tentar acessar este arquivo pela URL, redireciona para o cadastro
    header('Location: cadastro.php');
    exit();
}
?>