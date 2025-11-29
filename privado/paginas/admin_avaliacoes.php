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

$mensagem = '';
$mensagemTipo = '';

// Processar ações (aprovar, reprovar, excluir)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acao = $_POST['acao'] ?? '';
    $avaliacao_id = intval($_POST['avaliacao_id'] ?? 0);
    
    try {
        if ($acao === 'aprovar') {
            $sql = "UPDATE avaliacoes SET aprovado = TRUE WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $avaliacao_id]);
            $mensagem = 'Avaliação aprovada com sucesso!';
            $mensagemTipo = 'sucesso';
            
        } elseif ($acao === 'reprovar') {
            $sql = "UPDATE avaliacoes SET aprovado = FALSE WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $avaliacao_id]);
            $mensagem = 'Avaliação reprovada.';
            $mensagemTipo = 'info';
            
        } elseif ($acao === 'excluir') {
            $sql = "DELETE FROM avaliacoes WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $avaliacao_id]);
            $mensagem = 'Avaliação excluída permanentemente!';
            $mensagemTipo = 'sucesso';
        }
    } catch (PDOException $e) {
        $mensagem = 'Erro ao processar ação: ' . $e->getMessage();
        $mensagemTipo = 'erro';
    }
}

// Buscar todas as avaliações (aprovadas e pendentes)
$filtro = $_GET['filtro'] ?? 'todas';
$sqlWhere = '';

if ($filtro === 'aprovadas') {
    $sqlWhere = 'WHERE aprovado = TRUE';
} elseif ($filtro === 'pendentes') {
    $sqlWhere = 'WHERE aprovado = FALSE';
}

$sql = "SELECT * FROM avaliacoes $sqlWhere ORDER BY data_criacao DESC";
$stmt = $pdo->query($sql);
$avaliacoes = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Contar estatísticas
$sqlStats = "SELECT 
    COUNT(*) as total,
    SUM(CASE WHEN aprovado = TRUE THEN 1 ELSE 0 END) as aprovadas,
    SUM(CASE WHEN aprovado = FALSE THEN 1 ELSE 0 END) as pendentes,
    AVG(estrelas) as media_estrelas
FROM avaliacoes";
$stmtStats = $pdo->query($sqlStats);
$stats = $stmtStats->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Avaliações - Admin</title>
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/admin-avaliacoes.css">
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1>Gerenciar Avaliações</h1>
            <a href="/IsabellaAtacadista/public/painel_admin" class="btn-voltar">← Voltar ao Painel</a>
        </div>

        <?php if ($mensagem): ?>
        <div class="mensagem <?php echo $mensagemTipo; ?>">
            <?php echo htmlspecialchars($mensagem); ?>
        </div>
        <?php endif; ?>

        <!-- Estatísticas -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon total">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Total de Avaliações</span>
                    <span class="stat-value"><?php echo $stats['total']; ?></span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon aprovadas">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Aprovadas</span>
                    <span class="stat-value"><?php echo $stats['aprovadas']; ?></span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon pendentes">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Pendentes</span>
                    <span class="stat-value"><?php echo $stats['pendentes']; ?></span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon media">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Média de Estrelas</span>
                    <span class="stat-value"><?php echo number_format($stats['media_estrelas'], 1); ?></span>
                </div>
            </div>
        </div>

        <!-- Filtros -->
        <div class="filtros">
            <a href="/IsabellaAtacadista/public/admin_avaliacoes?filtro=todas" class="btn-filtro <?php echo $filtro === 'todas' ? 'active' : ''; ?>">Todas</a>
            <a href="/IsabellaAtacadista/public/admin_avaliacoes?filtro=pendentes" class="btn-filtro <?php echo $filtro === 'pendentes' ? 'active' : ''; ?>">Pendentes</a>
            <a href="/IsabellaAtacadista/public/admin_avaliacoes?filtro=aprovadas" class="btn-filtro <?php echo $filtro === 'aprovadas' ? 'active' : ''; ?>">Aprovadas</a>
        </div>

        <!-- Lista de Avaliações -->
        <div class="avaliacoes-grid">
            <?php if (count($avaliacoes) === 0): ?>
            <div class="vazio-state">
                <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="8" x2="12" y2="12"></line>
                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                </svg>
                <p>Nenhuma avaliação encontrada.</p>
            </div>
            <?php else: ?>
                <?php foreach ($avaliacoes as $avaliacao): ?>
                <div class="avaliacao-admin-card <?php echo $avaliacao['aprovado'] ? 'aprovado' : 'pendente'; ?>">
                    <div class="avaliacao-admin-header">
                        <div class="usuario-info">
                            <div class="usuario-avatar">
                                <?php if ($avaliacao['foto_usuario']): ?>
                                    <img src="<?php echo htmlspecialchars($avaliacao['foto_usuario']); ?>" alt="<?php echo htmlspecialchars($avaliacao['nome_usuario']); ?>">
                                <?php else: ?>
                                    <div class="avatar-placeholder">
                                        <?php echo strtoupper(substr($avaliacao['nome_usuario'], 0, 1)); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div>
                                <h3><?php echo htmlspecialchars($avaliacao['nome_usuario']); ?></h3>
                                <span class="data"><?php echo date('d/m/Y H:i', strtotime($avaliacao['data_criacao'])); ?></span>
                            </div>
                        </div>
                        <div class="estrelas">
                            <?php for ($i = 0; $i < $avaliacao['estrelas']; $i++): ?>★<?php endfor; ?>
                            <?php for ($i = $avaliacao['estrelas']; $i < 5; $i++): ?>☆<?php endfor; ?>
                        </div>
                    </div>

                    <p class="comentario"><?php echo htmlspecialchars($avaliacao['comentario']); ?></p>

                    <div class="avaliacao-admin-footer">
                        <span class="status-badge <?php echo $avaliacao['aprovado'] ? 'aprovado' : 'pendente'; ?>">
                            <?php echo $avaliacao['aprovado'] ? '✓ Aprovado' : '⏳ Pendente'; ?>
                        </span>

                        <div class="acoes">
                            <?php if (!$avaliacao['aprovado']): ?>
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="acao" value="aprovar">
                                <input type="hidden" name="avaliacao_id" value="<?php echo $avaliacao['id']; ?>">
                                <button type="submit" class="btn-acao aprovar">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    Aprovar
                                </button>
                            </form>
                            <?php else: ?>
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="acao" value="reprovar">
                                <input type="hidden" name="avaliacao_id" value="<?php echo $avaliacao['id']; ?>">
                                <button type="submit" class="btn-acao reprovar">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                    Reprovar
                                </button>
                            </form>
                            <?php endif; ?>

                            <form method="POST" style="display: inline;" onsubmit="return confirm('Tem certeza que deseja EXCLUIR PERMANENTEMENTE esta avaliação?');">
                                <input type="hidden" name="acao" value="excluir">
                                <input type="hidden" name="avaliacao_id" value="<?php echo $avaliacao['id']; ?>">
                                <button type="submit" class="btn-acao excluir">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                    Excluir
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
