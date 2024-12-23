<?php if (is_home() || is_front_page()) : ?>

<?php elseif (is_page('search')) : ?>
    <ul class="p-breadcrumbs">
        <li class="p-breadcrumbs__list">
            <a href="<?php echo home_url(); ?>" class="p-breadcrumbs__link">
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
<?php elseif (is_page('privacy')) : ?>
    <ul class="p-breadcrumbs">
        <li class="p-breadcrumbs__list">
            <a href="<?php echo home_url(); ?>" class="p-breadcrumbs__link">
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
            <a href="<?php echo home_url(); ?>" class="p-breadcrumbs__link">
                トップ
            </a>
        </li>
        <li class="p-breadcrumbs__list">
            <span class="p-breadcrumbs__line">/</span>
        </li>
        <li class="p-breadcrumbs__list">
            <a href="<?php echo home_url(); ?>" class="p-breadcrumbs__link">
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