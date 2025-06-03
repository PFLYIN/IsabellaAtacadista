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
    <title>Isabella Atacadista</title>
</head>
<body>
    <!-- Carrossel do Bootstrap -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-wrap="true">
        <!-- O data-bs-interval="3000" define o tempo em milissegundos (3 segundos) -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="IMG-Carrossel/Banner para loja online de roupas conforto e estilo para cada ocasião (1900_20250521_224246_0000.png" class="d-block w-100" alt="Vestido Branco">
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="IMG-Carrossel/VESTIDO ESTER BANNER (1900 x 520 px)_20250521_221124_0000.png" class="d-block w-100" alt="Vestido Salmão">
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="IMG-Carrossel/reallygreatsite.com (1900 x 520 px)_20250521_221859_0000.png" class="d-block w-100" alt="Logo Vestido Marrom">
            </div>
            <!-- Slide 4 -->
            <div class="carousel-item">
                <img src="IMG-Carrossel/Banner loja de vestidos delicado laranja _20250522_014319_0000.png" class="d-block w-100" alt="Banner Laranja">
            </div>
            <!-- Slide 5 -->
            <div class="carousel-item">
                <img src="IMG-Carrossel/I_20250524_235000_0000.png" class="d-block w-100" alt="Banner Laranja">
            </div>
        </div>
        <!-- Botão anterior do carrossel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <!-- Botão próximo do carrossel -->
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <main>
        <!-- Seção de apresentação da home -->
        <section class="apresentacao-home">
            <div class="novo-home-titulo">
                <h1>Isabella Atacadista</h1>
                <p>Descubra a elegância em cada peça.<br>
                Encontre vestidos únicos, conjuntos deslumbrantes e uma seleção exclusiva para realçar sua beleza.</p>
            </div>
        </section>

        <!-- Seção de banners de destaque -->
        <section class="banners-destaque">
            <a href="catalago1.php">
                <div class="banner-img-container">
                    <img src="IMG-BannersHome/Banner Vestido1.png" alt="Vestidos">
                    <div class="banner-legenda">Vestidos</div>
                </div>
            </a>
            <a href="catalagoconjunto.php">
                <div class="banner-img-container">
                    <img src="IMG-BannersHome/Banner Conjunto Plush.png" alt="Conjuntos">
                    <div class="banner-legenda">Conjuntos</div>
                </div>
            </a>
            <a href="blusinhas.php">
                <div class="banner-img-container">
                    <img src="IMG-BannersHome/Design sem nome_20250525_152744_0000.png" alt="Blusinhas">
                    <div class="banner-legenda">Blusinhas</div>
                </div>
            </a>
            <a href="catalago1.php">
                <div class="banner-img-container">
                    <img src="IMG-BannersHome/Os Melhores Vestidos.png" alt="Os Melhores Vestidos">
                    <div class="banner-legenda">Os Melhores Vestidos</div>
                </div>
            </a>
        </section>
    </main>

    <section class="carousel-container">
    <div class="carousel">
      <!-- Comentário 1 -->
      <div class="testimonial">
        <img src="images/sabrina.jpg" alt="Sabrina" />
        <p class="text">"Os vestidos são simplesmente lindos! Me senti valorizada como mulher cristã. Atendimento impecável."</p>
        <h4>Sabrina</h4>
      </div>

      <!-- Comentário 2 -->
      <div class="testimonial">
        <img src="images/leticia.jpg" alt="Letícia" />
        <p class="text">"Comprei para um culto especial e fiquei encantada com o caimento. Elegância e modéstia em um só lugar."</p>
        <h4>Letícia</h4>
      </div>

      <!-- Comentário 3 -->
      <div class="testimonial">
        <img src="images/emilly.jpg" alt="Emilly" />
        <p class="text">"Amei cada detalhe! O tecido é maravilhoso e a entrega foi super rápida. Já virei cliente fiel."</p>
        <h4>Emilly</h4>
      </div>

      <!-- Comentário 4 -->
      <div class="testimonial">
        <img src="images/fabiane.jpg" alt="Fabiane" />
        <p class="text">"É difícil encontrar vestidos com essa delicadeza. Me senti elegante sem abrir mão da minha fé."</p>
        <h4>Fabiane</h4>
      </div>

      <!-- Comentário 5 -->
      <div class="testimonial">
        <img src="images/marcia.jpg" alt="Márcia" />
        <p class="text">"Foi minha primeira compra e fiquei emocionada com o cuidado no envio. A loja transmite amor em tudo."</p>
        <h4>Márcia</h4>
      </div>

      <!-- Comentário 6 -->
      <div class="testimonial">
        <img src="images/bruna.jpg" alt="Bruna" />
        <p class="text">"Além da beleza, os vestidos têm um toque espiritual. É mais do que moda, é propósito."</p>
        <h4>Bruna</h4>
      </div>
    </div>

    <script src="carrcomentario.js"></script>
    <!-- Scripts Bootstrap e carrinho -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="carrinho.js"></script>
    <?php include "footer.php"; ?>
</body>
</html>