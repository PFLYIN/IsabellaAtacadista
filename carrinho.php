<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Meu Carrinho</title>
  <link rel="stylesheet" href="CSS/carrinho.css">
</head>
<body>
<div class="container">
  <h1 class="titulo">Seu Carrinho</h1>
  <div class="carrinho-container" id="carrinho-itens"></div>

  <div class="total">
    <p><strong>Total:</strong> R$ <span id="valor-total">0,00</span></p>
    <a id="whatsapp-link" class="botao-wpp" target="_blank">📲 Enviar para Atendimento</a>
  </div>
</div>

<script src="carrinho.js"></script>
</body>
</html>
