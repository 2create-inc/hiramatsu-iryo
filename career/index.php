<?php
$page_title = "資格・就職";
$page_desc  = "資格・就職一覧ページです。";

include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>


<section class="section-page-mv" id="js-mv">
<div class="page-header">
  <h1><span class="en">Certifications & Employment</span>資格・就職</h1>
  <ul class="pankuzu-list">
    <li><a href="/">HOME</a></li>
    <li>資格・就職</li>
  </ul>
</div>
<div class="page-mv"><img src="/images/career/mv.jpg"></div>
</section>



<section class="section-about-school reveal">
  <div class="section__inner">
    
    <h2 class="headline2">平松学園医療系専門学校では<span class="is-desktop-block">学生一人ひとりに寄り添ってしっかりサポートします。</span></h2>
    
    <ul class="about-card-list">
      <!-- 1. 資格取得実績 -->
      <li class="about-card-list__item">
        <a href="/career/license/" class="about-card-link">
          <div class="about-card-link__img-wrap">
            <img src="/images/career/career_thumb01.jpg" alt="資格取得実績イメージ">
          </div>
          <div class="about-card-link__body">
            <h3 class="about-card-link__title">資格取得実績</h3>
            <span class="about-card-link__arrow"></span>
          </div>
        </a>
      </li>

      <!-- 2. 就職実績 -->
      <li class="about-card-list__item">
        <a href="/career/employment/" class="about-card-link">
          <div class="about-card-link__img-wrap">
            <img src="/images/career/career_thumb02.jpg" alt="就職実績イメージ">
          </div>
          <div class="about-card-link__body">
            <h3 class="about-card-link__title">就職実績</h3>
            <span class="about-card-link__arrow"></span>
          </div>
        </a>
      </li>

      <!-- 3. 学習サポート -->
      <li class="about-card-list__item">
        <a href="/career/study-support/" class="about-card-link">
          <div class="about-card-link__img-wrap">
            <img src="/images/career/career_thumb03.jpg" alt="学習サポートイメージ">
          </div>
          <div class="about-card-link__body">
            <h3 class="about-card-link__title">学習サポート</h3>
            <span class="about-card-link__arrow"></span>
          </div>
        </a>
      </li>

      <!-- 4. 進路サポート -->
      <li class="about-card-list__item">
        <a href="/career/career-support/" class="about-card-link">
          <div class="about-card-link__img-wrap">
            <img src="/images/career/career_thumb04.jpg" alt="進路サポートイメージ">
          </div>
          <div class="about-card-link__body">
            <h3 class="about-card-link__title">進路サポート</h3>
            <span class="about-card-link__arrow"></span>
          </div>
        </a>
      </li>
    </ul>

  </div>
</section>





<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
