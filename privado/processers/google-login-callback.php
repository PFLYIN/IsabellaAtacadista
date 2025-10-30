<?php
session_start();
require_once '../../vendor/autoload.php';
require_once '../includes/conexao.php';

$client = new \Google\Client();
$client->setAuthConfig(__DIR__ . '/client_secret_78170903621-pm55rugd36hapl7k9hp58pnav5fqiq9h.apps.googleusercontent.com.json');
$client->setRedirectUri('http://localhost/isabellaAtacadista/processors/google-login-callback.php');

if (isset($_GET['code'])) {
    try {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        
        if (isset($token['error'])) {
            throw new Exception("Erro ao buscar token: " . $token['error_description']);
        }

        $client->setAccessToken($token);
        $google_oauth = new \Google\Service\Oauth2($client);
        $user_info = $google_oauth->userinfo->get();

        $google_id = $user_info->id;
        $nome_completo = $user_info->name;
        $email = $user_info->email;
        $foto_perfil = $user_info->picture;
        
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $usuario = $stmt->fetch();

        if ($usuario) {
            $update_stmt = $pdo->prepare("UPDATE usuarios SET google_id = ?, foto_perfil = ? WHERE id = ?");
            $update_stmt->execute([$google_id, $foto_perfil, $usuario['id']]);
            $id_usuario_logado = $usuario['id'];
        } else {
            $senha_placeholder = null;
            $insert_stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, google_id, foto_perfil) VALUES (?, ?, ?, ?, ?)");
            $insert_stmt->execute([$nome_completo, $email, $senha_placeholder, $google_id, $foto_perfil]);
            $id_usuario_logado = $pdo->lastInsertId();
        }

        $_SESSION['usuario_id'] = $id_usuario_logado;
        $_SESSION['usuario_nome'] = $nome_completo;
        $_SESSION['usuario_email'] = $email;
        $_SESSION['usuario_foto'] = $foto_perfil;

        header('Location: ../paginas/dashboard.php');
        exit();

    } catch (Exception $e) {
        die('Erro: '. $e->getMessage());
    }
} else {
    die('Erro: Nenhum código de autorização recebido.');
}
?>