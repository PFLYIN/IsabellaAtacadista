<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div class="container-video-fundo">
        <video autoplay muted loop class="video-fundo">
            <source src="Home-Destaque/fundo-home.mp4" type="video/mp4">
        </video>

        <div class="container-login">
            <h1>Acessar conta</h1>
            <form action="login.php" method="post">
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder=" " required>
                    <label for="email">E-mail</label>
                </div>
                
                <div class="form-group">
                    <input type="password" id="senha" name="senha" placeholder=" " required>
                    <label for="senha">Senha</label>
                </div>
                
                <button type="submit">Entrar</button>
            </form>
            <p>Ainda não tem uma conta?</p>
            <a href="cadastro.php" class="cadastro-link">Criar conta</a>
        </div>
    </div>
</body>
</html>
