<?php
$page_title = "臨床検査学科大分平松総合医療専門学校";
$page_desc  = "大分平松総合医療専門学校 臨床検査学科ページです。";

include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>



<!-- ==========================================================================
     DEPARTMENT HERO & ABOUT WRAPPER (高さ追従・完璧レイアウト)
     ========================================================================== -->
<div class="department-hero-wrapper">

  <!-- 1. HERO MVエリア -->
  <section class="section-department-mv">

    <!-- 白背景レイヤー (高さ: 100% - 140px) -->
    <div class="mv-white-bg-layer" aria-hidden="true"></div>

    <!-- 💡 HEROコンテナ (高さを右画像に委ねる親要素) -->
    <div class="department-mv-hero">

      <!-- 💡 左側：絶対配置するテキストエリア (幅: 100% - (920/1440) ≒ 36.111%) -->
      <div class="department-mv-hero__content">

        <!-- パンくずリスト -->
        <nav class="pankuzu-nav" aria-label="パンくずリスト">
          <ol class="pankuzu-list">
            <li><a href="/">HOME</a></li>
            <li><a href="/department/">学科紹介</a></li>
            <li aria-current="page">臨床検査学科</li>
          </ol>
        </nav>

        <!-- 学科情報グループ -->
        <div class="department-mv-hero__main-txt">
          <div class="department-icon -lab">
            <img src="/images/department/ico_lab.svg" alt="" width="48" height="48" loading="lazy">
          </div>

          <h1 class="department-title">臨床検査学科</h1>
          <p class="department-meta">
            <span>3年制</span>
            <span>定員40名</span>
          </p>

          <div class="department-catch">
            <p class="sub">現場医療を支える</p>
            <p class="main">「検査」のスペシャリスト</p>
          </div>

          <!-- 下部グレー領域まで伸ばす縦書き英文 ＆ 矢印軸線 -->
          <div class="department-en-line" aria-hidden="true">
            <span class="txt">Medical Science</span>
            <span class="arrow-line"></span>
          </div>
        </div>

      </div><!-- /department-mv-hero__content -->


      <!-- 💡 右側：高さの基準となるメイン写真 (幅: 920/1440 ≒ 63.888%) -->
      <div class="department-mv-hero__image">
        <figure class="hero-photo">
          <img src="/images/sogoiryo/rinken/mv.jpg" alt="臨床検査学科の実習風景" loading="eager">
        </figure>
      </div>

    </div><!-- /department-mv-hero -->

  </section>

  <!-- 2. 下部：臨床検査技師とは？ エリア (section__inner 使用) -->
  <section class="section-department-about">
    <div class="section__inner">

      <div class="hiramatsu-support-header -center">
        <span class="hiramatsu-support-header__en">About the Course</span>
        <h2 class="hiramatsu-support-header__title">臨床検査技師とは？</h2>
      </div>

      <div class="department-about-body">
        <p>
          臨床検査技師は、医師の指導のもと患者様の検査を行い、結果を分析・報告する医療専門職です。医師はその結果をもとに診断や治療方針を決定するため、医療を支える重要な役割を担っています。<br>
          活躍の場は病院や検査センター、製薬企業、医療機器メーカー、治験施設など幅広く、健康志向の高まりや高齢化により人間ドックや健康診断の分野でも需要が高まっています。<br>
          また、細胞検査士や超音波検査士などの認定資格を取得することで、専門性を高めながら新たな分野へ挑戦することも可能です。
        </p>
      </div>

    </div>
  </section>

</div><!-- /department-hero-wrapper -->




<!-- ==========================================================================
     SECTION: DEPARTMENT FEATURES (学科の特色 - スライダー付き2カラム)
     ========================================================================== -->
<section class="section-department-features">
  <div class="section__inner">

    <!-- 共通セクションヘッダー (Point / 学科の特色) -->
    <div class="hiramatsu-support-header">
      <span class="hiramatsu-support-header__en">Point</span>
      <h2 class="hiramatsu-support-header__title">学科の特色</h2>
    </div>

    <div class="department-features-container">

      <!-- 左側：ナンバリングポイントリスト (01〜04) -->
      <div class="department-features__content">
        <ol class="department-feature-list">

          <!-- ポイント 01 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">01</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">半世紀を超える信頼と実績</h3>
              <p class="desc">
                県内現役技師の過半数は平松学園卒業生。<br>
                築かれた信頼と実績を継承すべく学び、自らの成長を促し育みます。
              </p>
            </div>
          </li>

          <!-- ポイント 02 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">02</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">目標は国家試験全員受験、全員合格</h3>
              <p class="desc">
                資格取得に向けて全力でサポート。<br>
                全学生、全職員が同じ志のもと、3年間を共に歩み続けます。
              </p>
            </div>
          </li>

          <!-- ポイント 03 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">03</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">個別指導で理解度を深める</h3>
              <p class="desc">
                一人一人に合わせ、理解・納得するまで繰り返し指導。<br>
                教員と生徒の距離が近いのも特徴です。
              </p>
            </div>
          </li>

          <!-- ポイント 04 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">04</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">豊富な実習と時代に合わせた講義</h3>
              <p class="desc">
                自ら考え実践できる行動力を養うと共に、チーム医療や院外活動を柔軟に対応できるよう、多職種連携学を導入しています。
              </p>
            </div>
          </li>

        </ol>
      </div>

      <!-- 右側：スライダーエリア (Swiper対応構造) -->
      <div class="department-features__slider">
        <div class="swiper department-feature-swiper">
          <div class="swiper-wrapper">

            <!-- スライド 1 -->
            <div class="swiper-slide">
              <figure class="feature-photo-card">
                <img src="/images/sogoiryo/rinken/feature_01.jpg" alt="豊富な実習風景 1" width="540" height="680" loading="lazy">
              </figure>
            </div>

            <!-- スライド 2 -->
            <div class="swiper-slide">
              <figure class="feature-photo-card">
                <img src="/images/sogoiryo/rinken/feature_02.jpg" alt="豊富な実習風景 2" width="540" height="680" loading="lazy">
              </figure>
            </div>

            <!-- スライド 3 -->
            <div class="swiper-slide">
              <figure class="feature-photo-card">
                <img src="/images/sogoiryo/rinken/feature_03.jpg" alt="豊富な実習風景 3" width="540" height="680" loading="lazy">
              </figure>
            </div>

          </div>
          <!-- ページネーション（ドット指定） -->
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </div><!-- /department-features-container -->

  </div>
</section>




<!-- ==========================================================================
     SECTION: CURRICULUM & CAREER SECTION (カリキュラム・資格・実績・年間行事)
     ========================================================================== -->
<section class="section-department-curriculum section-rainbow-border">
  <div class="section__inner">

    <!-- ----------------------------------------------------------------------
         1. カリキュラム (3年間の学びステップカード)
         ---------------------------------------------------------------------- -->
    <div class="curriculum-block">
      <!-- セクションヘッダー (Curriculum / カリキュラム) -->
      <div class="hiramatsu-support-header">
        <span class="hiramatsu-support-header__en">Curriculum</span>
        <h2 class="hiramatsu-support-header__title">カリキュラム</h2>
      </div>

      <div class="curriculum-grid">

        <!-- 1年次 -->
        <div class="curriculum-card -year1">
          <div class="curriculum-card__head">
            <h3 class="year-ttl">1年次</h3>
            <p class="year-desc">チーム医療の一員としての臨床検査技師の役割を理解し、医学の基礎と教養を学ぶ</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">医療人としての教養と医学の基礎（人体構造・機能）を学ぶ</p>
              <p class="subjects">基礎医学概要I・II / 国際理解 / 社会福祉全般 / キャリアデザイン論 / 教養救急医学</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">臨床検査技師の基礎を学ぶ</p>
              <p class="subjects">解剖学 / 生理学 / 生化学 / 病理学 / 遺伝子発現体検査学 / 医療情報処理学 など</p>
            </div>
          </div>
        </div>

        <!-- 2年次 -->
        <div class="curriculum-card -year2">
          <div class="curriculum-card__head">
            <h3 class="year-ttl">2年次</h3>
            <p class="year-desc">基礎分野を土台として臨床検査の専門分野に繋ぐ臨床力・思考力を養う</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">臨床検査技師の専門を学び、知識と技術を深める</p>
              <p class="subjects">一般検査学 / 循環器機能検査実習 / 生化学検査実習 / 公衆衛生検査学実習 / 臨床物性検査学 / 輸血検査学 / 輸血移植検査学実習 など</p>
            </div>
          </div>
        </div>

        <!-- 3年次 -->
        <div class="curriculum-card -year3">
          <div class="curriculum-card__head">
            <h3 class="year-ttl">3年次</h3>
            <p class="year-desc">臨地実習を通して、臨床検査技師の即戦力を身につけ、国家試験に合格する</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">学内での演習を通じて、スムーズな臨地実習への導入を図る</p>
              <p class="subjects">他就実習臨床演習 / 国家試験合格ゼミ / 検査総合医学</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">臨地実習</p>
              <p class="subjects">臨地実習（学外・病棟 約10〜12週間）</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">国家試験対策</p>
              <p class="subjects">検査データ解説や看護検査学などの応用学習</p>
            </div>
          </div>
        </div>

      </div><!-- /curriculum-grid -->
    </div><!-- /curriculum-block -->


    <!-- ----------------------------------------------------------------------
         2. 獲得できる資格
         ---------------------------------------------------------------------- -->
    <div class="career-block">
      <div class="underline-header">
        <h2 class="headline2_underline-style">獲得できる資格</h2>
      </div>

      <ul class="qualification-list">
        <li>臨床検査技師国家試験受験資格</li>
        <li>専門士（医療専門課程）</li>
        <li>毒物劇物取扱者（国家資格）</li>
        <li>有機溶剤作業主任者（国家資格）</li>
        <li>心電図検定（日本不整脈心電学会）</li>
        <li>第2種ME技術実力検定試験（日本生体医工学会指定）</li>
        <li>救急法救急員（日本赤十字社）</li>
        <li>赤十字健康生活支援員（日本赤十字社）</li>
        <li>赤十字幼児安全法支援員（日本赤十字社）</li>
        <li>認知症サポーター</li>
      </ul>
    </div>


    <!-- ----------------------------------------------------------------------
         3. 就職実績（過去3年間）
         ---------------------------------------------------------------------- -->
    <div class="career-block">
      <div class="underline-header">
        <h2 class="headline2_underline-style">就職実績（過去3年間）</h2>
      </div>

      <div class="employment-group-list">
        <!-- 大分県内 -->
        <div class="employment-group">
          <h3 class="group-ttl">大分県内</h3>
          <p class="hospital-names">
            人吉総合病院 / 人吉医療センター / 国立病院機構別府医療センター / 高田川病院 / パルモア病院 / 日田中央病院 / 大分健生病院 / 大分赤十字病院 / 新別府病院 / 人吉第一メディカルセンター / 大分県立病院 / 杵築市立病院 / 中津市民病院 / 日田中央病院 / 宇佐高田医師会病院 / 湯布院厚生年金病院 / セント・ルカ産婦人科 / 高田中央病院 / 杵築市立病院 / 宇佐高田医師会病院 / 阿部内科小児科医院 / 豊後大野市民病院 / 西日本皮膚病研究所センター / バイオ研究研究所 / (株) BML
          </p>
        </div>

        <!-- 九州内 -->
        <div class="employment-group">
          <h3 class="group-ttl">九州内</h3>
          <p class="hospital-names">
            飯塚病院 / 麻生飯塚病院 / 新行橋病院 / 福岡記念病院 / 福岡和白病院 / 西日本応急医学北九州応急診療所 / 佐賀県健康づくり財団 / 九州医療センター / 熊本武蔵野病院 / 小林市立総合病院 / 宮崎大学医学部附属病院 / 川南病院 / 古賀総合病院 / 鹿児島医療センター / 指宿病院 / (株) LSIメディエンス / (株) シー・アール・シー / (株) ビー・エム・エル・ジャパン
          </p>
        </div>

        <!-- 九州外 -->
        <div class="employment-group">
          <h3 class="group-ttl">九州外</h3>
          <p class="hospital-names">
            加古川市民病院 / 下関市立市民病院 / 枚方公立病院 / 萩患者会病院 / 八尾徳洲会総合病院 / 宇治徳洲会病院 / 岸和田徳洲会病院 / 神戸市立市民病院 / 総合南東北病院 / (株) 兵庫県臨床検査研究所 / (株) ビー・エム・エル / (株) ピーシーエルジャパン / (株) LSIメディエンス / (株) SRL
          </p>
        </div>
      </div>
    </div>


    <!-- ----------------------------------------------------------------------
         4. 年間行事 (12ヶ月イベントグリッド)
         ---------------------------------------------------------------------- -->
    <div class="schedule-block">
      <div class="underline-header">
        <h2 class="headline2_underline-style">年間行事</h2>
      </div>

      <div class="schedule-grid">

        <!-- 前期：4月〜9月 -->
        <div class="schedule-col">
          <!-- 4月 -->
          <div class="schedule-card">
            <div class="month-badge">4<span>月</span></div>
            <ul class="event-list">
              <li>入学式</li>
              <li>新入生研修</li>
              <li>新入生歓迎会</li>
            </ul>
          </div>

          <!-- 5月 -->
          <div class="schedule-card">
            <div class="month-badge">5<span>月</span></div>
            <ul class="event-list">
              <li>体育祭</li>
              <li>臨地実習開始（3年）</li>
            </ul>
          </div>

          <!-- 6月 -->
          <div class="schedule-card">
            <div class="month-badge">6<span>月</span></div>
            <ul class="event-list">
              <li>前期 中間試験（1年・2年）</li>
            </ul>
          </div>

          <!-- 7月 -->
          <div class="schedule-card">
            <div class="month-badge">7<span>月</span></div>
            <ul class="event-list">
              <li>前期 期末試験</li>
            </ul>
          </div>

          <!-- 8月 -->
          <div class="schedule-card">
            <div class="month-badge">8<span>月</span></div>
            <ul class="event-list">
              <li>夏季休み</li>
              <li>毒物劇物取扱者試験</li>
            </ul>
          </div>

          <!-- 9月 -->
          <div class="schedule-card">
            <div class="month-badge">9<span>月</span></div>
            <ul class="event-list">
              <li>第2種ME技術実力検定試験</li>
              <li>臨地実習報告会</li>
              <li>1、2年合同実習・1、2年合同研修</li>
              <li>研修旅行（3年）</li>
            </ul>
          </div>
        </div>

        <!-- 後期：10月〜3月 -->
        <div class="schedule-col">
          <!-- 10月 -->
          <div class="schedule-card">
            <div class="month-badge">10<span>月</span></div>
            <ul class="event-list">
              <li>授業再開</li>
            </ul>
          </div>

          <!-- 11月 -->
          <div class="schedule-card">
            <div class="month-badge">11<span>月</span></div>
            <ul class="event-list">
              <li>学園祭（1年・2年）</li>
              <li>後期 中間試験</li>
            </ul>
          </div>

          <!-- 12月 -->
          <div class="schedule-card">
            <div class="month-badge">12<span>月</span></div>
            <ul class="event-list">
              <li>卒業認定試験</li>
              <li>冬季休み</li>
            </ul>
          </div>

          <!-- 2月 -->
          <div class="schedule-card">
            <div class="month-badge">2<span>月</span></div>
            <ul class="event-list">
              <li>心電図検定</li>
              <li>後期 期末試験</li>
            </ul>
          </div>

          <!-- 3月 -->
          <div class="schedule-card">
            <div class="month-badge">3<span>月</span></div>
            <ul class="event-list">
              <li>卒業式</li>
              <li>有機溶剤作業主任者試験</li>
              <li>春季休み</li>
            </ul>
          </div>
        </div>

      </div><!-- /schedule-grid -->
    </div><!-- /schedule-block -->

  </div>
</section>



<!-- ==========================================================================
     SECTION: REASONS (ヒラマツを選んだ理由 - 在校生メッセージ)
     ========================================================================== -->
<section class="section-department-reasons">

  <div class="section__inner">

    <!-- セクションヘッダー (Reasons / ヒラマツを選んだ理由) -->
    <!-- ダーク背景上のため文字色を白系へ調整するモディファイア -light を付与 -->
    <div class="hiramatsu-support-header -light">
      <span class="hiramatsu-support-header__en">Reasons</span>
      <h2 class="hiramatsu-support-header__title">ヒラマツを選んだ理由</h2>
    </div>

    <!-- 白背景のメッセージ浮遊カード -->
    <div class="reasons-card">

      <!-- 左側：メッセージテキスト ＆ プロフィール -->
      <div class="reasons-card__content">
        <h3 class="reasons-card__catch">
          意欲的に学び、挑戦し、<br>
          信頼される臨床検査技師に
        </h3>

        <div class="reasons-card__body">
          <p>
            新型コロナウイルスが流行した際、医療現場で活躍する臨床検査技師に興味を持ちました。平松学園に進学したのは、オープンキャンパスで感じたあたたかい雰囲気に惹かれたからです。
          </p>
          <p>
            現在は、人体の仕組みなどの専門的な知識や検査の手技を学んでいますが、熱心な先生や優しい先輩のおかげで、主体性を持って意欲的に取り組めています。
          </p>
          <p>
            将来は、超音波検査士の資格にも挑戦し、多くの人に信頼される臨床検査技師を目指したいと思っています。
          </p>
        </div>

        <!-- 学生プロフィール情報 -->
        <div class="reasons-card__profile">
          <p class="student-info">
            <span class="dept">臨床検査学科（2年生）</span>
            <span class="name">汐月 愛莉<span class="honorific">さん</span></span>
            <span class="school">大分県立臼杵高等学校出身</span>
          </p>
        </div>
      </div>

      <!-- 右側：角丸ポートレート写真 -->
      <div class="reasons-card__photo">
        <figure class="student-photo">
          <img src="/images/sogoiryo/rinken/student_photo.jpg" alt="臨床検査学科 汐月 愛莉さん" width="440" height="520" loading="lazy">
        </figure>
      </div>

    </div><!-- /reasons-card -->

  </div>
</section>



<!-- ==========================================================================
     SECTION: VOICE (在校生・卒業生の声 - YouTube 2カラムモジュール)
     ========================================================================== -->
<section class="section-department-voice">
  <div class="section__inner">

    <!-- 共通セクションヘッダー (Voice / 在校生・卒業生の声) -->
    <div class="hiramatsu-support-header">
      <span class="hiramatsu-support-header__en">Voice</span>
      <h2 class="hiramatsu-support-header__title">在校生・卒業生の声</h2>
    </div>

    <!-- 2カラム動画カードグリッド -->
    <div class="department-voice-grid">

      <!-- 1. 在校生インタビュー -->
      <div class="department-voice-card">
        <div class="department-voice-card__video">
          <!-- YouTube埋め込みiframe例（16:9 レスポンシブ対応） -->
          <iframe
            src="https://www.youtube.com/embed/71njXKsuxBk"
            title="在校生インタビュー YouTube"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
            loading="lazy">
          </iframe>
        </div>
        <h3 class="department-voice-card__title">在校生インタビュー</h3>
      </div>

      <!-- 2. 卒業生インタビュー -->
      <div class="department-voice-card">
        <div class="department-voice-card__video">
          <!-- YouTube埋め込みiframe例（16:9 レスポンシブ対応） -->
          <iframe
            src="https://www.youtube.com/embed/xwFIcLKR2QY"
            title="卒業生インタビュー YouTube"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
            loading="lazy">
          </iframe>
        </div>
        <h3 class="department-voice-card__title">卒業生インタビュー</h3>
      </div>

    </div><!-- /department-voice-grid -->

  </div>
</section>



<!-- ==========================================================================
     SECTION: DEPARTMENT ACCESS & BUILDING PHOTO (校舎外観 ＆ アクセス)
     ========================================================================== -->
<section class="section-department-bottom-access">

  <!-- 💡 1. ウィンドウ幅いっぱいに広がる校舎全景ビジュアル (フルブリード) -->
  <div class="department-building-visual">
    <figure class="building-photo">
      <img src="/images/sogoiryo/building_full.jpg" alt="大分平松総合医療専門学校 校舎外観" loading="lazy">
    </figure>
  </div>

  <!-- 💡 2. アクセスマップ（共通インナー幅に配置） -->
  <div class="section__inner">

    <div class="school-access-container">

      <!-- 共通セクションヘッダー (ACCESS / アクセス) -->
      <div class="hiramatsu-support-header">
        <span class="hiramatsu-support-header__en">ACCESS</span>
        <h2 class="hiramatsu-support-header__title">アクセス</h2>
      </div>

      <!-- Googleマップ埋め込みエリア（大きな角丸 20px） -->
      <div class="school-access-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3337.2889279024845!2d131.6030999!3d33.2327599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35469f70d10d19bd%3A0x86bb8cf226b8964e!2z44CSODcwLTAwMzMg5aSnIeeUu-eCsumDveaCg-mDveWNg-S7o-eAuu-8keS4gTEtMjc!5e0!3m2!1sja!2sjp!4v1710000000000!5m2!1sja!2sjp"
          width="100%"
          height="100%"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="臨床検査学科 アクセスマップ">
        </iframe>
      </div>

      <!-- 学科別 住所・連絡先テキストブロック -->
      <div class="school-access-info">
        <h3 class="school-access-info__name">臨床検査学科</h3>
        <p class="school-access-info__detail">
          <span class="address">〒870-0033 大分県大分市千代町1丁目1-27</span>
          <span class="contact">TEL 097-535-0201 / FAX 097-573-3366</span>
        </p>
      </div>

    </div><!-- /school-access-container -->

  </div>
</section>



<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/section-conversion.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>