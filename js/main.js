//CARDS COMPETENCES
document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".card");

    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");

                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.2 }
    );

    cards.forEach((card) => observer.observe(card));
});


//GALERIE
jQuery(document).ready(function ($) {
    $(".galerie").click(function () {
        $(".galerie").removeClass("active"); 
        $(this).addClass("active");
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
        { threshold: 0.2 }
    );

    titles.forEach((title) => observer.observe(title));
});


//FILTRE PROJETS
document.addEventListener("DOMContentLoaded", () => {
    const selectButton = document.querySelector("form select");

    if (selectButton) {
        setTimeout(() => {
            selectButton.classList.add("appear");
        }, 300);
    }
});


//ARCHIVE PROJETS
document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".project-card");

    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");

                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.2 }
    );

    cards.forEach((card) => observer.observe(card));
});







