<?php
/**
 * Footer template.
 *
 * @package DriseBranding
 */
?>
</main>
<?php
if (!is_page('contact') && !is_page('free-mail-course')) {
    get_template_part('template-parts/section-cta', null, [
        'title' => '想いと価値を、次に選ばれるブランドへ。',
        'lead'  => 'まずは無料7日間メール講座、または無料相談から。押し売りではなく、今必要な一歩を一緒に整理します。',
    ]);
}
?>
<footer class="site-footer">
    <div class="site-footer__inner">
        <div class="footer-company">
            <a class="site-brand site-brand--footer" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/smb-logo.jpg')); ?>" alt="潜在魅力ブランディング® ロゴ" width="56" height="56" loading="lazy">
                <span>
                    <strong>株式会社ディーアンドライズ</strong>
                    <small>潜在魅力ブランディング®</small>
                </span>
            </a>
            <p>〒230-0051 神奈川県横浜市鶴見区鶴見中央4-9-17<br>
                TEL <a href="tel:0456424617">045-642-4617</a> / FAX 045-642-4607</p>
            <p class="footer-tagline">自分価値を活かした人生の本質をデザインする</p>
        </div>
        <nav class="footer-nav" aria-label="フッターナビゲーション">
            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'container'      => false,
                'fallback_cb'    => static function () {
                    drise_fallback_nav('footer');
                },
                'items_wrap'     => '<ul class="nav-menu">%3$s</ul>',
            ]);
            ?>
        </nav>
        <div class="footer-search">
            <h2>サイト内検索</h2>
            <?php get_search_form(); ?>
            <div class="sns-links" aria-label="SNSリンク">
                <a href="#" aria-label="Facebook">Facebook</a>
                <a href="#" aria-label="YouTube">YouTube</a>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <small>&copy; <?php echo esc_html(date_i18n('Y')); ?> D&Rise Inc. All Rights Reserved.</small>
    </div>
</footer>
<div class="fixed-mobile-cta" aria-label="固定CTA">
    <a href="<?php echo esc_url(home_url('/free-mail-course/')); ?>">無料メール講座</a>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
</div>
<?php wp_footer(); ?>
</body>
</html>
