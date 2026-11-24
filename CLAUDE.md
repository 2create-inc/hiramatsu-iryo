# 平松学園 医療系専門学校サイト（hiramatsu-iryo）

- リポジトリ: https://github.com/2create-inc/hiramatsu-iryo （`main`）
- 本番ドメイン: https://hiramatsu-iryo.jp
- **共通ルール `../_common/coding-rules.md` はこのプロジェクトには適用しない。** このファイルと既存コードの書き方を正とする。

## 構成

- 素のPHP（CMS・フレームワークなし）。ページは `/<カテゴリ>/<ページ>/index.php`。
- 共通パーツ: `/header.php`（`<head>`・ヘッダー・グロナビ）、`/footer.php`、`/assets/section-conversion.php`（OC・問い合わせ・資料請求の導線）。
- 画像: `/images/<ページ名>/`、共通画像は `/images/common/`。
- CSS: `/scss/` → `/css/style.css`（1ファイルに統合）。JS: `/js/apps.js`（バニラJS、jQueryも読み込み済み）。
- `/opencampus/` は**独立した静的LP**（`index.html`、専用の `css/` `scss/` `js/` `images/` `pdf/`、相対パス）。本体のheader/footerやCSSは使わない。

## 新規ページのひな形

```php
<?php
$page_title = "ページ名";
$page_desc  = "〇〇ページです。";

include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>

<section class="section-page-mv" id="js-mv">
<div class="page-header">
  <h1><span class="en">English Title</span>ページ名</h1>
  <ul class="pankuzu-list">
    <li><a href="/">HOME</a></li>
    <li><a href="/カテゴリ/">カテゴリ名</a></li>
    <li>ページ名</li>
  </ul>
</div>
<div class="page-mv"><img src="/images/ページ名/mv.jpg" alt=""></div>
</section>

<section class="section-xxx reveal">
  <div class="section__inner">
    …
  </div>
</section>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/section-conversion.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
```

- `<title>` は header.php が `$page_title｜平松学園医療系専門学校` の形にするので、`$page_title` にサイト名を入れない。
- 下層MVには `id="js-mv"` を付ける（apps.js の固定ヘッダー制御がMVの高さを基準にしている）。
- スクロールで表示させたいセクションには `reveal` クラスを付ける。
- 内部リンクと画像はルート相対パス（`/career/` `/images/...`）。外部リンクは `target="_blank" rel="noopener noreferrer"`。
- ナビにページを追加したときは、header.php（PCナビ・SPナビ）、footer.php、`/sitemap/` も合わせて更新する。

## HTML / CSS の書き方

- クラス名はケバブケースで、BEM風に書く: ブロック `.employment-header`、要素 `__title`、バリエーションは `-lab` のようなハイフン始まりの追加クラス、状態は `is-fixed` など `is-`。
- セクションは `section-<名前>`、中身の幅は `.section__inner`（`--inner-width: 1240px`）。
- JSで使う要素のIDは `js-` 始まり（`js-header`, `js-mv`）。
- ブロックの区切りにはHTMLコメントを入れる（例: `<!-- 臨床検査学科 -->`）。SCSSでは `/* ===== SECTION名 (日本語名) ===== */` の見出しコメントを使う。
- SCSSのパーシャルはページ（カテゴリ）単位で `scss/_<名前>.scss` に置き、`scss/style.scss` に `@import` を追加する。
- メディアクエリは `_mediaquery.scss` のmixinを使う: `fablet`(576〜) / `tablet`(768〜) / `desktop`(1200〜) / `wide`(1400〜) / `mobile-fablet`(〜767) / `mobile-tablet`(〜1199) など。表示の出し分けには `.is-mobile-none` などのユーティリティクラスを使う。
- 色・フォントは `_html.scss` の `:root` 変数（`--color-green`, `--font-en` など）を優先して使う。本文フォントは Zen Kaku Gothic New、英字は Lato。

## ビルド

- SCSSは、ソースマップ付きの非圧縮CSSにコンパイルする（現状の `css/style.css(.map)` と同じ形。エディタの Live Sass Compiler で作ったものと思われる）。
- このMacには `sass` コマンドが入っていない。Claudeがコンパイルするときは `npx sass` を使う:
  ```bash
  npx sass scss/style.scss css/style.css
  ```
  オープンキャンパスLP: `npx sass opencampus/scss/style.scss opencampus/css/style.css`
- `scss/` を変更したら、コンパイル後の `css/style.css` と `.map` も一緒にコミットする（サーバーにはCSSをそのままアップロードするため）。

## Git

- `.DS_Store` はコミットしない（`.gitignore` で除外済み）。
- `headerのコピー.php`、`scss/_headerのコピー.scss` は旧バージョンのバックアップ。編集の対象にしない。
