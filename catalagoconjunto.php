<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400..900&display=swap" rel="stylesheet">
  <title>Catálogo dos Conjuntos</title>
  <link rel="stylesheet" href="CSS/conjunto1.css">
</head>
<body>
<div class="container">
  <h1 class="titulo"> As Melhores Coleções de Conjunto </h1>
  <p class="descricao-catalogo">
    Explore a coleção única de nossos conjuntos, onde o estilo é inigualável.
  </p>
</div>

<div class="container-section">
  <div class="grid">
    <div class="produto" data-id="1" data-nome="Conjunto Elizabeth Preto" data-preco="149.00"
      data-imagens='["CJNTS/Conjunto Elizabeth/1ConjuntoPreto.jpg","CJNTS/Conjunto Elizabeth/2ConjuntoPreto.jpg"]'>
      <img src="CJNTS/Conjunto Elizabeth/1ConjuntoPreto.jpg" alt="Conjunto Elizabeth Preto" class="zoom-img">
      <div class="info">
        <h2>Conjunto Elizabeth Preto</h2>
        <div class="precos">
          <span class="preco-varejo">Varejo R$ 149,00</span><br>
          <span class="preco-atacado">Atacado R$ 80,00</span>
        </div>
        <div class="quantidade">
          <button class="menos">-</button>
          <span class="qtd">1</span>
          <button class="mais">+</button>
        </div>
        <button class="add-carrinho">🛒 + Adicionar</button>
      </div>
    </div>


    </div>

<div class="paginacao-container">
  <div class="botoes-paginas">
    <a href="catalago1.php" class="botao-pagina anterior-pagina">❮ Anterior</a>
    <a href="catalago1.php" class="botao-pagina pagina-atual">1</a>
    <a href="catalago2.php" class="botao-pagina">2</a>
    <a href="catalago2.php" class="botao-pagina proximo-pagina">Próximo ❯</a>
  </div>
</div>

<div class="paginacao-container">
  <a href="carrinho.php" class="botao-paginacao">Ir para o Carrinho 🛒</a>
</div>

<!-- Modal para galeria -->
<div id="modal" class="modal">
  <span class="fechar">&times;</span>
  <button class="anterior">&#8592;</button>
  <img class="modal-conteudo" id="imgZoom">
  <button class="proximo">&#8594;</button>
</div>

<script src="carrinho.js"></script>

</body>
</html>
<?php include "footer.php";?>