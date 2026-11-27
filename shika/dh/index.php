<?php
$page_title = "歯科衛生士科大分歯科専門学校";
$page_desc  = "大分歯科専門学校 歯科衛生士科ページです。";

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
            <li aria-current="page">歯科衛生士科</li>
          </ol>
        </nav>

        <!-- 学科情報グループ -->
        <div class="department-mv-hero__main-txt">
          <div class="department-icon -dh">
            <img src="/images/department/ico_dh.svg" alt="" width="48" height="48" loading="lazy">
          </div>

          <h1 class="department-title">歯科衛生士科</h1>
          <p class="department-meta">
            <span>3年制</span>
            <span>定員40名</span>
          </p>

          <div class="department-catch">
            <p class="sub">歯・口腔のケアを通し</p>
            <p class="main">全身の健康を支える<br>スペシャリスト</p>
          </div>

          <!-- 下部グレー領域まで伸ばす縦書き英文 ＆ 矢印軸線 -->
          <div class="department-en-line" aria-hidden="true">
            <span class="txt">Dental Hygienist</span>
            <span class="arrow-line"></span>
          </div>
        </div>

      </div><!-- /department-mv-hero__content -->


      <!-- 💡 右側：高さの基準となるメイン写真 (幅: 920/1440 ≒ 63.888%) -->
      <div class="department-mv-hero__image">
        <figure class="hero-photo">
          <img src="/images/shika/dh/mv.jpg" alt="歯科衛生士科の実習風景" loading="eager">
        </figure>
      </div>

    </div><!-- /department-mv-hero -->

  </section>

  <!-- 2. 下部：歯科衛生士とは？ エリア (section__inner 使用) -->
  <section class="section-department-about">
    <div class="section__inner">

      <div class="hiramatsu-support-header -center">
        <span class="hiramatsu-support-header__en">About the Course</span>
        <h2 class="hiramatsu-support-header__title">歯科衛生士とは？</h2>
      </div>

      <div class="department-about-body">
        <p>
          歯や口の健康を保つことは、「毎日おいしく食事をする」「楽しくお話をする」など、生き生きとした生活を送る上で大変重要なことです。人々の健やかな生活を支援する歯科衛生士の仕事は、歯科診療所が中心ですが、近年、「歯・口の健康が全身の健康に影響する」ことが明らかになり、総合病院での入院患者に対する感染予防や介護施設・訪問診療での口腔機能向上訓練等、その役割は多岐に渡ります。また、生涯を通じて歯の健康づくりや口腔ケアを支援する為、保育所・幼稚園・学校・保健所・市町村保健センター・企業等、地域にも大きく広がっています。
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
              <h3 class="ttl">ホワイトニングやスポーツ歯科等幅広い専門分野を学ぶ</h3>
              <p class="desc">
                令和8年より新カリキュラムがスタート！アスリートの競技力を向上するスポーツ歯科、災害時の歯科支援の基礎やホワイトニング等、審美分野も学びます。
              </p>
            </div>
          </li>

          <!-- ポイント 02 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">02</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">医療現場で生かせる資格を“在学中に”取得可能</h3>
              <p class="desc">
                授業は基本14:30まで。放課後は不得意分野の学習（個別指導あり）ができます。授業の一環として歯科医療事務検定・秘書技能検定・救急法救急員の資格を取得します。
              </p>
            </div>
          </li>

          <!-- ポイント 03 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">03</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">現場で実践力を身につける！</h3>
              <p class="desc">
                多様な臨地実習施設での実習や地域での大規模な歯みがき指導を実施。実践力と共に社会性を養います。
              </p>
            </div>
          </li>

          <!-- ポイント 04 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">04</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">多職種連携授業で、チーム医療を学ぶ</h3>
              <p class="desc">
                医療系総合学園のメリットを活かし言語聴覚士科との合同実習を行います。
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
                <img src="/images/shika/dh/feature_01.jpg" alt="豊富な実習風景 1" width="540" height="680" loading="lazy">
              </figure>
            </div>

            <!-- スライド 2 -->
            <div class="swiper-slide">
              <figure class="feature-photo-card">
                <img src="/images/shika/dh/feature_02.jpg" alt="豊富な実習風景 2" width="540" height="680" loading="lazy">
              </figure>
            </div>

            <!-- スライド 3 -->
            <div class="swiper-slide">
              <figure class="feature-photo-card">
                <img src="/images/shika/dh/feature_03.jpg" alt="豊富な実習風景 3" width="540" height="680" loading="lazy">
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
            <p class="year-desc">医療の基礎を学び、歯科医療・歯科衛生士業務の理解を深める</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">医療に携わるための基礎を学ぶ</p>
              <p class="subjects">解剖学／生物学／微生物学／キャリアデザイン／人間関係論 など</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">歯科衛生士業務の基礎を学ぶ</p>
              <p class="subjects">歯周病予防処置／歯科保健指導／歯科診療補助</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">臨床現場を学ぶ</p>
              <p class="subjects">歯科医院見学</p>
            </div>
          </div>
        </div>

        <!-- 2年次 -->
        <div class="curriculum-card -year2">
          <div class="curriculum-card__head">
            <h3 class="year-ttl">2年次</h3>
            <p class="year-desc">歯科臨床科目を学び、相互実習で応用技術を習得</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">歯科衛生士の専門性を学ぶ</p>
              <p class="subjects">歯内療法学／歯周療法学／歯科補綴学／口腔外科学／歯科麻酔学／小児歯科学／歯科矯正学／先端医療（スポーツ歯科、赤ちゃん歯科等）／高齢者・障害者歯科学 など</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">臨床技術を学ぶ</p>
              <p class="subjects">歯科医院実習／介護施設実習</p>
            </div>
          </div>
        </div>

        <!-- 3年次 -->
        <div class="curriculum-card -year3">
          <div class="curriculum-card__head">
            <h3 class="year-ttl">3年次</h3>
            <p class="year-desc">臨地実習において知識・技術に加え患者理解やチーム医療のあり方を学ぶ</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">実践力を身につける</p>
              <p class="subjects">臨床実習（矯正歯科・障害者歯科・一般歯科）</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">多職種と協働する臨床力を学ぶ</p>
              <p class="subjects">病院歯科／保健所 など</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">国家試験対策</p>
              <p class="subjects">総合演習Ⅰ・Ⅱ</p>
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
        <li>歯科衛生士国家試験受験資格</li>
        <li>専門士（医療専門課程）</li>
        <li>歯科医療事務</li>
        <li>秘書技能検定</li>
        <li>救急法救急員</li>
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
            大分大学医学部附属病院 歯科口腔外科 / 大分赤十字病院 歯科・歯科口腔外科 / 麻生歯科大分駅南クリニック / 安心院わたなべ歯科 / いまむら歯科クリニック / 大谷歯科・こども歯科 / 大分矯正歯科 / おおしま歯科クリニック / 数野歯科・小児歯科 / きし歯科ファミリークリニック / くさつ歯科 / 田中歯科クリニック / しろくま歯科◇矯正歯科 / 新港イトセ歯科 / せぐち歯科医院 / だん歯科クリニック / 高橋歯科医院 / 土屋デンタルクリニック大分オフィス / つちや歯科医院 / 中島歯科医院 / 福崎歯科 / 二宮歯科医院 / まつばらデンタルクリニック / 南大分さとう歯科 / たけお歯科クリニック / 羽屋ながお歯科 / 福原総合デンタルクリニック / ふたば歯科クリニック / ふくだ歯科クリニック / 宮本歯科医院
          </p>
        </div>

        <!-- 九州内 -->
        <div class="employment-group">
          <h3 class="group-ttl">九州内</h3>
          <p class="hospital-names">
            たけだ歯科医院 / 平岡歯科クリニック / 新宮歯科医院 / 御笠川デンタルクリニック / はやし歯科クリニック / いいだ歯科クリニック
          </p>
        </div>

        <!-- 九州外 -->
        <div class="employment-group">
          <h3 class="group-ttl">九州外</h3>
          <p class="hospital-names">
            大阪つつい歯科・矯正歯科 / 赤羽歯科 / ソレイユ歯科
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
              <li>戴灯式（3年）</li>
              <li>新入生・在校生交流会</li>
              <li>臨床実習開始〜11月（3年）</li>
            </ul>
          </div>

          <!-- 5月 -->
          <div class="schedule-card">
            <div class="month-badge">5<span>月</span></div>
            <ul class="event-list">
              <li>体育祭（1年・2年）</li>
            </ul>
          </div>

          <!-- 6月 -->
          <div class="schedule-card">
            <div class="month-badge">6<span>月</span></div>
            <ul class="event-list">
              <li>歯と口の健康週間行事参加</li>
              <li>歯磨き指導（1〜3年）</li>
              <li>前期中間試験</li>
            </ul>
          </div>

          <!-- 7月 -->
          <div class="schedule-card">
            <div class="month-badge">7<span>月</span></div>
            <ul class="event-list">
              <li>夏休み</li>
            </ul>
          </div>

          <!-- 8月 -->
          <div class="schedule-card">
            <div class="month-badge">8<span>月</span></div>
            <ul class="event-list">
              <li>夏休み</li>
              <li>臨地実習①（1年・2年）</li>
            </ul>
          </div>

          <!-- 9月 -->
          <div class="schedule-card">
            <div class="month-badge">9<span>月</span></div>
            <ul class="event-list">
              <li>前期期末試験</li>
              <li>研修旅行（3年）</li>
              <li>救急法救急員資格試験（2年）</li>
            </ul>
          </div>
        </div>

        <!-- 後期：10月〜3月 -->
        <div class="schedule-col">
          <!-- 10月 -->
          <div class="schedule-card">
            <div class="month-badge">10<span>月</span></div>
            <ul class="event-list">
              <li>後期開講</li>
              <li>学園祭（1年・2年）</li>
              <li>就職活動</li>
            </ul>
          </div>

          <!-- 11月 -->
          <div class="schedule-card">
            <div class="month-badge">11<span>月</span></div>
            <ul class="event-list">
              <li>秘書技能検定試験</li>
              <li>後期中間試験</li>
              <li>臨床実習終了（3年）</li>
            </ul>
          </div>

          <!-- 12月 -->
          <div class="schedule-card">
            <div class="month-badge">12<span>月</span></div>
            <ul class="event-list">
              <li>臨地実習②（1年）</li>
              <li>冬休み</li>
            </ul>
          </div>

          <!-- 1月 -->
          <div class="schedule-card">
            <div class="month-badge">1<span>月</span></div>
            <ul class="event-list">
              <li>歯科医療事務資格試験（2年）</li>
            </ul>
          </div>

          <!-- 2月 -->
          <div class="schedule-card">
            <div class="month-badge">2<span>月</span></div>
            <ul class="event-list">
              <li>臨地実習②（2年）</li>
              <li>後期期末試験</li>
            </ul>
          </div>

          <!-- 3月 -->
          <div class="schedule-card">
            <div class="month-badge">3<span>月</span></div>
            <ul class="event-list">
              <li>歯科衛生士国家試験</li>
              <li>卒業式</li>
              <li>総合実習（保護者参観実習）（1年・2年）</li>
              <li>春休み</li>
              <li>入学前オリエンテーション（新入生）</li>
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
          現場と地域に貢献できる<br>
          歯科衛生士を目指して
        </h3>

        <div class="reasons-card__body">
          <p>
            本校は、歯科衛生士だけでなく、歯科医療事務管理士や秘書技能検定、救急法救急員など幅広い資格が取得でき、将来の選択肢が広がると感じたからです。<br>
            現在は臨床の現場で必要な知識に加え、実習で患者さんに寄り添う姿勢やコミュニケーション力も磨いています。先生の手厚いサポートやクラスメイトの支えにより、前向きに学べています。一般歯科と行政歯科の両方に関心があり、将来はどちらの道に進んでも信頼される存在になりたいです。
          </p>
        </div>

        <!-- 学生プロフィール情報 -->
        <div class="reasons-card__profile">
          <p class="student-info">
            <span class="dept">歯科衛生士科（2年生）</span>
            <span class="name">亀井 理沙<span class="honorific">さん</span></span>
            <span class="school">大分県立佐伯鶴城高等学校</span>
          </p>
        </div>
      </div>

      <!-- 右側：角丸ポートレート写真 -->
      <div class="reasons-card__photo">
        <figure class="student-photo">
          <img src="/images/shika/dh/student_photo.jpg" alt="歯科衛生士科 亀井 理沙さん" width="440" height="520" loading="lazy">
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
            src="https://www.youtube.com/embed/WXleDzyIQ34"
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
            src="https://www.youtube.com/embed/SBf518oFHEk"
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
          title="歯科衛生士科 アクセスマップ">
        </iframe>
      </div>

      <!-- 学科別 住所・連絡先テキストブロック -->
      <div class="school-access-info">
        <h3 class="school-access-info__name">歯科衛生士科</h3>
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