<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../includes/header.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contato - Isabella Atacadista</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/contato.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>
<body>
    <main class="contact-main">
        <div class="contact-container">
            
            <a href="javascript:history.back()" class="btn-back">Voltar</a>
            
            <div class="contact-card">
                <div class="contact-header">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <div class="contact-title-section">
                        <h1 class="contact-title">Entre em Contato</h1>
                        <p class="contact-subtitle">Estamos aqui para ajudar você</p>
                    </div>
                </div>
                
                <form id="formContato" action="/IsabellaAtacadista/public/index.php?url=processa_contato" method="POST" class="contact-form">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="nome">Nome Completo*</label>
                            <input type="text" id="nome" name="nome" required placeholder="Seu nome completo">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail*</label>
                            <input type="email" id="email" name="email" required placeholder="seu@email.com">
                        </div>
                    </div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000">
                        </div>
                        <div class="form-group">
                            <label for="tipo_assunto">Tipo de Assunto</label>
                            <select id="tipo_assunto" name="tipo_assunto">
                                <option value="Dúvida">Dúvida</option>
                                <option value="Sugestão">Sugestão</option>
                                <option value="Reclamação">Reclamação</option>
                                <option value="Pedido">Pedido</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" id="cidade" name="cidade" placeholder="Sua cidade">
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" id="estado" name="estado" placeholder="UF" maxlength="2">
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label for="mensagem">Mensagem*</label>
                        <textarea id="mensagem" name="mensagem" rows="5" required placeholder="Digite sua mensagem aqui..."></textarea>
                    </div>

                    <button type="submit" class="btn-submit">
                        Enviar Mensagem
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                </form>

                <div id="mensagemStatus" class="oculto"></div>
            </div>

            <!-- Contact Info Cards -->
            <div class="contact-info-section">
                <h2 class="section-title">Outras Formas de Contato</h2>
                
                <div class="info-cards">
                    <div class="info-card whatsapp-card">
                        <div class="info-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </div>
                        <div class="info-card-content">
                            <h3>WhatsApp</h3>
                            <p>Atendimento rápido e direto</p>
                            <a href="https://wa.me/5544999999999" target="_blank" class="info-card-link">
                                Enviar Mensagem →
                            </a>
                        </div>
                    </div>

                    <div class="info-card instagram-card">
                        <div class="info-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                            </svg>
                        </div>
                        <div class="info-card-content">
                            <h3>Instagram</h3>
                            <p>Siga-nos para novidades</p>
                            <a href="https://www.instagram.com/isabelleatacadista/" target="_blank" class="info-card-link">
                                Seguir →
                            </a>
                        </div>
                    </div>

                    <div class="info-card location-card">
                        <div class="info-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0C7.802 0 4.5 3.301 4.5 7.5c0 7.898 7.5 16.5 7.5 16.5s7.5-8.602 7.5-16.5C19.5 3.301 16.199 0 12 0zm0 11.25c-2.07 0-3.75-1.68-3.75-3.75S9.93 3.75 12 3.75s3.75 1.68 3.75 3.75-1.68 3.75-3.75 3.75z"/>
                            </svg>
                        </div>
                        <div class="info-card-content">
                            <h3>Localização</h3>
                            <p>R. Ararigiboia, 924 - Juranda, PR</p>
                            <a href="https://maps.google.com/?q=Rua+Ararigiboia,+924,+Juranda,+PR" target="_blank" class="info-card-link">
                                Ver no Mapa →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("formContato");
        const status = document.getElementById("mensagemStatus");

        form.addEventListener("submit", async function (e) {
            e.preventDefault();

            const formData = new FormData(this);

            try {
                const response = await fetch(form.getAttribute('action'), {
                    method: 'POST',
                    body: formData
                });

                let result;
                const text = await response.text();
                
                try {
                    result = JSON.parse(text);
                } catch (e) {
                    console.error('Resposta do servidor:', text);
                    throw new Error('Erro ao processar resposta do servidor');
                }

                status.classList.remove("sucesso", "erro");
                status.textContent = result.message;

                if (result.success) {
                    status.classList.add("sucesso");
                    form.reset();
                } else {
                    status.classList.add("erro");
                }

                status.classList.remove("oculto");
                setTimeout(() => {
                    status.classList.add("oculto");
                }, 5000);
            } catch (err) {
                console.error(err);
                status.textContent = "Erro ao enviar: " + err.message;
                status.classList.add("erro");
                status.classList.remove("oculto");
            }
        });
    });
    </script>
    
    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>