<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verificar se usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header('Location: /IsabellaAtacadista/public/index.php?url=auth');
    exit;
}

require_once __DIR__ . '/../includes/conexao.php';
require_once __DIR__ . '/../includes/header.php';

$usuario_id = $_SESSION['usuario_id'];
$nome_usuario = $_SESSION['usuario_nome'];

// Debug: Verificar ID do usuário
// echo "<!-- Debug: usuario_id = " . $usuario_id . " -->";

// Buscar foto do usuário da sessão ou do banco (login_pessoa ou google_login)
$foto_usuario = $_SESSION['usuario_foto'] ?? null;

if (!$foto_usuario) {
    // Tentar buscar da tabela login_pessoa
    $sqlFoto = "SELECT foto_perfil FROM login_pessoa WHERE id_cadastro = :id";
    $stmtFoto = $pdo->prepare($sqlFoto);
    $stmtFoto->execute([':id' => $usuario_id]);
    $usuario = $stmtFoto->fetch(PDO::FETCH_ASSOC);
    $foto_usuario = $usuario['foto_perfil'] ?? null;
    
    // Se não encontrou, tentar na google_login
    if (!$foto_usuario) {
        $sqlFotoGoogle = "SELECT foto_perfil FROM google_login WHERE id_cadastro = :id";
        $stmtFotoGoogle = $pdo->prepare($sqlFotoGoogle);
        $stmtFotoGoogle->execute([':id' => $usuario_id]);
        $usuarioGoogle = $stmtFotoGoogle->fetch(PDO::FETCH_ASSOC);
        $foto_usuario = $usuarioGoogle['foto_perfil'] ?? null;
    }
}

// Buscar avaliações do usuário
$sqlMinhasAvaliacoes = "SELECT * FROM avaliacoes WHERE usuario_id = :usuario_id ORDER BY data_criacao DESC";
$stmtMinhas = $pdo->prepare($sqlMinhasAvaliacoes);
$stmtMinhas->execute([':usuario_id' => $usuario_id]);
$minhas_avaliacoes = $stmtMinhas->fetchAll(PDO::FETCH_ASSOC);

$mensagem = '';
$mensagemTipo = '';

// Processar envio de avaliação
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'enviar_avaliacao') {
    $comentario = trim($_POST['comentario'] ?? '');
    $estrelas = intval($_POST['estrelas'] ?? 0);
    
    if (empty($comentario)) {
        $mensagem = 'Por favor, escreva um comentário.';
        $mensagemTipo = 'erro';
    } elseif ($estrelas < 1 || $estrelas > 5) {
        $mensagem = 'Por favor, selecione uma avaliação de 1 a 5 estrelas.';
        $mensagemTipo = 'erro';
    } else {
        try {
            $sqlInserir = "INSERT INTO avaliacoes (usuario_id, nome_usuario, foto_usuario, comentario, estrelas, aprovado) 
                          VALUES (:usuario_id, :nome_usuario, :foto_usuario, :comentario, :estrelas, FALSE)";
            $stmtInserir = $pdo->prepare($sqlInserir);
            $stmtInserir->execute([
                ':usuario_id' => $usuario_id,
                ':nome_usuario' => $nome_usuario,
                ':foto_usuario' => $foto_usuario,
                ':comentario' => $comentario,
                ':estrelas' => $estrelas
            ]);
            
            $mensagem = 'Avaliação enviada com sucesso! Ela será exibida após aprovação do administrador.';
            $mensagemTipo = 'sucesso';
            
            // Recarregar avaliações
            $stmtMinhas->execute([':usuario_id' => $usuario_id]);
            $minhas_avaliacoes = $stmtMinhas->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $mensagem = 'Erro ao enviar avaliação. Tente novamente.';
            $mensagemTipo = 'erro';
        }
    }
}

// Processar exclusão de avaliação
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'excluir_avaliacao') {
    $avaliacao_id = intval($_POST['avaliacao_id'] ?? 0);
    
    try {
        $sqlExcluir = "DELETE FROM avaliacoes WHERE id = :id AND usuario_id = :usuario_id";
        $stmtExcluir = $pdo->prepare($sqlExcluir);
        $stmtExcluir->execute([':id' => $avaliacao_id, ':usuario_id' => $usuario_id]);
        
        $mensagem = 'Avaliação excluída com sucesso!';
        $mensagemTipo = 'sucesso';
        
        // Recarregar avaliações
        $stmtMinhas->execute([':usuario_id' => $usuario_id]);
        $minhas_avaliacoes = $stmtMinhas->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        $mensagem = 'Erro ao excluir avaliação.';
        $mensagemTipo = 'erro';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Avaliações - Isabella Atacadista</title>
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/avaliacoes.css">
</head>
<body>
    <div class="avaliacoes-main">
        <div class="avaliacoes-container">
            <a href="/IsabellaAtacadista/public/perfil" class="btn-back">Voltar ao Perfil</a>
            
            <div class="avaliacoes-card">
                <div class="avaliacoes-header">
                    <div class="avaliacoes-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                    </div>
                    <div class="avaliacoes-title-section">
                        <h1 class="avaliacoes-title">Minhas Avaliações</h1>
                        <p class="avaliacoes-subtitle">Deixe sua opinião sobre nossos produtos</p>
                    </div>
                </div>

                <?php if ($mensagem): ?>
                <div class="mensagem <?php echo $mensagemTipo; ?>">
                    <?php echo htmlspecialchars($mensagem); ?>
                </div>
                <?php endif; ?>

                <!-- Formulário de Nova Avaliação -->
                <div class="nova-avaliacao-section">
                    <h2 class="section-title">Deixar Nova Avaliação</h2>
                    <form method="POST" class="avaliacao-form">
                        <input type="hidden" name="acao" value="enviar_avaliacao">
                        
                        <div class="form-group">
                            <label for="estrelas">Sua Avaliação:</label>
                            <div class="estrelas-input">
                                <input type="radio" name="estrelas" id="star5" value="5" required>
                                <label for="star5" title="5 estrelas">★</label>
                                <input type="radio" name="estrelas" id="star4" value="4">
                                <label for="star4" title="4 estrelas">★</label>
                                <input type="radio" name="estrelas" id="star3" value="3">
                                <label for="star3" title="3 estrelas">★</label>
                                <input type="radio" name="estrelas" id="star2" value="2">
                                <label for="star2" title="2 estrelas">★</label>
                                <input type="radio" name="estrelas" id="star1" value="1">
                                <label for="star1" title="1 estrela">★</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="comentario">Seu Comentário:</label>
                            <textarea name="comentario" id="comentario" rows="5" required placeholder="Conte-nos sobre sua experiência com nossos produtos..."></textarea>
                        </div>

                        <button type="submit" class="btn-enviar">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="22" y1="2" x2="11" y2="13"></line>
                                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                            </svg>
                            Enviar Avaliação
                        </button>
                    </form>
                </div>

                <!-- Lista de Minhas Avaliações -->
                <div class="minhas-avaliacoes-section">
                    <h2 class="section-title">Histórico de Avaliações</h2>
                    
                    <?php if (count($minhas_avaliacoes) === 0): ?>
                    <div class="vazio-state">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        <p>Você ainda não fez nenhuma avaliação.</p>
                    </div>
                    <?php else: ?>
                    <div class="avaliacoes-lista">
                        <?php foreach ($minhas_avaliacoes as $avaliacao): ?>
                        <div class="avaliacao-item <?php echo $avaliacao['aprovado'] ? 'aprovado' : 'pendente'; ?>">
                            <div class="avaliacao-item-header">
                                <div class="avaliacao-item-estrelas">
                                    <?php for ($i = 0; $i < $avaliacao['estrelas']; $i++): ?>★<?php endfor; ?>
                                    <?php for ($i = $avaliacao['estrelas']; $i < 5; $i++): ?>☆<?php endfor; ?>
                                </div>
                                <span class="avaliacao-item-status">
                                    <?php echo $avaliacao['aprovado'] ? '✓ Aprovado' : '⏳ Aguardando aprovação'; ?>
                                </span>
                            </div>
                            <p class="avaliacao-item-comentario"><?php echo htmlspecialchars($avaliacao['comentario']); ?></p>
                            <div class="avaliacao-item-footer">
                                <span class="avaliacao-item-data">
                                    <?php echo date('d/m/Y H:i', strtotime($avaliacao['data_criacao'])); ?>
                                </span>
                                <form method="POST" class="form-excluir" onsubmit="return confirm('Tem certeza que deseja excluir esta avaliação?');">
                                    <input type="hidden" name="acao" value="excluir_avaliacao">
                                    <input type="hidden" name="avaliacao_id" value="<?php echo $avaliacao['id']; ?>">
                                    <button type="submit" class="btn-excluir">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        </svg>
                                        Excluir
                                    </button>
                                </form>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
