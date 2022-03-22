<?php get_header('home'); ?>

<main class="p-home">
  <section class="p-home__categories">
    <div class="p-home__categories-inner">
      <header class="p-home__categories-header">
        <h2>
          <?php the_field('home_categories_title'); ?>  
        </h2>
      </header>

      <ul>
        <?php if(have_rows('home_categories_photo_1')) : ?>
          <?php while(have_rows('home_categories_photo_1')) : the_row(); ?>
            <li class="fx-reveal">
              <?php $link = get_sub_field('link'); ?>
              <?php if ($link) : ?>
                <a href="<?= esc_url($link['url']); ?>" 
                   target="<?= esc_attr($link['target']); ?>">
                    <?php $photo = get_sub_field('photo'); ?>
                    <?php if($photo) : ?>
                      <figure>
                        <img src="<?= esc_url($photo['url']); ?>" 
                            alt="<?= esc_attr($photo['alt']); ?>" />

                        <figcaption>
                          <?php the_sub_field('title'); ?>
                        </figcaption>
                      </figure>
                    <?php endif; ?>
                </a>
              <?php endif; ?>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php if(have_rows('home_categories_photo_2')) : ?>
          <?php while(have_rows('home_categories_photo_2')) : the_row(); ?>
            <li class="fx-reveal">
              <?php $link = get_sub_field('link'); ?>
              <?php if ($link) : ?>
                <a href="<?= esc_url($link['url']); ?>" 
                   target="<?= esc_attr($link['target']); ?>">
                  <?php $photo = get_sub_field('photo'); ?>
                  <?php if($photo) : ?>
                    <figure>
                      <img src="<?= esc_url($photo['url']); ?>" 
                          alt="<?= esc_attr($photo['alt']); ?>" />

                      <figcaption>
                        <?php the_sub_field('title'); ?>
                      </figcaption>
                    </figure>
                  <?php endif; ?>
                </a>
              <?php endif; ?>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php if(have_rows('home_categories_photo_3')) : ?>
          <?php while(have_rows('home_categories_photo_3')) : the_row(); ?>
            <li class="fx-reveal">
              <?php $link = get_sub_field('link'); ?>
              <?php if($link): ?>
                <a href="<?= esc_url($link['url']); ?>" 
                   target="<?= esc_attr($link['target']); ?>">
                  <?php $photo = get_sub_field('photo'); ?>
                  <?php if($photo) : ?>
                    <figure>
                      <img src="<?= esc_url($photo['url']); ?>" 
                          alt="<?= esc_attr($photo['alt']); ?>" />

                      <figcaption>
                        <?php the_sub_field('title'); ?>
                      </figcaption>
                    </figure>
                  <?php endif; ?>
                </a>
              <?php endif; ?>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php if(have_rows('home_categories_photo_4')) : ?>
          <?php while(have_rows('home_categories_photo_4')) : the_row(); ?>
            <li class="fx-reveal">
              <?php $link = get_sub_field('link'); ?>
              <?php if($link): ?>
                <a href="<?= esc_url($link['url']); ?>" 
                   target="<?= esc_attr($link['target']); ?>">
                  <?php $photo = get_sub_field('photo'); ?>
                  <?php if($photo) : ?>
                    <figure>
                      <img src="<?= esc_url($photo['url']); ?>" 
                          alt="<?= esc_attr($photo['alt']); ?>" />

                      <figcaption>
                        <?php the_sub_field('title'); ?>
                      </figcaption>
                    </figure>
                  <?php endif; ?>
                </a>
              <?php endif; ?>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>
  </section>

  <section id="link-home-description" class="p-home__presentation fx-reveal">
    <div class="p-home__presentation-inner">
      <h2>
        <?php the_field('home_presentation_title'); ?>  
      </h2>
      
      <div>
        <?php the_field('home_presentation_description'); ?>
      </div>

      <p class="p-home__presentation-signature">
        <?php the_field('home_presentation_signature'); ?>
      </p>
    </div>
  </section>
</main>

<?php get_footer(); ?>