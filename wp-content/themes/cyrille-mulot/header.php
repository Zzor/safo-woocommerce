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