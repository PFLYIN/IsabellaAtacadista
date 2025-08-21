<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    $_SESSION['mensagem_login'] = 'Você precisa estar logado para editar o perfil';
    header('Location: login.php');
    exit();
}

// Conexão com o banco de dados
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

$erro = '';
$sucesso = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $novo_nome = $_POST['nome'];
    $novo_email = $_POST['email'];
    $novo_telefone = $_POST['telefone'] ?? null;
    $nova_data = $_POST['data_nascimento'] ?? null;
    $novo_foto = $foto_perfil;

    // Upload da foto
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $permitidos = ['image/jpeg', 'image/png'];
        $max_tam = 2 * 1024 * 1024;
        if (!in_array($_FILES['foto']['type'], $permitidos)) {
            $erro = 'Apenas arquivos JPEG e PNG são permitidos.';
        } elseif ($_FILES['foto']['size'] > $max_tam) {
            $erro = 'O tamanho máximo da foto é 2MB.';
        } else {
            $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            $caminho = 'uploads/perfil_' . $id . '_' . time() . '.' . $ext;
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminho)) {
                $novo_foto = $caminho;
            } else {
                $erro = 'Erro ao salvar a foto.';
            }
        }
    }

    if (!$erro) {
        $sql = "UPDATE usuarios SET nome=?, email=?, telefone=?, data_nascimento=?, foto_perfil=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssssi', $novo_nome, $novo_email, $novo_telefone, $nova_data, $novo_foto, $id);
        if ($stmt->execute()) {
            $sucesso = 'Perfil atualizado com sucesso!';
            $nome = $novo_nome;
            $email = $novo_email;
            $telefone = $novo_telefone;
            $data_nascimento = $nova_data;
            $foto_perfil = $novo_foto;
        } else {
            $erro = 'Erro ao atualizar perfil.';
        }
        $stmt->close();
    }
}
$conn->close();
$foto = $foto_perfil && file_exists($foto_perfil) ? $foto_perfil : 'uploads/padrao.png';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="CSS/perfil.css">
    <style>
        .perfil-card form { margin-top: 24px; text-align: left; }
        .perfil-card label { display: block; margin-bottom: 6px; font-weight: bold; }
        .perfil-card input[type="text"],
        .perfil-card input[type="email"],
        .perfil-card input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        .perfil-card input[type="file"] { margin-bottom: 16px; }
        .perfil-card .msg-erro { color: #e74c3c; margin-bottom: 12px; }
        .perfil-card .msg-sucesso { color: #27ae60; margin-bottom: 12px; }
    </style>
</head>
<body>
    <div class="perfil-card">
        <img src="<?php echo $foto; ?>" alt="Foto de Perfil" class="perfil-foto">
        <h2>Editar Perfil</h2>
        <?php if ($erro) { echo '<div class="msg-erro">' . $erro . '</div>'; } ?>
        <?php if ($sucesso) { echo '<div class="msg-sucesso">' . $sucesso . '</div>'; } ?>
        <form method="post" enctype="multipart/form-data">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome" value="<?php echo htmlspecialchars($nome); ?>" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" required>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" value="<?php echo htmlspecialchars($telefone); ?>">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo htmlspecialchars($data_nascimento); ?>">
            <label for="foto">Foto de Perfil</label>
            <input type="file" name="foto" id="foto" accept="image/jpeg, image/png">
            <button type="submit" class="btn-editar">Salvar</button>
            <a href="perfil.php" class="btn-logout" style="background:#888; margin-left:12px;">Cancelar</a>
        </form>
    </div>
</body>
</html>
