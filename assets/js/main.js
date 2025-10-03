(() => {
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 900,
                once: true,
            });
        }

        const header = document.querySelector('.site-header');
        const toggleHeader = () => {
            if (!header) {
                return;
            }

            if (window.scrollY > 40) {
                header.classList.add('site-header--compact');
            } else {
                header.classList.remove('site-header--compact');
            }
        };

        toggleHeader();
        window.addEventListener('scroll', toggleHeader, { passive: true });
    });
})();
