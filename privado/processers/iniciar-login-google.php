<?php
// Habilita a exibição de erros para debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Inicia a sessão (obrigatório para o OAuth)
session_start();

try {
    // 1. Carrega a biblioteca do Google
    require_once __DIR__ . '/../../vendor/autoload.php';

    // 2. Cria o cliente Google usando o namespace correto
    $client = new \Google\Client();

    // 3. Carrega as credenciais do seu arquivo JSON
    $client->setAuthConfig(__DIR__ . '/client_secret_78170903621-pm55rugd36hapl7k9hp58pnav5fqiq9h.apps.googleusercontent.com.json');

    // 4. Define o URI de redirecionamento (TEM QUE SER IDÊNTICO ao que está no JSON)
    $client->setRedirectUri('http://localhost/isabellaAtacadista/processors/google-login-callback.php');

    // 5. Define o que você quer pedir ao usuário (escopo)
    $client->addScope('email'); // Pedir o e-mail
    $client->addScope('profile'); // Pedir nome, sobrenome e foto

    // 6. Gera a URL de autenticação e redireciona o usuário
    $auth_url = $client->createAuthUrl();
    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
    exit();
} catch (Exception $e) {
    // Redireciona de volta para a página de login com mensagem de erro
    $_SESSION['mensagem_erro'] = "Erro ao iniciar login com Google: " . $e->getMessage();
    header('Location: /IsabellaAtacadista/public/index.php?url=login');
    exit();
}
?>