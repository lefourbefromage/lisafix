imagesLoaded( document.querySelector('#gallery'), function( instance ) {
    var grid = document.querySelector('.gallery');

    grid.classList.add('gallery--loaded');

    new Masonry( grid, {
        itemSelector: '.gallery__item',
        columnWidth: '.gallery__sizer',
        percentPosition: true,
    });

    // init with element
    // ScrollReveal().reveal('.gallery__item');

    lightGallery(document.getElementById('gallery'), {
        selector: '.gallery__item--display',
        speed: 500,
        download: false,
    });
});