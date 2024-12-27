<?php get_header(); ?>
<main>
  <section class="p-contact">
    <div class="p-contact__breadcrumbs">
      <?php get_template_part('includes/breadcrumbs'); ?>
    </div>
    <div class="l-inner">
      <div class="p-contact__content">
        <div class="p-contact__title">
          <h2 class="c-main-title">送信確認</h2>
        </div>
        
        <?php the_content(); ?>
      </div>
    </div>
  </section>


</main>
<?php get_footer() ?>