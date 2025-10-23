<?php
// Inicia a sessão (obrigatório para o OAuth)
session_start();

// 1. Carrega a biblioteca do Google
// A pasta 'vendor' está na raiz do projeto, um nível acima de 'processors'
require_once '../vendor/autoload.php';

// 2. Cria o cliente Google
$client = new Google_Client();

// 3. Carrega as credenciais do seu arquivo JSON
// (Substitua pelo nome real do seu arquivo JSON)
$client->setAuthConfig('SEU_ARQUIVO_JSON.json');

// 4. Define o URI de redirecionamento (TEM QUE SER IDÊNTICO ao que está no JSON)
$client->setRedirectUri('http://localhost/isabellaAtacadista/processors/google-login-callback.php');

// 5. Define o que você quer pedir ao usuário (escopo)
$client->addScope('email'); // Pedir o e-mail
$client->addScope('profile'); // Pedir nome, sobrenome e foto

// 6. Gera a URL de autenticação e redireciona o usuário
$auth_url = $client->createAuthUrl();
header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
exit();

?>