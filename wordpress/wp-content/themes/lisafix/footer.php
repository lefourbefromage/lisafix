
    <script>
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

        function toggleMenu() {
            const navToggle = document.getElementById('nav-toggle');

            navToggle.onclick = function () {
                this.classList.toggle("navigation__toggle--open");
                document.getElementById('navbar').classList.toggle("navigation__items--open");
            };
        } toggleMenu(); // init function

        imagesLoaded( document.querySelector('#gallery'), function( instance ) {
            var grid = document.querySelector('.gallery');

            grid.classList.add('gallery--loaded');

            new Masonry( grid, {
                itemSelector: '.gallery__item',
                columnWidth: '.gallery__sizer',
                percentPosition: true,
            });

            // init with element
            ScrollReveal().reveal('.gallery__item');

            lightGallery(document.getElementById('gallery'), {
                selector: '.gallery__item--display',
                speed: 500,
                download: false,
            });
        });
    </script>

    <?php wp_footer();?>
</body>
</html>