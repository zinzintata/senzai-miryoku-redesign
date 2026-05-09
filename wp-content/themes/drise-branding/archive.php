<?php
/**
 * Archive template.
 *
 * @package DriseBranding
 */

get_header();
get_template_part('template-parts/section-breadcrumb');
?>
<section class="page-hero">
    <div class="page-hero__inner">
        <p class="eyebrow">Archive</p>
        <h1><?php the_archive_title(); ?></h1>
        <?php if (get_the_archive_description()) : ?>
            <p><?php echo wp_kses_post(get_the_archive_description()); ?></p>
        <?php endif; ?>
    </div>
</section>
<section class="section">
    <div class="section__inner">
        <?php if (have_posts()) : ?>
            <div class="post-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post-card">
                        <a href="<?php the_permalink(); ?>">
                            <div class="post-card__media">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('drise-card', ['alt' => the_title_attribute(['echo' => false])]); ?>
                                <?php endif; ?>
                            </div>
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
            <p>投稿はまだありません。</p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
