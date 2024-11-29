document.addEventListener("DOMContentLoaded", () => {
    const errorCode = document.querySelector(".error-code");
    const errorMessage = document.querySelector(".error-message");

    errorCode.style.opacity = "0";
    errorMessage.style.opacity = "0";

    setTimeout(() => {
        errorCode.style.transition = "opacity 1.5s ease, transform 1.5s ease";
        errorCode.style.opacity = "1";
        errorCode.style.transform = "scale(1.1)";

        setTimeout(() => {
            errorMessage.style.transition = "opacity 1.5s ease, transform 1.5s ease";
            errorMessage.style.opacity = "1";
            errorMessage.style.transform = "translateY(0)";
        }, 500);
    }, 200);
});
