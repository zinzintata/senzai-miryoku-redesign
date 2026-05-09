<?php
/**
 * FAQ accordion component.
 *
 * @package DriseBranding
 */

$context = $args['context'] ?? (is_page() ? (string) get_post_field('post_name', get_queried_object_id()) : '');
$faqs = $args['faqs'] ?? drise_faq_items($context);
?>
<div class="faq-list">
    <?php foreach ($faqs as $index => $faq) : ?>
        <div class="faq-item" data-faq-item>
            <button class="faq-question" type="button" id="faq-q-<?php echo esc_attr((string) $index); ?>" aria-expanded="false" aria-controls="faq-a-<?php echo esc_attr((string) $index); ?>" data-faq-trigger>
                <?php echo esc_html($faq['q']); ?>
            </button>
            <div class="faq-answer" id="faq-a-<?php echo esc_attr((string) $index); ?>" role="region" aria-labelledby="faq-q-<?php echo esc_attr((string) $index); ?>">
                <p><?php echo esc_html($faq['a']); ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
