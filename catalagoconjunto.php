<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400..900&display=swap" rel="stylesheet">
  <title>Catálogo dos Conjuntos</title>
  <link rel="stylesheet" href="CSS/conjunto1.css">
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
    <?php
    $produtosConjuntos = [
      [
        "id" => 78,
        "nome" => "Conjunto Elizabeth Preto",
        "preco" => 159.99,
        "preco_atacado" => 100.00,
        "imagens" => [
          "CJNTS/Conjunto Elizabeth/1Preto.jpg",
          "CJNTS/Conjunto Elizabeth/2ConjuntoPreto.jpg",
          "CJNTS/Conjunto Elizabeth/3ConjuntoPreto.jpg"
        ],
        "descricao" => "Conjunto preto Elizabeth, elegante e versátil para diversas ocasiões."
      ],
      [
        "id" => 79,
        "nome" => "Conjunto Elizabeth Caramelo",
        "preco" => 159.99,
        "preco_atacado" => 100.00,
        "imagens" => [
          "CJNTS/Conjunto Elizabeth/1CarameloEliza.jpg",
          "CJNTS/Conjunto Elizabeth/2CarameloEliz.jpg"
        ],
        "descricao" => "Conjunto caramelo Elizabeth, moderno e confortável."
      ],
      [
        "id" => 80,
        "nome" => "Tri Conjunto Verônica Azul Marinho",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Tri conjunto Verônica/1azulmarinho.jpg",
          "CJNTS/Tri conjunto Verônica/2azulmarinho.jpg",
          "CJNTS/Tri conjunto Verônica/3azulmarinho.jpg",
          "CJNTS/Tri conjunto Verônica/4azulmarinho.jpg"
        ],
        "descricao" => "Tri conjunto Verônica azul marinho, sofisticado e estiloso."
      ],
      [
        "id" => 81,
        "nome" => "Tri Conjunto Verônica Azul Petróleo",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Tri conjunto Verônica/1azulpetróleo.jpg",
          "CJNTS/Tri conjunto Verônica/2azulpetróleo.jpg",
          "CJNTS/Tri conjunto Verônica/3azulpetróleo.jpg"
        ],
        "descricao" => "Tri conjunto Verônica azul petróleo, moderno e confortável."
      ],
      [
        "id" => 82,
        "nome" => "Tri Conjunto Verônica Azul Royal",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Tri conjunto Verônica/1azulroyal.jpg",
          "CJNTS/Tri conjunto Verônica/2azulroyal.jpg"
        ],
        "descricao" => "Tri conjunto Verônica azul royal, destaque para ocasiões especiais."
      ],
      [
        "id" => 83,
        "nome" => "Tri Conjunto Verônica Bordô",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Tri conjunto Verônica/1bordô.jpg",
          "CJNTS/Tri conjunto Verônica/2bordô.jpg",
          "CJNTS/Tri conjunto Verônica/3bordô.jpg",
          "CJNTS/Tri conjunto Verônica/4bordô.jpg"
        ],
        "descricao" => "Tri conjunto Verônica bordô, elegante e perfeito para a noite."
      ],
      [
        "id" => 84,
        "nome" => "Tri Conjunto Verônica Preto",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Tri conjunto Verônica/1Preto.jpg",
          "CJNTS/Tri conjunto Verônica/2Preto.jpg",
          "CJNTS/Tri conjunto Verônica/3Preto.jpg",
          "CJNTS/Tri conjunto Verônica/4Preto.jpg",
          "CJNTS/Tri conjunto Verônica/5Preto.jpg"
        ],
        "descricao" => "Tri conjunto Verônica preto, clássico e atemporal."
      ],
      [
        "id" => 85,
        "nome" => "Tri Conjunto Verônica Verde Esmeralda",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Tri conjunto Verônica/1verdeesmeralda.jpg",
          "CJNTS/Tri conjunto Verônica/2verdeesmeralda.jpg",
          "CJNTS/Tri conjunto Verônica/3verdeesmeralda.jpg",
          "CJNTS/Tri conjunto Verônica/4verdeesmeralda.jpg"
        ],
        "descricao" => "Tri conjunto Verônica verde esmeralda, vibrante e cheio de vida."
      ],
      [
        "id" => 86,
        "nome" => "Tri Conjunto Verônica Verde Militar",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Tri conjunto Verônica/1verdemilitar.jpg",
          "CJNTS/Tri conjunto Verônica/2verdemilitar.jpg",
          "CJNTS/Tri conjunto Verônica/3verdemilitar.jpg",
          "CJNTS/Tri conjunto Verônica/4verdemilitar.jpg"
        ],
        "descricao" => "Tri conjunto Verônica verde militar, para um look ousado."
      ],
      [
        "id" => 87,
        "nome" => "Tri Conjunto Verônica Vermelho",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Tri conjunto Verônica/1Vermelho.jpg",
          "CJNTS/Tri conjunto Verônica/2Vermelho.jpg",
          "CJNTS/Tri conjunto Verônica/3Vermelho.jpg",
          "CJNTS/Tri conjunto Verônica/4Vermelho.jpg"
        ],
        "descricao" => "Tri conjunto Verônica vermelho, chamativo e cheio de personalidade."
      ],
      [
        "id" => 88,
        "nome" => "Tri Conjunto Eliza Azul Marinho",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Tri Conjunto Eliza/1Azul-marinho.jpg",
          "CJNTS/Tri Conjunto Eliza/2Azul-marinho.jpg"
        ],
        "descricao" => "Tri conjunto Eliza azul marinho, para um visual elegante."
      ],
      [
        "id" => 89,
        "nome" => "Tri Conjunto Eliza Azul Petróleo",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Tri Conjunto Eliza/1Azul-petróleo.jpg",
          "CJNTS/Tri Conjunto Eliza/2Azul-petróleo.jpg"
        ],
        "descricao" => "Tri conjunto Eliza azul petróleo, moderno e sofisticado."
      ],
      [
        "id" => 90,
        "nome" => "Tri Conjunto Eliza Preto",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Tri Conjunto Eliza/1Preto.jpg",
          "CJNTS/Tri Conjunto Eliza/2Preto.jpg"
        ],
        "descricao" => "Tri conjunto Eliza preto, clássico e versátil."
      ],
      [
        "id" => 91,
        "nome" => "Tri Conjunto Eliza Terracota",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Tri Conjunto Eliza/1Terracota.jpg",
          "CJNTS/Tri Conjunto Eliza/2Terracota.jpg"
        ],
        "descricao" => "Tri conjunto Eliza terracota, para um look outonal."
      ],
      [
        "id" => 92,
        "nome" => "Tri Conjunto Eliza Verde Oliva",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Tri Conjunto Eliza/1Verde-oliva.jpg",
          "CJNTS/Tri Conjunto Eliza/2Verde-oliva.jpg"
        ],
        "descricao" => "Tri conjunto Eliza verde oliva, discreto e elegante."
      ],
      [
        "id" => 93,
        "nome" => "Tri Conjunto Eliza Vermelho",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Tri Conjunto Eliza/1Vermelho.jpg",
          "CJNTS/Tri Conjunto Eliza/2Vermelho.jpg"
        ],
        "descricao" => "Tri conjunto Eliza vermelho, vibrante e cheio de energia."
      ],
      [
        "id" => 94,
        "nome" => "Tri Conjunto Luana Branco",
        "preco" => 169.99,
        "preco_atacado" => 111.99,
        "imagens" => [
          "CJNTS/Tri Conjunto Luana/1Branco.jpg",
          "CJNTS/Tri Conjunto Luana/2Branco.jpg",
          "CJNTS/Tri Conjunto Luana/3Branco.jpg"
        ],
        "descricao" => "Tri conjunto Luana branco, fresco e perfeito para o verão."
      ],
      [
        "id" => 95,
        "nome" => "Tri Conjunto Luana Ciano",
        "preco" => 169.99,
        "preco_atacado" => 111.99,
        "imagens" => [
          "CJNTS/Tri Conjunto Luana/1Ciano.jpg",
          "CJNTS/Tri Conjunto Luana/2Ciano.jpg"
        ],
        "descricao" => "Tri conjunto Luana ciano, moderno e cheio de estilo."
      ],
      [
        "id" => 96,
        "nome" => "Tri Conjunto Luana Laranja",
        "preco" => 169.99,
        "preco_atacado" => 111.99,
        "imagens" => [
          "CJNTS/Tri Conjunto Luana/1Laranja.jpg",
          "CJNTS/Tri Conjunto Luana/2Laranja.jpg",
          "CJNTS/Tri Conjunto Luana/3Laranja.jpg"
        ],
        "descricao" => "Tri conjunto Luana laranja, vibrante e alegre."
      ],
      [
        "id" => 97,
        "nome" => "Tri Conjunto Luana Pink",
        "preco" => 169.99,
        "preco_atacado" => 111.99,
        "imagens" => [
          "CJNTS/Tri Conjunto Luana/1Pink.jpg",
          "CJNTS/Tri Conjunto Luana/2Pink.jpg"
        ],
        "descricao" => "Tri conjunto Luana pink, delicado e feminino."
      ],
      [
        "id" => 98,
        "nome" => "Conjunto Alice Azul Marinho",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Conjuntos Alice/1azulmarinho.jpg",
          "CJNTS/Conjuntos Alice/2azulmarinho.jpg",
          "CJNTS/Conjuntos Alice/3azulmarinho.jpg",
          "CJNTS/Conjuntos Alice/4azulmarinho.jpg",
          "CJNTS/Conjuntos Alice/5azulmarinho.jpg"
        ],
        "descricao" => "Conjunto Alice azul marinho, clássico e elegante."
      ],
      [
        "id" => 99,
        "nome" => "Conjunto Alice Bordô",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Conjuntos Alice/1bordô.jpg",
          "CJNTS/Conjuntos Alice/2bordô.jpg",
          "CJNTS/Conjuntos Alice/3bordô.jpg",
          "CJNTS/Conjuntos Alice/4bordô.jpg",
          "CJNTS/Conjuntos Alice/5bordô.jpg"
        ],
        "descricao" => "Conjunto Alice bordô, sofisticado e perfeito para a noite."
      ],
      [
        "id" => 100,
        "nome" => "Conjunto Alice Preto",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Conjuntos Alice/1preto.jpg",
          "CJNTS/Conjuntos Alice/2preto.jpg",
          "CJNTS/Conjuntos Alice/3preto.jpg",
          "CJNTS/Conjuntos Alice/4preto.jpg"
        ],
        "descricao" => "Conjunto Alice preto, atemporal e versátil."
      ],
      [
        "id" => 101,
        "nome" => "Conjunto Alice Rosa",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Conjuntos Alice/1rosa.jpg",
          "CJNTS/Conjuntos Alice/2rosa.jpg",
          "CJNTS/Conjuntos Alice/3rosa.jpg",
          "CJNTS/Conjuntos Alice/4rosa.jpg"
        ],
        "descricao" => "Conjunto Alice rosa, delicado e romântico."
      ],
      [
        "id" => 102,
        "nome" => "Conjunto Alice Verde Água",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Conjuntos Alice/1Verde-água.jpg",
          "CJNTS/Conjuntos Alice/2Verde-água.jpg",
          "CJNTS/Conjuntos Alice/3Verde-água.jpg",
          "CJNTS/Conjuntos Alice/4Verde-água.jpg"
        ],
        "descricao" => "Conjunto Alice verde água, fresco e perfeito para o verão."
      ],
      [
        "id" => 103,
        "nome" => "Conjunto Alice Verde Petróleo",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Conjuntos Alice/1verde-petróleo.jpg",
          "CJNTS/Conjuntos Alice/2verde-petróleo..jpg",
          "CJNTS/Conjuntos Alice/3verde-petróleo.jpg",
          "CJNTS/Conjuntos Alice/4verde-petróleo.jpg"
        ],
        "descricao" => "Conjunto Alice verde petróleo, sofisticado e moderno."
      ],
      [
        "id" => 104,
        "nome" => "Conjunto Plush Pink",
        "preco" => 169.99,
        "preco_atacado" => 111.99,
        "imagens" => [
          "CJNTS/Conjunto Plush/1PinkPlush.jpg"
        ],
        "descricao" => "Conjunto plush pink, para um toque de suavidade e conforto."
      ],
      [
        "id" => 105,
        "nome" => "Conjunto Plush Preto",
        "preco" => 169.99,
        "preco_atacado" => 111.99,
        "imagens" => [
          "CJNTS/Conjunto Plush/1PretoPlush.jpg"
        ],
        "descricao" => "Conjunto plush preto, clássico e cheio de elegância."
      ],
      [
        "id" => 106,
        "nome" => "Conjunto Plush Vinho",
        "preco" => 169.99,
        "preco_atacado" => 111.99,
        "imagens" => [
          "CJNTS/Conjunto Plush/1VinhoPlush.jpg"
        ],
        "descricao" => "Conjunto plush vinho, rico e sofisticado."
      ],
      [
        "id" => 107,
        "nome" => "Conjunto Tweed Marrom Caramelo e Branco",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Conjunto Tweed/marrom-carameloebranco (2).jpg"
        ],
        "descricao" => "Conjunto tweed marrom caramelo e branco, para um look chique e moderno."
      ],
      [
        "id" => 108,
        "nome" => "Conjunto Tweed Preto e Branco",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Conjunto Tweed/pretoebranco.jpg"
        ],
        "descricao" => "Conjunto tweed preto e branco, atemporal e elegante."
      ],
      [
        "id" => 109,
        "nome" => "Conjunto Tweed Verde Musgo e Branco",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Conjunto Tweed/verde-musgoebranco.jpg"
        ],
        "descricao" => "Conjunto tweed verde musgo e branco, sofisticado e moderno."
      ],
      [
        "id" => 110,
        "nome" => "Conjunto Tweed Pink e Branco",
        "preco" => 189.99,
        "preco_atacado" => 128.99,
        "imagens" => [
          "CJNTS/Conjunto Tweed/pinkebranco.jpg"
        ],
        "descricao" => "Conjunto tweed pink e branco, delicado e cheio de charme."
      ]
    ];
    foreach ($produtosConjuntos as $produto): ?>
      <a href="produto.php?id=<?php echo $produto['id']; ?>" class="produto-link" style="text-decoration:none;color:inherit;">
        <div class="produto"
          data-id="<?php echo $produto['id']; ?>"
          data-nome="<?php echo htmlspecialchars($produto['nome']); ?>"
          data-preco="<?php echo $produto['preco']; ?>"
          data-preco-atacado="<?php echo $produto['preco_atacado']; ?>"
          data-imagens='<?php echo json_encode($produto['imagens']); ?>'>
          <img src="<?php echo $produto['imagens'][0]; ?>" alt="<?php echo htmlspecialchars($produto['nome']); ?>" class="zoom-img">
          <div class="info">
            <h2><?php echo $produto['nome']; ?></h2>
            <div class="precos">
              <span class="preco-varejo">Varejo R$ <?php echo number_format($produto['preco'],2,',','.'); ?></span><br>
              <span class="preco-atacado">Atacado R$ <?php echo number_format($produto['preco_atacado'],2,',','.'); ?></span>
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
    <a href="catalagoconjunto.php" class="botao-pagina anterior-pagina">❮ Anterior</a>
    <a href="catalagoconjunto.php" class="botao-pagina pagina-atual">1</a>
    <a href="catalagoconjunto.php" class="botao-pagina proximo-pagina">Próximo ❯</a>
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