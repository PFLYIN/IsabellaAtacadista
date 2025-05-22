<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Isabella Atacadista</title>
</head>

<body>

    <!-- Carrossel do Bootstrap -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Isabella-Atacadista/IMG-Carrossel/Banner para loja online de roupas conforto e estilo para cada ocasião (1900_20250521_224246_0000.png" class="d-block w-100" alt="Vestido Branco">
            </div>
            <div class="carousel-item">
                <img src="Isabella-Atacadista/IMG-Carrossel/VESTIDO ESTER BANNER (1900 x 520 px)_20250521_221124_0000.png" class="d-block w-100" alt="Vestido Salmão">
            </div>
            <div class="carousel-item">
                <img src="Isabella-Atacadista/IMG-Carrossel/reallygreatsite.com (1900 x 520 px)_20250521_221859_0000.png" class="d-block w-100" alt="Logo Vestido Marrom">
            </div>
            <div class="carousel-item">
                <img src="Isabella-Atacadista/IMG-Carrossel/Banner loja de vestidos delicado laranja _20250522_014319_0000.png" class="d-block w-100" alt="Logo Vestido Marrom">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Imagens fora do carrossel -->
    <main>
        <section class="banner-slider">
            <div class="banner">
                <picture>
                    <source srcset="Canva/Banner Vestido Mirian_20250520_093438_0000.png" media="(max-width: 768px)">
                    <img src="Canva/Banner Vestido Mirian_20250520_093438_0000.png" alt="Banner Vestido Mirian">
                </picture>
            </div>
            <div class="banner">
                <picture>
                    <source srcset="Canva/Banner para Site Moda Feminina Conjunto Plush _20250518_160227_0000.png" media="(max-width: 768px)">
                    <img src="Canva/Banner para Site Moda Feminina Conjunto Plush _20250518_160227_0000.png" alt="Banner Vestido Ester">
                </picture>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="carrinho.js"></script>
    <?php include "footer.php"; ?>
</body>

</html>