<?php get_header(); ?>
<main>
  <section class="p-single">
    <?php get_template_part('includes/breadcrumbs'); ?>
    <div class="l-inner">
      <div class="p-single__breadcrumbs">
      </div>
      <div class="p-single__content">
        <div class="p-single__top">
          <time datetime="<?php the_time('Y-m-d'); ?>" class="p-single__time">
            <?php the_time('Y/m/d'); ?>
          </time>
          <div class="p-single__title-wrapper">
            <h2 class="p-single__title">
              <?php the_title(); ?>
            </h2>
          </div>
        </div>
        <div class="p-single__block">
          <?php the_content(); ?>
        </div>
        <div class="p-single__bottom">
          <ul class="p-single__lists">
            <li class="p-single__list">
              <a href="#" class="p-single__prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="7.809" viewBox="0 0 5 7.809">
                  <path d="M1.1,0,0,1.1,2.809,3.9,0,6.714l1.1,1.1L5,3.9Z" transform="translate(5 7.809) rotate(180)" />
                </svg>
                <p class="p-single__prev-text">
                  prev
                </p>

              </a>
            </li>
            <li class="p-single__list">
              <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-single__link">一覧へ戻る</a>
            </li>
            <li class="p-single__list">
              <a href="#" class="p-single__prev">
                <p class="p-single__prev-text">
                  next
                </p>
                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="7.809" viewBox="0 0 5 7.809">
                  <path d="M1.1,0,0,1.1,2.809,3.9,0,6.714l1.1,1.1L5,3.9Z" transform="translate(0 0)" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('includes/totop'); ?>


</main>
<?php get_footer() ?>