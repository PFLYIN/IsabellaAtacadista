<?php
session_start();

require_once 'conexao.php';

// Verifica se é admin (parâmetro na URL e sessão de admin)
$isAdmin = isset($_GET['admin']) && $_GET['admin'] == '1' && isset($_SESSION['admin_logado']) && $_SESSION['admin_logado'] === true;

if ($isAdmin) {
    // Perfil do ADMIN
    $admin_id = $_SESSION['admin_id'];
    $nome = $_SESSION['admin_nome'] ?? 'Administrador';
    $email = $_SESSION['admin_email'] ?? 'admin@seudominio.com';
    // Busca foto do admin no banco correto (admin_login, campo id_admincdst)
    try {
        $sql = "SELECT foto_perfil FROM admin_login WHERE id_admincdst = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $admin_id]);
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);
        $foto_perfil = ($admin && $admin['foto_perfil']) ? $admin['foto_perfil'] : 'uploads/padrao.png';
    } catch (PDOException $e) {
        $foto_perfil = 'uploads/padrao.png';
    }
} else {
    // Perfil do USUÁRIO normal
    if (!isset($_SESSION['usuario_logado']) || $_SESSION['usuario_logado'] !== true) {
        $_SESSION['mensagem_erro'] = 'Você precisa estar logado para acessar o perfil.';
        header('Location: login.php');
        exit();
    }
    $usuario_id = $_SESSION['usuario_id'];
    $nome = $_SESSION['usuario_nome'];
    try {
        $sql = "SELECT l.email, l.foto_perfil FROM login_pessoa l WHERE l.id_cadastro = :id_cadastro";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id_cadastro' => $usuario_id]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($usuario) {
            $email = $usuario['email'];
            $foto_perfil = $usuario['foto_perfil'] ? $usuario['foto_perfil'] : 'uploads/padrao.png';
        } else {
            session_destroy();
            header('Location: login.php');
            exit();
        }
    } catch (PDOException $e) {
        die("Erro ao buscar dados do perfil: " . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil de <?php echo htmlspecialchars($nome); ?></title>
    <link rel="stylesheet" href="CSS/perfil.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "header.php"; ?>
    
    <div class="perfil-card">
        <div class="perfil-foto-container">
            <img src="<?php echo htmlspecialchars($foto_perfil); ?>" alt="" class="perfil-foto" id="perfil-foto">
            <div class="foto-overlay">
                <form action="processar_upload_foto.php" method="post" enctype="multipart/form-data" id="form-upload">
                    <label for="upload-foto" class="btn-upload">
                        <span>Alterar foto</span>
                    </label>
                    <input type="file" name="foto" id="upload-foto" accept="image/*" style="display:none;">
                    <?php if ($isAdmin): ?>
                        <input type="hidden" name="admin" value="1">
                    <?php endif; ?>
                    <button type="submit" class="btn-editar" style="margin-top:10px;">Salvar foto</button>
                </form>
            </div>
        </div>
        <h2><?php echo htmlspecialchars($nome); ?></h2>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        
        <div class="botoes-container">
            <?php if ($isAdmin): ?>
                <a href="painel_admin.php" class="btn-admin">Ir para o Painel Admin</a>
            <?php endif; ?>
            <a href="editar_perfil.php" class="btn-editar">Editar Perfil</a>
            <form action="logout.php" method="post">
                <button type="submit" class="btn-logout">Sair</button>
            </form>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        // ATUALIZAÇÃO AQUI: Lê do sessionStorage
        const usuarioAdminJSON = sessionStorage.getItem('adminLogado');
        const usuarioNormalJSON = sessionStorage.getItem('usuarioLogado');

        // Envia o formulário automaticamente ao selecionar a foto
        const uploadInput = document.getElementById('upload-foto');
        if (uploadInput) {
            uploadInput.addEventListener('change', function() {
                if (uploadInput.files.length > 0) {
                    document.getElementById('form-upload').submit();
                }
            });
        }
    });
    document.getElementById('btn-logout').addEventListener('click', () => {
        sessionStorage.removeItem('usuarioLogado');
        sessionStorage.removeItem('adminLogado');
        alert('Você saiu da sua conta.');
        window.location.href = '/IsabellaAtacadista/login'; // Usando caminho absoluto
    });
</script>
    <?php include "footer.php"; ?>
</body>
</html>