<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400..900&display=swap" rel="stylesheet">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/cadastro.css">
</head>
<body>
    
     <?php require_once __DIR__ . '/../includes/header.php'; ?>

     
        <div class="container-cadastro">
            <h1>Cadastrar novo Usuário</h1>
            <form action="/IsabellaAtacadista/public/processar_cadastro" method="post" id="form-cadastro">
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
            <a href="/IsabellaAtacadista/public/login" class="login-link">Faça login</a>
                     <!-- botão do google -->
            <a href="/IsabellaAtacadista/public/iniciar-login-google">
                Cadastrar com o Google
            </a>
        </div>
    </div>

    <script src="/IsabellaAtacadista/public/js/script.js"></script>

  <?php require_once __DIR__ . '/../includes/footer.php'; ?>
    
</body>

</html>