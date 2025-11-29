<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$usuario_foto = $_SESSION['usuario_foto'] ?? '';
$usuario_nome = $_SESSION['usuario_nome'] ?? '';
$usuario_logado = $_SESSION['usuario_logado'] ?? false;
$primeiro_nome = $usuario_nome ? explode(' ', trim($usuario_nome))[0] : '';
?>
<body>
<!-- ESTILOS DESKTOP -->
<div id="div-conta"> 
    <ul id="conta-simples">
        <!-- Botão Perfil Desktop -->
        <li>
            <a href="/IsabellaAtacadista/public/perfil" class="btn-perfil-header2" title="<?= $usuario_logado ? 'Meu Perfil' : 'Entrar' ?>">
                <?php if ($usuario_logado && $usuario_foto): ?>
                    <img src="<?= htmlspecialchars($usuario_foto) ?>" alt="Perfil" class="perfil-foto-h2">
                <?php elseif ($usuario_logado && $primeiro_nome): ?>
                    <div class="perfil-placeholder-h2"><?= strtoupper(substr($primeiro_nome, 0, 1)) ?></div>
                <?php else: ?>
                    <svg class="perfil-icon-h2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="8" r="4" stroke="currentColor" stroke-width="2"/>
                        <path d="M4 20C4 16.6863 6.68629 14 10 14H14C17.3137 14 20 16.6863 20 20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                <?php endif; ?>
            </a>
        </li>
        
        <!-- Botão Carrinho Desktop -->
        <li>
            <a href="/IsabellaAtacadista/public/carrinho" class="btn-carrinho-header2" title="Meu Carrinho">
                <svg class="carrinho-icon-h2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 3H5L5.4 5M5.4 5H19L17 13H7L5.4 5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="9" cy="19" r="1.5" fill="currentColor"/>
                    <circle cx="16" cy="19" r="1.5" fill="currentColor"/>
                </svg>
                <span class="carrinho-contador-h2" id="carrinho-contador-h2">0</span>
            </a>
        </li>
    </ul>
</div>
<header class="header-baixo-desktop">    
    <nav class="nav-desktop">
        <ul class="list-desktop">
            <li><a href="/IsabellaAtacadista/public/home">Home</a></li>
            <li><a href="/IsabellaAtacadista/public/vestidos1">Vestidos</a></li>
            <li><a href="/IsabellaAtacadista/public/conjuntos">Conjuntos</a></li>
            <li><a href="/IsabellaAtacadista/public/blusinhas">Blusinhas</a></li>
            <li><a href="/IsabellaAtacadista/public/sobre-nos">Sobre Nós</a></li>
            <li><a href="/IsabellaAtacadista/public/contato">Contato</a></li>
        </ul>
    </nav>  
</header>

<style>
   
#div-conta {
        position: sticky;
        float: right;
        right: 0;
        z-index: 1200;
        top: 0px;
        padding: 20px 20px;
        border-bottom-left-radius: 16px;
        display: flex;
        align-items: center;
        margin-left: auto;
        width: fit-content;
    }

#conta-simples {
    font-family: 'Oswald', sans-serif;
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 15px;
}

/* Botões no estilo do header principal */
.btn-perfil-header2,
.btn-carrinho-header2 {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: linear-gradient(135deg, rgba(212, 82, 110, 0.1), rgba(166, 0, 79, 0.1));
    border: 2px solid rgba(212, 82, 110, 0.3);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    text-decoration: none;
}

.btn-perfil-header2:hover,
.btn-carrinho-header2:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(212, 82, 110, 0.3);
    border-color: rgb(212, 82, 110);
}

.perfil-foto-h2 {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
}

.perfil-placeholder-h2 {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, rgb(212, 82, 110), rgb(166, 0, 79));
    color: white;
    font-weight: 700;
    font-size: 18px;
    font-family: 'Oswald', sans-serif;
}

.perfil-icon-h2,
.carrinho-icon-h2 {
    width: 24px;
    height: 24px;
    color: rgb(122, 0, 67);
}

.carrinho-contador-h2 {
    position: absolute;
    top: -5px;
    right: -5px;
    background: rgb(122, 0, 67);
    color: white;
    font-size: 11px;
    font-weight: 700;
    font-family: 'Oswald', sans-serif;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
}

.carrinho-contador-h2.vazio {
    display: none;
}

.btn-carrinho-header2:hover .carrinho-contador-h2 {
    transform: scale(1.15);
}

.header-baixo-desktop {
    position: sticky;
    display: block;
    top: 0;
    z-index: 1000;
    background:rgba(255, 230, 242, 0.84);
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px 0;
    width: 70%;
    margin: auto;
    font-family: Oswald;
    margin-left: 200px; /* Adicionado para jogar para a esquerda */
}

.nav-desktop .list-desktop {
    display: flex;
    /* Alinha os itens horizontalmente */
    list-style: none;
    /* Remove os marcadores padrão */
    gap: 20px;
    /* Espaçamento entre os itens */
   
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
    border-radius: 5px;
}

.nav-desktop .list-desktop li a:hover::after {
    width: 100%; 
    background: linear-gradient(90deg, #a0005a 0%, #ff00bf 100%);

}

/* Hamburguer para animação mobile */
.hamburguer {
  width: 36px;
  height: 28px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  cursor: pointer;
  z-index: 2100;
  background: rgba(255, 137, 204, 0.53);
  border-radius: 10px;
  box-shadow: none;
  padding: 0;
  border: none;
  transition: box-shadow 0.3s;
}
.hamburguer span {
  height: 4px;
  width: 100%;
  background-color: #a0005a;
  border-radius: 5px;
  transition: 0.4s;
  display: block;
}
.hamburguer.active span:nth-child(1) {
  transform: rotate(45deg) translate(6px, 6px);
}
.hamburguer.active span:nth-child(2) {
  opacity: 0;
}
.hamburguer.active span:nth-child(3) {
  transform: rotate(-45deg) translate(7px, -7px);
}

/* Nav Menu animado (usado para mobile) */
.nav-menu {
  position: fixed;
  top: 0;
  right: -50vw;
  width: 50vw;
  min-width: 220px;
  max-width: 400px;
  height: 100vh;
  background: linear-gradient(90deg, #a0005a 0%, #ff00bf 100%);
  box-shadow: -8px 0 32px rgba(160,0,90,0.13);
  border-radius: 12px 0 0 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: right 0.5s cubic-bezier(.77,0,.18,1);
  z-index: 2000;
  opacity: 1;
  pointer-events: auto;
}
.nav-menu.active {
  right: 0;
}
.nav-menu ul {
  list-style: none;
  text-align: center;
  width: 100%;
  padding: 0 10px;
}
.nav-menu ul li {
  margin: 28px 0;
  opacity: 0;
  transform: translateX(60px);
  transition: opacity 0.5s, transform 0.5s;
}
.nav-menu.active ul li {
  opacity: 1;
  transform: translateX(0);
}
.nav-menu.active ul li:nth-child(1) { transition-delay: 0.08s; }
.nav-menu.active ul li:nth-child(2) { transition-delay: 0.16s; }
.nav-menu.active ul li:nth-child(3) { transition-delay: 0.24s; }
.nav-menu.active ul li:nth-child(4) { transition-delay: 0.32s; }
.nav-menu.active ul li:nth-child(5) { transition-delay: 0.40s; }
.nav-menu.active ul li:nth-child(6) { transition-delay: 0.48s; }
.nav-menu.active ul li:nth-child(7) { transition-delay: 0.56s; }
.nav-menu ul li a {
  text-decoration: none;
  color: #fff;
  font-size: 1.35rem;
  font-family: 'Oswald', Arial, sans-serif;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 600;
  padding: 12px 28px;
  border-radius: 12px;
  display: inline-block;
  background: rgba(255,255,255,0.07);
  border: 2px solid rgba(255,255,255,0.18);
  box-shadow: 0 2px 8px rgba(160,0,90,0.06);
  transition: background 0.3s, color 0.3s, transform 0.2s;
}
.nav-menu ul li a:hover {
  background: #fff;
  color: #a0005a;
  transform: scale(1.08);
  border-color: #fff;
}

/* Container Mobile */
.mobile-container {
  display: none;
  padding: 15px;
  width: 100%;
  z-index: 1000;
  background: transparent;
  position: relative;
}
.mobile-logo {
  text-align: center;
  margin-bottom: 15px;
  display: block;
}
.mobile-logo img {
  max-width: 180px;
  height: auto;
}

/* Botões Mobile no Header2 */
.mobile-header-buttons-h2 {
  position: absolute;
  right: 15px;
  top: 15px;
  display: flex;
  gap: 12px;
  align-items: center;
}

.btn-perfil-mobile-h2,
.btn-carrinho-mobile-h2 {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(212, 82, 110, 0.1), rgba(166, 0, 79, 0.1));
  border: 2px solid rgba(212, 82, 110, 0.3);
  transition: all 0.3s ease;
  position: relative;
  text-decoration: none;
}

.btn-perfil-mobile-h2:active,
.btn-carrinho-mobile-h2:active {
  transform: scale(0.95);
  background: rgba(212, 82, 110, 0.2);
}

.btn-carrinho-mobile-h2 .carrinho-contador-h2 {
  position: absolute;
  top: -5px;
  right: -5px;
  background: rgb(122, 0, 67);
  color: white;
  font-size: 10px;
  font-weight: 700;
  font-family: 'Oswald', sans-serif;
  width: 18px;
  height: 18px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
  border: 2px solid rgba(255, 255, 255, 0.9);
}

/* Novo container só para o hamburguer */
.mobile-hamburguer-container {
  display: none;
}

@media (max-width: 700px) {
  .mobile-container { display: block; }
  .mobile-hamburguer-container {
    display: flex;
    position: sticky;
    top: 20px;
    left: 0;
    z-index: 2100;
    width: 100%;
    justify-content: flex-start;
    background: transparent;
  }
  .hamburguer {
    margin-left: 20px;
    margin-top: 0;
    align-self: flex-start;
    position: static;
  }
  #div-conta { display: none; }
  .header-baixo-desktop { display: none; }
  .nav-menu { display: flex; }
}
@media (min-width: 701px) {
  .hamburguer, .nav-menu, .mobile-container, .mobile-hamburguer-container { display: none !important; }
}

/* Media Queries */
@media (max-width: 1024px) {
  .nav-desktop .list-desktop li a {
    font-size: 22px;
    padding: 5px 8px;
  }
}

@media (max-width: 768px) {
  .nav-desktop .list-desktop {
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
  }

  .nav-desktop .list-desktop li a {
    font-size: 20px;
  }

  .header-desktop {
    width: 95%;
    padding: 5px;
  }
}

/* Ajuste do breakpoint para mobile */
@media (max-width: 700px) {
  .mobile-container { 
    display: block; 
  }
  
  .header-desktop,
  .header-baixo-desktop { 
    display: none; 
  }
}

@media (max-width:450px) {
    .mobile-container { display: block; }
    .header-desktop,
    .header-baixo-desktop { display: none; }
}

/* Esconde nav mobile e overlay no desktop */
.mobile-nav,
.menu-overlay {
    display: none;
}

/* Mostra nav mobile e overlay só no mobile */
@media (max-width: 700px) {
    .mobile-container { display: block; }
    .mobile-nav { display: flex !important; }
    .menu-overlay { display: flex !important; }
}

@media (max-width:450px) {
    .mobile-container { display: block; }
    .mobile-nav { display: flex !important; }
    .menu-overlay { display: flex !important; }
}
    </style>

<!-- Novo Header Mobile -->
<div class="mobile-container">
    <div class="mobile-logo">
        <img src="/IsabellaAtacadista/public/imagens/Isabella/logo-isabella.png">
    </div>
    <!-- Botões Mobile -->
    <div class="mobile-header-buttons-h2">
        <!-- Botão Perfil Mobile -->
        <a href="/IsabellaAtacadista/public/perfil" class="btn-perfil-mobile-h2" title="<?= $usuario_logado ? 'Meu Perfil' : 'Entrar' ?>">
            <?php if ($usuario_logado && $usuario_foto): ?>
                <img src="<?= htmlspecialchars($usuario_foto) ?>" alt="Perfil" class="perfil-foto-h2">
            <?php elseif ($usuario_logado && $primeiro_nome): ?>
                <div class="perfil-placeholder-h2"><?= strtoupper(substr($primeiro_nome, 0, 1)) ?></div>
            <?php else: ?>
                <svg class="perfil-icon-h2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="8" r="4" stroke="currentColor" stroke-width="2"/>
                    <path d="M4 20C4 16.6863 6.68629 14 10 14H14C17.3137 14 20 16.6863 20 20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            <?php endif; ?>
        </a>
        
        <!-- Botão Carrinho Mobile -->
        <a href="/IsabellaAtacadista/public/carrinho" class="btn-carrinho-mobile-h2" title="Meu Carrinho">
            <svg class="carrinho-icon-h2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 3H5L5.4 5M5.4 5H19L17 13H7L5.4 5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="9" cy="19" r="1.5" fill="currentColor"/>
                <circle cx="16" cy="19" r="1.5" fill="currentColor"/>
            </svg>
            <span class="carrinho-contador-h2" id="carrinho-contador-mobile-h2">0</span>
        </a>
    </div>
</div>

<div class="mobile-hamburguer-container">
    <div id="hamburguer" class="hamburguer">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<nav id="nav-menu" class="nav-menu">
    <ul>
        <li><a href="/IsabellaAtacadista/public/carrinho">🛒 Carrinho</a></li>
        <li><a href="/IsabellaAtacadista/public/home">Home</a></li>
        <li><a href="/IsabellaAtacadista/public/vestidos1">Vestidos</a></li>
        <li><a href="/IsabellaAtacadista/public/conjuntos">Conjuntos</a></li>
        <li><a href="/IsabellaAtacadista/public/blusinhas">Blusinhas</a></li>
        <li><a href="/IsabellaAtacadista/public/sobre-nos">Sobre Nós</a></li>
        <li><a href="/IsabellaAtacadista/public/contato">Contato</a></li>
    </ul>
</nav>

<script>
  const hamburguer = document.getElementById('hamburguer');
  const navMenu = document.getElementById('nav-menu');

  hamburguer.addEventListener('click', () => {
    hamburguer.classList.toggle('active');
    navMenu.classList.toggle('active');
  });

  // Atualiza contador do carrinho
  function atualizarContadorCarrinho() {
    const carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    const totalItens = carrinho.reduce((total, item) => total + (parseInt(item.quantidade) || 0), 0);
    
    // Desktop
    const contadorElement = document.getElementById('carrinho-contador-h2');
    if (contadorElement) {
      contadorElement.textContent = totalItens;
      if (totalItens === 0) {
        contadorElement.classList.add('vazio');
      } else {
        contadorElement.classList.remove('vazio');
      }
    }
    
    // Mobile
    const contadorMobileElement = document.getElementById('carrinho-contador-mobile-h2');
    if (contadorMobileElement) {
      contadorMobileElement.textContent = totalItens;
      if (totalItens === 0) {
        contadorMobileElement.classList.add('vazio');
      } else {
        contadorMobileElement.classList.remove('vazio');
      }
    }
  }

  // Atualiza ao carregar a página
  document.addEventListener('DOMContentLoaded', atualizarContadorCarrinho);

  // Atualiza quando o localStorage mudar
  window.addEventListener('storage', function(e) {
    if (e.key === 'carrinho') {
      atualizarContadorCarrinho();
    }
  });

  // Verifica periodicamente
  setInterval(atualizarContadorCarrinho, 1000);
</script>
</body>