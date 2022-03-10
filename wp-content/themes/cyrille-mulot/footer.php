  <footer class="l-footer">
    <div class="l-footer__inner">
      <div class="l-footer__top">
        <div class="l-footer__block fx-reveal">
          <h2 class="l-footer__block-title">
            Menu
          </h2>

          <?php 
            wp_nav_menu(
              [
                'theme_location' => 'principal-nav',
                'container' => 'ul',
                'menu_class' => 'l-footer__block-list',
              ]
            ); 
          ?>
        </div>

        <div class="l-footer__block fx-reveal">
          <h2 class="l-footer__block-title">Contact</h2>

          <ul class="l-footer__block-list is-socials">
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

          <ul class="l-footer__block-list">
            <li>
              <a href="mailto:<?= get_option('email'); ?>">
                <?= get_option('email'); ?>
              </a>
            </li>

            <li>
              <a href="telto:<?= get_option('phone'); ?>">
                <?= get_option('phone'); ?>
              </a>
            </li>

            <li>
              <?= get_option('address'); ?>
            </li>
          </ul>
        </div>

        <div class="l-footer__block fx-reveal">
          <h2 class="l-footer__block-title">
            Informations
          </h2>

          <?php 
            wp_nav_menu(
              [
                'theme_location' => 'infos-nav',
                'container' => 'ul',
                'menu_class' => 'l-footer__block-list',
              ]
            ); 
          ?>
        </div>
      </div>

      <div class="l-footer__bottom">
        <p class="l-footer__copyright">
          <?= date('Y'); ?> - Cyrille Mulot - Tous droits réservés
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