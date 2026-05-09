<?php
/**
 * Achievement list component.
 *
 * @package DriseBranding
 */

$achievements = $args['items'] ?? [
    'ロレアル',
    'デビアス',
    'ダイアナ',
    'お茶の水女子大学',
    'セシール',
    '女性モード社',
    'DONQ',
    '株式会社バイタルエリア',
];
?>
<div class="achievement-list" aria-label="主な実績">
    <?php foreach ($achievements as $achievement) : ?>
        <span><?php echo esc_html($achievement); ?></span>
    <?php endforeach; ?>
</div>
