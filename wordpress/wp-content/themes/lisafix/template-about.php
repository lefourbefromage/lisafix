<?php
/* Template Name: About */
get_header();

?>
<div class="main__content">
    <section class="section section--hero-about">
        <div class="section__content hero-about">
            <img src="<?php bloginfo('template_directory');?>/statics/img/profile.png" class="hero-about__img">
            <div class="hero-about__text">
                <?php $about = get_field('about_page');?>

                <h2 class="hero-about__subtitle">À propos.<?php echo $about['small_title'];?></h2>
                <h1 class="hero-about__title">Lisa Fix<?php echo $about['big_title'];?></h1>
                <p class="hero-about__description">
                    Graphiste et Illustratice freelance basée sur Pau, je suis une passionnée de design graphique... <?php echo $about['description'];?>
                </p>
            </div>
        </div>
    </section>

    <section class="section section--about">
        <div class="section__content about">
            <div class="about__texts">
                <h2 class="about__title">Mon profil</h2>
                <p class="about__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pulvinar sapien quis nunc gravida, vitae aliquam leo posuere. Donec tristique massa mauris, porttitor malesuada tellus ullamcorper in. Aliquam porttitor ipsum eget enim dictum tempor eu sit amet lectus.
                </p>

                <h2 class="about__title">Mes compétences</h2>
                <p class="about__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pulvinar sapien quis nunc gravida, vitae aliquam leo posuere. Donec tristique massa mauris, porttitor malesuada tellus ullamcorper in. Aliquam porttitor ipsum eget enim dictum tempor eu sit amet lectus.
                </p>
            </div>

            <div class="about__media">
                <div class="about__video">
                                <video width="100%" height="100%" autoplay loop muted playsinline>
                                    <source src="<?php bloginfo('template_directory');?>/statics/img/ipad-white.mp4" type='video/mp4; codecs="hvc1"'>
                                    <source  src="<?php bloginfo('template_directory');?>/statics/img/ipad-white.webm" type="video/webm">
                                </video>
                </div>

            </div>
        </div>
    </section>
    <section class="section">
        <div class="section__content contact-me">
            <img src="<?php bloginfo('template_directory');?>/statics/img/frames-hero.png" class="contact-me__img">

            <div class="contact-me__texts">
                <h2 class="contact-me__title">Vous avez une idée de projet ?</h2>
                <a class="hero-header__cta cta cta--orange" href="">Contactez-moi !</a>
            </div>
        </div>
    </section>

</div>

<?php
get_footer();
?>
