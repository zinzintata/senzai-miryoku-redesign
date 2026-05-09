<?php
/**
 * Template Name: SPIRAL management
 *
 * @package DriseBranding
 */

get_header();
get_template_part('template-parts/section-breadcrumb');
?>
<section class="brand-hero brand-hero--spiral" aria-labelledby="spiral-title">
    <div class="brand-hero__inner">
        <img class="brand-hero__logo" src="<?php echo esc_url(get_theme_file_uri('/assets/images/spiral-logo.jpg')); ?>" alt="SPIRAL management ロゴ" width="112" height="112">
        <p class="eyebrow">SPIRAL management</p>
        <h1 id="spiral-title">3つのマネジメントで、心の平穏と成果を取り戻す</h1>
        <p>時間 × 感情 × 内的質問。40代後半・50代以上の起業家、経営者が、負のスパイラルを断ち切り好転体質へ向かうセルフマネジメントです。</p>
        <div class="hero__actions">
            <a class="button button--light" href="<?php echo esc_url(home_url('/contact/')); ?>">30分Zoom無料相談</a>
            <a class="button button--coral" href="<?php echo esc_url(home_url('/free-mail-course/')); ?>">無料e-Book導線</a>
        </div>
    </div>
</section>

<section class="section section--spiral" aria-labelledby="spiral-if-title">
    <div class="section__inner split">
        <div>
            <p class="eyebrow">If you are</p>
            <h2 id="spiral-if-title" class="section-title">もしあなたが、前に進みたいのに滞っているなら。</h2>
            <p class="section-lead">成果が実現しない理由は、知識不足だけではありません。時間の使い方、感情の扱い、内側の問いが絡み合うことで、行動が止まることがあります。</p>
        </div>
        <div class="panel">
            <ul class="check-list">
                <li>自分のポテンシャルをもっと発揮したい</li>
                <li>ビジネスも人生も新しい扉を拓きたい</li>
                <li>時間と心にゆとりを持ちたい</li>
                <li>滞っている不具合をスッキリさせたい</li>
            </ul>
        </div>
    </div>
</section>

<section class="section" aria-labelledby="spiral-management-title">
    <div class="section__inner">
        <div class="section-head">
            <div>
                <p class="eyebrow">Three management</p>
                <h2 id="spiral-management-title" class="section-title">時間、感情、内的質問を同時に整える。</h2>
            </div>
            <p class="section-lead">ボトルネックを見つけるだけでなく、成果を妨げる循環をほどき、行動が続く状態へ整えます。</p>
        </div>
        <div class="grid grid--3">
            <article class="card"><h3>時間</h3><p>成果につながる時間の使い方と、やめるべき行動を明確にします。</p></article>
            <article class="card"><h3>感情</h3><p>不安、焦り、停滞感を無視せず、行動に変える扱い方を整えます。</p></article>
            <article class="card"><h3>内的質問</h3><p>自分を止める問いから、可能性を開く問いへ切り替えます。</p></article>
        </div>
    </div>
</section>

<section class="section section--mist" aria-labelledby="spiral-clinic-title">
    <div class="section__inner split">
        <div>
            <p class="eyebrow">Bottleneck clinic</p>
            <h2 id="spiral-clinic-title" class="section-title">成果を止めているボトルネックを見つける。</h2>
            <p class="section-lead">セミナーや自己啓発で終わらせず、実際の仕事と日常に落とし込むことで、収益と時間を生み出す土台をつくります。</p>
        </div>
        <div class="panel">
            <h3>得られるもの</h3>
            <ul class="check-list">
                <li>収益と時間を生み出す土台</li>
                <li>本当にやりたいことで結果を出すヒント</li>
                <li>ストレスなく仕事をする仕組み</li>
                <li>労働単価を上げるポイント</li>
            </ul>
        </div>
    </div>
</section>

<section class="section" aria-labelledby="spiral-filter-title">
    <div class="section__inner split">
        <div class="panel">
            <h3>お奨めできない方</h3>
            <ul class="check-list">
                <li>チャレンジするリスクより正解探しが好きな方</li>
                <li>先生が代わりにやってくれると思っている方</li>
                <li>儲かりさえすれば商品はなんでもいい方</li>
                <li>本当の課題を見ようとしない方</li>
            </ul>
        </div>
        <div>
            <p class="eyebrow">Trust filter</p>
            <h2 id="spiral-filter-title" class="section-title">誠実なフィルタリングも、信頼の一部です。</h2>
            <p class="section-lead">誰にでも売るのではなく、向き合う準備がある人へ届ける。SPIRALのページでは、その姿勢をはっきり示します。</p>
        </div>
    </div>
</section>

<section class="section section--spiral" aria-labelledby="spiral-cta-title">
    <div class="section__inner split">
        <div>
            <p class="eyebrow">Limited consultation</p>
            <h2 id="spiral-cta-title" class="section-title">毎月5名限定、30分Zoom無料相談。</h2>
            <p class="section-lead">本番では専用フォームまたは予約導線に接続します。無料e-Bookプレゼントへの導線も同じセクション内で整理します。</p>
        </div>
        <div class="panel">
            <h3>無料e-Bookプレゼント</h3>
            <p>やり甲斐ある仕事で収益を上げる3つのポイント</p>
            <div class="section-actions">
                <a class="button button--coral" href="<?php echo esc_url(home_url('/contact/')); ?>">無料相談を申し込む</a>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
