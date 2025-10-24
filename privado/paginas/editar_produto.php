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
    <title>Editar Produto</title>
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/painel_admin.css"> </head>
<body>
    <div class="admin-container">
        <h1>Editar Produto: <?php echo htmlspecialchars($produto['titulo']); ?></h1>

        <form action="/IsabellaAtacadista/public/index.php?url=processar_edit_produto" method="post" enctype="multipart/form-data" class="form-produto">
            <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
            
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" value="<?php echo htmlspecialchars($produto['titulo']); ?>" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" rows="5"><?php echo htmlspecialchars($produto['descricao']); ?></textarea>
            </div>
            <div class="form-group-inline">
                <div class="form-group">
                    <label for="preco_varejo">Preço Varejo</label>
                    <input type="number" name="preco_varejo" id="preco_varejo" step="0.01" value="<?php echo $produto['preco_varejo']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="preco_atacado">Preço Atacado</label>
                    <input type="number" name="preco_atacado" id="preco_atacado" step="0.01" value="<?php echo $produto['preco_atacado']; ?>" required>
                </div>
            </div>
            
            <div class="form-actions">
                <a href="/IsabellaAtacadista/public/index.php?url=painel_admin" class="btn-cancelar">Cancelar</a>
                <button type="submit" class="btn-salvar">Atualizar Produto</button>
            </div>
        </form>
    </div>
</body>
</html>