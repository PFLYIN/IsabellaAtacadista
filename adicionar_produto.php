<?php
session_start();

// Segurança: Apenas um administrador logado pode acessar esta página.
if (!isset($_SESSION['admin_logado']) || $_SESSION['admin_logado'] !== true) {
    $_SESSION['mensagem_erro'] = 'Acesso negado. Você precisa ser um administrador.';
    header('Location: adminlogin.php');
    exit();
}

// Inclui o cabeçalho do seu site, se tiver um padrão
// include "header.php"; 
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
                <label for="imagem">Imagem Principal do Produto</label>
                <input type="file" name="imagem" id="imagem" accept="image/jpeg, image/png, image/webp">
            </div>

            <div class="form-actions">
                <a href="painel_admin.php" class="btn-cancelar">Cancelar</a>
                <button type="submit" class="btn-salvar">Salvar Produto</button>
            </div>
        </form>
    </div>
</body>
</html>