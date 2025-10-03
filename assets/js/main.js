
// Inicialización de scripts principales del sitio
// Este archivo reemplaza la configuración previa de Laravel/Vite.
document.addEventListener('DOMContentLoaded', () => {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
        });
    }

    const header = document.querySelector('.site-header');
    const toggleHeaderElevation = () => {
        if (!header) {
            return;
        }

        if (window.scrollY > 40) {
            header.classList.add('is-scrolled');
        } else {
            header.classList.remove('is-scrolled');
        }
    };

    toggleHeaderElevation();
    window.addEventListener('scroll', toggleHeaderElevation, { passive: true });
});
