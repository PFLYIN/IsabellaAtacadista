<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include "header.php"; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Login de Usuário</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div class="container-login">
        <div class="profile-photo-placeholder">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
            </svg>
        </div>
        
        <h1>Login</h1>

        <?php 
            if (isset($_SESSION['mensagem_sucesso'])) {
                echo '<div class="alerta sucesso">' . htmlspecialchars($_SESSION['mensagem_sucesso']) . '</div>';
                unset($_SESSION['mensagem_sucesso']); 
            }
            if (isset($_SESSION['mensagem_erro'])) {
                echo '<div class="alerta erro">' . htmlspecialchars($_SESSION['mensagem_erro']) . '</div>';
                unset($_SESSION['mensagem_erro']); 
            }
        ?>
        
        <form id="form-login" action="processar_login.php" method="post">
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder=" " required>
                <label for="email">E-mail</label>
            </div>
            
            <div class="form-group">
                <input type="password" id="senha" name="senha" placeholder=" " required>
                <label for="senha">Senha</label>
            </div>
            
            <button type="submit">Entrar</button>
            
            <a href="cadastro.php" class="cadastro-link">Criar conta</a>
        </form>
    </div>

    <script src="js/script.js"></script>

    <?php include "footer.php"; ?>
</body>
</html>