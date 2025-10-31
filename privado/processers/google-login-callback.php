<?php
session_start();
require_once '../../vendor/autoload.php';
require_once '../includes/conexao.php';

$client = new \Google\Client();
$client->setAuthConfig(__DIR__ . '/client_secret_78170903621-pm55rugd36hapl7k9hp58pnav5fqiq9h.apps.googleusercontent.com.json');
$client->setRedirectUri('http://localhost/isabellaAtacadista/privado/processers/google-login-callback.php');

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
        
        // Primeiro verifica se o usuário já existe na tabela google_login
        $stmt = $pdo->prepare("SELECT * FROM google_login WHERE google_id = ? OR email = ?");
        $stmt->execute([$google_id, $email]);
        $google_usuario = $stmt->fetch();

        if ($google_usuario) {
            // Atualiza os dados do Google
            $update_stmt = $pdo->prepare("UPDATE google_login SET nome = ?, foto_perfil = ?, access_token = ? WHERE id_google = ?");
            $update_stmt->execute([$nome_completo, $foto_perfil, json_encode($token), $google_usuario['id_google']]);
            
            if ($google_usuario['id_cadastro']) {
                $id_usuario_logado = $google_usuario['id_cadastro'];
            } else {
                // Se não tem id_cadastro, cria novo cadastro
                $insert_cadastro = $pdo->prepare("INSERT INTO pessoa_cadastro (nome) VALUES (?)");
                $insert_cadastro->execute([$nome_completo]);
                $id_cadastro = $pdo->lastInsertId();
                
                // Atualiza o id_cadastro na tabela google_login
                $update_google = $pdo->prepare("UPDATE google_login SET id_cadastro = ? WHERE id_google = ?");
                $update_google->execute([$id_cadastro, $google_usuario['id_google']]);
                
                $id_usuario_logado = $id_cadastro;
            }
        } else {
            // Insere novo usuário no pessoa_cadastro
            $insert_cadastro = $pdo->prepare("INSERT INTO pessoa_cadastro (nome) VALUES (?)");
            $insert_cadastro->execute([$nome_completo]);
            $id_cadastro = $pdo->lastInsertId();

            // Insere na tabela google_login
            $insert_google = $pdo->prepare("INSERT INTO google_login (google_id, email, nome, foto_perfil, access_token, id_cadastro) VALUES (?, ?, ?, ?, ?, ?)");
            $insert_google->execute([$google_id, $email, $nome_completo, $foto_perfil, json_encode($token), $id_cadastro]);
            
            $id_usuario_logado = $id_cadastro;
        }

        // Busca informações completas do usuário
        $stmt = $pdo->prepare("SELECT pc.*, gl.email, gl.foto_perfil 
                              FROM pessoa_cadastro pc 
                              LEFT JOIN google_login gl ON gl.id_cadastro = pc.id_cadastro 
                              WHERE pc.id_cadastro = ?");
        $stmt->execute([$id_usuario_logado]);
        $usuario_completo = $stmt->fetch();

        $_SESSION['usuario_id'] = $id_usuario_logado;
        $_SESSION['usuario_nome'] = $usuario_completo['nome'];
        $_SESSION['usuario_email'] = $usuario_completo['email'];
        $_SESSION['usuario_foto'] = $usuario_completo['foto_perfil'];
        $_SESSION['login_tipo'] = 'google';

        header('Location: ../paginas/dashboard.php');
        exit();

    } catch (Exception $e) {
        die('Erro: '. $e->getMessage());
    }
} else {
    die('Erro: Nenhum código de autorização recebido.');
}
?>