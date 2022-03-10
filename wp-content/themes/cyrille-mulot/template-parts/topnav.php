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

    <button id="js-burger" class="l-nav__burger" aria-label="menu">
      <span></span>
    </button>
  </div>
</div>