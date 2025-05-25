<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <title>Catálogo de Vestidos</title>
  <link rel="stylesheet" href="CSS/catalago1.css">
</head>
<body>

<h1 class="titulo">Catálogo de Vestidos</h1>

<div class="grid">
  <div class="produto" data-id="1" data-nome="VestidoRafaelaRosa" data-preco="149.00"
    data-imagens='["IMG-VESTIDO-RAFAELA/VestidoRosa-FT1.jpg","IMG-VESTIDO-RAFAELA/VESTIDOROSA-FT2.jpg","IMG-VESTIDO-RAFAELA/VestidoRosa-FT3.jpg"]'>
    <img src="IMG-VESTIDO-RAFAELA/VestidoRosa-FT1.jpg" alt="VestidoRafaela" class="zoom-img">
    <div class="info">
      <h2>Vestido Rafaela Rosa</h2>
      <p>R$ 149,00</p>
      <div class="quantidade">
        <button class="menos">-</button>
        <span class="qtd">1</span>
        <button class="mais">+</button>
      </div>
      <button class="add-carrinho">🛒 + Adicionar</button>
    </div>
  </div>

  <div class="produto" data-id="2" data-nome="VestidoPretoRafaela" data-preco="139.00"
    data-imagens='["IMG-VESTIDO-RAFAELA/PRETOVESTIDO-FT1.jpg","IMG-VESTIDO-RAFAELA/PretoVestido-FT2.jpg"]'>
    <img src="IMG-VESTIDO-RAFAELA/PRETOVESTIDO-FT1.jpg" alt="Vestido Preto" class="zoom-img">
    <div class="info">
      <h2>Vestido Rafaela Preto</h2>
      <p>R$ 139,00</p>
      <div class="quantidade">
        <button class="menos">-</button>
        <span class="qtd">1</span>
        <button class="mais">+</button>
      </div>
      <button class="add-carrinho">🛒 + Adicionar</button>
    </div>
  </div>

  <div class="produto" data-id="2" data-nome="VestidoAmareloIris" data-preco="139.00"
    data-imagens='["IMG-VSTD-IRIS/VstdAmarelo-FT1.jpg","IMG-VSTD-IRIS/VstdAmarelo-FT2.jpg","IMG-VSTD-IRIS/VstdAmarelo-FT3.jpg"]'>
    <img src="IMG-VSTD-IRIS/VstdAmarelo-FT1.jpg" alt="Vestido Preto" class="zoom-img">
    <div class="info">
      <h2>Vestido Iris Amarelo</h2>
      <p>R$ 139,00</p>
      <div class="quantidade">
        <button class="menos">-</button>
        <span class="qtd">1</span>
        <button class="mais">+</button>
      </div>
      <button class="add-carrinho">🛒 + Adicionar</button>
    </div>
  </div>

  <div class="produto" data-id="2" data-nome="VestidoBrancoIris" data-preco="139.00"
    data-imagens='["IMG-VSTD-IRIS/VSTDBranco-FT1.jpg","IMG-VSTD-IRIS/VSTDBranco-FT2.jpg"]'>
    <img src="IMG-VSTD-IRIS/VSTDBranco-FT1.jpg" alt="Vestido Preto" class="zoom-img">
    <div class="info">
      <h2>Vestido Rafaela Preto</h2>
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

</body>
</html>
<?php include "footer.php";?>