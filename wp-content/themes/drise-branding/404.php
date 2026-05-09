<?php
/**
 * 404 template.
 *
 * @package DriseBranding
 */

get_header();
?>
<section class="section not-found">
    <div class="section__inner split">
        <div>
            <p class="eyebrow">404</p>
            <h1 class="archive-title">お探しのページが見つかりませんでした。</h1>
            <p class="section-lead">URLが変更された可能性があります。既存URLを守る設計にしていますが、公開前にリダイレクト設定を必ず確認してください。</p>
            <div class="section-actions">
                <a class="button button--primary" href="<?php echo esc_url(home_url('/')); ?>">トップへ戻る</a>
                <a class="button button--ghost" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
            </div>
        </div>
        <div class="panel">
            <h2>サイト内検索</h2>
            <?php get_search_form(); ?>
        </div>
    </div>
</section>
<?php
get_footer();
