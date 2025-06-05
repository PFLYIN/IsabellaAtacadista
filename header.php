<!-- ESTILOS DESKTOP -->
<header class="header-desktop">
        <div class="div-logo">
            <a><img src="LOGO/logoIsabella.png" alt="Isabella Atacadista"></a>
        </div>
        <!--tentar deixar a barra de pesquisa entre a logo e a div-conta-->
            
           
         <!-- teentar deixar do lado do logo, -->
            <div id="div-conta"> 
                <ul id="conta-simples">
                    <li><a href="carrinho.php">🛒 Carrinho</a></li>
                </ul>
            </div>
    </header>
 <!--Esse é o header que vai ficar na parte de baixo do outro header, como no site -->
    <header class="header-baixo-desktop">    
        <nav class="nav-desktop">
            <ul class="list-desktop">
                <li><a href="index.php">Home</a></li>
                <li><a href="catalago1.php">Vestidos</a></li>
                <li><a href="catalagoconjunto.php">Conjuntos</a></li>
                <li><a href="blusinhas.php">Blusinhas</a></li>
                <li><a href="sobrenos.php">Sobre Nós</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>  
    </header>

<style>
    .header-desktop {
    width: 90%;
    max-width: 1200px; /* Ajuste conforme o design desejado */
    margin: 0 auto; /* Centraliza o header */
    display: flex;
    justify-content: space-between; /* Espaça o logo e a conta */
    align-items: center;
    padding: 10px 20px;
  
}

.div-logo {
     margin-left: 470px;
}

.div-logo img {
    max-width: 250px; /* Ajuste o tamanho do logo */
    height: auto;
}

#conta-simples {
    font-family: 'Oswald', sans-serif; /* Usando a fonte Oswald carregada */
    list-style: none;
    padding: 0; /* Remova padding se não for necessário */
    margin: 0; /* Remova margin se não for necessário */
    display: flex;
    align-items: center;
}

#conta-simples li a {
  color: rgb(122, 0, 67);
  padding: 8px 16px;
  border-radius: 12px;
  text-decoration: none;
  font-size: 1.,9rem;
  border: 2px solid rgb(122, 0, 67);
  transition: all 0.3s ease;
}

#conta-simples li a:hover {
  background: linear-gradient(90deg, #a0005a 0%, #ff00bf 100%);
  color: #fff;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(160,0,90,0.2);
}

.header-baixo-desktop {
    position: sticky;
    display: block;
    
    
    top: 0;
    z-index: 1000;
    /* Garante que o header fique acima de outros elementos */
    background:rgba(255, 230, 242, 0.84);
    /* Branco com 80% de opacidade */
    display: flex;
    /* Ativa o Flexbox */
    justify-content: center;
    /* Centraliza horizontalmente */
    align-items: center;
    /* Alinha verticalmente */
    padding: 10px 0;
    /* Espaçamento interno */
    width: 80%;
    /* Reduz a largura para 80% */
    margin: auto;
    /* Centraliza horizontalmente */
    font-family: Oswald;
}

.nav-desktop .list-desktop {
    display: flex;
    /* Alinha os itens horizontalmente */
    list-style: none;
    /* Remove os marcadores padrão */
    gap: 20px;
    /* Espaçamento entre os itens */
    padding: 0;
    /* Remove o padding padrão */
    margin: 0;

}

.nav-desktop .list-desktop li a {
    text-decoration: none;
    /* Remove o sublinhado */
    color: rgb(122, 0, 67);
    /* Define a cor do texto */
    font-size: 27px;
    /* Define o tamanho da fonte */
    text-transform: uppercase;
    /* Deixa o texto em maiúsculas */
    transition: all 0.3s ease;
    position: relative;
}

.nav-desktop .list-desktop li a:hover {
    color: #ff00bf;
    transform: translateY(-2px);
}

.nav-desktop .list-desktop li a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 3px;
    bottom: -4px;
    left: 50%;
    background: linear-gradient(180deg, #fcdaea 0%, #fff 100%);
    transition: all 0.3s ease;
    transform: translateX(-50%);
    border-radius: 3px;
}

.nav-desktop .list-desktop li a:hover::after {
    width: 100%; 
    background: linear-gradient(90deg, #a0005a 0%, #ff00bf 100%);

}
</style>

<header class="header-mobile">
    <button class="nav-toggle" aria-label="Abrir menu" aria-expanded="false" aria-controls="nav-mobile">
        <span class="hamburger"></span>
    </button>

    <div class="div-logo-mobile">
        <a href="index.php"><img src="LOGO/logoIsabella.png" alt="Isabella Atacadista"></a>
    </div>

    <div class="div-carrinho-mobile">
        <a href="carrinho.php" class="link-carrinho">🛒</a>
    </div>
</header>

<nav id="nav-mobile" class="nav-mobile" data-visible="false">
    <ul class="nav-mobile-list">
        <li><a href="index.php">Home</a></li>
        <li><a href="catalago1.php">Vestidos</a></li>
        <li><a href="catalagoconjunto.php">Conjuntos</a></li>
        <li><a href="blusinhas.php">Blusinhas</a></li>
        <li><a href="sobrenos.php">Sobre Nós</a></li>
        <li><a href="contato.php">Contato</a></li>
    </ul>
</nav>

<header class="header-desktop">
    </header>
<header class="header-baixo-desktop">
    </header>

    <style>
      
/* ESTILOS MOBILE*/
/* Variáveis para fácil customização */
:root {
    --animation-speed: 500ms;
    --animation-timing: cubic-bezier(0.68, -0.55, 0.27, 1.55);
}

.header-mobile {
    display: none; /* Escondido por padrão */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999; /* Garante que fique acima de tudo */
    
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 15px;
    background-color: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px); /* Efeito de vidro fosco para navegadores modernos */
    -webkit-backdrop-filter: blur(10px);
    border-bottom: 1px solid #eee;
}

.div-logo-mobile img {
    max-width: 180px; /* Logo um pouco menor para mobile */
    height: auto;
}

.link-carrinho {
    font-size: 2rem;
    text-decoration: none;
    transition: transform 0.3s ease;
    display: block; /* Para a animação de descida funcionar bem */
}

/* Animação do Carrinho ao Rolar */
.link-carrinho.fixed-cart {
    position: fixed;
    top: 15px; /* Posição na tela após fixar */
    right: 15px;
    transform: translateY(0);
    animation: slideDown 0.5s ease-out;
}

@keyframes slideDown {
    from {
        transform: translateY(-100px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}


/* --- Ícone Hamburger e Animação --- */
.nav-toggle {
    z-index: 1001; /* Fica acima do painel de navegação */
    background: transparent;
    border: none;
    cursor: pointer;
    padding: 10px;
}

.hamburger {
    display: block;
    position: relative;
    width: 24px;
    height: 3px;
    background: #333;
    border-radius: 3px;
    transition: all 0.4s ease-in-out;
}

.hamburger::before,
.hamburger::after {
    content: '';
    position: absolute;
    left: 0;
    width: 100%;
    height: 3px;
    background: #333;
    border-radius: 3px;
    transition: all 0.4s ease-in-out;
}

.hamburger::before { top: -8px; }
.hamburger::after { bottom: -8px; }

/* Animação do hamburger para 'X' quando o menu está aberto */
.nav-toggle[aria-expanded="true"] .hamburger {
    transform: rotate(135deg);
    background: #fff; /* Muda a cor para contrastar com o fundo escuro */
}
.nav-toggle[aria-expanded="true"] .hamburger::before,
.nav-toggle[aria-expanded="true"] .hamburger::after {
    top: 0;
    transform: rotate(90deg);
    background: #fff;
}


/* --- Painel de Navegação e Animações --- */
.nav-mobile {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
    
    background: rgba(10, 10, 10, 0.85);
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);

    display: flex;
    justify-content: center;
    align-items: center;

    /* Animação de Giro (virar) */
    transform-origin: left;
    transform: perspective(1000px) rotateY(-90deg);
    transition: transform var(--animation-speed) ease-in-out;
    visibility: hidden;
}

.nav-mobile[data-visible="true"] {
    transform: perspective(1000px) rotateY(0deg);
    visibility: visible;
}

.nav-mobile-list {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: center;
}

.nav-mobile-list li {
    /* Animação de descida dos itens */
    opacity: 0;
    transform: translateY(-30px);
    transition-property: transform, opacity;
    transition-duration: var(--animation-speed);
    transition-timing-function: var(--animation-timing);
}

.nav-mobile-list a {
    color: #fff;
    text-decoration: none;
    font-size: 2rem;
    font-family: 'Oswald', sans-serif;
    text-transform: uppercase;
    padding: 15px;
    display: block;
    transition: color 0.3s, transform 0.3s;
}

.nav-mobile-list a:hover {
    color: #ff00bf; /* Cor do seu hover no desktop */
    transform: scale(1.1);
}

/* Lógica para animar os itens um após o outro */
.nav-mobile[data-visible="true"] .nav-mobile-list li {
    opacity: 1;
    transform: translateY(0);
}

/* Delay para efeito cascata na entrada */
.nav-mobile[data-visible="true"] .nav-mobile-list li:nth-child(1) { transition-delay: 200ms; }
.nav-mobile[data-visible="true"] .nav-mobile-list li:nth-child(2) { transition-delay: 250ms; }
.nav-mobile[data-visible="true"] .nav-mobile-list li:nth-child(3) { transition-delay: 300ms; }
.nav-mobile[data-visible="true"] .nav-mobile-list li:nth-child(4) { transition-delay: 350ms; }
.nav-mobile[data-visible="true"] .nav-mobile-list li:nth-child(5) { transition-delay: 400ms; }
.nav-mobile[data-visible="true"] .nav-mobile-list li:nth-child(6) { transition-delay: 450ms; }

/* Animação de subida ao fechar (delay reverso) */
.nav-mobile[data-visible="false"] .nav-mobile-list li {
    transition-duration: 250ms; /* Fechamento mais rápido */
}
.nav-mobile[data-visible="false"] .nav-mobile-list li:nth-child(1) { transition-delay: 200ms; }
.nav-mobile[data-visible="false"] .nav-mobile-list li:nth-child(2) { transition-delay: 150ms; }
.nav-mobile[data-visible="false"] .nav-mobile-list li:nth-child(3) { transition-delay: 100ms; }
.nav-mobile[data-visible="false"] .nav-mobile-list li:nth-child(4) { transition-delay: 50ms; }
.nav-mobile[data-visible="false"] .nav-mobile-list li:nth-child(5) { transition-delay: 0ms; }
.nav-mobile[data-visible="false"] .nav-mobile-list li:nth-child(6) { transition-delay: 0ms; }


/* ============================================ */
/* MEDIA QUERIES (Responsivo)      */
/* ============================================ */

/* Telas menores (Mobile) - até 992px */
@media (max-width: 992px) {
    /* Esconde os headers de desktop */
    .header-desktop,
    .header-baixo-desktop {
        display: none;
    }
}

/* Telas maiores (Desktop) - a partir de 993px */
@media (min-width: 993px) {
    /* Esconde os headers de mobile */
    .header-mobile,
    .nav-mobile {
        display: none;
    }
}
    </style>