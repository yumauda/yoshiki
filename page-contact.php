<?php get_header(); ?>
<main>
  <section class="p-contact">
    <div class="p-contact__breadcrumbs">
      <?php get_template_part('includes/breadcrumbs'); ?>
    </div>
    <div class="l-inner">
      <div class="p-contact__content">
        <div class="p-contact__title">
          <h2 class="c-main-title">お問い合わせ</h2>
        </div>
        <div class="p-contact__attention">
          <p class="p-contact__attention-text">無料体験をお申し込みの方は、<br class="u-mobile">お問い合わせフォームの<br class="u-desktop">
            お問い合わせ項目より<br class="u-mobile">「無料体験申し込み」をお選びください。</p>
        </div>
        <?php the_content(); ?>
      </div>
    </div>
  </section>
  <section class="p-line">
    <div class="l-inner">
      <div class="p-line__content">
        <div class="p-line__row">
          <div class="p-line__block">
            <div class="p-line__title-wrapper">
              <h3 class="p-line__title">LINEにてお問い合わせ</h3>
            </div>
            <div class="p-line__text-wrapper">
              <p class="p-line__text">LINEからのお問い合わせも受け付けております。<br>
                お気軽にお問い合わせください。</p>
            </div>
          </div>
          <ul class="p-line__lists">
            <li class="p-line__list">
              <a href="#" class="p-line__link">
                <div class="p-line__icon">
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/line_icon.svg" alt="LINE" width="26" height="25">
                </div>
                <div class="p-line__link-textWrapper">
                  <p class="p-line__link-text">服部塾 水口校</p>
                  <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10.523" viewBox="0 0 10 10.523">
                    <path d="M4.738,0,3.9.833,7.744,4.673H0V5.851H7.744L3.9,9.69l.833.833L10,5.262Z" transform="translate(0 0)" fill="#70c55e" />
                  </svg>
                </div>
              </a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>