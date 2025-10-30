<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>

<?php require_once __DIR__ . '/../includes/header.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Login de Usuário</title>
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/login.css">
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/auth-buttons.css">
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-login">
        <div class="profile-photo-placeholder">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
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

        <form id="form-login" action="/IsabellaAtacadista/public/index.php?url=processar_login" method="post">
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder=" " required>
                <label for="email">E-mail</label>
            </div>

            <div class="form-group">
                <input type="password" id="senha" name="senha" placeholder=" " required>
                <label for="senha">Senha</label>
            </div>

            <button type="submit">Entrar</button>

            <div class="divisor">
                <span>ou</span>
            </div>

          <a href="/IsabellaAtacadista/privado/processers/iniciar-login-google.php" class="google-btn">
  <svg class="google-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
    <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.23 9.21 3.24l6.85-6.85C35.4 2.39 29.97 0 24 0 14.64 0 6.5 5.48 2.56 13.44l7.96 6.19C12.13 13.36 17.56 9.5 24 9.5z"/>
    <path fill="#34A853" d="M46.5 24.5c0-1.57-.14-3.09-.41-4.56H24v9.13h12.65c-.55 2.96-2.22 5.48-4.71 7.18l7.26 5.63C43.69 38.02 46.5 31.73 46.5 24.5z"/>
    <path fill="#FBBC05" d="M10.52 28.63c-.52-1.56-.8-3.22-.8-4.93s.28-3.37.8-4.93L2.56 13.44C.9 16.79 0 20.3 0 24s.9 7.21 2.56 10.56l7.96-6.19z"/>
    <path fill="#4285F4" d="M24 48c6.48 0 11.91-2.13 15.88-5.82l-7.26-5.63c-2.01 1.34-4.6 2.13-7.62 2.13-6.44 0-11.87-3.86-14.48-9.34l-7.96 6.19C6.5 42.52 14.64 48 24 48z"/>
  </svg>
  <span>Entrar com Google</span>
</a>

            <a href="/IsabellaAtacadista/public/cadastro" class="cadastro-link">Criar conta</a>
        </form>
    </div>

    <script src="/IsabellaAtacadista/public/js/script.js"></script>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>