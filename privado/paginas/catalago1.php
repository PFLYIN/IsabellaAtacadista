<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/conexao.php';
require_once __DIR__ . '/../../classes/Produto.php';
require_once __DIR__ . '/../../classes/ProdutoDAO.php';

$produtoDAO = new ProdutoDAO($pdo);
$categoriaId = 1; 
$produtos = $produtoDAO->buscarPorCategoria($categoriaId);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400..900&display=swap" rel="stylesheet">
  <title>Catálogo de Vestidos</title>
  <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/catalago1.css">
 
</head>
<body>
<div class="container">
  <h1 class="titulo">Coleção Exclusiva de Vestidos</h1>
  <p class="descricao-catalogo">
    Descubra a perfeita harmonia entre elegância e estilo em nossa seleção premium de vestidos. 
  </p>
</div>

<div class="container-section">
  <div class="grid">
    <?php foreach ($produtos as $produto): ?>
      <?php
        // Pega a primeira imagem do produto, ou uma imagem padrão se não houver
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
            <h2 style="font-size:1.1rem;font-weight:500;margin-bottom:8px;"><?php echo $produto->titulo; ?></h2>
            <div class="precos" style="font-size:1rem;">
              <span class="preco-varejo" style="display:block;font-weight:600;color:#a0005a;">Varejo R$ <?php echo number_format($produto->preco_varejo,2,',','.'); ?></span>
              <span class="preco-atacado" style="display:block;font-weight:500;color:#ff00bf;">Atacado R$ <?php echo number_format($produto->preco_atacado,2,',','.'); ?></span>
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
    <a href="/IsabellaAtacadista/public/index.php?url=vestidos1" class="botao-pagina anterior-pagina">❮ Anterior</a>
    <a href="/IsabellaAtacadista/public/index.php?url=vestidos1" class="botao-pagina pagina-atual">1</a>
    <a href="/IsabellaAtacadista/public/index.php?url=vestidos2" class="botao-pagina">2</a>
    <a href="/IsabellaAtacadista/public/index.php?url=vestidos2" class="botao-pagina proximo-pagina">Próximo ❯</a>
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
