document.addEventListener("scroll", function () {
    const heroHeader = document.getElementsByClassName('section--hero')[0];
    const navbar = document.getElementsByTagName("header")[0];

    var navbarHeader = navbar.clientHeight;
    var heroHeaderHeight = heroHeader.clientHeight - navbarHeader;
    var scrolled = document.documentElement.scrollTop;

    if (scrolled >= heroHeaderHeight) {
        navbar.classList.add("main__header--scrolled");
    } else {
        navbar.classList.remove("main__header--scrolled");
    }
});