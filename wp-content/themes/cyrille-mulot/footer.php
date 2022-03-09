  <footer class="l-footer">
    <div class="l-footer__inner">
      <div class="l-footer__top">
        <div class="l-footer__menu">
          <h2>
            Menu
          </h2>
        </div>

        <div class="l-footer__contact">
          <h2>Contact</h2>
        </div>

        <div class="l-footer__socials">
          <h2>
            Suivez-moi !
          </h2>

          <ul>
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