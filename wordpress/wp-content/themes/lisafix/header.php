<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LisaFix.fr | Graphiste & Illustratrice</title>
    <meta name="theme-color" content="#e4a83a">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0" name="viewport">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');?>/statics/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>/statics/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/statics/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory');?>/statics/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_directory');?>/statics/img/favicon/safari-pinned-tab.svg" color="#2a6ce2">
    <meta name="msapplication-TileColor" content="#ffc40d">


    <?php wp_head();?>
</head>
<body class="main">
<header class="main__header">
    <nav class="navigation">
        <a href="<?php echo home_url();?>" class="navigation__logo"></a>

        <button type="button" id="nav-toggle" class="navigation__toggle">
            <span></span>
        </button>

        <?php
        wp_nav_menu(
            array(
                'theme-location' => 'header-menu',
                'menu' => 'main-menu',
                'container' => 'ul',
                'menu_class' => 'navigation__items',
                'menu_id' => 'navbar'
            )
        )
        ?>
    </nav>
</header>