
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
                <li><a href="">Conjuntos</a></li>
                <li><a href="">Sobre Nós</a></li>
                <li><a href="">Contato</a></li>
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
    text-decoration: none;
    color: #333; /* Cor mais escura para melhor contraste */
    padding: 8px 15px;
    border: 1px solid transparent;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

#conta-simples li a:hover {
    background-color: rgb(122, 0, 67); /* Cor de destaque do seu site */
    color: white;
}

.header-baixo-desktop {
    position: sticky;
    display: block;
    
    top: 0;
    z-index: 1000;
    /* Garante que o header fique acima de outros elementos */
    background: rgba(255, 255, 255, 0.938);
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

}
</style>