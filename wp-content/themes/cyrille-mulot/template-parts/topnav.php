<div id="js-topbar" class="l-topnav">
  <div class="l-topnav__inner">
    <div class="l-topnav__logo">
      <a href="<?php bloginfo('url'); ?>">
        <img src="<?= get_theme_mod('logo'); ?>" alt="Safo Logo"/>
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

    <!-- Panier + nombre d'articles -->
    <a href="<?= wc_get_cart_url() ?>" class="l-topnav__cart">
      <img src="<?= THEME_IMG ?>/cart-icon.svg" alt="Carrito" />
      <span class="text-for-seo">Carrito</span>
      
      <div class="l-topnav__cart-count">
        <?php global $woocommerce; ?>
        <?= $woocommerce->cart->cart_contents_count; ?>
      </div>
    </a>

    <button id="js-burger" class=".l-topnav__burger" aria-label="menu">
      <span></span>
    </button>
  </div>
</div>