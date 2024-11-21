
//CARDS COMPETENCES
document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".card");

    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");

                    // Arrête d'observer après animation pour améliorer les performances
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.2 } // 20% visible avant déclenchement
    );

    cards.forEach((card) => observer.observe(card));
});


//GALERIE
jQuery(document).ready(function ($) {
    $(".galerie").click(function () {
        $(".galerie").removeClass("active"); // Retirer la classe active de toutes les options
        $(this).addClass("active"); // Ajouter la classe active à l'option cliquée
    });
});



//TITRE
document.addEventListener("DOMContentLoaded", function () {
    const titles = document.querySelectorAll(".styled-title-container");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        },
        { threshold: 0.1 } // Active l'animation lorsque 10% du titre est visible
    );

    titles.forEach((title) => observer.observe(title));
});








