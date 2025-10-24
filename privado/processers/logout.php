<?php
session_start();

// Destrói todas as variáveis da sessão
$_SESSION = array();

// Se o cookie de sessão existir, apaga-o
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalmente, destrói a sessão
session_destroy();

// Redireciona para a página de login
header("Location: /IsabellaAtacadista/public/login");
exit;
?>