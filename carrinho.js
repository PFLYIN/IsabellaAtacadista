let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".add-carrinho").forEach(btn => {
    btn.addEventListener("click", () => {
      const produto = btn.closest(".produto");
      const id = produto.dataset.id;
      const nome = produto.dataset.nome;
      const preco = parseFloat(produto.dataset.preco);
      const qtd = parseInt(produto.querySelector(".qtd").textContent);
      const imagem = produto.querySelector("img") ? produto.querySelector("img").src : ""; // pega o caminho da imagem

      const existente = carrinho.find(p => p.id === id);
      if (existente) {
        existente.qtd += qtd;
        existente.imagem = imagem; // sempre atualiza a imagem
      } else {
        carrinho.push({ id, nome, preco, qtd, imagem }); // <-- aqui estava IMAGEN, corrija para imagem
      }

      localStorage.setItem("carrinho", JSON.stringify(carrinho));
      alert("Produto adicionado!");
    });
  });

  document.querySelectorAll(".mais").forEach(btn => {
    btn.addEventListener("click", () => {
      const span = btn.parentElement.querySelector(".qtd");
      span.textContent = parseInt(span.textContent) + 1;
    });
  });

  document.querySelectorAll(".menos").forEach(btn => {
    btn.addEventListener("click", () => {
      const span = btn.parentElement.querySelector(".qtd");
      const valor = Math.max(1, parseInt(span.textContent) - 1);
      span.textContent = valor;
    });
  });

  const carrinhoContainer = document.getElementById("carrinho-itens");
  if (carrinhoContainer) {
    if (carrinho.length === 0) {
      carrinhoContainer.innerHTML = "<p>Seu carrinho está vazio.</p>";
    } else {
      let total = 0;
      carrinhoContainer.innerHTML = carrinho.map(item => {
        const subtotal = item.preco * item.qtd;
        total += subtotal;
        return `
          <div class="item">
            <img src="${item.imagem || ''}" class="carrinho-img" alt="${item.nome}" style="width:60px;height:60px;object-fit:cover;border-radius:8px;margin-bottom:8px;margin-right:8px;vertical-align:middle;">
            <strong>${item.nome}</strong><br>
            Quantidade: ${item.qtd}<br>
            Preço: R$ ${item.preco.toFixed(2)}<br>
            Subtotal: R$ ${subtotal.toFixed(2)}
          </div>
        `;
      }).join("");

      document.getElementById("valor-total").textContent = total.toFixed(2);
      const mensagem = `Essas são as peças escolhidas:%0A` +
        carrinho.map(p => 
          `• ${p.nome} (x${p.qtd}) - R$ ${p.preco.toFixed(2)}%0AImagem: ${p.imagem || ''}`
        ).join("%0A") +
        `%0ATotal: R$ ${total.toFixed(2)}`;

      const link = `https://wa.me/554499230507?text=${mensagem}`; // Substitua pelo número real
      document.getElementById("whatsapp-link").href = link;
    }
  }

  // Galeria de imagens no modal
  const modal = document.getElementById("modal");
  const modalImg = document.getElementById("imgZoom");
  const btnFechar = document.querySelector(".fechar");
  const btnProximo = document.querySelector(".proximo");
  const btnAnterior = document.querySelector(".anterior");

  let imagensGaleria = [];
  let indiceAtual = 0;

  document.querySelectorAll(".zoom-img").forEach(img => {
    img.addEventListener("click", () => {
      const produto = img.closest(".produto");
      const imagens = produto.getAttribute("data-imagens");
      imagensGaleria = imagens ? JSON.parse(imagens) : [img.src];
      indiceAtual = 0;
      modalImg.src = imagensGaleria[indiceAtual];
      modal.style.display = "block";
      atualizarBotoesGaleria();
    });
  });

  function atualizarBotoesGaleria() {
    if (btnAnterior) btnAnterior.style.display = imagensGaleria.length > 1 ? "inline-block" : "none";
    if (btnProximo) btnProximo.style.display = imagensGaleria.length > 1 ? "inline-block" : "none";
  }

  if (btnProximo) {
    btnProximo.addEventListener("click", () => {
      if (imagensGaleria.length > 0) {
        indiceAtual = (indiceAtual + 1) % imagensGaleria.length;
        modalImg.src = imagensGaleria[indiceAtual];
      }
    });
  }

  if (btnAnterior) {
    btnAnterior.addEventListener("click", () => {
      if (imagensGaleria.length > 0) {
        indiceAtual = (indiceAtual - 1 + imagensGaleria.length) % imagensGaleria.length;
        modalImg.src = imagensGaleria[indiceAtual];
      }
    });
  }

  if (btnFechar) {
    btnFechar.addEventListener("click", () => {
      modal.style.display = "none";
      imagensGaleria = [];
      indiceAtual = 0;
    });
  }
});
