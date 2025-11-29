// home-carrosseis.js - Carrosseis com navegação e autoplay infinito

document.addEventListener('DOMContentLoaded', function() {
    const carrosseis = document.querySelectorAll('.produtos-carrossel');
    
    carrosseis.forEach(carrossel => {
        const categoria = carrossel.dataset.categoria;
        const wrapper = carrossel.closest('.produtos-carrossel-wrapper');
        const btnPrev = wrapper.querySelector(`.carrossel-prev[data-target="${categoria}"]`);
        const btnNext = wrapper.querySelector(`.carrossel-next[data-target="${categoria}"]`);
        const originalCards = Array.from(carrossel.children);
        
        // Duplicar cards 3x para loop infinito
        const clones1 = originalCards.map(card => card.cloneNode(true));
        const clones2 = originalCards.map(card => card.cloneNode(true));
        
        clones1.forEach(clone => carrossel.appendChild(clone));
        clones2.forEach(clone => carrossel.appendChild(clone));
        
        const allCards = Array.from(carrossel.children);
        const totalOriginalCards = originalCards.length;
        
        let currentIndex = 0;
        let autoplayInterval = null;
        let isTransitioning = false;
        
        // Configuração responsiva
        function getCardsPerView() {
            if (window.innerWidth <= 480) return 1;
            if (window.innerWidth <= 768) return 2;
            if (window.innerWidth <= 1024) return 3;
            return 4;
        }
        
        // Navegar
        function navigate(direction) {
            if (isTransitioning) return;
            
            isTransitioning = true;
            const cardsPerView = getCardsPerView();
            
            if (direction === 'next') {
                currentIndex++;
            } else {
                currentIndex--;
            }
            
            updateCarousel(true);
            
            setTimeout(() => {
                checkLoop();
                isTransitioning = false;
            }, 500);
        }
        
        // Atualizar posição
        function updateCarousel(animate = true) {
            const cardWidth = 300;
            const gap = 20;
            const offset = currentIndex * (cardWidth + gap);
            
            if (animate) {
                carrossel.style.transition = 'transform 0.5s cubic-bezier(0.4, 0, 0.2, 1)';
            } else {
                carrossel.style.transition = 'none';
            }
            
            carrossel.style.transform = `translateX(-${offset}px)`;
        }
        
        // Verificar e resetar loop infinito
        function checkLoop() {
            // Se passou do final, volta para o início
            if (currentIndex >= totalOriginalCards * 2) {
                currentIndex = totalOriginalCards;
                updateCarousel(false);
            }
            
            // Se voltou muito, pula para o final duplicado
            if (currentIndex < totalOriginalCards) {
                currentIndex = totalOriginalCards * 2 - 1;
                updateCarousel(false);
            }
        }
        
        // Autoplay (desktop apenas)
        function startAutoplay() {
            if (window.innerWidth > 768) {
                autoplayInterval = setInterval(() => {
                    navigate('next');
                }, 7000); // 7 segundos
            }
        }
        
        function stopAutoplay() {
            if (autoplayInterval) {
                clearInterval(autoplayInterval);
                autoplayInterval = null;
            }
        }
        
        // Event listeners para botões
        if (btnPrev) {
            btnPrev.addEventListener('click', () => {
                navigate('prev');
                stopAutoplay();
                startAutoplay();
            });
        }
        
        if (btnNext) {
            btnNext.addEventListener('click', () => {
                navigate('next');
                stopAutoplay();
                startAutoplay();
            });
        }
        
        // Pausar autoplay no hover
        wrapper.addEventListener('mouseenter', stopAutoplay);
        wrapper.addEventListener('mouseleave', startAutoplay);
        
        // Suporte a swipe no mobile
        let touchStartX = 0;
        let touchEndX = 0;
        
        carrossel.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });
        
        carrossel.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    navigate('next');
                } else {
                    navigate('prev');
                }
            }
        }
        
        // Navegação por teclado
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') navigate('prev');
            if (e.key === 'ArrowRight') navigate('next');
        });
        
        // Atualizar ao redimensionar
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                updateCarousel(false);
                stopAutoplay();
                startAutoplay();
            }, 250);
        });
        
        // Posição inicial (no meio dos clones)
        currentIndex = totalOriginalCards;
        updateCarousel(false);
        
        // Iniciar autoplay
        startAutoplay();
    });
    
    // Animação de entrada (Intersection Observer)
    const sections = document.querySelectorAll('.produtos-carrossel-section.animado');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1
    });
    
    sections.forEach(section => observer.observe(section));
});
