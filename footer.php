<?php if (is_page('contact')) : ?>
    <div class="p-top-contact__wrapper">
        <figure class="p-top-contact">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/contact_bottom.png" media="(min-width: 768px)" width="1238" height="570" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/contact_bottom_sp.png" alt="君の輝く未来はここから始まる" width="376" height="397">
            </picture>
        </figure>
        <div class="p-totop--sp">
            <a href="#" class="p-totop__link">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/back_top.svg" alt="トップへ戻る" width="100" height="100">
            </a>
        </div>
    </div>
<?php endif; ?>
<footer class="l-footer p-footer p-footer--down">
    <?php if (!is_front_page() && !is_page('search') && !is_page('contact')) : ?>
        <div class="p-top-future__wrapper">
            <figure class="p-top-future">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/footer_top.png" media="(min-width: 768px)" width="1440" height="196" />
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_top_sp.png" alt="" width="375" height="95">
                </picture>
            </figure>
            <div class="p-totop--sp">
                <a href="#" class="p-totop__link">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/back_top.svg" alt="トップへ戻る" width="100" height="100">
                </a>
            </div>
        </div>

    <?php endif; ?>
    <?php if (is_page('search')) : ?>
        <div class="p-top-search__wrapper">
            <figure class="p-top-future">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/top_future_search.png" media="(min-width: 768px)" width="1238" height="570" />
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/top_future_sp_search.png" alt="君の輝く未来はここから始まる" width="376" height="397">
                </picture>
            </figure>
            <div class="p-totop--sp">
                <a href="#" class="p-totop__link">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/back_top.svg" alt="トップへ戻る" width="100" height="100">
                </a>
            </div>
        </div>
    <?php endif; ?>

    <div class="l-inner">

        <div class="p-footer__content">
            <figure class="p-footer__img">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/footer_logo_pc.png" media="(min-width: 768px)" width="394" height="86" />
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_logo_sp.png" alt="" width="230" height="65">
                </picture>
            </figure>
            <div class="p-footer__block">
                <div class="p-footer__address-wrapper">
                    <p class="p-footer__address">〒528-0035&emsp;<br class="u-mobile">滋賀県甲賀市水口町名坂3166-8</p>
                </div>
                <div class="p-footer__tel">
                    <a href="tel:0748634588" class="p-footer__tel-link">
                        <div class="p-footer__tel-logo">
                            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/footer_tel.svg" alt="" width="38" height="40">
                        </div>
                        <p class="p-footer__number">0748-63-4588</p>
                    </a>
                    <p class="p-footer__time">受付時間：月曜～土曜&emsp;13:30～22:00まで</p>
                </div>
                <ul class="p-footer__icon-lists">
                    <li class="p-footer__icon-list">
                        <a href="https://www.instagram.com/hattorijuku_yoshikijuku/?igsh=MTJyc2hjdHp4eGVtcQ%3D%3D" class="p-footer__icon-link" target="_blank" rel="noopener noreferrer">
                            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/footer_instagram.png" alt="インスタグラム" width="30" height="30">
                        </a>
                    </li>
                    <li class="p-footer__icon-list">
                        <span class="p-footer__icon-link p-footer__icon-link--youtube">
                            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/footer_youtube.svg" alt="youtube" width="31" height="23">
                        </span>
                    </li>
                    <li class="p-footer__icon-list">
                        <a href="https://line.me/ti/p/nuQmi74uC_" class="p-footer__icon-link" target="_blank" rel="noopener noreferrer">
                            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/footer_line.svg" alt="line" width="30" height="30">
                        </a>
                    </li>
                </ul>
                <ul class="p-footer__lists">
                    <li class="p-footer__list">
                        <a href="<?php echo esc_url(home_url('/feature')); ?>" class="p-footer__link">服部塾・よしき塾の特長</a>
                    </li>
                    <li class="p-footer__list">
                        <span class="p-footer__line">｜</span>
                    </li>
                    <li class="p-footer__list">
                        <a href="<?php echo esc_url(home_url('/course')); ?>" class="p-footer__link">各コースの料金と詳細</a>
                    </li>
                    <li class="p-footer__list">
                        <span class="p-footer__line">｜</span>
                    </li>
                    <li class="p-footer__list">
                        <a href="<?php echo esc_url(home_url('/search')); ?>" class="p-footer__link">教室を探す</a>
                    </li>
                    <li class="p-footer__list">
                        <span class="p-footer__line">｜</span>
                    </li>
                    <li class="p-footer__list">
                        <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-footer__link">お知らせ</a>
                    </li>
                    <li class="p-footer__list">
                        <span class="p-footer__line">｜</span>
                    </li>
                    <li class="p-footer__list">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-footer__link">お問い合わせ</a>
                    </li>
                </ul>
                <div class="p-footer__small">
                    <small>＠2024 hattorijyuku.yoshikijyuku.</small>
                    <a href="<?php echo esc_url(home_url('/privacy')); ?>" class="p-footer__privacy">PRIVACY POLICY</a>
                </div>
            </div>
        </div>
    </div>
    <?php if (!is_page('contact')) : ?>
        <?php get_template_part('includes/floating'); ?>
    <?php endif; ?>
</footer>
<?php wp_footer(); ?>
</body>

</html>