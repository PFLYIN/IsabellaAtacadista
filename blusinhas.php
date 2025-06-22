<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400..900&display=swap" rel="stylesheet">
  <title>Catálogo de Vestidos</title>
  <link rel="stylesheet" href="CSS/catalago1.css">
 
</head>
<body>
<div class="container">
  <h1 class="titulo">Coleção Exclusiva de Vestidos</h1>
  <p class="descricao-catalogo">
    Descubra a perfeita harmonia entre elegância e estilo em nossa seleção premium de vestidos. 
  </p>
</div>

<div class="container-section">
  <div class="grid">
    <div class="produto" data-id="1" data-nome="Vestido Rafaela Rosa" data-preco="149.00"
      data-imagens='["Vtds-MissIris/Vestido RafaelaI/VestidoRosa-FT1.jpg","Vtds-MissIris/Vestido RafaelaI/VESTIDOROSA-FT2.jpg","Vtds-MissIris/Vestido RafaelaI/VestidoRosa-FT3.jpg"]'>
      <img src="Vtds-MissIris/Vestido RafaelaI/VestidoRosa-FT1.jpg" alt="Vestido Rosa" class="zoom-img">
      <div class="info">
        <h2>Vestido Rafaela Rosa</h2>
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
    <a href="blusinhas.php" class="botao-pagina anterior-pagina">❮ Anterior</a>
    <a href="blusinhas.php" class="botao-pagina pagina-atual">1</a>
  
    <a href="blusinhas.php" class="botao-pagina proximo-pagina">Próximo ❯</a>
  </div>
</div>

<div class="paginacao-container">
  <a href="carrinho.php" class="botao-paginacao">Ir para o Carrinho 🛒</a>
</div>

<!-- Modal para galeria -->
<div id="modal" class="modal">
  <span class="fechar" title="Fechar">&times;</span>
  <button class="imagem-completa" id="btnCompleta" title="Ver imagem completa" aria-label="Ver imagem completa">⛶</button>
  <button class="imagem-completa" id="btnVoltar" title="Voltar para o modal normal" aria-label="Voltar para o modal normal" style="display:none;">↩</button>
  <button class="anterior" aria-label="Imagem anterior">&#8592;</button>
  <img class="modal-conteudo" id="imgZoom">
  <button class="proximo" aria-label="Próxima imagem">&#8594;</button>
</div>

<script src="carrinho.js"></script>

<script src="modal.js"></script>


</body>
</html>
<?php include "footer.php";?>