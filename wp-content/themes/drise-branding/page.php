<?php
/**
 * Default page template.
 *
 * @package DriseBranding
 */

get_header();
get_template_part('template-parts/section-breadcrumb');
?>
<section class="page-hero">
    <div class="page-hero__inner">
        <p class="eyebrow">Page</p>
        <h1><?php the_title(); ?></h1>
        <?php if (has_excerpt()) : ?>
            <p><?php echo esc_html(get_the_excerpt()); ?></p>
        <?php endif; ?>
    </div>
</section>
<section class="section">
    <div class="section__inner">
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</section>
<?php
get_footer();
