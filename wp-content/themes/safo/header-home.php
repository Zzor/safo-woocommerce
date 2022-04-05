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

    <header class="l-header is-home">
    <div class="l-header__inner">
      <picture class="l-header__picture">
        <?php $home_hero_image = get_field('home_hero_image'); ?>
        <?php if($home_hero_image) : ?>
          <img src="<?= esc_url($home_hero_image['url']); ?>" 
              alt="<?= esc_attr($home_hero_image['alt']); ?>" 
              class="l-header__img" />
        <?php endif; ?>

        <div class="l-header__picture-shade"></div>
      </picture>

      <div class="c-title-page--home l-header__title">
        <h1 class="c-title-page__principal fx-reveal">
          <?php the_field('home_hero_title'); ?>
        </h1>

        <p class="c-title-page__secondary fx-reveal">
          <?php the_field('home_hero_subtitle'); ?>
        </p>
      </div>

      <a href="#link-home-description" class="c-button-square is-colored l-header__scroll-down">
        <img src="<?= THEME_IMG ?>arrow-down.svg" alt="">
      </a>
    </div>
  </header>