const hamburgerMenu = document.querySelector(".hamMenu");

const offScreenHamburgerMenu = document.querySelector(".offScreenMenu");

hamburgerMenu.addEventListener("click", () => {
    hamburgerMenu.classList.toggle("active");
    offScreenHamburgerMenu.classList.toggle("active");
});