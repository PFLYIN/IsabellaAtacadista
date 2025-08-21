<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    $_SESSION['mensagem_login'] = 'Você precisa estar logado para acessar o perfil';
    header('Location: login.php');
    exit();
}

// Conexão com o banco de dados (ajuste conforme seu ambiente)
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'isabella_atacadista';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Erro de conexão: ' . $conn->connect_error);
}

$id = $_SESSION['usuario_id'];
$sql = "SELECT nome, email, telefone, data_nascimento, foto_perfil FROM usuarios WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($nome, $email, $telefone, $data_nascimento, $foto_perfil);
$stmt->fetch();
$stmt->close();
$conn->close();

$foto = $foto_perfil && file_exists($foto_perfil) ? $foto_perfil : 'uploads/padrao.png';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="CSS/perfil.css">
</head>
<body>
    <div class="perfil-card">
        <img src="<?php echo $foto; ?>" alt="Foto de Perfil" class="perfil-foto">
        <h2><?php echo htmlspecialchars($nome); ?></h2>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <?php if ($telefone) { ?>
            <p><strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?></p>
        <?php } ?>
        <?php if ($data_nascimento) { ?>
            <p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars(date('d/m/Y', strtotime($data_nascimento))); ?></p>
        <?php } ?>
        <a href="editar_perfil.php" class="btn-editar">Editar Perfil</a>
        <form action="logout.php" method="post" style="margin-top: 20px;">
            <button type="submit" class="btn-logout">Sair</button>
        </form>
    </div>
</body>
</html>
