document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".header");
    if (header) {
      header.style.opacity = "1"; // S'assure que le header devient visible
      header.style.animation = "slideInDown 1s ease-out forwards"; // Applique l'animation
    }
  });

  document.addEventListener("DOMContentLoaded", function () {
    const burger = document.querySelector(".wrapper-burger");
    const menu = document.querySelector(".menu_principal");

    if (burger) {
      burger.addEventListener("click", function () {
        document.querySelector(".burger").classList.toggle("cross");
        document.querySelector(".menu_principal").classList.toggle("display-menu");
      });
    }
  });