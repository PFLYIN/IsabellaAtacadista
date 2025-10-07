<?php
session_start();

if (!isset($_SESSION['admin_logado']) || $_SESSION['admin_logado'] !== true) {
    $_SESSION['mensagem_erro'] = 'Acesso negado. Você precisa ser um administrador.';
    header('Location: adminlogin.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Novo Produto</title>
    <link rel="stylesheet" href="CSS/painel_admin.css"> 
</head>
<body>
    <div class="admin-container">
        <h1>Adicionar Novo Produto</h1>

        <form action="processar_add_produto.php" method="post" enctype="multipart/form-data" class="form-produto">
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
                <input type="text" name="titulo" id="titulo" required>
            </div>
            
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" rows="5"></textarea>
            </div>
            
            <div class="form-group-inline">
                <div class="form-group">
                    <label for="preco_varejo">Preço Varejo (R$)</label>
                    <input type="number" name="preco_varejo" id="preco_varejo" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="preco_atacado">Preço Atacado (R$)</label>
                    <input type="number" name="preco_atacado" id="preco_atacado" step="0.01" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="imagens">Imagens do Produto (você pode selecionar várias)</label>
                <input type="file" name="imagens[]" id="imagens" accept="image/jpeg, image/png, image/webp" multiple>
            </div>

            <div class="form-actions">
                <a href="painel_admin.php" class="btn-cancelar">Cancelar</a>
                <button type="submit" class="btn-salvar">Salvar Produto</button>
            </div>
        </form>
    </div>
</body>
</html>