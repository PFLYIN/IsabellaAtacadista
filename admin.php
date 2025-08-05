<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Área Administrativa</title>
    <link rel="stylesheet" href="CSS/admin.css">
</head>
<body>
    <div class="container-video-fundo">
        <video autoplay muted loop class="video-superior">
            <source src="Home-Destaque/fundo-home.mp4" type="video/mp4">
        </video>
        <video autoplay muted loop class="video-inferior">
            <source src="Home-Destaque/fundo-home.mp4" type="video/mp4">
        </video>
    </div>

    <div class="container-cadastro">
        <h1>Cadastro de Administrador</h1>
        <form action="processar_admin.php" method="post">
            <div class="form-group">
                <input type="text" id="nome" name="nome" placeholder=" " required>
                <label for="nome">Nome completo</label>
            </div>

            <div class="form-group">
                <input type="text" id="cpf" name="cpf" placeholder=" " required>
                <label for="cpf">CPF</label>
            </div>
            
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder=" " required>
                <label for="email">E-mail corporativo</label>
            </div>

            <div class="form-group">
                <input type="text" id="telefone" name="telefone" placeholder=" " required>
                <label for="telefone">Telefone para contato</label>
            </div>

            <div class="form-group">
                <input type="text" id="codigo_acesso" name="codigo_acesso" placeholder=" " required>
                <label for="codigo_acesso">Código de autorização</label>
            </div>
            
            <div class="form-group">
                <input type="password" id="senha" name="senha" placeholder=" " required>
                <label for="senha">Senha</label>
            </div>
            
            <div class="form-group">
                <input type="password" id="confirmar-senha" name="confirmar-senha" placeholder=" " required>
                <label for="confirmar-senha">Confirme a senha</label>
            </div>
            
            <button type="submit">Registrar Conta</button>
        </form>
        <p>Já tem uma conta admin?</p>
        <a href="login_admin.php" class="login-link">Acessar Sistema</a>
    </div>
</body>
</html>