<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verificar se é admin
if (!isset($_SESSION['admin_logado']) || $_SESSION['admin_logado'] !== true) {
    header('Location: /IsabellaAtacadista/public/adminlogin');
    exit;
}

require_once __DIR__ . '/../includes/conexao.php';

$admin_id = $_SESSION['admin_id'];
$admin_nome = $_SESSION['admin_nome'] ?? 'Administrador';
$admin_email = $_SESSION['admin_email'] ?? '';
$admin_foto = $_SESSION['admin_foto'] ?? null;

// Buscar foto do admin se não estiver na sessão
if (!$admin_foto) {
    try {
        $sqlFoto = "SELECT foto_perfil FROM admin_login WHERE id_admincdst = :id";
        $stmtFoto = $pdo->prepare($sqlFoto);
        $stmtFoto->execute([':id' => $admin_id]);
        $adminData = $stmtFoto->fetch(PDO::FETCH_ASSOC);
        $admin_foto = $adminData['foto_perfil'] ?? null;
    } catch (PDOException $e) {
        $admin_foto = null;
    }
}

// Processar upload de foto
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['foto_perfil'])) {
    $upload_dir = __DIR__ . '/../../public/uploads/admin/';
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    
    $file = $_FILES['foto_perfil'];
    $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    $filename = $file['name'];
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    
    if (in_array($ext, $allowed) && $file['size'] <= 5000000) {
        $new_filename = 'admin_' . $admin_id . '_' . time() . '.' . $ext;
        $upload_path = $upload_dir . $new_filename;
        
        if (move_uploaded_file($file['tmp_name'], $upload_path)) {
            $foto_url = '/IsabellaAtacadista/public/uploads/admin/' . $new_filename;
            
            // Atualizar no banco
            $sqlUpdate = "UPDATE admin_login SET foto_perfil = :foto WHERE id_admincdst = :id";
            $stmtUpdate = $pdo->prepare($sqlUpdate);
            $stmtUpdate->execute([':foto' => $foto_url, ':id' => $admin_id]);
            
            // Atualizar sessão
            $_SESSION['admin_foto'] = $foto_url;
            $admin_foto = $foto_url;
        }
    }
}

// Buscar estatísticas do sistema
try {
    // Total de produtos
    $sqlProdutos = "SELECT COUNT(*) as total FROM produtos";
    $stmtProdutos = $pdo->query($sqlProdutos);
    $totalProdutos = $stmtProdutos->fetch(PDO::FETCH_ASSOC)['total'];
    
    // Total de usuários
    $sqlUsuarios = "SELECT COUNT(*) as total FROM pessoa_cadastro";
    $stmtUsuarios = $pdo->query($sqlUsuarios);
    $totalUsuarios = $stmtUsuarios->fetch(PDO::FETCH_ASSOC)['total'];
    
    // Total de avaliações
    $sqlAvaliacoes = "SELECT COUNT(*) as total, 
                             SUM(CASE WHEN aprovado = 1 THEN 1 ELSE 0 END) as aprovadas,
                             SUM(CASE WHEN aprovado = 0 THEN 1 ELSE 0 END) as pendentes
                      FROM avaliacoes";
    $stmtAvaliacoes = $pdo->query($sqlAvaliacoes);
    $statsAvaliacoes = $stmtAvaliacoes->fetch(PDO::FETCH_ASSOC);
    
    // Produtos por categoria
    $sqlCategorias = "SELECT c.nome, COUNT(p.id) as total 
                      FROM categorias c 
                      LEFT JOIN produtos p ON c.id = p.categoria_id 
                      GROUP BY c.id, c.nome
                      ORDER BY total DESC";
    $stmtCategorias = $pdo->query($sqlCategorias);
    $categorias = $stmtCategorias->fetchAll(PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    $totalProdutos = 0;
    $totalUsuarios = 0;
    $statsAvaliacoes = ['total' => 0, 'aprovadas' => 0, 'pendentes' => 0];
    $categorias = [];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Admin - Isabella Atacadista</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Playfair+Display:wght@400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/perfil-admin.css">
</head>
<body>
    <div class="admin-perfil-container">
        <!-- Header do Perfil -->
        <div class="admin-header">
            <div class="admin-header-content">
                <div class="admin-info">
                    <div class="admin-avatar">
                        <?php if ($admin_foto): ?>
                            <img src="<?php echo htmlspecialchars($admin_foto); ?>" alt="<?php echo htmlspecialchars($admin_nome); ?>">
                        <?php else: ?>
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        <?php endif; ?>
                        <form method="POST" enctype="multipart/form-data" class="foto-upload-form">
                            <label for="foto_perfil" class="foto-upload-label">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                                    <circle cx="12" cy="13" r="4"></circle>
                                </svg>
                            </label>
                            <input type="file" name="foto_perfil" id="foto_perfil" accept="image/*" onchange="this.form.submit()">
                        </form>
                    </div>
                    <div class="admin-details">
                        <h1><?php echo htmlspecialchars($admin_nome); ?></h1>
                        <p class="admin-role">Administrador do Sistema</p>
                        <p class="admin-email"><?php echo htmlspecialchars($admin_email); ?></p>
                    </div>
                </div>
                <div class="admin-actions">
                    <a href="/IsabellaAtacadista/public/painel_admin" class="btn-action btn-primary">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg>
                        Painel Admin
                    </a>
                    <a href="/IsabellaAtacadista/public/home" class="btn-action btn-secondary">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        Ir para Home
                    </a>
                </div>
            </div>
        </div>

        <!-- Estatísticas do Sistema -->
        <div class="stats-container">
            <h2 class="section-title">Visão Geral do Sistema</h2>
            
            <div class="stats-grid">
                <div class="stat-card produtos">
                    <div class="stat-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <span class="stat-label">Total de Produtos</span>
                        <span class="stat-value"><?php echo $totalProdutos; ?></span>
                    </div>
                </div>

                <div class="stat-card usuarios">
                    <div class="stat-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <span class="stat-label">Usuários Cadastrados</span>
                        <span class="stat-value"><?php echo $totalUsuarios; ?></span>
                    </div>
                </div>

                <div class="stat-card avaliacoes">
                    <div class="stat-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                    </div>
                    <div class="stat-info">
                        <span class="stat-label">Avaliações</span>
                        <span class="stat-value"><?php echo $statsAvaliacoes['total']; ?></span>
                        <span class="stat-sublabel"><?php echo $statsAvaliacoes['pendentes']; ?> pendentes</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Produtos por Categoria -->
        <div class="categorias-container">
            <h2 class="section-title">Produtos por Categoria</h2>
            <div class="categorias-grid">
                <?php foreach ($categorias as $categoria): ?>
                <div class="categoria-card">
                    <div class="categoria-nome"><?php echo htmlspecialchars($categoria['nome']); ?></div>
                    <div class="categoria-total"><?php echo $categoria['total']; ?> produtos</div>
                    <div class="categoria-progress">
                        <div class="progress-bar" style="width: <?php echo ($totalProdutos > 0) ? ($categoria['total'] / $totalProdutos * 100) : 0; ?>%"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Ações Rápidas -->
        <div class="quick-actions-container">
            <h2 class="section-title">Ações Rápidas</h2>
            <div class="quick-actions-grid">
                <a href="/IsabellaAtacadista/public/adicionar_produto" class="quick-action-card add-product">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="16"></line>
                        <line x1="8" y1="12" x2="16" y2="12"></line>
                    </svg>
                    <h3>Adicionar Produto</h3>
                    <p>Cadastrar novo produto</p>
                </a>

                <a href="/IsabellaAtacadista/public/admin_avaliacoes" class="quick-action-card reviews">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <h3>Gerenciar Avaliações</h3>
                    <p><?php echo $statsAvaliacoes['pendentes']; ?> pendentes</p>
                </a>

                <a href="/IsabellaAtacadista/public/painel_admin" class="quick-action-card dashboard">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="12" y1="20" x2="12" y2="10"></line>
                        <line x1="18" y1="20" x2="18" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="16"></line>
                    </svg>
                    <h3>Dashboard</h3>
                    <p>Visão completa do sistema</p>
                </a>
            </div>
        </div>

        <!-- Logout -->
        <div class="logout-section">
            <a href="/IsabellaAtacadista/privado/processers/logout_admin.php" class="btn-logout">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
                Sair da Conta Admin
            </a>
        </div>
    </div>
</body>
</html>
