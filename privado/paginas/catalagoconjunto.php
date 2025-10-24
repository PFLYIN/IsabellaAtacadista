<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/conexao.php';
require_once __DIR__ . '/../classes/Produto.php';
require_once __DIR__ . '/../classes/ProdutoDAO.php';
$produtoDAO = new ProdutoDAO($pdo);
$categoriaId = 2; // Categoria 'Conjuntos'
$produtos = $produtoDAO->buscarPorCategoria($categoriaId);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400..900&display=swap" rel="stylesheet">
  <title>Catálogo dos Conjuntos</title>
  <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/conjunto1.css">
</head>
<body>
<div class="container">
  <h1 class="titulo"> As Melhores Coleções de Conjunto </h1>
  <p class="descricao-catalogo">
    Explore a coleção única de nossos conjuntos, onde o estilo é inigualável.
  </p>
</div>

<div class="container-section">
  <div class="grid">
    <?php foreach ($produtos as $produto): ?>
      <?php
        $img = (!empty($produto->imagens) && isset($produto->imagens[0])) ? $produto->imagens[0] : 'assets/img/sem-imagem.jpg';
      ?>
      <a href="/IsabellaAtacadista/public/index.php?url=produto&id=<?php echo $produto->id; ?>" class="produto-link" style="text-decoration:none;color:inherit;">
        <div class="produto"
          data-id="<?php echo $produto->id; ?>"
          data-nome="<?php echo htmlspecialchars($produto->titulo); ?>"
          data-preco="<?php echo $produto->preco_varejo; ?>"
          data-preco-atacado="<?php echo $produto->preco_atacado; ?>"
          data-imagens='<?php echo json_encode($produto->imagens); ?>'>
          <img src="<?php echo $img; ?>" alt="<?php echo htmlspecialchars($produto->titulo); ?>" class="zoom-img">
          <div class="info">
            <h2><?php echo $produto->titulo; ?></h2>
            <div class="precos">
              <span class="preco-varejo">Varejo R$ <?php echo number_format($produto->preco_varejo,2,',','.'); ?></span><br>
              <span class="preco-atacado">Atacado R$ <?php echo number_format($produto->preco_atacado,2,',','.'); ?></span>
            </div>
            <div class="quantidade">
              <button class="menos">-</button>
              <span class="qtd">1</span>
              <button class="mais">+</button>
            </div>
            <button class="add-carrinho" type="button">🛒 + Adicionar</button>
          </div>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
</div>

<div class="paginacao-container">
  <div class="botoes-paginas">
    <a href="/IsabellaAtacadista/public/index.php?url=conjuntos" class="botao-pagina anterior-pagina">❮ Anterior</a>
    <a href="/IsabellaAtacadista/public/index.php?url=conjuntos" class="botao-pagina pagina-atual">1</a>
    <a href="/IsabellaAtacadista/public/index.php?url=conjuntos" class="botao-pagina proximo-pagina">Próximo ❯</a>
  </div>
</div>

<div class="paginacao-container">
  <a href="/IsabellaAtacadista/public/index.php?url=carrinho" class="botao-paginacao">Ir para o Carrinho 🛒</a>
</div>

<script src="/IsabellaAtacadista/public/js/carrinho.js"></script>
<script src="/IsabellaAtacadista/public/js/carrinho-catalogo.js"></script>
</body>
</html>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>