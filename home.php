<?php include "header.php"; ?>
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
            <source src="video-de-Fundo/home-video-fundo.mp4" type="video/mp4">
        </video>
        <div class="video-content">
            <img src="logo/logo-isabella.png" alt="Isabella Atacadista Logo" class="video-logo">
            <div class="video-text">
                <h2>Moda Evangélica Atacado</h2>
                <p>Elegância e modéstia para mulheres de valor</p>
            </div>
        </div>
    </div>

    <!-- Carrossel do Bootstrap -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
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

    <main>
        <!-- Seção de apresentação da home -->
        <div class="container">
          <section class="apresentacao-home">
            <div class="novo-home-titulo">
                <h1>Isabella Atacadista</h1>
                <p>Descubra a elegância em cada peça.<br>
                Encontre vestidos únicos, conjuntos deslumbrantes e uma seleção exclusiva para realçar sua beleza.</p>
            </div>
        </section>
        </div>

        <!-- Seção de banners de destaque -->
        <div class="container-section">
          <section class="banners-destaque">
            <a href="catalago1.php">
                <div class="banner-img-container">
                    <img src="Home-Destaque/Banner Estilo.png" alt="Vestidos">
                    <div class="banner-legenda">Vestidos</div>
                </div>
            </a>
            <a href="catalagoconjunto.php">
                <div class="banner-img-container">
                    <img src="Home-Destaque/Conjunto Plush.png" alt="Conjuntos">
                    <div class="banner-legenda">Conjuntos</div>
                </div>
            </a>
            <a href="blusinhas.php">
                <div class="banner-img-container">
                    <img src="Home-Destaque/Blusinhas Gospel.png" alt="Blusinhas">
                    <div class="banner-legenda">Blusinhas</div>
                </div>
            </a>
            <a href="catalago2.php">
                <div class="banner-img-container">
                    <img src="Home-Destaque/Beige Cream Aesthetic.jpg" alt="Os Melhores Vestidos">
                    <div class="banner-legenda">Nova Coleção</div>
                </div>
        
            
             <a href="catalagoconjunto.php">
                <div class="banner-img-container">
                    <img src="Home-Destaque/Conjunto Alice e Luana.png" alt="Tri Conjunto">
                    <div class="banner-legenda">Tri Conjunto</div>
                </div>
            </a>
           
            <a href="catalago1.php">
                <div class="banner-img-container">
                    <img src="Home-Destaque/Vestido mãe e fillha.png" alt="Mãe e Filha">
                    <div class="banner-legenda">Mãe e Filha</div>
                </div>
            </a>
          </section>
        </div>
    </main>

   <section class="carousel-container">
  <div class="carousel-track" id="carousel-track">
    <div class="testimonial">
      <img src="Fotos das pessoas dos comentários/Aelem.png" alt="Sabrina" />
      <p>"Os vestidos são simplesmente lindos! Me senti valorizada como mulher cristã."</p>
      <div class="stars">★★★★★</div>
      <h4>Sabrina</h4>
    </div>
    <div class="testimonial">
      <img src="Fotos das pessoas dos comentários/Naty.png" alt="Letícia" />
      <p>"Comprei para um culto especial e fiquei encantada com o caimento."</p>
      <div class="stars">★★★★★</div>
      <h4>Letícia</h4>
    </div>
    <div class="testimonial">
      <img src="images/emilly.jpg" alt="Emilly" />
      <p>"Amei cada detalhe! O tecido é maravilhoso e a entrega foi super rápida."</p>
      <div class="stars">★★★★★</div>
      <h4>Emilly</h4>
    </div>
    <div class="testimonial">
      <img src="images/fabiane.jpg" alt="Fabiane" />
      <p>"É difícil encontrar vestidos com essa delicadeza. Me senti elegante."</p>
      <div class="stars">★★★★★</div>
      <h4>Fabiane</h4>
    </div>
    <div class="testimonial">
      <img src="images/marcia.jpg" alt="Márcia" />
      <p>"Foi minha primeira compra e fiquei emocionada com o cuidado no envio."</p>
      <div class="stars">★★★★★</div>
      <h4>Márcia</h4>
    </div>
    <div class="testimonial">
      <img src="images/bruna.jpg" alt="Bruna" />
      <p>"Além da beleza, os vestidos têm um toque espiritual. É mais do que moda."</p>
      <div class="stars">★★★★★</div>
      <h4>Bruna</h4>
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
   
    <?php include "footer.php"; ?>
</body>
</html>