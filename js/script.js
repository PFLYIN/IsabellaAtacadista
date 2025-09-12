async function cadastrarPessoa(nome, email, senha) {
}

async function fazerLogin(email, senha) {
    const dadosLogin = { email, senha };
    try {
        const resposta = await fetch('http://localhost:8080/api/pessoas/login', { /* ... */ });
        if (resposta.ok) {
            const usuarioLogado = await resposta.json();
            sessionStorage.removeItem('adminLogado'); // Limpa a sessão da aba
            sessionStorage.setItem('usuarioLogado', JSON.stringify(usuarioLogado)); // Salva na sessão da aba
            window.location.href = 'perfil.php';
        } else {
        }
    } catch (error) { /* ... */ }
}

async function fazerLoginAdmin(email, senha) {
    const dadosLogin = { email, senha };
    try {
        const resposta = await fetch('http://localhost:8080/api/admins/login', { /* ... */ });
        if (resposta.ok) {
            const adminLogado = await resposta.json();
            // ATUALIZAÇÃO AQUI:
            sessionStorage.removeItem('usuarioLogado'); // Limpa a sessão da aba
            sessionStorage.setItem('adminLogado', JSON.stringify(adminLogado)); // Salva na sessão da aba
            window.location.href = 'perfil.php';
        } else {
            // ... (código de erro)
        }
    } catch (error) { /* ... */ }
}

// O event listener do DOMContentLoaded continua o mesmo
document.addEventListener('DOMContentLoaded', function() {
});