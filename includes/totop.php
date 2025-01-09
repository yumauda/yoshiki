<?php if (is_home() || is_front_page()) : ?>

<?php elseif (!is_page('search') && !is_page('contact')) : ?>
    <div class="p-totop">
        <a href="#" class="p-totop__link">
            <span class="p-totop__arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="13.033" height="12.385" viewBox="0 0 13.033 12.385">
                    <path d="M5.868,0,4.836,1.032,9.591,5.787H0V7.246H9.591L4.836,12l1.032,1.032,6.517-6.517Z" transform="translate(0 12.385) rotate(-90)" />
                </svg>
            </span>
            <p class="p-totop__text">TOP</p>
        </a>
    </div>
<?php elseif (is_page('search')) : ?>
    <div class="p-totop p-totop--search">
        <a href="#" class="p-totop__link">
            <span class="p-totop__arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="13.033" height="12.385" viewBox="0 0 13.033 12.385">
                    <path d="M5.868,0,4.836,1.032,9.591,5.787H0V7.246H9.591L4.836,12l1.032,1.032,6.517-6.517Z" transform="translate(0 12.385) rotate(-90)" />
                </svg>
            </span>
            <p class="p-totop__text">TOP</p>
        </a>
    </div>
<?php elseif (is_page('contact')) : ?>
    <div class="p-totop p-totop--contact">
        <a href="#" class="p-totop__link">
            <span class="p-totop__arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="13.033" height="12.385" viewBox="0 0 13.033 12.385">
                    <path d="M5.868,0,4.836,1.032,9.591,5.787H0V7.246H9.591L4.836,12l1.032,1.032,6.517-6.517Z" transform="translate(0 12.385) rotate(-90)" />
                </svg>
            </span>
            <p class="p-totop__text">TOP</p>
        </a>
    </div>
<?php endif; ?>