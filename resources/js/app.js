import Alpine from 'alpinejs';

document.addEventListener('alpine:init', () => {
    Alpine.data('cookieBanner', () => ({
        mostrarBanner: false,

        init() {
            // Se ejecuta al cargar el DOM. Si no existe la decisión en localStorage, abre el banner.
            if (!localStorage.getItem('cookies_decision')) {
                this.mostrarBanner = true;
            }
        },

        acceptCookies() {
            localStorage.setItem('cookies_decision', 'accepted');
            this.mostrarBanner = false;
        },

        rejectCookies() {
            localStorage.setItem('cookies_decision', 'rejected');
            this.mostrarBanner = false;
        }
    }));
});

window.Alpine = Alpine;
Alpine.start();