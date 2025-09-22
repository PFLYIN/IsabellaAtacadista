<?php
session_start();
require_once 'conexao.php';

// Permite upload para usuário OU admin
// Só permite upload se for admin autenticado OU usuário autenticado
$isAdminUpload = isset($_SESSION['admin_logado']) && $_SESSION['admin_logado'] === true && isset($_POST['admin']) && $_POST['admin'] == '1';
$isUsuarioUpload = isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado'] === true && !isset($_POST['admin']);
if (!$isAdminUpload && !$isUsuarioUpload) {
    die('Acesso negado.');
}

// Verifica se um arquivo foi enviado e se não houve erros
if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $imagem = $_FILES['foto'];
    // Validações de segurança
    $extensoes_permitidas = ['jpg', 'jpeg', 'png', 'gif'];
    $extensao = strtolower(pathinfo($imagem['name'], PATHINFO_EXTENSION));

    // Só permite extensões seguras
    if (!in_array($extensao, $extensoes_permitidas)) {
        die('Formato de arquivo não permitido. Apenas JPG, PNG e GIF são aceitos.');
    }

    // Limita o tamanho do arquivo para evitar abusos
    if ($imagem['size'] > 5 * 1024 * 1024) { // Limite de 5MB
        die('O arquivo é muito grande. O tamanho máximo é de 5MB.');
    }

    // Cria a pasta 'uploads' se ela não existir
    if (!is_dir('uploads')) {
        mkdir('uploads', 0755, true);
    }

    // Gera um nome único para o arquivo para evitar conflitos
    if ($isAdminUpload) {
        $id_admincdst = $_SESSION['admin_id'];
        $nomeArquivo = 'admin_' . $id_admincdst . '_' . uniqid() . '.' . $extensao;
    } else {
        $id = $_SESSION['usuario_id'];
        $nomeArquivo = 'user_' . $id . '_' . uniqid() . '.' . $extensao;
    }
    $caminhoDestino = 'uploads/' . $nomeArquivo;

    // Move o arquivo para a pasta de uploads
    if (move_uploaded_file($imagem['tmp_name'], $caminhoDestino)) {
        try {
            if ($isAdminUpload) {
                // Atualiza o caminho da foto na tabela admin_login usando id_admincdst
                $sql = "UPDATE admin_login SET foto_perfil = :caminho WHERE id_admincdst = :id_admincdst";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':caminho' => $caminhoDestino,
                    ':id_admincdst' => $id_admincdst
                ]);
                // Redireciona para o perfil admin
                header('Location: perfil.php?admin=1');
                exit();
            } else {
                // Atualiza o caminho da foto no banco de dados do usuário
                $sql = "UPDATE login_pessoa SET foto_perfil = :caminho WHERE id_cadastro = :id_cadastro";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':caminho' => $caminhoDestino,
                    ':id_cadastro' => $id
                ]);
                // Redireciona para o perfil do usuário
                header('Location: perfil.php');
                exit();
            }
        } catch (PDOException $e) {
            die("Erro ao atualizar o banco de dados: " . $e->getMessage());
        }
    } else {
        die("Erro ao salvar o arquivo de imagem.");
    }
} else {
    // Se nenhum arquivo foi enviado ou houve um erro no upload
    $_SESSION['mensagem_erro'] = "Nenhum arquivo foi selecionado ou ocorreu um erro no upload.";
    header('Location: perfil.php');
    exit();
}
?>