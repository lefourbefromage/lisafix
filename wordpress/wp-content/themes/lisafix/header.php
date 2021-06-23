<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lisa Fix</title>
    <meta name="theme-color" content="#e4a83a">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0" name="viewport">

    <?php wp_head();?>
</head>
<body class="main">
<header class="main__header">
    <nav class="navigation">
        <a href="#" class="navigation__logo"></a>

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