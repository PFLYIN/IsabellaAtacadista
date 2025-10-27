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
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Entre em Contato</h1>
            <p>Estamos aqui para ajudar você a encontrar o que procura</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="main-container">
        <!-- Contact Form Section -->
        <section class="contact-section">
            <div class="form-container">
                <div class="form-header">
                    <h2>Envie sua Mensagem</h2>
                    <p>Preencha o formulário abaixo e entraremos em contato em breve</p>
                </div>
                
                <form id="formContato" action="/IsabellaAtacadista/public/index.php?url=processa_contato" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nome">Nome Completo*</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail*</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="tel" id="telefone" name="telefone">
                        </div>
                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" id="cidade" name="cidade">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" id="estado" name="estado">
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

                    <div class="form-group full-width">
                        <label for="mensagem">Mensagem*</label>
                        <textarea id="mensagem" name="mensagem" rows="6" required placeholder="Digite sua mensagem aqui..."></textarea>
                    </div>

                    <button type="submit" class="submit-btn">
                        <span class="btn-text">Enviar Mensagem</span>
                        <span class="btn-icon">→</span>
                    </button>
                </form>

                <div id="mensagemStatus" class="oculto"></div>
            </div>
        </section>

        <!-- Contact Info Section -->
        <section class="info-section">
            <div class="info-container">
                <div class="info-header">
                    <h2>Formas de Contato</h2>
                    <p>Escolha a forma que preferir para nos encontrar</p>
                </div>
                
                <div class="contact-cards">
                    <div class="contact-card whatsapp">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </div>
                        <div class="card-content">
                            <h3>WhatsApp</h3>
                            <p>Atendimento rápido e direto</p>
                            <a href="https://wa.me/5544999999999" target="_blank" class="contact-link">
                                Enviar Mensagem
                            </a>
                        </div>
                    </div>

                    <div class="contact-card instagram">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                            </svg>
                        </div>
                        <div class="card-content">
                            <h3>Instagram</h3>
                            <p>Siga-nos para novidades</p>
                            <a href="https://www.instagram.com/isabelleatacadista/" target="_blank" class="contact-link">
                                Seguir
                            </a>
                        </div>
                    </div>

                    <div class="contact-card location">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0C7.802 0 4.5 3.301 4.5 7.5c0 7.898 7.5 16.5 7.5 16.5s7.5-8.602 7.5-16.5C19.5 3.301 16.199 0 12 0zm0 11.25c-2.07 0-3.75-1.68-3.75-3.75S9.93 3.75 12 3.75s3.75 1.68 3.75 3.75-1.68 3.75-3.75 3.75z"/>
                            </svg>
                        </div>
                        <div class="card-content">
                            <h3>Localização</h3>
                            <p>R. Ararigiboia, 924 - Juranda, PR</p>
                            <a href="https://maps.google.com/?q=Rua+Ararigiboia,+924,+Juranda,+PR" target="_blank" class="contact-link">
                                Ver no Mapa
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

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