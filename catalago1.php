<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo de Vestidos</title>
  <link rel="stylesheet" href="CSS/catalago1.css">
</head>
<body>

<h1 class="titulo">Catálogo de Vestidos</h1>

<div class="grid">
  <div class="produto" data-id="1" data-nome="Vestido Marrom" data-preco="149.00"
    data-imagens='["IMAGEN/VestidoSalmão.jpg","IMAGEN/VestidoMarrom2.jpg","IMAGEN/VestidoMarrom3.jpg"]'>
    <img src="IMAGEN/VestidoSalmão.jpg" alt="Vestido Marrom" class="zoom-img">
    <div class="info">
      <h2>Vestido Marrom</h2>
      <p>R$ 149,00</p>
      <div class="quantidade">
        <button class="menos">-</button>
        <span class="qtd">1</span>
        <button class="mais">+</button>
      </div>
      <button class="add-carrinho">🛒 + Adicionar</button>
    </div>
  </div>

  <div class="produto" data-id="2" data-nome="Vestido Roxo" data-preco="139.00"
    data-imagens='["IMAGEN/VestidoRoxo.jpg","IMAGEN/VestidoRoxo2.jpg","IMAGEN/VestidoRoxo3.jpg"]'>
    <img src="IMAGEN/VestidoRoxo.jpg" alt="Vestido Roxo" class="zoom-img">
    <div class="info">
      <h2>Vestido Roxo</h2>
      <p>R$ 139,00</p>
      <div class="quantidade">
        <button class="menos">-</button>
        <span class="qtd">1</span>
        <button class="mais">+</button>
      </div>
      <button class="add-carrinho">🛒 + Adicionar</button>
    </div>
  </div>

 

<!-- Modal para galeria -->
<div id="modal" class="modal">
  <span class="fechar">&times;</span>
  <button class="anterior">&#8592;</button>
  <img class="modal-conteudo" id="imgZoom">
  <button class="proximo">&#8594;</button>
</div>

<script src="carrinho.js"></script>
<?php include "footer.php";?>
</body>
</html>
