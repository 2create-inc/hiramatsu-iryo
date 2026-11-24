<?php
$page_title = "学科紹介";
$page_desc  = "学科紹介ページです。";

include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>


<section class="section-page-mv" id="js-mv">
<div class="page-header">
  <h1><span class="en">Course introduction</span>学科紹介</h1>
  <ul class="pankuzu-list">
    <li><a href="/">HOME</a></li>
    <li>学科紹介</li>
  </ul>
</div>
<div class="page-mv"><img src="/images/department/mv.jpg"></div>
</section>





<!-- 学科一覧セクション -->
<section class="section-departments reveal">
  <div class="section__inner">
    
    <!-- リード文 -->
    <p class="department-lead">
      4校8学科からなる平松学園医療系専門学校の<br class="is-mobile-block">学科についてご紹介します。
    </p>

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


<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/section-conversion.php'); ?>


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
        <a href="/medical/" class="school-intro-card">
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
        <a href="/igaku/" class="school-intro-card">
          <figure class="school-intro-card__img">
            <img src="/images/common/school_photo_03.jpg" alt="大分医学技術専門学校 外観" width="300" height="500" loading="lazy">
          </figure>
          <div class="school-intro-card__label">
            <span class="txt">大分医学技術専門学校</span>
            <span class="arrow" aria-hidden="true"></span>
          </div>
        </a>

        <!-- 4. 大分歯科専門学校 -->
        <a href="/dental/" class="school-intro-card">
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
