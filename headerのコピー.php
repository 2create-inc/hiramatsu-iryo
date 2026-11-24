<!DOCTYPE html>
<html lang="ja">

<head>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="https://hiramatsu-iryo.jp/images/ogp.png">

  <title><?php echo isset($page_title) ? $page_title . '｜平松学園医療系専門学校' : 'サイト名'; ?></title>
  <meta name="description" content="<?php echo isset($page_desc) ? $page_desc : 'デフォルトのディスクリプションテキストが入ります。'; ?>">

  <!-- OGP -->
 

  <!-- CSS -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!--font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/qde8uvn.css">

  <!-- JQuey -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

  <script defer src="/js/apps.js"></script> 

</head>


<body>


<header class="site-header" id="js-header">
  <div class="header-inner">
    <h1 class="header-logo">
      <a href="/"><img src="/images/common/logo.svg" alt="学校法人 平松学園 医療系専門学校"></a>
    </h1>
    
    <div class="header-nav-area">
      <div class="header-sub-row">
        <ul class="sub-links">
          <li><a href="https://www.hiramatsu.ac.jp/access/" class="icon-access">アクセス</a></li>
          <li><a href="https://www.hiramatsu.ac.jp/contact/" class="icon-contact">お問い合わせ</a></li>
        </ul>
        <ul class="sub-links-bnr">
          <li><a href="https://page.line.me/574beals" class="line-banner" target="_blank" rel="noopener noreferrer">
          <img src="/images/common/header_line-banner.png" alt="公式LINE 相談会・オープンキャンパスの予約も受付中">
        </a></li>
        </ul>
      </div>

      <nav class="pc-nav">
        <ul>
          <li>
            <a href="/school/">学校紹介</a>
            <div class="nav-sub-block">
              <h2><a href="/school/">学校紹介トップ<span class="nav-link__arrow"></span></a></h2>
              <ul>
                <li><a href="/school/campuslife/">キャンパスライフ<span class="nav-link__arrow"></span></a></li>
                <li><a href="/school/history/">沿革<span class="nav-link__arrow"></span></a></li>
                <li><a href="/school/facilities/">学校情報<span class="nav-link__arrow"></span></a></li>
                <li><a href="/school/faq/">よくある質問<span class="nav-link__arrow"></span></a></li>
                <li><a href="/school/pamphlet/">電子パンフレット<span class="nav-link__arrow"></span></a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="/department/">学科紹介</a>
            <div class="nav-sub-block">
              <h2><a href="/department/">学科紹介トップ<span class="nav-link__arrow"></span></a></h2>
              <ul>
                <li>
                  <dl>
                    <dt><a href="/department/sogoiryo">大分平松総合医療専門学校<span class="nav-link__arrow"></span></a></dt>
                    <dd><a href="/department/sogoiryo/rinken">・臨床検査学科<span class="nav-link__arrow"></span></a></dd>
                    <dd><a href="/department/sogoiryo/ce">・臨床工学科<span class="nav-link__arrow"></span></a></dd>
                    <dd><a href="/department/sogoiryo/ort">・視能訓練学科<span class="nav-link__arrow"></span></a></dd>
                  </dl>
                </li>
                <li>
                  <dl>
                    <dt><a href="/department/reha/">大分リハビリテーション専門学校<span class="nav-link__arrow"></span></a></dt>
                    <dd><a href="/department/reha/course01/about">・理学療法士科<span class="nav-link__arrow"></span></a></dd>
                    <dd><a href="/department/reha/course02/about">・作業療法士科<span class="nav-link__arrow"></span></a></dd>
                    <dd><a href="/department/reha/course03/about">・言語聴覚士科<span class="nav-link__arrow"></span></a></dd>
                  </dl>
                </li>
                <li>
                  <dl>
                    <dt><a href="/department/igisen/">大分医学技術専門学校<span class="nav-link__arrow"></span></a></dt>
                    <dd><a href="/department/igisen/course01/">・柔道整復師科<span class="nav-link__arrow"></span></a></dd>
                  </dl>
                </li>
                <li>
                  <dl>
                    <dt><a href="/department/shika/">大分歯科専門学校</a></dt>
                    <dd><a href="/department/shika/course01/">・・歯科衛生士科<span class="nav-link__arrow"></span></a></dd>
                  </dl>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="/career/">資格・就職</a>
            <div class="nav-sub-block">
              <h2><a href="/career/">資格・就職トップ<span class="nav-link__arrow"></span></a></h2>
              <ul>
                <li><a href="/career/license/">資格取得実績<span class="nav-link__arrow"></span></a></li>
                <li><a href="/career/employment/">就職実績<span class="nav-link__arrow"></span></a></li>
                <li><a href="/career/study-support/">学習サポート情報<<span class="nav-link__arrow"></span>/a></li>
                <li><a href="/career/career-support/">進路サポート情報<span class="nav-link__arrow"></span></a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="https://www.hiramatsu.ac.jp/iryo/admission/">入学案内</a>
            <div class="nav-sub-block">
              <h2><a href="/career/">入学案内トップ<span class="nav-link__arrow"></span></a></h2>
              <ul>
                <li><a href="https://www.hiramatsu.ac.jp/iryo/admission/guideline/">募集要項［PDF］<span class="nav-link__arrow"></span></a></li>
                <li><a href="https://www.hiramatsu.ac.jp/iryo/admission/download/">出願書類ダウンロード<span class="nav-link__arrow"></span></a></li>
                <li><a href="https://www.hiramatsu.ac.jp/iryo/admission/tuition/">学費のご案内<span class="nav-link__arrow"></span></a></li>
                <li><a href="https://www.hiramatsu.ac.jp/iryo/admission/tuition-support/">学費サポート<span class="nav-link__arrow"></span></a></li>
                <li><a href="https://www.hiramatsu.ac.jp/iryo/admission/tuition-support/">生活サポート<span class="nav-link__arrow"></span></a></li>
                <li><a href="">デジタルパンフレット<span class="nav-link__arrow"></span></a></li>
              </ul>
            </div>
          </li>
        </ul>
        <div class="header-btns">
          <a href="https://www.hiramatsu.ac.jp/opencampus" class="btn-oc">オープンキャンパス</a> 
          <a href="https://www.hiramatsu.ac.jp/request/" class="btn-shiryo">資料請求</a>
        </div>
      </nav>

    </div>

    <div class="menu-trigger" id="js-hamburger">
      <span></span>
      <span></span>
    </div>
  </div>
</header>



<nav class="sp-nav" id="js-sp-nav">
  <div class="sp-nav-inner">
    
  <ul class="sp-main-list">
      <li class="has-child">
        <div class="parent-link">
          <span>学校紹介</span>
          <span class="acc-icon"></span>
        </div>
        <ul class="sp-sub-menu">
          <li><a href="/school/">学校紹介</a></li>
          <li><a href="/school/campuslife/">キャンパスライフ</a></li>
          <li><a href="/school/history/">沿革</a></li>
          <li><a href="/school/facilities/">学校情報</a></li>
          <li><a href="/school/faq/">よくある質問</a></li>
          <li><a href="/school/pamphlet/">電子パンフレット</a></li>
        </ul>
      </li>

      <li class="has-child">
        <div class="parent-link">
          <span>学科紹介</span>
          <span class="acc-icon"></span>
        </div>
        <div class="sp-sub-menu">
          <div class="sp-dept-group">
            <p class="sp-dept-ttl">大分平松総合医療専門学校</p>
            <ul>
              <li><a href="https://www.hiramatsu.ac.jp/sogoiryo/rinken">臨床検査学科</a></li>
              <li><a href="https://www.hiramatsu.ac.jp/sogoiryo/ce">臨床工学科</a></li>
              <li><a href="https://www.hiramatsu.ac.jp/sogoiryo/ort">視能訓練学科</a></li>
            </ul>
          </div>
          <div class="sp-dept-group">
            <p class="sp-dept-ttl">大分リハビリテーション専門学校</p>
            <ul>
              <li><a href="https://www.hiramatsu.ac.jp/igisen/course01/about">柔道整復師科</a></li>
              <li><a href="https://www.hiramatsu.ac.jp/reha/course01/about">理学療法士科</a></li>
              <li><a href="https://www.hiramatsu.ac.jp/reha/course02/about">作業療法士科</a></li>
            </ul>
          </div>
          <div class="sp-dept-group">
            <p class="sp-dept-ttl">大分医学技術専門学校</p>
            <ul>
              <li><a href="https://www.hiramatsu.ac.jp/reha/course03/about">言語聴覚士科</a></li>
            </ul>
          </div>
          <div class="sp-dept-group">
            <p class="sp-dept-ttl">大分歯科専門学校</p>
            <ul>
              <li><a href="https://www.hiramatsu.ac.jp/shika/course/shikaeisei/">歯科衛生士科</a></li>
            </ul>
          </div>
        </div>
      </li>

      <li class="has-child">
        <div class="parent-link">
          <span>資格・就職</span>
          <span class="acc-icon"></span>
        </div>
        <ul class="sp-sub-menu">
          <li><a href="https://www.hiramatsu.ac.jp/iryo/career/license/">資格取得実績</a></li>
          <li><a href="https://www.hiramatsu.ac.jp/iryo/career/employment/">就職実績</a></li>
          <li><a href="https://www.hiramatsu.ac.jp/iryo/career/study-support/">学習サポート情報</a></li>
          <li><a href="https://www.hiramatsu.ac.jp/iryo/career/career-support/">進路サポート情報</a></li>
        </ul>
      </li>

      <li class="has-child">
        <div class="parent-link">
          <span>入学案内</span>
          <span class="acc-icon"></span>
        </div>
        <ul class="sp-sub-menu">
          <li><a href="https://www.hiramatsu.ac.jp/iryo/admission/guideline/">募集要項</a></li>
          <li><a href="https://www.hiramatsu.ac.jp/iryo/admission/tuition/">学費のご案内</a></li>
          <li><a href="https://www.hiramatsu.ac.jp/iryo/admission/tuition-support/">学費サポート</a></li>
          <li><a href="https://www.hiramatsu.ac.jp/iryo/admission/download/">出願書類ダウンロード</a></li>
        </ul>
      </li>
    </ul>

    <div class="sp-nav-btns">
      <a href="https://www.hiramatsu.ac.jp/opencampus" class="sp-btn-oc">オープンキャンパス</a>
      <a href="https://www.hiramatsu.ac.jp/request/" class="sp-btn-shiryo">資料請求</a>
    </div>

    <div class="sp-nav-line">
      <a href="https://page.line.me/574beals" target="_blank" rel="noopener noreferrer">
        <img src="/images/common/header_line-banner.png" alt="公式LINE">
      </a>
    </div>

    <ul class="sp-sub-links">
      <li><a href="https://www.hiramatsu.ac.jp/access/"><i class="fa-solid fa-location-dot"></i>アクセス</a></li>
      <li><a href="https://www.hiramatsu.ac.jp/contact/"><i class="fa-regular fa-envelope"></i>お問い合わせ</a></li>
    </ul>

  </div>
</nav>


<a href="https://docs.google.com/forms/d/e/1FAIpQLSetH0Tf9U6bZFvK34WFHIhqAjvCSpZykTK_XhDdmLCWNlyPrw/viewform?usp=pp_url&amp;entry.435875377=unknown" class="side-oc-btn" target="_blank">オープンキャンパス申込<span class="arrow-circle"><i class="fa-solid fa-arrow-right"></i></span></a>

<main>