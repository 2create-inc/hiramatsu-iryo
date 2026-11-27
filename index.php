<?php
$page_title = "学校法人 平松学園 医療系専門学校";
$page_desc  = "学校法人 平松学園 医療系専門学校Webサイトです。";

include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>



<!-- ==========================================================================
     SECTION: TOP MAIN VISUAL (トップページ メインビジュアル)
     ========================================================================== -->
<section class="section-top-mv" id="js-mv">
  <div class="top-mv-container">

    <!-- --------------------------------------------------------------------
         1. PC用レイアウト（横1列 / 1〜8番 / 右から左へ無限ループ）
         -------------------------------------------------------------------- -->
    <div class="top-mv-pc-slider">
      <div class="top-mv-track -left">
        <!-- 1周目 (1〜8) -->
        <figure class="top-mv-item"><img src="/images/top/mv_01.jpg" alt="実習風景 1" width="720" height="900" loading="eager"></figure>
        <figure class="top-mv-item"><img src="/images/top/mv_02.jpg" alt="実習風景 2" width="720" height="900" loading="eager"></figure>
        <figure class="top-mv-item"><img src="/images/top/mv_03.jpg" alt="実習風景 3" width="720" height="900" loading="eager"></figure>
        <figure class="top-mv-item"><img src="/images/top/mv_04.jpg" alt="実習風景 4" width="720" height="900" loading="eager"></figure>
        <figure class="top-mv-item"><img src="/images/top/mv_05.jpg" alt="実習風景 5" width="720" height="900" loading="eager"></figure>
        <figure class="top-mv-item"><img src="/images/top/mv_06.jpg" alt="実習風景 6" width="720" height="900" loading="eager"></figure>
        <figure class="top-mv-item"><img src="/images/top/mv_07.jpg" alt="実習風景 7" width="720" height="900" loading="eager"></figure>
        <figure class="top-mv-item"><img src="/images/top/mv_08.jpg" alt="実習風景 8" width="720" height="900" loading="eager"></figure>

        <!-- 2周目 (ループ継ぎ目用ダミー 1〜8) -->
        <figure class="top-mv-item" aria-hidden="true"><img src="/images/top/mv_01.jpg" alt="" width="720" height="900" loading="eager"></figure>
        <figure class="top-mv-item" aria-hidden="true"><img src="/images/top/mv_02.jpg" alt="" width="720" height="900" loading="eager"></figure>
        <figure class="top-mv-item" aria-hidden="true"><img src="/images/top/mv_03.jpg" alt="" width="720" height="900" loading="eager"></figure>
        <figure class="top-mv-item" aria-hidden="true"><img src="/images/top/mv_04.jpg" alt="" width="720" height="900" loading="eager"></figure>
        <figure class="top-mv-item" aria-hidden="true"><img src="/images/top/mv_05.jpg" alt="" width="720" height="900" loading="eager"></figure>
        <figure class="top-mv-item" aria-hidden="true"><img src="/images/top/mv_06.jpg" alt="" width="720" height="900" loading="eager"></figure>
        <figure class="top-mv-item" aria-hidden="true"><img src="/images/top/mv_07.jpg" alt="" width="720" height="900" loading="eager"></figure>
        <figure class="top-mv-item" aria-hidden="true"><img src="/images/top/mv_08.jpg" alt="" width="720" height="900" loading="eager"></figure>
      </div>
    </div>


    <!-- --------------------------------------------------------------------
         2. スマホ用レイアウト（縦2段 / 奇数・偶数分け / 相互逆方向無限ループ）
         -------------------------------------------------------------------- -->
    <div class="top-mv-sp-slider">

      <!-- 1段目 (奇数: 1, 3, 5, 7 / 右から左へスクロール) -->
      <div class="top-mv-sp-row">
        <div class="top-mv-track -left">
          <!-- 1周目 -->
          <figure class="top-mv-item"><img src="/images/top/mv_01_sp.jpg" alt="実習風景 1" width="375" height="230" loading="eager"></figure>
          <figure class="top-mv-item"><img src="/images/top/mv_03_sp.jpg" alt="実習風景 3" width="375" height="230" loading="eager"></figure>
          <figure class="top-mv-item"><img src="/images/top/mv_05_sp.jpg" alt="実習風景 5" width="375" height="230" loading="eager"></figure>
          <figure class="top-mv-item"><img src="/images/top/mv_07_sp.jpg" alt="実習風景 7" width="375" height="230" loading="eager"></figure>
          <!-- 2周目 -->
          <figure class="top-mv-item" aria-hidden="true"><img src="/images/top/mv_01_sp.jpg" alt="" width="375" height="230" loading="eager"></figure>
          <figure class="top-mv-item" aria-hidden="true"><img src="/images/top/mv_03_sp.jpg" alt="" width="375" height="230" loading="eager"></figure>
          <figure class="top-mv-item" aria-hidden="true"><img src="/images/top/mv_05_sp.jpg" alt="" width="375" height="230" loading="eager"></figure>
          <figure class="top-mv-item" aria-hidden="true"><img src="/images/top/mv_07_sp.jpg" alt="" width="375" height="230" loading="eager"></figure>
        </div>
      </div>

      <!-- 2段目 (偶数: 2, 4, 6, 8 / 左から右へ逆方向スクロール) -->
      <div class="top-mv-sp-row">
        <div class="top-mv-track -right">
          <!-- 1周目 -->
          <figure class="top-mv-item"><img src="/images/top/mv_02_sp.jpg" alt="実習風景 2" width="375" height="230" loading="eager"></figure>
          <figure class="top-mv-item"><img src="/images/top/mv_04_sp.jpg" alt="実習風景 4" width="375" height="230" loading="eager"></figure>
          <figure class="top-mv-item"><img src="/images/top/mv_06_sp.jpg" alt="実習風景 6" width="375" height="230" loading="eager"></figure>
          <figure class="top-mv-item"><img src="/images/top/mv_08_sp.jpg" alt="実習風景 8" width="375" height="230" loading="eager"></figure>
          <!-- 2周目 -->
          <figure class="top-mv-item" aria-hidden="true"><img src="/images/top/mv_02_sp.jpg" alt="" width="375" height="230" loading="eager"></figure>
          <figure class="top-mv-item" aria-hidden="true"><img src="/images/top/mv_04_sp.jpg" alt="" width="375" height="230" loading="eager"></figure>
          <figure class="top-mv-item" aria-hidden="true"><img src="/images/top/mv_06_sp.jpg" alt="" width="375" height="230" loading="eager"></figure>
          <figure class="top-mv-item" aria-hidden="true"><img src="/images/top/mv_08_sp.jpg" alt="" width="375" height="230" loading="eager"></figure>
        </div>
      </div>

    </div><!-- /top-mv-sp-slider -->

  </div>

  <h1 class="top-mv-copy"><img src="/images/top/top-mv-copy.png" alt="一生モノの仕事に出会える場所"></h1>
</section>




<section class="section-departments reveal is-visible">
  <div class="section__inner">

    <div class="top-section-header">
      <span class="top-section-header__sub"><span><img src="/images/top/ico-yellow.svg"></span>コース紹介</span>
      <h2 class="top-section-header__title">COURSE<span>充実した8つのコースから、自分にあったコースを選べます。</span></h2>
    </div>

    <!-- 学科カードリスト（2カラムグリッド） -->
    <ul class="department-list">

      <!-- 1. 臨床検査学科 -->
      <li class="department-list__item">
        <a href="/sogoiryo/rinken/" class="department-card">
          <div class="department-card__img-wrap">
            <img src="/images/department/thumb_inspection.jpg" alt="臨床検査学科の実習風景" loading="lazy">
          </div>
          <div class="department-card__body">
            <div class="department-card__icon -lab">
              <img src="/images/department//ico_lab.svg" alt="" width="24" height="24">
            </div>
            <div class="department-card__info">
              <h2 class="department-card__title">臨床検査学科</h2>
              <p class="department-card__catch">現代医療を支える検査のスペシャリスト</p>
            </div>
            <span class="department-card__arrow" aria-hidden="true"></span>
          </div>
        </a>
      </li>

      <!-- 2. 臨床工学科 -->
      <li class="department-list__item">
        <a href="/sogoiryo/ce/" class="department-card">
          <div class="department-card__img-wrap">
            <img src="/images/department/thumb_engineering.jpg" alt="臨床工学科の実習風景" loading="lazy">
          </div>
          <div class="department-card__body">
            <div class="department-card__icon -eng">
              <img src="/images/department/ico_eng.svg" alt="" width="24" height="24">
            </div>
            <div class="department-card__info">
              <h2 class="department-card__title">臨床工学科</h2>
              <p class="department-card__catch">医療機器の管理・操作のスペシャリスト</p>
            </div>
            <span class="department-card__arrow" aria-hidden="true"></span>
          </div>
        </a>
      </li>

      <!-- 3. 視能訓練学科 -->
      <li class="department-list__item">
        <a href="/sogoiryo/ort/" class="department-card">
          <div class="department-card__img-wrap">
            <img src="/images/department/thumb_orthoptics.jpg" alt="視能訓練学科の実習風景" loading="lazy">
          </div>
          <div class="department-card__body">
            <div class="department-card__icon -opt">
              <img src="/images/department/ico_opt.svg" alt="" width="24" height="24">
            </div>
            <div class="department-card__info">
              <h2 class="department-card__title">視能訓練学科</h2>
              <p class="department-card__catch">目の健康を守る視覚のスペシャリスト</p>
            </div>
            <span class="department-card__arrow" aria-hidden="true"></span>
          </div>
        </a>
      </li>

      <!-- 4. 理学療法士科 -->
      <li class="department-list__item">
        <a href="/department/pt/" class="department-card">
          <div class="department-card__img-wrap">
            <img src="/images/department/thumb_pt.jpg" alt="理学療法士科の実習風景" loading="lazy">
          </div>
          <div class="department-card__body">
            <div class="department-card__icon -pt">
              <img src="/images/department/ico_pt.svg" alt="" width="24" height="24">
            </div>
            <div class="department-card__info">
              <h2 class="department-card__title">理学療法士科</h2>
              <p class="department-card__catch">身体づくりと運動機能のスペシャリスト</p>
            </div>
            <span class="department-card__arrow" aria-hidden="true"></span>
          </div>
        </a>
      </li>

      <!-- 5. 作業療法士科 -->
      <li class="department-list__item">
        <a href="/department/ot/" class="department-card">
          <div class="department-card__img-wrap">
            <img src="/images/department/thumb_ot.jpg" alt="作業療法士科の実習風景" loading="lazy">
          </div>
          <div class="department-card__body">
            <div class="department-card__icon -ot">
              <img src="/images/department/ico_ot.svg" alt="" width="24" height="24">
            </div>
            <div class="department-card__info">
              <h2 class="department-card__title">作業療法士科</h2>
              <p class="department-card__catch">ひとの生活をつくる作業のスペシャリスト</p>
            </div>
            <span class="department-card__arrow" aria-hidden="true"></span>
          </div>
        </a>
      </li>

      <!-- 6. 言語聴覚士科 -->
      <li class="department-list__item">
        <a href="/department/st/" class="department-card">
          <div class="department-card__img-wrap">
            <img src="/images/department/thumb_st.jpg" alt="言語聴覚士科の実習風景" loading="lazy">
          </div>
          <div class="department-card__body">
            <div class="department-card__icon -st">
              <img src="/images/department/ico_st.svg" alt="" width="24" height="24">
            </div>
            <div class="department-card__info">
              <h2 class="department-card__title">言語聴覚士科</h2>
              <p class="department-card__catch">「心とことば」をつなぐスペシャリスト</p>
            </div>
            <span class="department-card__arrow" aria-hidden="true"></span>
          </div>
        </a>
      </li>

      <!-- 7. 柔道整復師科 -->
      <li class="department-list__item">
        <a href="/department/judo/" class="department-card">
          <div class="department-card__img-wrap">
            <img src="/images/department/thumb_judo.jpg" alt="柔道整復師科の実習風景" loading="lazy">
          </div>
          <div class="department-card__body">
            <div class="department-card__icon -judo">
              <img src="/images/department/ico_judo.svg" alt="" width="24" height="24">
            </div>
            <div class="department-card__info">
              <h2 class="department-card__title">柔道整復師科</h2>
              <p class="department-card__catch">骨折・脱臼・捻挫などケガ治療のスペシャリスト</p>
            </div>
            <span class="department-card__arrow" aria-hidden="true"></span>
          </div>
        </a>
      </li>

      <!-- 8. 歯科衛生士科 -->
      <li class="department-list__item">
        <a href="/department/dh/" class="department-card">
          <div class="department-card__img-wrap">
            <img src="/images/department/thumb_dh.jpg" alt="歯科衛生士科の実習風景" loading="lazy">
          </div>
          <div class="department-card__body">
            <div class="department-card__icon -dh">
              <img src="/images/department/ico_dh.svg" alt="" width="24" height="24">
            </div>
            <div class="department-card__info">
              <h2 class="department-card__title">歯科衛生士科</h2>
              <p class="department-card__catch">歯・口腔のケアを通し全身の健康を支えるスペシャリスト</p>
            </div>
            <span class="department-card__arrow" aria-hidden="true"></span>
          </div>
        </a>
      </li>

    </ul>

  </div>
</section>


<!-- ==========================================================================
     SECTION: TOP NEWS (トップページ 全体のお知らせ セクション)
     ========================================================================== -->
<section class="section-top-news">
  <div class="section__inner">

    <div class="top-news-container">

      <!-- --------------------------------------------------------------------
           LEFT: HEADER & TAB FILTER & MORE LINK (左カラム)
           -------------------------------------------------------------------- -->
      <div class="top-news__side">

        <!-- セクションヘッダー (全体のお知らせ / NEWS) -->
        <div class="top-section-header">
          <span class="top-section-header__sub"><span><img src="/images/top/ico-green.svg"></span>全体のお知らせ</span>
          <h2 class="top-section-header__title">NEWS</h2>
        </div>

        <!-- 縦並びカテゴリタブフィルター -->
        <ul class="top-news-tab-list" role="tablist" aria-label="お知らせカテゴリ">
          <li role="presentation">
            <button type="button" class="tab-btn -active" role="tab" aria-selected="true">すべて</button>
          </li>
          <li role="presentation">
            <button type="button" class="tab-btn" role="tab" aria-selected="false">お知らせ</button>
          </li>
          <li role="presentation">
            <button type="button" class="tab-btn" role="tab" aria-selected="false">入試情報</button>
          </li>
          <li role="presentation">
            <button type="button" class="tab-btn" role="tab" aria-selected="false">イベント</button>
          </li>
          <li role="presentation">
            <button type="button" class="tab-btn" role="tab" aria-selected="false">ブログ</button>
          </li>
        </ul>

        <!-- 一覧を見るボタン（52px 丸囲み矢印） -->
        <a href="/news/" class="top-news-more-btn">
          <span class="txt">一覧をみる</span>
          <span class="arrow" aria-hidden="true"></span>
        </a>

      </div><!-- /top-news__side -->


      <!-- --------------------------------------------------------------------
           RIGHT: ARTICLE LIST (右カラム 記事リスト)
           -------------------------------------------------------------------- -->
      <div class="top-news__main">
        <ul class="top-news-article-list">

          <!-- 記事 1 -->
          <li class="top-news-article-item">
            <a href="/news/details.php" class="article-link">
              <div class="meta">
                <time datetime="2026-00-00" class="date">2026.00.00</time>
                <span class="badge -entrance">入試情報</span>
              </div>
              <p class="title">2027年4月入学向け「入学案内」「募集要項」が完成しました！</p>
            </a>
          </li>

          <!-- 記事 2 -->
          <li class="top-news-article-item">
            <a href="/news/details.php" class="article-link">
              <div class="meta">
                <time datetime="2026-00-00" class="date">2026.00.00</time>
                <span class="badge -info">お知らせ</span>
              </div>
              <p class="title">再進学をご検討のみなさまへ</p>
            </a>
          </li>

          <!-- 記事 3 -->
          <li class="top-news-article-item">
            <a href="/news/details.php" class="article-link">
              <div class="meta">
                <time datetime="2026-00-00" class="date">2026.00.00</time>
                <span class="badge -entrance">入試情報</span>
              </div>
              <p class="title">2027年4月入学向け「入学案内」「募集要項」が完成しました！</p>
            </a>
          </li>

          <!-- 記事 4 -->
          <li class="top-news-article-item">
            <a href="/news/details.php" class="article-link">
              <div class="meta">
                <time datetime="2026-00-00" class="date">2026.00.00</time>
                <span class="badge -blog">ブログ</span>
                <span class="badge -dept">臨床検査学科</span>
              </div>
              <p class="title">タイトルはいりますタイトルはいりますタイトルはいりますタイトルはいりますタイトルはいります。</p>
            </a>
          </li>

          <!-- 記事 5 -->
          <li class="top-news-article-item">
            <a href="/news/details.php" class="article-link">
              <div class="meta">
                <time datetime="2026-00-00" class="date">2026.00.00</time>
                <span class="badge -event">イベント</span>
              </div>
              <p class="title">2026年オープンキャンパスを開催します！</p>
            </a>
          </li>

          <!-- 記事 6 -->
          <li class="top-news-article-item">
            <a href="/news/details.php" class="article-link">
              <div class="meta">
                <time datetime="2026-00-00" class="date">2026.00.00</time>
                <span class="badge -info">お知らせ</span>
              </div>
              <p class="title">ホームページをリニューアルしました。</p>
            </a>
          </li>

        </ul>
      </div><!-- /top-news__main -->

    </div><!-- /top-news-container -->

  </div>
</section>


<!-- ==========================================================================
     SECTION: TOPICS (トピックス セクション)
     ========================================================================== -->
<section class="section-top-topics section-rainbow-border">
  <div class="section__inner">

    <!-- 共通セクションヘッダー (TOPICS / トピックス) -->
    <div class="top-section-header">
      <span class="top-section-header__sub"><span><img src="/images/top/ico-pink.svg"></span>トピックス</span>
      <h2 class="top-section-header__title">TOPICS</h2>
    </div>

    <div class="top-topics-container">

      <!-- --------------------------------------------------------------------
           1. 上段：4コラムナビゲーションカード (テキスト構築)
           -------------------------------------------------------------------- -->
      <div class="top-topics-nav-grid">

        <!-- 1. キャンパスライフ -->
        <a href="/campuslife/" class="top-topics-nav-card">
          <figure class="top-topics-nav-card__img">
            <img src="/images/top/topics_nav_01.png" alt="キャンパスライフ" loading="lazy">
          </figure>
          <div class="top-topics-nav-card__info">
            <div class="txt-group">
              <span class="ja">キャンパスライフ</span>
              <span class="en">Campus Life</span>
            </div>
            <span class="arrow" aria-hidden="true"></span>
          </div>
        </a>

        <!-- 2. 学内施設 -->
        <a href="/facilities/" class="top-topics-nav-card">
          <figure class="top-topics-nav-card__img">
            <img src="/images/top/topics_nav_02.png" alt="学内施設" loading="lazy">
          </figure>
          <div class="top-topics-nav-card__info">
            <div class="txt-group">
              <span class="ja">学内施設</span>
              <span class="en">Facilities</span>
            </div>
            <span class="arrow" aria-hidden="true"></span>
          </div>
        </a>

        <!-- 3. 入試情報・募集要項 -->
        <a href="/guide/" class="top-topics-nav-card">
          <figure class="top-topics-nav-card__img">
            <img src="/images/top/topics_nav_03.png" alt="入試情報・募集要項" loading="lazy">
          </figure>
          <div class="top-topics-nav-card__info">
            <div class="txt-group">
              <span class="ja">入試情報・募集要項</span>
              <span class="en">Guide</span>
            </div>
            <span class="arrow" aria-hidden="true"></span>
          </div>
        </a>

        <!-- 4. よくある質問 -->
        <a href="/faq/" class="top-topics-nav-card">
          <figure class="top-topics-nav-card__img">
            <img src="/images/top/topics_nav_04.png" alt="よくある質問" loading="lazy">
          </figure>
          <div class="top-topics-nav-card__info">
            <div class="txt-group">
              <span class="ja">よくある質問</span>
              <span class="en">Q&A</span>
            </div>
            <span class="arrow" aria-hidden="true"></span>
          </div>
        </a>

      </div><!-- /top-topics-nav-grid -->


      <!-- --------------------------------------------------------------------
           2. 下段：大型バナーブロック (2コラム)
           -------------------------------------------------------------------- -->
      <div class="top-topics-banner-grid">

        <!-- オープンキャンパス 2026 バナー -->
        <a href="/opencampus/" class="top-topics-banner-item">
          <figure class="banner-img">
            <img src="/images/top/banner_oc.png" alt="平松学園医療系専門学校 オープンキャンパス OPEN CAMPUS 2026" loading="lazy">
          </figure>
        </a>

        <!-- LINE公式 デジタルパンフレット バナー -->
        <a href="https://page.line.me/574beals" target="_blank" rel="noopener noreferrer" class="top-topics-banner-item">
          <figure class="banner-img">
            <img src="/images/top/banner_line.png" alt="LINE追加ですぐ読める！ デジタルパンフレット 公式LINE登録はこちら" loading="lazy">
          </figure>
        </a>

      </div><!-- /top-topics-banner-grid -->

    </div><!-- /top-topics-container -->

  </div>
</section>




<section class="section-departments reveal">
  <div class="section__inner">
    <div class="school-intro-block">

      <!-- 共通セクションヘッダー (School / 学校紹介) -->
      <div class="hiramatsu-support-header">
        <span class="hiramatsu-support-header__en">School</span>
        <h2 class="hiramatsu-support-header__title">学校紹介</h2>
      </div>

      <div class="school-intro-grid">

        <!-- 1. 大分平松総合医療専門学校 -->
        <a href="/sogoiryo/" class="school-intro-card">
          <figure class="school-intro-card__img">
            <img src="/images/common/school_photo_01.jpg" alt="大分平松総合医療専門学校 外観" width="300" height="500" loading="lazy">
          </figure>
          <div class="school-intro-card__label">
            <span class="txt">大分平松総合医療専門学校</span>
            <span class="arrow" aria-hidden="true"></span>
          </div>
        </a>

        <!-- 2. 大分リハビリテーション専門学校 -->
        <a href="/reha/" class="school-intro-card">
          <figure class="school-intro-card__img">
            <img src="/images/common/school_photo_02.jpg" alt="大分リハビリテーション専門学校 外観" width="300" height="500" loading="lazy">
          </figure>
          <div class="school-intro-card__label">
            <span class="txt">大分リハビリテーション専門学校</span>
            <span class="arrow" aria-hidden="true"></span>
          </div>
        </a>

        <!-- 3. 大分医学技術専門学校 -->
        <a href="/igisen/" class="school-intro-card">
          <figure class="school-intro-card__img">
            <img src="/images/common/school_photo_03.jpg" alt="大分医学技術専門学校 外観" width="300" height="500" loading="lazy">
          </figure>
          <div class="school-intro-card__label">
            <span class="txt">大分医学技術専門学校</span>
            <span class="arrow" aria-hidden="true"></span>
          </div>
        </a>

        <!-- 4. 大分歯科専門学校 -->
        <a href="/shika/" class="school-intro-card">
          <figure class="school-intro-card__img">
            <img src="/images/common/school_photo_04.jpg" alt="大分歯科専門学校 外観" width="300" height="500" loading="lazy">
          </figure>
          <div class="school-intro-card__label">
            <span class="txt">大分歯科専門学校</span>
            <span class="arrow" aria-hidden="true"></span>
          </div>
        </a>

      </div><!-- /school-intro-grid -->
    </div>
  </div>
</section>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>