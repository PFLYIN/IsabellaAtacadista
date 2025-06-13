<?php include "header.php";?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contato - Isabella Atacadista</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/contato.css">
</head>
<body>
    <div class="container">
        <h1>Fale Conosco</h1>
        <form id="formContato" action="processa_contato.php" method="POST">
            <label for="nome">Nome*</label>
            <input type="text" id="nome" name="nome" required>

            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone" name="telefone">

            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" name="cidade">

            <label for="estado">Estado</label>
            <input type="text" id="estado" name="estado">

            <label for="email">Email*</label>
            <input type="email" id="email" name="email" required>

            <label for="tipo_assunto">Tipo de Assunto</label>
            <select id="tipo_assunto" name="tipo_assunto">
                <option value="Dúvida">Dúvida</option>
                <option value="Sugestão">Sugestão</option>
                <option value="Reclamação">Reclamação</option>
            </select>

            <label for="mensagem">Mensagem*</label>
            <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

            <button type="submit">Enviar Mensagem</button>
        </form>

        <div id="mensagemStatus" class="oculto"></div>
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
</body>
</html>
<?php include "footer.php";?>