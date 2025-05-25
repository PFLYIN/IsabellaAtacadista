<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Ícones Sociais</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <footer>
    <div class="footer-logo">ISABELLA<br>ATACADISTA</div>
    <div class="footer-colums">
      <div class="footer-col">
        <h4>Informação</h4>
        <a href="">Como Usar</a>
        <a href="sobre.php">Sobre Nós</a>
        <a href="">Persona</a>
      </div>
      <div class="footer-col">
        <h4>Ajuda</h4>
        <a href="contato.php">Contato</a>
      </div>
      <div class="footer-col">
        <h4>Produtos</h4>
        <a href="carrinho.php">Carrinho</a>
        <a href="catalago1.php">Vestidos</a>
        <a href="catalagoconjunto.php">Conjuntos</a>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="social-icons">
        <div class="social-item">
          <span>Instagram</span>
          <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="social-item">
          <span>Facebook</span>
          <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
        </div>
        <div class="social-item">
          <span>Whatsapp</span>
          <a href="https://wa.me/seunumero" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
  </footer>
</body>

<style>
      * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fff;
      color: #000;
    }

    footer {
      background-color:rgba(249, 249, 249, 0);
      padding: 40px 20px;
      text-align: center;
    }

    .footer-logo {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 30px;
    }

    .footer-colums {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
      margin-bottom: 30px;
    }

    .footer-col {
      min-width: 200px;
    }

    .footer-col h4 {
      font-size: 16px;
      margin-bottom: 10px;
    }

    .footer-col p, .footer-col a {
      font-size: 14px;
      color: #333;
      text-decoration: none;
      display: block;
      margin: 4px 0;
    }

    .footer-bottom {
      border-top: 1px solid #ccc;
      padding-top: 20px;
      font-size: 13px;
      color: #555;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }

    .footer-bottom a {
      color: #000;
      text-decoration: none;
      margin-left: 5px;
    }

    .social-icons {
      display: flex;
      justify-content: center;
      gap: 40px;
      margin-top: 10px;
    }

    .social-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      min-width: 70px;
    }

    .social-item span {
      font-size: 13px;
      color: #333;
      margin-bottom: 4px;
    }

    .social-item a {
      color: #000;
      font-size: 22px;
      text-decoration: none;
      transition: color 0.2s;
    }

    .social-item a:hover {
      color: #a6004f;
    }

    @media (max-width: 600px) {
      .footer-colums {
        flex-direction: column;
        align-items: center;
      }

      .footer-col {
        align-items: center;
      }

      .social-icons {
        gap: 20px;
      }
    }
</style>