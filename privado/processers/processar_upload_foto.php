<?php
session_start();
require_once '../includes/conexao.php';

// Permite upload para usuário OU admin
$isAdminUpload = isset($_SESSION['admin_logado']) && $_SESSION['admin_logado'] === true && isset($_POST['admin']) && $_POST['admin'] == '1';
$isUsuarioUpload = isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado'] === true && !isset($_POST['admin']);
if (!$isAdminUpload && !$isUsuarioUpload) {
    die('Acesso negado.');
}

if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $imagem = $_FILES['foto'];
//validação
    $extensoes_permitidas = ['jpg', 'jpeg', 'png', 'gif'];
    $extensao = strtolower(pathinfo($imagem['name'], PATHINFO_EXTENSION));

    if (!in_array($extensao, $extensoes_permitidas)) {
        die('Formato de arquivo não permitido. Apenas JPG, PNG e GIF são aceitos.');
    }

    if ($imagem['size'] > 5 * 1024 * 1024) {
        die('O arquivo é muito grande. O tamanho máximo é de 5MB.');
    }

    if (!is_dir('../../public/uploads')) {
        mkdir('../../public/uploads', 0755, true);
    }

    if ($isAdminUpload) {
        $id_admincdst = $_SESSION['admin_id'];
        $nomeArquivo = 'admin_' . $id_admincdst . '_' . uniqid() . '.' . $extensao;
    } else {
        $id = $_SESSION['usuario_id'];
        $nomeArquivo = 'user_' . $id . '_' . uniqid() . '.' . $extensao;
    }
    $caminhoDestino = '../../public/uploads/' . $nomeArquivo;

    if (move_uploaded_file($imagem['tmp_name'], $caminhoDestino)) {
        try {
            if ($isAdminUpload) {
//atualiza o caminho da foto
                $sql = "UPDATE admin_login SET foto_perfil = :caminho WHERE id_admincdst = :id_admincdst";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':caminho' => $caminhoDestino,
                    ':id_admincdst' => $id_admincdst
                ]);
                
                header('Location: /IsabellaAtacadista/public/perfil?admin=1');
                exit();
            } else {
                
                $sql = "UPDATE login_pessoa SET foto_perfil = :caminho WHERE id_cadastro = :id_cadastro";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ':caminho' => $caminhoDestino,
                    ':id_cadastro' => $id
                ]);
               
                header('Location: /IsabellaAtacadista/public/perfil');
                exit();
            }
        } catch (PDOException $e) {
            die("Erro ao atualizar o banco de dados: " . $e->getMessage());
        }
    } else {
        die("Erro ao salvar o arquivo de imagem.");
    }
} else {
    
    $_SESSION['mensagem_erro'] = "Nenhum arquivo foi selecionado ou ocorreu um erro no upload.";
    header('Location: perfil.php');
    exit();
}
?>