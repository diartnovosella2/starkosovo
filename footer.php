      </div> <!-- .container -->
    </main> <!-- .module-page -->
    <footer>

      <div class="gallery-module">
        <?php 
          $gallery = get_field('picture', 'option');
          foreach ($gallery as $ga) {?>
            <div class="img-wrapper">
              <img src="<?= $ga ?>" alt="img" >
            </div>
          <?php }
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
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-logo.svg" alt="starkosovo-logo" class="logo">
            </a>
            <div class="footer__menus-quick-links">
              <span>Quicklinks</span>
              <ul>
                <li>Home</li>
                <li>About Us</li>
                <li>Work & Travel</li>
                <li>How it Works</li>
                <li>Contact Us</li>
              </ul>
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
              <ul>
                <li>Blog Article</li>
                <li>Blog Article</li> 
                <li>Blog Article</li>
                <li>Blog Article</li>
                <li>Blog Article</li>
              </ul>
            </div>
            <div class="footer__menus-social-media">
              <span>Social Media</span>
              <ul>
                <li>Facebook</li>
                <li>Instagram</li>
                <li>Linkedin</li>
                <li>Youtube</li>
              </ul>
            </div>
            <div class="footer__menus-button">
              <a href="#">
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