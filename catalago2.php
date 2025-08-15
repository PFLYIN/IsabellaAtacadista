<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

  <title>Catálogo de Vestidos - Página 2</title>
 
  <link rel="stylesheet" href="CSS/catalago2.css">
</head>
<body>

<h1 class="titulo">Coleção Exclusiva de Vestidos</h1>

<div class="container-section">
  <div class="grid">
    <?php
    // Exemplo de array para página 2 (adicione todos os produtos conforme necessário)
    $produtos2 = [
      [
        "id" => 43,
        "nome" => "Vestido Kate Roxo",
        "preco" => 149.00,
        "preco_atacado" => 119.99,
        "imagens" => [
          "Vtds-MissIris/Vestido Kate/1RoxoKate.jpg",
          "Vtds-MissIris/Vestido Kate/2RoxoKate.jpg",
          "Vtds-MissIris/Vestido Kate/3RoxoKate.jpg"
        ],
        "descricao" => "Vestido longo roxo com detalhes delicados, perfeito para festas e eventos especiais."
      ],
      [
        "id" => 44,
        "nome" => "Vestido Kate Bege",
        "preco" => 149.00,
        "preco_atacado" => 119.99,
        "imagens" => [
          "Vtds-MissIris/Vestido Kate/1BegeKate.jpg",
          "Vtds-MissIris/Vestido Kate/2BegeKate.jpg",
          "Vtds-MissIris/Vestido Kate/3BegeKate.jpg"
        ],
        "descricao" => "Vestido bege sofisticado, ideal para ocasiões formais e casuais."
      ],
      [
        "id" => 45,
        "nome" => "Vestido Bonequita Azul",
        "preco" => 149.00,
        "preco_atacado" => 119.99,
        "imagens" => [
          "Vtds-MissIris/Vestido Bonequita/1AzulBonequita.jpg",
          "Vtds-MissIris/Vestido Bonequita/2AzulBonequita.jpg"
        ],
        "descricao" => "Vestido azul com modelagem boneca, leve e confortável para o dia a dia."
      ],
      [
        "id" => 46,
        "nome" => "Vestido Longo Laxtex Branco",
        "preco" => 149.00,
        "preco_atacado" => 100.00,
        "imagens" => [
          "VTDS-TMRS/Vestido Longo Laxtex/1BrancoLaxtex.jpg"
        ],
        "descricao" => "Vestido longo branco com detalhe em lastex, elegante e versátil."
      ],
      [
        "id" => 47,
        "nome" => "Vestido Longo Laxtex Marron",
        "preco" => 149.00,
        "preco_atacado" => 100.00,
        "imagens" => [
          "VTDS-TMRS/Vestido Longo Laxtex/3MarronLaxtex.jpg"
        ],
        "descricao" => "Vestido longo marrom com lastex, perfeito para looks sofisticados."
      ],
      [
        "id" => 48,
        "nome" => "Vestido Longo Laxtex Azul Escuro",
        "preco" => 149.00,
        "preco_atacado" => 100.00,
        "imagens" => [
          "VTDS-TMRS/Vestido longo Laxtex/2Azul Escuro Laxtex.jpg"
        ],
        "descricao" => "Vestido azul escuro com lastex, ideal para eventos noturnos."
      ],
      [
        "id" => 49,
        "nome" => "Vestido Longo Laxtex Verde",
        "preco" => 149.00,
        "preco_atacado" => 100.00,
        "imagens" => [
          "VTDS-TMRS/Vestido longo Laxtex/4VerdeLaxtex.jpg"
        ],
        "descricao" => "Vestido longo verde com lastex, moderno e confortável."
      ],
      [
        "id" => 50,
        "nome" => "Vestido Longo Laxtex Azul",
        "preco" => 149.00,
        "preco_atacado" => 100.00,
        "imagens" => [
          "VTDS-TMRS/Vestido longo Laxtex/5AzulLaxtex.jpg"
        ],
        "descricao" => "Vestido longo azul com lastex, para um visual elegante."
      ],
      [
        "id" => 51,
        "nome" => "Vestido Longo Laxtex Branco",
        "preco" => 149.00,
        "preco_atacado" => 100.00,
        "imagens" => [
          "VTDS-TMRS/Vestido longo Laxtex/6BrancoLaxtex.jpg"
        ],
        "descricao" => "Vestido branco longo com lastex, clássico e atemporal."
      ],
      [
        "id" => 52,
        "nome" => "Vestido 3 Maria Vermelho",
        "preco" => 149.00,
        "preco_atacado" => 85.00,
        "imagens" => [
          "VTDS-TMRS/Vestido 3 Maria/1Vermelho3Marias.jpg",
          "VTDS-TMRS/Vestido 3 Maria/2Vermelho3Marias.jpg",
          "VTDS-TMRS/Vestido 3 Maria/3Vermelho3Marias.jpg"
        ],
        "descricao" => "Vestido vermelho modelo 3 Marias, leve e fluido para dias quentes."
      ],
      [
        "id" => 53,
        "nome" => "Vestido 3 Maria Preto",
        "preco" => 149.00,
        "preco_atacado" => 85.00,
        "imagens" => [
          "VTDS-TMRS/Vestido 3 Maria/1Preto3Maria.jpg",
          "VTDS-TMRS/Vestido 3 Maria/2Preto3Maria.jpg",
          "VTDS-TMRS/Vestido 3 Maria/3Preto3Maria.jpg"
        ],
        "descricao" => "Vestido preto modelo 3 Marias, básico e elegante."
      ],
      [
        "id" => 54,
        "nome" => "Vestido Longo Gola V Preto",
        "preco" => 149.00,
        "preco_atacado" => 85.00,
        "imagens" => [
          "VTDS-TMRS/Vestido Longo V/1VSPreto.jpg"
        ],
        "descricao" => "Vestido longo preto com gola V, ideal para festas e eventos."
      ],
      [
        "id" => 55,
        "nome" => "Vestido Gola V Azul",
        "preco" => 149.00,
        "preco_atacado" => 85.00,
        "imagens" => [
          "VTDS-TMRS/Vestido Gola V/1AzulGolaV.jpg",
          "VTDS-TMRS/Vestido Gola V/2AzulGolaV.jpg",
          "VTDS-TMRS/Vestido Gola V/3AzulGolaV.jpg"
        ],
        "descricao" => "Vestido azul com gola V, moderno e confortável."
      ],
      [
        "id" => 56,
        "nome" => "Vestido Gola V Bege",
        "preco" => 149.00,
        "preco_atacado" => 85.00,
        "imagens" => [
          "VTDS-TMRS/Vestido Gola V/1BegeGolaV.jpg",
          "VTDS-TMRS/Vestido Gola V/2BegeGolaV.jpg",
          "VTDS-TMRS/Vestido Gola V/3BegeGolaV.jpg"
        ],
        "descricao" => "Vestido bege com gola V, perfeito para o dia a dia."
      ],
      [
        "id" => 57,
        "nome" => "Vestido Rebeca Vinho",
        "preco" => 149.00,
        "preco_atacado" => 119.99,
        "imagens" => [
          "Vtds-MissIris/Vestidos Rebeca/1VinhoRebeca.jpg",
          "Vtds-MissIris/Vestidos Rebeca/2VinhoRebeca.jpg",
          "Vtds-MissIris/Vestidos Rebeca/3VinhoRebeca.jpg"
        ],
        "descricao" => "Vestido vinho modelo Rebeca, elegante e sofisticado."
      ],
      [
        "id" => 58,
        "nome" => "Vestido Rebeca Azul",
        "preco" => 149.00,
        "preco_atacado" => 119.99,
        "imagens" => [
          "Vtds-MissIris/Vestidos Rebeca/1AzulRebeca.jpg",
          "Vtds-MissIris/Vestidos Rebeca/2AzulRebeca.jpg",
          "Vtds-MissIris/Vestidos Rebeca/3AzulRebeca.jpg"
        ],
        "descricao" => "Vestido azul modelo Rebeca, para um visual moderno."
      ],
      [
        "id" => 59,
        "nome" => "Vestido Rebeca Vinho e Preto",
        "preco" => 149.00,
        "preco_atacado" => 119.99,
        "imagens" => [
          "Vtds-MissIris/Vestidos Rebeca/1VinhoePretoRebeca.jpg",
          "Vtds-MissIris/Vestidos Rebeca/2VinhoePretoRebeca.jpg",
          "Vtds-MissIris/Vestidos Rebeca/3VinhoePretoRebeca.jpg"
        ],
        "descricao" => "Vestido Rebeca vinho e preto, destaque para ocasiões especiais."
      ],
      [
        "id" => 60,
        "nome" => "Vestido Samara Pink ",
        "preco" => 149.00,
        "preco_atacado" => 119.99,
        "imagens" => [
          "Vtds-MissIris/Vestidos Samara/1PinkSamara.jpg",
          "Vtds-MissIris/Vestidos Samara/2PinkSamara.jpg",
          "Vtds-MissIris/Vestidos Samara/3PinkSamara.jpg"
        ],
        "descricao" => "Vestido pink modelo Samara, alegre e vibrante."
      ],
      [
        "id" => 61,
        "nome" => "Vestido Samara Preto ",
        "preco" => 149.00,
        "preco_atacado" => 119.99,
        "imagens" => [
          "Vtds-MissIris/Vestidos Samara/1PretoSamara.jpg",
          "Vtds-MissIris/Vestidos Samara/2PretoSamara.jpg",
          "Vtds-MissIris/Vestidos Samara/3PretoSamara.jpg"
        ],
        "descricao" => "Vestido preto modelo Samara, clássico e elegante."
      ],
      [
        "id" => 62,
        "nome" => "Vestido Carmen Ciano",
        "preco" => 149.00,
        "preco_atacado" => 125.00,
        "imagens" => [
          "Vtds-MissIris/Vestidos Carmem/1CianoCarmen.jpg",
          "Vtds-MissIris/Vestidos Carmem/2CianoCarmen.jpg",
          "Vtds-MissIris/Vestidos Carmem/3CianoCarmen.jpg"
        ],
        "descricao" => "Vestido ciano modelo Carmen, para um visual marcante."
      ],
      [
        "id" => 63,
        "nome" => "Vestido Carmen Coral",
        "preco" => 149.00,
        "preco_atacado" => 125.00,
        "imagens" => [
          "Vtds-MissIris/Vestidos Carmem/1CoralCarmen.jpg",
          "Vtds-MissIris/Vestidos Carmem/2CoralCarmen.jpg",
          "Vtds-MissIris/Vestidos Carmem/3CoralCarmen.jpg"
        ],
        "descricao" => "Vestido coral modelo Carmen, leve e sofisticado."
      ],
      [
        "id" => 64,
        "nome" => "Vestido Elizamma Branco",
        "preco" => 149.00,
        "preco_atacado" => 122.99,
        "imagens" => [
          "Vtds-MissIris/Vestidos Elizamma/1BrancoElizamma.jpg",
          "Vtds-MissIris/Vestidos Elizamma/2BrancoElizamma.jpg",
          "Vtds-MissIris/Vestidos Elizamma/3BrancoElizamma.jpg"
        ],
        "descricao" => "Vestido branco modelo Elizamma, delicado e confortável."
      ],
      [
        "id" => 65,
        "nome" => "Vestido Elizamma Marsala",
        "preco" => 149.00,
        "preco_atacado" => 122.99,
        "imagens" => [
          "Vtds-MissIris/Vestidos Elizamma/1MarsalaElizamma.jpg",
          "Vtds-MissIris/Vestidos Elizamma/2MarsalaElizamma.jpg",
          "Vtds-MissIris/Vestidos Elizamma/3MarsalaElizamma.jpg"
        ],
        "descricao" => "Vestido marsala modelo Elizamma, elegante e moderno."
      ],
      [
        "id" => 66,
        "nome" => "Vestido Elizamma Off-White",
        "preco" => 149.00,
        "preco_atacado" => 122.99,
        "imagens" => [
          "Vtds-MissIris/Vestidos Elizamma/1Off-WhiteElizamma.jpg",
          "Vtds-MissIris/Vestidos Elizamma/2Off-WhiteElizamma.jpg",
          "Vtds-MissIris/Vestidos Elizamma/3Off-WhiteElizamma.jpg"
        ],
        "descricao" => "Vestido off-white modelo Elizamma, para um visual clean."
      ],
      [
        "id" => 67,
        "nome" => "Vestido Clide Verde-Àgua",
        "preco" => 149.00,
        "preco_atacado" => 122.99,
        "imagens" => [
          "Vtds-MissIris/Vestidos Clide/1Verde-ÀguaClide.jpg",
          "Vtds-MissIris/Vestidos Clide/2Verde-ÀguaClide.jpg"
        ],
        "descricao" => "Vestido verde-água modelo Clide, leve e estiloso."
      ],
      [
        "id" => 68,
        "nome" => "Vestido Clide Vinho",
        "preco" => 149.00,
        "preco_atacado" => 122.99,
        "imagens" => [
          "Vtds-MissIris/Vestidos Clide/1VinhoClide.jpg",
          "Vtds-MissIris/Vestidos Clide/2VinhoClide.jpg"
        ],
        "descricao" => "Vestido vinho modelo Clide, para um visual sofisticado."
      ],
      [
        "id" => 69,
        "nome" => "Vestido Clide Pastel",
        "preco" => 149.00,
        "preco_atacado" => 122.99,
        "imagens" => [
          "Vtds-MissIris/Vestidos Clide/1VerdePastelClide.jpg",
          "Vtds-MissIris/Vestidos Clide/2VerdePastelClide.jpg",
          "Vtds-MissIris/Vestidos Clide/3VerdePastelClide.jpg"
        ],
        "descricao" => "Vestido verde pastel modelo Clide, delicado e moderno."
      ],
      [
        "id" => 70,
        "nome" => "Vestido Camila Verde",
        "preco" => 149.00,
        "preco_atacado" => 125.00,
        "imagens" => [
          "Vtds-MissIris/Vestidos Camila/1VerdeCamila.jpg",
          "Vtds-MissIris/Vestidos Camila/2VerdeCamila.jpg"
        ],
        "descricao" => "Vestido verde modelo Camila, confortável e estiloso."
      ],
      [
        "id" => 71,
        "nome" => "Vestido Camila Preto",
        "preco" => 149.00,
        "preco_atacado" => 125.00,
        "imagens" => [
          "Vtds-MissIris/Vestidos Camila/1PretoCamila.jpgg",
          "Vtds-MissIris/Vestidos Camila/2PretoCamila.jpg"
        ],
        "descricao" => "Vestido preto modelo Camila, básico e elegante."
      ],
      [
        "id" => 72,
        "nome" => "Vestido Camila Roxo",
        "preco" => 149.00,
        "preco_atacado" => 125.00,
        "imagens" => [
          "Vtds-MissIris/Vestidos Camila/1RoxoCamila.jpg",
          "Vtds-MissIris/Vestidos Camila/2RoxoCamila.jpg"
        ],
        "descricao" => "Vestido roxo modelo Camila, para um visual marcante."
      ],
      [
        "id" => 73,
        "nome" => "Vestido Camila Verde Menta-Brilhante",
        "preco" => 149.00,
        "preco_atacado" => 125.00,
        "imagens" => [
          "Vtds-MissIris/Vestidos Camila/1VerdeMenta-BrilhanteCamila.jpg",
          "Vtds-MissIris/Vestidos Camila/2VerdeMenta-Brilhante.jpg"
        ],
        "descricao" => "Vestido verde menta-brilhante modelo Camila, moderno e delicado."
      ],
      [
        "id" => 74,
        "nome" => "Vestido Gabriela Bordô",
        "preco" => 149.00,
        "preco_atacado" => 129.99,
        "imagens" => [
          "Vtds-MissIris/Vestidos Gabriela/1Bordô.jpg"
        ],
        "descricao" => "Vestido bordô modelo Gabriela, elegante e sofisticado."
      ],
      [
        "id" => 75,
        "nome" => "Vestido Gabriela Preto",
        "preco" => 149.00,
        "preco_atacado" => 129.99,
        "imagens" => [
          "Vtds-MissIris/Vestidos Gabriela/1PretoGabriela.jpg"
        ],
        "descricao" => "Vestido preto modelo Gabriela, clássico e versátil."
      ],
      [
        "id" => 76,
        "nome" => "Vestido Gabriela Terracota",
        "preco" => 149.00,
        "preco_atacado" => 129.99,
        "imagens" => [
          "Vtds-MissIris/Vestidos Gabriela/1TerracotaGabriela.jpg"
        ],
        "descricao" => "Vestido terracota modelo Gabriela, para um visual moderno."
      ],
      [
        "id" => 77,
        "nome" => "Vestido Gabriela Verde-Petróleo",
        "preco" => 149.00,
        "preco_atacado" => 129.99,
        "imagens" => [
          "Vtds-MissIris/Vestidos Gabriela/1Verde-Petróleo.jpg"
        ],
        "descricao" => "Vestido verde-petróleo modelo Gabriela, sofisticado e elegante."
      ]
    ];
    foreach ($produtos2 as $produto): ?>
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
    <a href="catalago1.php" class="botao-pagina anterior-pagina">❮ Anterior</a>
    <a href="catalago1.php" class="botao-pagina">1</a>
    <a href="catalago2.php" class="botao-pagina pagina-atual">2</a>
    <a href="#" class="botao-pagina proximo-pagina" style="opacity: 0.5; pointer-events: none;">Próximo ❯</a>
  </div>
</div>

<div class="paginacao-container">
  <a href="carrinho.php" class="botao-paginacao">Ir para o Carrinho 🛒</a>
</div>

<script src="carrinho.js"></script>
<script src="carrinho-catalogo.js"></script>
</body>
</html>
