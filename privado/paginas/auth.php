<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Se já está logado, redireciona
if (isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado'] === true) {
    header('Location: /IsabellaAtacadista/public/perfil');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Isabella Atacadista</title>
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/auth.css">
</head>
<body>
    <main class="auth-main">
        <div class="auth-wrapper">
            
            <section class="auth-left">
                <div class="brand">
                    <img src="/IsabellaAtacadista/public/imagens/Isabella/logo-isabella.png" alt="Isabella Atacadista">
                </div>
                <header class="welcome">
                    <h2>Bem-vindo à Isabella Atacadista</h2>
                    <p>Acesse sua conta para visualizar produtos exclusivos, preços especiais de atacado e muito mais.</p>
                </header>
            </section>

            <section class="auth-right">
                <div class="auth-card" data-active="login">
                    
                    <div class="tabs">
                        <button class="tab-btn is-active" data-tab="login" type="button">Entrar</button>
                        <button class="tab-btn" data-tab="register" type="button">Cadastrar</button>
                    </div>

                    <!-- TAB LOGIN -->
                    <div class="tab-panel" id="tab-login">
                        <h3 class="card-title">Entrar na sua conta</h3>

                        <form action="/IsabellaAtacadista/public/processar_login" method="POST" id="loginForm">
                            <div class="field">
                                <input type="email" name="email" placeholder="E-mail" autocomplete="email" required>
                                <small class="field-error"></small>
                            </div>

                            <div class="field">
                                <input type="password" name="senha" placeholder="Senha" autocomplete="current-password" required>
                                <small class="field-error"></small>
                            </div>

                            <button type="submit" class="btn-primary">Entrar</button>

                            <div class="auth-separator"><span>ou</span></div>

                            <a href="/IsabellaAtacadista/privado/processers/iniciar-login-google.php" class="google-btn">
                                <img src="https://fonts.gstatic.com/s/i/productlogos/googleg/v6/24px.svg" alt="Google">
                                <span>Entrar com Google</span>
                            </a>

                            <?php if (isset($_SESSION['mensagem_erro'])): ?>
                                <div class="msg msg-error"><?= $_SESSION['mensagem_erro']; unset($_SESSION['mensagem_erro']); ?></div>
                            <?php endif; ?>
                        </form>
                    </div>

                    <!-- TAB CADASTRO -->
                    <div class="tab-panel is-hidden" id="tab-register">
                        <h3 class="card-title">Criar nova conta</h3>

                        <form action="/IsabellaAtacadista/public/processar_cadastro" method="POST" id="registerForm">
                            <div class="field">
                                <input type="text" name="nome" placeholder="Nome completo" autocomplete="name" required>
                                <small class="field-error"></small>
                            </div>

                            <div class="field">
                                <input type="email" name="email" placeholder="E-mail" autocomplete="email" required>
                                <small class="field-error"></small>
                            </div>

                            <div class="field">
                                <input type="password" name="senha" placeholder="Senha" autocomplete="new-password" required>
                                <small class="field-error"></small>
                            </div>

                            <div class="field">
                                <input type="password" name="confirmar_senha" placeholder="Confirmar senha" autocomplete="new-password" required>
                                <small class="field-error"></small>
                            </div>

                            <button type="submit" class="btn-primary">Cadastrar</button>

                            <div class="auth-separator"><span>ou</span></div>

                            <a href="/IsabellaAtacadista/privado/processers/iniciar-login-google.php" class="google-btn">
                                <img src="https://fonts.gstatic.com/s/i/productlogos/googleg/v6/24px.svg" alt="Google">
                                <span>Cadastrar com Google</span>
                            </a>

                            <?php if (isset($_SESSION['mensagem_sucesso'])): ?>
                                <div class="msg msg-success"><?= $_SESSION['mensagem_sucesso']; unset($_SESSION['mensagem_sucesso']); ?></div>
                            <?php endif; ?>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </main>

    <script src="/IsabellaAtacadista/public/js/auth.js"></script>
</body>
</html>
