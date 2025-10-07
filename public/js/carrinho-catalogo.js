document.addEventListener('DOMContentLoaded', function() {
  // Botões de quantidade
  document.querySelectorAll('.mais').forEach(btn => {
    btn.addEventListener('click', function() {
      const span = this.parentElement.querySelector('.qtd');
      span.textContent = parseInt(span.textContent) + 1;
    });
  });
  document.querySelectorAll('.menos').forEach(btn => {
    btn.addEventListener('click', function() {
      const span = this.parentElement.querySelector('.qtd');
      if (parseInt(span.textContent) > 1) {
        span.textContent = parseInt(span.textContent) - 1;
      }
    });
  });

  // Botão adicionar ao carrinho
  document.querySelectorAll('.add-carrinho').forEach(btn => {
    btn.addEventListener('click', function() {
      const produto = this.closest('.produto');
      const nome = produto.dataset.nome;
      const preco = produto.dataset.preco;
      const precoAtacado = produto.dataset.precoAtacado;
      const quantidade = parseInt(produto.querySelector('.qtd').textContent);
      const imagem = produto.querySelector('img').src;

      // Exemplo: salvar no localStorage (ajuste conforme seu sistema)
      let carrinho = JSON.parse(localStorage.getItem('carrinho') || '[]');
      let prod = { nome, preco, precoAtacado, imagem, quantidade };
      let existe = carrinho.find(p => p.nome === nome);
      if (existe) existe.quantidade += quantidade;
      else carrinho.push(prod);
      localStorage.setItem('carrinho', JSON.stringify(carrinho));

      produto.querySelector('.qtd').textContent = '1';

      // Notificação no topo direito, degradê rosa/vermelho
      let msg = 'Produto adicionado ao carrinho!';
      let notif = document.createElement("div");
      notif.className = "notificacao-carrinho";
      notif.textContent = msg;
      notif.style.cssText = `
        position: fixed;
        top: 30px;
        right: 30px;
        background: linear-gradient(90deg, #a0005a 0%, #ff00bf 100%);
        color: #fff;
        padding: 15px 25px;
        border-radius: 25px;
        font-size: 0.1em;
        font-weight: 500;
        font-family: 'Oswald', sans-serif;
        box-shadow: 0 8px 25px rgba(160, 0, 90, 0.3);
        z-index: 9999;
        opacity: 1;
        transform: none;
        transition: opacity 0.5s;
        letter-spacing: 1px;
      `;
      document.body.appendChild(notif);
      setTimeout(() => {
        notif.style.opacity = '0';
        setTimeout(() => notif.remove(), 500);
      }, 1400);
    });
  });
});
