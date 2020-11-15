<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="header">
    <div class="header__container">
          <a class="header__logo" href="<?php echo home_url(); ?>" title="<?php echo bloginfo('name'); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" alt="starkosovo-logo" class="logo">
          </a>
          <div class="header__navigation">
            <?php wp_nav_menu(
                array(
                  'theme_location' => 'header-menu',
                  'menu_class'      => 'header__navigation-menu',
                )
              ); ?>
          </div>
          <div class="header__button">
            <a href="#">
              <div class="apply-now-btn">
                <span>Apply now</span>
              </div>
            </a>
          </div>
          <div class="header__navigation-toggle">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-menu@3x.png" alt="open-nav" class="header__navigation-toggle--open">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/close.png" alt="close-nav" class="header__navigation-toggle--exit">
          </div>
        </div>
    </div>
  </header>
  <main class="module-page">
    <div class="container">
