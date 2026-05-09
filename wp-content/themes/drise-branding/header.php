<?php
/**
 * Header template.
 *
 * @package DriseBranding
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main">本文へ移動</a>
<header class="site-header" data-site-header>
    <div class="site-header__inner">
        <a class="site-brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="潜在魅力ブランディング トップへ">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/smb-logo.jpg')); ?>" alt="潜在魅力ブランディング® ロゴ" width="52" height="52">
            <?php endif; ?>
            <span>
                <strong>潜在魅力ブランディング®</strong>
                <small>D&Rise / Essential Design</small>
            </span>
        </a>

        <button class="nav-toggle" type="button" aria-label="メニューを開閉する" aria-expanded="false" aria-controls="primary-nav" data-nav-toggle>
            <span></span><span></span><span></span>
        </button>

        <nav id="primary-nav" class="primary-nav" aria-label="グローバルナビゲーション" data-primary-nav>
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => 'drise_fallback_nav',
                'items_wrap'     => '<ul class="nav-menu">%3$s</ul>',
            ]);
            ?>
        </nav>

        <div class="header-actions">
            <a class="button button--ghost" href="<?php echo esc_url(home_url('/contact/')); ?>">無料相談</a>
            <a class="button button--primary" href="<?php echo esc_url(home_url('/free-mail-course/')); ?>">7日間メール講座</a>
        </div>
    </div>
</header>
<main id="main" class="site-main">
