<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contato - Isabella Atacadista</title>
  <link rel="stylesheet" href="CSS/contato.css" />
</head>
<body>
  <div class="container">

  <form id="contatoForm" action="http://formsubmit.co/pedrodiegomeira@gmail.com" method="POST" class="mt-4" novalidate>

    <h1>Entre em Contato</h1>
    <form action="enviar.php" method="POST" class="form">
      <label>Nome Completo:</label>
      <input type="text" name="nome" required />

      <label>Número com DDD:</label>
      <input type="tel" name="telefone" required />

      <label>Cidade:</label>
      <input type="text" name="cidade" required />

      <label>Estado:</label>
      <input type="text" name="estado" required />

      <label>E-mail:</label>
      <input type="email" name="email" required />

      <label>Motivo do Contato:</label>
      <select name="motivo" required>
        <option value="">Selecione...</option>
        <option value="erro">Encontrei um erro no site</option>
        <option value="duvida">Tenho uma dúvida sobre um produto</option>
        <option value="outro">Outro motivo</option>
      </select>

      <label>Mensagem:</label>
      <textarea name="mensagem" required></textarea>

      <button type="submit" class="botao">Enviar Mensagem</button>
    </form>

    <div class="contatos-laterais">
      <a href="https://wa.me/5544999230507" target="_blank" class="zap">
        📱 WhatsApp - Atendimento rápido
      </a>
      <a href="https://www.instagram.com/pedrodiego.m12?igsh=Z3IzMTFwZmU0dTJk" target="_blank" class="insta">
        📸 Instagram - Conheça nosso catálogo
      </a>
    </div>
  </div>
</body>
</html>
