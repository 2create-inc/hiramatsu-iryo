<?php
$page_title = "作業療法士科大分リハビリテーション専門学校";
$page_desc  = "大分リハビリテーション専門学校 作業療法士科ページです。";

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
            <li aria-current="page">作業療法士科</li>
          </ol>
        </nav>

        <!-- 学科情報グループ -->
        <div class="department-mv-hero__main-txt">
          <div class="department-icon -ot">
            <img src="/images/department/ico_ot.svg" alt="" width="48" height="48" loading="lazy">
          </div>

          <h1 class="department-title">作業療法士科</h1>
          <p class="department-meta">
            <span>3年制</span>
            <span>定員30名</span>
          </p>

          <div class="department-catch">
            <p class="sub">ひとの生活をつくる</p>
            <p class="main">作業のスペシャリスト</p>
          </div>

          <!-- 下部グレー領域まで伸ばす縦書き英文 ＆ 矢印軸線 -->
          <div class="department-en-line" aria-hidden="true">
            <span class="txt">Occupational Therapist</span>
            <span class="arrow-line"></span>
          </div>
        </div>

      </div><!-- /department-mv-hero__content -->


      <!-- 💡 右側：高さの基準となるメイン写真 (幅: 920/1440 ≒ 63.888%) -->
      <div class="department-mv-hero__image">
        <figure class="hero-photo">
          <img src="/images/reha/ot/mv.jpg" alt="作業療法士科の実習風景" loading="eager">
        </figure>
      </div>

    </div><!-- /department-mv-hero -->

  </section>

  <!-- 2. 下部：作業療法士とは？ エリア (section__inner 使用) -->
  <section class="section-department-about">
    <div class="section__inner">

      <div class="hiramatsu-support-header -center">
        <span class="hiramatsu-support-header__en">About the Course</span>
        <h2 class="hiramatsu-support-header__title">作業療法士とは？</h2>
      </div>

      <div class="department-about-body">
        <p>
          作業療法士は、日常生活に必要なあらゆる作業が困難になった人や、困難になると予測される人に対して、作業の改善・維持・向上を図る専門職です。生活の中で不便を感じる場面を分析し、生活機能向上を目指します。「障がいを持つ人全てが“その人らしく”生活できるよう支援すること」が役目であり、精神に障がいを持つ方の治療にも関わります。病院や施設はもちろん、対象者（高齢者や個性ではすまされない生活のしづらさを抱える方々など）が暮らす地域や学校、職場、行政など活躍の場は広く、今後ますます需要が高まる職業です。
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
              <h3 class="ttl">本番さながらの実技試験で、着実に成長</h3>
              <p class="desc">
                臨床現場を想定した客観的臨床能力試験（OSCE）などを定期的に行い、技術やコミュニケーション力を高めます。
              </p>
            </div>
          </li>

          <!-- ポイント 02 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">02</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">医療現場で求められる“人間力”を磨く</h3>
              <p class="desc">
                対象者への理解を深め、チーム医療の一翼を担う作業療法士の育成を目指し、人間関係や連携の授業を導入しています。
              </p>
            </div>
          </li>

          <!-- ポイント 03 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">03</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">個別にフォロー！万全の国家試験対策</h3>
              <p class="desc">
                国家試験“全員”合格に向け、マンツーマン指導、特別講座などを行い、きめ細やかにサポート。
              </p>
            </div>
          </li>

          <!-- ポイント 04 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">04</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">豊富な実習で“なりたい自分”が見つかる</h3>
              <p class="desc">
                1年次から積極的に作業療法体験実習を実施。目標とする「作業療法士像」を明確にします。
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
                <img src="/images/reha/ot/feature_01.jpg" alt="豊富な実習風景 1" width="540" height="680" loading="lazy">
              </figure>
            </div>

            <!-- スライド 2 -->
            <div class="swiper-slide">
              <figure class="feature-photo-card">
                <img src="/images/reha/ot/feature_02.jpg" alt="豊富な実習風景 2" width="540" height="680" loading="lazy">
              </figure>
            </div>

            <!-- スライド 3 -->
            <div class="swiper-slide">
              <figure class="feature-photo-card">
                <img src="/images/reha/ot/feature_03.jpg" alt="豊富な実習風景 3" width="540" height="680" loading="lazy">
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
            <p class="year-desc">医学と作業療法の基本を修得</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">医学と作業療法の基礎を学ぶ</p>
              <p class="subjects">人間関係論／解剖学／生理学／運動学／人間発達学／臨床心理学 など</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">医療従事者としての心構えを身につける</p>
              <p class="subjects">リハビリテーション概論／作業療法概論／作業療法体験実習（2週間）</p>
            </div>
          </div>
        </div>

        <!-- 2年次 -->
        <div class="curriculum-card -year2">
          <div class="curriculum-card__head">
            <h3 class="year-ttl">2年次</h3>
            <p class="year-desc">専門的な作業療法と、基礎的な臨地技能を修得</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">専門的な作業療法を学ぶ</p>
              <p class="subjects">日常生活活動学／社会生活行為学／運動器疾患治療学／疾患別評価学演習／多職種間連携教育（IPE） など</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">基礎的な臨床技能を学ぶ</p>
              <p class="subjects">評価実習（2週間）／基礎臨床実習（3週間）</p>
            </div>
          </div>
        </div>

        <!-- 3年次 -->
        <div class="curriculum-card -year3">
          <div class="curriculum-card__head">
            <h3 class="year-ttl">3年次</h3>
            <p class="year-desc">臨地技能を中心に身につける</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">より専門的な作業療法を学ぶ</p>
              <p class="subjects">作業療法管理学／地域作業療法学／作業療法治療演習／卒業研究</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">専門的な臨地技能を身につける</p>
              <p class="subjects">総合臨床実習Ⅰ（8週間）／総合臨床実習Ⅱ（8週間）</p>
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
        <li>作業療法士国家試験受験資格</li>
        <li>専門士（医療専門課程）</li>
        <li>公認パラスポーツ指導員（認定）</li>
        <li>赤十字救急法救急員認定証</li>
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
            大分記念病院 / 明和記念病院 / 明野中央病院 / 井野辺病院 / 今村病院 / 大分岡病院 / 大分健生病院 / 大分こども療育センター / 大分中村病院 / 大分リハビリテーション病院 / ケアガーデンおおつか / 三愛メディカルセンター / シンパシー＆エンパシー / 諏訪の杜病院 / 天心堂へつぎ病院 / どんぐりの杜クリニック / 帆秋病院 / ほしの整形 / 明和記念病院 / 別府発達医療センター / 鶴見病院 / 黒木記念病院 / 別府リハビリテーションセンター / 別府湾腎泌尿器病院 / 津久見中央病院 / 臼杵医師会立コスモス病院 / 恵の聖母の家 / 長門記念病院 / 西田病院 / 佐伯中央病院 / 上野公園病院 / 日田リハビリテーション病院 / 帰巖会みえ病院 / 湯布院病院（JHCOグループ）
          </p>
        </div>

        <!-- 九州内 -->
        <div class="employment-group">
          <h3 class="group-ttl">九州内</h3>
          <p class="hospital-names">
            桜十字福岡病院 / 徳洲会病院 / 福岡青洲会病院 / 福岡リハビリテーション病院 / 誠愛リハビリテーション病院 / 小倉リハビリテーション病院 / 熊本セントラル病院 / 向陽台病院
          </p>
        </div>

        <!-- 九州外 -->
        <div class="employment-group">
          <h3 class="group-ttl">九州外</h3>
          <p class="hospital-names">
            京都大原記念病院 / 加納総合病院 / 千里リハビリテーション病院 / 天理よろづ相談所病院 / 原宿リハビリテーション病院 / 町田木曽整形外科リハビリテーションクリニック
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
            </ul>
          </div>

          <!-- 5月 -->
          <div class="schedule-card">
            <div class="month-badge">5<span>月</span></div>
            <ul class="event-list">
              <li>体育祭（1年・2年）</li>
              <li>総合臨床実習開始（3年）</li>
              <li>障がい者スポーツ指導員養成講座（1年）</li>
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
              <li>秋季補習（1年・2年）</li>
              <li>研修旅行（2年）</li>
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
              <li>卒業研究発表（3年）</li>
              <li>学園祭（1年・2年）</li>
            </ul>
          </div>

          <!-- 11月 -->
          <div class="schedule-card">
            <div class="month-badge">11<span>月</span></div>
            <ul class="event-list">
              <li>大分国際車いすマラソン大会競技補助（2年）</li>
            </ul>
          </div>

          <!-- 12月 -->
          <div class="schedule-card">
            <div class="month-badge">12<span>月</span></div>
            <ul class="event-list">
              <li>冬休み</li>
            </ul>
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
              <li>基礎臨床実習（2年）</li>
              <li>作業療法士国家試験（3年）</li>
            </ul>
          </div>

          <!-- 3月 -->
          <div class="schedule-card">
            <div class="month-badge">3<span>月</span></div>
            <ul class="event-list">
              <li>春季補習（1年・2年）</li>
              <li>卒業式</li>
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
          不安を抱えた人の<br>
          体と心に寄り添う存在へ
        </h3>

        <div class="reasons-card__body">
          <p>
            高校時代、ラグビー部の仲間がケガで練習や試合に出場できずに悔しい思いをしている姿を見て、そんな人をサポートできるリハビリ職、中でも精神面にも関与できる作業療法士に興味を持ちました。
          </p>
          <p>
            平松の魅力は、先生や先輩、同級生との距離が近く、学科全体で助け合い、目標に向かっていく“前向きな雰囲気”があることです。実習や解剖学・心理学・精神機能など幅広い学びを通して、将来進むべき臨床のステージを見つけたいと思っています。
          </p>
        </div>

        <!-- 学生プロフィール情報 -->
        <div class="reasons-card__profile">
          <p class="student-info">
            <span class="dept">作業療法士科（2年生）</span>
            <span class="name">丸山 海音<span class="honorific">さん</span></span>
            <span class="school">大分県立別府鶴見丘高等学校</span>
          </p>
        </div>
      </div>

      <!-- 右側：角丸ポートレート写真 -->
      <div class="reasons-card__photo">
        <figure class="student-photo">
          <img src="/images/reha/ot/student_photo.jpg" alt="作業療法士科 丸山 海音さん" width="440" height="520" loading="lazy">
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
          title="作業療法士科 アクセスマップ">
        </iframe>
      </div>

      <!-- 学科別 住所・連絡先テキストブロック -->
      <div class="school-access-info">
        <h3 class="school-access-info__name">作業療法士科</h3>
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