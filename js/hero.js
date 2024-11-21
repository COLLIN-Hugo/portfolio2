document.addEventListener("DOMContentLoaded", function () {
    // Cible les éléments
    const title = document.querySelector(".hero-title");
    const subtitle = document.querySelector(".hero-subtitle");
    const scrollingText = document.querySelector(".scrolling-text");
  
    // Ajoute les classes d'animation après un léger délai
    setTimeout(() => {
      title.classList.add("fade-in");
    }, 200); // Début après 200ms
  
    setTimeout(() => {
      subtitle.classList.add("fade-in");
    }, 400); // Début après 400ms
  
    setTimeout(() => {
      scrollingText.classList.add("fade-in");
    }, 600); // Début après 600ms
  });
  

  document.addEventListener("DOMContentLoaded", function () {
    const scrollLinks = document.querySelectorAll('.type a'); // Sélectionne tous les liens avec la classe "type"

    scrollLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Empêche le comportement par défaut du lien
            const targetId = this.getAttribute('href').substring(1); // Récupère l'ID cible
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                // Scroll doux vers l'élément cible
                targetElement.scrollIntoView({
                    behavior: 'smooth', // Défilement fluide
                    block: 'start' // Aligne le haut de l'élément avec le haut de la fenêtre
                });
            }
        });
    });
});
