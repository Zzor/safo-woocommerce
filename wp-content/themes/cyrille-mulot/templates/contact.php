<?php 
/**
 * Template Name: Contact
 */
get_header(); 
?>
<main class="t-contact">
  <section class="t-contact__inner">
    <div class="t-contact__form-switch">
      <button class="c-button-square is-colored" id="js-infos-button">
        <span>
          <?php the_field('contact_form_info_button'); ?>
        </span>
      </button>

      <button class="c-button-square" id="js-service-button">
        <span>
          <?php the_field('contact_form_service_button'); ?>
        </span>
      </button>
    </div>
  </section>
</main>

<?php get_footer(); ?>