<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400..900&display=swap" rel="stylesheet">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="CSS/cadastro.css">
</head>
<body>
    
    <div class="container-video-fundo">
        <video autoplay muted loop class="video-fundo">
            <source src="Home-Destaque/fundo-home.mp4" type="video/mp4">
        </video>

 
        <div class="container-cadastro">
            <h1>Cadastrar novo usuário</h1>
            <form action="cadastro.php" method="post">
                <div class="form-group">
                    <input type="text" id="nome" name="nome" placeholder=" " required>
                    <label for="nome">Digite um nome de usuário</label>
                </div>
                
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder=" " required>
                    <label for="email">Insira o seu email</label>
                </div>
                
                <div class="form-group">
                    <input type="password" id="senha" name="senha" placeholder=" " required>
                    <label for="senha">Digite uma senha</label>
                </div>
                
                <div class="form-group">
                    <input type="password" id="confirmar-senha" name="confirmar-senha" placeholder=" " required>
                    <label for="confirmar-senha">Confirme a sua senha</label>
                </div>
                
                <button type="submit">Cadastrar</button>
            </form>
            <p>Já tem uma conta?</p>
            <a href="login.php" class="login-link">Faça login</a>
        </div>
    </div>
    
</body>

</html>