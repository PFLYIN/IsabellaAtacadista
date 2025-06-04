// Carrossel de comentários: exibe três depoimentos por vez, animação suave trocando <p> e imagem

const testimonials = document.querySelectorAll('.carousel .testimonial');
const testimonialsPerPage = 3;
let current = 0;

// Adiciona estrelas em cada depoimento
testimonials.forEach(testimonial => {
  if (!testimonial.querySelector('.stars')) {
    const stars = document.createElement('div');
    stars.className = 'stars';
    stars.innerHTML = '★'.repeat(5);
    testimonial.insertBefore(stars, testimonial.querySelector('img').nextSibling);
  }
});

// Inicializa exibindo os três primeiros
function showTestimonials(startIdx) {
  testimonials.forEach((el, i) => {
    el.style.display = (i >= startIdx && i < startIdx + testimonialsPerPage) ? 'flex' : 'none';
    el.classList.remove('active');
  });
  for (let i = startIdx; i < startIdx + testimonialsPerPage && i < testimonials.length; i++) {
    testimonials[i].classList.add('active');
  }
}

// Animação suave apenas no <p> e na imagem
function animateTestimonials(nextIdx) {
  for (let i = 0; i < testimonialsPerPage; i++) {
    const idx = (current + i) % testimonials.length;
    const next = (nextIdx + i) % testimonials.length;
    const currTestimonial = testimonials[idx];
    const nextTestimonial = testimonials[next];

    // Elementos a animar
    const currText = currTestimonial.querySelector('.text');
    const currImg = currTestimonial.querySelector('img');
    const nextText = nextTestimonial.querySelector('.text');
    const nextImg = nextTestimonial.querySelector('img');

    // Anima saída
    if (currTestimonial !== nextTestimonial) {
      currText.classList.remove('fade-in');
      currText.classList.add('fade-out');
      currImg.classList.remove('fade-in');
      currImg.classList.add('fade-out');
    }
  }

  setTimeout(() => {
    showTestimonials(nextIdx);
    for (let i = 0; i < testimonialsPerPage; i++) {
      const next = (nextIdx + i) % testimonials.length;
      const nextTestimonial = testimonials[next];
      const nextText = nextTestimonial.querySelector('.text');
      const nextImg = nextTestimonial.querySelector('img');
      nextText.classList.remove('fade-out');
      nextText.classList.add('fade-in');
      nextImg.classList.remove('fade-out');
      nextImg.classList.add('fade-in');
    }
    current = nextIdx;
  }, 700); // tempo igual ao transition do CSS
}

// Inicializa
if (testimonials.length > 0) {
  testimonials.forEach((el, i) => {
    const text = el.querySelector('.text');
    const img = el.querySelector('img');
    text.classList.remove('fade-in', 'fade-out');
    img.classList.remove('fade-in', 'fade-out');
    if (i < testimonialsPerPage) {
      text.classList.add('fade-in');
      img.classList.add('fade-in');
      el.style.display = 'flex';
      el.classList.add('active');
    } else {
      text.classList.add('fade-out');
      img.classList.add('fade-out');
      el.style.display = 'none';
      el.classList.remove('active');
    }
  });

  setInterval(() => {
    let next = current + testimonialsPerPage;
    if (next >= testimonials.length) next = 0;
    animateTestimonials(next);
  }, 3000);
}
