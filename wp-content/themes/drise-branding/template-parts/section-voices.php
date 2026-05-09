<?php
/**
 * Voice cards component.
 *
 * @package DriseBranding
 */

$voices = $args['voices'] ?? [
    [
        'title' => 'お客様の声 表示枠',
        'body'  => 'ここには実在するお客様の感想、変化、選んだ理由を登録します。仮文は公開前に必ず差し替えてください。',
        'cite'  => 'カスタム投稿 voice',
    ],
    [
        'title' => '動画インタビュー 表示枠',
        'body'  => 'YouTube埋め込み、要約テキスト、肩書きを組み合わせて掲載できます。',
        'cite'  => 'interview投稿',
    ],
    [
        'title' => '実績ストーリー 表示枠',
        'body'  => '成果だけでなく、価値発掘からブランド導線が整うまでの流れを掲載します。',
        'cite'  => 'works投稿',
    ],
];
?>
<div class="grid grid--3">
    <?php foreach ($voices as $voice) : ?>
        <article class="voice-card">
            <h3><?php echo esc_html($voice['title']); ?></h3>
            <p><?php echo esc_html($voice['body']); ?></p>
            <cite><?php echo esc_html($voice['cite']); ?></cite>
        </article>
    <?php endforeach; ?>
</div>
