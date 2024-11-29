// Fonction pour détecter si un élément est dans la vue
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return rect.top <= window.innerHeight && rect.bottom >= 0;
}

// Animation au chargement de la page
document.addEventListener('DOMContentLoaded', () => {
    const fadeInElements = document.querySelectorAll('.fade-in');
    fadeInElements.forEach((el, index) => {
        setTimeout(() => {
            el.style.opacity = '1';
            el.style.transform = 'translateY(0)';
        }, index * 200); // Décale l'animation des éléments
    });
});

// Animation au scroll
window.addEventListener('scroll', () => {
    const scrollElements = document.querySelectorAll('.scroll-in');
    scrollElements.forEach(el => {
        if (isInViewport(el)) {
            el.style.opacity = '1';
            el.style.transform = 'translateY(0)';
        }
    });
});
