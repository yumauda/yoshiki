<?php get_header(); ?>
<main>
  <div class="p-mv">
    <div class="p-mv__img u-desktop">
      <video src="<?php echo get_template_directory_uri() ?>/images/common/mv_pc.mp4" preload="auto" playsinline autoplay muted loop></video>

    </div>
    <div class="p-mv__img u-mobile">
      <video src="<?php echo get_template_directory_uri() ?>/images/common/mv_sp.mp4" preload="auto" playsinline autoplay muted loop></video>
    </div>
  </div>
  <div class="p-swiper">
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <a href="<?php the_permalink() ?>" class="p-swiper__link">
            <figure class="p-swiper__img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/swiper_1.jpg" alt="<?php the_title(); ?>" width="750" height="390">
            </figure>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="<?php the_permalink() ?>" class="p-swiper__link">
            <figure class="p-swiper__img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/swiper_1.jpg" alt="<?php the_title(); ?>" width="750" height="390">
            </figure>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="<?php the_permalink() ?>" class="p-swiper__link">
            <figure class="p-swiper__img">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/swiper_1.jpg" alt="<?php the_title(); ?>" width="750" height="390">
            </figure>
          </a>
        </div>

      </div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

    </div>
  </div>
  <section class="p-top-news">
    <div class="l-inner">
      <div class="p-top-news__content">
        <div class="p-top-news__title">
          <h3 class="c-main-title">
            当教室からのお知らせ
          </h3>
        </div>
        <ul class="p-top-news__lists">
          <li class="p-top-news__list">
            <a href="<?php the_permalink(); ?>" class="p-top-news__link">
              <time datetime="2024-12-23" class="p-top-news__time">2024/9/23</time>
              <p class="p-top-news__text">
                テキストテキストテキストテキストテキストテキストテキストテキスト…
              </p>
            </a>
          </li>
          <li class="p-top-news__list">
            <a href="<?php the_permalink(); ?>" class="p-top-news__link">
              <time datetime="2024-12-23" class="p-top-news__time">2024.12.23</time>
              <p class="p-top-news__text">
                テキストテキストテキストテキストテキストテキストテキストテキスト…
              </p>
            </a>
          </li>
          <li class="p-top-news__list">
            <a href="<?php the_permalink(); ?>" class="p-top-news__link">
              <time datetime="2024-12-23" class="p-top-news__time">2024.12.23</time>
              <p class="p-top-news__text">
                テキストテキストテキストテキストテキストテキストテキストテキスト…
              </p>
            </a>
          </li>
          <li class="p-top-news__list">
            <a href="<?php the_permalink(); ?>" class="p-top-news__link">
              <time datetime="2024-12-23" class="p-top-news__time">2024.12.23</time>
              <p class="p-top-news__text">
                テキストテキストテキストテキストテキストテキストテキストテキスト…
              </p>
            </a>
          </li>
          <li class="p-top-news__list">
            <a href="<?php the_permalink(); ?>" class="p-top-news__link">
              <time datetime="2024-12-23" class="p-top-news__time">2024.12.23</time>
              <p class="p-top-news__text">
                テキストテキストテキストテキストテキストテキストテキストテキストテキスト…
              </p>
            </a>
          </li>
        </ul>
        <div class="p-top-news__btn-wrapper">
          <a href="#" class="p-top-news__btn">
            <p class="p-top-news__btn-text">お知らせ一覧を見る</p>
            <span class="p-top-news__bg">
              <svg xmlns="http://www.w3.org/2000/svg" width="12.385" height="13.033" viewBox="0 0 12.385 13.033">
                <path d="M5.868,0,4.836,1.032,9.591,5.787H0V7.246H9.591L4.836,12l1.032,1.032,6.517-6.517Z" transform="translate(0 0)" />
              </svg>
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="p-top-achieve">
    <div class="l-inner">
      <div class="p-top-achieve__content">
        <div class="p-top-achieve__title">
          <h3 class="c-main-title">
            合格指導実績
          </h3>
        </div>
        <div class="p-top-achieve__row">
          <div class="p-top-achieve__block">
            <h4 class="p-top-achieve__block-title">▼&emsp;大学受験&emsp;▼</h4>
            <div class="p-top-achieve__blockRow">
              <div class="p-top-achieve__univ">
                <p class="p-top-achieve__univ-title">国公立大学</p>
                <div class="p-top-achieve__univ-wrapper">
                  <div class="p-top-achieve__univ-row">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18.778" height="17.89" viewBox="0 0 18.778 17.89">
                      <defs>
                        <clipPath id="clip-path">
                          <rect width="18.778" height="17.89" fill="#d00303" />
                        </clipPath>
                      </defs>
                      <g transform="translate(0 0)" clip-path="url(#clip-path)">
                        <path d="M50.832,3.292A4.554,4.554,0,0,0,49.509.079a.332.332,0,0,0-.521.127c-.168.286-.631,1.006-.631,1.006a.307.307,0,0,1-.52,0s-.463-.72-.631-1.006a.332.332,0,0,0-.521-.127,4.57,4.57,0,0,0,1.412,7.4,4.572,4.572,0,0,0,2.734-4.186" transform="translate(-38.708 0)" fill="#d00303" />
                        <path d="M7.5,36.374a4.57,4.57,0,0,0-6.6-3.63.332.332,0,0,0-.04.535c.22.249.762.911.762.911a.307.307,0,0,1-.16.494s-.827.218-1.152.289a.332.332,0,0,0-.282.456,4.57,4.57,0,0,0,7.474.944" transform="translate(0 -27.523)" fill="#d00303" />
                        <path d="M19.119,76.637a4.553,4.553,0,0,0-.819,3.377.332.332,0,0,0,.5.2c.3-.133,1.1-.443,1.1-.443a.307.307,0,0,1,.42.306s-.048.854-.081,1.185a.332.332,0,0,0,.347.409,4.57,4.57,0,0,0,3.207-6.817,4.571,4.571,0,0,0-4.673,1.78" transform="translate(-15.57 -63.786)" fill="#d00303" />
                        <path d="M68.325,74.858a4.57,4.57,0,0,0,3.207,6.817.332.332,0,0,0,.347-.409c-.033-.331-.081-1.185-.081-1.185a.307.307,0,0,1,.42-.306s.8.31,1.1.443a.332.332,0,0,0,.5-.2,4.57,4.57,0,0,0-5.492-5.156" transform="translate(-57.769 -63.787)" fill="#d00303" />
                        <path d="M84.065,34.974c-.325-.071-1.152-.289-1.152-.289a.307.307,0,0,1-.161-.494s.541-.663.762-.911a.333.333,0,0,0-.04-.535,4.57,4.57,0,0,0-6.6,3.63,4.569,4.569,0,0,0,7.474-.944.332.332,0,0,0-.282-.456" transform="translate(-65.595 -27.523)" fill="#d00303" />
                      </g>
                    </svg>
                    <p class="p-top-achieve__name">神戸大学</p>
                  </div>
                  <div class="p-top-achieve__univ-row">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18.778" height="17.89" viewBox="0 0 18.778 17.89">
                      <defs>
                        <clipPath id="clip-path">
                          <rect width="18.778" height="17.89" fill="#d00303" />
                        </clipPath>
                      </defs>
                      <g transform="translate(0 0)" clip-path="url(#clip-path)">
                        <path d="M50.832,3.292A4.554,4.554,0,0,0,49.509.079a.332.332,0,0,0-.521.127c-.168.286-.631,1.006-.631,1.006a.307.307,0,0,1-.52,0s-.463-.72-.631-1.006a.332.332,0,0,0-.521-.127,4.57,4.57,0,0,0,1.412,7.4,4.572,4.572,0,0,0,2.734-4.186" transform="translate(-38.708 0)" fill="#d00303" />
                        <path d="M7.5,36.374a4.57,4.57,0,0,0-6.6-3.63.332.332,0,0,0-.04.535c.22.249.762.911.762.911a.307.307,0,0,1-.16.494s-.827.218-1.152.289a.332.332,0,0,0-.282.456,4.57,4.57,0,0,0,7.474.944" transform="translate(0 -27.523)" fill="#d00303" />
                        <path d="M19.119,76.637a4.553,4.553,0,0,0-.819,3.377.332.332,0,0,0,.5.2c.3-.133,1.1-.443,1.1-.443a.307.307,0,0,1,.42.306s-.048.854-.081,1.185a.332.332,0,0,0,.347.409,4.57,4.57,0,0,0,3.207-6.817,4.571,4.571,0,0,0-4.673,1.78" transform="translate(-15.57 -63.786)" fill="#d00303" />
                        <path d="M68.325,74.858a4.57,4.57,0,0,0,3.207,6.817.332.332,0,0,0,.347-.409c-.033-.331-.081-1.185-.081-1.185a.307.307,0,0,1,.42-.306s.8.31,1.1.443a.332.332,0,0,0,.5-.2,4.57,4.57,0,0,0-5.492-5.156" transform="translate(-57.769 -63.787)" fill="#d00303" />
                        <path d="M84.065,34.974c-.325-.071-1.152-.289-1.152-.289a.307.307,0,0,1-.161-.494s.541-.663.762-.911a.333.333,0,0,0-.04-.535,4.57,4.57,0,0,0-6.6,3.63,4.569,4.569,0,0,0,7.474-.944.332.332,0,0,0-.282-.456" transform="translate(-65.595 -27.523)" fill="#d00303" />
                      </g>
                    </svg>
                    <p class="p-top-achieve__name">滋賀大学</p>
                  </div>
                  <div class="p-top-achieve__univ-row">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18.778" height="17.89" viewBox="0 0 18.778 17.89">
                      <defs>
                        <clipPath id="clip-path">
                          <rect width="18.778" height="17.89" fill="#d00303" />
                        </clipPath>
                      </defs>
                      <g transform="translate(0 0)" clip-path="url(#clip-path)">
                        <path d="M50.832,3.292A4.554,4.554,0,0,0,49.509.079a.332.332,0,0,0-.521.127c-.168.286-.631,1.006-.631,1.006a.307.307,0,0,1-.52,0s-.463-.72-.631-1.006a.332.332,0,0,0-.521-.127,4.57,4.57,0,0,0,1.412,7.4,4.572,4.572,0,0,0,2.734-4.186" transform="translate(-38.708 0)" fill="#d00303" />
                        <path d="M7.5,36.374a4.57,4.57,0,0,0-6.6-3.63.332.332,0,0,0-.04.535c.22.249.762.911.762.911a.307.307,0,0,1-.16.494s-.827.218-1.152.289a.332.332,0,0,0-.282.456,4.57,4.57,0,0,0,7.474.944" transform="translate(0 -27.523)" fill="#d00303" />
                        <path d="M19.119,76.637a4.553,4.553,0,0,0-.819,3.377.332.332,0,0,0,.5.2c.3-.133,1.1-.443,1.1-.443a.307.307,0,0,1,.42.306s-.048.854-.081,1.185a.332.332,0,0,0,.347.409,4.57,4.57,0,0,0,3.207-6.817,4.571,4.571,0,0,0-4.673,1.78" transform="translate(-15.57 -63.786)" fill="#d00303" />
                        <path d="M68.325,74.858a4.57,4.57,0,0,0,3.207,6.817.332.332,0,0,0,.347-.409c-.033-.331-.081-1.185-.081-1.185a.307.307,0,0,1,.42-.306s.8.31,1.1.443a.332.332,0,0,0,.5-.2,4.57,4.57,0,0,0-5.492-5.156" transform="translate(-57.769 -63.787)" fill="#d00303" />
                        <path d="M84.065,34.974c-.325-.071-1.152-.289-1.152-.289a.307.307,0,0,1-.161-.494s.541-.663.762-.911a.333.333,0,0,0-.04-.535,4.57,4.57,0,0,0-6.6,3.63,4.569,4.569,0,0,0,7.474-.944.332.332,0,0,0-.282-.456" transform="translate(-65.595 -27.523)" fill="#d00303" />
                      </g>
                    </svg>
                    <p class="p-top-achieve__name">三重大学</p>
                  </div>
                  <p class="p-top-achieve__name">京都教育大学</p>
                  <p class="p-top-achieve__name">滋賀県立大学</p>
                  <p class="p-top-achieve__name">福井大学</p>
                  <p class="p-top-achieve__name">新潟大学</p>
                  <p class="p-top-achieve__name">高知大学</p>
                  <p class="p-top-achieve__name">広島県立大学</p>
                </div>
              </div>
              <div class="p-top-achieve__univ">
                <p class="p-top-achieve__univ-title">私立大学</p>
                <div class="p-top-achieve__univ-wrapper">
                  <p class="p-top-achieve__name">同志社大学</p>
                  <p class="p-top-achieve__name">立命館大学</p>
                  <p class="p-top-achieve__name">関西大学</p>
                  <p class="p-top-achieve__name">京都産業大学</p>
                  <p class="p-top-achieve__name">龍谷大学</p>
                  <p class="p-top-achieve__name">近畿大学</p>
                  <p class="p-top-achieve__name">京都薬科大学</p>
                  <p class="p-top-achieve__name">佛教大学</p>
                  <p class="p-top-achieve__name">京都橘大学</p>
                </div>
              </div>
            </div>
          </div>
          <div class="p-top-achieve__block">
            <h4 class="p-top-achieve__block-title">▼&emsp;高校受験&emsp;▼</h4>
            <div class="p-top-achieve__high">
              <div class="p-top-achieve__blockRow">
                <div class="p-top-achieve__univ">
                  <p class="p-top-achieve__univ-title">高校</p>
                  <div class="p-top-achieve__univ-wrapper">
                    <p class="p-top-achieve__name">神戸大学</p>
                    <p class="p-top-achieve__name">滋賀大学</p>
                    <p class="p-top-achieve__name">三重大学</p>
                    <p class="p-top-achieve__name">京都教育大学</p>
                    <p class="p-top-achieve__name">滋賀県立大学</p>
                    <p class="p-top-achieve__name">福井大学</p>
                    <p class="p-top-achieve__name">新潟大学</p>
                    <p class="p-top-achieve__name">高知大学</p>
                    <p class="p-top-achieve__name">広島県立大学</p>
                  </div>
                </div>
                <div class="p-top-achieve__univ">
                  <p class="p-top-achieve__univ-title">私立大学</p>
                  <div class="p-top-achieve__univ-wrapper">
                    <p class="p-top-achieve__name">同志社大学</p>
                    <p class="p-top-achieve__name">立命館大学</p>
                    <p class="p-top-achieve__name">関西大学</p>
                    <p class="p-top-achieve__name">京都産業大学</p>
                    <p class="p-top-achieve__name">龍谷大学</p>
                    <p class="p-top-achieve__name">近畿大学</p>
                    <p class="p-top-achieve__name">京都薬科大学</p>
                    <p class="p-top-achieve__name">佛教大学</p>
                    <p class="p-top-achieve__name">京都橘大学</p>
                  </div>
                </div>
              </div>
              <div class="p-top-achieve__univ">
                <p class="p-top-achieve__univ-title">高校専門学校</p>
                <div class="p-top-achieve__univ-wrapper">
                  <p class="p-top-achieve__name">鈴鹿高等専門学校</p>
                  <p class="p-top-achieve__name">舞鶴高等専門学校</p>
                  <p class="p-top-achieve__name">岐阜高等専門学校</p>
                  <p class="p-top-achieve__name">富山高等専門学校</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-top-choose">
    <div class="l-inner">
      <div class="p-top-choose__content">
        <div class="p-top-choose__title js-choose-title">
          <h3 class="c-main-title">
            小学校から高校まで<br class="u-mobile">一貫して通える
          </h3>
        </div>
        <ul class="p-top-choose__lists">
          <li class="p-top-choose__list js-choose-cards">

            <figure class="p-top-choose__img">
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/common/top_recruit_1.webp" media="(min-width: 768px)" width="350" height="350" />
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_recruit_1_sp.jpg" alt="小学生" width="350" height="190">
              </picture>
            </figure>
            <div class="p-top-choose__detail">
              <h4 class="p-top-choose__list-title">小学生</h4>
              <p class="p-top-choose__text">メリハリのある授業で楽しく成績アップ！</p>
              <div class="p-top-choose__btn-wrapper">
                <a href="#" class="p-top-choose__btn">詳しくはこちら</a>
              </div>
            </div>
          </li>
          <li class="p-top-choose__list js-choose-cards">
            <figure class="p-top-choose__img">
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/common/top_recruit_2.webp" media="(min-width: 768px)" width="350" height="350" />
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_recruit_2_sp.jpg" alt="中学生" width="350" height="190">
              </picture>
            </figure>
            <div class="p-top-choose__detail">
              <h4 class="p-top-choose__list-title">中学生</h4>
              <p class="p-top-choose__text">県内の中学校データや判断で適切な指導を</p>
              <div class="p-top-choose__btn-wrapper">
                <a href="#" class="p-top-choose__btn">詳しくはこちら</a>
              </div>
            </div>
          </li>
          <li class="p-top-choose__list js-choose-cards">
            <figure class="p-top-choose__img">
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/common/top_recruit_3.webp" media="(min-width: 768px)" width="350" height="350" />
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_recruit_3_sp.jpg" alt="高校生" width="350" height="190">
              </picture>
            </figure>
            <div class="p-top-choose__detail">
              <h4 class="p-top-choose__list-title">高校生</h4>
              <p class="p-top-choose__text">一人ひとりとじっくり向き合った進路指導を</p>
              <div class="p-top-choose__btn-wrapper">
                <a href="#" class="p-top-choose__btn">詳しくはこちら</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="p-top-room">
    <div class="l-inner">
      <div class="p-top-room__title js-room-title">
        <h3 class="c-main-title">教室を選ぶ</h3>
      </div>
      <div class="p-top-room__content">
        <ul class="p-top-room__lists">
          <li class="p-top-room__list js-room-cards">
            <a href="#" class="p-top-room__link">
              <figure class="p-top-room__img">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/top_room_1.jpg" media="(min-width: 768px)" width="1238" height="570" />
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_room_1_sp.jpg" alt="服部塾水口校" width="400" height="144">
                </picture>
              </figure>
              <p class="p-top-room__text">服部塾水口校</p>
            </a>
          </li>
          <li class="p-top-room__list js-room-cards">
            <a href="#" class="p-top-room__link">
              <figure class="p-top-room__img">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/top_room_2.jpg" media="(min-width: 768px)" width="1238" height="570" />
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_room_2_sp.jpg" alt="服部塾甲西駅前校" width="400" height="144">
                </picture>
              </figure>
              <p class="p-top-room__text">服部塾甲西駅前校</p>
            </a>
          </li>
          <li class="p-top-room__list js-room-cards">
            <a href="#" class="p-top-room__link">
              <figure class="p-top-room__img">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/top_room_3.jpg" media="(min-width: 768px)" width="1238" height="570" />
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_room_3_sp.jpg" alt="よしき塾日野校" width="400" height="144">
                </picture>
              </figure>
              <p class="p-top-room__text">よしき塾日野校</p>
            </a>
          </li>
          <li class="p-top-room__list js-room-cards">
            <a href="#" class="p-top-room__link">
              <figure class="p-top-room__img">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/top_room_4.jpg" media="(min-width: 768px)" width="1238" height="570" />
                  <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/common/top_room_4_sp.jpg" alt="服部塾甲南校" width="400" height="144">
                </picture>
              </figure>
              <p class="p-top-room__text">服部塾甲南校</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="p-top-recruit">
    <div class="l-inner">
      <div class="p-top-recruit__title js-recruit-title">
        <h3 class="c-main-title">
          求人情報
        </h3>
      </div>
      <div class="p-top-recruit__content">
        <div class="p-top-recruit__text-wrapper js-recruit-title">
          <p class="p-top-recruit__text">
            服部塾・よしき塾では一緒に働いて<br class="u-mobile">いただける方を<br class="u-desktop">
            随時募集しております。
          </p>
        </div>
        <div class="p-top-recruit__btn-wrapper js-recruit-title">
          <a href="tel:0748634588" class="p-top-recruit__btn">
            <div class="p-top-recruit__btn-row">
              <svg xmlns="http://www.w3.org/2000/svg" width="38.013" height="40.299">
                <defs>
                  <clipPath id="a">
                    <path d="M0 0h38.013v40.299H0z" />
                  </clipPath>
                </defs>
                <g clip-path="url(#a)">
                  <path d="M9.782 14.1a2.261 2.261 0 00-.164-2.979c-.778-.878-.347-1.307-.347-1.307l9.273-1.848 9.273-1.849s.562.231.181 1.34a2.258 2.258 0 00.992 2.815 29.135 29.135 0 006.869.7c1.605-.149 2.17-2.069 2.154-2.582S38.165 2.677 33 .951 21.644.2 17.174 1.094 6.609 3.458 2.5 7.031s-1.96 8.31-1.777 8.79 1.44 2.037 2.98 1.559a29.226 29.226 0 006.079-3.28" />
                  <path d="M20.827 32.075a5.271 5.271 0 10-3.729-1.543 5.244 5.244 0 003.729 1.543" />
                  <path d="M29.67 13.031a.9.9 0 00-.8-.484h-2.657a.6.6 0 00-.6.6v1.819a.6.6 0 01-.6.6h-8.37a.6.6 0 01-.6-.6v-1.817a.6.6 0 00-.6-.6h-2.664a.9.9 0 00-.8.484l-6.551 12.54a15.291 15.291 0 00-1.739 7.089v2.926a3 3 0 003 3h.751v1.71h3.057v-1.705h20.658v1.71h3.057v-1.71h.75a3 3 0 003-3V32.66a15.308 15.308 0 00-1.74-7.089zM12.588 26.802a8.239 8.239 0 118.239 8.238 8.241 8.241 0 01-8.239-8.238" />
                </g>
              </svg>
              <p class="p-top-recruit__num">0748-63-4588</p>
            </div>
            <p class="p-top-recruit__btn-bottom">詳細につきましてはお電話にてお問合せください</p>
          </a>
        </div>
      </div>
    </div>
  </section>
  <figure class="p-top-future js-top-future">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/top_future.png" media="(min-width: 768px)" width="1238" height="570" />
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/top_future_sp.png" alt="君の輝く未来はここから始まる" width="376" height="397">
    </picture>
  </figure>
</main>
<?php get_footer() ?>