<body>
<!-- ESTILOS DESKTOP -->
<div id="div-conta"> 
    <ul id="conta-simples">
        <li><a href="carrinho.php">🛒 Carrinho</a></li>
    </ul>
</div>
<header class="header-baixo-desktop">    
    <nav class="nav-desktop">
        <ul class="list-desktop">
            <li><a href="home.php">Home</a></li>
            <li><a href="catalago1.php">Vestidos</a></li>
            <li><a href="catalagoconjunto.php">Conjuntos</a></li>
            <li><a href="blusinhas.php">Blusinhas</a></li>
            <li><a href="sobrenos.php">Sobre Nós</a></li>
            <li><a href="contato.php">Contato</a></li>
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
        /* Garante que fique no canto direito do container */
        width: fit-content;
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
  background:rgba(252, 218, 234, 0.76);
  color: rgb(122, 0, 67);
  padding: 8px 16px;
  border-radius: 12px;
  text-decoration: none;
  font-size: 2.,0rem;
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
        <img src="Logo-Isabella/logo-isabella.png">
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
        <li><a href="carrinho.php">🛒 Carrinho</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="catalago1.php">Vestidos</a></li>
        <li><a href="catalagoconjunto.php">Conjuntos</a></li>
        <li><a href="blusinhas.php">Blusinhas</a></li>
        <li><a href="sobrenos.php">Sobre Nós</a></li>
        <li><a href="contato.php">Contato</a></li>
    </ul>
</nav>

<script>
  const hamburguer = document.getElementById('hamburguer');
  const navMenu = document.getElementById('nav-menu');

  hamburguer.addEventListener('click', () => {
    hamburguer.classList.toggle('active');
    navMenu.classList.toggle('active');
  });
</script>
</body>