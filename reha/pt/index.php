<?php
$page_title = "理学療法士科大分リハビリテーション専門学校";
$page_desc  = "大分リハビリテーション専門学校 理学療法士科ページです。";

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
            <li aria-current="page">理学療法士科</li>
          </ol>
        </nav>

        <!-- 学科情報グループ -->
        <div class="department-mv-hero__main-txt">
          <div class="department-icon -pt">
            <img src="/images/department/ico_pt.svg" alt="" width="48" height="48" loading="lazy">
          </div>

          <h1 class="department-title">理学療法士科</h1>
          <p class="department-meta">
            <span>3年制</span>
            <span>定員30名</span>
          </p>

          <div class="department-catch">
            <p class="sub">身体づくりと運動機能の</p>
            <p class="main">スペシャリスト</p>
          </div>

          <!-- 下部グレー領域まで伸ばす縦書き英文 ＆ 矢印軸線 -->
          <div class="department-en-line" aria-hidden="true">
            <span class="txt">Physical Therapist</span>
            <span class="arrow-line"></span>
          </div>
        </div>

      </div><!-- /department-mv-hero__content -->


      <!-- 💡 右側：高さの基準となるメイン写真 (幅: 920/1440 ≒ 63.888%) -->
      <div class="department-mv-hero__image">
        <figure class="hero-photo">
          <img src="/images/reha/pt/mv.jpg" alt="理学療法士科の実習風景" loading="eager">
        </figure>
      </div>

    </div><!-- /department-mv-hero -->

  </section>

  <!-- 2. 下部：理学療法士とは？ エリア (section__inner 使用) -->
  <section class="section-department-about">
    <div class="section__inner">

      <div class="hiramatsu-support-header -center">
        <span class="hiramatsu-support-header__en">About the Course</span>
        <h2 class="hiramatsu-support-header__title">理学療法士とは？</h2>
      </div>

      <div class="department-about-body">
        <p>
          理学療法士は、病気やケガ、老化などで身体機能に障がいが発生した人、発生が予測される人に対し、運動療法や物理療法を用いて基本動作能力（座る・立つ・歩くなど）の維持・回復・悪化予防を行うリハビリテーションの専門職です。<br>
          一番の目的は「その人らしい、生き生きとした生活を取り戻すこと」。一人ひとりの状態や生活像に合わせた治療プログラムを組み立てます。<br>
          医師や他職種と連携するチーム医療の一員としても重要な役割を担い、医療・福祉はもちろん、教育、行政、スポーツ、保健など幅広い分野で活躍できます。
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
              <h3 class="ttl">県内で最も歴史のある伝統校</h3>
              <p class="desc">
                1992年に開校。多くの卒業生が全国の医療機関や福祉施設などで活躍。<br>
                就職後、大きな支えになります。
              </p>
            </div>
          </li>

          <!-- ポイント 02 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">02</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">講義×実習×演習で育む、本物の“実践力”</h3>
              <p class="desc">
                実習や演習などの機会を多く設けており、知識の集積だけでは得られない本物の実践力を養います。
              </p>
            </div>
          </li>

          <!-- ポイント 03 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">03</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">全国60施設との連携で、多様な臨床経験を</h3>
              <p class="desc">
                臨床実習の提携施設は全国に約60施設。<br>
                1年次から段階的に複数回の実習を行い、必要な臨床技能を修得します。
              </p>
            </div>
          </li>

          <!-- ポイント 04 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">04</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">県内唯一！<br>公認パラスポーツ指導員を目指せる</h3>
              <p class="desc">
                大分県で唯一、障がい者にスポーツの喜びや楽しさを伝える<br>
                指導員の資格の取得ができます。
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
                <img src="/images/reha/pt/feature_01.jpg" alt="豊富な実習風景 1" width="540" height="680" loading="lazy">
              </figure>
            </div>

            <!-- スライド 2 -->
            <div class="swiper-slide">
              <figure class="feature-photo-card">
                <img src="/images/reha/pt/feature_02.jpg" alt="豊富な実習風景 2" width="540" height="680" loading="lazy">
              </figure>
            </div>

            <!-- スライド 3 -->
            <div class="swiper-slide">
              <figure class="feature-photo-card">
                <img src="/images/reha/pt/feature_03.jpg" alt="豊富な実習風景 3" width="540" height="680" loading="lazy">
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
            <p class="year-desc">リハビリテーション医学および理学療法の基本を修得</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">医学および理学療法の基礎を学ぶ</p>
              <p class="subjects">解剖学／運動学／生理学／病理学／理学療法概論／理学療法評価学／物理療法学 など</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">医療従事者としての心構えを身につける</p>
              <p class="subjects">臨床見学実習（1週間）／訪問通所リハ実習（1週間）</p>
            </div>
          </div>
        </div>

        <!-- 2年次 -->
        <div class="curriculum-card -year2">
          <div class="curriculum-card__head">
            <h3 class="year-ttl">2年次</h3>
            <p class="year-desc">専門的な理学療法の理論と基礎的な臨床技能を修得</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">専門的な理学療法の理論を学ぶ</p>
              <p class="subjects">骨関節理学療法学／神経理学療法学／スポーツ理学療法学／疾患別評価学演習／多職種間連携教育（IPE） など</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">基礎的な臨床技能を身につける</p>
              <p class="subjects">評価実習Ⅰ（2週間）／評価実習Ⅱ（2週間）</p>
            </div>
          </div>
        </div>

        <!-- 3年次 -->
        <div class="curriculum-card -year3">
          <div class="curriculum-card__head">
            <h3 class="year-ttl">3年次</h3>
            <p class="year-desc">専門的な臨床技能および研究応用力を培う</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">発展的な理学療法の理論を学ぶ</p>
              <p class="subjects">理学療法管理学／予防理学療法学</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">専門的な臨床技能を身につける</p>
              <p class="subjects">総合臨床実習Ⅰ（8週間）／Ⅱ（8週間）</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">データ収集から分析、プレゼンテーションまで問題解決力を培う</p>
              <p class="subjects">卒業研究</p>
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
        <li>理学療法士国家試験受験資格</li>
        <li>専門士（医療専門課程）</li>
        <li>初級パラスポーツ指導員（認定）</li>
        <li>赤十字病院救急法救急員（赤十字ファーストエイドプロバイダー）（認定）など</li>
        <li>福祉住環境コーディネーター</li>
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
            大分リハビリテーション病院 / 別府リハビリテーションセンター / 大分市医師会立アルメイダ病院 / 国家公務員共済組合連合会 新別府病院 / 大分県厚生連鶴見病院 / 大分中村病院 / 大分記念病院 / 今村病院 / 大分岡病院 / 大分整形外科病院 / 大分整形金池診療所リハランド / うちのう整形外科 / 明野中央病院 / 猿渡整形外科スポーツリハクリニック / 永冨脳神経外科病院 / 井野辺病院 / 諏訪の杜病院 / 山田整形外科クリニック / 天心堂へつぎ病院 / 佐賀関病院 / しん整形外科リハビリテーション&スポーツクリニック / 太陽の家 / 黒木記念病院 / 畑病院 / 中村病院 / 恵の聖母の家 / 杵築中央病院 / 杵築市立山香病院 / サンライズ酒井病院 / 国東市民病院 / かわしまクリニック / 佐藤第一病院 / 和田病院 / 高田中央病院 / 長門記念病院 / 岩尾整形外科病院 / 日田リハビリテーション病院 / 西田病院 / 臼杵病院 / 臼杵市医師会立コスモス病院 / 帰巖会みえ病院 / 豊後大野市民病院
          </p>
        </div>

        <!-- 九州内 -->
        <div class="employment-group">
          <h3 class="group-ttl">九州内</h3>
          <p class="hospital-names">
            長崎大学病院 / 産業医科大学病院 / 北九州総合病院 / 北九州中央病院 / 小倉リハビリテーション病院 / 福岡新水巻病院 / 桜十字福岡病院 / 原土井病院 / 杉村病院 / 桜十字病院
          </p>
        </div>

        <!-- 九州外 -->
        <div class="employment-group">
          <h3 class="group-ttl">九州外</h3>
          <p class="hospital-names">
            大阪医科薬科大学病院 / 摂津医誠会病院 / 阪神リハビリテーション病院 / 船橋市立リハビリテーション病院 / 松戸整形外科病院 / 愛媛県職員 / のぞみ整形外科クリニック
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
              <li>新入生ガイダンス</li>
              <li>新入生・在校生交流会</li>
              <li>前期講義開始</li>
              <li>障がい者スポーツ指導員養成講座（1年）</li>
            </ul>
          </div>

          <!-- 5月 -->
          <div class="schedule-card">
            <div class="month-badge">5<span>月</span></div>
            <ul class="event-list">
              <li>体育祭（1年・2年）</li>
              <li>中間試験（1年・2年）</li>
              <li>総合臨床実習開始（3年）</li>
            </ul>
          </div>

          <!-- 6月 -->
          <div class="schedule-card">
            <div class="month-badge">6<span>月</span></div>
          </div>

          <!-- 7月 -->
          <div class="schedule-card">
            <div class="month-badge">7<span>月</span></div>
            <ul class="event-list">
              <li>前期末試験（1年・2年）</li>
            </ul>
          </div>

          <!-- 8月 -->
          <div class="schedule-card">
            <div class="month-badge">8<span>月</span></div>
            <ul class="event-list">
              <li>夏休み</li>
            </ul>
          </div>

          <!-- 9月 -->
          <div class="schedule-card">
            <div class="month-badge">9<span>月</span></div>
            <ul class="event-list">
              <li>臨床見学実習（1年）</li>
              <li>評価実習Ⅰ（2年）</li>
              <li>研修旅行（2年）</li>
              <li>後期講義開始（1年・2年）</li>
              <li>総合臨床実習終了（3年）</li>
            </ul>
          </div>
        </div>

        <!-- 後期：10月〜3月 -->
        <div class="schedule-col">
          <!-- 10月 -->
          <div class="schedule-card">
            <div class="month-badge">10<span>月</span></div>
            <ul class="event-list">
              <li>学園祭（1年・2年）</li>
              <li>卒業研究発表（3年）</li>
            </ul>
          </div>

          <!-- 11月 -->
          <div class="schedule-card">
            <div class="month-badge">11<span>月</span></div>
            <ul class="event-list">
              <li>中間試験（1年・2年）</li>
              <li>大分国際車いすマラソン大会競技補助（2年）</li>
            </ul>
          </div>

          <!-- 12月 -->
          <div class="schedule-card">
            <div class="month-badge">12<span>月</span></div>
          </div>

          <!-- 1月 -->
          <div class="schedule-card">
            <div class="month-badge">1<span>月</span></div>
            <ul class="event-list">
              <li>後期末試験</li>
            </ul>
          </div>

          <!-- 2月 -->
          <div class="schedule-card">
            <div class="month-badge">2<span>月</span></div>
            <ul class="event-list">
              <li>障がい者スポーツ指導員養成講座実技（1年）</li>
              <li>理学療法士国家試験（3年）</li>
            </ul>
          </div>

          <!-- 3月 -->
          <div class="schedule-card">
            <div class="month-badge">3<span>月</span></div>
            <ul class="event-list">
              <li>卒業式</li>
              <li>春季補習（1年・2年）</li>
              <li>訪問通所リハ実習（1年）</li>
              <li>評価実習Ⅱ（2年）</li>
              <li>春休み</li>
              <li>新入生事前学習会（4月入学生）</li>
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
          目標は、パラスポーツに<br>
          挑戦する人の力になること
        </h3>

        <div class="reasons-card__body">
          <p>
            学生時代に部活でケガをした経験や祖母ががんで入院したことをきっかけに、「そんな人を助けたい」とリハビリの仕事に興味を持つようになりました。今は、「パラスポーツで活躍しようと考えている人の夢を実現できる理学療法士になる」という目標に向かって、様々な支援方法を学んでいます。
          </p>
          <p>
            クラスで誕生日を祝ってもらったり、体育祭・文化祭で学科を超えて仲良くなれたり、学校生活も楽しいです。大変なことも仲間と協力して乗り越えられます。
          </p>
        </div>

        <!-- 学生プロフィール情報 -->
        <div class="reasons-card__profile">
          <p class="student-info">
            <span class="dept">理学療法士科（2年生）</span>
            <span class="name">阿部 佑心<span class="honorific">さん</span></span>
            <span class="school">大分東明高等学校</span>
          </p>
        </div>
      </div>

      <!-- 右側：角丸ポートレート写真 -->
      <div class="reasons-card__photo">
        <figure class="student-photo">
          <img src="/images/reha/pt/student_photo.jpg" alt="理学療法士科 阿部 佑心さん" width="440" height="520" loading="lazy">
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
            src="https://www.youtube.com/embed/YOUR_STUDENT_VIDEO_ID"
            title="在校生インタビュー YouTube"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
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
            src="https://www.youtube.com/embed/YOUR_ALUMNI_VIDEO_ID"
            title="卒業生インタビュー YouTube"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
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
          title="理学療法士科 アクセスマップ">
        </iframe>
      </div>

      <!-- 学科別 住所・連絡先テキストブロック -->
      <div class="school-access-info">
        <h3 class="school-access-info__name">理学療法士科</h3>
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