<?php
// Certifica-se de que o código de status HTTP 404 foi enviado
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página não encontrada - 404</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #333;
        }
        .erro-container {
            max-width: 600px;
            margin: 0 auto;
        }
        .botao-voltar {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .botao-voltar:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="erro-container">
        <h1>Página não encontrada</h1>
        <p>Desculpe, a página que você está procurando não existe.</p>
        <a href="/IsabellaAtacadista/public/" class="botao-voltar">Voltar para a página inicial</a>
    </div>
</body>
</html>