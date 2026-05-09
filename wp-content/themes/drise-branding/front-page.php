<?php
/**
 * Front page template.
 *
 * @package DriseBranding
 */

get_header();
?>
<section class="hero" aria-labelledby="home-hero-title">
    <div class="hero__inner">
        <div class="hero__content">
            <p class="eyebrow">SENZAI MIRYOKU BRANDING</p>
            <h1 id="home-hero-title">想いをカタチに、心をつなぐ。</h1>
            <p class="hero__lead">40代後半・50代以上の経営者・先生業のためのスモールブランディング専門カンパニー。</p>
            <p class="hero__tagline">自分価値を活かした人生の本質をデザインする</p>
            <div class="hero__actions">
                <a class="button button--coral" href="<?php echo esc_url(home_url('/free-mail-course/')); ?>">無料7日間メール講座に登録する</a>
                <a class="button button--light" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせする</a>
            </div>
        </div>
        <div class="hero-proof" aria-label="信頼材料">
            <div class="hero-proof__item"><strong>3</strong><span>NECCO / SMB / SPIRAL を統合</span></div>
            <div class="hero-proof__item"><strong>2002</strong><span>設立から積み重ねた支援資産</span></div>
            <div class="hero-proof__item"><strong>40社+</strong><span>クリエイティブパートナー</span></div>
            <div class="hero-proof__item"><strong>7</strong><span>登録導線まで整えるページ構成</span></div>
        </div>
    </div>
</section>

<section class="section section--soft" aria-labelledby="home-empathy-title">
    <div class="section__inner">
        <div class="section-head">
            <div>
                <p class="eyebrow">Your question</p>
                <h2 id="home-empathy-title" class="section-title">安売りではなく、価値で選ばれたいあなたへ。</h2>
            </div>
            <p class="section-lead">集客テクニックを足し続ける前に、まずは「なぜあなたなのか」が伝わる土台を整える。潜在魅力ブランディング®は、そのための思想と実装を一体で扱います。</p>
        </div>
        <div class="grid grid--4">
            <article class="card problem-card"><h3>尖った価値を見える化したい</h3><p>経験、こだわり、人生背景に眠る選ばれる理由を、言葉と構造に変換します。</p></article>
            <article class="card problem-card"><h3>SNS投稿に追われたくない</h3><p>毎日の投稿量ではなく、濃いお客様に届くブランド導線を設計します。</p></article>
            <article class="card problem-card"><h3>価値で選ばれたい</h3><p>価格比較に巻き込まれない商品コンセプト、見せ方、相談導線を整えます。</p></article>
            <article class="card problem-card"><h3>次のステージへ進みたい</h3><p>40代後半・50代以上の転換期に、人生と事業の本質を統合します。</p></article>
        </div>
    </div>
</section>

<section class="section" aria-labelledby="home-relation-title">
    <div class="section__inner section__inner--wide">
        <div class="section-head">
            <div>
                <p class="eyebrow">Brand ecosystem</p>
                <h2 id="home-relation-title" class="section-title">3つのブランドは、ひとつの思想につながっています。</h2>
            </div>
            <p class="section-lead">中心にあるのは Essential Design。想い、生き様、商品価値、習慣化までを統合し、自分価値を活かす人生とビジネスの設計へ導きます。</p>
        </div>
        <div class="relationship">
            <div class="relationship-map" aria-label="ブランド相関図">
                <div class="relationship-node relationship-node--center"><div><strong>Essential<br>Design</strong><span>本質をデザインする中心概念</span></div></div>
                <div class="relationship-node relationship-node--necco"><div><strong>NECCO</strong><span>ストーリー × デザイン戦略</span></div></div>
                <div class="relationship-node relationship-node--spiral"><div><strong>SPIRAL</strong><span>時間 × 感情 × 内的質問</span></div></div>
                <div class="relationship-node relationship-node--smb"><div><strong>SMB</strong><span>潜在魅力ブランディング®</span></div></div>
                <div class="relationship-node relationship-node--msit"><div><strong>MSIT</strong><span>統合理論</span></div></div>
            </div>
            <aside class="relationship-aside">
                <h3>ブランド相関図の考え方</h3>
                <p>NECCOは尖った価値を見える化し、SPIRALは成果を続ける内側の土台を整え、SMBはそれらを統合して「選ばれるブランド」へつなげます。</p>
                <ul class="check-list">
                    <li>中心概念は Essential Design</li>
                    <li>MSITが思考と行動の循環を支える</li>
                    <li>3ブランドそれぞれに明確な世界観を持たせる</li>
                </ul>
            </aside>
        </div>
    </div>
</section>

<section class="section section--mist" aria-labelledby="home-brands-title">
    <div class="section__inner">
        <div class="section-head">
            <div>
                <p class="eyebrow">Three brands</p>
                <h2 id="home-brands-title" class="section-title">必要な支援に、迷わずたどり着ける3ブランド設計。</h2>
            </div>
            <p class="section-lead">黒×マゼンタ、ターコイズ、オレンジ。世界観を切り替えながらも、全体として上質で信頼できるブランドサイトにまとめます。</p>
        </div>
        <?php get_template_part('template-parts/section-brand-cards'); ?>
    </div>
</section>

<section class="section" aria-labelledby="home-achievement-title">
    <div class="section__inner">
        <div class="section-head">
            <div>
                <p class="eyebrow">Achievements</p>
                <h2 id="home-achievement-title" class="section-title">大手ブランドから専門家支援まで、信頼を支える実績。</h2>
            </div>
            <p class="section-lead">ロゴデータが揃うまではテキスト表示で配置し、後から実績ロゴへ差し替えやすい構造にしています。</p>
        </div>
        <?php get_template_part('template-parts/section-achievements'); ?>
    </div>
</section>

<section class="section section--soft" aria-labelledby="home-voice-title">
    <div class="section__inner">
        <div class="section-head">
            <div>
                <p class="eyebrow">Voices</p>
                <h2 id="home-voice-title" class="section-title">お客様の声は、共鳴を生む最短の信頼材料です。</h2>
            </div>
            <p class="section-lead">本番ではカスタム投稿「お客様の声」から表示します。現段階では表示枠として、文量とレイアウトを確認できる構造にしています。</p>
        </div>
        <?php
        get_template_part('template-parts/section-voices', null, [
            'voices' => [
                ['title' => 'お客様の声 表示枠', 'body' => 'ここに実際の感想、変化、選んだ理由を掲載します。実在する声のみを登録してください。', 'cite' => 'カスタム投稿 voice から更新'],
                ['title' => '動画インタビュー 表示枠', 'body' => 'YouTube動画とテキスト要約を組み合わせ、信頼を損なわない形で掲載できます。', 'cite' => 'NECCO / SMB / SPIRAL 共通'],
                ['title' => '成果ストーリー 表示枠', 'body' => '数字だけでなく、価値の発掘から行動変容までの流れを短く整理して表示します。', 'cite' => '実績投稿 works と連携可能'],
            ],
        ]);
        ?>
    </div>
</section>

<section class="section" aria-labelledby="home-post-title">
    <div class="section__inner">
        <div class="section-head">
            <div>
                <p class="eyebrow">Journal</p>
                <h2 id="home-post-title" class="section-title">最新ブログ・イベント情報</h2>
            </div>
            <p class="section-lead">既存記事をWordPress投稿として移行すれば、最新6件を自動表示できます。カテゴリ、タグ、検索にも対応します。</p>
        </div>
        <div class="post-grid">
            <?php
            $latest_posts = new WP_Query([
                'post_type'           => 'post',
                'posts_per_page'      => 6,
                'ignore_sticky_posts' => true,
            ]);
            ?>
            <?php if ($latest_posts->have_posts()) : ?>
                <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
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
                                <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 52)); ?></p>
                            </div>
                        </a>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            <?php else : ?>
                <?php for ($i = 1; $i <= 3; $i++) : ?>
                    <article class="post-card">
                        <div class="post-card__media"></div>
                        <div class="post-card__body">
                            <time>準備中</time>
                            <h3>ブログ記事の表示枠</h3>
                            <p>既存ブログ記事を移行すると、ここに最新記事が自動表示されます。</p>
                        </div>
                    </article>
                <?php endfor; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="section section--dark" aria-labelledby="home-message-title">
    <div class="section__inner split">
        <div>
            <p class="eyebrow">Founder message</p>
            <h2 id="home-message-title" class="section-title">代表の人生背景まで含めて、ブランドの信頼に変える。</h2>
            <p class="section-lead">潜在魅力ブランディング®は、きれいな言葉を並べるだけではなく、なぜこの仕事をしているのかという根に触れる支援です。代表ストーリーはコンセプトページで丁寧に展開します。</p>
            <div class="section-actions">
                <a class="button button--light" href="<?php echo esc_url(home_url('/concept/')); ?>">コンセプトを見る</a>
            </div>
        </div>
        <div class="panel">
            <h3>無料7日間メール講座</h3>
            <p>自分を活かす集客ブランド戦略。高単価でも選ばれる独自ブランドをつくる7つの秘密をお届けします。</p>
            <?php echo do_shortcode('[drise_mail_course_form]'); ?>
        </div>
    </div>
</section>
<?php
get_footer();
