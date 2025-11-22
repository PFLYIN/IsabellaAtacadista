// Alternância de abas
const tabButtons = document.querySelectorAll('.tab-btn');
const tabPanels = document.querySelectorAll('.tab-panel');

tabButtons.forEach(button => {
  button.addEventListener('click', () => {
    const targetTab = button.dataset.tab;
    
    // Remove active de todos os botões
    tabButtons.forEach(btn => btn.classList.remove('is-active'));
    
    // Adiciona active no botão clicado
    button.classList.add('is-active');
    
    // Esconde todos os painéis
    tabPanels.forEach(panel => panel.classList.add('is-hidden'));
    
    // Mostra o painel correspondente
    document.getElementById(`tab-${targetTab}`).classList.remove('is-hidden');
  });
});

// Validação básica dos formulários
const loginForm = document.getElementById('loginForm');
const registerForm = document.getElementById('registerForm');

if (loginForm) {
  loginForm.addEventListener('submit', (e) => {
    const email = loginForm.querySelector('input[name="email"]').value;
    const senha = loginForm.querySelector('input[name="senha"]').value;
    
    if (!email || !senha) {
      e.preventDefault();
      alert('Por favor, preencha todos os campos.');
    }
  });
}

if (registerForm) {
  registerForm.addEventListener('submit', (e) => {
    const senha = registerForm.querySelector('input[name="senha"]').value;
    const confirmarSenha = registerForm.querySelector('input[name="confirmar_senha"]').value;
    
    if (senha !== confirmarSenha) {
      e.preventDefault();
      alert('As senhas não coincidem.');
    }
  });
}
