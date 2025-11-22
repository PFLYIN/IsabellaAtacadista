<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../includes/conexao.php';

// 1. SEGURANÇA: Apenas admins logados podem editar.
if (!isset($_SESSION['admin_logado']) || $_SESSION['admin_logado'] !== true) {
    header('Location: /IsabellaAtacadista/public/index.php?url=adminlogin');
    exit();
}

// 2. PEGA O ID DO PRODUTO DA URL
$id = $_GET['id'] ?? null;
if (!$id) {
    die('ID do produto não fornecido.');
}

// 3. BUSCA OS DADOS ATUAIS DO PRODUTO NO BANCO
try {
    $stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $produto = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$produto) {
        die('Produto não encontrado.');
    }
} catch (PDOException $e) {
    die("Erro ao buscar produto: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/painel_admin.css">
</head>
<body>
    <div class="admin-container">
        <form action="/IsabellaAtacadista/public/index.php?url=processar_edit_produto" method="post" enctype="multipart/form-data" class="form-produto">
            <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
            
            <div class="form-header">
                <h2>Editar Produto</h2>
                <p><?php echo htmlspecialchars($produto['titulo']); ?></p>
            </div>

            <div class="form-section">
                <h3 class="section-title">Informações Básicas</h3>
                
                <div class="form-group">
                    <label for="titulo">Título do Produto</label>
                    <input type="text" name="titulo" id="titulo" value="<?php echo htmlspecialchars($produto['titulo']); ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" id="descricao" rows="5"><?php echo htmlspecialchars($produto['descricao']); ?></textarea>
                </div>
            </div>

            <div class="form-section">
                <h3 class="section-title">Preços</h3>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="preco_varejo">Preço Varejo (R$)</label>
                        <input type="number" name="preco_varejo" id="preco_varejo" step="0.01" value="<?php echo $produto['preco_varejo']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="preco_atacado">Preço Atacado (R$)</label>
                        <input type="number" name="preco_atacado" id="preco_atacado" step="0.01" value="<?php echo $produto['preco_atacado']; ?>" required>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h3 class="section-title">Atualizar Imagens (Opcional)</h3>
                
                <div class="form-group">
                    <label class="image-upload-area" for="imagens">
                        <div class="upload-icon">📷</div>
                        <div class="upload-text">
                            <strong>Clique para adicionar novas imagens</strong><br>
                            ou arraste e solte aqui<br>
                            <small>As imagens antigas serão substituídas</small>
                        </div>
                    </label>
                    <input type="file" name="imagens[]" id="imagens" accept="image/jpeg, image/png, image/webp" multiple style="display: none;">
                    <div id="preview-container" class="image-preview" style="display: none;"></div>
                </div>
            </div>

            <div class="form-actions">
                <a href="/IsabellaAtacadista/public/index.php?url=painel_admin" class="btn-cancelar">Cancelar</a>
                <button type="submit" class="btn-salvar">Atualizar Produto</button>
            </div>
        </form>
    </div>

    <script>
    // Preview de imagens
    const inputImagens = document.getElementById('imagens');
    const previewContainer = document.getElementById('preview-container');
    
    inputImagens.addEventListener('change', function(e) {
        previewContainer.innerHTML = '';
        previewContainer.style.display = 'none';
        
        const files = Array.from(e.target.files);
        if (files.length > 0) {
            previewContainer.style.display = 'block';
            files.forEach(file => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.maxWidth = '200px';
                    img.style.margin = '10px';
                    img.style.borderRadius = '12px';
                    img.style.boxShadow = '0 2px 8px rgba(0,0,0,0.1)';
                    previewContainer.appendChild(img);
                }
                reader.readAsDataURL(file);
            });
        }
    });
    </script>
</body>
</html>