<?php 
/**
 * Template Name: A propos
 */
get_header(); 
?>

<main class="p-about">
  <div class="p-about__inner">
    <section class="p-about_whoami">
      <div class="p-about__images">
        <picture>
          <?php $about_me_image_1 = get_field('about_me_image_1'); ?>
          <?php if($about_me_image_1) : ?>
            <img src="<?= esc_url($about_me_image_1['url']); ?>" 
                alt="<?= esc_attr($about_me_image_1['alt']); ?>" />
          <?php endif; ?>
        </picture>

        <picture>
          <?php $about_me_image_2 = get_field('about_me_image_2'); ?>
          <?php if ($about_me_image_2) : ?>
            <img src="<?= esc_url($about_me_image_2['url']); ?>" 
                alt="<?= esc_attr($about_me_image_2['alt']); ?>" />
          <?php endif; ?>
        </picture>
      </div>

      <div class="p-about__description">
        <h2>
          <?php the_field('about_me_title'); ?>
        </h2>

        <div>
          <?php the_field('about_me_baseline'); ?>
        </div>
      </div>
    </section>

    <section class="p-about__equipment">
      <div>
        <h2>
          <?php the_field('about_equipment_title'); ?>
        </h2>

        <div>
          <?php the_field('about_equipment_baseline'); ?>
        </div>
      </div>

      <div>
        <?php the_field('about_equipment_description'); ?>
      </div>
    </section>

    <section class="p-about__workwithme">
      <h2>
        <?php the_field('about_shop_title'); ?>
      </h2>

      <div>
        <?php the_field('about_shop_baseline'); ?>
      </div>

      <?php $about_shop_link = get_field('about_shop_link'); ?>
      <?php if($about_shop_link) : ?>
        <a href="<?= esc_url($about_shop_link['url']); ?>" 
           target="<?= esc_attr($about_shop_link['target']); ?>"
           class="c-button-square is-colored">
           <?= esc_html($about_shop_link['title']); ?>
        </a>
      <?php endif; ?>
    </section>

    <section class="p-about__more-about">
      <h2>
        <?php the_field('about_more_title'); ?>
      </h2>

      <div>
        <?php the_field('about_more_description'); ?>
      </div>
    </section>

    <section class="p-about__contact">
      <h2>
        <?php the_field('about_contact_title'); ?>
      </h2>

      <div>
        <?php the_field('about_contact_baseline'); ?>
      </div>

      <?php $about_contact_link = get_field('about_contact_link'); ?>
      <?php if($about_contact_link) : ?>
        <a href="<?= esc_url($about_contact_link['url']); ?>" 
           target="<?= esc_attr($about_contact_link['target']); ?>"
           class="c-button-square is-colored">
           <?= esc_html($about_contact_link['title']); ?>
        </a>
      <?php endif; ?>
    </section>
  </div>
</main>

<?php get_footer(); ?>