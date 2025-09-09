<?php
// Inicia a sessão no topo para poder exibir as mensagens de erro
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// O header pode ser incluído aqui, se você tiver um para as páginas de admin
// include "header_admin.php"; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Login Administrativo</title>
    <link rel="stylesheet" href="CSS/adminlogin.css">
</head>
<body>
    <div class="container-video-fundo">
        <video autoplay muted loop class="video-fundo">
            <source src="Home-Destaque/fundo-home.mp4" type="video/mp4">
        </video>

        <div class="container-login">
            <div class="profile-photo-placeholder">
                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="8" r="4"/>
                    <path d="M12 14c-4 0-7 2-7 4v2h14v-2c0-2-3-4-7-4z"/>
                </svg>
            </div>
            <h1>Área Administrativa</h1>

            <?php 
                if (isset($_SESSION['mensagem_erro'])) {
                    echo '<div class="alerta erro">' . htmlspecialchars($_SESSION['mensagem_erro']) . '</div>';
                    unset($_SESSION['mensagem_erro']); // Limpa a mensagem para não aparecer de novo
                }
            ?>
            
            <form action="processar_login_admin.php" method="post" id="form-admin-login">
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder=" " required>
                    <label for="email">E-mail corporativo</label>
                </div>
                
                <div class="form-group">
                    <input type="password" id="senha" name="senha" placeholder=" " required>
                    <label for="senha">Senha</label>
                </div>
                
                <button type="submit">Acessar Sistema</button>
            </form>
            <p>Ainda não tem acesso?</p>
            <a href="admincadastro.php" class="cadastro-link">Solicitar Acesso</a>
        </div>
    </div>
</body>
</html>