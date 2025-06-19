<body>
<!-- ESTILOS DESKTOP -->
<header class="header-desktop">    
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
    .header-desktop {
    width: 90%;
    max-width: 1200px;
    margin: 20px auto;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding: 5px;
}

#div-conta {
    display: flex;
    justify-content: center;
    width: 100%;
    margin: 10px 0;
}

.header-baixo-desktop {
    width: 90%;
    margin: 10px auto;
    padding: 10px;
    overflow-x: auto; /* Permite rolagem horizontal se necessário */
}

.nav-desktop .list-desktop {
    flex-wrap: wrap;
    justify-content: center;
    padding: 5px;
    gap: 15px;
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

<!-- Novo Header Mobile -->
<!-- Novo Header Mobile -->
<div class="mobile-container">
    <!-- Logo -->
    <div class="mobile-logo">
        <img src="Logo-Isabella/logo-isabella.png">
    </div>
</div>

<div class="mobile-nav">
        <button class="menu-btn" aria-label="Menu">
            <span></span>
        </button>
</div>

<!-- Menu Mobile -->
<nav class="menu-overlay" data-visible="false">
    <button class="close-btn" aria-label="Fechar">×</button>
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

<style>
/* Variáveis */
:root {
    --primary-color: rgb(122, 0, 67);
    --gradient: linear-gradient(90deg, #a0005a 0%, #ff00bf 100%);
    --transition: 0.3s ease;
}

/* Container Mobile */
.mobile-container {
    display: none;
    padding: 15px;
  
    top: 0;
    left: 0;
    width: 100%;
   
    z-index: 1000;
   
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

/* Barra de Navegação */
.mobile-nav {
    position: fixed;
    top: 1px; /* Aumentado de 16px para 25px */
    left: 1px; /* Aumentado de 3px para 15px */
    z-index: 1001;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5px; /* Aumentado de 10px para 15px */
    background: transparent;
}

/* Botão Menu */
.menu-btn {
    background: none;
    border: none;
    padding: 10px;
    cursor: pointer;
}

.menu-btn span,
.menu-btn span::before,
.menu-btn span::after {
    display: block;
    width: 37px; /* Aumentado de 24px para 32px */
    height: 3px; /* Aumentado de 2px para 3px */
    background: var(--primary-color);
    transition: var(--transition);
    position: relative;
}

.menu-btn span::before,
.menu-btn span::after {
    content: '';
    position: absolute;
}

.menu-btn span::before { top: -10px; } /* Aumentado de -8px para -10px */
.menu-btn span::after { bottom: -10px; } /* Aumentado de -8px para -10px */

/* Botão Carrinho */
.cart-btn {
    color: var(--primary-color);
    text-decoration: none;
    padding: 8px 16px;
    border: 2px solid var(--primary-color);
    border-radius: 12px;
    transition: var(--transition);
}

.cart-btn:hover {
    background: var(--gradient);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(160,0,90,0.2);
}

/* Menu Overlay */
.menu-overlay {
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: var(--gradient);
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: var(--transition);
    padding-top: 90px; /* Mesma altura do padding-top do body */
}

.menu-overlay[data-visible="true"] {
    opacity: 1;
    visibility: visible;
}

.menu-overlay ul {
    list-style: none;
    padding: 0;
    text-align: center;
}

.menu-overlay li {
    margin: 20px 0;
    transform: translateY(20px);
    opacity: 0;
    transition: var(--transition);
}

.menu-overlay[data-visible="true"] li {
    transform: translateY(0);
    opacity: 1;
    transition-delay: calc(0.1s * var(--i));
}

.menu-overlay a {
    color: white;
    text-decoration: none;
    font-size: 24px;
    font-family: 'Oswald', sans-serif;
    text-transform: uppercase;
    transition: var(--transition);
}

.menu-overlay a:hover {
    color: #ffe6f2;
    transform: scale(1.1);
    display: inline-block;
}

.close-btn {
    position: absolute;
    top: 20px;
    right: 20px;
    background: none;
    border: none;
    color: white;
    font-size: 32px;
    cursor: pointer;
    transition: var(--transition);
}

.close-btn:hover {
    transform: rotate(90deg);
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
    </style>

<script src="navbar.js"></script>
</body>