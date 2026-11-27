<?php
$page_title = "言語聴覚士科大分リハビリテーション専門学校";
$page_desc  = "大分リハビリテーション専門学校 言語聴覚士科ページです。";

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
            <li aria-current="page">言語聴覚士科</li>
          </ol>
        </nav>

        <!-- 学科情報グループ -->
        <div class="department-mv-hero__main-txt">
          <div class="department-icon -st">
            <img src="/images/department/ico_st.svg" alt="" width="48" height="48" loading="lazy">
          </div>

          <h1 class="department-title">言語聴覚士科</h1>
          <p class="department-meta">
            <span>3年制</span>
            <span>定員30名</span>
          </p>

          <div class="department-catch">
            <p class="sub">「心とことば」をつなぐ</p>
            <p class="main">スペシャリスト</p>
          </div>

          <!-- 下部グレー領域まで伸ばす縦書き英文 ＆ 矢印軸線 -->
          <div class="department-en-line" aria-hidden="true">
            <span class="txt">Speech language hearing Therapist</span>
            <span class="arrow-line"></span>
          </div>
        </div>

      </div><!-- /department-mv-hero__content -->


      <!-- 💡 右側：高さの基準となるメイン写真 (幅: 920/1440 ≒ 63.888%) -->
      <div class="department-mv-hero__image">
        <figure class="hero-photo">
          <img src="/images/reha/st/mv.jpg" alt="言語聴覚士科の実習風景" loading="eager">
        </figure>
      </div>

    </div><!-- /department-mv-hero -->

  </section>

  <!-- 2. 下部：言語聴覚士とは？ エリア (section__inner 使用) -->
  <section class="section-department-about">
    <div class="section__inner">

      <div class="hiramatsu-support-header -center">
        <span class="hiramatsu-support-header__en">About the Course</span>
        <h2 class="hiramatsu-support-header__title">言語聴覚士とは？</h2>
      </div>

      <div class="department-about-body">
        <p>
          言語聴覚士は、人が生きる上で最も重要な「話す」「聴く」「食べる」という3つの機能に支障をきたした人に対して訓練・指導・支援を行う専門職です。原因は先天的なものから病気の後遺症まで様々ですが、コミュニケーションが取れない、食事ができないなど辛い状況に寄り添い、当たり前の日常とその人の尊厳を取り戻すことを目指します。医療機関や高齢者施設、小児療育施設など幅広い場所で活躍し、チーム医療においても重要な役割を担います。AIが進化しても“人にしかできない仕事”として社会が必要とする職業です。
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
              <h3 class="ttl">大分県内唯一の養成校としての誇り</h3>
              <p class="desc">
                県内で活躍する言語聴覚士の大半が本校卒業生。就職後も続く、大分リハのネットワークがあなたの連携とキャリアの大きな力になります。
              </p>
            </div>
          </li>

          <!-- ポイント 02 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">02</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">独自の専門性+αの学習で「即戦力」へ</h3>
              <p class="desc">
                言語聴覚士の専門性に加え、保育・デフスポーツ・手話・栄養など、即戦力として役立つ多彩な学び。現場で真に求められる人材を目指します。
              </p>
            </div>
          </li>

          <!-- ポイント 03 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">03</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">全国トップクラスの国家試験合格率</h3>
              <p class="desc">
                「個人の努力」と「クラスの協力」を発揮するための教育体制を整えています。これにより、全国トップ成績の学生を多く輩出しています。
              </p>
            </div>
          </li>

          <!-- ポイント 04 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">04</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">ペア・グループ学習で共に高め合う</h3>
              <p class="desc">
                同じ志を持つ30名の仲間との“協力”を重視。お互いに支え合いながら、共に社会に貢献できるプロを目指します。
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
                <img src="/images/reha/st/feature_01.jpg" alt="豊富な実習風景 1" width="540" height="680" loading="lazy">
              </figure>
            </div>

            <!-- スライド 2 -->
            <div class="swiper-slide">
              <figure class="feature-photo-card">
                <img src="/images/reha/st/feature_02.jpg" alt="豊富な実習風景 2" width="540" height="680" loading="lazy">
              </figure>
            </div>

            <!-- スライド 3 -->
            <div class="swiper-slide">
              <figure class="feature-photo-card">
                <img src="/images/reha/st/feature_03.jpg" alt="豊富な実習風景 3" width="540" height="680" loading="lazy">
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
            <p class="year-desc">医学と「ことば」「嚥下」「発達」の関係性を学び言語聴覚士としての視点を身につける。</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">医療の基礎・リハビリテーションの基本について学ぶ</p>
              <p class="subjects">医学総論／解剖生理学／チーム医療論／人間関係論 など</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">コミュニケーションに関する専門的学問</p>
              <p class="subjects">ことばの発達学／音声学／言語学／コミュニケーション論 など</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">言語聴覚療法の対象となる障害・言語聴覚士の役割について学ぶ</p>
              <p class="subjects">言語聴覚障害概論／介護・保育実習 など</p>
            </div>
          </div>
        </div>

        <!-- 2年次 -->
        <div class="curriculum-card -year2">
          <div class="curriculum-card__head">
            <h3 class="year-ttl">2年次</h3>
            <p class="year-desc">言語聴覚療法の対象者について理解し、治療に必要な理論と臨床思考を身につける。</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">セラピストとしての臨床力を高める</p>
              <p class="subjects">リハビリテーション医学／臨床心理学／臨床神経学／多職種コミュニケーション演習 など</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">言語聴覚療法の専門性を高める</p>
              <p class="subjects">嚥下障害／失語症／音声障害／成人聴覚障害／言語発達障害／臨床見学実習 など</p>
            </div>
          </div>
        </div>

        <!-- 3年次 -->
        <div class="curriculum-card -year3">
          <div class="curriculum-card__head">
            <h3 class="year-ttl">3年次</h3>
            <p class="year-desc">多彩なフィールドでの臨床実践力を身につける。</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">言語聴覚士としての総合力を磨く</p>
              <p class="subjects">疾患別評価学演習／総合臨床実習</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">国家試験対策</p>
              <p class="subjects">教員によるセミナー／模擬試験／ペア・グループ学習 など</p>
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

      <!-- 在学中に取得できる資格 -->
      <div class="qualification-group">
        <h3 class="qualification-group__ttl">在学中に取得できる資格</h3>
        <ul class="qualification-list">
          <li>手話検定（2〜3級）</li>
          <li>保育士</li>
          <li>赤十字ベーシックライフサポーター</li>
          <li>赤十字ファーストエイドプロバイダー</li>
          <li>障がい者スポーツアシスト講習修了証（日本デフビーチバレーボール協会）</li>
        </ul>
      </div>

      <!-- 卒業時に得られる資格・称号 -->
      <div class="qualification-group">
        <h3 class="qualification-group__ttl">卒業時に得られる資格・称号</h3>
        <ul class="qualification-list">
          <li>言語聴覚士国家試験受験資格</li>
          <li>専門士（医療専門課程）</li>
        </ul>
      </div>
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
            大分大学医学部附属病院 / 杵築市立山香病院 / 豊後大野市民病院 / 別府発達医療センター / 鶴見病院 / アルメイダ病院 / 津久見中央病院 / 学校法人立山学園 / 永冨脳神経外科病院 / 明和記念病院 / 大分岡病院 / 佐藤第一病院 / 中津胃腸外科病院 / 臼杵病院 / こども支援センターにじいろciel / 大分中村病院 / ツリーハウス / 総合ケアセンターくろき / サンライズ酒井病院 / 高田中央病院 / 一ノ宮脳神経外科病院 / 中津脳神経外科病院 / ケアポート渓和 / 国東市民病院 / へつぎ病院 / （株）ピュアハート / 黒木記念病院 / 豊寿苑 / 村上記念病院 / 井野辺病院 / 今村病院 / 大分リハビリテーション病院 / 諏訪の杜病院 / 和田病院 / 臼杵市医師会立コスモス病院 / 佐伯中央病院 / みえ病院 / 佐賀関病院 / 長門記念病院 / 大分こども療育センター / 恵の聖母の家 / BIセンター / カラフルビーンズ / エイトあっぷ / 湯布院病院
          </p>
        </div>

        <!-- 九州内 -->
        <div class="employment-group">
          <h3 class="group-ttl">九州内</h3>
          <p class="hospital-names">
            長崎大学病院 / はち歯科医院 / 三萩野病院 / 長尾病院 / 新生会病院 / 製鉄記念八幡病院 / 福岡徳洲会病院 / アルファリビング福岡原 / 人吉リハビリテーション病院 / 潤和会記念病院 / 増田病院
          </p>
        </div>

        <!-- 九州外 -->
        <div class="employment-group">
          <h3 class="group-ttl">九州外</h3>
          <p class="hospital-names">
            藤田医科大学病院 / よしみず病院 / 馬場記念病院 / 名戸ヶ谷病院 / こぶしの村福祉会
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
              <li>前期授業開始</li>
              <li>新入生・在校生交流会</li>
            </ul>
          </div>

          <!-- 5月 -->
          <div class="schedule-card">
            <div class="month-badge">5<span>月</span></div>
            <ul class="event-list">
              <li>体育祭（1年・2年）</li>
              <li>臨床実習開始（3年）</li>
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
              <li>前期期末試験（1年・2年）</li>
            </ul>
          </div>

          <!-- 8月 -->
          <div class="schedule-card">
            <div class="month-badge">8<span>月</span></div>
            <ul class="event-list">
              <li>夏期研修（1年・2年）</li>
              <li>夏休み</li>
            </ul>
          </div>

          <!-- 9月 -->
          <div class="schedule-card">
            <div class="month-badge">9<span>月</span></div>
            <ul class="event-list">
              <li>臨床見学実習（2年）</li>
              <li>研修旅行（2年）</li>
            </ul>
          </div>
        </div>

        <!-- 後期：10月〜3月 -->
        <div class="schedule-col">
          <!-- 10月 -->
          <div class="schedule-card">
            <div class="month-badge">10<span>月</span></div>
            <ul class="event-list">
              <li>症例報告会（3年）</li>
              <li>後期授業開始</li>
              <li>卒業研究発表（3年）</li>
            </ul>
          </div>

          <!-- 11月 -->
          <div class="schedule-card">
            <div class="month-badge">11<span>月</span></div>
            <ul class="event-list">
              <li>学園祭</li>
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
              <li>後期期末試験（1年・2年）</li>
            </ul>
          </div>

          <!-- 2月 -->
          <div class="schedule-card">
            <div class="month-badge">2<span>月</span></div>
            <ul class="event-list">
              <li>言語聴覚士国家試験（3年）</li>
              <li>新入生事前学習会（4月入学生）</li>
            </ul>
          </div>

          <!-- 3月 -->
          <div class="schedule-card">
            <div class="month-badge">3<span>月</span></div>
            <ul class="event-list">
              <li>介護体験実習（1年）</li>
              <li>卒業式</li>
              <li>春休み</li>
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
          幅広い領域を経験しながら、<br>
          将来の進路を模索中
        </h3>

        <div class="reasons-card__body">
          <p>
            私が言語聴覚士を目指し始めたきっかけは、医療職体験セミナーにて言語聴覚士の話を聞き、患者さん一人ひとりに寄り添う支援に強く惹かれたことからです。<br>
            平松学園への進学の決め手は、グループ校の大分東明高校・医療系進学コースで学び、言語聴覚士の仕事や学校での取り組みに対する理解が深まり、「この学校で学びたい」と感じたためです。<br>
            言語聴覚士科の強みは、県内唯一の養成校として専門性を磨けるうえ、保育士資格、手話検定、障がい者スポーツなど幅広い分野に触れられる点です。現在は、医療・福祉・保育・介護の現場で実習を経験しながら、自分に合う領域や働き方を探しています。
          </p>
        </div>

        <!-- 学生プロフィール情報 -->
        <div class="reasons-card__profile">
          <p class="student-info">
            <span class="dept">言語聴覚士科（2年生）</span>
            <span class="name">安藤 ななは<span class="honorific">さん</span></span>
            <span class="school">大分東明高等学校</span>
          </p>
        </div>
      </div>

      <!-- 右側：角丸ポートレート写真 -->
      <div class="reasons-card__photo">
        <figure class="student-photo">
          <img src="/images/reha/st/student_photo.jpg" alt="言語聴覚士科 安藤 ななはさん" width="440" height="520" loading="lazy">
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
            src="https://www.youtube.com/embed/oPdOf4J9_7Q"
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
            src="https://www.youtube.com/embed/ORphd9JeShQ"
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
          title="言語聴覚士科 アクセスマップ">
        </iframe>
      </div>

      <!-- 学科別 住所・連絡先テキストブロック -->
      <div class="school-access-info">
        <h3 class="school-access-info__name">言語聴覚士科</h3>
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