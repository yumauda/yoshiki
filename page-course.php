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
              小学生
            </h3>
            <div class="p-school__icon">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/boy_1.svg" alt="" width="431" height="38">
            </div>
          </div>
          <div class="p-school__table">
            <div class="p-school__table-course">
              <h4 class="p-school__table-title">集団授業コース</h4>
              <table class="p-table">
                <tbody>
                  <tr>
                    <td class="p-table__text">1教科</td>
                    <td class="p-table__text">2教科</td>
                  </tr>
                  <tr>
                    <td class="p-table__text">
                      <p class="p-table__detail-text">週1回60分</p>
                      <p class="p-table__detail-text p-table__detail-text--red"><span>5,500</span>円/月</p>
                      <p class="p-table__detail-text p-table__detail-text--red">(税込)</p>
                    </td>
                    <td class="p-table__text">
                      <p class="p-table__detail-text">週1回60分</p>
                      <p class="p-table__detail-text p-table__detail-text--red"><span>5,500</span>円/月</p>
                      <p class="p-table__detail-text p-table__detail-text--red">(税込)</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-table__text" colspan="2">小６算数・小６英語</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="p-school__table-course">
              <h4 class="p-school__table-title">小6県立中受験コース</h4>
              <table class="p-table p-table--secondary">
                <tbody>
                  <tr>
                    <td class="p-table__text">各2教科</td>
                  </tr>
                  <tr>
                    <td class="p-table__text">
                      <p class="p-table__detail-text">週1回60分</p>
                      <p class="p-table__detail-text p-table__detail-text--red"><span>5,500</span>円/月</p>
                      <p class="p-table__detail-text p-table__detail-text--red">(税込)</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-table__text">適性検査・作文</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="p-school__table-course">
              <h4 class="p-school__table-title">個別指導コース</h4>
              <table class="p-table">
                <tbody>
                  <tr>
                    <td class="p-table__text">1教科</td>
                    <td class="p-table__text">2教科</td>
                  </tr>
                  <tr>
                    <td class="p-table__text">
                      <p class="p-table__detail-text">週1回60分</p>
                      <p class="p-table__detail-text p-table__detail-text--red"><span>5,500</span>円/月</p>
                      <p class="p-table__detail-text p-table__detail-text--red">(税込)</p>
                    </td>
                    <td class="p-table__text">
                      <p class="p-table__detail-text">週1回60分</p>
                      <p class="p-table__detail-text p-table__detail-text--red"><span>5,500</span>円/月</p>
                      <p class="p-table__detail-text p-table__detail-text--red">(税込)</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-table__text" colspan="2">小６算数・小６英語</td>
                  </tr>
                </tbody>
              </table>
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
        <div class="p-school">
          <div class="p-school__title-wrapper">
            <div class="p-school__icon">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/girl_2.svg" alt="" width="431" height="38">
            </div>
            <h3 class="p-school__title">
              中学生
            </h3>
            <div class="p-school__icon">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/boy_2.svg" alt="" width="431" height="38">
            </div>
          </div>
          <div class="p-school__detail">
            <div class="p-detail">
              <div class="p-detail__title-wrapper">
                <p class="p-detail__title">中学生コースの詳細</p>
              </div>
              <div class="p-school__table p-school__table--high">
                <div class="p-table-high">
                  <div class="p-table-high__row">
                    <div class="p-table-high__table-wrapper">
                      <h4 class="p-table-high__title p-table-high__title--middle">集団授業コース</h4>

                      <table class="p-table-high__table p-table-high__table--pc">
                        <tbody>
                          <tr>
                            <td class="p-table-high__text" colspan="4">高３・高卒</td>
                          </tr>
                          <tr>
                            <td class="p-table-high__text">1教科</td>
                            <td class="p-table-high__text">2教科</td>
                            <td class="p-table-high__text">3教科</td>
                            <td class="p-table-high__text">3教科</td>
                          </tr>
                          <tr>
                            <td class="p-table-high__text h135">
                              <p class="p-table-high__detail-text">週1回90分</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>9,900</span>円/月</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                            </td>
                            <td class="p-table-high__text h135">
                              <p class="p-table-high__detail-text">各教科につき<br>週1回90分</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>14,300</span>円/月</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                            </td>
                            <td class="p-table-high__text h135">
                              <p class="p-table-high__detail-text">各教科につき<br>週1回90分</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>17,600</span>円/月</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                            </td>
                            <td class="p-table-high__text h135">
                              <p class="p-table-high__detail-text">各教科につき<br>週1回90分</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>19,800</span>円/月</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                            </td>
                          </tr>
                          <tr>
                            <td class="p-table-high__text" colspan="4">
                              <p class="p-table-high__detail-text">英語・数学・理科・国社</p>
                              <p class="p-table-high__detail-text--smallRed">※理科のみ週1回60分</p>
                              <p class="p-table-high__detail-text--smallRed">※中学1年生の開講教科は数学・英語のみです。（テスト対策は5教科行います。）</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="p-table-high__table p-table-high__table--sp">
                        <tbody>
                          <tr>
                            <td class="p-table-high__text">1教科</td>
                            <td class="p-table-high__text">2教科</td>

                          </tr>
                          <tr>
                            <td class="p-table-high__text">
                              <p class="p-table-high__detail-text">各教科につき<br>週1回90分</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>14,300</span>円/月</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                            </td>
                            <td class="p-table-high__text">
                              <p class="p-table-high__detail-text">各教科につき<br>週1回90分</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>14,300</span>円/月</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                            </td>
                          </tr>
                          <tr>
                            <td class="p-table-high__text">3教科</td>
                            <td class="p-table-high__text">4教科</td>
                          </tr>
                          <tr>
                            <td class="p-table-high__text">
                              <p class="p-table-high__detail-text">各教科につき<br>週1回90分</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>14,300</span>円/月</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                            </td>
                            <td class="p-table-high__text">
                              <p class="p-table-high__detail-text">各教科につき<br>週1回90分</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>14,300</span>円/月</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                            </td>
                          </tr>
                          <tr>
                            <td class="p-table-high__text" colspan="2">
                              <p class="p-table-high__detail-text">英語・数学・理科・国社</p>
                              <p class="p-table-high__detail-text--smallRed">※理科のみ週1回60分</p>
                              <p class="p-table-high__detail-text--smallRed">※中学1年生の開講教科は数学・英語のみです。（テスト対策は5教科行います。）</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="p-table-high__table-wrapper">
                      <h4 class="p-table-high__title p-table-high__title--middle">個別指導コース</h4>
                      <table class="p-table-high__table">
                        <tbody>
                          <tr>
                            <td class="p-table-high__text" colspan="2">高1、高2</td>
                          </tr>
                          <tr>
                            <td class="p-table-high__text">1教科</td>
                            <td class="p-table-high__text">2教科</td>
                          </tr>
                          <tr>
                            <td class="p-table-high__text h135">
                              <p class="p-table-high__detail-text">週1回90分</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>13,200</span>円/月</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                            </td>
                            <td class="p-table-high__text h135">
                              <p class="p-table-high__detail-text">各教科につき<br>各週1回90分</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>17,600</span>円/月</p>
                              <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                            </td>
                          </tr>
                          <tr>
                            <td class="p-table-high__text" colspan="2">
                              <p class="p-table-high__detail-text">英語・算数・国語・社会・理科</p>
                              <p class="p-table-high__detail-text--small">※上記以外の教科は応相談</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>

              </div>
              <div class="p-detail__slider p-detail__slider--secondary">
                <!-- Slider main container -->
                <div class="swiper swiper-detail">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper swiper-wrapper--secondary">
                    <!-- Slides -->
                    <div class="swiper-slide">
                      <figure class="p-detail__img">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/course_swiper5.jpg" alt="小6数コース" width="250" height="175">
                      </figure>
                      <div class="p-detail__block">
                        <p class="p-detail__title">集団指導コース</p>
                        <p class="p-detail__text">各教科別に行う予習型の授業です。中学校の進度を確認しながら、ポイントをおさえて分かりやすく丁寧に指導します。学校の授業内容を十分理解することで、高校入試に向けた内申点（成績）の向上を目指します。</p>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <figure class="p-detail__img">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/course_swiper6.jpg" alt="小６県立中受験コース" width="250" height="175">
                      </figure>
                      <div class="p-detail__block">
                        <p class="p-detail__title">無料のテスト対策</p>
                        <p class="p-detail__text">定期テスト前の休日には、無料のテスト対策授業（集団授業）を受けていただくことができます。テスト対策授業ではテスト頻出の重要単元の復習や過去問の演習を行い、高得点を目指します。個別指導コースを受講の方も集団授業のテスト対策に無料でご参加いただけます。</p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <figure class="p-detail__img">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/course_swiper7.jpg" alt="個別指導コース" width="250" height="175">
                      </figure>
                      <div class="p-detail__block">
                        <p class="p-detail__title">個別指導コース</p>
                        <p class="p-detail__text">中学校の進度に合わせた予習型の授業や、苦手教科を克服するための授業、高校入試に向けた過去問の演習授業など、さまざまなニーズにお応えします。集団授業との併用も可能なので、集団授業で学校の予習、個別指導で苦手分野の復習といった受講の仕方も可能です。（教科担当制）</p>
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
        <div class="p-school">
          <div class="p-school__title-wrapper">
            <div class="p-school__icon">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/girl_3.svg" alt="" width="431" height="38">
            </div>
            <h3 class="p-school__title">
              高校生
            </h3>
            <div class="p-school__icon">
              <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/boy_3.svg" alt="" width="431" height="38">
            </div>
          </div>
          <div class="p-school__table p-school__table--high">
            <div class="p-table-high">
              <h4 class="p-table-high__title">集団授業コース</h4>
              <div class="p-table-high__row">
                <div class="p-table-high__table-wrapper">
                  <table class="p-table-high__table">
                    <tbody>
                      <tr>
                        <td class="p-table-high__text" colspan="2">高1、高2</td>
                      </tr>
                      <tr>
                        <td class="p-table-high__text">1教科</td>
                        <td class="p-table-high__text">2教科</td>
                      </tr>
                      <tr>
                        <td class="p-table-high__text h135">
                          <p class="p-table-high__detail-text">週1回90分</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>13,200</span>円/月</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                        </td>
                        <td class="p-table-high__text h135">
                          <p class="p-table-high__detail-text">各教科につき<br>各週1回90分</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>17,600</span>円/月</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="p-table-high__text" colspan="2">
                          <p class="p-table-high__detail-text">数学・英語</p>
                          <p class="p-table-high__detail-text--small">※水口校・甲西駅前校で開講</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="p-table-high__table-wrapper">
                  <table class="p-table-high__table">
                    <tbody>
                      <tr>
                        <td class="p-table-high__text" colspan="3">高３・高卒</td>
                      </tr>
                      <tr>
                        <td class="p-table-high__text">1教科</td>
                        <td class="p-table-high__text">2教科</td>
                        <td class="p-table-high__text">3教科</td>
                      </tr>
                      <tr>
                        <td class="p-table-high__text h135">
                          <p class="p-table-high__detail-text">週1回90分</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>15,400</span>円/月</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                        </td>
                        <td class="p-table-high__text h135">
                          <p class="p-table-high__detail-text">週1回90分につき</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>27,500</span>円/月</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                        </td>
                        <td class="p-table-high__text h135">
                          <p class="p-table-high__detail-text">週1回90分につき</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>35,200</span>円/月</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="p-table-high__text" colspan="3">
                          <p class="p-table-high__detail-text">週1回60分</p>
                          <p class="p-table-high__detail-text--small">※水口校・甲西駅前校で開講</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
            <div class="p-table-high">
              <h4 class="p-table-high__title">個別授業コース</h4>
              <div class="p-table-high__row">
                <div class="p-table-high__table-wrapper">
                  <table class="p-table-high__table">
                    <tbody>
                      <tr>
                        <td class="p-table-high__text" colspan="2">高1、高2</td>
                      </tr>
                      <tr>
                        <td class="p-table-high__text">1教科</td>
                        <td class="p-table-high__text">2教科</td>
                      </tr>
                      <tr>
                        <td class="p-table-high__text h135">
                          <p class="p-table-high__detail-text">週1回90分</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>17,600</span>円/月</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                        </td>
                        <td class="p-table-high__text h135">
                          <p class="p-table-high__detail-text">各教科につき<br>各週1回90分</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>34,100</span>円/月</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="p-table-high__text" colspan="2">
                          <p class="p-table-high__detail-text">数学・国語・英語</p>
                          <p class="p-table-high__detail-text--small">※上記以外の教科は応相談</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="p-table-high__table-wrapper">
                  <table class="p-table-high__table">
                    <tbody>
                      <tr>
                        <td class="p-table-high__text" colspan="2">高３・高卒</td>
                      </tr>
                      <tr>
                        <td class="p-table-high__text">1教科</td>
                        <td class="p-table-high__text">2教科</td>
                      </tr>
                      <tr>
                        <td class="p-table-high__text h135">
                          <p class="p-table-high__detail-text">週1回90分</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>18,700</span>円/月</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                        </td>
                        <td class="p-table-high__text h135">
                          <p class="p-table-high__detail-text">各教科につき<br>週1回90分</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red"><span>37,400</span>円/月</p>
                          <p class="p-table-high__detail-text p-table-high__detail-text--red">(税込)</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="p-table-high__text" colspan="2">
                          <p class="p-table-high__detail-text">数学・国語・英語</p>
                          <p class="p-table-high__detail-text--small">※上記以外の教科は応相談</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>


          </div>
          <div class="p-school__detail">
            <div class="p-detail">
              <div class="p-detail__title-wrapper">
                <p class="p-detail__title">高校生コースの詳細</p>
              </div>
              <div class="p-detail__slider">
                <!-- Slider main container -->
                <div class="swiper swiper-detail">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                      <figure class="p-detail__img">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/course_swiper8.jpg" alt="小6数コース" width="250" height="175">
                      </figure>
                      <div class="p-detail__block">
                        <p class="p-detail__title">集団指導コース（高１・高２）</p>
                        <p class="p-detail__text">高校で習う内容をより深く理解することはもちろん、大学入試を念頭に数学と英語の授業を行います。数学では定期テストだけでなく大学入試頻出の重要単元の演習を、英語は高２から共通テストや大学入試の過去問の演習にも取り組むことで、高３生になる前から受験に向けたアドバンテージをつくります。<br>また、定期テスト前には無料でテスト対策授業も行います。</p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <figure class="p-detail__img">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/course_swiper9.jpg" alt="小6英語コース" width="250" height="175">
                      </figure>
                      <div class="p-detail__block">
                        <p class="p-detail__title">集団指導コース（高３・高卒）</p>
                        <p class="p-detail__text">大学入試共通テストや私立大学入試対策の授業を行います。大学入試に精通した精鋭の講師による、最新の入試問題の傾向をふまえた授業で志望校合格を目指します。映像授業ではなくライブ授業なので映像を見ながら寝てしまったり、分からないところが質問できなかったり、といったことはありません。</p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <figure class="p-detail__img">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/course_swiper10.jpg" alt="小６県立中受験コース" width="250" height="175">
                      </figure>
                      <div class="p-detail__block">
                        <p class="p-detail__title">個別指導コース</p>
                        <p class="p-detail__text">高校の進度に合わせた授業や、大学入試に受けた過去問の演習など、さまざまなニーズにお応えします。授業では問題の解説だけでなく、定期テストや大学入試に向けた日頃の勉強法などのアドバイスもさせていただきます。</p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <figure class="p-detail__img">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/course_swiper11.jpg" alt="個別指導コース" width="250" height="175">
                      </figure>
                      <div class="p-detail__block">
                        <p class="p-detail__title">土日も使える自習室</p>
                        <p class="p-detail__text">水口校・甲西駅前校は土日も自習室が使えます。「家では集中できない」「一人だとなかなか自分から勉強できない」といった生徒さんからも好評です。主な大学の赤本も揃っており、コピー機も使えるなど勉強できる環境が整っています。</p>
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