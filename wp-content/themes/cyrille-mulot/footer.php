  <footer class="l-footer">
    <div class="l-footer__inner">
      <div class="l-footer__top">
        <div class="l-footer__block">
          <h2 class="l-footer__block-title">
            Menu
          </h2>

          <?php 
            wp_nav_menu(
              [
                'theme_location' => 'principal-nav',
                'container' => 'ul',
                'menu_class' => 'l-nav__menu',
              ]
            ); 
          ?>
        </div>

        <div class="l-footer__block">
          <h2 class="l-footer__block-title">Contact</h2>

          <ul>
            <li>
              <a href="mailto:contact@cyrillemulot.com">
                contact@cyrillemulot.com
              </a>
            </li>

            <li>
              <a href="telto:+33630249995">
                +336 30 24 99 95
              </a>
            </li>

            <li>
              <div>
                24 rue Gemare  <br>
                Caen, 14000 <br>
                France
              </div>
            </li>
          </ul>
        </div>

        <div class="l-footer__block">
          <h2 class="l-footer__block-title">
            Suivez-moi !
          </h2>

          <ul class="l-footer__block-socials">
            <li class="c-button-square">
              <a href="https://facebook.com/<?= get_option('instagram'); ?>" aria-label="facebook" target="_blank">
                <span class="text-for-seo">Facebook</span>
                <?php require get_template_directory() . '/template-parts/social-icons/icon-facebook.php'; ?>
              </a>
            </li>

            <li class="c-button-square">
              <a href="https://instagram.com/<?= get_option('instagram'); ?>" aria-label="instagram" target="_blank">
                <span class="text-for-seo">instagram</span>
                <?php require get_template_directory() . '/template-parts/social-icons/icon-instagram.php'; ?>
              </a>
            </li>
          </ul>
        </div>
        
      </div>

      <div class="l-footer__bottom">
        <p class="l-footer__copyright">
          2022 - Cyrille Mulot - Tous droits réservés
        </p>
        <p class="l-footer__credits">
          Développé par <a href="https://hugo-salazar.com" target="_blank">Hugo Salazar</a>
        </p>
      </div>
    </div>
  </footer>
  
  </div> <!-- Close for-mobile-hidden -->
  <?php wp_footer(); ?>
</body>
</html>