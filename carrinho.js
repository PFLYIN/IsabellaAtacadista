let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".add-carrinho").forEach(btn => {
    btn.addEventListener("click", () => {
      // Sempre recarrega o carrinho atualizado do localStorage
      let carrinhoAtual = JSON.parse(localStorage.getItem("carrinho")) || [];

      const produto = btn.closest(".produto");
      const id = produto.dataset.id;
      const nome = produto.dataset.nome;
      const preco = parseFloat(produto.dataset.preco);
      const qtd = parseInt(produto.querySelector(".qtd").textContent);
      const imagem = produto.querySelector("img") ? produto.querySelector("img").src : "";

      // Adiciona preço normal (varejo)
      if (!isNaN(preco)) {
        const existente = carrinhoAtual.find(p => p.id === id && (!p.tipo || p.tipo === "normal"));
        if (existente) {
          existente.qtd += qtd;
          existente.imagem = imagem;
        } else {
          carrinhoAtual.push({ id, nome, preco, qtd, imagem, tipo: "normal" });
        }
      }

      localStorage.setItem("carrinho", JSON.stringify(carrinhoAtual));
      mostrarNotificacao(`${nome} adicionado ao carrinho!`);

      // Atualiza a quantidade exibida para 1 após adicionar ao carrinho
      produto.querySelector(".qtd").textContent = "1";
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
  // Sempre recarrega o carrinho atualizado do localStorage para exibição
  carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];
  if (carrinhoContainer) {
    if (carrinho.length === 0) {
      carrinhoContainer.innerHTML = "<p>Seu carrinho está vazio.</p>";
    } else {
      let total = 0;
      carrinhoContainer.innerHTML = carrinho.map((item, idx) => {
        // Ajusta nome para exibir corretamente no carrinho
        let nomeExibicao = item.nome;
        if (item.tipo === "atacado") {
          nomeExibicao = `${item.nome} (Atacado)`;
        }
        const subtotal = item.preco * item.qtd;
        total += subtotal;
        return `
          <div class="item" data-idx="${idx}">
            <img src="${item.imagem || ''}" class="carrinho-img" alt="${nomeExibicao}" style="width:60px;height:60px;object-fit:cover;border-radius:8px;margin-bottom:8px;margin-right:8px;vertical-align:middle;">
            <strong>${nomeExibicao}</strong><br>
            Quantidade: ${item.qtd}<br>
            Preço: R$ ${item.preco.toFixed(2)}<br>
            Subtotal: R$ ${subtotal.toFixed(2)}<br>
            <button class="remover-um-item" data-idx="${idx}">Remover 1</button>
            <button class="remover-item" data-idx="${idx}">Remover tudo</button>
          </div>
        `;
      }).join(""); // <-- aqui estava .join("")), corrija para .join("")

      document.getElementById("valor-total").textContent = total.toFixed(2);
      const mensagem = `Essas são as peças escolhidas:%0A` +
        carrinho.map(p => 
          `• ${p.nome}${p.tipo === "atacado" ? " (Atacado)" : ""} (x${p.qtd}) - R$ ${p.preco.toFixed(2)}%0AImagem: ${p.imagem || ''}%0ALink: https://isabella-atacadista.infinityfreeapp.com/produto.php?id=${p.id}`
        ).join("%0A") +
        `%0ATotal: R$ ${total.toFixed(2)}`;

      const link = `https://wa.me/554499230507?text=${mensagem}`; // Substitua pelo número real
      document.getElementById("whatsapp-link").href = link;

      // Adiciona evento para remover item
      document.querySelectorAll(".remover-item").forEach(btn => {
        btn.addEventListener("click", () => {
          const idx = parseInt(btn.getAttribute("data-idx"));
          carrinho.splice(idx, 1);
          localStorage.setItem("carrinho", JSON.stringify(carrinho));
          location.reload();
        });
      });

      // Adiciona evento para remover apenas uma unidade
      document.querySelectorAll(".remover-um-item").forEach(btn => {
        btn.addEventListener("click", () => {
          const idx = parseInt(btn.getAttribute("data-idx"));
          if (carrinho[idx].qtd > 1) {
            carrinho[idx].qtd -= 1;
          } else {
            carrinho.splice(idx, 1);
          }
          localStorage.setItem("carrinho", JSON.stringify(carrinho));
          location.reload();
        });
      });
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

function mostrarNotificacao(msg) {
  let notif = document.createElement("div");
  notif.textContent = msg;
  notif.style.position = "fixed";
  notif.style.top = "30px";
  notif.style.right = "30px";
  notif.style.background = "#a0005a"; // Roxo escuro, combina com o tema
  notif.style.color = "#fff";
  notif.style.padding = "14px 28px";
  notif.style.borderRadius = "24px";
  notif.style.fontSize = "1rem";
  notif.style.boxShadow = "0 2px 8px rgba(0,0,0,0.15)";
  notif.style.zIndex = "9999";
  notif.style.opacity = "0.95";
  notif.style.transition = "opacity 0.5s";
  document.body.appendChild(notif);
  setTimeout(() => {
    notif.style.opacity = "0";
    setTimeout(() => notif.remove(), 500);
  }, 1800);
}
