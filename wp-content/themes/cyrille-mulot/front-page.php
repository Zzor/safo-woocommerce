<?php get_header(); ?>

<main class="p-home">
  <header class="p-home__hero">
    <picture class="p-home__hero-picture">
      <?php $home_hero_image = get_field('home_hero_image'); ?>
      <?php if($home_hero_image) : ?>
        <img src="<?= esc_url($home_hero_image['url']); ?>" 
            alt="<?= esc_attr($home_hero_image['alt']); ?>" 
            class="p-home__hero-img" />
      <?php endif; ?>
    </picture>

    <div class="p-home__hero-title-wrapper">
      <h1 class="p-home__hero-title">
        <?php the_field('home_hero_title'); ?>
      </h1>

      <p class="p-home__hero-subtitle">
        <?php the_field('home_hero_subtitle'); ?>
      </p>
    </div>

    

    <a href="#link-home-description" class="c-button-square is-colored p-home__hero-scroll-down">
      <img src="<?= THEME_IMG ?>/arrow-down.svg" alt="">
    </a>
  </header>

  <section id="link-home-description" class="p-home__presentation">
    <h2>
      <?php the_field('home_presentation_title'); ?>  
    </h2>
    
    <div>
      <?php the_field('home_presentation_description'); ?>
    </div>

    <p class="p-home__presentation-signature">
      <?php the_field('home_presentation_signature'); ?>
    </p>
  </section>

  <section class="p-home__categories">
    <div class="p-home__categories-inner">
      <header class="p-home__categories-header">
        <h2>
          <?php the_field('home_categories_title'); ?>  
        </h2>

        <p>
          We are fine-art, wedding & portrait film photographers from Oregon, with a special love for natural light,
          medium format film cameras & redheads with freckles. With over 5 years of experience, numerous workshops and features in top wedding publications, I capture beauty in the most subtle. 
        </p>
      </header>

      <ul>
        <?php if(have_rows('home_categories_photo_1')) : ?>
          <?php while(have_rows('home_categories_photo_1')) : the_row(); ?>
            <li>
              <a href="<?= get_sub_field('link'); ?>">
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
            </li>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php if(have_rows('home_categories_photo_2')) : ?>
          <?php while(have_rows('home_categories_photo_2')) : the_row(); ?>
            <li>
              <a href="<?= get_sub_field('link'); ?>">
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
            </li>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php if(have_rows('home_categories_photo_3')) : ?>
          <?php while(have_rows('home_categories_photo_3')) : the_row(); ?>
            <li>
              <a href="<?= get_sub_field('link'); ?>">
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
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>
  </section>
</main>

<?php get_footer(); ?>