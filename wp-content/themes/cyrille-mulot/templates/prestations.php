<?php
  /*
  Template Name: Prestations
  */
?>

<?php get_header(); ?>

<main class="t-prestations">
  <div class="t-prestations__inner">
    <ul>
      <li>
        <div class="text-wrap">
          <div class="title">
           <?php the_field('services_block_title_1'); ?>
          </div>

          <div class="subtitle">
            <?php the_field('services_block_subtitle_1'); ?>
          </div>

          <div class="text">
            <?php the_field('services_block_description_1'); ?>
          </div>
        </div>

        <?php $services_block_image_1 = get_field('services_block_image_1'); ?>
        <?php if ( $services_block_image_1 ) : ?>
          <div class="img-wrap">
            <img src="<?= esc_url($services_block_image_1['url']); ?>" 
                 alt="<?= esc_attr($services_block_image_1['alt']); ?>" />
            </div>
        <?php endif; ?>
      </li>

      <li>
        <?php $services_block_image_2 = get_field('services_block_image_2'); ?>
        <?php if ( $services_block_image_2 ) : ?>
          <div class="img-wrap">
            <img src="<?= esc_url($services_block_image_2['url']); ?>" 
                 alt="<?= esc_attr($services_block_image_2['alt']); ?>" />
            </div>
        <?php endif; ?>

        <div class="text-wrap">
          <div class="title">
           <?php the_field('services_block_title_2'); ?>
          </div>

          <div class="subtitle">
            <?php the_field('services_block_subtitle_2'); ?>
          </div>

          <div class="text">
            <?php the_field('services_block_description_2'); ?>
          </div>
        </div>
      </li>
    </ul>
  </div>
</main>

<?php get_footer(''); ?>