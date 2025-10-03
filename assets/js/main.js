
// Inicialización de scripts principales del sitio
// Este archivo reemplaza la configuración previa de Laravel/Vite.
document.addEventListener('DOMContentLoaded', () => {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
        });
    }
});
