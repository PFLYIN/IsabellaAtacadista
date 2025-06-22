<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sobre Nós | Isabella Atacadista</title>
  <link rel="stylesheet" href="CSS/sobrenos.css"/>
  <style>
    /* Diagnóstico: cor de fundo para garantir que o CSS está carregando */
    .bloco, .galeria .foto, .mapa-container { opacity: 1 !important; transform: none !important; }
  </style>
</head>
<body>

<section class="sobre-nos">
  <h1 class="titulo-principal">Sobre Nós</h1>

  <!-- Bloco 1 -->
  <div class="bloco">
    <div class="imagem">
      <img src="Logo-Isabella/isabel-fundadora.jpg" alt="Nossa loja" onerror="this.style.border='2px solid red';this.alt='Imagem não encontrada';"/>
    </div>
    <div class="texto">
      <h2>Uma História Feita de Conquistas</h2>
      <p>
        A Isabella Atacadista nasceu com um propósito de tornar produtos de qualidade mais acessível para revendedoras, lojistas e para os nossos clientes. 
        <br><br>
        De um sonho familiar, construímos uma marca sólida, baseada em trabalho, conquistas e carinho por cada cliente.
      </p>
    </div>
  </div>

  <!-- Bloco 2 -->
  <div class="bloco invertido">
    <div class="imagem">
      <img src="Logo-Isabella/isabel-fundadora.jpg" alt="Missão" onerror="this.style.border='2px solid red';this.alt='Imagem não encontrada';"/>
    </div>
    <div class="texto">
      <h2>Nossa Missão</h2>
      <p>
        Levar produtos de qualidade com preços justos, proporcionando aos nossos clientes uma experiência de compra diferenciada.
      </p>
    </div>
  </div>

  <!-- Bloco 3 -->
  <div class="bloco">
    <div class="imagem">
      <img src="Logo-Isabella/isabel-fundadora.jpg" alt="Visão" onerror="this.style.border='2px solid red';this.alt='Imagem não encontrada';"/>
    </div>
    <div class="texto">
      <h2>Visão</h2>
      <p>
        Ser referência nacional no atacado de moda, reconhecida pela excelência, pelo atendimento humanizado e pela constante busca em inovar, entregar e surpreender nossos clientes.
      </p>
    </div>
  </div>

  <!-- Bloco 4 -->
  <div class="bloco invertido">
    <div class="imagem">
      <img src="Logo-Isabella/isabel-fundadora.jpg" alt="Valores" onerror="this.style.border='2px solid red';this.alt='Imagem não encontrada';"/>
    </div>
    <div class="texto">
      <h2>Valores</h2>
      <p>
        Ética, respeito, comprometimento, paixão, empatia, honestidade e inovação estão presentes em nosso trabalho.
      </p>
    </div>
  </div>

  <!-- Galeria de Fotos -->
  <div class="galeria">
    <div class="foto">
      <img src="Logo-Isabella/isabel-fundadora.jpg" alt="Bastidores" onerror="this.style.border='2px solid red';this.alt='Imagem não encontrada';"/>
      <div class="legenda">Bastidores</div>
    </div>
    <div class="foto">
      <img src="Logo-Isabella/isabel-fundadora.jpg" alt="Nossa Equipe" onerror="this.style.border='2px solid red';this.alt='Imagem não encontrada';"/>
      <div class="legenda">Nossa Equipe</div>
    </div>
    <div class="foto">
      <img src="Logo-Isabella/isabel-fundadora.jpg" alt="Coleções" onerror="this.style.border='2px solid red';this.alt='Imagem não encontrada';"/>
      <div class="legenda">Coleções Exclusivas</div>
    </div>
    <div class="foto">
      <img src="Logo-Isabella/isabel-fundadora.jpg" alt="Atendimento" onerror="this.style.border='2px solid red';this.alt='Imagem não encontrada';"/>
      <div class="legenda">Atendimento com Amor</div>
    </div>
  </div>

</section>

<!-- Seção do Mapa -->
<section class="mapa-section">
    <h2 class="mapa-titulo">Nossa Localização</h2>
    <div class="mapa-container">
        <div class="mapa-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d748.6003438374777!2d-52.84292973046339!3d-24.415449777465792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f271bb321b1e23%3A0xe17df151f4820582!2sR.%20Ararigiboia%2C%20924%20-%20Juranda%2C%20PR%2C%2087355-000!5e1!3m2!1spt-BR!2sbr!4v1749965386331!5m2!1spt-BR!2sbr" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<script src="sobrenos.js"></script>

<?php include "footer.php"; ?>

</body>
</html>
