<?php
$page_title = "視能訓練学科大分平松総合医療専門学校";
$page_desc  = "大分平松総合医療専門学校 視能訓練学科ページです。";

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
            <li aria-current="page">視能訓練学科</li>
          </ol>
        </nav>

        <!-- 学科情報グループ -->
        <div class="department-mv-hero__main-txt">
          <div class="department-icon -opt">
            <img src="/images/department/ico_opt.svg" alt="" width="48" height="48" loading="lazy">
          </div>

          <h1 class="department-title">視能訓練学科</h1>
          <p class="department-meta">
            <span>3年制</span>
            <span>定員30名</span>
          </p>

          <div class="department-catch">
            <p class="sub">目の健康を守る</p>
            <p class="main">視覚のスペシャリスト</p>
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
          <img src="/images/sogoiryo/ort/mv.jpg" alt="視能訓練学科の実習風景" loading="eager">
        </figure>
      </div>

    </div><!-- /department-mv-hero -->

  </section>

  <!-- 2. 下部：視能訓練士とは？ エリア (section__inner 使用) -->
  <section class="section-department-about">
    <div class="section__inner">

      <div class="hiramatsu-support-header -center">
        <span class="hiramatsu-support-header__en">About the Course</span>
        <h2 class="hiramatsu-support-header__title">視能訓練士とは？</h2>
      </div>

      <div class="department-about-body">
        <p>
          視能訓練士は、“目”の健康を守る視機能のエキスパートです。主な業務は「視機能検査」、「健診(検診)」、視機能が低下した人への「ロービジョンケア」、主に子どもの弱視や斜視に対する「視能訓練」の4つ。いずれも国家資格を持つ視能訓練士にしかできません。<br>
          視力は一生必要であり、幼児期から長く寄り添ってサポートすることも多い、大変やりがいのある仕事です。近年、スポーツ分野のビジョントレーニングや、目の見えない人にブラインドメイクを指導する化粧療法など、活躍の領域はさらに広がっています。
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
              <h3 class="ttl">県内唯一の養成校が誇る、確かな教育基盤</h3>
              <p class="desc">
                九州初、全国でも5番目にできた歴史ある養成学校です。<br>
                卒業生の多くが第一線で活躍しています。
              </p>
            </div>
          </li>

          <!-- ポイント 02 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">02</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">学園併設の幼稚園で体感する“生きた学び”</h3>
              <p class="desc">
                視能訓練士は子どもとの関わりが多い職業。<br>
                併設の幼稚園と緊密な連携をとり、豊富な臨地実習を実施。
              </p>
            </div>
          </li>

          <!-- ポイント 03 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">03</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">資格取得＋新領域で広がる、将来の選択肢</h3>
              <p class="desc">
                視覚障がい者に寄り添う「同行援護従業者」の資格取得や、<br>
                「スポーツビジョン」に関する授業を導入。
              </p>
            </div>
          </li>

          <!-- ポイント 04 -->
          <li class="department-feature-item">
            <div class="num-wrap">
              <span class="num">04</span>
            </div>
            <div class="txt-wrap">
              <h3 class="ttl">国家試験合格へ導く、専門教員の徹底指導</h3>
              <p class="desc">
                少人数制、担任制をとり、国家試験直前まで<br>
                各分野に精通した担当教員が徹底的にサポート。
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
                <img src="/images/sogoiryo/ort/feature_01.jpg" alt="豊富な実習風景 1" width="540" height="680" loading="lazy">
              </figure>
            </div>

            <!-- スライド 2 -->
            <div class="swiper-slide">
              <figure class="feature-photo-card">
                <img src="/images/sogoiryo/ort/feature_02.jpg" alt="豊富な実習風景 2" width="540" height="680" loading="lazy">
              </figure>
            </div>

            <!-- スライド 3 -->
            <div class="swiper-slide">
              <figure class="feature-photo-card">
                <img src="/images/sogoiryo/ort/feature_03.jpg" alt="豊富な実習風景 3" width="540" height="680" loading="lazy">
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
            <p class="year-desc">視能訓練士として、またチーム医療の一員として必要な基礎知識を学ぶ</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">基礎医学を学ぶ</p>
              <p class="subjects">解剖生理学／基礎医学／多職種連携学 など</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">視能訓練士として必要な基礎知識や技術を学ぶ</p>
              <p class="subjects">レンズ光学／視覚生理学／視能検査学 など</p>
            </div>
          </div>
        </div>

        <!-- 2年次 -->
        <div class="curriculum-card -year2">
          <div class="curriculum-card__head">
            <h3 class="year-ttl">2年次</h3>
            <p class="year-desc">専門知識を修得し、他の職種と連携しながら応用力を高める</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">各種専門知識を学ぶ</p>
              <p class="subjects">生理光学／視能矯正学／視能障害学 など</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">臨地実習に向けた応用力を学ぶ</p>
              <p class="subjects">視能訓練学実習／視覚リハビリテーション演習 など</p>
            </div>
          </div>
        </div>

        <!-- 3年次 -->
        <div class="curriculum-card -year3">
          <div class="curriculum-card__head">
            <h3 class="year-ttl">3年次</h3>
            <p class="year-desc">臨地実習で実践力を高め、国家試験合格に向け総合的知識を修得する</p>
          </div>
          <div class="curriculum-card__body">
            <div class="curriculum-group">
              <h4 class="group-ttl">主なカリキュラム</h4>
              <p class="section-sub-ttl">実践力を習得する</p>
              <p class="subjects">臨地実習</p>
            </div>
            <div class="curriculum-group">
              <p class="section-sub-ttl">総合的知識を学ぶ</p>
              <p class="subjects">視能学総合演習 など</p>
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
        <li>視能訓練士国家試験受験資格</li>
        <li>専門士（医療専門課程）</li>
        <li>同行援護研修一般課程</li>
        <li>スポーツビジョンインストラクター</li>
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
            うすき眼科 / えとう眼科 / 大分大学医学部附属病院 / 大分みぞぐち眼科 / 大塚眼科医院 / おかだ眼科 / きつき眼科 / さかき眼科 / 新別府病院 / たてわき眼科 / 田村山下眼科 / 調枝眼科 / 永田瀧田眼科医院 / 西田病院 / 野田眼科 / 平井眼科 / 冨士本眼科中津院 / 右田眼科 / 三好眼科内科医院 / 村上眼科
          </p>
        </div>

        <!-- 九州内 -->
        <div class="employment-group">
          <h3 class="group-ttl">九州内</h3>
          <p class="hospital-names">
            荒川眼科医院 / 出田眼科病院 / 稲原眼科医院 / 井上病院 / 大島眼科病院 / 鹿児島そのだ眼科・形成外科 / 鹿児島大学病院 / 金子眼科クリニック / 鹿屋眼科 / 川原眼科 / きくかわ眼科 / 木村眼科内科病院 / 久留米大学病院 / 古賀眼科 / 城野喜多眼科医院 / 聖マリア病院 / 大里眼科クリニック / 谷口眼科 / 垂水中央病院 / 林眼科病院 / 三村眼科医院 / みやざき眼科 / 宮崎大学医学部附属病院 / 宮崎中央眼科病院 / 望月眼科
          </p>
        </div>

        <!-- 九州外 -->
        <div class="employment-group">
          <h3 class="group-ttl">九州外</h3>
          <p class="hospital-names">
            大阪大学医学部附属病院 / オリンピア眼科病院 / きたあやせよつば眼科 / 小沢眼科内科病院 / たかやま眼科 / 長門総合病院 / ふなつ眼科 / HOYA（株）アイケアカンパニー
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
              <li>新入生・在校生交流会</li>
            </ul>
          </div>

          <!-- 5月 -->
          <div class="schedule-card">
            <div class="month-badge">5<span>月</span></div>
            <ul class="event-list">
              <li>体育祭</li>
              <li>臨床実習開始〜10月（3年）</li>
            </ul>
          </div>

          <!-- 6月 -->
          <div class="schedule-card">
            <div class="month-badge">6<span>月</span></div>
          </div>

          <!-- 7月 -->
          <div class="schedule-card">
            <div class="month-badge">7<span>月</span></div>
          </div>

          <!-- 8月 -->
          <div class="schedule-card">
            <div class="month-badge">8<span>月</span></div>
            <ul class="event-list">
              <li>前期単位認定試験</li>
              <li>夏休み</li>
            </ul>
          </div>

          <!-- 9月 -->
          <div class="schedule-card">
            <div class="month-badge">9<span>月</span></div>
            <ul class="event-list">
              <li>夏季研修</li>
            </ul>
          </div>
        </div>

        <!-- 後期：10月〜3月 -->
        <div class="schedule-col">
          <!-- 10月 -->
          <div class="schedule-card">
            <div class="month-badge">10<span>月</span></div>
            <ul class="event-list">
              <li>幼稚園の眼科健診開始〜2月（2年）</li>
            </ul>
          </div>

          <!-- 11月 -->
          <div class="schedule-card">
            <div class="month-badge">11<span>月</span></div>
            <ul class="event-list">
              <li>学園祭</li>
              <li>卒業研究発表会</li>
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
          </div>

          <!-- 2月 -->
          <div class="schedule-card">
            <div class="month-badge">2<span>月</span></div>
            <ul class="event-list">
              <li>後期単位認定試験</li>
              <li>視能訓練士国家試験</li>
              <li>医院見学実習（1年）</li>
            </ul>
          </div>

          <!-- 3月 -->
          <div class="schedule-card">
            <div class="month-badge">3<span>月</span></div>
            <ul class="event-list">
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
          憧れに近づくために、<br>
          知識と技術を磨いています
        </h3>

        <div class="reasons-card__body">
          <p>
            この仕事を志したきっかけは、幼い頃に優しく接してくれた視能訓練士に憧れたからです。私にとって眼科は楽しい場所でした。現在は、座学で幅広い知識を学び、実習でその知識を実際の検査と結びつけながら技術向上に努めています。
          </p>
          <p>
            大きな特徴は、少人数制・担任制であること。気軽に質問でき、先生方も時間をかけて相談に乗ってくれるので深い知識が身につきます。自分の考えを持って発言できるようになるなど、人間的な成長も実感しています。
          </p>
        </div>

        <!-- 学生プロフィール情報 -->
        <div class="reasons-card__profile">
          <p class="student-info">
            <span class="dept">視能訓練学科（3年生）</span>
            <span class="name">岡野 紫音<span class="honorific">さん</span></span>
            <span class="school">大分県立臼杵高等学校</span>
          </p>
        </div>
      </div>

      <!-- 右側：角丸ポートレート写真 -->
      <div class="reasons-card__photo">
        <figure class="student-photo">
          <img src="/images/sogoiryo/ort/student_photo.jpg" alt="視能訓練学科 岡野 紫音さん" width="440" height="520" loading="lazy">
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
            src="https://www.youtube.com/embed/SQZTv57HWIk"
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
            src="https://www.youtube.com/embed/X3yUHv0AV0g"
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
          title="視能訓練学科 アクセスマップ">
        </iframe>
      </div>

      <!-- 学科別 住所・連絡先テキストブロック -->
      <div class="school-access-info">
        <h3 class="school-access-info__name">視能訓練学科</h3>
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