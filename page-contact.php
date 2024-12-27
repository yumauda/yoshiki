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
</main>
<?php get_footer() ?>