<?php include "header.php"; ?>

<link rel="stylesheet" href="CSS/login.css">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Container de vídeo de fundo -->
<div class="container-video-fundo">
    <video autoplay muted loop class="video-superior">
        <source src="videos/fundo-login.mp4" type="video/mp4">
    </video>
    <video autoplay muted loop class="video-inferior">
        <source src="videos/fundo-login.mp4" type="video/mp4">
    </video>
</div>

<!-- Container de login -->
<div class="container-login">
    <div class="profile-photo-placeholder">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
        </svg>
    </div>
    
    <h1>Login</h1>
    
    <form id="form-login">
        <div class="form-group">
            <input type="email" id="email" placeholder=" " required>
            <label for="email">E-mail</label>
        </div>
        
        <div class="form-group">
            <input type="password" id="senha" placeholder=" " required>
            <label for="senha">Senha</label>
        </div>
        
        <button type="submit">Entrar</button>
        
        <a href="cadastro.php" class="cadastro-link">Criar conta</a>
    </form>
</div>

<!-- Script para manipular o login -->
<script src="js/script.js"></script>

<?php include "footer.php"; ?>
