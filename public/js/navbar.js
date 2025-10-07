document.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.menu-overlay');
    const menuBtn = document.querySelector('.menu-btn');
    const closeBtn = document.querySelector('.close-btn');
    const body = document.body;

    function toggleMenu(show) {
        menu.setAttribute('data-visible', show);
        body.style.overflow = show ? 'hidden' : 'auto';
        
        // Adiciona delay para cada item do menu
        if (show) {
            document.querySelectorAll('.menu-overlay li').forEach((li, i) => {
                li.style.setProperty('--i', i + 1);
            });
        }
    }

    menuBtn.addEventListener('click', () => toggleMenu(true));
    closeBtn.addEventListener('click', () => toggleMenu(false));
});