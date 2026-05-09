<?php
/**
 * Search results template.
 *
 * @package DriseBranding
 */

get_header();
get_template_part('template-parts/section-breadcrumb');
?>
<section class="page-hero">
    <div class="page-hero__inner">
        <p class="eyebrow">Search</p>
        <h1>検索結果: <?php echo esc_html(get_search_query()); ?></h1>
        <p>ブログ、実績、お客様の声、インタビューから該当する情報を探します。</p>
    </div>
</section>
<section class="section">
    <div class="section__inner">
        <?php get_search_form(); ?>
        <?php if (have_posts()) : ?>
            <div class="post-grid u-mt-32">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post-card">
                        <a href="<?php the_permalink(); ?>">
                            <div class="post-card__body">
                                <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 56)); ?></p>
                            </div>
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p class="u-mt-32">該当する記事は見つかりませんでした。別のキーワードで検索してください。</p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
