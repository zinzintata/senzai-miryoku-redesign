<?php
/**
 * Template Name: Contact
 *
 * @package DriseBranding
 */

get_header();
get_template_part('template-parts/section-breadcrumb');
?>
<section class="page-hero" aria-labelledby="contact-title">
    <div class="page-hero__inner">
        <p class="eyebrow">Contact</p>
        <h1 id="contact-title">お気軽にお問い合わせください</h1>
        <p>ご相談内容を確認し、必要な場合のみ丁寧に返信します。電話営業や訪問営業は一切行いません。</p>
    </div>
</section>

<section class="section section--soft" aria-labelledby="contact安心-title">
    <div class="section__inner split">
        <div>
            <p class="eyebrow">Promise</p>
            <h2 id="contact安心-title" class="section-title">無理に売り込むための窓口ではありません。</h2>
            <p class="section-lead">NECCO、SMB、SPIRAL、Web制作、ブランディング相談のどれに該当するかわからなくても大丈夫です。まずは現在の状況をお知らせください。</p>
        </div>
        <div class="panel">
            <h3>お電話でのお問い合わせ</h3>
            <p><a href="tel:0456424617">045-642-4617</a></p>
            <p>平日 10:00〜18:00を目安にご連絡ください。スマートフォンではタップ発信できます。</p>
        </div>
    </div>
</section>

<section class="section" aria-labelledby="contact-form-title">
    <div class="section__inner split">
        <div>
            <p class="eyebrow">Form</p>
            <h2 id="contact-form-title" class="section-title">お問い合わせフォーム</h2>
            <p class="section-lead">本番環境ではContact Form 7またはWPFormsに差し替え、自動返信、管理者通知、reCAPTCHA、サンクス表示を設定します。</p>
            <ul class="check-list">
                <li>お問い合わせ種別で3ブランドを選択可能</li>
                <li>地域、業種を任意項目として設置</li>
                <li>プライバシーポリシー同意を必須化</li>
                <li>reCAPTCHAはテーマにキーを直書きせず管理画面側で設定</li>
            </ul>
        </div>
        <div class="panel">
            <?php echo do_shortcode('[drise_contact_form]'); ?>
        </div>
    </div>
</section>

<section class="section section--mist" aria-labelledby="contact-faq-title">
    <div class="section__inner">
        <div class="section-head">
            <div>
                <p class="eyebrow">FAQ</p>
                <h2 id="contact-faq-title" class="section-title">お問い合わせ前のよくある質問</h2>
            </div>
            <p class="section-lead">心理的ハードルを下げ、相談しやすい窓口として整えます。</p>
        </div>
        <?php get_template_part('template-parts/section-faq', null, ['context' => 'contact']); ?>
    </div>
</section>
<?php
get_footer();
