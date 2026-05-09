# D&Rise Branding Design System

## コンセプト

綺麗なだけでなく、「想いを理解してくれそう」「価値で選ばれるブランドづくりを相談できそう」と感じられる品格、余白、読みやすさを優先します。

## カラー

| 用途 | 変数 | HEX |
| --- | --- | --- |
| SMBメイン | `--color-smb-main` | `#03B4C4` |
| SMB濃色 | `--color-smb-dark` | `#0194AD` |
| SMB中間 | `--color-smb-medium` | `#64CBCB` |
| SMB淡色 | `--color-smb-light` | `#C3EBEE` |
| CTAアクセント | `--color-coral` | `#F0575C` |
| NECCOメイン | `--color-necco-main` | `#ED268F` |
| NECCO濃色 | `--color-necco-deep` | `#95185B` |
| NECCO黒 | `--color-necco-black` | `#000000` |
| SPIRALメイン | `--color-spiral-main` | `#FB532C` |
| SPIRAL淡色 | `--color-spiral-pale` | `#FDDCD4` |
| 本文 | `--color-text` | `#333333` |

## カラー運用

- サイト全体はSMBターコイズを親ブランド色として使用。
- NECCOページは黒背景とマゼンタで世界観を切り替える。
- SPIRALページはオレンジで前進感を出す。
- CTAはターコイズまたはコーラルに限定し、迷わせない。
- 本文は真っ黒ではなく `#333333` を基本にする。

## タイポグラフィ

- 見出し: `Noto Serif JP`, `Yu Mincho`
- 本文/UI: `Noto Sans JP`, system-ui
- 欧文アクセント: `Playfair Display`
- 本文PC: 17px
- 本文スマホ: 16px以上
- 行間: 1.8
- letter-spacing: 0

## コンポーネント

- Header: ロゴ、グローバルナビ、無料相談CTA、7日間メール講座CTA、スマホメニュー
- Footer: 会社情報、サイトマップ、検索、SNSリンク、コピーライト
- CTA Banner: メール講座と無料相談の2導線
- Brand Card: NECCO / SMB / SPIRAL の対象者、価値、リンク
- Section Heading: 英語小見出し、日本語見出し、リード
- Voice Card: 実在する声の登録枠
- Achievement Area: 実績名またはロゴ表示
- FAQ Accordion: JSで開閉、FAQPage構造化データと対応
- Breadcrumb: 固定ページと投稿に表示
- Fixed Mobile CTA: スマホ下部にメール講座と問い合わせを固定

## レスポンシブ

- 〜767px: 1カラム、固定CTA、図解は縦並び
- 768px〜1023px: 2カラム中心
- 1024px〜: PCレイアウト
- 横スクロールを避けるため、固定幅要素は `max-width` とグリッドで制御

## 運用ルール

- お客様の声は実在する内容のみ登録する。
- APIキー、reCAPTCHAキー、メール配信ツールキーはテーマに直書きしない。
- SEOプラグイン導入時はテーマ側のmeta/canonical/OGPとの重複を確認する。
- 画像はWebP化を推奨し、ファーストビュー以外はlazy loadingを維持する。
