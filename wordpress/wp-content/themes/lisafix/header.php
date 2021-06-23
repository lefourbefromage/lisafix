<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lisa Fix</title>
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

        <ul class="navigation__items" id="navbar">
            <li class="navigation__item">
                <a href="#" class="navigation__link <?php if (is_page('Home')) echo 'navigation__link--active'; ?>">Works</a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link <?php if (is_page('About')) echo 'navigation__link--active'; ?>">About</a>
            </li>
            <li class="navigation__item">
                <a href="https://www.etsy.com/fr/shop/Lisafixprints" class="navigation__link" target="_blank">Shop</a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link <?php if (is_page('Contact')) echo 'navigation__link--active'; ?>">Contact</a>
            </li>
        </ul>
    </nav>
</header>