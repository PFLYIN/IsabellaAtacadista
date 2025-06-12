<?php
// index.php (NÃO deve ser acessado diretamente, só como roteador central)
$page = isset($_GET['page']) ? trim($_GET['page'], '/') : 'home';

// Lista de rotas válidas
$routes = [
    'home' => 'home.php',
    'carrinho' => 'carrinho.php',
    'vestidos1' => 'catalogo1.php',
    'vestidos2' => 'catalogo2.php', // Corrigido de vestido2 para vestidos2
    'conjuntos' => 'catalogoconjunto.php',
    'blusinhas' => 'blusinhas.php',
    'sobre-nos' => 'sobrenos.php',
    'contato' => 'contato.php'
];

// Inclui o cabeçalho (opcional)
include 'header.php';

// Verifica se a página existe no array de rotas
if (array_key_exists($page, $routes)) {
    include $routes[$page];
} else {
    // Página não encontrada
    http_response_code(404);
    include 'erro404.php';
}
?>
