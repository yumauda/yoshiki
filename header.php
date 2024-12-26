<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <?php if (is_home() || is_front_page()) : ?>
        <title>よしき塾</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" />
    <?php elseif (is_page('adult')) : ?>
        <title>大人の矯正・成人矯正｜大倉山ファミリア矯正歯科（横浜市港北区）</title>
        <meta name="description" content="横浜市港北区大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザライン)なども子供から大人まで安心の定額制です。" />
        <meta name="keywords" content="矯正歯科,港北区,大倉山" />
        <meta property="og:title" content="大人の矯正｜大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://familiar-kyousei.com/adult">
        <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />
        <meta property="og:site_name" content="大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:description" content="横浜市大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザラン)なども子供から大人まで安心の定額制です。" />
    <?php elseif (is_page((array('contact', 'confirm')))) : ?>
        <title>お問い合わせ｜大倉山ファミリア矯正歯科（横浜市港北区）</title>
        <meta name="description" content="横浜市港北区大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザライン)なども子供から大人まで安心の定額制です。" />
        <meta name="keywords" content="矯正歯科,港北区,大倉山" />
        <meta property="og:title" content="お問い合わせ｜大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://familiar-kyousei.com/contact">
        <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />
        <meta property="og:site_name" content="大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:description" content="横浜市大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザラン)なども子供から大人まで安心の定額制です。" />
    <?php elseif (is_page('thanks')) : ?>
        <title>送信完了｜大倉山ファミリア矯正歯科（横浜市港北区）</title>
        <meta name="description" content="横浜市港北区大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザライン)なども子供から大人まで安心の定額制です。" />
        <meta name="keywords" content="矯正歯科,港北区,大倉山" />
        <meta property="og:title" content="送信完了｜大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://familiar-kyousei.com/thanks">
        <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />
        <meta property="og:site_name" content="大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:description" content="横浜市大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザラン)なども子供から大人まで安心の定額制です。" />
    <?php elseif (is_single()) : ?>
        <title><?php the_title() ?>｜大倉山ファミリア矯正歯科（横浜市港北区）</title>
        <meta name="description" content="横浜市港北区大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザライン)なども子供から大人まで安心の定額制です。" />
        <meta name="keywords" content="矯正歯科,港北区,大倉山" />
        <meta property="og:title" content="<?php the_title() ?>｜大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://familiar-kyousei.com/adult">
        <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg" />
        <meta property="og:site_name" content="大倉山ファミリア矯正歯科（横浜市港北区）" />
        <meta property="og:description" content="横浜市大倉山の、痛くない・目立たない矯正専門歯科。マウスピース矯正(インビザラン)なども子供から大人まで安心の定額制です。" />

    <?php endif; ?>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri() ?>/images/common/ogp.jpg">

    <!-- ogp -->
    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/common/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/images/common/apple-touch-icon.png">
    <!-- css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;600&family=Urbanist:wght@400;500;600&display=swap" rel="stylesheet">
    <?php if (is_404()) : ?>
        <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("/")); ?>">
    <?php endif; ?>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header class="p-header">
        <div class="p-header__inner">
            <div class="p-header__content">
                <h1 class="p-header__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__home">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/header_logo.svg" alt="服部塾よしき塾" width="212" height="35">
                    </a>
                </h1>
                <nav class="p-header__nav">
                    <ul class="p-header__lists">
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__link">
                                トップページ
                            </a>
                        </li>
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/feature')); ?>" class="p-header__link">
                                服部塾・よしき塾の特長
                            </a>
                        </li>
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/course')); ?>" class="p-header__link">
                                各コースの料金と詳細
                            </a>
                        </li>
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-header__link">
                                お知らせ
                            </a>
                        </li>
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-header__link">
                                お問い合わせ
                            </a>
                        </li>
                        <li class="p-header__list">
                            <a href="<?php echo esc_url(home_url('/search')); ?>" class="p-header__link--btn">
                                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/header_btn.png" alt="教室を探す" width="270" height="80">
                            </a>
                        </li>
                    </ul>
                </nav>
                <button class="p-header__drawer p-drawer-icon">
                    <span class="p-drawer-icon__bars">
                        <span class="p-drawer-icon__bar1"></span>
                        <span class="p-drawer-icon__bar2"></span>
                        <span class="p-drawer-icon__bar3"></span>
                        <span class="p-drawer-icon__text">メニュー</span>
                    </span>
                </button>
                <div class="p-header__drawer-content p-drawer-content">
                    <div class="p-drawer-content__items">
                        <ul class="p-drawer-content__lists">
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="p-drawer-content__link">トップページ</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/about')); ?>" class="p-drawer-content__link">服部塾・よしき塾の特長</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/business')); ?>" class="p-drawer-content__link">各コースの料金と詳細</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/talent')); ?>" class="p-drawer-content__link">教室を探す</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-drawer-content__link">お知らせ</a>
                            </li>
                            <li class="p-drawer-content__list">
                                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-drawer-content__link">お問い合わせ</a>
                            </li>
                        </ul>
                        <figure class="p-drawer-content__img">
                            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/common/drawer_bottom.png" alt="この塾に通ってよかった。そう思ってもらえる塾です。" width="431" height="38">
                        </figure>
                    </div>
                </div>
                
            </div>
        </div>
    </header>