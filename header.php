<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <!-- Hotjar Tracking Code for www.starkosovo.com -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:2212412,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XVSKXGJ74T"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-XVSKXGJ74T');
    </script>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="header <?= is_404() ? '404page' : ''?>">
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

              <div class="header__navigation-bluelogo">
                <a class="header__navigation-atag" href="<?php echo home_url(); ?>" title="<?php echo bloginfo('name'); ?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blue-logo.svg" alt="starkosovo-logo" class="logo-blue">
                </a>
              </div>
          </div>
          <div class="header__button">
            <a href="<?= home_url('/registration-form');?>">
              <div class="apply-now-btn">
                <span>Apply now</span>
              </div>
            </a>
          </div>
          <div class="header__navigation-toggle">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-menu@3x.png" alt="open-nav" class="header__navigation-toggle--open">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/close.png" alt="close-nav" class="header__navigation-toggle--exit" width="15" height="15">
          </div>
        </div>
    </div>
  </header>
  <main class="module-page">
    <div class="container">
