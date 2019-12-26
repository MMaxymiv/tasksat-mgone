<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
        <button class="toggle__header">
            <div class="menu__btn"></div>
            <div class="menu__btn"></div>
            <div class="menu__btn"></div>
        </button>
        <div class="container">
            <div class="header__inner">
            <?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
                <div class="header__login">
                    <a href="#" class="header__link login">Login</a>
                    <a href="#" class="header__link try-it-free">Try It Free</a>
                </div>
            </div>
        </div>
    </header>
