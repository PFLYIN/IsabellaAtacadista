<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin_logado']) || $_SESSION['admin_logado'] !== true) {
    $_SESSION['mensagem_erro'] = 'Acesso negado. Você precisa ser um administrador.';
    header('Location: /IsabellaAtacadista/public/index.php?url=adminlogin');
    exit();
}

$admin_nome = $_SESSION['admin_nome'] ?? 'Admin';

require_once __DIR__ . '/../includes/conexao.php';

// Busca os produtos com suas imagens
$stmt = $pdo->query("
    SELECT 
        p.id, 
        p.titulo, 
        p.preco_varejo, 
        p.preco_atacado,
        (SELECT url_imagem FROM produto_imagens WHERE produto_id = p.id LIMIT 1) as imagem
    FROM produtos p 
    ORDER BY p.id DESC
");
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Administrador</title>
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/painel_admin.css"> 
</head>
<body>

    <div class="admin-container">
        <header class="admin-header">
            <h1>Gerenciamento dos Produtos</h1>
            <div class="admin-info">
                <span>Olá, <?php echo htmlspecialchars($admin_nome); ?></span>
                <form action="/IsabellaAtacadista/public/index.php?url=logout" method="post">
                    <button type="submit" class="btn-logout">Sair do Perfil</button>
                </form>
                <a href="/IsabellaAtacadista/public/perfil_admin" class="btn-logout">Perfil Admin</a>
            </div>
        </header>

        <main class="admin-main">
            <div class="toolbar">
                <a href="/IsabellaAtacadista/public/index.php?url=adicionar_produto" class="btn-novo-produto">Adicionar Novo Produto</a>
                <a href="/IsabellaAtacadista/public/index.php?url=admin_avaliacoes" class="btn-avaliacoes">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    Gerenciar Avaliações
                </a>
            </div>
            
            <div class="produtos-grid">
                <?php foreach ($produtos as $produto): ?>
                    <div class="produto-card">
                        <img 
                            src="/IsabellaAtacadista/public/<?= htmlspecialchars($produto['imagem'] ?? 'uploads/placeholder.svg') ?>" 
                            alt="<?= htmlspecialchars($produto['titulo']) ?>" 
                            class="produto-imagem"
                            onerror="this.src='/IsabellaAtacadista/public/uploads/placeholder.svg'"
                        >
                        <div class="produto-info">
                            <div class="produto-header">
                                <div class="produto-id">ID: <?= $produto['id'] ?></div>
                                <h3 class="produto-titulo"><?= htmlspecialchars($produto['titulo']) ?></h3>
                            </div>
                            
                            <div class="produto-precos">
                                <div class="preco-item">
                                    <div class="preco-label">Varejo</div>
                                    <div class="preco-valor">R$ <?= number_format($produto['preco_varejo'], 2, ',', '.') ?></div>
                                </div>
                                <div class="preco-item">
                                    <div class="preco-label">Atacado</div>
                                    <div class="preco-valor">R$ <?= number_format($produto['preco_atacado'], 2, ',', '.') ?></div>
                                </div>
                            </div>
                            
                            <div class="produto-acoes">
                                <a href="/IsabellaAtacadista/public/index.php?url=editar_produto&id=<?= $produto['id'] ?>" class="btn-editar">Editar</a>
                                <form action="/IsabellaAtacadista/public/index.php?url=excluir_produto" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este produto?');" style="flex: 1;">
                                    <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                                    <button type="submit" class="btn-excluir">Excluir</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>

    <!-- Botão Voltar ao Topo -->
    <button id="voltarTopo" class="btn-voltar-topo" title="Voltar ao topo">
        ↑
    </button>

    <script>
        // Botão voltar ao topo
        const btnVoltarTopo = document.getElementById('voltarTopo');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                btnVoltarTopo.classList.add('show');
            } else {
                btnVoltarTopo.classList.remove('show');
            }
        });
        
        btnVoltarTopo.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>

</body>
</html>