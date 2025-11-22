<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../includes/conexao.php';

// Verifica autenticação
if (!isset($_SESSION['usuario_logado']) || $_SESSION['usuario_logado'] !== true) {
    $_SESSION['mensagem_erro'] = 'Você precisa estar logado.';
    header('Location: /IsabellaAtacadista/public/auth');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /IsabellaAtacadista/public/perfil');
    exit();
}

$usuario_id = $_SESSION['usuario_id'];
$nome = trim($_POST['nome'] ?? '');
$senha_atual = $_POST['senha_atual'] ?? '';
$senha_nova = $_POST['senha_nova'] ?? '';
$senha_confirmar = $_POST['senha_confirmar'] ?? '';

$erro = false;

try {
    // Atualiza nome
    if (!empty($nome)) {
        $sql = "UPDATE pessoa_cadastro SET nome = :nome WHERE id_cadastro = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':nome' => $nome, ':id' => $usuario_id]);
        $_SESSION['usuario_nome'] = $nome;
    }

    // Atualiza senha (se informada)
    if (!empty($senha_atual) || !empty($senha_nova) || !empty($senha_confirmar)) {
        
        // Valida se todos os campos de senha foram preenchidos
        if (empty($senha_atual) || empty($senha_nova) || empty($senha_confirmar)) {
            $_SESSION['mensagem_erro'] = 'Preencha todos os campos de senha.';
            $erro = true;
        }
        // Valida se a nova senha e confirmação são iguais
        elseif ($senha_nova !== $senha_confirmar) {
            $_SESSION['mensagem_erro'] = 'A nova senha e a confirmação não correspondem.';
            $erro = true;
        }
        // Valida tamanho mínimo
        elseif (strlen($senha_nova) < 6) {
            $_SESSION['mensagem_erro'] = 'A nova senha deve ter no mínimo 6 caracteres.';
            $erro = true;
        }
        else {
            // Verifica senha atual no banco
            $sql = "SELECT senha FROM login_pessoa WHERE id_cadastro = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $usuario_id]);
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($login && password_verify($senha_atual, $login['senha'])) {
                // Senha atual correta, atualiza para nova
                $senha_hash = password_hash($senha_nova, PASSWORD_BCRYPT);
                $sql = "UPDATE login_pessoa SET senha = :senha WHERE id_cadastro = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([':senha' => $senha_hash, ':id' => $usuario_id]);
            } else {
                $_SESSION['mensagem_erro'] = 'Senha atual incorreta.';
                $erro = true;
            }
        }
    }

    if (!$erro) {
        $_SESSION['mensagem_sucesso'] = 'Perfil atualizado com sucesso!';
    }

} catch (PDOException $e) {
    $_SESSION['mensagem_erro'] = 'Erro ao atualizar perfil: ' . $e->getMessage();
}

header('Location: /IsabellaAtacadista/public/perfil');
exit();
