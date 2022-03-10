<div class="l-topnav">
  <div class="l-topnav__inner">
    <div class="l-topnav__logo">
      <a href="<?php bloginfo('url'); ?>">
        <img src="<?= THEME_IMG ?>/cyrille-mulot-logo.jpg" alt="Logo">
      </a>
    </div>

    <nav class="l-topnav__principal-nav">
      <?php 
        wp_nav_menu(
          [
            'theme_location' => 'principal-nav',
            'container' => 'ul',
            'menu_class' => 'l-topnav__principal-nav-items',
          ]
        ); 
      ?>
    </nav>

    <!-- Nombres d'articles + Prix dans la Topnav -->
    <a class="cart-customlocation" 
       href="<?= wc_get_cart_url(); ?>" 
       title="<?php _e( 'Voir le panier' ); ?>">
        <?= sprintf (_n('%d article', '%d articles', WC()->cart->get_cart_contents_count()), 
            WC()->cart->get_cart_contents_count()); ?> – <?= WC()->cart->get_cart_total(); ?>
    </a>

    <button id="js-burger" class="l-nav__burger" aria-label="menu">
      <span></span>
    </button>
  </div>
</div>