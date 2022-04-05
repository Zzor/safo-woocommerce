<?php get_header('basic'); ?>

<div class="l-blog">
<header class="l-blog__header fx-reveal">
    <div class="l-blog__header-inner">
      <h1 class="l-blog__header-title">
        <?php if(is_category()): ?>
          <?php single_cat_title() ?>
        <?php elseif (is_search()): ?>
          <?= sprintf(__('Resultados para: "%s"', 'margaux'), get_search_query()); ?>
        <?php else: ?>
          <?php single_post_title() ?>
        <?php endif ?>
      </h1>
    </div>
  </header>

  <div class="l-blog__main">
    <div class="l-blog__main-inner">
      <?php if(have_posts()) : ?>
        <section class="l-blog__content">
          <ul class="l-blog__items">
            <?php while(have_posts()) : the_post(); ?>
              <li class="l-blog__item">
                <?php get_template_part('template-parts/post'); ?>
              </li>
            <?php endwhile; ?> 
          </ul>

          <div class="l-blog__pagination">
            <?php if(get_query_var('paged', 1) > 1) : ?>
              <div class="c-pagination">
                <?= margaux_paginate(); ?>
              </div>
            <?php elseif($nextPostLink = get_next_posts_link(__('Plus d\'articles +', 'margaux'))) : ?>
              <div class="c-button-square is-colored">
                <?= $nextPostLink; ?>
              </div>
            <?php endif; ?>
          </div>
        </section>
      <?php else : ?>
        <section class="l-blog__items-section">
          <p>
            0 articles
          </p>
        </section>
      <?php endif; ?>

      <aside class="l-blog__sidebar">
        Aside
      </aside>
    </div>
  </div>
</div>

<?php get_footer(); ?>