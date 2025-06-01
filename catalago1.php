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

<h1 class="titulo">Coleção Exclusiva de Vestidos</h1>
<p class="descricao-catalogo">
  Descubra a perfeita harmonia entre elegância e estilo em nossa seleção premium de vestidos. 
</p>
<div class="grid">
  <div class="produto" data-id="1" data-nome="Vestido Rafaela Rosa" data-preco="149.00"
    data-imagens='["IMG-VESTIDO-RAFAELA/VestidoRosa-FT1.jpg","IMG-VESTIDO-RAFAELA/VESTIDOROSA-FT2.jpg","IMG-VESTIDO-RAFAELA/VestidoRosa-FT3.jpg"]'>
    <img src="IMG-VESTIDO-RAFAELA/VestidoRosa-FT1.jpg" alt="Vestido Rosa" class="zoom-img">
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
  <div class="produto" data-id="2" data-nome="Vestido Rafaela Preto" data-preco="139.00"
    data-imagens='["IMG-VESTIDO-RAFAELA/PRETOVESTIDO-FT1.jpg","IMG-VESTIDO-RAFAELA/PretoVestido-FT2.jpg"]'>
    <img src="IMG-VESTIDO-RAFAELA/PRETOVESTIDO-FT1.jpg" alt="Vestido Preto" class="zoom-img">
    <div class="info">
      <h2>Vestido Rafaela Preto</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="3" data-nome="Vestido Amarelo Iris" data-preco="139.00"
    data-imagens='["IMG-VSTD-IRIS/VstdAmarelo-FT1.jpg","IMG-VSTD-IRIS/VstdAmarelo-FT2.jpg","IMG-VSTD-IRIS/VstdAmarelo-FT3.jpg"]'>
    <img src="IMG-VSTD-IRIS/VstdAmarelo-FT1.jpg" alt="Vestido Amarelo Florido" class="zoom-img">
    <div class="info">
      <h2>Vestido Amarelo Iris</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="4" data-nome="Vestido Branco Iris" data-preco="139.00"
    data-imagens='["IMG-VSTD-IRIS/VSTDBranco-FT1.jpg","IMG-VSTD-IRIS/VSTDBranco-FT2.jpg"]'>
    <img src="IMG-VSTD-IRIS/VSTDBranco-FT1.jpg" alt="Vestido Branco Florido" class="zoom-img">
    <div class="info">
      <h2>Vestido Branco Iris</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="5" data-nome="Vestido Mirian Verde" data-preco="139.00"
    data-imagens='["Vestidos Mirian/1VsVerdeMirian.jpg","Vestidos Mirian/2VsVerdeMirian.jpg","Vestidos Mirian/3VerdeMirian.jpg"]'>
    <img src="Vestidos Mirian/1VsVerdeMirian.jpg" alt="Vestido Verde" class="zoom-img">
    <div class="info">
      <h2>Vestido Mirian Verde</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="6" data-nome="Vestido Mirian Lilas" data-preco="139.00"
    data-imagens='["Vestidos Mirian/1LilasMirian.jpg","Vestidos Mirian/2LilasMirian.jpg","Vestidos Mirian/3LilasMirian.jpg"]'>
    <img src="Vestidos Mirian/1LilasMirian.jpg" alt="Vestido Lilas" class="zoom-img">
    <div class="info">
      <h2>Vestido Mirian Lilas</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="7" data-nome="Vestido Mirian Bege" data-preco="139.00"
    data-imagens='["Vestidos Mirian/1LilasMirian.jpg","Vestidos Mirian/2LilasMirian.jpg","Vestidos Mirian/3LilasMirian.jpg"]'>
    <img src="Vestidos Mirian/1LilasMirian.jpg" alt="Vestido Bege" class="zoom-img">
    <div class="info">
      <h2>Vestido Mirian Bege</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="8" data-nome="Vestido Laís Vinho" data-preco="139.00"
    data-imagens='["Vestidos Laís/1VsVinhoLaís.jpg","Vestidos Laís/2VsVinhoLaís.jpg","Vestidos Laís/3VsVinhoLaís.jpg"]'>
    <img src="Vestidos Laís/1VsVinhoLaís.jpg" alt="Vestido Vinho" class="zoom-img">
    <div class="info">
      <h2>Vestido Laís Vinho</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="9" data-nome="Vestido Laís Preto" data-preco="139.00"
    data-imagens='["Vestidos Laís/1VSPRETOLAÍS.jpg","Vestidos Laís/2VSPRETOLAÍS.jpg","Vestidos Laís/3VSPRETOLAÍS.jpg"]'>
    <img src="Vestidos Laís/1VSPRETOLAÍS.jpg" alt="Vestido Preto" class="zoom-img">
    <div class="info">
      <h2>Vestido Laís Preto</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="10" data-nome="Vestido Laís Terracota" data-preco="139.00"
    data-imagens='["Vestidos Laís/1TerracotaLaís.jpg","Vestidos Laís/2TerracotaLaís.jpg","Vestidos Laís/3Terracota.jpg"]'>
    <img src="Vestidos Laís/1TerracotaLaís.jpg" alt="Vestido Terracota" class="zoom-img">
    <div class="info">
      <h2>Vestido Laís Terracota</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="11" data-nome="Vestido Karol Branco" data-preco="139.00"
    data-imagens='["Vestidos Karol/1VsBrancoFloridoKarol.jpg","Vestidos Karol/2VsBrancoKarol.jpg","Vestidos Karol/3VsBrancoKarol.jpg"]'>
    <img src="Vestidos Karol/1VsBrancoFloridoKarol.jpg" alt="Vestido Branco Florido" class="zoom-img">
    <div class="info">
      <h2>Vestido Karol Branco</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="12" data-nome="Vestido Karol Amarelo" data-preco="139.00"
    data-imagens='["Vestidos Karol/1AMARELOKarol.jpg","Vestidos Karol/2AMARELOKarol.jpg","Vestidos Karol/3AMARELOKarol.jpg"]'>
    <img src="Vestidos Karol/1AMARELOKarol.jpg" alt="Vestido Amarelo Florido" class="zoom-img">
    <div class="info">
      <h2>Vestido Karol Amarelo</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="13" data-nome="Vestido Taline Vermelho" data-preco="139.00"
    data-imagens='["Vestido Taline/1Vermelho Taline.jpg","Vestido Taline/2Vermelho Taline.jpg","Vestido Taline/3Vermelho Taline.jpg"]'>
    <img src="Vestido Taline/1Vermelho Taline.jpg" alt="Vestido Vermelho" class="zoom-img">
    <div class="info">
      <h2>Vestido Taline Vermelho</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
    <div class="produto" data-id="14" data-nome="Vestido Cleide Rosa" data-preco="139.00"
    data-imagens='["Vestido Cleide/1RosaCleide.jpg","Vestido Cleide/2RosaCleide.jpg","Vestido Cleide/3RosaCleide.jpg"]'>
    <img src="Vestido Cleide/1RosaCleide.jpg" alt="Vestido Rosa" class="zoom-img">
    <div class="info">
      <h2>Vestido Cleide Rosa</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
    <div class="produto" data-id="15" data-nome="Vestido Ester Preto" data-preco="139.00"
    data-imagens='["Vestidos Ester/1PretoEster.jpg","Vestidos Ester/2PretoEster.jpg","Vestidos Ester/3PretoEster.jpg"]'>
    <img src="Vestidos Ester/1PretoEster.jpg" alt="Vestido Preto" class="zoom-img">
    <div class="info">
      <h2>Vestido Ester Preto</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
    <div class="produto" data-id="16" data-nome="Vestido Ester Terracota" data-preco="139.00"
    data-imagens='["Vestidos Ester/1TerracotaEster.jpg","Vestidos Ester/2TerracotaEster.jpg","Vestidos Ester/3TerracotaEster.jpg"]'>
    <img src="Vestidos Ester/1TerracotaEster.jpg" alt="Vestido Preto" class="zoom-img">
    <div class="info">
      <h2>Vestido Ester Terracota</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
    <div class="produto" data-id="17" data-nome="Vestido Ester Rosa" data-preco="139.00"
    data-imagens='["Vestidos Ester/1ROSAEster.jpg","Vestidos Ester/2ROSAEster.jpg","Vestidos Ester/3ROSAEster.jpg"]'>
    <img src="Vestidos Ester/1ROSAEster.jpg" alt="Vestido Preto" class="zoom-img">
    <div class="info">
      <h2>Vestido Ester Rosa</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="18" data-nome="Vestido Mãe e Filha Terracota" data-preco="139.00"
    data-imagens='["Mãe e Filha/1TerracotaMãeeFilha.jpg","Mãe e Filha/2TerracotaMãeeFilha.jpg","Mãe e Filha/3TerracotaMãeeFilha.jpg"]'>
    <img src="Mãe e Filha/1TerracotaMãeeFilha.jpg" alt="Vestido Terracota" class="zoom-img">
    <div class="info">
      <h2>Mãe e Filha Terracota</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="19" data-nome="Vestido Mãe e Filha Rosa" data-preco="139.00"
    data-imagens='["Mãe e Filha/1RosaMãeeFilha.jpg","Mãe e Filha/2RosaMãeeFilha.jpg","Mãe e Filha/3RosaMãeeFilha.jpg"]'>
    <img src="Mãe e Filha/1RosaMãeeFilha.jpg" alt="Vestido Rosa" class="zoom-img">
    <div class="info">
      <h2>Mãe e Filha Rosa</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="19" data-nome="Vestido Mãe e Filha Preto" data-preco="139.00"
    data-imagens='["Mãe e Filha/1PretoMãeeFilha.jpg","Mãe e Filha/2PretoMãeeFilha.jpg","Mãe e Filha/3PretoMãeeFilha.jpg"]'>
    <img src="Mãe e Filha/1PretoMãeeFilha.jpg" alt="Vestido Preto" class="zoom-img">
    <div class="info">
      <h2>Mãe e Filha Preto</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="20" data-nome="Vestido Karen Branco" data-preco="139.00"
    data-imagens='["Vestidos Karen/1BrancoKaren.jpg","Vestidos Karen/2BrancoKaren.jpg","Vestidos Karen/3BrancoKaren.jpg"]'>
    <img src="Vestidos Karen/1BrancoKaren.jpg" alt="Vestido Branco" class="zoom-img">
    <div class="info">
      <h2>Vestido Karen Branco</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="21" data-nome="Vestido Karen Violeta" data-preco="139.00"
    data-imagens='["Vestidos Karen/1Lilas.jpg","Vestidos Karen/2LilasKaren.jpg","Vestidos Karen/3LilaSKaren.jpg"]'>
    <img src="Vestidos Karen/1Lilas.jpg" alt="Vestido Violeta" class="zoom-img">
    <div class="info">
      <h2>Vestido Karen Violeta</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="22" data-nome="Vestido Karen Roxo " data-preco="139.00"
    data-imagens='["Vestidos Karen/1RoxoKaren.jpg","Vestidos Karen/2RoxoKaren.jpg","Vestidos Karen/3RoxoKaren.jpg"]'>
    <img src="Vestidos Karen/1RoxoKaren.jpg" alt="Vestido Roxo" class="zoom-img">
    <div class="info">
      <h2>Vestido Karen Roxo</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="23" data-nome="Vestido Karen Rosa " data-preco="139.00"
    data-imagens='["Vestidos Karen/1RosaKaren.jpg","Vestidos Karen/2RosaKaren.jpg","Vestidos Karen/3RosaKaren.jpg"]'>
    <img src="Vestidos Karen/1RosaKaren.jpg" alt="Vestido Rosa" class="zoom-img">
    <div class="info">
      <h2>Vestido Karen Rosa</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="24" data-nome="Vestido Miss Vermelho " data-preco="139.00"
    data-imagens='["Vestido Miss/1VermelhoMiss.jpg"]'>
    <img src="Vestido Miss/1VermelhoMiss.jpg" alt="Vestido Vermelho" class="zoom-img">
    <div class="info">
      <h2>Vestido Miss Vermelho</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="25" data-nome="Vestido Miss Vermelho e Verde" data-preco="139.00"
    data-imagens='["Vestido Miss/3VermelhoMiss.jpg"]'>
    <img src="Vestido Miss/3VermelhoMiss.jpg" alt="Vestido Vermelho e Verde" class="zoom-img">
    <div class="info">
      <h2>Vestido Miss Vermelho e Verde</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
   <div class="produto" data-id="26" data-nome="Vestido Miss Vermelho e Preto" data-preco="139.00"
    data-imagens='["Vestido Miss/2VermelhoMiss.jpg"]'>
    <img src="Vestido Miss/2VermelhoMiss.jpg" alt="Vestido Vermelho e Preto" class="zoom-img">
    <div class="info">
      <h2>Vestido Miss Vermelho e Preto</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="27" data-nome="Vestido Boneca Branco " data-preco="139.00"
    data-imagens='["Vestido Boneca/1BrancoBOneca.jpg","Vestido Boneca/2BrancoBOneca.jpg","Vestido Boneca/3BrancoBOneca.jpg"]'>
    <img src="Vestido Boneca/1BrancoBOneca.jpg" alt="Vestido Branco" class="zoom-img">
    <div class="info">
      <h2>Vestido Boneca Branco</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="28" data-nome="Vestido Boneca Roxo " data-preco="139.00"
    data-imagens='["Vestido Boneca/1RoxoBoneca.jpg","Vestido Boneca/2RoxoBoneca.jpg"]'>
    <img src="Vestido Boneca/1RoxoBoneca.jpg" alt="Vestido Roxo" class="zoom-img">
    <div class="info">
      <h2>Vestido Boneca Roxo</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="30" data-nome="Vestido Clara Dourado" data-preco="139.00"
    data-imagens='["Vestidos Clara/1DouradoClara.jpg","Vestidos Clara/2DouradoClara.jpg","Vestidos Clara/3DouradoClara.jpg"]'>
    <img src="Vestidos Clara/1DouradoClara.jpg" alt="Vestido Dourado" class="zoom-img">
    <div class="info">
      <h2>Vestido Clara Dourado</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="31" data-nome="Vestido Clara Vinho" data-preco="139.00"
    data-imagens='["Vestidos Clara/1VinhoClara.jpg","Vestidos Clara/2VinhoClara.jpg","Vestidos Clara/3VinhoClara.jpg"]'>
    <img src="Vestidos Clara/1VinhoClara.jpg" alt="Vestido Vinho" class="zoom-img">
    <div class="info">
      <h2>Vestido Clara Vinho</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
   <div class="produto" data-id="32" data-nome="Vestido Jéssica Azul" data-preco="139.00"
    data-imagens='["Vestidos Jéssica/1AzulJessica.jpg","Vestidos Jéssica/2AzulJessica.jpg","Vestidos Jéssica/3AzulJessica.jpg"]'>
    <img src="Vestidos Jéssica/1AzulJessica.jpg" alt="Vestido Azul" class="zoom-img">
    <div class="info">
      <h2>Vestido Jéssica Azul</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="33" data-nome="Vestido Jéssica Prata" data-preco="139.00"
    data-imagens='["Vestidos Jéssica/1PrataJessica.jpg"]'>
    <img src="Vestidos Jéssica/1PrataJessica.jpg" alt="Vestido Prata" class="zoom-img">
    <div class="info">
      <h2>Vestido Jéssica Prata</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="34" data-nome="Vestido Jéssica Vinho" data-preco="139.00"
    data-imagens='["Vestidos Jéssica/1VinhoJessica.jpg"]'>
    <img src="Vestidos Jéssica/1VinhoJessica.jpg" alt="Vestido Vinho" class="zoom-img">
    <div class="info">
      <h2>Vestido Jéssica Vinho</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="35" data-nome="Vestido Jéssica Dourado" data-preco="139.00"
    data-imagens='["Vestidos Jéssica/1DouradoJessica.jpg","Vestidos Jéssica/2DouradoJessica.jpg"]'>
    <img src="Vestidos Jéssica/1DouradoJessica.jpg" alt="Vestido Dourado" class="zoom-img">
    <div class="info">
      <h2>Vestido Jéssica Dourado</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="36" data-nome="Vestido Karen Lilas" data-preco="139.00"
    data-imagens='["Vestidos Karen/1Lilas.jpg","Vestidos Karen/2LilasKaren.jpg","Vestidos Karen/3LilaSKaren.jpg"]'>
    <img src="Vestidos Karen/1Lilas.jpg" alt="Vestido Lilas" class="zoom-img">
    <div class="info">
      <h2>Vestido Karen Lilas</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="37" data-nome="Vestido Karen Branco" data-preco="139.00"
    data-imagens='["Vestidos Karen/1BrancoKaren.jpg","Vestidos Karen/2BrancoKaren.jpg","Vestidos Karen/3BrancoKaren.jpg"]'>
    <img src="Vestidos Karen/1BrancoKaren.jpg" alt="Vestido Branco" class="zoom-img">
    <div class="info">
      <h2>Vestido Karen Branco</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="38" data-nome="Vestido Karen Rosa" data-preco="139.00"
    data-imagens='["Vestidos Karen/1RosaKaren.jpg","Vestidos Karen/2RosaKaren.jpg","Vestidos Karen/3RosaKaren.jpg"]'>
    <img src="Vestidos Karen/1RosaKaren.jpg" alt="Vestido Rosa" class="zoom-img">
    <div class="info">
      <h2>Vestido Karen Rosa</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="39" data-nome="Vestido Karen Roxo" data-preco="139.00"
    data-imagens='["Vestidos Karen/1RoxoKaren.jpg","Vestidos Karen/2RoxoKaren.jpg","Vestidos Karen/3RoxoKaren.jpg"]'>
    <img src="Vestidos Karen/1RoxoKaren.jpg" alt="Vestido Roxo" class="zoom-img">
    <div class="info">
      <h2>Vestido Karen Roxo</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
   <div class="produto" data-id="40" data-nome="Vestido Sabrina Vinho" data-preco="139.00"
    data-imagens='["Vestidos Jéssica/1VinhoSabrina.jpg","Vestidos Jéssica/2VinhoSabrina.jpg","Vestidos Jéssica/3VinhoSabrina.jpg"]'>
    <img src="Vestidos Jéssica/1VinhoSabrina.jpg" alt="Vestido Vinho" class="zoom-img">
    <div class="info">
      <h2>Vestido Sabrina Vinho</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="41" data-nome="Vestido Sara Bege " data-preco="139.00"
    data-imagens='["Vestidos Sara/1BegeSara.jpg","Vestidos Sara/2BegeSara.jpg","Vestidos Sara/3BegeSara.jpg"]'>
    <img src="Vestidos Sara/1BegeSara.jpg" alt="Vestido Bege" class="zoom-img">
    <div class="info">
      <h2>Vestido Sara Bege</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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
  <div class="produto" data-id="42" data-nome="Vestido Sara Branco" data-preco="139.00"
    data-imagens='["Vestidos Sara/1BrancoSara.jpg","Vestidos Sara/2BrancoSara.jpg","Vestidos Sara/3BrancoSara.jpg"]'>
    <img src="Vestidos Sara/1BrancoSara.jpg" alt="Vestido Branco" class="zoom-img">
    <div class="info">
      <h2>Vestido Sara Branco</h2>
      <div class="precos">
        <span class="preco-varejo">Varejo R$ 139,00</span><br>
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