document.addEventListener("DOMContentLoaded", function () {
    const footer = document.querySelector(".footer");

    const handleScroll = () => {
        const footerPosition = footer.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        // Si le footer devient visible
        if (footerPosition < windowHeight - 50) {
            footer.classList.add("visible");
            window.removeEventListener("scroll", handleScroll); // Animation déclenchée une seule fois
        }
    };

    // Ajoute un écouteur de scroll
    window.addEventListener("scroll", handleScroll);
});
