<?php include "header.php"; ?>
<?php
$produtos = [
  [
    "id" => 1,
    "nome" => "Vestido Rafaela Rosa",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestido RafaelaI/VestidoRosa-FT1.jpg",
      "Vtds-MissIris/Vestido RafaelaI/VESTIDOROSA-FT2.jpg",
      "Vtds-MissIris/Vestido RafaelaI/VestidoRosa-FT3.jpg"
    ],
    "descricao" => "Vestido elegante na cor rosa, perfeito para ocasiões especiais. Tecido leve e confortável."
  ],
  [
    "id" => 2,
    "nome" => "Vestido Rafaela Preto",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestido RafaelaI/PRETOVESTIDO-FT1.jpg",
      "Vtds-MissIris/Vestido RafaelaI/PretoVestido-FT2.jpg"
    ],
    "descricao" => "Vestido preto clássico, ideal para eventos noturnos e festas. Modelagem moderna."
  ],
  [
    "id" => 3,
    "nome" => "Vestido Amarelo Iris",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestido Iris/VstdAmarelo-FT1.jpg",
      "Vtds-MissIris/Vestido Iris/VstdAmarelo-FT2.jpg",
      "Vtds-MissIris/Vestido Iris/VstdAmarelo-FT3.jpg"
    ],
    "descricao" => "Vestido amarelo florido, transmite alegria e leveza. Ótimo para dias ensolarados."
  ],
  [
    "id" => 4,
    "nome" => "Vestido Branco Iris",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestido Iris/VSTDBranco-FT1.jpg",
      "Vtds-MissIris/Vestido Iris/VSTDBranco-FT2.jpg"
    ],
    "descricao" => "Vestido branco com estampa floral, delicado e sofisticado. Ideal para ocasiões especiais."
  ],
  [
    "id" => 5,
    "nome" => "Vestido Mirian Verde",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Mirian/1VsVerdeMirian.jpg",
      "Vtds-MissIris/Vestidos Mirian/2VsVerdeMirian.jpg",
      "Vtds-MissIris/Vestidos Mirian/3VerdeMirian.jpg"
    ],
    "descricao" => "Vestido verde vibrante, com caimento perfeito e tecido confortável."
  ],
  [
    "id" => 6,
    "nome" => "Vestido Mirian Lilas",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Mirian/1LilasMirian.jpg",
      "Vtds-MissIris/Vestidos Mirian/2LilasMirian.jpg",
      "Vtds-MissIris/Vestidos Mirian/3LilasMirian.jpg"
    ],
    "descricao" => "Vestido lilás delicado, perfeito para um visual romântico e suave."
  ],
  [
    "id" => 7,
    "nome" => "Vestido Mirian Bege",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Mirian/1LilasMirian.jpg",
      "Vtds-MissIris/Vestidos Mirian/2LilasMirian.jpg",
      "Vtds-MissIris/Vestidos Mirian/3LilasMirian.jpg"
    ],
    "descricao" => "Vestido bege neutro, versátil para várias ocasiões."
  ],
  [
    "id" => 8,
    "nome" => "Vestido Laís Vinho",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Laís/1VsVinhoLaís.jpg",
      "Vtds-MissIris/Vestidos Laís/2VsVinhoLaís.jpg",
      "Vtds-MissIris/Vestidos Laís/3VsVinhoLaís.jpg"
    ],
    "descricao" => "Vestido vinho sofisticado, ideal para eventos especiais."
  ],
  [
    "id" => 9,
    "nome" => "Vestido Laís Preto",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Laís/1VSPRETOLAÍS.jpg",
      "Vtds-MissIris/Vestidos Laís/2VSPRETOLAÍS.jpg",
      "Vtds-MissIris/Vestidos Laís/3VSPRETOLAÍS.jpg"
    ],
    "descricao" => "Vestido preto elegante, básico e indispensável."
  ],
  [
    "id" => 10,
    "nome" => "Vestido Laís Terracota",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Laís/1TerracotaLaís.jpg",
      "Vtds-MissIris/Vestidos Laís/2TerracotaLaís.jpg",
      "Vtds-MissIris/Vestidos Laís/3Terracota.jpg"
    ],
    "descricao" => "Vestido terracota, cor tendência para looks modernos."
  ],
  [
    "id" => 11,
    "nome" => "Vestido Karol Branco",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Karol/1VsBrancoFloridoKarol.jpg",
      "Vtds-MissIris/Vestidos Karol/2VsBrancoKarol.jpg",
      "Vtds-MissIris/Vestidos Karol/3VsBrancoKarol.jpg"
    ],
    "descricao" => "Vestido branco com estampa floral, ideal para festas de verão."
  ],
  [
    "id" => 12,
    "nome" => "Vestido Karol Amarelo",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Karol/1AMARELOKarol.jpg",
      "Vtds-MissIris/Vestidos Karol/2AMARELOKarol.jpg",
      "Vtds-MissIris/Vestidos Karol/3AMARELOKarol.jpg"
    ],
    "descricao" => "Vestido amarelo vibrante, perfeito para o verão."
  ],
  [
    "id" => 13,
    "nome" => "Vestido Taline Vermelho",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestido Taline/1Vermelho Taline.jpg",
      "Vtds-MissIris/Vestido Taline/2Vermelho Taline.jpg",
      "Vtds-MissIris/Vestido Taline/3Vermelho Taline.jpg"
    ],
    "descricao" => "Vestido vermelho clássico, um must-have no guarda-roupa."
  ],
  [
    "id" => 14,
    "nome" => "Vestido Cleide Rosa",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestido Cleide/1RosaCleide.jpg",
      "Vtds-MissIris/Vestido Cleide/2RosaCleide.jpg",
      "Vtds-MissIris/Vestido Cleide/3RosaCleide.jpg"
    ],
    "descricao" => "Vestido rosa chic, perfeito para arrasar em qualquer evento."
  ],
  [
    "id" => 15,
    "nome" => "Vestido Ester Preto",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Ester/1PretoEster.jpg",
      "Vtds-MissIris/Vestidos Ester/2PretoEster.jpg",
      "Vtds-MissIris/Vestidos Ester/3PretoEster.jpg"
    ],
    "descricao" => "Vestido preto elegante, ideal para festas e eventos formais."
  ],
  [
    "id" => 16,
    "nome" => "Vestido Ester Terracota",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Ester/1TerracotaEster.jpg",
      "Vtds-MissIris/Vestidos Ester/2TerracotaEster.jpg",
      "Vtds-MissIris/Vestidos Ester/3TerracotaEster.jpg"
    ],
    "descricao" => "Vestido terracota sofisticado, uma escolha moderna e elegante."
  ],
  [
    "id" => 17,
    "nome" => "Vestido Ester Rosa",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Ester/1ROSAEster.jpg",
      "Vtds-MissIris/Vestidos Ester/2ROSAEster.jpg",
      "Vtds-MissIris/Vestidos Ester/3ROSAEster.jpg"
    ],
    "descricao" => "Vestido rosa chic, perfeito para qualquer ocasião."
  ],
  [
    "id" => 18,
    "nome" => "Vestido Mãe e Filha Terracota",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Mãe e Filha/1TerracotaMãeeFilha.jpg",
      "Vtds-MissIris/Mãe e Filha/2TerracotaMãeeFilha.jpg",
      "Vtds-MissIris/Mãe e Filha/3TerracotaMãeeFilha.jpg"
    ],
    "descricao" => "Conjunto de vestido mãe e filha em terracota, para um look coordenado e elegante."
  ],
  [
    "id" => 19,
    "nome" => "Vestido Mãe e Filha Rosa",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Mãe e Filha/1RosaMãeeFilha.jpg",
      "Vtds-MissIris/Mãe e Filha/2RosaMãeeFilha.jpg",
      "Vtds-MissIris/Mãe e Filha/3RosaMãeeFilha.jpg"
    ],
    "descricao" => "Conjunto de vestido mãe e filha em rosa, para um visual delicado e harmonioso."
  ],
  [
    "id" => 20,
    "nome" => "Vestido Mãe e Filha Preto",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Mãe e Filha/1PretoMãeeFilha.jpg",
      "Vtds-MissIris/Mãe e Filha/2PretoMãeeFilha.jpg",
      "Vtds-MissIris/Mãe e Filha/3PretoMãeeFilha.jpg"
    ],
    "descricao" => "Conjunto de vestido mãe e filha em preto, para um look elegante e sofisticado."
  ],
  [
    "id" => 21,
    "nome" => "Vestido Karen Branco",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Karen/1BrancoKaren.jpg",
      "Vtds-MissIris/Vestidos Karen/2BrancoKaren.jpg",
      "Vtds-MissIris/Vestidos Karen/3BrancoKaren.jpg"
    ],
    "descricao" => "Vestido branco clássico, uma peça-chave para o guarda-roupa."
  ],
  [
    "id" => 22,
    "nome" => "Vestido Karen Violeta",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Karen/1Lilas.jpg",
      "Vtds-MissIris/Vestidos Karen/2LilasKaren.jpg",
      "Vtds-MissIris/Vestidos Karen/3LilaSKaren.jpg"
    ],
    "descricao" => "Vestido violeta sofisticado, ideal para eventos especiais."
  ],
  [
    "id" => 23,
    "nome" => "Vestido Karen Roxo ",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Karen/1RoxoKaren.jpg",
      "Vtds-MissIris/Vestidos Karen/2RoxoKaren.jpg",
      "Vtds-MissIris/Vestidos Karen/3RoxoKaren.jpg"
    ],
    "descricao" => "Vestido roxo elegante, uma escolha ousada e moderna."
  ],
  [
    "id" => 24,
    "nome" => "Vestido Karen Rosa ",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Karen/1RosaKaren.jpg",
      "Vtds-MissIris/Vestidos Karen/2RosaKaren.jpg",
      "Vtds-MissIris/Vestidos Karen/3RosaKaren.jpg"
    ],
    "descricao" => "Vestido rosa chic, perfeito para qualquer ocasião."
  ],
  [
    "id" => 25,
    "nome" => "Vestido Miss Vermelho ",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestido Miss/1VermelhoMiss.jpg"
    ],
    "descricao" => "Vestido vermelho vibrante, ideal para se destacar em qualquer evento."
  ],
  [
    "id" => 26,
    "nome" => "Vestido Miss Vermelho e Verde",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestido Miss/3VermelhoMiss.jpg"
    ],
    "descricao" => "Vestido vermelho e verde, uma combinação de cores perfeita para o verão."
  ],
  [
    "id" => 27,
    "nome" => "Vestido Miss Vermelho e Preto",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestido Miss/2VermelhoMiss.jpg"
    ],
    "descricao" => "Vestido vermelho e preto, uma escolha clássica e elegante."
  ],
  [
    "id" => 28,
    "nome" => "Vestido Boneca Branco ",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestido Boneca/1BrancoBOneca.jpg",
      "Vtds-MissIris/Vestido Boneca/2BrancoBOneca.jpg",
      "Vtds-MissIris/Vestido Boneca/3BrancoBOneca.jpg"
    ],
    "descricao" => "Vestido branco clássico, uma peça-chave para o guarda-roupa."
  ],
  [
    "id" => 29,
    "nome" => "Vestido Boneca Roxo ",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestido Boneca/1RoxoBoneca.jpg",
      "Vtds-MissIris/Vestido Boneca/2RoxoBoneca.jpg"
    ],
    "descricao" => "Vestido roxo elegante, uma escolha ousada e moderna."
  ],
  [
    "id" => 30,
    "nome" => "Vestido Clara Dourado",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Clara/1DouradoClara.jpg",
      "Vtds-MissIris/Vestidos Clara/2DouradoClara.jpg",
      "Vtds-MissIris/Vestidos Clara/3DouradoClara.jpg"
    ],
    "descricao" => "Vestido dourado sofisticado, ideal para festas e eventos especiais."
  ],
  [
    "id" => 31,
    "nome" => "Vestido Clara Vinho",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Clara/1VinhoClara.jpg",
      "Vtds-MissIris/Vestidos Clara/2VinhoClara.jpg",
      "Vtds-MissIris/Vestidos Clara/3VinhoClara.jpg"
    ],
    "descricao" => "Vestido vinho sofisticado, ideal para eventos especiais."
  ],
  [
    "id" => 32,
    "nome" => "Vestido Jéssica Azul",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Jéssica/1AzulJessica.jpg",
      "Vtds-MissIris/Vestidos Jéssica/2AzulJessica.jpg",
      "Vtds-MissIris/Vestidos Jéssica/3AzulJessica.jpg"
    ],
    "descricao" => "Vestido azul vibrante, perfeito para o verão."
  ],
  [
    "id" => 33,
    "nome" => "Vestido Jéssica Prata",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Jéssica/1PrataJessica.jpg"
    ],
    "descricao" => "Vestido prata elegante, ideal para festas e eventos formais."
  ],
  [
    "id" => 34,
    "nome" => "Vestido Jéssica Vinho",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Jéssica/1VinhoJessica.jpg"
    ],
    "descricao" => "Vestido vinho sofisticado, ideal para eventos especiais."
  ],
  [
    "id" => 35,
    "nome" => "Vestido Jéssica Dourado",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Jéssica/1DouradoJessica.jpg",
      "Vtds-MissIris/Vestidos Jéssica/2DouradoJessica.jpg"
    ],
    "descricao" => "Vestido dourado sofisticado, ideal para festas e eventos especiais."
  ],
  [
    "id" => 36,
    "nome" => "Vestido Karen Lilas",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Karen/1Lilas.jpg",
      "Vtds-MissIris/Vestidos Karen/2LilasKaren.jpg",
      "Vtds-MissIris/Vestidos Karen/3LilaSKaren.jpg"
    ],
    "descricao" => "Vestido lilás delicado, perfeito para um visual romântico e suave."
  ],
  [
    "id" => 37,
    "nome" => "Vestido Karen Branco",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Karen/1BrancoKaren.jpg",
      "Vtds-MissIris/Vestidos Karen/2BrancoKaren.jpg",
      "Vtds-MissIris/Vestidos Karen/3BrancoKaren.jpg"
    ],
    "descricao" => "Vestido branco clássico, uma peça-chave para o guarda-roupa."
  ],
  [
    "id" => 38,
    "nome" => "Vestido Karen Rosa",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Karen/1RosaKaren.jpg",
      "Vtds-MissIris/Vestidos Karen/2RosaKaren.jpg",
      "Vtds-MissIris/Vestidos Karen/3RosaKaren.jpg"
    ],
    "descricao" => "Vestido rosa chic, perfeito para qualquer ocasião."
  ],
  [
    "id" => 39,
    "nome" => "Vestido Karen Roxo",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Karen/1RoxoKaren.jpg",
      "Vtds-MissIris/Vestidos Karen/2RoxoKaren.jpg",
      "Vtds-MissIris/Vestidos Karen/3RoxoKaren.jpg"
    ],
    "descricao" => "Vestido roxo elegante, uma escolha ousada e moderna."
  ],
  [
    "id" => 40,
    "nome" => "Vestido Sabrina Vinho",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Jéssica/1VinhoSabrina.jpg",
      "Vtds-MissIris/Vestidos Jéssica/2VinhoSabrina.jpg",
      "Vtds-MissIris/Vestidos Jéssica/3VinhoSabrina.jpg"
    ],
    "descricao" => "Vestido vinho sofisticado, ideal para eventos especiais."
  ],
  [
    "id" => 41,
    "nome" => "Vestido Sara Bege",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Sara/1BegeSara.jpg",
      "Vtds-MissIris/Vestidos Sara/2BegeSara.jpg",
      "Vtds-MissIris/Vestidos Sara/3BegeSara.jpg"
    ],
    "descricao" => "Vestido bege sofisticado, ideal para eventos casuais e formais."
  ],
  [
    "id" => 42,
    "nome" => "Vestido Sara Branco",
    "preco" => 159.99,
    "preco_atacado" => 119.99,
    "imagens" => [
      "Vtds-MissIris/Vestidos Sara/1BrancoSara.jpg",
      "Vtds-MissIris/Vestidos Sara/2BrancoSara.jpg",
      "Vtds-MissIris/Vestidos Sara/3BrancoSara.jpg"
    ],
    "descricao" => "Vestido branco clássico, uma peça-chave para o guarda-roupa."
  ],
  // ...adicione mais produtos aqui se necessário...
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400..900&display=swap" rel="stylesheet">
  <title>Catálogo de Vestidos</title>
  <link rel="stylesheet" href="CSS/catalago1.css">
 
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
      <a href="produto.php?id=<?php echo $produto['id']; ?>" class="produto-link" style="text-decoration:none;color:inherit;">
        <div class="produto" 
             data-id="<?php echo $produto['id']; ?>" 
             data-nome="<?php echo htmlspecialchars($produto['nome']); ?>" 
             data-preco="<?php echo $produto['preco']; ?>" 
             data-preco-atacado="<?php echo $produto['preco_atacado']; ?>" 
             data-imagens='<?php echo json_encode($produto['imagens']); ?>'>
          <img src="<?php echo $produto['imagens'][0]; ?>" alt="<?php echo htmlspecialchars($produto['nome']); ?>" class="zoom-img">
          <div class="info">
            <h2 style="font-size:1.1rem;font-weight:500;margin-bottom:8px;"><?php echo $produto['nome']; ?></h2>
            <div class="precos" style="font-size:1rem;">
              <span class="preco-varejo" style="display:block;font-weight:600;color:#a0005a;">Varejo R$ <?php echo number_format($produto['preco'],2,',','.'); ?></span>
              <span class="preco-atacado" style="display:block;font-weight:500;color:#ff00bf;">Atacado R$ <?php echo number_format($produto['preco_atacado'],2,',','.'); ?></span>
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
    <a href="catalago1.php" class="botao-pagina pagina-atual">1</a>
    <a href="catalago2.php" class="botao-pagina">2</a>
    <a href="catalago2.php" class="botao-pagina proximo-pagina">Próximo ❯</a>
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
