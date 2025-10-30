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

        <div class="divisor">
            <span>ou</span>
        </div>

        <a href="/IsabellaAtacadista/privado/processers/iniciar-login-google.php" class="google-btn">
            <svg class="google-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.23 9.21 3.24l6.85-6.85C35.4 2.39 29.97 0 24 0 14.64 0 6.5 5.48 2.56 13.44l7.96 6.19C12.13 13.36 17.56 9.5 24 9.5z" />
                <path fill="#34A853" d="M46.5 24.5c0-1.57-.14-3.09-.41-4.56H24v9.13h12.65c-.55 2.96-2.22 5.48-4.71 7.18l7.26 5.63C43.69 38.02 46.5 31.73 46.5 24.5z" />
                <path fill="#FBBC05" d="M10.52 28.63c-.52-1.56-.8-3.22-.8-4.93s.28-3.37.8-4.93L2.56 13.44C.9 16.79 0 20.3 0 24s.9 7.21 2.56 10.56l7.96-6.19z" />
                <path fill="#4285F4" d="M24 48c6.48 0 11.91-2.13 15.88-5.82l-7.26-5.63c-2.01 1.34-4.6 2.13-7.62 2.13-6.44 0-11.87-3.86-14.48-9.34l-7.96 6.19C6.5 42.52 14.64 48 24 48z" />
            </svg>
            <span>Cadastrar com Google</span>
        </a>
    </div>
    </div>

    <style>

    </style>

    <script src="/IsabellaAtacadista/public/js/script.js"></script>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>