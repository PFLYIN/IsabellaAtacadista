<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Erro 404 | Isabella Atacadista</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: linear-gradient(135deg, #ffe4f0, #ffd6eb);
        font-family: 'Segoe UI', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        overflow: hidden;
        position: relative;
    }

    /* Logo no fundo */
    body::before {
        content: "";
        background: url('1745100544872.png') no-repeat center;
        background-size: 480px;
        opacity: 0.05;
        filter: grayscale(100%);
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    /* Oculta header se carregar */
    header, nav, .header, .menu, .navbar, .conta-simples {
        display: none !important;
    }

    /* Oculta o botão carrinho */
    .carrinho, #div-conta {
        display: none !important;
    }

    .erro-container {
  
        padding: 45px;
        border-radius: 20px;
        box-shadow: 0 8px 20px rgba(160, 0, 90, 0.18);
        max-width: 550px;
        z-index: 2;
        text-align: center;
    }

    .erro-container h1 {
        font-size: 4.2rem;
        color: rgb(122, 0, 67);
        margin-bottom: 8px;
        letter-spacing: -1px;
    }

    .erro-container h2 {
        font-size: 1.8rem;
        color: #a0005a;
        margin-bottom: 18px;
        font-weight: 500;
    }

    .erro-container p {
        font-size: 1rem;
        color: #444;
        line-height: 1.6;
        margin-bottom: 30px;
    }

    .erro-container p strong {
        color: #a0005a;
    }

    .botoes {
        display: flex;
        gap: 16px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .botoes a {
        background: rgba(252, 218, 234, 0.76);
        color: rgb(122, 0, 67);
        padding: 10px 22px;
        border-radius: 12px;
        text-decoration: none;
        font-size: 1rem;
        border: 2px solid rgb(122, 0, 67);
        transition: all 0.3s ease;
    }

    .botoes a:hover {
        background: linear-gradient(90deg, #a0005a 0%, #ff00bf 100%);
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 5px 12px rgba(160, 0, 90, 0.25);
    }

    .erro-container small {
        display: block;
        margin-top: 22px;
        color: #666;
        font-size: 0.85rem;
    }
</style>
</head>
<body>

<div class="erro-container">
    <h1>Erro 404</h1>
    <h2>Página não encontrada</h2>
    <p>
        Desculpe, a página que você procurou não existe.<br><br>
        <strong>Possíveis causas:</strong><br>
        - Link incorreto ou página removida.<br>
        - Erro de digitação na URL.<br><br>
        <strong>O que fazer:</strong><br>
        - Volte à página inicial.<br>
        - Ou fale com nosso suporte para te ajudar.
    </p>

    <div class="botoes">
        <a href="home.php">🏠 Voltar ao Início</a>
        <a href="contato.php">📞 Falar com o Suporte</a>
    </div>

    <small>Estamos sempre prontos para te ajudar!</small>
</div>

</body>
</html>
