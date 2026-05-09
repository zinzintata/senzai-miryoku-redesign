<?php
/**
 * Brand cards component.
 *
 * @package DriseBranding
 */

$brands = [
    [
        'class'  => 'brand-card--necco',
        'logo'   => 'necco-logo.jpg',
        'label'  => 'Design Strategy',
        'title'  => 'NECCO BRANDING JAPAN',
        'lead'   => '想いと生き様から尖った価値を発掘し、ストーリー、デザイン、商品コンセプトへ落とし込む戦略室。',
        'target' => '独自メソッドやこだわり商品を持つ職人型経営者へ。',
        'url'    => home_url('/necco-branding.j/'),
    ],
    [
        'class'  => 'brand-card--smb',
        'logo'   => 'smb-logo.jpg',
        'label'  => 'Small Branding',
        'title'  => 'SMB 潜在魅力ブランディング®',
        'lead'   => 'SNS投稿に追われず、濃いお客様に価値で選ばれるための全体設計とコンサルティング。',
        'target' => '40代後半・50代以上の先生業、講師、指導者へ。',
        'url'    => home_url('/academia/'),
    ],
    [
        'class'  => 'brand-card--spiral',
        'logo'   => 'spiral-logo.jpg',
        'label'  => 'Self Management',
        'title'  => 'SPIRAL management',
        'lead'   => '時間、感情、内的質問の3つのマネジメントで、滞りをほどき成果へ向かう土台を整える。',
        'target' => '人生とビジネスの転換期にいる経営者、起業家へ。',
        'url'    => home_url('/spiral-management/'),
    ],
];
?>
<div class="grid grid--3">
    <?php foreach ($brands as $brand) : ?>
        <article class="brand-card <?php echo esc_attr($brand['class']); ?>">
            <div class="brand-card__media">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/' . $brand['logo'])); ?>" alt="<?php echo esc_attr($brand['title']); ?> ロゴ" loading="lazy" width="108" height="108">
            </div>
            <div class="brand-card__body">
                <span class="brand-card__kicker"><?php echo esc_html($brand['label']); ?></span>
                <h3><?php echo esc_html($brand['title']); ?></h3>
                <p><?php echo esc_html($brand['lead']); ?></p>
                <p><strong><?php echo esc_html($brand['target']); ?></strong></p>
                <div class="section-actions">
                    <a class="button button--primary" href="<?php echo esc_url($brand['url']); ?>">詳しく見る</a>
                </div>
            </div>
        </article>
    <?php endforeach; ?>
</div>
