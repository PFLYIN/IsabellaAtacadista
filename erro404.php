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
        display: block;
        min-height: 100vh;
        width: 100vw;
        overflow-x: hidden;
        position: relative;
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
        max-width: 1100px;
        width: 95vw;
        z-index: 2;
        text-align: center;
        margin: 40px auto 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        box-sizing: border-box;
    }

    .erro-container h1 {
        font-size: 4.2rem;
        color: rgb(122, 0, 67);
        margin-bottom: 8px;
        letter-spacing: -1px;
    }

    .erro-container h2 {
        font-size: 2.2rem;
        color: #a0005a;
        margin-bottom: 32px;
        font-weight: 600;
    }

    .erro-infos {
        display: flex;
        gap: 40px;
        width: 100%;
        justify-content: center;
        margin-bottom: 32px;
    }
    .erro-bloco {
        flex: 1 1 0;
        background: #fff0fa;
        border-radius: 18px;
        box-shadow: 0 2px 10px rgba(160,0,90,0.07);
        padding: 38px 32px;
        min-width: 280px;
        max-width: 480px;
        text-align: left;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    .erro-bloco h3 {
        font-size: 1.5rem;
        color: #a0005a;
        margin-bottom: 18px;
        font-weight: 600;
    }
    .erro-bloco p, .erro-bloco ul {
        font-size: 1.15rem;
        color: #3a0030;
        margin-bottom: 12px;
        line-height: 1.7;
    }
    .erro-bloco ul {
        padding-left: 22px;
    }
    .erro-bloco li {
        margin-bottom: 10px;
    }

    .botoes {
        display: flex;
        gap: 24px;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 18px;
    }
    .botoes a {
        background: rgba(252, 218, 234, 0.76);
        color: rgb(122, 0, 67);
        padding: 14px 32px;
        border-radius: 14px;
        text-decoration: none;
        font-size: 1.15rem;
        border: 2px solid rgb(122, 0, 67);
        transition: all 0.3s ease;
        font-weight: 500;
    }
    .botoes a:hover {
        background: linear-gradient(90deg, #a0005a 0%, #ff00bf 100%);
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 5px 12px rgba(160, 0, 90, 0.25);
    }

    .erro-container small {
        display: block;
        margin-top: 32px;
        color: #666;
        font-size: 1rem;
    }

    @media (max-width: 900px) {
        .erro-infos {
            flex-direction: column;
            gap: 24px;
            align-items: center;
        }
        .erro-bloco {
            width: 100%;
            max-width: 100%;
        }
    }

    .container-logo {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 18px;
        margin-top: 18px;
        position: static;
        background: transparent;
        pointer-events: none;
    }
    .container-logo img {
        max-width: 180px;
        width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
        pointer-events: auto;
    }
</style>
</head>
<body>

<div class="container-logo">
    <img src="Logo-Isabella/logo-isabella.png" alt="Logo Isabella">
</div>

<div class="erro-container">
    <h1>Erro 404</h1>
    <h2>Página não encontrada</h2>
    <div class="erro-infos">
        <div class="erro-bloco">
            <h3>Por que você está vendo esta página?</h3>
            <p>
                O endereço que você tentou acessar não foi encontrado em nosso site. Isso pode acontecer por alguns motivos:
            </p>
            <ul>
                <li><strong>Página removida ou movida:</strong> O conteúdo pode ter sido excluído ou alterado de lugar.</li>
                <li><strong>Erro de digitação:</strong> O endereço pode ter sido digitado incorretamente na barra do navegador.</li>
                <li><strong>Link desatualizado:</strong> Você pode ter clicado em um link antigo ou salvo nos favoritos.</li>
            </ul>
        </div>
        <div class="erro-bloco">
            <h3>Como resolver?</h3>
            <p>
                Não se preocupe! Veja o que você pode fazer para continuar navegando:
            </p>
            <ul>
                <li><strong>Voltar para a página inicial:</strong> Clique no botão abaixo para retornar ao início do site.</li>
                <li><strong>Falar com o suporte:</strong> Se precisar de ajuda, nosso time está pronto para te atender.</li>
                <li><strong>Verifique o endereço:</strong> Confira se o link está correto ou tente pesquisar novamente.</li>
            </ul>
        </div>
    </div>
    <div class="botoes">
        <a href="home.php">🏠 Voltar ao Início</a>
        <a href="contato.php">📞 Falar com o Suporte</a>
    </div>
    <small>Estamos sempre prontos para te ajudar! Se precisar, entre em contato conosco.</small>
</div>

</body>
</html>
    <small>Estamos sempre prontos para te ajudar! Se precisar, entre em contato conosco.</small>
</div>

</body>
</html>
