<?php get_header(); ?>
<main>
  <section class="p-course">
    <?php get_template_part('includes/breadcrumbs'); ?>
    <div class="l-inner">
      <div class="p-course__title">
        <h2 class="c-main-title">
          各コースの料金と詳細
        </h2>
        <p class="p-course__sub">週1回1科目から受講OK<br>自習室も利用可能</p>
      </div>
      <div class="p-course__content">
        <ul class="p-course__pageLinks">
          <li class="p-course__pageLink">
            <a href="" class="p-course__pageLink-link">
              <figure class="p-course__linkImg">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/course_link_1_pc.jpg" media="(min-width: 768px)" width="130" height="130" />
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/course_link_1_sp.jpg" alt="小学生コース" width="100" height="70">
                </picture>
              </figure>
              <div class="p-course__linkText">
                <p class="p-course__linkTitle">
                  小学生コース
                </p>
                <svg xmlns="http://www.w3.org/2000/svg" width="15.618" height="10" viewBox="0 0 15.618 10">
                  <path d="M2.191,0,0,2.191,5.618,7.809,0,13.427l2.191,2.191L10,7.809Z" transform="translate(15.618 0) rotate(90)" />
                </svg>
              </div>
            </a>
          </li>
          <li class="p-course__pageLink">
            <a href="" class="p-course__pageLink-link">
              <figure class="p-course__linkImg">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/course_link_2_pc.jpg" media="(min-width: 768px)" width="130" height="130" />
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/course_link_2_sp.jpg" alt="中学生コース" width="100" height="70">
                </picture>
              </figure>
              <div class="p-course__linkText">
                <p class="p-course__linkTitle">
                  中学生コース
                </p>
                <svg xmlns="http://www.w3.org/2000/svg" width="15.618" height="10" viewBox="0 0 15.618 10">
                  <path d="M2.191,0,0,2.191,5.618,7.809,0,13.427l2.191,2.191L10,7.809Z" transform="translate(15.618 0) rotate(90)" />
                </svg>
              </div>
            </a>
          </li>
          <li class="p-course__pageLink">
            <a href="" class="p-course__pageLink-link">
              <figure class="p-course__linkImg">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/course_link_3_pc.jpg" media="(min-width: 768px)" width="130" height="130" />
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/course_link_3_sp.jpg" alt="高校生コース" width="100" height="70">
                </picture>
              </figure>
              <div class="p-course__linkText">
                <p class="p-course__linkTitle">
                  高校生コース
                </p>
                <svg xmlns="http://www.w3.org/2000/svg" width="15.618" height="10" viewBox="0 0 15.618 10">
                  <path d="M2.191,0,0,2.191,5.618,7.809,0,13.427l2.191,2.191L10,7.809Z" transform="translate(15.618 0) rotate(90)" />
                </svg>
              </div>
            </a>
          </li>
        </ul>
        <div class="p-course__block p-school">
          <div class="p-school__title-wrapper">
            <div class="p-school__icon">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/girl_1.svg" alt="" width="431" height="38">
            </div>
            <h3 class="p-school__title">
              小学生コース
            </h3>
            <div class="p-school__icon">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/boy_1.svg" alt="" width="431" height="38">
            </div>
          </div>
          <div class="p-school__detail">
            <div class="p-detail">
              <div class="p-detail__title-wrapper">
                <p class="p-detail__title">小学生コースの詳細</p>
              </div>
              <div class="p-detail__slider">
                <!-- Slider main container -->
                <div class="swiper swiper-detail">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                      <figure class="p-detail__img">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/course_swiper1.jpg" alt="小6数コース" width="250" height="175">
                      </figure>
                      <div class="p-detail__block">
                        <p class="p-detail__title">小６算数コース</p>
                        <p class="p-detail__text">小学校の”算数”は中学校の”数学”の基礎となるので、小学校の算数ができないと中学校の「数学」を理解することが難しくなってしまいます。服部塾・よしき塾の小６算数コースでは、中学校の数学にスムーズに対応できるように、教科書内容の予習だけでなく小学算数の重要事項（計算や文章問題）の復習にも力を入れています。</p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <figure class="p-detail__img">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/course_swiper2.jpg" alt="小6英語コース" width="250" height="175">
                      </figure>
                      <div class="p-detail__block">
                        <p class="p-detail__title">小６英語コース</p>
                        <p class="p-detail__text">小学校で学習する英語と中学校で学習する英語には大きな違いがあることをご存知でしょうか。小学校の英語は”聞く”ことと”話す”ことが中心ですが、中学校の英語は”読む”ことと”書く”ことが中心です。したがって、小学校では英語ができたのに、中学校では英語が全くできなくなるという生徒がたくさんいます。服部塾・よしき塾の小６英語コースでは、”読む”ことと”書く”ことに重点を置いて指導し、中学校で英語につまずかないように授業します。</p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <figure class="p-detail__img">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/course_swiper3.jpg" alt="小６県立中受験コース" width="250" height="175">
                      </figure>
                      <div class="p-detail__block">
                        <p class="p-detail__title">小６県立中受験コース</p>
                        <p class="p-detail__text">水口東中や守山中などの県立中受検対応のコースです。週２回の授業で適性検査対策と作文の指導を行います。受検前には過去問の演習だけでなく面接練習も行い、合格を目指します。</p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <figure class="p-detail__img">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/course_swiper4.jpg" alt="個別指導コース" width="250" height="175">
                      </figure>
                      <div class="p-detail__block">
                        <p class="p-detail__title">個別指導コース</p>
                        <p class="p-detail__text">小学校の進度に合わせた予習型の授業や、中学受験対策の授業など、さまざまなニーズにお応えします。強化担当制で原則１つの教科は同じ講師が担当します。</p>
                      </div>
                    </div>
                  </div>

                  <!-- If we need navigation buttons -->
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-flow">
    <div class="l-inner">
      <div class="p-flow__content">
        <div class="p-flow__title">
          <h2 class="c-main-title">
            入塾の流れ
          </h2>
        </div>
        <ul class="p-flow__lists">
          <li class="p-flow__list">
            <figure class="p-flow__img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/flow_img1.png" alt="お問い合わせ" width="150" height="150">
            </figure>
            <div class="p-flow__detail">
              <h3 class="p-flow__subTitle">お問い合わせ</h3>
              <p class="p-flow__text">お電話、LINE、お問い合わせフォームよりご希望の内容を入力しお問い合わせください。</p>
            </div>
          </li>
          <li class="p-flow__list">
            <figure class="p-flow__img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/flow_img2.png" alt="体験授業" width="150" height="150">
            </figure>
            <div class="p-flow__detail">
              <h3 class="p-flow__subTitle">体験授業</h3>
              <p class="p-flow__text">集団指導、個別指導共に体験授業を実施しています。塾の雰囲気や授業スピード、教え方などをご理解いただくためにも、積極的な参加をおすすめしています。</p>
            </div>
          </li>
          <li class="p-flow__list">
            <figure class="p-flow__img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/flow_img3.png" alt="説明" width="150" height="150">
            </figure>
            <div class="p-flow__detail">
              <h3 class="p-flow__subTitle">説明</h3>
              <p class="p-flow__text">服部塾の教育方針やカリキュラム、料金などについてご説明いたします。</p>
            </div>
          </li>
          <li class="p-flow__list">
            <figure class="p-flow__img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/flow_img4.png" alt="入塾" width="150" height="150">
            </figure>
            <div class="p-flow__detail">
              <h3 class="p-flow__subTitle">入塾</h3>
              <p class="p-flow__text">目標達成に向けて授業がスタート。教室全体でお子さまの成長を全力でサポートします。</p>
            </div>
          </li>
        </ul>
        <div class="p-flow__bottom">
          <p class="p-flow__bottom-text">※上記の流れは一例です。<br>
            「まず、説明を聞きたい」「兄弟姉妹が通っているため、体験授業や説明は不要」など、<br>
            お問い合わせの際にご要望をお聞かせください。</p>
        </div>
      </div>
    </div>
  </section>


</main>
<?php get_footer() ?>