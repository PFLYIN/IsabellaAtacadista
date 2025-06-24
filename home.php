<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Playfair+Display:wght@400..900&display=swap" rel="stylesheet">
    <!-- CSS principal do site -->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <title>Isabella Atacadista</title>
</head>
<body>
    <div class="container-video-fundo">
        <video autoplay muted loop class="video-fundo">
            <source src="Home-Destaque/fundo-home.mp4" type="video/mp4">
        </video>
        <div class="video-content">
            <img src="Isabella/logo-isabella.png" alt="Isabella Atacadista Logo" class="video-logo">
            <div style="margin-top: 60px;" class="video-text">
                <h2>O Melhor Da Moda Evangélica</h2>
                <p>Elegância para mulheres de valor</p>
            </div>
        </div>
    </div>

    <?php include "header2.php"; ?>

    <div class="container">
          <section class="apresentacao-home animado">
            <div class="novo-home-titulo">
                <h1>Conheça um pouco dos nossos produtos</h1>
            </div>
        </section>
        </div>

    <!-- Carrossel do Bootstrap -->
    <div id="carouselExampleAutoplaying" class="carousel slide animado" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Carrossel/Banner para loja.png" class="d-block w-100" alt="Vestido Miss">
            </div>
            <div class="carousel-item">
                <img src="Carrossel/Tri Conjunto Verônica.png" class="d-block w-100" alt="Vestido Salmão">
            </div>
            <div class="carousel-item">
                <img src="Carrossel/Banner dos Vestidos.png" class="d-block w-100" alt="amostra de vestidos">
            </div>
            <div class="carousel-item">
                <img src="Carrossel/VESTIDO ESTER.png" class="d-block w-100" alt="Vestidos Ester">
            </div>
            <div class="carousel-item">
                <img src="Carrossel/Conjunto Tedw.png" class="d-block w-100" alt="Conjunto TEDW">
            </div>
            <div class="carousel-item">
                <img src="Carrossel/Tri Conjunto Eliza.png" class="d-block w-100" alt="Conjunto TEDW">
            </div>
        </div>
        <!-- Indicadores -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="4"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="5"></button>
        </div>
    </div>
    
    
    <!-- Seção de apresentação da home -->
    <main>
        <div class="container">
          <section class="banners-destaque">
            <a href="catalago1.php" class="animado">
                <div class="banner-img-container">
                    <img src="Home-Destaque/Banner Estilo.png" alt="Vestidos">
                    <div class="banner-legenda">Vestidos</div>
                </div>
            </a>
            <a href="catalagoconjunto.php" class="animado">
                <div class="banner-img-container">
                    <img src="Home-Destaque/Conjunto Plush.png" alt="Conjuntos">
                    <div class="banner-legenda">Conjuntos</div>
                </div>
            </a>
            <a href="blusinhas.php" class="animado">
                <div class="banner-img-container">
                    <img src="Home-Destaque/Blusinhas Gospel.png" alt="Blusinhas">
                    <div class="banner-legenda">Blusinhas</div>
                </div>
            </a>
            <a href="catalago2.php" class="animado">
                <div class="banner-img-container">
                    <img src="Home-Destaque/Beige Cream Aesthetic.jpg" alt="Os Melhores Vestidos">
                    <div class="banner-legenda">Nova Coleção</div>
                </div>
            </a>
            <a href="catalagoconjunto.php" class="animado">
                <div class="banner-img-container">
                    <img src="Home-Destaque/Conjunto Alice e Luana.png" alt="Tri Conjunto">
                    <div class="banner-legenda">Tri Conjunto</div>
                </div>
            </a>
            <a href="catalago1.php" class="animado">
                <div class="banner-img-container">
                    <img src="Home-Destaque/Vestido mãe e fillha.png" alt="Mãe e Filha">
                    <div class="banner-legenda">Mãe e Filha</div>
                </div>
            </a>
          </section>
        </div>
    </main>


    <div class="container">
          <section class="comentario-home">
            <div class="feedhback">
                <h1>Feedback dos nossos clientes</h1>
            </div>
        </section>
        </div>
  
    <section class="carousel-container animado">
      <div class="carousel-track" id="carousel-track">
        <div class="testimonial animado">
      <img src="Fotos das pessoas dos comentários/Aelem.png" alt="Aelem" />
      <p>"Os vestidos são simplesmente lindos!"</p>
      <div class="stars">★★★★★</div>
      <h4>Aelem</h4>
    </div>
    <div class="testimonial animado">
      <img src="Fotos das pessoas dos comentários/Naty.png" alt="Naty" />
      <p>"Comprei para experimentar e acabei gostando muito da qualidade dos vestidos."</p>
      <div class="stars">★★★★★</div>
      <h4>Naty</h4>
    </div>
    <div class="testimonial animado">
      <img src="Fotos das pessoas dos comentários/Letícia.jpg" alt="Letícia" />
      <p>"Amei os vestidos o tecido é maravilhoso e o atendimento foi excelente."</p>
      <div class="stars">★★★★★</div>
      <h4>Letícia</h4>
    </div>
    <div class="testimonial animado">
      <img src="Fotos das pessoas dos comentários/Jô.jpg" alt="Jô" />
      <p>"Achei os vestidos de ótima qualidade e o preço super acessível. Recomendo muito!"</p>
      <div class="stars">★★★★★</div>
      <h4>Jô</h4>
    </div>
    <div class="testimonial animado">
      <img src="Fotos das pessoas dos comentários/Marta.jpg" alt="Marta" />
      <p>"Foi minha primeira compra e fiquei encantada com a qualidade."</p>
      <div class="stars">★★★★★</div>
      <h4>Marta</h4>
    </div>
    <div class="testimonial animado">
      <img src="Fotos das pessoas dos comentários/Rosa.jpg" alt="Rosa" />
      <p>"Os vestidos são lindos e confortáveis, adorei minha compra."</p>
      <div class="stars">★★★★★</div>
      <h4>Rosa</h4>
    </div>
  </div>

  <div class="indicators">
    <span class="dot active"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
</section>


 

    <!-- Scripts Bootstrap e carrinho -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
   
    <script src="carrinho.js"></script>
   
    <script src="carrcomentario.js"></script>
    <script src="js/home-animations.js"></script>
    <?php include "footer.php"; ?>
</body>
</html>