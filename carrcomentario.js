const track = document.getElementById("carousel-track");
const testimonials = document.querySelectorAll(".testimonial");
const dots = document.querySelectorAll(".dot");
let currentIndex = 0;

function updateCarousel() {
  // Remove classes ativas de todos os elementos
  testimonials.forEach((el, i) => {
    el.classList.remove("active");
    dots[i].classList.remove("active");
  });

  const offset = testimonials[0].offsetWidth;
  track.style.transform = `translateX(-${offset * currentIndex}px)`;

  // Atualiza o slide atual
  testimonials[currentIndex].classList.add("active");
  dots[currentIndex].classList.add("active");
}

function nextSlide() {
  currentIndex = (currentIndex + 1) % testimonials.length;
  updateCarousel();
}

// Inicializa o carrossel
updateCarousel();
setInterval(nextSlide, 4000);
