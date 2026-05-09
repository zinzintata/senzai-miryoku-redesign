<?php
/**
 * Breadcrumb component.
 *
 * @package DriseBranding
 */

if (is_front_page()) {
    return;
}
?>
<nav class="breadcrumb" aria-label="パンくずリスト">
    <div class="breadcrumb__inner">
        <span><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></span>
        <span><?php echo esc_html(drise_page_data()['title']); ?></span>
    </div>
</nav>
