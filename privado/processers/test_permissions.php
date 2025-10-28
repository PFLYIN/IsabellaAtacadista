<?php
// Arquivo de teste para verificar permissões e execução PHP
header('Content-Type: text/plain');

echo "Status do PHP neste diretório:\n\n";
echo "1. PHP está executando corretamente\n";
echo "2. Diretório atual: " . __DIR__ . "\n";
echo "3. Permissões do diretório: " . substr(sprintf('%o', fileperms(__DIR__)), -4) . "\n";
echo "4. Usuário do PHP: " . get_current_user() . "\n";
echo "5. PHP version: " . phpversion() . "\n";

// Testa acesso ao arquivo de credenciais
$credentialsFile = __DIR__ . '/client_secret_78170903621-pm55rugd36hapl7k9hp58pnav5fqiq9h.apps.googleusercontent.com.json';
echo "\nArquivo de credenciais:\n";
echo "Existe: " . (file_exists($credentialsFile) ? "Sim" : "Não") . "\n";
echo "Legível: " . (is_readable($credentialsFile) ? "Sim" : "Não") . "\n";

// Testa acesso ao autoload.php
$autoloadFile = __DIR__ . '/../../vendor/autoload.php';
echo "\nAutoload:\n";
echo "Existe: " . (file_exists($autoloadFile) ? "Sim" : "Não") . "\n";
echo "Legível: " . (is_readable($autoloadFile) ? "Sim" : "Não") . "\n";