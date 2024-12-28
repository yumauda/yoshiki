<?php get_header(); ?>
<main>
  <section class="p-thanks">
    <div class="p-thanks__breadcrumbs">
      <?php get_template_part('includes/breadcrumbs'); ?>
    </div>
    <div class="l-inner">
      <div class="p-thanks__content">
        <div class="p-thanks__title">
          <h2 class="c-main-title">送信しました</h2>
        </div>
        <div class="p-thanks__block">
          <div class="p-thanks__text-wrapper">
            <p class="p-thanks__text">お問い合わせありがとうございます。<br>
              お送り頂きました内容を確認の上、<br class="u-mobile">一週間以内に折り返しご連絡させて頂きます。<br>
              また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。</p>
            <p class="p-thanks__text">しばらく経ってもメールが届かない場合は、<br class="u-mobile">入力頂いたメールアドレスが間違っているか、<br>
              迷惑メールフォルダに振り分けられている<br class="u-mobile">可能性がございます。<br>
              また、ドメイン指定をされている場合は、<br>
              「@XXXX.com」からのメールが受信できるよう<br class="u-mobile">あらかじめ設定をお願いいたします。</p>
          </div>
          <div class="p-thanks__btn-wrapper">
            <a href="<?php echo home_url(); ?>" class="p-thanks__btn">
              トップへ戻る
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('includes/totop'); ?>


</main>
<?php get_footer() ?>