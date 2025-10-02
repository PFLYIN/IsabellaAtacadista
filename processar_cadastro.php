<?php

session_start();

require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

//valida  
    if (empty($nome) || empty($email) || empty($senha)) {
    
        die("Erro: Por favor, preencha todos os campos obrigatórios.");
    }

    try {
//transação
        $pdo->beginTransaction();

//insere
        $sqlCadastro = "INSERT INTO pessoa_cadastro (nome) VALUES (:nome)";
        $stmtCadastro = $pdo->prepare($sqlCadastro);
        $stmtCadastro->execute([':nome' => $nome]);

        $ultimoIdCadastro = $pdo->lastInsertId();


        $sqlLogin = "INSERT INTO login_pessoa (email, senha, id_cadastro) VALUES (:email, :senha, :id_cadastro)";
        $stmtLogin = $pdo->prepare($sqlLogin);
        $stmtLogin->execute([
            ':email' => $email,
            ':senha' => $senha,
            ':id_cadastro' => $ultimoIdCadastro
        ]);

        $pdo->commit();

        $_SESSION['mensagem_sucesso'] = "Cadastro realizado com sucesso! Por favor, faça o login.";
        header('Location: login.php');
        exit();

    } catch (PDOException $e) {
// qualquer erro no banco
        $pdo->rollBack();

 
        if ($e->getCode() == 23000) {
            die("Erro ao cadastrar: O e-mail informado já está em uso. Por favor, tente outro.");
        } else {

            die("Erro ao salvar no banco de dados: " . $e->getMessage());
        }
    }

} else {
    
    header('Location: cadastro.php');
    exit();
}
?>