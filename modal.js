document.addEventListener('DOMContentLoaded', function() {
  var modal = document.getElementById('modal');
  var imgZoom = document.getElementById('imgZoom');
  var btnCompleta = document.getElementById('btnCompleta');
  var btnVoltar = document.getElementById('btnVoltar');
  var anterior = modal.querySelector('.anterior');
  var proximo = modal.querySelector('.proximo');
  var fechar = modal.querySelector('.fechar');
  var indicadores = modal.querySelector('.modal-indicadores');
  if (!indicadores) {
    indicadores = document.createElement('div');
    indicadores.className = 'modal-indicadores';
    modal.appendChild(indicadores);
  }

  // Variáveis para imagens do modal
  var imagens = [];
  var indiceAtual = 0;

  function atualizarImagem(index) {
    if (imagens.length === 0) return;
    indiceAtual = (index + imagens.length) % imagens.length;
    imgZoom.src = imagens[indiceAtual];
    atualizarIndicadores();
  }

  function atualizarIndicadores() {
    if (!indicadores) return;
    indicadores.innerHTML = '';
    imagens.forEach(function(_, i) {
      var bolinha = document.createElement('span');
      bolinha.className = 'modal-indicador' + (i === indiceAtual ? ' ativo' : '');
      bolinha.onclick = function(e) {
        e.stopPropagation();
        atualizarImagem(i);
      };
      indicadores.appendChild(bolinha);
    });
  }

  // Swipe/touch para mobile
  var startX = 0, endX = 0, isTouching = false;
  imgZoom.addEventListener('touchstart', function(e) {
    if (e.touches.length === 1) {
      startX = e.touches[0].clientX;
      isTouching = true;
    }
  });
  imgZoom.addEventListener('touchmove', function(e) {
    if (isTouching) {
      endX = e.touches[0].clientX;
      e.preventDefault(); // Impede o scroll da página
    }
  }, { passive: false });
  imgZoom.addEventListener('touchend', function(e) {
    if (!isTouching) return;
    var diff = endX - startX;
    if (Math.abs(diff) > 40) {
      if (diff < 0) {
        atualizarImagem(indiceAtual + 1); // Próxima
      } else {
        atualizarImagem(indiceAtual - 1); // Anterior
      }
    }
    startX = endX = 0;
    isTouching = false;
  });

  // Abrir modal ao clicar na imagem do produto
  document.querySelectorAll('.zoom-img').forEach(function(img) {
    img.addEventListener('click', function(e) {
      var produto = img.closest('.produto');
      if (!produto) return;
      try {
        imagens = JSON.parse(produto.getAttribute('data-imagens'));
      } catch {
        imagens = [img.src];
      }
      indiceAtual = 0;
      atualizarImagem(indiceAtual);
      modal.style.display = 'block';
      document.body.style.overflow = 'hidden'; // Impede scroll do fundo
      // Ajusta botões para mobile/desktop
      if (window.innerWidth <= 700) {
        btnCompleta.style.display = 'none';
        btnVoltar.style.display = 'none';
        anterior.style.display = 'none';
        proximo.style.display = 'none';
      } else {
        btnCompleta.style.display = 'flex';
        btnVoltar.style.display = 'none';
        anterior.style.display = 'flex';
        proximo.style.display = 'flex';
      }
      fechar.style.display = 'flex';
      modal.style.backgroundColor = 'rgba(0,0,0,0.7)';
    });
  });

  // Fechar modal
  fechar.onclick = function() {
    modal.style.display = 'none';
    document.body.style.overflow = '';
  };
  modal.onclick = function(e) {
    if (e.target === modal) {
      modal.style.display = 'none';
      document.body.style.overflow = '';
    }
  };

  // Navegação por teclado (desktop)
  document.addEventListener('keydown', function(e) {
    if (modal.style.display === 'block') {
      if (e.key === 'ArrowLeft') atualizarImagem(indiceAtual - 1);
      if (e.key === 'ArrowRight') atualizarImagem(indiceAtual + 1);
      if (e.key === 'Escape') {
        modal.style.display = 'none';
        document.body.style.overflow = '';
      }
    }
  });

  // Botões anterior/próximo (desktop)
  anterior.onclick = function(e) {
    e.stopPropagation();
    atualizarImagem(indiceAtual - 1);
  };
  proximo.onclick = function(e) {
    e.stopPropagation();
    atualizarImagem(indiceAtual + 1);
  };

  // Efeito hover para botões discretos
  [btnCompleta, btnVoltar, anterior, proximo, fechar].forEach(function(btn) {
    if (btn) {
      btn.onmouseenter = function() { btn.style.opacity = '1'; };
      btn.onmouseleave = function() { btn.style.opacity = '0.7'; };
    }
  });

  // Botão de zoom (desktop)
  btnCompleta.onclick = function(e) {
    e.stopPropagation();
    imgZoom.style.position = 'fixed';
    imgZoom.style.top = '50%';
    imgZoom.style.left = '50%';
    imgZoom.style.transform = 'translate(-50%, -50%)';
    imgZoom.style.width = '';
    imgZoom.style.height = '';
    imgZoom.style.maxWidth = '98vw';
    imgZoom.style.maxHeight = '98vh';
    imgZoom.style.objectFit = 'contain';
    anterior.style.display = 'none';
    proximo.style.display = 'none';
    fechar.style.display = 'none';
    btnCompleta.style.display = 'none';
    btnVoltar.style.display = 'flex';
    modal.style.backgroundColor = '#000';
  };

  btnVoltar.onclick = function(e) {
    e.stopPropagation();
    imgZoom.style.position = '';
    imgZoom.style.top = '';
    imgZoom.style.left = '';
    imgZoom.style.transform = '';
    imgZoom.style.width = '';
    imgZoom.style.height = '';
    imgZoom.style.maxWidth = '';
    imgZoom.style.maxHeight = '';
    imgZoom.style.objectFit = '';
    anterior.style.display = 'flex';
    proximo.style.display = 'flex';
    fechar.style.display = 'flex';
    btnCompleta.style.display = 'flex';
    btnVoltar.style.display = 'none';
    modal.style.backgroundColor = 'rgba(0,0,0,0.7)';
  };
});

