<?php
/**
 * D&Rise Branding theme functions.
 *
 * @package DriseBranding
 */

if (!defined('ABSPATH')) {
    exit;
}

define('DRISE_BRANDING_VERSION', '1.0.0');

function drise_theme_setup(): void
{
    load_theme_textdomain('drise-branding', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('custom-logo', [
        'height'      => 120,
        'width'       => 360,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('responsive-embeds');

    register_nav_menus([
        'primary' => 'グローバルナビゲーション',
        'footer'  => 'フッターナビゲーション',
    ]);

    add_image_size('drise-card', 720, 480, true);
    add_image_size('drise-hero', 1800, 1100, true);
}
add_action('after_setup_theme', 'drise_theme_setup');

function drise_asset_version(string $relative_path): string
{
    $path = get_theme_file_path($relative_path);
    return file_exists($path) ? (string) filemtime($path) : DRISE_BRANDING_VERSION;
}

function drise_enqueue_assets(): void
{
    wp_enqueue_style(
        'drise-branding-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;800&family=Noto+Serif+JP:wght@500;600;700&family=Playfair+Display:wght@600;700&display=swap',
        [],
        null
    );
    wp_enqueue_style(
        'drise-branding-theme',
        get_theme_file_uri('/assets/css/theme.css'),
        ['drise-branding-fonts'],
        drise_asset_version('/assets/css/theme.css')
    );
    wp_enqueue_script(
        'drise-branding-theme',
        get_theme_file_uri('/assets/js/theme.js'),
        [],
        drise_asset_version('/assets/js/theme.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'drise_enqueue_assets');

function drise_defer_theme_script(string $tag, string $handle): string
{
    if ('drise-branding-theme' !== $handle) {
        return $tag;
    }

    return str_replace(' src', ' defer src', $tag);
}
add_filter('script_loader_tag', 'drise_defer_theme_script', 10, 2);

function drise_register_post_types(): void
{
    $common_args = [
        'public'        => true,
        'show_in_rest'  => true,
        'has_archive'   => true,
        'menu_position' => 24,
        'supports'      => ['title', 'editor', 'thumbnail', 'excerpt', 'revisions'],
    ];

    register_post_type('voice', array_merge($common_args, [
        'labels'       => [
            'name'          => 'お客様の声',
            'singular_name' => 'お客様の声',
        ],
        'menu_icon'    => 'dashicons-format-quote',
        'rewrite'      => ['slug' => 'voices'],
    ]));

    register_post_type('works', array_merge($common_args, [
        'labels'       => [
            'name'          => '実績',
            'singular_name' => '実績',
        ],
        'menu_icon'    => 'dashicons-portfolio',
        'rewrite'      => ['slug' => 'works'],
    ]));

    register_post_type('interview', array_merge($common_args, [
        'labels'       => [
            'name'          => 'インタビュー',
            'singular_name' => 'インタビュー',
        ],
        'menu_icon'    => 'dashicons-video-alt3',
        'rewrite'      => ['slug' => 'interview'],
    ]));
}
add_action('init', 'drise_register_post_types');

function drise_page_data(?string $slug = null): array
{
    $pages = [
        'home' => [
            'path'        => '/',
            'title'       => '潜在魅力ブランディング®｜株式会社ディーアンドライズ',
            'description' => '40代後半・50代以上の経営者、先生業、職人型経営者の想いと生き様から尖った価値を発掘する、スモールブランディング専門カンパニーです。',
        ],
        'concept' => [
            'path'        => '/concept/',
            'title'       => 'コンセプト・会社案内｜潜在魅力ブランディング®',
            'description' => '45歳からのスモールブランディング。株式会社ディーアンドライズの理念、代表ストーリー、会社概要、潜在魅力ブランディング®の思想を紹介します。',
        ],
        'necco-branding.j' => [
            'path'        => '/necco-branding.j/',
            'title'       => 'NECCO BRANDING JAPAN｜根っこブランディングJAPAN',
            'description' => '職人型経営者の想いと生き様から尖った価値を発掘する、ストーリーブランディング・デザイン戦略室です。',
        ],
        'academia' => [
            'path'        => '/academia/',
            'title'       => 'SMB 潜在魅力ブランディング®コンサルティング',
            'description' => 'SNS投稿に追われず濃いお客様に選ばれる、先生業・講師・指導者向けのスモールブランディングコンサルティングです。',
        ],
        'spiral-management' => [
            'path'        => '/spiral-management/',
            'title'       => 'SPIRAL management｜日本スパイラルマネジメント研究所',
            'description' => '時間、感情、内的質問の3つのマネジメントで、40代後半・50代以上の起業家と経営者の心の平穏と成果を取り戻します。',
        ],
        'free-mail-course' => [
            'path'        => '/free-mail-course/',
            'title'       => '無料7日間メール講座｜自分を活かす集客ブランド戦略',
            'description' => '高単価でも選ばれる独自ブランドをつくる7つの秘密を、7日間の無料メール講座でお届けします。',
        ],
        'contact' => [
            'path'        => '/contact/',
            'title'       => 'お問い合わせ｜株式会社ディーアンドライズ',
            'description' => 'NECCO、SMB、SPIRAL、ブランディングやWeb制作に関するご相談を受け付けています。電話営業や訪問営業は一切行いません。',
        ],
    ];

    if (null === $slug) {
        if (is_front_page()) {
            $slug = 'home';
        } elseif (is_singular()) {
            $queried = get_queried_object();
            $slug = isset($queried->post_name) ? (string) $queried->post_name : '';
        } elseif (is_post_type_archive('voice')) {
            $slug = 'voices';
        } elseif (is_post_type_archive('works')) {
            $slug = 'works';
        } elseif (is_post_type_archive('interview')) {
            $slug = 'interview';
        }
    }

    return $pages[$slug] ?? [
        'path'        => '/',
        'title'       => wp_get_document_title(),
        'description' => get_bloginfo('description') ?: $pages['home']['description'],
    ];
}

function drise_canonical_url(): string
{
    $data = drise_page_data();

    if (is_singular() && !is_front_page()) {
        return get_permalink();
    }

    return home_url($data['path']);
}

function drise_document_title(array $parts): array
{
    if (is_front_page() || is_page()) {
        $parts['title'] = drise_page_data()['title'];
    }

    return $parts;
}
add_filter('document_title_parts', 'drise_document_title');

function drise_render_seo_tags(): void
{
    $data = drise_page_data();
    $description = $data['description'];
    $canonical = drise_canonical_url();
    $og_image = get_theme_file_uri('/assets/images/hero-brand-system.png');

    if (is_singular() && has_post_thumbnail()) {
        $og_image = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: $og_image;
    }

    echo "\n" . '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
    echo '<link rel="canonical" href="' . esc_url($canonical) . '">' . "\n";
    echo '<meta property="og:type" content="' . (is_singular('post') ? 'article' : 'website') . '">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($data['title']) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($canonical) . '">' . "\n";
    echo '<meta property="og:image" content="' . esc_url($og_image) . '">' . "\n";
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($data['title']) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($description) . '">' . "\n";
}
add_action('wp_head', 'drise_render_seo_tags', 1);

function drise_faq_items(string $context = ''): array
{
    $common = [
        [
            'q' => 'まだサービス内容が整理できていなくても相談できますか？',
            'a' => 'はい。想いや経験、既存資料を伺いながら、相談すべきテーマと必要な支援範囲から一緒に整理します。',
        ],
        [
            'q' => '無理な営業を受けることはありませんか？',
            'a' => '電話営業や訪問営業は一切行いません。ご相談内容を確認し、必要な場合のみ丁寧に返信します。',
        ],
    ];

    $sets = [
        'free-mail-course' => [
            [
                'q' => '無料7日間メール講座は本当に無料ですか？',
                'a' => 'はい。メールアドレス登録のみで受講できます。不要になった場合はいつでも配信停止できます。',
            ],
            [
                'q' => 'どんな人に向いていますか？',
                'a' => '独自メソッドやこだわり商品を持ち、高単価でも価値で選ばれるブランドを作りたい方に向いています。',
            ],
        ],
        'contact' => [
            [
                'q' => 'どのブランドに相談すべきかわかりません。',
                'a' => 'お問い合わせ種別で「その他」をお選びください。内容を確認して適切な窓口として返信します。',
            ],
            [
                'q' => 'オンラインで相談できますか？',
                'a' => 'はい。内容に応じてZoom等のオンライン相談に対応できます。',
            ],
        ],
    ];

    return array_merge($sets[$context] ?? [], $common);
}

function drise_render_structured_data(): void
{
    $data = drise_page_data();
    $schemas = [
        [
            '@context' => 'https://schema.org',
            '@type'    => 'Organization',
            'name'     => '株式会社ディーアンドライズ',
            'alternateName' => '潜在魅力ブランディング®',
            'url'      => home_url('/'),
            'logo'     => get_theme_file_uri('/assets/images/smb-logo.jpg'),
            'telephone'=> '+81-45-642-4617',
            'address'  => [
                '@type'           => 'PostalAddress',
                'postalCode'      => '230-0051',
                'addressRegion'   => '神奈川県',
                'addressLocality' => '横浜市鶴見区',
                'streetAddress'   => '鶴見中央4-9-17',
                'addressCountry'  => 'JP',
            ],
        ],
        [
            '@context' => 'https://schema.org',
            '@type'    => 'WebSite',
            'url'      => home_url('/'),
            'name'     => '潜在魅力ブランディング®',
            'potentialAction' => [
                '@type'       => 'SearchAction',
                'target'      => home_url('/?s={search_term_string}'),
                'query-input' => 'required name=search_term_string',
            ],
        ],
    ];

    if (!is_front_page()) {
        $schemas[] = [
            '@context' => 'https://schema.org',
            '@type'    => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type'    => 'ListItem',
                    'position' => 1,
                    'name'     => 'ホーム',
                    'item'     => home_url('/'),
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 2,
                    'name'     => $data['title'],
                    'item'     => drise_canonical_url(),
                ],
            ],
        ];
    }

    if (is_page()) {
        $slug = get_post_field('post_name', get_queried_object_id());
        $faq_items = drise_faq_items($slug);
        if ($faq_items) {
            $schemas[] = [
                '@context' => 'https://schema.org',
                '@type'    => 'FAQPage',
                'mainEntity' => array_map(static function (array $item): array {
                    return [
                        '@type' => 'Question',
                        'name'  => $item['q'],
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text'  => $item['a'],
                        ],
                    ];
                }, $faq_items),
            ];
        }
    }

    if (is_singular('post')) {
        $schemas[] = [
            '@context' => 'https://schema.org',
            '@type'    => 'BlogPosting',
            'headline' => get_the_title(),
            'datePublished' => get_the_date('c'),
            'dateModified'  => get_the_modified_date('c'),
            'mainEntityOfPage' => get_permalink(),
            'author' => [
                '@type' => 'Organization',
                'name'  => '株式会社ディーアンドライズ',
            ],
        ];
    }

    foreach ($schemas as $schema) {
        echo "\n" . '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
}
add_action('wp_head', 'drise_render_structured_data', 20);

function drise_fallback_nav($args = null): void
{
    $location = is_object($args) && isset($args->theme_location) ? (string) $args->theme_location : (string) $args;
    $items = [
        ['label' => 'コンセプト', 'url' => home_url('/concept/')],
        ['label' => 'NECCO', 'url' => home_url('/necco-branding.j/')],
        ['label' => 'SMB', 'url' => home_url('/academia/')],
        ['label' => 'SPIRAL', 'url' => home_url('/spiral-management/')],
        ['label' => 'メール講座', 'url' => home_url('/free-mail-course/')],
        ['label' => 'お問い合わせ', 'url' => home_url('/contact/')],
    ];

    if ('footer' === $location) {
        $items[] = ['label' => 'ブログ', 'url' => home_url('/blog/')];
        $items[] = ['label' => 'プライバシーポリシー', 'url' => home_url('/privacy-policy/')];
    }

    foreach ($items as $item) {
        echo '<a href="' . esc_url($item['url']) . '">' . esc_html($item['label']) . '</a>';
    }
}

function drise_mail_course_form_shortcode(): string
{
    ob_start();
    ?>
    <form class="drise-form drise-form--inline" action="#" method="post" aria-label="無料7日間メール講座登録フォーム">
        <label class="screen-reader-text" for="drise-mail-email">メールアドレス</label>
        <input id="drise-mail-email" type="email" name="email" placeholder="メールアドレスを入力" autocomplete="email" required>
        <button class="button button--coral" type="submit">無料で受講する</button>
        <input type="hidden" name="source" value="free-mail-course">
        <p class="form-note">送信先は本番環境で既存メール配信ツールに接続してください。APIキーはテーマに直書きしません。</p>
    </form>
    <?php
    return (string) ob_get_clean();
}
add_shortcode('drise_mail_course_form', 'drise_mail_course_form_shortcode');

function drise_contact_form_shortcode(): string
{
    ob_start();
    ?>
    <form class="drise-form" action="#" method="post" aria-label="お問い合わせフォーム">
        <div class="form-grid">
            <label>氏名<span>必須</span><input type="text" name="name" autocomplete="name" required></label>
            <label>メールアドレス<span>必須</span><input type="email" name="email" autocomplete="email" required></label>
            <label>電話番号<span>必須</span><input type="tel" name="tel" autocomplete="tel" required></label>
            <label>お問い合わせ種別<select name="service">
                <option value="">選択してください</option>
                <option>NECCO</option>
                <option>SMB</option>
                <option>SPIRAL</option>
                <option>その他</option>
            </select></label>
            <label>地域<input type="text" name="area" autocomplete="address-level1"></label>
            <label>業種<input type="text" name="industry"></label>
        </div>
        <label>お問い合わせ内容<span>必須</span><textarea name="message" rows="7" required></textarea></label>
        <label class="form-consent"><input type="checkbox" name="privacy" required> プライバシーポリシーに同意します</label>
        <div class="recaptcha-placeholder" aria-label="reCAPTCHA接続予定">reCAPTCHA v3 接続予定</div>
        <button class="button button--primary" type="submit">送信内容を確認する</button>
        <p class="form-note">本番環境ではContact Form 7またはWPFormsへ差し替え、自動返信・管理者通知・reCAPTCHAを設定します。</p>
    </form>
    <?php
    return (string) ob_get_clean();
}
add_shortcode('drise_contact_form', 'drise_contact_form_shortcode');
