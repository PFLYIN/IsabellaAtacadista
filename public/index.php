<?php
// public/index.php (O Roteador Central)

// Inicia a sessão. Essencial para login, carrinho, etc.
session_start();

// Define o caminho absoluto para a pasta 'privado'. Isso evita todos os erros de "arquivo não encontrado".
$caminhoPrivado = __DIR__ . '/../privado/';

// Pega a URL amigável vinda do .htaccess. Se nada vier, a página padrão é 'home'.
$url = isset($_GET['url']) ? trim($_GET['url'], '/') : 'home';

// Mapeamento de URLs para os arquivos CORRETOS dentro da pasta 'privado'
$rotas = [
    // --- Páginas ---
    'home' => $caminhoPrivado . 'paginas/home.php',
    'carrinho' => $caminhoPrivado . 'paginas/carrinho.php',
    'vestidos1' => $caminhoPrivado . 'paginas/catalogo1.php',
    'vestidos2' => $caminhoPrivado . 'paginas/catalogo2.php',
    'conjuntos' => $caminhoPrivado . 'paginas/catalogoconjunto.php',
    'blusinhas' => $caminhoPrivado . 'paginas/blusinhas.php',
    'sobre-nos' => $caminhoPrivado . 'paginas/sobrenos.php',
    'contato' => $caminhoPrivado . 'paginas/contato.php',
    'cadastro' => $caminhoPrivado . 'paginas/cadastro.php',
    'login' => $caminhoPrivado . 'paginas/login.php',

    // --- Ações ---
    'processar_login' => $caminhoPrivado . 'acoes/processar_login.php',
    'processar_cadastro' => $caminhoPrivado . 'acoes/processar_cadastro.php',
    'logout' => $caminhoPrivado . 'acoes/logout.php',
    // Adicione outras ações aqui conforme necessário...
];


// O Roteador NÃO chama o header. Ele apenas decide qual arquivo de conteúdo carregar.
if (array_key_exists($url, $rotas)) {
    require_once $rotas[$url];
} else {
    // Se a página (URL) não for encontrada no array $rotas...
    http_response_code(404);
    // ...carrega o arquivo de erro 404, usando o caminho completo e correto.
    require_once $caminhoPrivado . 'paginas/erro404.php';
}