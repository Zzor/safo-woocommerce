  <footer class="l-footer">
    <div class="l-footer__inner">
      <div class="l-footer__follow">
        <a href="https://www.instagram.com/cyrillemulot_photography/" target="_blank">
          Suivez-moi sur instagram
        </a>
      </div>

      <ul class="l-footer__socials">
        <li class="l-footer__social-item">
          <a href="https://facebook.com/<?= get_option('facebook'); ?>" aria-label="facebook" target="_blank">
            <span class="text-for-seo">Facebook</span>
            <?php require get_template_directory() . '/template-parts/social-icons/icon-facebook.php'; ?>
          </a>
        </li>

        <li class="l-footer__social-item">
          <a href="https://instagram.com/<?= get_option('instagram'); ?>" aria-label="instagram" target="_blank">
            <span class="text-for-seo">instagram</span>
            <?php require get_template_directory() . '/template-parts/social-icons/icon-instagram.php'; ?>
          </a>
        </li>
      </ul>

      <div class="l-footer__infos">
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