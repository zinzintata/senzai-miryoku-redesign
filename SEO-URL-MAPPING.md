# SEO URL Mapping

このリニューアルでは、既存SEO評価の引き継ぎを優先し、主要URLを維持する前提で設計しています。

## 維持するURL

| ページ | 最終URL | 対応テンプレート | 備考 |
| --- | --- | --- | --- |
| トップページ | `/` | `front-page.php` | 3ブランド体系とCTA導線 |
| コンセプト／会社案内 | `/concept/` | `page-concept.php` | 会社概要を統合 |
| NECCO BRANDING JAPAN | `/necco-branding.j/` | `page-necco.php` | 既存URL維持。WordPress側で同slugページにテンプレート割り当て |
| SMB／潜在魅力ブランディング® | `/academia/` | `page-academia.php` | 既存URL維持 |
| SPIRAL management | `/spiral-management/` | `page-spiral.php` | 既存URL維持 |
| 無料7日間メール講座LP | `/free-mail-course/` | `page-free-mail-course.php` | 既存メール講座URLが別にある場合は差し替え検討 |
| お問い合わせ | `/contact/` | `page-contact.php` | 既存URLがある場合は既存URL優先 |

## 301リダイレクト候補

| 旧URL | 新URL | 理由 | 本番前確認 |
| --- | --- | --- | --- |
| `/company/` | `/concept/` | 会社紹介をコンセプトページへ統合する場合 | Search Consoleで流入・被リンクを確認してから実施 |
| 既存メール講座URL | `/free-mail-course/` または既存URL維持 | 既存LPがある場合はSEOとCV履歴を確認 | メール配信ツールの登録フォームURLも確認 |

## canonical方針

- テーマ側で各固定ページのcanonicalを最終URLへ出力します。
- 既存URLを残して同内容を表示する場合は、canonicalを代表URLへ統一してください。
- SEOプラグイン（Yoast SEO または Rank Math）を導入する場合は、テーマ側出力との重複を確認してください。

## 本番反映前TODO

- WordPress固定ページを7ページ作成し、各テンプレートを割り当てる。
- `/necco-branding.j/` のslugにドットを含められない環境の場合、既存URL維持のためリライトルールまたは301設計を確認する。
- 既存サイトのURL一覧、被リンク、Search Console流入を確認する。
- `/company/` を統合するか、補助ページとして残すかを人間が最終判断する。
