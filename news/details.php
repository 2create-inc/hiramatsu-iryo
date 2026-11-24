<?php
$page_title = "新着情報";
$page_desc  = "新着情報一覧ページです";

include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>


<section class="section-page-mv" id="js-mv">
<div class="page-header">
  <h1><span class="en">News</span>新着情報</h1>
  <ul class="pankuzu-list">
    <li><a href="/">HOME</a></li>
    <li>新着情報</li>
  </ul>
</div>
</section>


<section class="section-news-detail">
  <div class="section__inner">

    <div class="news-detail-container">

      <!-- 左側：カテゴリーサイドナビゲーション (一覧ページ共通) -->
      <aside class="news-category-nav">
        <span class="news-category-nav__label">Category</span>
        <ul class="news-category-nav__list">
          <li class="news-category-nav__item">
            <a href="/news/" class="news-category-link -active">すべて</a>
          </li>
          <li class="news-category-nav__item">
            <a href="/news/notice/" class="news-category-link">お知らせ</a>
          </li>
          <li class="news-category-nav__item">
            <a href="/news/admission/" class="news-category-link">入試情報</a>
          </li>
          <li class="news-category-nav__item">
            <a href="/news/event/" class="news-category-link">イベント</a>
          </li>
          <li class="news-category-nav__item">
            <a href="/news/blog/" class="news-category-link">ブログ</a>
          </li>
        </ul>
      </aside>

      <!-- 右側：お知らせ詳細メインコンテンツ -->
      <main class="news-detail-main">
        <article class="news-detail-article">

          <!-- ヘッダー（日付、カテゴリーバッジ、記事タイトル） -->
          <header class="news-detail-header">
            <div class="news-detail-header__meta">
              <time datetime="2026-00-00" class="date">2026.00.00</time>
              <div class="badge-group">
                <span class="news-badge -admission">入試情報</span>
              </div>
            </div>
            <h1 class="news-detail-header__title">
              8月のオープンキャンパス情報（ダミーです）
            </h1>
          </header>

          <!-- 記事本文エリア（WPエディタ出力対応） -->
          <div class="news-detail-content">
            <p>
              文字サイズ16pxテキストがここに入ります。テキストがここに入ります。テキストがここに入ります。テキストがここに入ります。テキストがここに入ります。テキストがここに入ります。テキストがここに入ります。テキストがここに入ります。テキストがここに入ります。テキストがここに入ります。テキストがここに入ります。テキストがここに入ります。テキストがここに入ります。テキストがここに入ります。テキストがここに入ります。テキストがここに入ります。
            </p>

            <!-- メイン画像アイキャッチ -->
            <figure class="news-detail-media">
              <img src="/images/news/sample_detail_image.jpg" alt="8月のオープンキャンパスイメージ" width="800" height="450" loading="lazy">
            </figure>

            <!-- イベント詳細 -->
            <h2 class="content-h2">イベント詳細</h2>
            <ul class="content-list">
              <li>イベント名：オープンキャンパス2026</li>
              <li>開催日：2026年8月22日（土）9:30 - 12:40（受付 9:00 - 12:00）</li>
              <li>詳細ページ：<a href="https://hiramatsu-iryo.jp/opencampus/" target="_blank" rel="noopener noreferrer">https://hiramatsu-iryo.jp/opencampus/</a></li>
            </ul>

            <!-- 見出しスタイルサンプル（h2〜h6） -->
            <h2 class="content-h2">見出し1</h2>
            <h3 class="content-h3">見出し2</h3>
            <h4 class="content-h4">見出し3</h4>
            <h5 class="content-h5">見出し4</h5>
            <h6 class="content-h6">見出し5</h6>

            <!-- リストサンプル -->
            <ul class="content-list">
              <li>リスト</li>
              <li>リスト</li>
              <li>リスト <a href="#">リンク</a></li>
            </ul>
          </div>

          <!-- フッター（一覧へ戻るボタン） -->
          <footer class="news-detail-footer">
            <a href="/news/" class="news-back-btn">
              <span class="news-back-btn__arrow" aria-hidden="true"></span>
              <span class="news-back-btn__text">一覧へ戻る</span>
            </a>
          </footer>

        </article>
      </main>

    </div>

  </div>
</section>






<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
