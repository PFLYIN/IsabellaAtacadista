<?php
// public/index.php (O Roteador Central)

// Inicia a sessão. Essencial para login, carrinho, etc.
session_start();

// Define o caminho absoluto para a pasta 'privado'. Isso evita todos os erros de "arquivo não encontrado".
$caminhoPrivado = realpath(__DIR__ . '/../privado') . DIRECTORY_SEPARATOR;

// Pega a URL amigável vinda do .htaccess. Se nada vier, a página padrão é 'home'.
$url = isset($_GET['url']) ? trim($_GET['url'], '/') : 'home';

// Mapeamento de URLs para os arquivos CORRETOS dentro da pasta 'privado'
$rotas = [
    // --- Páginas ---
    'home' => $caminhoPrivado . 'paginas/home.php',
    'carrinho' => $caminhoPrivado . 'paginas/carrinho.php',
    'vestidos1' => $caminhoPrivado . 'paginas/catalago1.php',
    'vestidos2' => $caminhoPrivado . 'paginas/catalago2.php',
    'conjuntos' => $caminhoPrivado . 'paginas/catalagoconjunto.php',
    'blusinhas' => $caminhoPrivado . 'paginas/blusinhas.php',
    'sobre-nos' => $caminhoPrivado . 'paginas/sobrenos.php',
    'contato' => $caminhoPrivado . 'paginas/contato.php',
    'cadastro' => $caminhoPrivado . 'paginas/cadastro.php',
    'login' => $caminhoPrivado . 'paginas/login.php',
    'perfil' => $caminhoPrivado . 'paginas/perfil.php',
    'adminlogin' => $caminhoPrivado . 'paginas/adminlogin.php',
    'admincadastro' => $caminhoPrivado . 'paginas/admincadastro.php',
    'painel_admin' => $caminhoPrivado . 'paginas/painel_admin.php',
    'adicionar_produto' => $caminhoPrivado . 'paginas/adicionar_produto.php',
    'processar_login' => $caminhoPrivado . 'processers/processar_login.php',
    'editar_produto' => $caminhoPrivado . 'paginas/editar_produto.php',
    'excluir_produto' => $caminhoPrivado . 'processers/excluir_produto.php',
    'processar_edit_produto' => $caminhoPrivado . 'processers/processar_edit_produto.php',
    'processar_add_produto' => $caminhoPrivado . 'processers/processar_add_produto.php',

    // --- Ações ---
    'processar_login' => $caminhoPrivado . 'processers/processar_login.php',
    'processar_cadastro' => $caminhoPrivado . 'processers/processar_cadastro.php',
    'logout' => $caminhoPrivado . 'processers/logout.php',
    'processar_contato' => $caminhoPrivado . 'processers/processa_contato.php',
    'processar_login_admin' => $caminhoPrivado . 'processers/processar_login_admin.php',
    'processar_add_produto' => $caminhoPrivado . 'processers/processar_add_produto.php',
    'processar_edit_produto' => $caminhoPrivado . 'processers/processar_edit_produto.php',
    'processar_upload_foto' => $caminhoPrivado . 'processers/processar_upload_foto.php',
    'produto' => $caminhoPrivado . 'paginas/produto.php',
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