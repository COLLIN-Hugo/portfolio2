// Fonction pour détecter si un élément est dans la vue
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return rect.top <= window.innerHeight && rect.bottom >= 0;
}

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
