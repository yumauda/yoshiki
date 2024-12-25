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
          <li class="p-news__list">
            <a href="<?php the_permalink(); ?>" class="p-news__link">
              <time datetime="2024-12-23" class="p-news__time">2024/9/23</time>
              <p class="p-news__text">
                テキストテキストテキストテキストテキストテキストテキストテキスト…
              </p>
            </a>
          </li>
          <li class="p-news__list">
            <a href="<?php the_permalink(); ?>" class="p-news__link">
              <time datetime="2024-12-23" class="p-news__time">2024.12.23</time>
              <p class="p-news__text">
                テキストテキストテキストテキストテキストテキストテキストテキスト…
              </p>
            </a>
          </li>
          <li class="p-news__list">
            <a href="<?php the_permalink(); ?>" class="p-news__link">
              <time datetime="2024-12-23" class="p-news__time">2024.12.23</time>
              <p class="p-news__text">
                テキストテキストテキストテキストテキストテキストテキストテキスト…
              </p>
            </a>
          </li>
          <li class="p-news__list">
            <a href="<?php the_permalink(); ?>" class="p-news__link">
              <time datetime="2024-12-23" class="p-news__time">2024.12.23</time>
              <p class="p-news__text">
                テキストテキストテキストテキストテキストテキストテキストテキスト…
              </p>
            </a>
          </li>
          <li class="p-news__list">
            <a href="<?php the_permalink(); ?>" class="p-news__link">
              <time datetime="2024-12-23" class="p-news__time">2024.12.23</time>
              <p class="p-news__text">
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト…
              </p>
            </a>
          </li>
          <li class="p-news__list">
            <a href="<?php the_permalink(); ?>" class="p-news__link">
              <time datetime="2024-12-23" class="p-news__time">2024.12.23</time>
              <p class="p-news__text">
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト…
              </p>
            </a>
          </li>
          <li class="p-news__list">
            <a href="<?php the_permalink(); ?>" class="p-news__link">
              <time datetime="2024-12-23" class="p-news__time">2024.12.23</time>
              <p class="p-news__text">
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト…
              </p>
            </a>
          </li>
          <li class="p-news__list">
            <a href="<?php the_permalink(); ?>" class="p-news__link">
              <time datetime="2024-12-23" class="p-news__time">2024.12.23</time>
              <p class="p-news__text">
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト…
              </p>
            </a>
          </li>
          <li class="p-news__list">
            <a href="<?php the_permalink(); ?>" class="p-news__link">
              <time datetime="2024-12-23" class="p-news__time">2024.12.23</time>
              <p class="p-news__text">
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト…
              </p>
            </a>
          </li>
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
              <li class="p-pagination__number">
                <a href="#" class="p-pagination__num">4</a>
              </li>
              <li class="p-pagination__number">
                <a href="#" class="p-pagination__num">5</a>
              </li>
              <li class="p-pagination__number">
                <a href="#" class="p-pagination__num">6</a>
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



</main>
<?php get_footer() ?>