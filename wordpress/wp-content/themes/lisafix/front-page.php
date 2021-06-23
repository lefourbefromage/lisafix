<?php get_header();?>

<section class="section section--hero">
    <div class="section__content hero-header">
        <img src="<?php bloginfo('template_directory');?>/statics/img/frames-hero.png" class="hero-header__img">
        <div class="hero-header__text">
            <?php $hero = get_field('hero_page');?>

            <h1 class="hero-header__title"><?php echo $hero['big_title'];?></h1>
            <h2 class="hero-header__subtitle"><?php echo $hero['small_title'];?></h2>
            <p class="hero-header__description">
                <?php echo $hero['description'];?>
            </p>

            <a class="hero-header__cta cta cta--blue" href="<?php echo $hero['link'];?>"><?php echo $hero['link_text'];?></a>
        </div>
    </div>
</section>

<section class="section">
    <div class="section__content">
        <div id="gallery" class="gallery">
            <div class="gallery__sizer"></div>
            <div class="gallery__item gallery__item--display gallery__item--2" data-src="statics/img/gallery/big/rue_02-min.png">
                <img src="statics/img/gallery/min/rue_02-min.png">
            </div>
            <div class="gallery__item gallery__item--display gallery__item--2" data-src="statics/img/gallery/big/Santorini_blanc-min.png">
                <img src="statics/img/gallery/min/Santorini_blanc-min.png">
            </div>

            <div class="gallery__item gallery__item--display gallery__item--2" data-src="statics/img/gallery/big/vin-min.jpg">
                <img src="statics/img/gallery/min/vin-min.png">
            </div>

            <div class="gallery__item" data-src="statics/img/gallery/big/Olives-jaune-min.png">
                <img src="statics/img/gallery/min/Olives-jaune-min.png">
            </div>

            <div class="gallery__item gallery__item--display" data-src="statics/img/gallery/big/rue_01-min.png">
                <img src="statics/img/gallery/min/rue_01-min.png">
            </div>

            <div class="gallery__item gallery__item--display" data-src="statics/img/gallery/big/Oranges-min.png">
                <img src="statics/img/gallery/min/oranges-min.png">
            </div>

            <div class="gallery__item" data-src="statics/img/gallery/big/Feuille_bleu-min.png">
                <img src="statics/img/gallery/min/feuilles_bleu-min.png">
            </div>

            <div class="gallery__item gallery__item--display gallery__item--2" data-src="statics/img/gallery/big/velo-min.png">
                <img src="statics/img/gallery/min/velo-min.png">
            </div>

            <div class="gallery__item gallery__item--display gallery__item--2" data-src="statics/img/gallery/big/rue_03-min.png">
                <img src="statics/img/gallery/min/rue_03-min.png">
            </div>

            <div class="gallery__item gallery__item--display gallery__item--2" data-src="statics/img/gallery/big/charadesign-min.png">
                <img src="statics/img/gallery/min/charadesign-min.png">
            </div>

            <div class="gallery__item gallery__item--display gallery__item--2" data-src="statics/img/gallery/big/bleu_doree-min.png">
                <img src="statics/img/gallery/min/bleu_doree-min.png">
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>
