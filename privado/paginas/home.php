<?php
// Incluir arquivos necessários
require_once __DIR__ . '/../includes/conexao.php';
require_once __DIR__ . '/../../classes/Produto.php';
require_once __DIR__ . '/../../classes/ProdutoDAO.php';

// Buscar produtos por categoria
$produtoDAO = new ProdutoDAO($pdo);
$vestidos1 = $produtoDAO->buscarPorCategoria(1);
$conjuntos = $produtoDAO->buscarPorCategoria(2);
$blusinhas = $produtoDAO->buscarPorCategoria(3);

// Função para pegar produtos aleatórios
function pegarProdutosAleatorios($produtos, $quantidade = 8) {
    shuffle($produtos);
    return array_slice($produtos, 0, min($quantidade, count($produtos)));
}

$vestidos1_aleatorios = pegarProdutosAleatorios($vestidos1, 8);
$conjuntos_aleatorios = pegarProdutosAleatorios($conjuntos, 8);
$blusinhas_aleatorios = pegarProdutosAleatorios($blusinhas, 8);

// Buscar avaliações aprovadas do banco
$sqlAvaliacoes = "SELECT * FROM avaliacoes WHERE aprovado = 1 ORDER BY data_criacao DESC";
$stmtAvaliacoes = $pdo->query($sqlAvaliacoes);
$avaliacoes = $stmtAvaliacoes->fetchAll(PDO::FETCH_ASSOC);
?>
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
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/style.css">
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/home-carrosseis.css">
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/banner-carrossel.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Isabella Atacadista</title>
</head>
<body>
    <div class="container-video-fundo">
        <video autoplay muted loop class="video-fundo">
            <source src="/IsabellaAtacadista/public/imagens/Home-Destaque/fundo-home.mp4" type="video/mp4">
        </video>
        <div class="video-content">
            <img src="/IsabellaAtacadista/public/imagens/Isabella/logo-isabella.png" alt="Isabella Atacadista Logo" class="video-logo">
            <div style="margin-top: 60px;" class="video-text">
                <h2>O Melhor Da Moda Evangélica</h2>
                <p>Elegância para mulheres de valor</p>
            </div>
        </div>
    </div>

    <?php require_once __DIR__ . '/../includes/header2.php'; ?>

    <div class="container">
          <section class="apresentacao-home animado">
            <div class="novo-home-titulo">
                <h1>Conheça um pouco dos nossos produtos</h1>
            </div>
        </section>
        </div>

    <!-- Carrossel Principal de Banners -->
    <div class="banner-carrossel-fullscreen">
        <div class="banner-carrossel-wrapper">
            <div class="banner-carrossel">
                <div class="banner-slide active">
                    <img src="/IsabellaAtacadista/public/imagens/Carrossel/Banner para loja.png" alt="Vestido Miss">
                </div>
                <div class="banner-slide">
                    <img src="/IsabellaAtacadista/public/imagens/Carrossel/Tri Conjunto Verônica.png" alt="Vestido Salmão">
                </div>
                <div class="banner-slide">
                    <img src="/IsabellaAtacadista/public/imagens/Carrossel/Banner dos Vestidos.png" alt="amostra de vestidos">
                </div>
                <div class="banner-slide">
                    <img src="/IsabellaAtacadista/public/imagens/Carrossel/VESTIDO ESTER.png" alt="Vestidos Ester">
                </div>
                <div class="banner-slide">
                    <img src="/IsabellaAtacadista/public/imagens/Carrossel/Conjunto Tedw.png" alt="Conjunto TEDW">
                </div>
                <div class="banner-slide">
                    <img src="/IsabellaAtacadista/public/imagens/Carrossel/Tri Conjunto Eliza.png" alt="Conjunto TEDW">
                </div>
            </div>
            
            <!-- Indicadores (dots) -->
            <div class="banner-dots">
                <button class="banner-dot active" data-slide="0"></button>
                <button class="banner-dot" data-slide="1"></button>
                <button class="banner-dot" data-slide="2"></button>
                <button class="banner-dot" data-slide="3"></button>
                <button class="banner-dot" data-slide="4"></button>
                <button class="banner-dot" data-slide="5"></button>
            </div>
        </div>
    </div>
    
    
    <!-- Seção de Carrosseis de Produtos -->
    <main>
        <!-- Carrossel Vestidos Miss Iris -->
        <?php if (count($vestidos1_aleatorios) > 0): ?>
        <section class="produtos-carrossel-section animado">
            <div class="container">
                <div class="carrossel-header">
                    <h2 class="carrossel-titulo">Vestidos Miss Iris</h2>
                    <a href="/IsabellaAtacadista/public/vestidos1" class="btn-ver-catalogo">Ver Catálogo Completo →</a>
                </div>
                <div class="produtos-carrossel-wrapper">
                    <button class="carrossel-nav carrossel-prev" data-target="vestidos1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>
                    <div class="produtos-carrossel" data-categoria="vestidos1">
                        <?php foreach ($vestidos1_aleatorios as $produto): ?>
                            <div class="produto-card">
                                <a href="/IsabellaAtacadista/public/index.php?url=produto&id=<?php echo $produto->id; ?>" class="produto-card-link">
                                    <div class="produto-card-img">
                                        <img src="<?php echo $produto->imagens[0] ?? '/IsabellaAtacadista/public/imagens/sem-imagem.jpg'; ?>" alt="<?php echo htmlspecialchars($produto->titulo); ?>">
                                        <div class="produto-card-overlay">
                                            <span class="ver-detalhes">Ver Detalhes</span>
                                        </div>
                                    </div>
                                    <div class="produto-card-info">
                                        <h3><?php echo htmlspecialchars($produto->titulo); ?></h3>
                                        <div class="produto-card-precos">
                                            <span class="preco-varejo">R$ <?php echo number_format($produto->preco_varejo, 2, ',', '.'); ?></span>
                                            <span class="preco-atacado">Atacado R$ <?php echo number_format($produto->preco_atacado, 2, ',', '.'); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carrossel-nav carrossel-next" data-target="vestidos1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- Carrossel Conjuntos -->
        <?php if (count($conjuntos_aleatorios) > 0): ?>
        <section class="produtos-carrossel-section animado">
            <div class="container">
                <div class="carrossel-header">
                    <h2 class="carrossel-titulo">Conjuntos Evangélicos</h2>
                    <a href="/IsabellaAtacadista/public/conjuntos" class="btn-ver-catalogo">Ver Catálogo Completo →</a>
                </div>
                <div class="produtos-carrossel-wrapper">
                    <button class="carrossel-nav carrossel-prev" data-target="conjuntos">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>
                    <div class="produtos-carrossel" data-categoria="conjuntos">
                        <?php foreach ($conjuntos_aleatorios as $produto): ?>
                            <div class="produto-card">
                                <a href="/IsabellaAtacadista/public/index.php?url=produto&id=<?php echo $produto->id; ?>" class="produto-card-link">
                                    <div class="produto-card-img">
                                        <img src="<?php echo $produto->imagens[0] ?? '/IsabellaAtacadista/public/imagens/sem-imagem.jpg'; ?>" alt="<?php echo htmlspecialchars($produto->titulo); ?>">
                                        <div class="produto-card-overlay">
                                            <span class="ver-detalhes">Ver Detalhes</span>
                                        </div>
                                    </div>
                                    <div class="produto-card-info">
                                        <h3><?php echo htmlspecialchars($produto->titulo); ?></h3>
                                        <div class="produto-card-precos">
                                            <span class="preco-varejo">R$ <?php echo number_format($produto->preco_varejo, 2, ',', '.'); ?></span>
                                            <span class="preco-atacado">Atacado R$ <?php echo number_format($produto->preco_atacado, 2, ',', '.'); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carrossel-nav carrossel-next" data-target="conjuntos">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- Carrossel Blusinhas -->
        <?php if (count($blusinhas_aleatorios) > 0): ?>
        <section class="produtos-carrossel-section animado">
            <div class="container">
                <div class="carrossel-header">
                    <h2 class="carrossel-titulo">Blusinhas Gospel</h2>
                    <a href="/IsabellaAtacadista/public/blusinhas" class="btn-ver-catalogo">Ver Catálogo Completo →</a>
                </div>
                <div class="produtos-carrossel-wrapper">
                    <button class="carrossel-nav carrossel-prev" data-target="blusinhas">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>
                    <div class="produtos-carrossel" data-categoria="blusinhas">
                        <?php foreach ($blusinhas_aleatorios as $produto): ?>
                            <div class="produto-card">
                                <a href="/IsabellaAtacadista/public/index.php?url=produto&id=<?php echo $produto->id; ?>" class="produto-card-link">
                                    <div class="produto-card-img">
                                        <img src="<?php echo $produto->imagens[0] ?? '/IsabellaAtacadista/public/imagens/sem-imagem.jpg'; ?>" alt="<?php echo htmlspecialchars($produto->titulo); ?>">
                                        <div class="produto-card-overlay">
                                            <span class="ver-detalhes">Ver Detalhes</span>
                                        </div>
                                    </div>
                                    <div class="produto-card-info">
                                        <h3><?php echo htmlspecialchars($produto->titulo); ?></h3>
                                        <div class="produto-card-precos">
                                            <span class="preco-varejo">R$ <?php echo number_format($produto->preco_varejo, 2, ',', '.'); ?></span>
                                            <span class="preco-atacado">Atacado R$ <?php echo number_format($produto->preco_atacado, 2, ',', '.'); ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carrossel-nav carrossel-next" data-target="blusinhas">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
        </section>
        <?php endif; ?>
    </main>


    <div class="container">
          <section class="comentario-home">
            <div class="feedhback">
                <h1>Feedback dos nossos clientes</h1>
            </div>
        </section>
        </div>
  
    <!-- Novo Carrossel de Comentários com 3 Cards -->
    <section class="avaliacoes-carrossel-section animado">
        <div class="avaliacoes-container">
            <button class="avaliacoes-nav-btn prev-btn" aria-label="Anterior">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </button>
            
            <div class="avaliacoes-wrapper">
                <div class="avaliacoes-track">
                    <?php foreach ($avaliacoes as $avaliacao): ?>
                    <div class="avaliacao-card">
                        <div class="avaliacao-foto">
                            <?php if ($avaliacao['foto_usuario']): ?>
                                <img src="<?php echo htmlspecialchars($avaliacao['foto_usuario']); ?>" alt="<?php echo htmlspecialchars($avaliacao['nome_usuario']); ?>">
                            <?php else: ?>
                                <div class="avatar-placeholder">
                                    <?php echo strtoupper(substr($avaliacao['nome_usuario'], 0, 1)); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <p class="avaliacao-comentario">"<?php echo htmlspecialchars($avaliacao['comentario']); ?>"</p>
                        <div class="avaliacao-estrelas">
                            <?php for ($i = 0; $i < $avaliacao['estrelas']; $i++): ?>
                                ★
                            <?php endfor; ?>
                            <?php for ($i = $avaliacao['estrelas']; $i < 5; $i++): ?>
                                ☆
                            <?php endfor; ?>
                        </div>
                        <h4 class="avaliacao-nome"><?php echo htmlspecialchars($avaliacao['nome_usuario']); ?></h4>
                    </div>
                    <?php endforeach; ?>
                    
                    <!-- Duplicar para loop infinito -->
                    <?php foreach ($avaliacoes as $avaliacao): ?>
                    <div class="avaliacao-card">
                        <div class="avaliacao-foto">
                            <?php if ($avaliacao['foto_usuario']): ?>
                                <img src="<?php echo htmlspecialchars($avaliacao['foto_usuario']); ?>" alt="<?php echo htmlspecialchars($avaliacao['nome_usuario']); ?>">
                            <?php else: ?>
                                <div class="avatar-placeholder">
                                    <?php echo strtoupper(substr($avaliacao['nome_usuario'], 0, 1)); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <p class="avaliacao-comentario">"<?php echo htmlspecialchars($avaliacao['comentario']); ?>"</p>
                        <div class="avaliacao-estrelas">
                            <?php for ($i = 0; $i < $avaliacao['estrelas']; $i++): ?>
                                ★
                            <?php endfor; ?>
                            <?php for ($i = $avaliacao['estrelas']; $i < 5; $i++): ?>
                                ☆
                            <?php endfor; ?>
                        </div>
                        <h4 class="avaliacao-nome"><?php echo htmlspecialchars($avaliacao['nome_usuario']); ?></h4>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <button class="avaliacoes-nav-btn next-btn" aria-label="Próximo">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </button>
        </div>
        
        <div class="avaliacoes-indicadores">
            <?php for ($i = 0; $i < count($avaliacoes); $i++): ?>
                <span class="avaliacao-dot <?php echo $i === 0 ? 'active' : ''; ?>" data-index="<?php echo $i; ?>"></span>
            <?php endfor; ?>
        </div>
    </section>


 

    <!-- Scripts Bootstrap e carrinho -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
   
    <script src="/IsabellaAtacadista/public/js/contador-atacado.js"></script>
    <script src="/IsabellaAtacadista/public/js/carrinho.js"></script>
   
    <script src="/IsabellaAtacadista/public/js/home-animations.js"></script>
    <script src="/IsabellaAtacadista/public/js/banner-carrossel.js"></script>
    <script src="/IsabellaAtacadista/public/js/home-carrosseis.js"></script>
    <script src="/IsabellaAtacadista/public/js/avaliacoes-carrossel.js"></script>
    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>