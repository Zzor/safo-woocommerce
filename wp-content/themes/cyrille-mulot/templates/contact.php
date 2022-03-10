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

    <div class="t-contact__form-wrapper">
      <div class="c-form is-visible" id="js-info-form">
        <div class="c-form__description">
          <?php the_field('contact_form_info_description'); ?>
        </div>

        <div>
          <?php the_field('contact_form_info'); ?>
        </div>
      </div>

      <div class="c-form is-visible" id="js-service-form">
        <div class="c-form__description">
          <?php the_field('contact_form_service_description'); ?>
        </div>

        <div>
          <?php the_field('contact_form_service'); ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>