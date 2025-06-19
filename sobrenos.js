document.addEventListener('DOMContentLoaded', () => {
    // Configuração do Intersection Observer
    const observerOptions = {
        threshold: 0.3,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // Remover observação após animar
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observar todos os blocos animados
    document.querySelectorAll('.info-bloco.animado').forEach(bloco => {
        observer.observe(bloco);
    });

    // Observador para o mapa
    const observerMapa = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    });

    document.querySelectorAll('.mapa-container').forEach((el) => observerMapa.observe(el));
});
