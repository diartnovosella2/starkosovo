      </div> <!-- .container -->
    </main> <!-- .module-page -->
    <footer>
      <div class="container">
        <div class="follow-us">
          <span>FOLLOW US @STARKOSOVA</span>
        </div>
      </div>
      <div class="gallery-module">
        <?php 
          $gallery = get_field('picture', 'option');
          if($gallery):
          foreach ($gallery as $ga): ?>
            <div class="img-wrapper">
              <img src="<?= $ga ?>" alt="img" >
            </div>
          <?php endforeach;
          endif;
        ?>

      </div>
      <div class="footer">
        <div class="footer__container">
          <div class="footer__entry">
            <a class="footer__entry-logo" href="<?php echo home_url(); ?>" title="<?php echo bloginfo('name'); ?>">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-logo.svg" alt="starkosovo-logo" class="logo">
            </a>
            <div class="footer__entry-button">
              <a href="#">
                <div class="get-started-btn">
                  <span>Get Started</span>
                </div>
              </a>
            </div>
          </div>
          <div class="footer__menus">
            <a class="footer__menus-logo" href="<?php echo home_url(); ?>" title="<?php echo bloginfo('name'); ?>">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-logo.svg" alt="starkosovo-logo" class="footer-logo">
            </a>
            <div class="footer__menus-quick-links">
              <span>Quicklinks</span>
              <?php wp_nav_menu(
                array(
                  'theme_location' => 'footer-menu',
                )
              ); ?>
            </div>
            <div class="footer__menus-top-5-jobs">
            <span>Top 5 Jobs</span>
              <ul>
                <li>Product Designer in SF</li>
                <li>Android Dev in FL</li>
                <li>Product Designer in LA</li>
                <li>iOS Dev in US</li>
                <li>React Dev in CA</li>
              </ul>
            </div>
            <div class="footer__menus-blog">
              <span>From the blog</span>
              <?php wp_nav_menu(
                array(
                  'theme_location' => 'blog-menu',
                )
              ); ?>
            </div>
            <div class="footer__menus-social-media">
              <span>Social Media</span>
              <?php wp_nav_menu(
                array(
                  'theme_location' => 'social-media',
                )
              ); ?>
            </div>
            <div class="footer__menus-button">
              <a href="<?= home_url('/registration-form');?>">
                <div class="get-started-btn">
                  <span>Get Started</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>