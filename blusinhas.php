<?php include "header.php"; ?>

<?php
// Inclui os arquivos necessários para a conexão e o DAO
require_once 'conexao.php';
require_once 'classes/Produto.php';
require_once 'classes/ProdutoDAO.php';

// Cria um objeto DAO
$produtoDAO = new ProdutoDAO($pdo);

// Busca apenas os produtos da categoria 'Blusinhas' (id=3)
$categoriaId = 3;
$produtos = $produtoDAO->buscarPorCategoria($categoriaId);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400..900&display=swap" rel="stylesheet">
  <title>Catálogo das Blusinhas</title>
  <link rel="stylesheet" href="CSS/blusinhas.css">
 
</head>
<body>
<div class="container">
  <h1 class="titulo">Coleção Exclusiva de Blusinhas</h1>
  <p class="descricao-catalogo">
    Descubra elegância das nossas blusinhas. 
  </p>
</div>

<div class="container-section">
  <div class="grid">
    <?php
    foreach ($produtos as $produto): ?>
      <?php
        $img = (!empty($produto->imagens) && isset($produto->imagens[0])) ? $produto->imagens[0] : 'assets/img/sem-imagem.jpg';
      ?>
      <a href="produto.php?id=<?php echo $produto->id; ?>" class="produto-link" style="text-decoration:none;color:inherit;">
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
    <a href="blusinhas.php" class="botao-pagina anterior-pagina">❮ Anterior</a>
    <a href="blusinhas.php" class="botao-pagina pagina-atual">1</a>
    <a href="blusinhas.php" class="botao-pagina proximo-pagina">Próximo ❯</a>
  </div>
</div>

<div class="paginacao-container">
  <a href="carrinho.php" class="botao-paginacao">Ir para o Carrinho 🛒</a>
</div>



<script src="carrinho.js"></script>
<script src="carrinho-catalogo.js"></script>

</body>
</html>
<?php include "footer.php"; ?>