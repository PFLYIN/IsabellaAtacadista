<?php
// Inicia a sessão para que possamos salvar o login do usuário
session_start();

// 1. Carrega a biblioteca do Google
require_once '../vendor/autoload.php';

// 2. Carrega a sua conexão com o banco de dados (IMPORTANTE)
// Substitua 'db_connect.php' pelo nome do seu arquivo de conexão
require_once '../config/db_connect.php'; // <--- VERIFIQUE ESSE CAMINHO

// 3. Cria o cliente Google
$client = new Google_Client();
$client->setAuthConfig('SEU_ARQUIVO_JSON.json'); // <--- TROQUE PELO NOME DO SEU JSON
$client->setRedirectUri('http://localhost/isabellaAtacadista/processors/google-login-callback.php');

// 4. Pega o código de autorização que o Google enviou
if (isset($_GET['code'])) {
    
    try {
        // 5. Troca o código por um token de acesso
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        
        // Se houver um erro, $token terá 'error'
        if (isset($token['error'])) {
            throw new Exception("Erro ao buscar token: " . $token['error_description']);
        }

        // 6. Define o token de acesso no cliente
        $client->setAccessToken($token);

        // 7. Pega as informações do perfil do usuário (Oauth2)
        $google_oauth = new Google_Service_Oauth2($client);
        $user_info = $google_oauth->userinfo->get();

        // 8. Agora você tem os dados do usuário!
        $google_id = $user_info->id;
        $nome_completo = $user_info->name;
        $email = $user_info->email;
        $foto_perfil = $user_info->picture;
        
        // ===================================================================
        // AQUI COMEÇA A SUA LÓGICA DE BANCO DE DADOS
        // ===================================================================
        
        // 9. Verifica se o usuário já existe no seu banco de dados
        // ATENÇÃO: $pdo é um exemplo, use a sua variável de conexão (ex: $conn, $mysqli)
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $usuario = $stmt->fetch();

        if ($usuario) {
            // 10.A. Usuário JÁ EXISTE: Apenas faça o login
            
            // Você pode atualizar o google_id ou a foto se quiser
            $update_stmt = $pdo->prepare("UPDATE usuarios SET google_id = ? WHERE id = ?");
            $update_stmt->execute([$google_id, $usuario['id']]);

            $id_usuario_logado = $usuario['id'];

        } else {
            // 10.B. Usuário NÃO EXISTE: Crie uma nova conta para ele
            
            // Crie uma senha aleatória ou deixe nula, já que ele usará o Google
            // (NÃO salve uma senha em texto puro, use password_hash() se for salvar)
            $senha_placeholder = null; // Ou password_hash(bin2hex(random_bytes(16)), PASSWORD_DEFAULT);
            
            $insert_stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, google_id) VALUES (?, ?, ?, ?)");
            $insert_stmt->execute([$nome_completo, $email, $senha_placeholder, $google_id]);
            
            $id_usuario_logado = $pdo->lastInsertId();
        }

        // 11. Finaliza o Login: Salva o ID do usuário na sessão
        $_SESSION['usuario_id'] = $id_usuario_logado;
        $_SESSION['usuario_nome'] = $nome_completo;

        // 12. Redireciona o usuário para a página de logado (ex: dashboard)
        header('Location: ../dashboard.php'); // <--- MUDE PARA SUA PÁGINA DE LOGADO
        exit();

    } catch (Exception $e) {
        // Se algo der errado, mostre o erro
        die('Erro: '. $e->getMessage());
    }

} else {
    // Se não houver ?code= na URL, algo deu errado
    die('Erro: Nenhum código de autorização recebido.');
}
?>