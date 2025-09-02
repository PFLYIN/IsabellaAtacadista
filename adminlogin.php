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
    <?php include "header.php"; ?>



    <!-- Container de login -->
    <div class="container-login">
        <div class="profile-photo-placeholder">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                <path d="M16 14v-3h-2v3h-3v2h3v3h2v-3h3v-2h-3z"/>
            </svg>
        </div>
        
        <h1>Admin Login</h1>
        
        <!-- Adicionado o id="form-admin-login" conforme solicitado -->
        <form id="form-admin-login" action="processar_login_admin.php" method="post">
            <div class="form-group">
                <input type="email" id="email" placeholder=" " required>
                <label for="email">E-mail</label>
            </div>
            
            <div class="form-group">
                <input type="password" id="senha" placeholder=" " required>
                <label for="senha">Senha</label>
            </div>
            
            <button type="submit">Entrar como Admin</button>
            
            <a href="login.php" class="cadastro-link">Voltar para Login</a>
        </form>
    </div>

    <!-- Script para manipular o login -->
    <script src="js/script.js"></script>

    <?php include "footer.php"; ?>
</body>
</html>
