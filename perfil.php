<?php
session_start();

// 1. SEGURANÇA: Verifica se o usuário está logado
if (!isset($_SESSION['usuario_logado']) || $_SESSION['usuario_logado'] !== true) {
    
    $_SESSION['mensagem_erro'] = 'Você precisa estar logado para acessar o perfil.';
    header('Location: login.php');
    exit();
}

require_once 'conexao.php';

$usuario_id = $_SESSION['usuario_id'];
$nome = $_SESSION['usuario_nome'];

try {
    $sql = "SELECT l.email, l.foto_perfil FROM login_pessoa l WHERE l.id_cadastro = :id_cadastro";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id_cadastro' => $usuario_id]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        $email = $usuario['email'];
        // Define a foto de perfil: usa a do banco ou a padrão se não houver
        $foto_perfil = $usuario['foto_perfil'] ? $usuario['foto_perfil'] : 'uploads/padrao.png';
    } else {
        // Caso de segurança: se o usuário da sessão não for encontrado no banco
        session_destroy();
        header('Location: login.php');
        exit();
    }
} catch (PDOException $e) {
    die("Erro ao buscar dados do perfil: " . $e->getMessage());
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
                </form>
            </div>
        </div>
        <h2><?php echo htmlspecialchars($nome); ?></h2>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        
        <div class="botoes-container">
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