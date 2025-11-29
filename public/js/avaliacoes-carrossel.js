// avaliacoes-carrossel.js - Carrossel de avaliações com 3 cards visíveis

document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.avaliacoes-track');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const dots = document.querySelectorAll('.avaliacao-dot');
    const cards = document.querySelectorAll('.avaliacao-card');
    
    if (!track || cards.length === 0) return;
    
    const totalCards = cards.length / 2; // Dividir por 2 porque duplicamos
    let currentIndex = 0;
    let cardsPerView = 3;
    let autoplayInterval;
    
    // Detectar quantos cards mostrar baseado na largura da tela
    function updateCardsPerView() {
        const width = window.innerWidth;
        if (width <= 768) {
            cardsPerView = 1;
        } else if (width <= 1200) {
            cardsPerView = 2;
        } else {
            cardsPerView = 3;
        }
    }
    
    // Atualizar posição do carrossel
    function updateCarousel(smooth = true) {
        const cardWidth = cards[0].offsetWidth;
        const gap = 25;
        const offset = currentIndex * (cardWidth + gap);
        
        track.style.transition = smooth ? 'transform 0.6s cubic-bezier(0.4, 0, 0.2, 1)' : 'none';
        track.style.transform = `translateX(-${offset}px)`;
        
        // Atualizar indicadores
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
        
        // Loop infinito
        if (currentIndex >= totalCards) {
            setTimeout(() => {
                track.style.transition = 'none';
                currentIndex = 0;
                const resetOffset = currentIndex * (cardWidth + gap);
                track.style.transform = `translateX(-${resetOffset}px)`;
                
                setTimeout(() => {
                    track.style.transition = 'transform 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
                }, 50);
            }, 600);
        } else if (currentIndex < 0) {
            setTimeout(() => {
                track.style.transition = 'none';
                currentIndex = totalCards - 1;
                const resetOffset = currentIndex * (cardWidth + gap);
                track.style.transform = `translateX(-${resetOffset}px)`;
                
                setTimeout(() => {
                    track.style.transition = 'transform 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
                }, 50);
            }, 600);
        }
    }
    
    // Próximo card
    function nextSlide() {
        currentIndex++;
        updateCarousel();
        resetAutoplay();
    }
    
    // Card anterior
    function prevSlide() {
        currentIndex--;
        updateCarousel();
        resetAutoplay();
    }
    
    // Ir para card específico
    function goToSlide(index) {
        currentIndex = index;
        updateCarousel();
        resetAutoplay();
    }
    
    // Autoplay
    function startAutoplay() {
        autoplayInterval = setInterval(() => {
            nextSlide();
        }, 5000); // Muda a cada 5 segundos
    }
    
    function stopAutoplay() {
        clearInterval(autoplayInterval);
    }
    
    function resetAutoplay() {
        stopAutoplay();
        startAutoplay();
    }
    
    // Event listeners
    if (prevBtn) {
        prevBtn.addEventListener('click', prevSlide);
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', nextSlide);
    }
    
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => goToSlide(index));
    });
    
    // Pausar autoplay ao hover
    const container = document.querySelector('.avaliacoes-carrossel-section');
    if (container) {
        container.addEventListener('mouseenter', stopAutoplay);
        container.addEventListener('mouseleave', startAutoplay);
    }
    
    // Suporte a swipe em mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    track.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
        stopAutoplay();
    });
    
    track.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
        startAutoplay();
    });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
        }
    }
    
    // Suporte a teclado
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
        }
    });
    
    // Atualizar ao redimensionar
    window.addEventListener('resize', () => {
        updateCardsPerView();
        updateCarousel(false);
    });
    
    // Animação de entrada
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                startAutoplay(); // Iniciar autoplay quando visível
            } else {
                stopAutoplay(); // Parar quando não visível
            }
        });
    }, observerOptions);
    
    if (container) {
        observer.observe(container);
    }
    
    // Inicializar
    updateCardsPerView();
    updateCarousel(false);
});
