// script.js - VERSÃO FINAL COM sessionStorage

// ======================================================
// FUNÇÕES DE COMUNICAÇÃO COM A API (A LÓGICA "PESADA")
// ======================================================

/**
 * Envia os dados de um novo usuário para a API de cadastro.
 */
async function cadastrarPessoa(nome, email, senha) {
    const dadosParaEnviar = {
        nome: nome,
        loginPessoa: { email: email, senha: senha }
    };

    try {
        const resposta = await fetch('http://localhost:8080/api/pessoas/cadastro', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(dadosParaEnviar),
        });

        if (resposta.ok) {
            alert('Cadastro realizado com sucesso! Agora você pode fazer o login.');
            window.location.href = 'login.php'; // Redireciona para o login
        } else {
            const erro = await resposta.text();
            console.error('Erro no cadastro:', erro);
            alert(`Erro ao cadastrar: ${erro || 'Verifique os dados e tente novamente'}`);
        }
    } catch (erro) {
        console.error('Falha na comunicação com o servidor:', erro);
        alert('Não foi possível conectar ao servidor. Verifique se o servidor Java está rodando.');
    }
}

/**
 * Envia os dados de login de um usuário normal para a API.
 */
async function fazerLogin(email, senha) {
    const dadosLogin = { email, senha };

    try {
        const resposta = await fetch('http://localhost:8080/api/pessoas/login', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(dadosLogin)
        });

        if (resposta.ok) {
            const usuarioLogado = await resposta.json();
            
            // Lógica de limpeza para evitar conflito de logins
            sessionStorage.removeItem('adminLogado');
            sessionStorage.setItem('usuarioLogado', JSON.stringify(usuarioLogado));

            alert(`Bem-vindo(a) de volta, ${usuarioLogado.nome}!`);
            window.location.href = 'perfil.php'; // Redireciona para o perfil
        } else {
            const erro = await resposta.text();
            alert('Falha no login: ' + erro);
        }
    } catch (error) {
        alert('Não foi possível conectar ao servidor.');
    }
}

/**
 * Envia os dados de login de um admin para a API.
 */
async function fazerLoginAdmin(email, senha) {
    const dadosLogin = { email, senha };

    try {
        const resposta = await fetch('http://localhost:8080/api/admins/login', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(dadosLogin)
        });

        if (resposta.ok) {
            const adminLogado = await resposta.json();
            
            // Lógica de limpeza para evitar conflito de logins
            sessionStorage.removeItem('usuarioLogado');
            sessionStorage.setItem('adminLogado', JSON.stringify(adminLogado));
            
            alert(`Bem-vindo(a), Admin ${adminLogado.nome}!`);
            window.location.href = 'perfil.php';
        } else {
            alert('Email ou senha de admin inválidos.');
        }
    } catch (error) {
        alert('Não foi possível conectar ao servidor.');
    }
}


// ======================================================
// "ESCUTADORES" DE EVENTOS DOS FORMULÁRIOS (A "COLA")
// ======================================================

// Este evento espera a página HTML carregar completamente antes de rodar o código.
document.addEventListener('DOMContentLoaded', function() {
    
    // Procura pelo formulário de CADASTRO na página
    const formCadastro = document.getElementById('form-cadastro');
    if (formCadastro) {
        formCadastro.addEventListener('submit', (event) => {
            event.preventDefault();
            const nome = document.getElementById('nome').value;
            const email = document.getElementById('email').value;
            const senha = document.getElementById('senha').value;
            cadastrarPessoa(nome, email, senha);
        });
    }

    // Procura pelo formulário de LOGIN DE USUÁRIO na página
    const formLogin = document.getElementById('form-login');
    if (formLogin) {
        formLogin.addEventListener('submit', (event) => {
            event.preventDefault();
            const email = document.getElementById('email').value;
            const senha = document.getElementById('senha').value;
            fazerLogin(email, senha);
        });
    }

    // Procura pelo formulário de LOGIN DE ADMIN na página
    const formAdminLogin = document.getElementById('form-admin-login');
    if (formAdminLogin) {
        formAdminLogin.addEventListener('submit', (event) => {
            event.preventDefault();
            const email = document.getElementById('email').value;
            const senha = document.getElementById('senha').value;
            fazerLoginAdmin(email, senha);
        });
    }
});