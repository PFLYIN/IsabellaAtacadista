<?php
// ME LEMBRAR DE RODAR ISSO SÓ UMA VEZ!

require_once __DIR__ . '/privado/includes/conexao.php';


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
  ],[
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
    ],
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
    ],
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

// Inicia a construção da página de relatório
echo "<!DOCTYPE html><html><head><title>Migração de Dados</title><style>
body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
h1 { color: #333; border-bottom: 1px solid #ccc; padding-bottom: 10px; }
.success { color: green; font-weight: bold; }
.error { color: red; font-weight: bold; }
.progress { margin-bottom: 5px; padding: 8px; border-bottom: 1px dashed #eee; }
.container { max-width: 800px; margin: 0 auto; }
</style></head><body>";
echo "<div class='container'>";
echo "<h1>Iniciando migração de dados...</h1>";

try {
    $pdo->beginTransaction();
    $total = count($produtos);
    $sucesso = 0;
    $falhas = 0;

    // Percorre cada produto do array antigo
    foreach ($produtos as $index => $produtoArray) {
        echo "<div class='progress'>Processando " . ($index + 1) . "/$total: " . htmlspecialchars($produtoArray['nome']) . "... ";

        try {
            // 1. Insere na tabela 'produtos'
            $sqlProduto = "INSERT INTO produtos (titulo, descricao, preco_varejo, preco_atacado) VALUES (:titulo, :descricao, :preco_varejo, :preco_atacado)";
            $stmtProduto = $pdo->prepare($sqlProduto);
            
            $stmtProduto->execute([
                ':titulo' => $produtoArray['nome'],
                ':descricao' => $produtoArray['descricao'] ?? '',
                ':preco_varejo' => $produtoArray['preco'],
                ':preco_atacado' => $produtoArray['preco_atacado']
            ]);

            // Pega o ID do produto que acabamos de inserir
            $ultimoIdProduto = $pdo->lastInsertId();

            // 2. Insere as imagens na tabela 'produto_imagens'
            $sqlImagem = "INSERT INTO produto_imagens (produto_id, url_imagem) VALUES (:produto_id, :url_imagem)";
            $stmtImagem = $pdo->prepare($sqlImagem);

            foreach ($produtoArray['imagens'] as $urlImagem) {
                $stmtImagem->execute([
                    ':produto_id' => $ultimoIdProduto,
                    ':url_imagem' => $urlImagem
                ]);
            }
            
            $sucesso++;
            echo "<span class='success'>OK! (ID: $ultimoIdProduto, " . count($produtoArray['imagens']) . " imagens)</span></div>";

        } catch (PDOException $e) {
            $falhas++;
            echo "<span class='error'>FALHOU: " . $e->getMessage() . "</span></div>";
        }
    }

    $pdo->commit();
    echo "<h2>Migração finalizada!</h2>";
    echo "<p>Total de produtos processados: $total</p>";
    echo "<p class='success'>Produtos inseridos com sucesso: $sucesso</p>";
    
    if ($falhas > 0) {
        echo "<p class='error'>Produtos com falha: $falhas</p>";
    }

} catch (PDOException $e) {
    $pdo->rollBack();
    echo "<h2 class='error'>Erro grave na migração! A transação foi revertida.</h2>";
    echo "<p class='error'>Mensagem: " . $e->getMessage() . "</p>";
}

echo "<p><strong>IMPORTANTE:</strong> Após verificar que a migração foi concluída com sucesso, delete ou renomeie este arquivo para evitar executá-lo novamente por acidente.</p>";
echo "</div></body></html>";
