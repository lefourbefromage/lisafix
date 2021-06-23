<?php get_header();?>

<div class="main__content">
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

    <?php if( have_rows('gallery') ): ?>
    <section class="section">
        <div class="section__content">
            <a id="gallery" class="gallery">
                <div class="gallery__sizer"></div>

                <?php while( have_rows('gallery') ): the_row();
                    $image = get_sub_field('image');
                    $imageurl = $image['url'];
                    $thumb = $image['sizes']['large'];
                    $caption = get_sub_field('caption');
                    $shop = get_sub_field('shop');

                    $isShown = get_sub_field('is_shown');
                    $column = get_sub_field('column_width');

                    ?>
                    <div class="gallery__item <?php if ($isShown):?>gallery__item--display<?php endif;?> gallery__item--<?php echo $column;?>"
                         data-src="<?php echo $imageurl;?>"
                        <?php if ($caption): ?>
                            data-sub-html="
                         <?php if ($shop): ?>
                            <a target='_blank' href='<?php echo $shop;?>'><?php echo $caption;?></a>
                         <?php else :?>
                            <?php echo $caption;?>
                         <?php endif;?>"
                        <?php endif;?>>
                        <img src="<?php echo $thumb; ?>">
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
</div>


<?php get_footer();?>
