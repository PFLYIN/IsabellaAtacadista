<?php
session_start();
require_once 'conexao.php';

// Segurança: Apenas usuários logados podem fazer upload
if (!isset($_SESSION['usuario_logado']) || $_SESSION['usuario_logado'] !== true) {
    die('Acesso negado.');
}

// Verifica se um arquivo foi enviado e se não houve erros
if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $imagem = $_FILES['foto'];
    
    // Validações de segurança
    $extensoes_permitidas = ['jpg', 'jpeg', 'png', 'gif'];
    $extensao = strtolower(pathinfo($imagem['name'], PATHINFO_EXTENSION));
    
    if (!in_array($extensao, $extensoes_permitidas)) {
        die('Formato de arquivo não permitido. Apenas JPG, PNG e GIF são aceitos.');
    }
    
    if ($imagem['size'] > 5 * 1024 * 1024) { // Limite de 5MB
        die('O arquivo é muito grande. O tamanho máximo é de 5MB.');
    }

    // Cria a pasta 'uploads' se ela não existir
    if (!is_dir('uploads')) {
        mkdir('uploads', 0755, true);
    }

    // Gera um nome único para o arquivo para evitar conflitos
    $nomeArquivo = 'user_' . $_SESSION['usuario_id'] . '_' . uniqid() . '.' . $extensao;
    $caminhoDestino = 'uploads/' . $nomeArquivo;

    // Move o arquivo para a pasta de uploads
    if (move_uploaded_file($imagem['tmp_name'], $caminhoDestino)) {
        try {
            // Atualiza o caminho da foto no banco de dados
            $sql = "UPDATE login_pessoa SET foto_perfil = :caminho WHERE id_cadastro = :id_cadastro";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':caminho' => $caminhoDestino,
                ':id_cadastro' => $_SESSION['usuario_id']
            ]);

            // Redireciona de volta para o perfil para mostrar a nova foto
            header('Location: perfil.php');
            exit();

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