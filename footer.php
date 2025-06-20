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
      <div class="footer-row">
        <div class="footer-col">
          <h4>Informação</h4>
          <a href="">Como Usar</a>
          <a href="sobre.php">Sobre Nós</a>
          <a href="">Persona</a>
        </div>
        <div class="footer-col">
          <h4>Produtos</h4>
          <a href="carrinho.php">Carrinho</a>
          <a href="catalago1.php">Vestidos</a>
          <a href="catalagoconjunto.php">Conjuntos</a>
        </div>
      </div>
      <div class="footer-col footer-ajuda">
        <h4>Ajuda</h4>
        <a href="contato.php">Contato</a>
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
      flex-direction: column;
      align-items: center;
      gap: 0;
      margin-bottom: 30px;
    }

    .footer-row {
      display: flex;
      flex-direction: row;
      justify-content: center;
      gap: 40px;
      width: 100%;
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

    .footer-ajuda {
      margin-top: 20px;
      align-items: center;
      width: 100%;
      display: flex;
      flex-direction: column;
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
      .footer-logo {
        font-size: 24px;
        margin-bottom: 18px;
      }
      .footer-colums {
        gap: 0;
        margin-bottom: 18px;
      }
      .footer-row {
        flex-direction: row;
        justify-content: center;
        gap: 10px;
        width: 100%;
      }
      .footer-col {
        min-width: 0;
        width: 48%;
        padding: 0;
      }
      .footer-col h4 {
        font-size: 16px;
        margin-bottom: 6px;
        text-align: center;
      }
      .footer-col p, .footer-col a {
        font-size: 15px;
        margin: 5px 0;
        text-align: center;
      }
      .footer-ajuda {
        margin-top: 12px;
        width: 100%;
        align-items: center;
      }
      .footer-bottom {
        font-size: 14px;
        padding-top: 14px;
        gap: 6px;
      }
      .social-icons {
        gap: 12px;
        margin-top: 6px;
      }
      .social-item span {
        font-size: 15px;
        margin-bottom: 2px;
      }
      .social-item a {
        font-size: 28px;
        padding: 10px;
      }
    }

    @media (min-width: 601px) {
      .footer-logo {
        font-size: 28px;
        margin-bottom: 40px;
      }
      .footer-colums {
        flex-direction: row;
        justify-content: center;
        gap: 60px;
        margin-bottom: 40px;
      }
      .footer-row {
        flex-direction: row;
        gap: 60px;
        width: auto;
      }
      .footer-col {
        min-width: 200px;
        width: auto;
      }
      .footer-ajuda {
        margin-top: 0;
        width: auto;
        align-items: flex-start;
      }
      .footer-col h4 {
        font-size: 20px;
        margin-bottom: 16px;
      }
      .footer-col p, .footer-col a {
        font-size: 17px;
        margin: 7px 0;
      }
      .footer-bottom {
        font-size: 16px;
        padding-top: 28px;
      }
      .social-item span {
        font-size: 16px;
      }
      .social-item a {
        font-size: 28px;
      }
      .social-icons {
        gap: 60px;
      }
    }
</style>