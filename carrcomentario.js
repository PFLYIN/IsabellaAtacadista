const carousel = document.querySelector(".carousel");
const testimonials = document.querySelectorAll(".testimonial");
let currentIndex = 0;

function moveToNextTestimonial() {
    currentIndex++;
    if (currentIndex >= testimonials.length) {
        currentIndex = 0;
        carousel.scrollTo({
            left: 0,
            behavior: 'instant'
        });
    } else {
        carousel.scrollTo({
            left: testimonials[currentIndex].offsetLeft,
            behavior: 'smooth'
        });
    }
}

// Move a cada 3 segundos
setInterval(moveToNextTestimonial, 3000);

// Pausa quando o mouse está sobre o carrossel
carousel.addEventListener('mouseenter', () => clearInterval(autoScrollInterval));
carousel.addEventListener('mouseleave', () => autoScrollInterval = setInterval(moveToNextTestimonial, 3000));
