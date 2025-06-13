document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contatoForm');
    const telefoneInput = document.getElementById('telefone');

    // Máscara para o telefone
    const maskTelefone = (value) => {
        return value
            .replace(/\D/g, '')
            .replace(/^(\d{2})(\d)/g, '($1) $2')
            .replace(/(\d)(\d{4})$/, '$1-$2');
    };

    telefoneInput.addEventListener('input', (e) => {
        e.target.value = maskTelefone(e.target.value);
    });

    // Validação do formulário
    form.addEventListener('submit', function(e) {
        let isValid = true;
        
        // Validar nome (mínimo 3 caracteres)
        const nome = document.getElementById('nome');
        if (nome.value.trim().length < 3) {
            alert('Por favor, insira um nome válido');
            isValid = false;
        }

        // Validar telefone (mínimo 14 caracteres com a máscara)
        if (telefoneInput.value.length < 14) {
            alert('Por favor, insira um número de telefone válido');
            isValid = false;
        }

        // Validar email
        const email = document.getElementById('email');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email.value)) {
            alert('Por favor, insira um email válido');
            isValid = false;
        }

        // Validar estado (2 caracteres)
        const estado = document.getElementById('estado');
        if (estado.value.length !== 2) {
            alert('Por favor, insira a sigla do estado com 2 letras');
            isValid = false;
        }

        // Validar mensagem (mínimo 10 caracteres)
        const mensagem = document.getElementById('mensagem');
        if (mensagem.value.trim().length < 10) {
            alert('Por favor, insira uma mensagem com pelo menos 10 caracteres');
            isValid = false;
        }

        if (!isValid) {
            e.preventDefault();
        }
    });
});
