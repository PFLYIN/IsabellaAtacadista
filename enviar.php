<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $email = $_POST['email'];
  $motivo = $_POST['motivo'];
  $mensagem = nl2br($_POST['mensagem']);

  $para = "pedrodiegomeira@gmail.com";
  $assunto = "Novo contato de Isabella Atacadista";

  $conteudo = "
  <div style='font-family:Arial,sans-serif; max-width:600px; margin:auto; border:1px solid #ccc; border-radius:10px;'>
    <div style='background:#800040; color:white; padding:20px; text-align:center; border-radius:10px 10px 0 0;'>
      <img src='cid:logo' alt='Logo' style='max-height:60px;'><br>
      <h2 style='margin:10px 0;'>Isabella Atacadista</h2>
    </div>
    <hr style='border:0; height:2px; background:#ff00bf; margin:0;'>
    <div style='padding:20px; background:#fff0f5;'>
      <p><strong>Nome:</strong> $nome</p>
      <p><strong>Telefone:</strong> $telefone</p>
      <p><strong>Cidade/Estado:</strong> $cidade - $estado</p>
      <p><strong>Email:</strong> $email</p>
      <p><strong>Motivo:</strong> $motivo</p>
      <p><strong>Mensagem:</strong><br>$mensagem</p>
    </div>
  </div>";

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: <$email>" . "\r\n";

  // Para usar imagem inline com o logo, precisa configurar mailer completo (PHPMailer), mas para localhost simples:
  if (mail($para, $assunto, $conteudo, $headers)) {
    echo "<script>alert('Mensagem enviada com sucesso!');window.history.back();</script>";
  } else {
    echo "<script>alert('Erro ao enviar. Verifique seu servidor local.');window.history.back();</script>";
  }
}
?>
