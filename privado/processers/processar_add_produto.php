<?php
session_start();
require_once '../processers/conexao.php';

// Garante que só administradores autenticados possam acessar este endpoint.
if (!isset($_SESSION['admin_logado']) || $_SESSION['admin_logado'] !== true) {
    die('Acesso negado.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $titulo = $_POST['titulo'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
    $preco_varejo = $_POST['preco_varejo'] ?? 0;
    $preco_atacado = $_POST['preco_atacado'] ?? 0;
    $categoria_id = $_POST['categoria_id'] ?? null;

    // Validação dos campos obrigatórios
    if (empty($titulo) || empty($preco_varejo) || empty($categoria_id)) {
        die('Título, Preço de Varejo e Categoria são campos obrigatórios.');
    }

    try {
        $pdo->beginTransaction();

        // O campo categoria_id agora é obrigatório e já vem do formulário
        $sqlProduto = "INSERT INTO produtos (titulo, descricao, preco_varejo, preco_atacado, categoria_id) VALUES (:titulo, :descricao, :preco_varejo, :preco_atacado, :categoria_id)";
        $stmtProduto = $pdo->prepare($sqlProduto);
        $stmtProduto->execute([
            ':titulo' => $titulo,
            ':descricao' => $descricao,
            ':preco_varejo' => $preco_varejo,
            ':preco_atacado' => $preco_atacado,
            ':categoria_id' => $categoria_id
        ]);

        // Recupera o ID do produto recém-inserido
        $novoProdutoId = $pdo->lastInsertId();

        // Permite múltiplas imagens (campo imagens[] no formulário)
        if (isset($_FILES['imagens']) && isset($_FILES['imagens']['name']) && is_array($_FILES['imagens']['name'])) {
            $pastaUploads = 'uploads';
            if (!is_dir($pastaUploads)) {
                mkdir($pastaUploads, 0755, true);
            }
            $totalImagens = count($_FILES['imagens']['name']);
            for ($i = 0; $i < $totalImagens; $i++) {
                if ($_FILES['imagens']['error'][$i] === UPLOAD_ERR_OK) {
                    $nomeOriginal = $_FILES['imagens']['name'][$i];
                    $tmpName = $_FILES['imagens']['tmp_name'][$i];
                    $extensao = pathinfo($nomeOriginal, PATHINFO_EXTENSION);
                    $nomeArquivo = 'produto_' . $novoProdutoId . '_' . uniqid() . '.' . $extensao;
                    $caminhoDestino = $pastaUploads . '/' . $nomeArquivo;
                    // Move o arquivo para a pasta uploads
                    if (move_uploaded_file($tmpName, $caminhoDestino)) {
                        $sqlImagem = "INSERT INTO produto_imagens (produto_id, url_imagem) VALUES (:produto_id, :url_imagem)";
                        $stmtImagem = $pdo->prepare($sqlImagem);
                        $stmtImagem->execute([
                            ':produto_id' => $novoProdutoId,
                            ':url_imagem' => $caminhoDestino
                        ]);
                    } else {
                        throw new Exception("Falha ao salvar o arquivo de imagem: " . htmlspecialchars($nomeOriginal));
                    }
                }
            }
        }

        // Finaliza a transação
        $pdo->commit();

        $_SESSION['mensagem_sucesso'] = "Produto '".htmlspecialchars($titulo)."' criado com sucesso!";
        header('Location: painel_admin.php');
        exit();

    } catch (Exception $e) {
        $pdo->rollBack();
        die("Erro ao salvar o produto: " . $e->getMessage());
    }
}
?>