<?php
$page_title = "生活サポート";
$page_desc  = "生活サポートページです。";

include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>


<section class="section-page-mv" id="js-mv">
<div class="page-header">
  <h1><span class="en">Student Support</span>生活サポート</h1>
  <ul class="pankuzu-list">
    <li><a href="/">HOME</a></li>
    <li><a href="/admission/">入学案内</a></li>
    <li>生活サポート</li>
  </ul>
</div>
<div class="page-mv"><img src="/images/life-support/mv.jpg"></div>
</section>



<section class="section-about-school reveal">
  <div class="section__inner">

    <!-- セクションヘッダー -->
    <div class="hiramatsu-support-header">
      <span class="hiramatsu-support-header__en">Housing Support</span>
      <h2 class="hiramatsu-support-header__title">住宅サポート特典</h2>
    </div>

    <!-- 特典1 ブロック -->
    <div class="support-detail-block">
      <div class="support-title-badge-wrap">
        <h3 class="support-title-badge">
          <span class="badge">特典1</span>
          <span class="name">費用サポート</span>
        </h3>
      </div>

      <!-- 特典1 コンテンツ：2カラムカードエリア -->
      <div class="housing-benefit-grid">

        <!-- 1. 仲介料割引カード -->
        <div class="housing-benefit-card">
          <div class="housing-benefit-card__body">
            <h4 class="housing-benefit-card__ttl">
              <span class="num">1</span>
              <span class="text">仲介料（初回手続き）の割引</span>
            </h4>
            <p class="housing-benefit-card__sub">全物件</p>
            <div class="housing-benefit-card__price">
              <span class="num">50</span>
              <span class="unit">%割引</span>
            </div>
          </div>
          <div class="housing-benefit-card__img">
            <img src="/images/life-support/housing_img01.jpg" alt="アパート外観イメージ" loading="lazy">
          </div>
        </div>

        <!-- 2. 家賃補助カード -->
        <div class="housing-benefit-card">
          <div class="housing-benefit-card__body">
            <h4 class="housing-benefit-card__ttl">
              <span class="num">2</span>
              <span class="text">家賃補助</span>
            </h4>
            <p class="housing-benefit-card__sub">学園の指定物件は一律、</p>
            <div class="housing-benefit-card__price -orange">
              <span class="sub">毎月</span>
              <span class="num">5,000</span>
              <span class="unit">円減額</span>
            </div>
            <p class="housing-benefit-card__note">※パンフレットに指定物件を掲載、但し戸数に限りあり。</p>
          </div>
          <div class="housing-benefit-card__img">
            <img src="/images/life-support/housing_img02.jpg" alt="お部屋内観イメージ" loading="lazy">
          </div>
        </div>

      </div>
    </div>

    <!-- 特典2 ブロック -->
    <div class="support-detail-block">
      <div class="support-title-badge-wrap">
        <h3 class="support-title-badge">
          <span class="badge">特典2</span>
          <span class="name">アパート物件掲載のパンフレットを進呈</span>
        </h3>
      </div>

      <!-- 特典2 コンテンツ：説明文章 ＋ 右側パンフレット画像カード -->
      <div class="housing-pamphlet-grid">
        <div class="housing-pamphlet-content">
          <p class="housing-pamphlet-desc">
            学園周辺の地図付きで学生向けのアパート物件をご紹介。<br>
            物件のお申し込みは、お部屋ラボ（上野の森口店）でお願いします。<br>
            <span class="sub">（上記店舗のご案内は、パンフレットに記載しています）</span>
          </p>
          <p class="housing-pamphlet-catch">
            パンフレットご希望の方は志望校にご請求ください！
          </p>
          <p class="housing-pamphlet-note">
            ※（独）日本学生支援機構の「自宅外通学生」に該当する方が住宅サポート特典の対象となります。
          </p>
        </div>

        <div class="housing-pamphlet-card">
          <img src="/images/life-support/housing_pamphlet.png" alt="おおいたひとり暮らしガイド パンフレット" loading="lazy">
        </div>
      </div>
    </div>

    <!-- 心理相談室 共通バナー -->
    <div class="counseling-banner">
      <div class="counseling-banner__lead">
        <div class="counseling-banner__icon">
          <img src="/images/life-support/icon_counseling.png" alt="心理カウンセラーのイラスト" loading="lazy">
        </div>
        <div class="counseling-banner__txt">
          <span class="sub"><span class="is-desktop-block">学生の皆さんの</span>こころの声に耳を傾けて</span>
          <h3 class="ttl">「心理相談室」</h3>
        </div>
      </div>
      <div class="counseling-banner__body">
        <p class="main">
          <strong>友だち・家族・学習など、どんな悩みでも専門のスクールカウンセラーの先生のカウンセリングを受けられます。</strong>
        </p>
        <p class="sub">
          相談内容は秘密厳守で対応します。安心して、お気軽にご相談ください。
        </p>
      </div>
    </div>

  </div>
</section>



<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
