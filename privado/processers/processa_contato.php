<?php
// Limpar qualquer saída anterior
ob_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Desabilitar exibição de erros
error_reporting(0);
ini_set('display_errors', 0);

// Definir cabeçalho JSON
header('Content-Type: application/json');

// Verificar método POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die(json_encode([
        "success" => false,
        "message" => "Método de requisição inválido. Esperado POST, recebido: " . $_SERVER['REQUEST_METHOD']
    ]));
}

// Requerimentos do PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Coletar dados do formulário
$nome = $_POST['nome'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$estado = $_POST['estado'] ?? '';
$email = $_POST['email'] ?? '';
$tipo_assunto = $_POST['tipo_assunto'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';

// Validação básica
if (empty($nome) || empty($email) || empty($mensagem)) {
    echo json_encode(["success" => false, "message" => "Por favor, preencha os campos obrigatórios."]);
    exit;
}

// Criar o e-mail com PHPMailer
$mail = new PHPMailer(true);

try {
    // Desabilitar debug SMTP
    $mail->SMTPDebug = 0;
    
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'pedrodiegomeira@gmail.com'; // usuário autenticado
    $mail->Password = 'zxdtuudltcgynsbh'; // senha
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Remetente: utilize o mesmo e-mail autenticado (necessário pelo Gmail)
    $mail->setFrom('pedrodiegomeira@gmail.com', 'Isabella Atacadista');

    // Destinatário: e-mail que receberá a mensagem (atualmente "Pedro Diego")
    $mail->addAddress('pedrodiegomeira@gmail.com', 'Pedro Diego');

    // Conteúdo
    $mail->isHTML(true);
    $mail->Subject = "Novo contato do site Isabella Atacadista";

    $mail->Body = "
        <div style='font-family:Arial,sans-serif; max-width:600px; padding:20px; background:#fff0f7;'>
           style='max-height:80px;'><br><br>
            <h2 style='color:#a0005a;'>Nova mensagem de contato</h2>
            <hr>
            <p><strong>Nome:</strong> {$nome}</p>
            <p><strong>Telefone:</strong> {$telefone}</p>
            <p><strong>Cidade/Estado:</strong> {$cidade} - {$estado}</p>
            <p><strong>E-mail:</strong> {$email}</p>
            <p><strong>Tipo de Assunto:</strong> {$tipo_assunto}</p>
            <p><strong>Mensagem:</strong><br>{$mensagem}</p>
            <hr>
            <p style='font-size:12px;'>Recebido através do formulário do site.</p>
        </div>
    ";

    $mail->send();
    ob_clean(); // Limpar buffer antes de enviar resposta
    echo json_encode(["success" => true, "message" => "Mensagem enviada com sucesso!"]);
} catch (Exception $e) {
    ob_clean(); // Limpar buffer antes de enviar resposta
    echo json_encode(["success" => false, "message" => "Erro ao enviar a mensagem"]);
}
