<?php
/**
 * Template Name: SMB / Academia
 *
 * @package DriseBranding
 */

get_header();
get_template_part('template-parts/section-breadcrumb');
?>
<section class="brand-hero brand-hero--academia" aria-labelledby="academia-title">
    <div class="brand-hero__inner">
        <img class="brand-hero__logo" src="<?php echo esc_url(get_theme_file_uri('/assets/images/smb-logo.jpg')); ?>" alt="潜在魅力ブランディング® ロゴ" width="112" height="112">
        <p class="eyebrow">SMB / SENZAI MIRYOKU BRANDING</p>
        <h1 id="academia-title">SNS投稿に追われずに、濃いお客様に選ばれる</h1>
        <p>潜在魅力を活かしたスモールブランディング。先生業、講師、指導者が、自分の価値を言葉と設計図に変えていくためのコンサルティングです。</p>
        <div class="hero__actions">
            <a class="button button--coral" href="<?php echo esc_url(home_url('/free-mail-course/')); ?>">無料7日間メール講座</a>
            <a class="button button--light" href="<?php echo esc_url(home_url('/contact/')); ?>">相談する</a>
        </div>
    </div>
</section>

<section class="section" aria-labelledby="academia-stats-title">
    <div class="section__inner">
        <div class="section-head">
            <div>
                <p class="eyebrow">Results</p>
                <h2 id="academia-stats-title" class="section-title">価値の再設計は、数字にも表れます。</h2>
            </div>
            <p class="section-lead">既存サイトで示されている実績数値を、冒頭で見える化。過度に煽らず、信頼材料として読みやすく配置します。</p>
        </div>
        <div class="stats">
            <div class="stat"><strong>120日</strong><span>生徒数2倍</span></div>
            <div class="stat"><strong>9ヶ月</strong><span>生徒数7倍</span></div>
            <div class="stat"><strong>+30〜200万</strong><span>1年で月収増</span></div>
        </div>
    </div>
</section>

<section class="section section--soft" aria-labelledby="academia-problem-title">
    <div class="section__inner">
        <div class="section-head">
            <div>
                <p class="eyebrow">Problem</p>
                <h2 id="academia-problem-title" class="section-title">強みがあるのに、伝わる形になっていない。</h2>
            </div>
            <p class="section-lead">部分的な集客やセールスだけでは、価値が選ばれる状態にはなりません。経験、価値観、商品価値、導線を全体で整えます。</p>
        </div>
        <div class="grid grid--4">
            <article class="card"><h3>強みを表現できない</h3><p>本人には当たり前の経験を、お客様の選ぶ理由へ変えます。</p></article>
            <article class="card"><h3>単価を上げづらい</h3><p>価格の前に、価値の納得材料と相談導線を整えます。</p></article>
            <article class="card"><h3>SNS疲れ</h3><p>発信量ではなく、濃いお客様に届く設計へ。</p></article>
            <article class="card"><h3>事業ステージを上げたい</h3><p>自分らしさと収益を切り離さないブランドへ。</p></article>
        </div>
    </div>
</section>

<section class="section" aria-labelledby="academia-process-title">
    <div class="section__inner">
        <div class="section-head">
            <div>
                <p class="eyebrow">Whole design</p>
                <h2 id="academia-process-title" class="section-title">部分最適ではなく、在り方そのものを設計する。</h2>
            </div>
            <p class="section-lead">集客、セールス、見せ方を別々に学ぶのではなく、経験、価値観、強み、商品価値を収入につながる設計図に落とし込みます。</p>
        </div>
        <div class="steps">
            <article class="step"><h3>潜在魅力を発掘</h3><p>想いと生き様から最大価値を見つける。</p></article>
            <article class="step"><h3>収益設計</h3><p>濃いお客様に選ばれる商品構造をつくる。</p></article>
            <article class="step"><h3>ブランド表現</h3><p>Web、言葉、デザインで信頼を整える。</p></article>
            <article class="step"><h3>行動習慣</h3><p>成果を続けるセルフマネジメントへ接続する。</p></article>
        </div>
    </div>
</section>

<section class="section section--mist" aria-labelledby="academia-seed-title">
    <div class="section__inner split">
        <div>
            <p class="eyebrow">Brand seed</p>
            <h2 id="academia-seed-title" class="section-title">潜在魅力は、ブランドの種です。</h2>
            <p class="section-lead">人柄、経験、失敗、こだわり、専門性。その奥にある「この人だから頼みたい」という感覚を、言葉と導線に変換します。</p>
            <div class="section-actions">
                <a class="button button--primary" href="<?php echo esc_url(home_url('/concept/')); ?>">代表ストーリーへ</a>
            </div>
        </div>
        <div class="video-frame">
            <div class="video-placeholder">20周年記念「魂の20人インタビューLive」アーカイブ枠</div>
        </div>
    </div>
</section>

<section class="section" aria-labelledby="academia-voice-title">
    <div class="section__inner">
        <div class="section-head">
            <div>
                <p class="eyebrow">Voices</p>
                <h2 id="academia-voice-title" class="section-title">お客様の声</h2>
            </div>
            <p class="section-lead">本番では実在する声のみをカスタム投稿から登録します。</p>
        </div>
        <?php
        get_template_part('template-parts/section-voices', null, [
            'voices' => [
                ['title' => '潜在魅力の発掘事例', 'body' => 'ここに実際の成果、変化、受講前後のストーリーを掲載します。', 'cite' => 'voice投稿から更新'],
                ['title' => '先生業のブランディング事例', 'body' => '強みの言語化、価格設計、導線改善の具体的な声を登録します。', 'cite' => 'voice投稿から更新'],
                ['title' => 'SNS疲れからの転換事例', 'body' => '発信量ではなく価値設計へ移行したストーリーを掲載します。', 'cite' => 'voice投稿から更新'],
            ],
        ]);
        ?>
    </div>
</section>
<?php
get_footer();
