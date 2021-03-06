<?php 
/**
 * Template Name: A propos
 */
get_header(); 
?>

<main class="p-about">
  <div class="p-about__inner">
    <section class="p-about_whoami">
      <div class="p-about__description">
        <h2 class="p-about__description-title fx-reveal">
          <?php the_field('about_me_title'); ?>
        </h2>

        <div class="p-about__description-text fx-reveal">
          <?php the_field('about_me_baseline'); ?>
        </div>
      </div>

      <div class="p-about__images">
        <picture>
          <?php $about_me_image_1 = get_field('about_me_image_1'); ?>
          <?php if($about_me_image_1) : ?>
            <img src="<?= esc_url($about_me_image_1['url']); ?>" 
                alt="<?= esc_attr($about_me_image_1['alt']); ?>" 
                class="fx-reveal"/>
          <?php endif; ?>
        </picture>

        <picture>
          <?php $about_me_image_2 = get_field('about_me_image_2'); ?>
          <?php if ($about_me_image_2) : ?>
            <img src="<?= esc_url($about_me_image_2['url']); ?>" 
                alt="<?= esc_attr($about_me_image_2['alt']); ?>" 
                class="fx-reveal"/>
          <?php endif; ?>
        </picture>
      </div>
    </section>

    <section class="p-about__equipment">
      <div>
        <h2 class="fx-reveal">
          <?php the_field('about_equipment_title'); ?>
        </h2>

        <div class="fx-reveal">
          <?php the_field('about_equipment_baseline'); ?>
        </div>

        <figure>
          <?php $about_equipment_image = get_field('about_equipment_image'); ?>
          <?php if($about_equipment_image) : ?>
            <img src="<?= esc_url($about_equipment_image['url']); ?>" 
                 alt="<?= esc_attr($about_equipment_image['alt']); ?>" 
                 class="fx-reveal"/>
          <?php endif; ?>
        </figure>
      </div>

      <div class="description fx-reveal">
        <?php the_field('about_equipment_description'); ?>
      </div>
    </section>

    <section class="p-about__contact">
      <h2 class="fx-reveal">
        <?php the_field('about_contact_title'); ?>
      </h2>

      <div class="description fx-reveal">
        <?php the_field('about_contact_baseline'); ?>
      </div>

      <?php $about_contact_link = get_field('about_contact_link'); ?>
      <?php if($about_contact_link) : ?>
        <a href="<?= esc_url($about_contact_link['url']); ?>" 
           target="<?= esc_attr($about_contact_link['target']); ?>"
           class="c-button-square is-colored fx-reveal">
           <?= esc_html($about_contact_link['title']); ?>
        </a>
      <?php endif; ?>
    </section>
  </div>
</main>

<?php get_footer(); ?>