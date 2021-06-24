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

                <h2 class="hero-about__subtitle"><?php echo $about['small_title'];?></h2>
                <h1 class="hero-about__title"><?php echo $about['big_title'];?></h1>
                <p class="hero-about__description">
                    <?php echo $about['description'];?>
                </p>
            </div>
        </div>
    </section>

    <?php if ( have_rows('informations')): ?>
        <section class="section section--about">
            <div class="section__content about">
                <div class="about__texts">
                    <?php while( have_rows('informations') ): the_row();
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        ?>

                        <h2 class="about__title"><?php echo $title;?></h2>
                        <div class="about__text">
                            <?php echo $description;?>
                        </div>
                    <?php endwhile; ?>
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
    <?php endif;?>
    <section class="section">
        <div class="section__content contact-me">
            <img src="<?php bloginfo('template_directory');?>/statics/img/frames-hero.png" class="contact-me__img">

            <div class="contact-me__texts">
                <h2 class="contact-me__title">Vous avez une idée de projet ?</h2>
                <a class="contact-me__cta cta cta--yellow" href="">Contactez-moi !</a>
            </div>
        </div>
    </section>

</div>

<?php
get_footer();
?>
