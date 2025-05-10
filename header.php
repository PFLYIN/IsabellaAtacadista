
    <header class="header-desktop">
        <div class="div-logo">
            <a><img src="LOGO/logoIsabella.png" alt="Isabella Atacadista"></a>
        </div>
        <!--tentar deixar a barra de pesquisa entre a logo e a div-conta-->
            
           
         <!-- teentar deixar do lado do logo, -->
            <div id="div-conta"> 
                <ul id="conta-simples">
                    <li><a href="">Minha conta</a></li>
                    <li><a href="">Criar conta</a></li>
                </ul>
            </div>
    </header>
 <!--Esse é o header que vai ficar na parte de baixo do outro header, como no site -->
    <header class="header-baixo-desktop">    
        <nav class="nav-desktop">
            <ul class="list-desktop">
                <li><a href="index.php">Home</a></li>
                <li><a href="vestidos.php">Vestidos</a></li>
                <li><a href="">Conjuntos</a></li>
                <li><a href="">Sobre Nós</a></li>
                <li><a href="">Contato</a></li>
            </ul>
        </nav>  
    </header>

<style>
    .header-desktop {
    
    width: 90%;
    /* Define a largura do header (ajuste conforme necessário) */
    max-width: 192000px;
    /* Define um limite máximo de largura */
    top: 0;
    display: flex;
    /* Ativa o Flexbox */
    justify-content: space-between;
    /* Espaço entre os elementos */
    align-items: center;
    /* Alinha verticalmente */
    padding: 10px 20px;
    /* Espaçamento interno */
    margin: 0 auto;
    /* Centraliza o header horizontalmente */
    border-radius: 0;
    /* (Opcional) Adiciona bordas arredondadas */
    box-shadow: 0 1px 0 1px rgba(131, 131, 131, 0.075);
    /* (Opcional) Adiciona uma sombra */
}

.div-logo {
    display: flex;
    /* Ativa o Flexbox */
    justify-content: center;
    /* Centraliza horizontalmente */
    align-items: center;
    /* Centraliza verticalmente */
    width: 100%;
    /* Ocupa toda a largura do header */
    height: 210px;
    /* Adiciona altura para centralizar melhor */
    margin-left: 190px;
    /* Move o logo para a direita */
}

.div-logo img {
    max-width: 300px;
    /* Aumenta o tamanho máximo do logo */
    height: auto;
    /* Mantém a proporção da imagem */
}

#conta-simples {
    font-family: serif;
    display: flex;
    /* Alinha os itens horizontalmente */
    list-style: none;
    /* Remove os marcadores padrão */
    text-transform: uppercase;
    /* Deixa o texto em maiúsculas */
    color: black;
    /* Define a cor do texto */
    font-size: 15px;
    /* Define o tamanho da fonte */
    gap: 10px;
    /* Espaçamento entre os itens */
    background-color: #f8f8f8;
    /* (Opcional) Adiciona uma cor de fundo */
    white-space: nowrap;
    /* Impede a quebra de linha */
    text-decoration: none;
    

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