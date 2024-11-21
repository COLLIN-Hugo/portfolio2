document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".header");
    if (header) {
      header.style.opacity = "1"; // S'assure que le header devient visible
      header.style.animation = "slideInDown 1s ease-out forwards"; // Applique l'animation
    }
  });
  