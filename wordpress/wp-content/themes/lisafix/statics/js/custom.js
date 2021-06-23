function toggleMenu() {
    const navToggle = document.getElementById('nav-toggle');

    navToggle.onclick = function () {
        this.classList.toggle("navigation__toggle--open");
        document.getElementById('navbar').classList.toggle("navigation__items--open");
    };
} toggleMenu(); // init function

