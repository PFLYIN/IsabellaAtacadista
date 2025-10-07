document.addEventListener('DOMContentLoaded', () => {
    // Função para observar elementos e adicionar a classe 'visible'
    const setupIntersectionObserver = () => {
        const animatedElements = document.querySelectorAll('.animado'); // Seleciona todos os elementos com a classe 'animado'

        const observerOptions = {
            root: null, // O viewport é o root
            rootMargin: '0px',
            threshold: 0.1 // Quando 10% do elemento estiver visível
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible'); // Adiciona a classe 'visible' para iniciar a animação
                    observer.unobserve(entry.target); // Opcional: Para animar apenas uma vez
                }
            });
        }, observerOptions);

        animatedElements.forEach(el => {
            observer.observe(el); // Começa a observar cada elemento animado
        });
    };

    // Chamada da função de observação
    setupIntersectionObserver();

    // Lógica para o carrossel de depoimentos (se for customizado)
    const carouselTrack = document.getElementById('carousel-track');
    const testimonials = document.querySelectorAll('.testimonial');
    const dots = document.querySelectorAll('.dot');
    let currentIndex = 0;
    const itemsPerView = window.innerWidth <= 991 ? 1 : 3; // 1 item no mobile, 3 no desktop

    const updateCarousel = () => {
        const itemWidth = testimonials[0].offsetWidth;
        const offset = -currentIndex * itemWidth;
        carouselTrack.style.transform = `translateX(${offset}px)`;

        testimonials.forEach((testimonial, index) => {
            if (index === currentIndex) {
                testimonial.classList.add('active');
            } else {
                testimonial.classList.remove('active');
            }
        });

        dots.forEach((dot, index) => {
            if (index === currentIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    };

    const nextSlide = () => {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateCarousel();
    };

    // Inicializa o carrossel e configura o autoplay
    if (carouselTrack && testimonials.length > 0) {
        updateCarousel();
        setInterval(nextSlide, 3000); // Muda de slide a cada 3 segundos
    }

    // Atualiza o carrossel ao redimensionar a janela (para mudar de 1 para 3 itens)
    window.addEventListener('resize', () => {
        const newItemsPerView = window.innerWidth <= 991 ? 1 : 3;
        if (newItemsPerView !== itemsPerView) {
            itemsPerView = newItemsPerView;
            updateCarousel();
        }
    });

    // Lógica do Bootstrap Carousel (já é gerenciado pelo Bootstrap, mas bom mencionar)
    // O Bootstrap já gerencia o #carouselExampleAutoplaying automaticamente.
    // Certifique-se de que o script do Bootstrap esteja carregado ANTES deste script.
    // <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    // <script src="carrcomentario.js"></script> (Se tiver lógica adicional para o carrossel de depoimentos)
    // <script src="js/home-animations.js"></script>

});