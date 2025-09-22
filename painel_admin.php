<?php


session_start();

// 1. Verifica se a variável de sessão do admin NÃO existe ou NÃO é verdadeira
if (!isset($_SESSION['admin_logado']) || $_SESSION['admin_logado'] !== true) {
    $_SESSION['mensagem_erro'] = 'Acesso negado. Você precisa ser um administrador.';
    header('Location: adminlogin.php');
    exit();
}


$admin_nome = $_SESSION['admin_nome'] ?? 'Admin';


require_once 'conexao.php';


$stmt = $pdo->query("SELECT id, titulo, preco_varejo, preco_atacado FROM produtos ORDER BY id DESC");
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Administrador</title>
    <link rel="stylesheet" href="CSS/painel_admin.css"> 
</head>
<body>

    <div class="admin-container">
        <header class="admin-header">
            <h1>Gerenciamento dos Produtos</h1>
            <div class="admin-info">
                <span>Olá, <?php echo htmlspecialchars($admin_nome); ?></span>
                
                <form action="logout.php" method="post">
                    <button type="submit" class="btn-logout">Sair do Perfil</button>
                </form>
                <a href="perfil.php?admin=1" class="btn-logout">Perfil</a>
            </div>
        </header>

        <main class="admin-main">
            <div class="toolbar">
                <a href="adicionar_produto.php" class="btn-novo-produto">Adicionar Novo Produto</a>
            </div>
            <table class="tabela-produtos">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Preço Varejo</th>
                        <th>Preço Atacado</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produtos as $produto): ?>
                        <tr>
                            <td><?php echo $produto['id']; ?></td>
                            <td><?php echo htmlspecialchars($produto['titulo']); ?></td>
                            <td>R$ <?php echo number_format($produto['preco_varejo'], 2, ',', '.'); ?></td>
                            <td>R$ <?php echo number_format($produto['preco_atacado'], 2, ',', '.'); ?></td>
                            <td class="acoes">
                                <a href="editar_produto.php?id=<?php echo $produto['id']; ?>" class="btn-editar">Editar</a>
                                <form action="excluir_produto.php" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este produto?');" style="display:inline;">
                                    <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
                                    <button type="submit" class="btn-excluir">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </div>

</body>
</html>