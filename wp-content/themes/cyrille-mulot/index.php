<?php get_header('basic'); ?>

<section class="p-basic-template">
  <div class="p-basic-template__inner">
    <h1 class="p-basic-template__title">
      <?php the_title(); ?>
    </h1>

    <div class="p-basic-template__wysiwyg">
      <?= get_the_content(); ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>