<?php
$page_title = "入学案内";
$page_desc  = "入学案内紹介ページです。";

include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>


<section class="section-page-mv" id="js-mv">
  <div class="page-header">
    <h1><span class="en">Admissions</span>入学案内</h1>
    <ul class="pankuzu-list">
      <li><a href="/">HOME</a></li>
      <li>入学案内</li>
    </ul>
  </div>
  <div class="page-mv"><img src="/images/admissions/mv.jpg"></div>
</section>



<section class="section-about-school reveal">
  <div class="section__inner">

    <h2 class="headline2">募集要項、出願書類、学費のことなど、入学についてご案内します。</h2>

    <ul class="about-card-list">
      <!-- 1. 募集要項 -->
      <li class="about-card-list__item">
        <a href="https://www.hiramatsu.ac.jp/wp-content/themes/hiramatsu/pdf/bosyu_iryo.pdf" target="_blank" rel="noopener noreferrer" class="about-card-link">
          <div class="about-card-link__img-wrap">
            <img src="/images/admissions/admissions_thumb01.jpg" alt="募集要項">
          </div>
          <div class="about-card-link__body">
            <h3 class="about-card-link__title">募集要項［PDF］</h3>
            <span class="about-card-link__arrow"></span>
          </div>
        </a>
      </li>

      <!-- 2. 出願書類ダウンロード -->
      <li class="about-card-list__item">
        <a href="https://www.hiramatsu.ac.jp/admissions" target="_blank" rel="noopener noreferrer" class="about-card-link">
          <div class="about-card-link__img-wrap">
            <img src="/images/admissions/admissions_thumb02.jpg" alt="出願書類ダウンロード">
          </div>
          <div class="about-card-link__body">
            <h3 class="about-card-link__title">出願書類ダウンロード</h3>
            <span class="about-card-link__arrow"></span>
          </div>
        </a>
      </li>

      <!-- 3. 学費のご案内-->
      <li class="about-card-list__item">
        <a href="/admission/tuition/" class="about-card-link">
          <div class="about-card-link__img-wrap">
            <img src="/images/admissions/admissions_thumb03.jpg" alt="学費のご案内">
          </div>
          <div class="about-card-link__body">
            <h3 class="about-card-link__title">学費のご案内</h3>
            <span class="about-card-link__arrow"></span>
          </div>
        </a>
      </li>

      <!-- 4. 学費サポート -->
      <li class="about-card-list__item">
        <a href="/admission/tuition-support/" class="about-card-link">
          <div class="about-card-link__img-wrap">
            <img src="/images/admissions/admissions_thumb04.jpg" alt="学費サポート">
          </div>
          <div class="about-card-link__body">
            <h3 class="about-card-link__title">学費サポート</h3>
            <span class="about-card-link__arrow"></span>
          </div>
        </a>
      </li>

      <!-- 5. 生活サポート -->
      <li class="about-card-list__item">
        <a href="/admission/life-support/" class="about-card-link">
          <div class="about-card-link__img-wrap">
            <img src="/images/admissions/admissions_thumb05.jpg" alt="生活サポート">
          </div>
          <div class="about-card-link__body">
            <h3 class="about-card-link__title">生活サポート</h3>
            <span class="about-card-link__arrow"></span>
          </div>
        </a>
      </li>

      <!-- 5. デジタルパンフレット -->
      <li class="about-card-list__item">
        <a href="https://page.line.me/574beals" target="_blank" rel="noopener noreferrer" class="about-card-link">
          <div class="about-card-link__img-wrap">
            <img src="/images/admissions/admissions_thumb06.jpg" alt="デジタルパンフレット">
          </div>
          <div class="about-card-link__body">
            <h3 class="about-card-link__title">デジタルパンフレット</h3>
            <span class="about-card-link__arrow"></span>
          </div>
        </a>
      </li>
    </ul>

  </div>
</section>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/section-conversion.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>