# 潜在魅力ブランディング リニューアル提案サイト

応募用の高品質プロトタイプです。

## WordPressテーマ

今回の本実装として、既存の静的HTMLを残したまま、WordPressオリジナルテーマを追加しています。

- テーマ: `wp-content/themes/drise-branding/`
- テーマ名: `D&Rise Branding`
- 想定ドメイン: `https://senzaimiryoku.com/`
- 7ページ構成:
  - `/`
  - `/concept/`
  - `/necco-branding.j/`
  - `/academia/`
  - `/spiral-management/`
  - `/free-mail-course/`
  - `/contact/`

### WordPressでのページ割り当て

1. 固定ページを7件作成する。
2. 各ページのslugを `SEO-URL-MAPPING.md` に合わせる。
3. 下記テンプレートを割り当てる。

| slug | テンプレート |
| --- | --- |
| home | `front-page.php` |
| concept | `Concept / Company` |
| necco-branding.j | `NECCO BRANDING JAPAN` |
| academia | `SMB / Academia` |
| spiral-management | `SPIRAL management` |
| free-mail-course | `Free Mail Course LP` |
| contact | `Contact` |

### 実装済みの主な機能

- CSS変数による3ブランドカラー設計
- ヘッダー、フッター、固定モバイルCTA
- ブランドカード、CTAバナー、FAQアコーディオン、パンくず
- お客様の声、実績、インタビューのカスタム投稿タイプ
- SEOメタ、OGP、Twitter Card、canonical
- JSON-LD: Organization, WebSite, BreadcrumbList, FAQPage, BlogPosting
- ブログ一覧、検索、アーカイブ、個別記事、404
- お問い合わせフォーム、無料メール講座フォームのショートコード

### 本番接続が必要なもの

- メール講座フォームの配信ツール連携
- Contact Form 7 または WPFormsへの置き換え
- reCAPTCHA v3
- GA4 / Search Console / XMLサイトマップ
- 実在するお客様の声、YouTube動画、実績ロゴの登録
- 既存URLの被リンク確認と301リダイレクト最終判断

## 構成

- `index.html`: トップページ
- `service.html`: サービス紹介
- `branding-support.html`: ブランディング構築支援
- `company.html`: 会社紹介
- `landing.html`: LP制作
- `creative.html`: バナー・ヘッダー素材
- `contact.html`: お問い合わせ

## 方針

- ターゲット: 40代・50代の経営者、講師、専門家
- 色: 青系を軸に、ターコイズとコーラルをアクセント
- 実装: HTML/CSS/JavaScript。WordPress化を想定したセクション構造
- 参考: 現行サイトと支援体系資料をもとに、情報設計と導線を再編集
- ページ数: トップページ＋6下層ページの7ページ構成
