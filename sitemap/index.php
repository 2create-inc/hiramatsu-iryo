<?php
$page_title = "サイトマップ";
$page_desc  = "サイトマップページです";

include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>


<section class="section-page-mv" id="js-mv">
  <div class="page-header">
    <h1><span class="en">Site Map</span>サイトマップ</h1>
    <ul class="pankuzu-list">
      <li><a href="/">HOME</a></li>
      <li>サイトマップ</li>
    </ul>
  </div>
</section>


<section class="section-sitemap">
  <div class="section__inner">

    <!-- サイトマップメインリスト -->
    <ul class="sitemap-list">

      <!-- ホーム -->
      <li class="sitemap-item">
        <div class="sitemap-item__head">
          <a href="/" class="sitemap-link -parent">ホーム</a>
        </div>
      </li>

      <!-- 学校紹介 -->
      <li class="sitemap-item">
        <div class="sitemap-item__head">
          <a href="/school/" class="sitemap-link -parent">学校紹介</a>
        </div>
        <ul class="sitemap-child-grid">
          <li><a href="/school/campuslife/" class="sitemap-link -child">キャンパスライフ</a></li>
          <li><a href="/school/facilities/" class="sitemap-link -child">学内施設</a></li>
          <li><a href="/school/faq/" class="sitemap-link -child">よくある質問</a></li>
          <li><a href="https://page.line.me/574beals" target="_blank" rel="noopener noreferrer" class="sitemap-link -child">電子パンフレット</a></li>
          <li><a href="/news/" class="sitemap-link -child">全体のお知らせ</a></li>
        </ul>
      </li>

      <!-- 情報公開 -->
      <li class="sitemap-item">
        <div class="sitemap-item__head">
          <a class="sitemap-link -parent">情報公開</a>
        </div>
        <ul class="sitemap-child-grid">
          <li><a href="/school/history/" class="sitemap-link -child">学園沿革</a></li>
          <li><a href="/sogoiryo/#info-disclosure" class="sitemap-link -child">大分平松総合医療専門学校</a></li>
          <li><a href="/reha/#info-disclosure" class="sitemap-link -child">大分リハビリテーション専門学校</a></li>
          <li><a href="/igisen/#info-disclosure" class="sitemap-link -child">大分医学技術専門学校</a></li>
          <li><a href="/shika/#info-disclosure" class="sitemap-link -child">大分歯科専門学校</a></li>
        </ul>
      </li>

      <!-- 学科紹介 -->
      <li class="sitemap-item">
        <div class="sitemap-item__head">
          <a href="/department/" class="sitemap-link -parent">学科紹介</a>
        </div>
        <div class="sitemap-course-grid">

          <!-- 大分平松総合医療専門学校 -->
          <div class="sitemap-course-group">
            <a href="/course/hiramatsu/" class="sitemap-link -child -bold">大分平松総合医療専門学校</a>
            <ul class="sitemap-grandchild-list">
              <li><a href="/course/hiramatsu/news/">お知らせ</a></li>
              <li><a href="/course/hiramatsu/blog/">ブログ</a></li>
              <li><a href="/sogoiryo/rinken/">臨床検査学科</a></li>
              <li><a href="/sogoiryo/ce/">臨床工学科</a></li>
              <li><a href="/sogoiryo/ort/">視能訓練学科</a></li>
            </ul>
          </div>

          <!-- 大分リハビリテーション専門学校 -->
          <div class="sitemap-course-group">
            <a href="/reha/" class="sitemap-link -child -bold">大分リハビリテーション専門学校</a>
            <ul class="sitemap-grandchild-list">
              <li><a href="/course/reha/news/">お知らせ</a></li>
              <li><a href="/course/reha/blog/">ブログ</a></li>
              <li><a href="/reha/pt/">理学療法士科</a></li>
              <li><a href="/reha/ot/">作業療法士科</a></li>
              <li><a href="/reha/st/">言語聴覚士科</a></li>
            </ul>
          </div>

          <!-- 大分医学技術専門学校 -->
          <div class="sitemap-course-group">
            <a href="/igisen" class="sitemap-link -child -bold">大分医学技術専門学校</a>
            <ul class="sitemap-grandchild-list">
              <li><a href="/course/igaku/news/">お知らせ</a></li>
              <li><a href="/course/igaku/blog/">ブログ</a></li>
              <li><a href="/igisen/jt/">柔道整復師科</a></li>
            </ul>
          </div>

          <!-- 大分歯科専門学校 -->
          <div class="sitemap-course-group">
            <a href="/shika/" class="sitemap-link -child -bold">大分歯科専門学校</a>
            <ul class="sitemap-grandchild-list">
              <li><a href="/course/shika/news/">お知らせ</a></li>
              <li><a href="/course/shika/blog/">ブログ</a></li>
              <li><a href="/shika/dh/">歯科衛生士科</a></li>
            </ul>
          </div>

        </div>
      </li>

      <!-- 資格・就職 -->
      <li class="sitemap-item">
        <div class="sitemap-item__head">
          <a href="/career/" class="sitemap-link -parent">資格・就職</a>
        </div>
        <ul class="sitemap-child-grid">
          <li><a href="/career/license/" class="sitemap-link -child">資格取得実績</a></li>
          <li><a href="/career/employment/" class="sitemap-link -child">就職実績</a></li>
          <li><a href="/career/study-support/" class="sitemap-link -child">学習サポート情報</a></li>
          <li><a href="/career/career-support/" class="sitemap-link -child">進路サポート情報</a></li>
        </ul>
      </li>

      <!-- 入学案内 -->
      <li class="sitemap-item">
        <div class="sitemap-item__head">
          <a href="/admission/" class="sitemap-link -parent">入学案内</a>
        </div>
        <ul class="sitemap-child-grid">
          <li><a href="https://www.hiramatsu.ac.jp/wp-content/themes/hiramatsu/pdf/bosyu_iryo.pdf" target="_blank" rel="noopener noreferrer" class="sitemap-link -child">募集要項［PDF］</a></li>
          <li><a href="/admission/tuition/" class="sitemap-link -child">学費のご案内</a></li>
          <li><a href="/admission/tuition-support/" class="sitemap-link -child">学費サポート</a></li>
          <li><a href="https://www.hiramatsu.ac.jp/admissions" target="_blank" rel="noopener noreferrer" class="sitemap-link -child">出願書類ダウンロード</a></li>
        </ul>
      </li>

      <!-- オープンキャンパス -->
      <li class="sitemap-item">
        <div class="sitemap-item__head">
          <a href="/opencampus/" class="sitemap-link -parent">オープンキャンパス</a>
        </div>
        <ul class="sitemap-child-grid">
          <li><a href="/opencampus/" class="sitemap-link -child">オープンキャンパス情報</a></li>
          <li><a href="/online-consultation/" class="sitemap-link -child">オンライン個別相談会</a></li>
          <li><a href="/pdf/lecture.pdf" target="_blank" rel="noopener noreferrer" class="sitemap-link -child">出張講義［PDF］</a></li>
        </ul>
      </li>

      <!-- 単独項目群 -->
      <li class="sitemap-item">
        <div class="sitemap-item__head">
          <a href="/request/" class="sitemap-link -parent">資料請求</a>
        </div>
      </li>
      <li class="sitemap-item">
        <div class="sitemap-item__head">
          <a href="https://www.hiramatsu.ac.jp/access" class="sitemap-link -parent">アクセス</a>
        </div>
      </li>
      <li class="sitemap-item">
        <div class="sitemap-item__head">
          <a href="/contact/" class="sitemap-link -parent">お問い合わせ</a>
        </div>
      </li>
      <li class="sitemap-item">
        <div class="sitemap-item__head">
          <a href="/news/" class="sitemap-link -parent">新着情報</a>
        </div>
      </li>
      <li class="sitemap-item">
        <div class="sitemap-item__head">
          <a href="/recruiter/" class="sitemap-link -parent">採用担当者様へ</a>
        </div>
      </li>
      <li class="sitemap-item">
        <div class="sitemap-item__head">
          <a href="/privacypolicy/" class="sitemap-link -parent">プライバシーポリシー</a>
        </div>
      </li>

    </ul>

    <!-- グループ校エリア -->
    <div class="sitemap-group-block">
      <h3 class="sitemap-group-title">学校法人平松学園 グループ校</h3>
      <ul class="sitemap-child-grid">
        <li><a href="https://www.hiramatsu.ac.jp/" target="_blank" rel="noopener noreferrer" class="sitemap-link -child">平松学園 HOME</a></li>
        <li><a href="https://www.hiramatsu.ac.jp/kindergarten" target="_blank" rel="noopener noreferrer" class="sitemap-link -child">幼稚園（千代町・城南・明野第一）</a></li>
        <li><a href="https://www.hiramatsu.ac.jp/koyo" target="_blank" rel="noopener noreferrer" class="sitemap-link -child">向陽中学校</a></li>
        <li><a href="https://www.hiramatsu.ac.jp/tomei" target="_blank" rel="noopener noreferrer" class="sitemap-link -child">大分東明高等学校</a></li>
        <li><a href="https://www.oitatandai.ac.jp/" target="_blank" rel="noopener noreferrer" class="sitemap-link -child">大分短期大学園芸科</a></li>
      </ul>
    </div>

  </div>
</section>




<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>