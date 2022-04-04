<?php get_header('basic'); ?>

<div class="l-blog">
  <div class="l-blog__inner">
    <header class="l-blog__header">
      <div class="l-blog__header-inner">
        <div class="l-blog__header-previous">
          <a href="<?= WP_HOME; ?>/blog">
            <img src="<?= THEME_IMG ?>arrow-thin.svg" 
                  alt="Margaux Legrand Blog"/>
            <span>
              Revenir au blog
            </span>
          </a>
        </div>

        <h1 class="l-blog__header-title">
          <?php the_title(); ?>
        </h1>
      </div>
    </header>
    
    <div class="l-blog__main">
      <div class="l-blog__main-inner">
        <?php if(have_posts()) : ?>
          <section class="l-blog__content">
            <?php while(have_posts()) : the_post(); ?>
              <article class="l-blog__post">
                <figure>
                  <?php the_post_thumbnail(); ?>
                </figure>

                <div class="l-blog__time">
                  <?php get_template_part('template-parts/reading-time-estimate'); ?>
                </div>

                <div class="l-wysiwyg">
                  <?php the_content(); ?>
                </div>
              </article>
            <?php endwhile; ?> 
          </section>
        <?php endif; ?>

        <aside class="l-blog__sidebar">
        </aside>
      </div>
    </div> 
  </div>
</div>

<?php get_footer(); ?>