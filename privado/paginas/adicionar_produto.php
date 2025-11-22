<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin_logado']) || $_SESSION['admin_logado'] !== true) {
    $_SESSION['mensagem_erro'] = 'Acesso negado. Você precisa ser um administrador.';
    header('Location: /IsabellaAtacadista/public/index.php?url=adminlogin');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Novo Produto</title>
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/painel_admin.css">
</head>
<body>
    <div class="admin-container">
        <form action="/IsabellaAtacadista/public/index.php?url=processar_add_produto" method="post" enctype="multipart/form-data" class="form-produto">
            
            <div class="form-header">
                <h2>Adicionar Novo Produto</h2>
                <p>Preencha as informações do produto abaixo</p>
            </div>

            <div class="form-section">
                <h3 class="section-title">Informações Básicas</h3>
                
                <div class="form-group">
                    <label for="categoria_id">Categoria do Produto</label>
                    <select name="categoria_id" id="categoria_id" required>
                        <option value="">Selecione a categoria</option>
                        <option value="1">Vestido</option>
                        <option value="2">Conjunto</option>
                        <option value="3">Blusinhas</option>
                        <option value="4">Vestido (Outros)</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="titulo">Título do Produto</label>
                    <input type="text" name="titulo" id="titulo" placeholder="Digite o nome do produto" required>
                </div>
                
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" id="descricao" rows="5" placeholder="Descreva o produto em detalhes..."></textarea>
                </div>
            </div>

            <div class="form-section">
                <h3 class="section-title">Preços</h3>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="preco_varejo">Preço Varejo (R$)</label>
                        <input type="number" name="preco_varejo" id="preco_varejo" step="0.01" placeholder="0,00" required>
                    </div>
                    <div class="form-group">
                        <label for="preco_atacado">Preço Atacado (R$)</label>
                        <input type="number" name="preco_atacado" id="preco_atacado" step="0.01" placeholder="0,00" required>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h3 class="section-title">Imagens do Produto</h3>
                
                <div class="form-group">
                    <label class="image-upload-area" for="imagens">
                        <div class="upload-icon">📷</div>
                        <div class="upload-text">
                            <strong>Clique para selecionar imagens</strong><br>
                            ou arraste e solte aqui<br>
                            <small>Você pode selecionar várias imagens (JPG, PNG, WEBP)</small>
                        </div>
                    </label>
                    <input type="file" name="imagens[]" id="imagens" accept="image/jpeg, image/png, image/webp" multiple style="display: none;">
                    <div id="preview-container" class="image-preview" style="display: none;"></div>
                </div>
            </div>

            <div class="form-actions">
                <a href="/IsabellaAtacadista/public/index.php?url=painel_admin" class="btn-cancelar">Cancelar</a>
                <button type="submit" class="btn-salvar">Salvar Produto</button>
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