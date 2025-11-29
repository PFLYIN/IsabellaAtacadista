// banner-carrossel.js - Carrossel de banners fullscreen

document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.banner-slide');
    const dots = document.querySelectorAll('.banner-dot');
    const btnPrev = document.querySelector('.banner-prev');
    const btnNext = document.querySelector('.banner-next');
    
    let currentSlide = 0;
    let autoplayInterval = null;
    let isTransitioning = false;
    
    // Navegar para slide específico
    function goToSlide(index) {
        if (isTransitioning) return;
        
        isTransitioning = true;
        
        // Remover active do slide atual
        slides[currentSlide].classList.remove('active');
        dots[currentSlide].classList.remove('active');
        
        // Adicionar active no novo slide
        currentSlide = index;
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
        
        setTimeout(() => {
            isTransitioning = false;
        }, 1000); // Duração da transição
    }
    
    // Próximo slide
    function nextSlide() {
        const next = (currentSlide + 1) % slides.length;
        goToSlide(next);
    }
    
    // Slide anterior
    function prevSlide() {
        const prev = (currentSlide - 1 + slides.length) % slides.length;
        goToSlide(prev);
    }
    
    // Autoplay
    function startAutoplay() {
        autoplayInterval = setInterval(nextSlide, 5000); // 5 segundos
    }
    
    function stopAutoplay() {
        if (autoplayInterval) {
            clearInterval(autoplayInterval);
            autoplayInterval = null;
        }
    }
    
    function restartAutoplay() {
        stopAutoplay();
        startAutoplay();
    }
    
    // Event listeners para botões
    if (btnPrev) {
        btnPrev.addEventListener('click', () => {
            prevSlide();
            restartAutoplay();
        });
    }
    
    if (btnNext) {
        btnNext.addEventListener('click', () => {
            nextSlide();
            restartAutoplay();
        });
    }
    
    // Event listeners para dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
            restartAutoplay();
        });
    });
    
    // Pausar no hover
    const wrapper = document.querySelector('.banner-carrossel-wrapper');
    if (wrapper) {
        wrapper.addEventListener('mouseenter', stopAutoplay);
        wrapper.addEventListener('mouseleave', startAutoplay);
    }
    
    // Suporte a swipe no mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    if (wrapper) {
        wrapper.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });
        
        wrapper.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });
    }
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
            restartAutoplay();
        }
    }
    
    // Navegação por teclado
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
            restartAutoplay();
        }
        if (e.key === 'ArrowRight') {
            nextSlide();
            restartAutoplay();
        }
    });
    
    // Iniciar autoplay
    startAutoplay();
});
