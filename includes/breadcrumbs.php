<?php if (is_front_page()) : ?>

<?php elseif (is_page('search')) : ?>
    <ul class="p-breadcrumbs">
        <li class="p-breadcrumbs__list">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-breadcrumbs__link">
                トップ
            </a>
        </li>
        <li class="p-breadcrumbs__list">
            <span class="p-breadcrumbs__line">/</span>
        </li>
        <li class="p-breadcrumbs__list">
            <p class="p-breadcrumbs__now">
                教室を探す
            </p>
        </li>
    </ul>
<?php elseif (is_page('feature')) : ?>
    <ul class="p-breadcrumbs">
        <li class="p-breadcrumbs__list">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-breadcrumbs__link">
                トップ
            </a>
        </li>
        <li class="p-breadcrumbs__list">
            <span class="p-breadcrumbs__line">/</span>
        </li>
        <li class="p-breadcrumbs__list">
            <p class="p-breadcrumbs__now">
                服部塾・よしき塾の特長
            </p>
        </li>
    </ul>
<?php elseif (is_home()) : ?>
    <ul class="p-breadcrumbs">
        <li class="p-breadcrumbs__list">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-breadcrumbs__link">
                トップ
            </a>
        </li>
        <li class="p-breadcrumbs__list">
            <span class="p-breadcrumbs__line">/</span>
        </li>
        <li class="p-breadcrumbs__list">
            <p class="p-breadcrumbs__now">
                お知らせ一覧
            </p>
        </li>
    </ul>
<?php elseif (is_single()) : ?>
    <ul class="p-breadcrumbs">
        <li class="p-breadcrumbs__list">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-breadcrumbs__link">
                トップ
            </a>
        </li>
        <li class="p-breadcrumbs__list">
            <span class="p-breadcrumbs__line">/</span>
        </li>
        <li class="p-breadcrumbs__list">
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-breadcrumbs__link">
                お知らせ一覧
            </a>
        </li>
        <li class="p-breadcrumbs__list">
            <span class="p-breadcrumbs__line">/</span>
        </li>
        <li class="p-breadcrumbs__list">
            <p class="p-breadcrumbs__now">
                <?php the_title(); ?>
            </p>
        </li>
    </ul>
<?php elseif (is_page('course')) : ?>
    <ul class="p-breadcrumbs">
        <li class="p-breadcrumbs__list">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-breadcrumbs__link">
                トップ
            </a>
        </li>
        <li class="p-breadcrumbs__list">
            <span class="p-breadcrumbs__line">/</span>
        </li>
        <li class="p-breadcrumbs__list">
            <p class="p-breadcrumbs__now">
                各コースの料金と詳細
            </p>
        </li>
    </ul>
<?php elseif (is_page('privacy')) : ?>
    <ul class="p-breadcrumbs">
        <li class="p-breadcrumbs__list">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-breadcrumbs__link">
                トップ
            </a>
        </li>
        <li class="p-breadcrumbs__list">
            <span class="p-breadcrumbs__line">/</span>
        </li>
        <li class="p-breadcrumbs__list">
            <p class="p-breadcrumbs__now">
                プライバシーポリシー
            </p>
        </li>
    </ul>
<?php elseif (is_page((array('confirm-customer', 'confirm-company')))) : ?>

<?php elseif (is_post_type_archive('product')) : ?>

<?php elseif (is_page('thanks')) : ?>
    <ul class="p-breadcrumbs">
        <li class="p-breadcrumbs__list">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-breadcrumbs__link">
                トップ
            </a>
        </li>
        <li class="p-breadcrumbs__list">
            <span class="p-breadcrumbs__line">/</span>
        </li>
        <li class="p-breadcrumbs__list">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-breadcrumbs__link">
                お問い合わせフォーム
            </a>
        </li>
        <li class="p-breadcrumbs__list">
            <span class="p-breadcrumbs__line">/</span>
        </li>
        <li class="p-breadcrumbs__list">
            <p class="p-breadcrumbs__now">
                送信しました
            </p>
        </li>
    </ul>
<?php endif; ?>