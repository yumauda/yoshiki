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
        <div class="p-form">
          <div class="p-form__row">
            <div class="p-form__dt-wrapper">
              <p class="p-form__dt">企業名</p>
              <p class="p-form__any">任意</p>
            </div>
            <div class="p-form__description">
              <div class="p-form__description">
                [text* your-company placeholder "朝日自動車第一株式会社"]
              </div>
            </div>
          </div>
          <div class="p-form__row">
            <div class="p-form__dt-wrapper">
              <p class="p-form__dt">氏名（ご担当者名）</p>
              <p class="p-form__need">必須</p>
            </div>
            <div class="p-form__description">
              <div class="p-form__description">
                [text* your-name placeholder "朝日 太郎"]
              </div>
            </div>
          </div>
          <div class="p-form__row">
            <div class="p-form__dt-wrapper">
              <p class="p-form__dt">電話番号</p>
              <p class="p-form__need">必須</p>
            </div>
            <p class="p-form__small">※半角数字ハイフンなし</p>
            <div class="p-form__description">[tel* your-tel placeholder "08012345678"]</div>
          </div>
          <div class="p-form__row">
            <div class="p-form__dt-wrapper">
              <p class="p-form__dt">メールアドレス</p>
              <p class="p-form__need">必須</p>
            </div>
            <p class="p-form__small">※半角英数字</p>
            <div class="p-form__description">[email* your-email placeholder "sample@ibi.co.jp"]</div>
          </div>

          <div class="p-form__row p-form__row--mt">

            <div class="p-form__dt-container">
              <div class="p-form__dt-wrapper">
                <p class="p-form__dt">郵便番号</p>
                <p class="p-form__any">任意</p>
              </div>
              <p class="p-form__small">※半角数字ハイフンなし</p>
            </div>
            <div class="p-form__description p-form__description--postal">
              <p>[text* zipcode1 id:zipcode1 placeholder "0000000"]</p>
            </div>
          </div>

          <div class="p-form__row">
            <div class="p-form__dt-wrapper">
              <p class="p-form__dt">住所</p>
              <p class="p-form__any">任意</p>
            </div>
            <div class="p-form__description">[text* address1 id:address1 placeholder "大阪府大阪市住之江区新北島8-2-70"]</div>
          </div>
          <div class="p-form__row">
            <div class="p-form__dt-wrapper">
              <p class="p-form__dt">お問い合わせ内容</p>
              <p class="p-form__need">必須</p>
            </div>
            <div class="p-form__description">[textarea* your-question placeholder "入力してください"]</div>
          </div>
          <div class="p-form__row">
            <div class="p-form__dt-wrapper">
              <p class="p-form__dt">プライバシーポリシー</p>
              <p class="p-form__need">必須</p>
            </div>
            <div class="p-form__privacy">[acceptance acceptance-723 class:p-form__privacyText]<a href="/privacy" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a>に同意する[/acceptance]<p class="p-form__privacy-small">※必ずプライバシーポリシーをご一読ください。</p>
            </div>
          </div>
          <div class="p-form__btn-wrapper p-form__btn-wrapper--red">
            [submit class:p-form__btn--red class:p-form__btn "送信する"][multistep your-next first_step "/contact/confirm"]
            <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_949_819)">
                <path d="M13 6C9.23828 6 2.84084 3.77555 0 0C0.466341 1.81804 0.727551 3.8525 0.727551 6C0.727551 8.1475 0.466341 10.182 0 12C2.84084 8.22445 9.23828 6 13 6Z" fill="#9D8B5D" />
              </g>
              <defs>
                <clipPath id="clip0_949_819">
                  <rect width="13" height="12" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>


</main>
<?php get_footer() ?>