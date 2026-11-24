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


<section class="section-news-archive">
  <div class="section__inner">

    <div class="news-archive-container">

      <!-- 左側：カテゴリーサイドナビゲーション -->
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

      <!-- 右側：新着情報一覧リスト ＋ ページネーション -->
      <main class="news-archive-main">
        <div class="news-archive-list">

          <!-- 記事アイテム 1 -->
          <article class="news-archive-item">
            <a href="/news/details.php" class="news-archive-item__link">
              <div class="news-archive-item__meta">
                <time datetime="2026-04-01" class="date">2026.00.00</time>
                <div class="badge-group">
                  <span class="news-badge -admission">入試情報</span>
                </div>
              </div>
              <h2 class="news-archive-item__title">
                2027年4月入学生向け「入学案内」「募集要項」が完成しました！
              </h2>
            </a>
          </article>

          <!-- 記事アイテム 2 -->
          <article class="news-archive-item">
            <a href="/news/details.php" class="news-archive-item__link">
              <div class="news-archive-item__meta">
                <time datetime="2026-04-01" class="date">2026.00.00</time>
                <div class="badge-group">
                  <span class="news-badge -notice">お知らせ</span>
                </div>
              </div>
              <h2 class="news-archive-item__title">
                再進学をご検討のみなさまへ
              </h2>
            </a>
          </article>

          <!-- 記事アイテム 3 -->
          <article class="news-archive-item">
            <a href="/news/details.php" class="news-archive-item__link">
              <div class="news-archive-item__meta">
                <time datetime="2026-04-01" class="date">2026.00.00</time>
                <div class="badge-group">
                  <span class="news-badge -admission">入試情報</span>
                </div>
              </div>
              <h2 class="news-archive-item__title">
                2027年4月入学生向け「入学案内」「募集要項」が完成しました！
              </h2>
            </a>
          </article>

          <!-- 記事アイテム 4 (複数バッジパターン) -->
          <article class="news-archive-item">
            <a href="/news/details.php" class="news-archive-item__link">
              <div class="news-archive-item__meta">
                <time datetime="2026-04-01" class="date">2026.00.00</time>
                <div class="badge-group">
                  <span class="news-badge -blog">ブログ</span>
                  <span class="news-badge -department">臨床検査学科</span>
                </div>
              </div>
              <h2 class="news-archive-item__title">
                タイトルはいりますタイトルはいりますタイトルはいりますタイトルはいりますタイトルはいります。
              </h2>
            </a>
          </article>

          <!-- 記事アイテム 5 -->
          <article class="news-archive-item">
            <a href="/news/details.php" class="news-archive-item__link">
              <div class="news-archive-item__meta">
                <time datetime="2026-04-01" class="date">2026.00.00</time>
                <div class="badge-group">
                  <span class="news-badge -event">イベント</span>
                </div>
              </div>
              <h2 class="news-archive-item__title">
                2026年オープンキャンパスを開催します！
              </h2>
            </a>
          </article>

          <!-- 記事アイテム 6 -->
          <article class="news-archive-item">
            <a href="/news/details.php" class="news-archive-item__link">
              <div class="news-archive-item__meta">
                <time datetime="2026-04-01" class="date">2026.00.00</time>
                <div class="badge-group">
                  <span class="news-badge -notice">お知らせ</span>
                </div>
              </div>
              <h2 class="news-archive-item__title">
                ホームページをリニューアルしました。
              </h2>
            </a>
          </article>

          <!-- 記事アイテム 7 -->
          <article class="news-archive-item">
            <a href="/news/details.php" class="news-archive-item__link">
              <div class="news-archive-item__meta">
                <time datetime="2026-04-01" class="date">2026.00.00</time>
                <div class="badge-group">
                  <span class="news-badge -admission">入試情報</span>
                </div>
              </div>
              <h2 class="news-archive-item__title">
                タイトルはいりますタイトルはいりますタイトルはいりますタイトルはいりますタイトルはいります。
              </h2>
            </a>
          </article>

          <!-- 記事アイテム 8 -->
          <article class="news-archive-item">
            <a href="/news/detais.php" class="news-archive-item__link">
              <div class="news-archive-item__meta">
                <time datetime="2026-04-01" class="date">2026.00.00</time>
                <div class="badge-group">
                  <span class="news-badge -blog">ブログ</span>
                  <span class="news-badge -department">臨床検査学科</span>
                </div>
              </div>
              <h2 class="news-archive-item__title">
                タイトルはいりますタイトルはいりますタイトルはいりますタイトルはいりますタイトルはいります。
              </h2>
            </a>
          </article>

          <!-- 記事アイテム 9 -->
          <article class="news-archive-item">
            <a href="/news/details.php" class="news-archive-item__link">
              <div class="news-archive-item__meta">
                <time datetime="2026-04-01" class="date">2026.00.00</time>
                <div class="badge-group">
                  <span class="news-badge -event">イベント</span>
                </div>
              </div>
              <h2 class="news-archive-item__title">
                タイトルはいりますタイトルはいりますタイトルはいりますタイトルはいりますタイトルはいります。
              </h2>
            </a>
          </article>

          <!-- 記事アイテム 10 -->
          <article class="news-archive-item">
            <a href="/news/details.php" class="news-archive-item__link">
              <div class="news-archive-item__meta">
                <time datetime="2026-04-01" class="date">2026.00.00</time>
                <div class="badge-group">
                  <span class="news-badge -notice">お知らせ</span>
                </div>
              </div>
              <h2 class="news-archive-item__title">
                タイトルはいりますタイトルはいりますタイトルはいりますタイトルはいりますタイトルはいります。
              </h2>
            </a>
          </article>

        </div><!-- /news-archive-list -->

        <!-- ページネーション -->
        <nav class="news-pagination" aria-label="新着情報ページナビゲーション">
          <a href="#" class="news-pagination__arrow -prev -disabled" aria-label="前へ"></a>
          <ul class="news-pagination__list">
            <li><span class="news-pagination__num -current">1</span></li>
            <li><a href="#" class="news-pagination__num">2</a></li>
            <li><a href="#" class="news-pagination__num">3</a></li>
          </ul>
          <a href="#" class="news-pagination__arrow -next" aria-label="次へ"></a>
        </nav>

      </main>

    </div>

  </div>
</section>




<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
