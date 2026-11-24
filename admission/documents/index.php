<?php
$page_title = "出願書類";
$page_desc  = "出願書類ページです。";

include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>


<section class="section-page-mv" id="js-mv">
<div class="page-header">
  <h1><span class="en">Application Documents</span>出願書類</h1>
  <ul class="pankuzu-list">
    <li><a href="/">HOME</a></li>
    <li><a href="/admission/">入学案内</a></li>
    <li>出願書類</li>
  </ul>
</div>
<div class="page-mv"><img src="/images/documents/mv.jpg"></div>
</section>



<section class="section-about-school reveal">
  <div class="section__inner">
    
    <div class="underline-header">
      <h2 class="headline2_underline-style">出願書類一覧</h2>
    </div>

    <p class="exam-lead">以下から出願書類をダウンロードしてご使用ください。</p>

    <!-- 出願書類ダウンロードリスト -->
    <ul class="download-card-list">

      <!-- 1. 入学願書 -->
      <li class="download-card-list__item">
        <a href="/pdf/application_form.pdf" class="download-card-link" target="_blank" rel="noopener noreferrer">
          <span class="download-card-link__title">入学願書</span>
          <span class="download-card-link__arrow" aria-hidden="true"></span>
        </a>
      </li>

      <!-- 2. 指定校入試推薦書（word形式） -->
      <li class="download-card-list__item">
        <a href="/doc/recommendation_designated.docx" class="download-card-link" download>
          <span class="download-card-link__title">指定校入試推薦書（word形式）</span>
          <span class="download-card-link__arrow" aria-hidden="true"></span>
        </a>
      </li>

      <!-- 3. 推薦書 -->
      <li class="download-card-list__item">
        <a href="/pdf/recommendation.pdf" class="download-card-link" target="_blank" rel="noopener noreferrer">
          <span class="download-card-link__title">推薦書</span>
          <span class="download-card-link__arrow" aria-hidden="true"></span>
        </a>
      </li>

      <!-- 4. 推薦書（word形式） -->
      <li class="download-card-list__item">
        <a href="/doc/recommendation.docx" class="download-card-link" download>
          <span class="download-card-link__title">推薦書（word形式）</span>
          <span class="download-card-link__arrow" aria-hidden="true"></span>
        </a>
      </li>

      <!-- 5. 自己推薦書 -->
      <li class="download-card-list__item">
        <a href="/pdf/self_recommendation.pdf" class="download-card-link" target="_blank" rel="noopener noreferrer">
          <span class="download-card-link__title">自己推薦書</span>
          <span class="download-card-link__arrow" aria-hidden="true"></span>
        </a>
      </li>

      <!-- 6. 受験票・受領書 -->
      <li class="download-card-list__item">
        <a href="/pdf/examination_vouch.pdf" class="download-card-link" target="_blank" rel="noopener noreferrer">
          <span class="download-card-link__title">受験票・受領書</span>
          <span class="download-card-link__arrow" aria-hidden="true"></span>
        </a>
      </li>

      <!-- 7. 出願封筒表貼りシート -->
      <li class="download-card-list__item">
        <a href="/pdf/envelope_sheet.pdf" class="download-card-link" target="_blank" rel="noopener noreferrer">
          <span class="download-card-link__title">出願封筒表貼りシート</span>
          <span class="download-card-link__arrow" aria-hidden="true"></span>
        </a>
      </li>

    </ul>

  </div>
</section>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/section-conversion.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
