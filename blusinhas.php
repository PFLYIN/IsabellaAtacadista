<?php include "header.php"; ?>
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
    $blusinhas = [
      [
        "id" => 111,
        "nome" => "Blusinha Azul Manga Rendada",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/AzulClaro3.jpg"],
        "descricao" => "Blusinha azul com manga rendada, delicada e perfeita para looks românticos."
      ],
      [
        "id" => 112,
        "nome" => "Blusinha Azul Claro",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/AzulClaro.jpg"],
        "descricao" => "Blusinha azul claro, básica e confortável para o dia a dia."
      ],
      [
        "id" => 113,
        "nome" => "Blusinha Azul Claro com Renda e Pérolas",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/AzulClaro4.jpg"],
        "descricao" => "Blusinha azul claro com detalhes em renda e pérolas, sofisticada e charmosa."
      ],
      [
        "id" => 114,
        "nome" => "Blusinha Azul Claro Florido com Laço",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/AzulClaroFlorido.jpg"],
        "descricao" => "Blusinha azul claro com estampa florida e laço, alegre e feminina."
      ],
      [
        "id" => 115,
        "nome" => "Blusinha Azul Royal Manga Bufante",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/AzulRoyal.jpg"],
        "descricao" => "Blusinha azul royal com manga bufante, moderna e estilosa."
      ],
      [
        "id" => 116,
        "nome" => "Blusinha Bege Listrada com Botões",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/Bege.jpg"],
        "descricao" => "Blusinha bege listrada com botões, versátil e elegante."
      ],
      [
        "id" => 117,
        "nome" => "Blusinha Branca com Corações Pretos e Manga Bufante",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/Branco-e-Preto.jpg"],
        "descricao" => "Blusinha branca com corações pretos e manga bufante, divertida e delicada."
      ],
      [
        "id" => 118,
        "nome" => "Blusinha Branca com Poá Preto e Laço",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/Branco-e-PretoIMG1.jpg", "Blusinhas Gospel/Branco-e-PretoIMG2.jpg"],
        "descricao" => "Blusinha branca com poá preto e laço, clássica e charmosa."
      ],
      [
        "id" => 119,
        "nome" => "Blusinha Branca Floral com Laço",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/Branco-Florido.jpg"],
        "descricao" => "Blusinha branca com estampa floral e laço, delicada e romântica."
      ],
      [
        "id" => 120,
        "nome" => "Blusinha Branca Floral Manga Bufante",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/Branco-Florido1.jpg"],
        "descricao" => "Blusinha branca floral com manga bufante, leve e feminina."
      ],
      [
        "id" => 121,
        "nome" => "Blusinha Branca Laço e Renda nas Mangas",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/Branco.jpg"],
        "descricao" => "Blusinha branca com laço e renda nas mangas, sofisticada e delicada."
      ],
      [
        "id" => 122,
        "nome" => "Blusinha Branca Manga Bufante com Laço",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/Branco1.jpg"],
        "descricao" => "Blusinha branca manga bufante com laço, moderna e elegante."
      ],
      [
        "id" => 123,
        "nome" => "Blusinha Branca Manga Rendada com Laço",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/Branco3.jpg"],
        "descricao" => "Blusinha branca com manga rendada e laço, perfeita para ocasiões especiais."
      ],
      [
        "id" => 124,
        "nome" => "Blusinha Branca com Flores Bordadas",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/Branco4.jpg"],
        "descricao" => "Blusinha branca com flores bordadas, delicada e exclusiva."
      ],
      [
        "id" => 125,
        "nome" => "Blusinha Laranja Avermelhado Manga Bufante com Laço",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/Laranja-Avermelhado.jpg"],
        "descricao" => "Blusinha laranja avermelhado com manga bufante e laço, vibrante e estilosa."
      ],
      [
        "id" => 126,
        "nome" => "Blusinha Rosa Manga Bufante com Laço",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/Rosa.jpg"],
        "descricao" => "Blusinha rosa com manga bufante e laço, feminina e delicada."
      ],
      [
        "id" => 127,
        "nome" => "Blusinha Azul Claro Manga Bufante (Costas e Frente)",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/P1AzulClaro.jpg", "Blusinhas Gospel/P2AzulClaro.jpg"],
        "descricao" => "Blusinha azul claro manga bufante, vista frente e costas, moderna e confortável."
      ],
      [
        "id" => 128,
        "nome" => "Blusinha Rosa Detalhe Pérola Manga Bufante",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/Rosa1.jpg"],
        "descricao" => "Blusinha rosa com detalhe de pérola e manga bufante, sofisticada e charmosa."
      ],
      [
        "id" => 129,
        "nome" => "Blusinha Rosa Manga Longa com Laço",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/Rosa2.jpg"],
        "descricao" => "Blusinha rosa manga longa com laço, perfeita para dias mais frescos."
      ],
      [
        "id" => 130,
        "nome" => "Blusinha Rosa Claro com Renda Bordada",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/RosaClaro.jpg"],
        "descricao" => "Blusinha rosa claro com renda bordada, delicada e elegante."
      ],
      [
        "id" => 131,
        "nome" => "Blusinha Rosa Queimado com Poá e Laço",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/RosaQueimado.jpg"],
        "descricao" => "Blusinha rosa queimado com poá e laço, moderna e estilosa."
      ],
      [
        "id" => 132,
        "nome" => "Blusinha Telha Clara com Renda e Laço",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/TelhaClara.jpg"],
        "descricao" => "Blusinha telha clara com renda e laço, para um visual sofisticado."
      ],
      [
        "id" => 133,
        "nome" => "Blusinha Terracota Poá Manga Bufante",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/Terracota.jpg"],
        "descricao" => "Blusinha terracota com poá e manga bufante, estilosa e confortável."
      ],
      [
        "id" => 134,
        "nome" => "Blusinha Verde Manga Bufante com Laço e Pérolas",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/Verde.jpg"],
        "descricao" => "Blusinha verde manga bufante com laço e pérolas, delicada e sofisticada."
      ],
      [
        "id" => 135,
        "nome" => "Blusinha Verde Manga Bufante com Laço e Detalhe",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/Verde1.jpg"],
        "descricao" => "Blusinha verde manga bufante com laço e detalhe, moderna e charmosa."
      ],
      [
        "id" => 136,
        "nome" => "Blusinha Verde Claro Manga Bufante com Laço e Renda",
        "preco" => 89.00,
        "preco_atacado" => 53.00,
        "imagens" => ["Blusinhas Gospel/VerdeClaro.jpg"],
        "descricao" => "Blusinha verde claro manga bufante com laço e renda, perfeita para looks delicados."
      ]
    ];
    foreach ($blusinhas as $produto): ?>
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