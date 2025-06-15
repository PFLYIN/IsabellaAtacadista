document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        threshold: 0.10, // Valor mais baixo para começar a animação mais cedo
        rootMargin: '10px 0px -10px 0px' // Margem mais suave
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Pequeno delay antes de adicionar a classe
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, 100);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Seleciona todos os elementos com classe 'animado'
    const elementosAnimados = document.querySelectorAll('.animado');
    elementosAnimados.forEach(elemento => {
        observer.observe(elemento);
    });
});
