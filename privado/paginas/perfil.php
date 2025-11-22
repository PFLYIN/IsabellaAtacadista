<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../includes/conexao.php';

// Verifica autenticação
if (!isset($_SESSION['usuario_logado']) || $_SESSION['usuario_logado'] !== true) {
    $_SESSION['mensagem_erro'] = 'Você precisa estar logado para acessar o perfil.';
    header('Location: /IsabellaAtacadista/public/auth');
    exit();
}

$usuario_id = $_SESSION['usuario_id'];
$nome = $_SESSION['usuario_nome'] ?? '';
$email = $_SESSION['usuario_email'] ?? '';
$foto_perfil = $_SESSION['usuario_foto'] ?? '';

// Busca dados completos do usuário
try {
    $sql = "SELECT pc.nome, pc.id_cadastro FROM pessoa_cadastro pc WHERE pc.id_cadastro = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $usuario_id]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$usuario) {
        session_destroy();
        header('Location: /IsabellaAtacadista/public/auth');
        exit();
    }
    
    $nome = $usuario['nome'];
    
    // Busca email e foto (login normal ou Google)
    $sql = "SELECT email, foto_perfil FROM login_pessoa WHERE id_cadastro = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $usuario_id]);
    $login = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($login) {
        $email = $login['email'];
        $foto_perfil = $login['foto_perfil'] ?? '';
    } else {
        $sql = "SELECT email, foto_perfil FROM google_login WHERE id_cadastro = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $usuario_id]);
        $google = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($google) {
            $email = $google['email'];
            $foto_perfil = $google['foto_perfil'] ?? '';
        }
    }
} catch (PDOException $e) {
    die("Erro ao buscar dados: " . $e->getMessage());
}

$primeiro_nome = explode(' ', trim($nome))[0];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil | Isabella Atacadista</title>
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/perfil.css">
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <main class="profile-main">
        <div class="profile-container">
            
            <a href="javascript:history.back()" class="btn-back">Voltar</a>
            
            <div class="profile-card">
                <div class="profile-header">
                    <div class="profile-avatar">
                        <?php if ($foto_perfil): ?>
                            <img src="<?= htmlspecialchars($foto_perfil) ?>" alt="Foto de perfil">
                        <?php else: ?>
                            <div class="avatar-placeholder"><?= strtoupper(substr($primeiro_nome, 0, 1)) ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="profile-info">
                        <h1 class="profile-title">Olá, <?= htmlspecialchars($primeiro_nome) ?>!</h1>
                        <p class="profile-subtitle"><?= htmlspecialchars($email) ?></p>
                    </div>
                </div>

                <form action="/IsabellaAtacadista/privado/processers/processar_perfil.php" method="POST" class="profile-form">
                    
                    <h2 class="section-title">Informações Pessoais</h2>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label">Nome Completo</label>
                            <input type="text" name="nome" class="form-input" value="<?= htmlspecialchars($nome) ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">E-mail</label>
                            <input type="email" class="form-input" value="<?= htmlspecialchars($email) ?>" readonly>
                        </div>
                    </div>

                    <hr class="form-divider">

                    <h2 class="section-title">Alterar Senha</h2>
                    
                    <div class="password-grid">
                        <div class="form-group">
                            <label class="form-label">Senha Atual</label>
                            <input type="password" name="senha_atual" class="form-input" placeholder="Digite sua senha atual">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Nova Senha</label>
                            <input type="password" name="senha_nova" class="form-input" placeholder="Digite a nova senha">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Confirmar Senha</label>
                            <input type="password" name="senha_confirmar" class="form-input" placeholder="Confirme a nova senha">
                        </div>
                    </div>

                    <div class="form-actions">
                        <a href="/IsabellaAtacadista/public/home" class="btn btn-ghost">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    </div>

                    <?php if (isset($_SESSION['mensagem_sucesso'])): ?>
                        <div class="msg msg-success"><?= $_SESSION['mensagem_sucesso']; unset($_SESSION['mensagem_sucesso']); ?></div>
                    <?php endif; ?>
                    
                    <?php if (isset($_SESSION['mensagem_erro'])): ?>
                        <div class="msg msg-error"><?= $_SESSION['mensagem_erro']; unset($_SESSION['mensagem_erro']); ?></div>
                    <?php endif; ?>
                </form>

                <div class="profile-footer">
                    <a href="/IsabellaAtacadista/privado/processers/logout.php" class="btn-logout">Sair da Conta</a>
                </div>

            </div>

        </div>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
