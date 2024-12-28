<?php get_header(); ?>
<main>
  <section class="p-news">
    <div class="p-news__breadcrumbs">
      <?php get_template_part('includes/breadcrumbs'); ?>
    </div>
    <div class="l-inner">
      <div class="p-news__content">
        <div class="p-news__title">
          <h3 class="c-main-title">
            当教室からのお知らせ
          </h3>
        </div>
        <ul class="p-news__lists">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
              <?php the_post(); ?>
              <li class="p-news__list">
                <a href="<?php the_permalink(); ?>" class="p-news__link">
                  <time datetime="<?php the_time('Y-m-d'); ?>" class="p-news__time"><?php the_time('Y/m/d'); ?></time>
                  <p class="p-news__text">
                    <?php echo wp_trim_words(get_the_title(), 40, '...'); ?>
                  </p>
                </a>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <div class="p-news__pagination">
          <div class="p-pagination">
            <ul class="p-pagination__lists">
              <li class="p-pagination__list p-pagination__list--prev">
                <a href="#" class="p-pagination__prev">
                  <svg xmlns="http://www.w3.org/2000/svg" width="5" height="7.809" viewBox="0 0 5 7.809">
                    <path d="M1.1,0,0,1.1,2.809,3.9,0,6.714l1.1,1.1L5,3.9Z" transform="translate(5 7.809) rotate(180)" />
                  </svg>
                  <p class="p-pagination__text">prev</p>
                </a>
              </li>
              <li class="p-pagination__number">
                <a href="#" class="p-pagination__num p-pagination__num--current">1</a>
              </li>
              <li class="p-pagination__number">
                <a href="#" class="p-pagination__num">2</a>
              </li>
              <li class="p-pagination__number">
                <a href="#" class="p-pagination__num">3</a>
              </li>

              <li class="p-pagination__list p-pagination__list--next">
                <a href="#" class="p-pagination__prev">
                  <p class="p-pagination__text">next</p>
                  <svg xmlns="http://www.w3.org/2000/svg" width="5" height="7.809" viewBox="0 0 5 7.809">
                    <path d="M1.1,0,0,1.1,2.809,3.9,0,6.714l1.1,1.1L5,3.9Z" transform="translate(0 0)" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>
  <?php get_template_part('includes/totop'); ?>
</main>
<?php get_footer() ?>