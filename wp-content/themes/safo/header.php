<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <title><?php bloginfo('name') ?></title>
      <meta charset="<?= bloginfo('charset'); ?>"/>
      <meta name="theme-color" content="#B2CEC0"/>
      <meta name="author" content="Hugo Salazar-Cardozo"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
      <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <!-- Chrome Bar URL Color -->
      <!--<meta name="theme-color" content="#ff366e" /> -->
      <!-- Windows Phone -->
      <meta name="msapplication-navbutton_color" content="#ff366e" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <?php wp_head(); ?>
  </head>
  
  <body <?php body_class(); ?>>
    <div class="for-overflow-mobile">

    <?php get_template_part('template-parts/topnav'); ?>

    <header class="l-header is-generic">
      <div class="l-header__inner">
        <figure class="l-header__picture">
          <?php the_post_thumbnail(); ?>

          <div class="l-header__picture-shade"></div>
        </figure>

        <div class="c-title-page l-header__title">
          <h1 class="c-title-page__principal fx-reveal">
            <?php single_post_title() ?>
          </h1>
        </div>
      </div>
    </header>