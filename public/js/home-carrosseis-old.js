// home-carrosseis.js - Carrosseis infinitos de produtos

document.addEventListener('DOMContentLoaded', function() {
    const carrosseis = document.querySelectorAll('.produtos-carrossel');
    
    carrosseis.forEach(carrossel => {
        // Duplicar os cards para criar o efeito infinito
        const cards = Array.from(carrossel.children);
        const totalCards = cards.length;
        
        // Duplicar os cards 2 vezes para garantir loop suave
        cards.forEach(card => {
            const clone1 = card.cloneNode(true);
            const clone2 = card.cloneNode(true);
            carrossel.appendChild(clone1);
            carrossel.appendChild(clone2);
        });
        
        // Calcular largura total para a animação
        const cardWidth = 300; // largura do card + gap
        const gapWidth = 20;
        const totalWidth = (cardWidth + gapWidth) * totalCards;
        
        // Ajustar a animação dinamicamente
        const animationDuration = totalCards * 5; // 5 segundos por card
        carrossel.style.animation = `scroll-infinite ${animationDuration}s linear infinite`;
        
        // Criar nova keyframe dinamicamente
        const styleSheet = document.styleSheets[0];
        const keyframes = `
            @keyframes scroll-infinite-${carrossel.dataset.categoria} {
                0% {
                    transform: translateX(0);
                }
                100% {
                    transform: translateX(-${totalWidth}px);
                }
            }
        `;
        
        try {
            styleSheet.insertRule(keyframes, styleSheet.cssRules.length);
            carrossel.style.animation = `scroll-infinite-${carrossel.dataset.categoria} ${animationDuration}s linear infinite`;
        } catch(e) {
            console.log('Usando animação padrão');
        }
        
        // Pausar ao hover
        carrossel.addEventListener('mouseenter', () => {
            carrossel.style.animationPlayState = 'paused';
        });
        
        carrossel.addEventListener('mouseleave', () => {
            carrossel.style.animationPlayState = 'running';
        });
    });
    
    // Animação de entrada das seções
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('.produtos-carrossel-section').forEach(section => {
        observer.observe(section);
    });
});
