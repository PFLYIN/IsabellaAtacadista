<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contato - Isabella Atacadista</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/contato.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "header.php";?>
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
                
                <form id="formContato" action="processa_contato.php" method="POST">
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
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 140.382-0.297-0.149-175886703967273.990.471-0.148-0.670.15-.197.2970.7679660.94.164-.173.199-.3470.223-.64475297-.15-1.255-0.463-239-1475-0.883-0.788-10.48-10.7611.653-259173-.297-0.0180.4580.13-.606.134-.1330.2980.3470.4460.52.149-.174.198-.298.2980.49799-.19850.371025.52075-0.149-0.6691.612-0.916-2207-.242-.5790.4870.50.6690.510.173-.080.371-01.570119800.52.74-.792.3722720.297-14 1.0161.04.479 1.462 1.65 2.875.213.074.149.198 296.2.077.487.709.306.262.489 1.6940.625.71222710.360.1951.871118.571-0.085 10.758-0.7192061.413248.694.248-1289.173-1413740.124.272-0.198-0.57-0.347-5.421 70.403h-.004a9.87 9.8701-50.031-10.378l-.361.2140.741982.998-3648-.235-.374a9.869.86 01-1.51-526c01-50.45 4.436-9.884 9.8889.884 2.640 50.122 10.03 6.988 2.898a9.825 9.825012.893 60.994c-03 50.45-4.437 9.884-988590.884.413-18.2971.815 11.815 0012.05C5.49500.16 5.33515711.892c0 296.547 40.1421.588.945057 2460.305.65410.882 11.88200050.683 10.448.005.55401189.33511.893-11.8931.821 110.82120.885                   </svg>
                        </div>
                        <div class="card-content">
                            <h3>WhatsApp</h3>
                            <p>Atendimento rápido e direto</p>
                            <a href="https://wa.me/SEUNUMERO" target="_blank" class="contact-link">
                                Enviar Mensagem
                            </a>
                        </div>
                    </div>

                    <div class="contact-card instagram">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12.163c3.2040 3.584.12 4.8507 3.252.148 4.771 1.691 4.919.91958.26569 1.6450694.84903.205-0.0123.584-0.069 40.849-.149 3.225-1.664 4.771-4.919 4.9191.266.58-10.644.07-4.8573.2403584-.12.84907-3.26-.149-4.7711.699-4.919-4.92058-1.26507-1.644-0.07-4.849 03.240133.58307-4.849.149-3.227 1.664-4.77140.919-40.9191.266-0.0571.645-.069.849069zm0-2163-3.259 0.66714-4.947.0724.358.2-6782618-698698-0.0591.281-0.073 1.689.73 4.948 0.25914 3.668.072.9482 40.358 2618678.98698.28158.68972 4.9480723.25903.668-0.0144.9480724354-0.2 6.782-26186.979-6.980591.2873-1.6890734.94803.259-0.0143.667-0.072-40.947-.196-40.354-20.617-6.786.979-698-1281059-169-.073.949073zm05838c-3.403-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759.162.163-3.403-2.759-6.162-6.162-60.162zm0 100.162c-2.20904-10.79-4-4 0-2.209.791-4 4-44 10.791 4 4c02.2110.791-446.406-11.845c-.796 0-1441.645-1441144s0.645144 1.44110.44c.7950 10.4390.645 10.439-1.44s-0.64444                   </svg>
                        </div>
                        <div class="card-content">
                            <h3>Instagram</h3>
                            <p>Siga-nos para novidades</p>
                            <a href="https://www.instagram.com/SEUUSUARIO/" target="_blank" class="contact-link">
                                Seguir
                            </a>
                        </div>
                    </div>

                    <div class="contact-card location">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.132 5 513 59c0 50.25 713 7 137-70.75 7-13c0-3.87-3.137-7-7zm0 95c-1.38 0-20.5-1.12-2.5-2.5s1.12-25 2.5-2.5 20.5 1.12 2.5 2.5-1.12                   </svg>
                        </div>
                        <div class="card-content">
                            <h3>Localização</h3>
                            <p>R. Ararigiboia,924- Juranda, PR</p>
                            <a href="https://maps.google.com/?q=R.+Ararigiboia,+924uranda,+PR" target="_blank" class="contact-link">
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
    
    <?php include "footer.php";?>
</body>
</html>