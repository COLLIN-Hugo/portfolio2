document.addEventListener("DOMContentLoaded", function () {
    const elementsToAnimate = document.querySelectorAll(".scroll-animate");

    if (elementsToAnimate.length > 0) {
        const observer = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                        observer.unobserve(entry.target); // Stop observing once visible
                    }
                });
            },
            { threshold: 0.2 } // Animation déclenchée lorsque 20% de l'élément est visible
        );

        elementsToAnimate.forEach((element) => observer.observe(element));
    }
});
