<?php
/**
 * Template Name: Free Mail Course LP
 *
 * @package DriseBranding
 */

get_header();
get_template_part('template-parts/section-breadcrumb');
?>
<section class="page-hero" aria-labelledby="mail-title">
    <div class="page-hero__inner split">
        <div>
            <p class="eyebrow">Free 7 days course</p>
            <h1 id="mail-title">自分を活かす集客ブランド戦略</h1>
            <p>高単価でも選ばれる独自ブランドをつくる7つの秘密。独自メソッドやこだわり商品を持つミッドライフ世代のための無料メール講座です。</p>
        </div>
        <div class="mail-lp-box">
            <h2>無料で受講する</h2>
            <p>メールアドレスを入力すると、7日間の講座を順番に受け取れます。</p>
            <?php echo do_shortcode('[drise_mail_course_form]'); ?>
        </div>
    </div>
</section>

<section class="section section--soft" aria-labelledby="mail-target-title">
    <div class="section__inner">
        <div class="section-head">
            <div>
                <p class="eyebrow">For you</p>
                <h2 id="mail-target-title" class="section-title">こんな方へ</h2>
            </div>
            <p class="section-lead">SNS集客だけに頼らず、自分の価値と商品を丁寧に伝えたい方に向けた入口です。</p>
        </div>
        <div class="grid grid--4">
            <article class="card"><h3>独自メソッドがある</h3><p>まだ言語化しきれていない価値を整理したい方へ。</p></article>
            <article class="card"><h3>こだわり商品がある</h3><p>安売りせずに、価値で選ばれたい方へ。</p></article>
            <article class="card"><h3>高単価で選ばれたい</h3><p>価格ではなく納得感で申し込まれる導線を知りたい方へ。</p></article>
            <article class="card"><h3>SNS集客に疲れている</h3><p>投稿量ではなくブランドの土台から見直したい方へ。</p></article>
        </div>
    </div>
</section>

<section class="section" aria-labelledby="mail-curriculum-title">
    <div class="section__inner">
        <div class="section-head">
            <div>
                <p class="eyebrow">Curriculum</p>
                <h2 id="mail-curriculum-title" class="section-title">7日間で、自分価値の見つめ方を学ぶ。</h2>
            </div>
            <p class="section-lead">本番では既存ステップメールの内容に合わせ、Day1〜Day7の見出しと説明を差し替えます。</p>
        </div>
        <div class="curriculum">
            <article class="day-card"><strong>Day1</strong><h3>選ばれるブランドの前提</h3></article>
            <article class="day-card"><strong>Day2</strong><h3>潜在魅力の見つけ方</h3></article>
            <article class="day-card"><strong>Day3</strong><h3>高単価でも選ばれる理由</h3></article>
            <article class="day-card"><strong>Day4</strong><h3>SNS疲れから抜ける導線</h3></article>
            <article class="day-card"><strong>Day5</strong><h3>ストーリーの編集</h3></article>
            <article class="day-card"><strong>Day6</strong><h3>ブランド表現の整え方</h3></article>
            <article class="day-card"><strong>Day7</strong><h3>次の一歩の設計</h3></article>
        </div>
    </div>
</section>

<section class="section section--mist" aria-labelledby="mail-profile-title">
    <div class="section__inner split">
        <div>
            <p class="eyebrow">Instructor</p>
            <h2 id="mail-profile-title" class="section-title">講師プロフィール</h2>
            <p class="section-lead">風間俊太郎氏。2002年に株式会社ディーアンドライズを設立。2011年に潜在魅力ブランディング®を開発し、スモールブランディングとデザイン戦略を通じて経営者、先生業、職人型経営者を支援。</p>
        </div>
        <div class="panel">
            <h3>メール講座で扱うテーマ</h3>
            <ul class="check-list">
                <li>ブランドの種としての潜在魅力</li>
                <li>濃いお客様に選ばれる言葉</li>
                <li>高単価でも納得される見せ方</li>
                <li>無料相談へつながる導線設計</li>
            </ul>
        </div>
    </div>
</section>

<section class="section" aria-labelledby="mail-faq-title">
    <div class="section__inner">
        <div class="section-head">
            <div>
                <p class="eyebrow">FAQ</p>
                <h2 id="mail-faq-title" class="section-title">よくある質問</h2>
            </div>
            <p class="section-lead">登録前の不安を減らし、安心して申し込める導線にします。</p>
        </div>
        <?php get_template_part('template-parts/section-faq', null, ['context' => 'free-mail-course']); ?>
    </div>
</section>

<section class="section section--dark" aria-labelledby="mail-form-title">
    <div class="section__inner split">
        <div>
            <p class="eyebrow">Start today</p>
            <h2 id="mail-form-title" class="section-title">今日から、自分価値を見つめ直す7日間を始める。</h2>
            <p class="section-lead">個人情報保護方針への導線を添え、登録フォームは本番のメール配信ツールへ接続します。</p>
        </div>
        <div class="mail-lp-box">
            <?php echo do_shortcode('[drise_mail_course_form]'); ?>
            <p class="form-note"><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">プライバシーポリシー</a>をご確認ください。</p>
        </div>
    </div>
</section>
<?php
get_footer();
