<?php
/**
 * CTA banner component.
 *
 * @package DriseBranding
 */

$title = $args['title'] ?? '無料7日間メール講座から、ブランドの土台を整える。';
$lead  = $args['lead'] ?? '高単価でも選ばれる独自ブランドをつくる7つの秘密を、メール講座でお届けします。';
?>
<section class="cta-section" aria-labelledby="cta-title">
    <div class="cta-section__inner">
        <div>
            <p class="eyebrow">Next action</p>
            <h2 id="cta-title"><?php echo esc_html($title); ?></h2>
            <p><?php echo esc_html($lead); ?></p>
        </div>
        <div class="cta-actions">
            <a class="button button--light" href="<?php echo esc_url(home_url('/free-mail-course/')); ?>">無料7日間メール講座に登録する</a>
            <a class="button button--coral" href="<?php echo esc_url(home_url('/contact/')); ?>">無料相談する</a>
        </div>
    </div>
</section>
