<?php
/**
 * Single post template.
 *
 * @package DriseBranding
 */

get_header();
get_template_part('template-parts/section-breadcrumb');
?>
<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <section class="page-hero">
            <div class="page-hero__inner">
                <p class="eyebrow"><?php echo esc_html(get_post_type_object(get_post_type())->labels->singular_name ?? 'Article'); ?></p>
                <h1><?php the_title(); ?></h1>
                <p><?php echo esc_html(get_the_date()); ?></p>
            </div>
        </section>
        <?php if (has_post_thumbnail()) : ?>
            <div class="section__inner u-mt-40">
                <?php the_post_thumbnail('drise-hero', ['alt' => the_title_attribute(['echo' => false]), 'loading' => 'eager']); ?>
            </div>
        <?php endif; ?>
        <section class="section">
            <div class="section__inner">
                <?php the_content(); ?>
                <div class="section-actions">
                    <a class="button button--ghost" href="<?php echo esc_url(home_url('/')); ?>">トップへ戻る</a>
                </div>
            </div>
        </section>
    </article>
<?php endwhile; ?>
<?php
get_footer();
