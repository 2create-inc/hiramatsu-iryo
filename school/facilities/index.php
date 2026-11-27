<?php
$page_title = "学内施設";
$page_desc  = "学内施設紹介ページです。";

include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>


<section class="section-page-mv" id="js-mv">
  <div class="page-header">
    <h1><span class="en">Facilities</span>学内施設</h1>
    <ul class="pankuzu-list">
      <li><a href="/">HOME</a></li>
      <li><a href="/school/">学校紹介</a></li>
      <li>学内施設</li>
    </ul>
  </div>
  <div class="page-mv"><img src="/images/facilities/mv.jpg"></div>
</section>


<section class="section-facilities reveal">
  <div class="section__inner">

    <!-- セクションタイトル -->
    <h2 class="headline2">ヒラマツの施設・設備をご紹介！</h2>

    <!-- 学科選択ボタン一覧 (4カラムグリッド) -->
    <div class="facilities-grid">

      <!-- 1. 臨床検査学科 -->
      <a href="#school-hiramatsu" class="facilities-card">
        <div class="facilities-card__text">
          <h3 class="facilities-card__name">大分平松<br>総合医療専門学校</h3>
          <p class="facilities-card__school">臨床検査学科/臨床工学科/視能訓練学科</p>
        </div>
        <span class="facilities-card__arrow"></span>
      </a>

      <!-- 2. 臨床工学科 -->
      <a href="#school-reha" class="facilities-card">
        <div class="facilities-card__text">
          <h3 class="facilities-card__name">大分リハビリテーション<br>専門学校</h3>
          <p class="facilities-card__school">理学療法士科/作業療法士科/言語聴覚士科</p>
        </div>
        <span class="facilities-card__arrow"></span>
      </a>

      <!-- 3. 視能訓練学科 -->
      <a href="#school-igijutsu" class="facilities-card">
        <div class="facilities-card__text">
          <h3 class="facilities-card__name">大分医学技術専門学校</h3>
          <p class="facilities-card__school">柔道整復師科</p>
        </div>
        <span class="facilities-card__arrow"></span>
      </a>

      <!-- 4. 理学療法士科 -->
      <a href="#school-shika" class="facilities-card">
        <div class="facilities-card__text">
          <h3 class="facilities-card__name">大分歯科専門学校</h3>
          <p class="facilities-card__school">歯科衛生士科</p>
        </div>
        <span class="facilities-card__arrow"></span>
      </a>
    </div>


    <div class="floor-guide" id="school-hiramatsu">
      <!-- 校名・学科ヘッダー -->
      <div class="floor-guide__header">
        <h3 class="floor-guide__school-name">大分平松総合医療専門学校</h3>
        <p class="floor-guide__departments">臨床検査学科／臨床工学学科／視能訓練学科</p>
      </div>

      <!-- フロアマップ一覧 -->
      <div class="floor-guide__body">
        <!-- 5F -->
        <div class="floor-guide__row">
          <div class="floor-guide__floor">5F</div>
          <ul class="floor-guide__room-list">
            <li>
              <a href="#room-ort-5f-1" class="floor-guide__room-link">
                <span class="name">普通教室（※視能訓練学科専用教室）</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-ort-5f-2" class="floor-guide__room-link">
                <span class="name">視能訓練実習室</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-ort-5f-3" class="floor-guide__room-link">
                <span class="name">視能検査実習室</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-ort-5f-4" class="floor-guide__room-link">
                <span class="name">暗室</span>
                <span class="arrow"></span>
              </a>
            </li>
          </ul>
        </div>

        <!-- 4F -->
        <div class="floor-guide__row">
          <div class="floor-guide__floor">4F</div>
          <ul class="floor-guide__room-list">
            <li>
              <a href="#room-ce-4f-1" class="floor-guide__room-link">
                <span class="name">普通教室（※臨床工学学科専用教室）</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-ort-4f" class="floor-guide__room-link">
                <span class="name">基礎実習室（※視能訓練学科専用）</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-ce-4f-2" class="floor-guide__room-link">
                <span class="name">基礎工学実習室</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-ce-4f-3" class="floor-guide__room-link">
                <span class="name">臨床工学実習室</span>
                <span class="arrow"></span>
              </a>
            </li>
          </ul>
        </div>

        <!-- 3F -->
        <div class="floor-guide__row">
          <div class="floor-guide__floor">3F</div>
          <ul class="floor-guide__room-list">
            <li>
              <a href="#room-common-3f-1" class="floor-guide__room-link">
                <span class="name">検体検査室</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-common-3f-2" class="floor-guide__room-link">
                <span class="name">微生物学検査室</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-common-3f-3" class="floor-guide__room-link">
                <span class="name">生体検査室</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-common-3f-4" class="floor-guide__room-link">
                <span class="name">MSIT</span>
                <span class="arrow"></span>
              </a>
            </li>
          </ul>
        </div>

        <!-- 2F -->
        <div class="floor-guide__row">
          <div class="floor-guide__floor">2F</div>
          <ul class="floor-guide__room-list">
            <li>
              <a href="#room-lab-2f" class="floor-guide__room-link">
                <span class="name">普通教室（※臨床検査学科専用教室）</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-common-2f-1" class="floor-guide__room-link">
                <span class="name">コモンスペース</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-common-2f-2" class="floor-guide__room-link">
                <span class="name">セミナーホール</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-common-2f-3" class="floor-guide__room-link">
                <span class="name">基礎医学実習室</span>
                <span class="arrow"></span>
              </a>
            </li>
          </ul>
        </div>

        <!-- 1F -->
        <div class="floor-guide__row">
          <div class="floor-guide__floor">1F</div>
          <ul class="floor-guide__room-list">
            <li>
              <a href="#room-common-1f-1" class="floor-guide__room-link">
                <span class="name">図書館</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-common-1f-2" class="floor-guide__room-link">
                <span class="name">相談室</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-common-1f-3" class="floor-guide__room-link">
                <span class="name">保健室</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-common-1f-4" class="floor-guide__room-link">
                <span class="name">キャリアサポート</span>
                <span class="arrow"></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>



  </div>
</section>




<section class="section-facility-detail reveal">
  <div class="section__inner">

    <!-- 学科タイトル（デザイン通りの左側アクセント線付き） -->
    <div class="facility-detail-header">
      <h2 class="headline2_underline-style">共有スペース</h2>
    </div>

    <!-- 設備・実習室カードグリッド (3カラム) -->
    <div class="facility-card-grid">

      <!-- 1. 図書室 -->
      <article class="facility-detail-card" id="room-common-1f-1">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/common_1f_library.jpg" alt="1F 図書室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">1F</span>図書室
            </h3>
            <p class="facility-detail-card__dep">臨床検査学科/臨床工学科/視能訓練学科</p>
            <p class="facility-detail-card__desc">
              医学の基礎から各学科の専門書籍まで幅広く揃う、３学科共有の図書館です。開校中はいつでも利用でき、集中して勉強できるスペースも完備。いつでも頼れる静かな環境で自分のペースで安心して学べます。
            </p>
          </div>
        </div>
      </article>

      <!-- 2. 相談室 -->
      <article class="facility-detail-card" id="room-common-1f-2">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/common_1f_consultation-room.jpg" alt="1F 相談室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">1F</span>相談室
            </h3>
            <p class="facility-detail-card__dep">臨床検査学科/臨床工学科/視能訓練学科</p>
            <p class="facility-detail-card__desc">
              教員と学生が個人的にじっくり話せるあたたかな空間です。ちょっとした質問から個別学習サポートまで、いつでも親身に対応します。先生との距離が近いからこそ、どんなことでも安心して相談・質問ができます。
            </p>
          </div>
        </div>
      </article>

      <!-- 3. 保健室 -->
      <article class="facility-detail-card" id="room-common-1f-3">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/common_1f_health-room.jpg" alt="1F 保健室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">1F</span>保健室
            </h3>
            <p class="facility-detail-card__dep">臨床検査学科/臨床工学科/視能訓練学科</p>
            <p class="facility-detail-card__desc">
              完全個室でベッドとエアコンを備えた、静かで快適な保健室です。外からの視線が遮られているので、急な体調不良の時に安心して横になれます。心と体をやさしくケアできる頼もしい場所です。
            </p>
          </div>
        </div>
      </article>

      <!-- 4. キャリアサポート -->
      <article class="facility-detail-card" id="room-common-1f-4">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/common_1f_career-support.jpg" alt="1F キャリアサポート">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">1F</span>キャリアサポート
            </h3>
            <p class="facility-detail-card__dep">臨床検査学科/臨床工学科/視能訓練学科</p>
            <p class="facility-detail-card__desc">
              就職情報がいつでも閲覧できるほか、先生との会話や個別指導の場としても自由に使える部屋です。話しやすいオープンな雰囲気なので、自分の進路や日々の学びについて、安心して何でも話せます。
            </p>
          </div>
        </div>
      </article>

      <!-- 5. コモンスペース -->
      <article class="facility-detail-card" id="room-common-2f-1">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/common_2f_common-space.jpg" alt="2F コモンスペース">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">2F</span>コモンスペース
            </h3>
            <p class="facility-detail-card__dep">臨床検査学科/臨床工学科/視能訓練学科</p>
            <p class="facility-detail-card__desc">
              お弁当や文具などが揃う売店を併設した、みんなの憩いの場です。食事だけでなく、勉強やグループの話し合い、談笑など多目的に使用できます。学科の枠を超えて仲間とほっと一息つける、居心地の良いスペースです。
            </p>
          </div>
        </div>
      </article>

      <!-- 6. セミナーホール -->
      <article class="facility-detail-card" id="room-common-2f-2">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/common_2f_seminar-hall.jpg" alt="2F セミナーホール">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">2F</span>セミナーホール
            </h3>
            <p class="facility-detail-card__dep">臨床検査学科/臨床工学科/視能訓練学科</p>
            <p class="facility-detail-card__desc">
              プロジェクターや音響設備が整った多くの学生が一堂に学べるスペースです。学科合同の授業はもちろん、レイアウトを自由に変えてグループワークを行うこともできます。充実した環境で、仲間と意見を交わしながら、楽しく学びを深められます。
            </p>
          </div>
        </div>
      </article>

      <!-- 7. 基礎医学実習室 -->
      <article class="facility-detail-card" id="room-common-2f-3">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/common_2f_basic-medicine-lab.jpg" alt="2F 基礎医学実習室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">2F</span>基礎医学実習室
            </h3>
            <p class="facility-detail-card__dep">臨床検査学科/臨床工学科/視能訓練学科</p>
            <p class="facility-detail-card__desc">
              医療のベースとなる大切な知識と技術を身につける教室です。初めて触れる専門知識や医学の基礎実習を先生の丁寧なサポートを受けながら行います。
            </p>
          </div>
        </div>
      </article>

      <!-- 8. 検体検査室 -->
      <article class="facility-detail-card" id="room-common-3f-1">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/common_3f_specimen-lab.jpg" alt="3F 検体検査室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">3F</span>検体検査室
            </h3>
            <p class="facility-detail-card__dep">臨床検査学科/臨床工学科/視能訓練学科</p>
            <p class="facility-detail-card__desc">
              生化学検査、血液検査、病理検査、免疫検査、輸血検査などの実技を学ぶ実習室です。採取した血液や細胞などから、病気の診断や治療を支える基礎的な実践力を身に付けます。
            </p>
          </div>
        </div>
      </article>

      <!-- 9. 微生物学検査室 -->
      <article class="facility-detail-card" id="room-common-3f-2">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/common_3f_microbiology-lab.jpg" alt="3F 微生物学検査室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">3F</span>微生物学検査室
            </h3>
            <p class="facility-detail-card__dep">臨床検査学科/臨床工学科/視能訓練学科</p>
            <p class="facility-detail-card__desc">
              感染症の原因となる微生物を培養し特定するとともに薬に対する感受性（効き具合）を検査するための実習室です。無菌操作や顕微鏡観察、性質の判定などを実践的に繰り返し、感染症における基礎的な力を養います。
            </p>
          </div>
        </div>
      </article>

      <!-- 10. 生体検査室 -->
      <article class="facility-detail-card" id="room-common-3f-3">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/common_3f_physiology-lab.jpg" alt="3F 生体検査室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">3F</span>生体検査室
            </h3>
            <p class="facility-detail-card__dep">臨床検査学科/臨床工学科/視能訓練学科</p>
            <p class="facility-detail-card__desc">
              心電図検査、エコー検査、脳波検査、肺機能検査などの実技を学ぶ実習室です。的確なデータ解析力を実践的に身につけると同時に、患者さんの負担を減らし安心感を与えるコミュニケーション力も養います。
            </p>
          </div>
        </div>
      </article>

      <!-- 11. MSIT -->
      <article class="facility-detail-card" id="room-common-3f-4">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/common_3f_msit.jpg" alt="3F MSIT">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">3F</span>MSIT
            </h3>
            <p class="facility-detail-card__dep">臨床検査学科/臨床工学科/視能訓練学科</p>
            <p class="facility-detail-card__desc">
              パソコンや顕微鏡を使った実習をはじめ、様々な講義に対応できる学科共有の教室です。全席電源完備で、前方の大スクリーンを見ながらみんなで学べます。多様な授業に対応した環境なのでいつでも安心して受講できます。
            </p>
          </div>
        </div>
      </article>

    </div>

  </div>
</section>



<section class="section-facility-detail reveal">
  <div class="section__inner">

    <!-- 臨床検査学科 専用施設 -->
    <div class="facility-detail-header">
      <h2 class="headline2_underline-style">臨床検査学科 専用施設</h2>
    </div>

    <!-- 設備・実習室カードグリッド (3カラム) -->
    <div class="facility-card-grid">

      <!-- 1. 普通教室 -->
      <article class="facility-detail-card" id="room-lab-2f">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/rinken_2f_classroom.jpg" alt="2F 普通教室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">2F</span>普通教室
            </h3>
            <p class="facility-detail-card__dep">臨床検査学科</p>
            <p class="facility-detail-card__desc">
              各学年に専用教室があり、主にプロジェクター投影による講義を行っています。基礎分野から専門分野の講義、国家試験対策など、確かな知識の土台を築く教室です。クラスメイトと切磋琢磨しながら、医療人としての高い志を育みます。
            </p>
          </div>
        </div>
      </article>

    </div>

  </div>
</section>




<section class="section-facility-detail reveal">
  <div class="section__inner">

    <!-- 臨床工学科 専用施設 -->
    <div class="facility-detail-header">
      <h2 class="headline2_underline-style">臨床工学科 専用施設</h2>
    </div>

    <!-- 設備・実習室カードグリッド (3カラム) -->
    <div class="facility-card-grid">

      <!-- 1. 普通教室 -->
      <article class="facility-detail-card" id="room-ce-4f-1">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/ce_4f_classroom.jpg" alt="4F 普通教室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">4F</span>普通教室
            </h3>
            <p class="facility-detail-card__dep">臨床工学科</p>
            <p class="facility-detail-card__desc">
              日々の講義を受けるだけでなく、ランチタイムや休み時間もみんなで過ごす、キャンパス生活の拠点です。落ち着いて学べ、毎日安心してクラスメイトと成長できます。
            </p>
          </div>
        </div>
      </article>

      <!-- 2. 基礎工学実習室 -->
      <article class="facility-detail-card" id="room-ce-4f-2">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/ce_4f_basic-engineering-lab.jpg" alt="4F 基礎工学実習室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">4F</span>基礎工学実習室
            </h3>
            <p class="facility-detail-card__dep">臨床工学科</p>
            <p class="facility-detail-card__desc">
              臨床工学技士に欠かせない電気・電子の基礎技術を身につける教室です。座学で学んだ理論を実験をしながら知識を定着していきます。医療機器を支える工学の基礎をしっかり身につけます。
            </p>
          </div>
        </div>
      </article>

      <!-- 3. 臨床工学実習室 -->
      <article class="facility-detail-card" id="room-ce-4f-3">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/ce_4f_clinical-engineering-lab.jpg" alt="4F 臨床工学実習室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">4F</span>臨床工学実習室
            </h3>
            <p class="facility-detail-card__dep">臨床工学科</p>
            <p class="facility-detail-card__desc">
              臨床工学実習室は、人工心肺装置や人工呼吸器、血液浄化装置といった高度医療機器の操作・保守管理を実践的に学ぶ教室です。最新機器に触れ、臨床工学技士として必要な技術と即戦力を養います。
            </p>
          </div>
        </div>
      </article>

    </div>

  </div>
</section>




<section class="section-facility-detail reveal">
  <div class="section__inner">

    <!-- 視能訓練学科 専用施設 -->
    <div class="facility-detail-header">
      <h2 class="headline2_underline-style">視能訓練学科 専用施設</h2>
    </div>

    <!-- 設備・実習室カードグリッド (3カラム) -->
    <div class="facility-card-grid">

      <!-- 1. 基礎実習室 -->
      <article class="facility-detail-card" id="room-ort-4f">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/ort_4f_basic-lab.jpg" alt="4F 基礎実習室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">4F</span>基礎実習室
            </h3>
            <p class="facility-detail-card__dep">視能訓練学科</p>
            <p class="facility-detail-card__desc">
              眼だけでなく人体の解剖生理学や基礎医学などを学ぶための実習室です。また，コンタクトレンズの取り扱いや装用に必要な検査・技術について学びます。
            </p>
          </div>
        </div>
      </article>

      <!-- 2. 普通教室 -->
      <article class="facility-detail-card" id="room-ort-5f-1">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/ort_5f_classroom.jpg" alt="5F 普通教室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">5F</span>普通教室
            </h3>
            <p class="facility-detail-card__dep">視能訓練学科</p>
            <p class="facility-detail-card__desc">
              学生が日々の講義を受ける、学びの中心となる教室です。学年ごとに専用の教室があり、落ち着いた環境で授業に取り組めます。PC、プロジェクター、Wi-Fiを完備し、さまざまな講義形式に対応しています。
            </p>
          </div>
        </div>
      </article>

      <!-- 3. 視能訓練実習室 -->
      <article class="facility-detail-card" id="room-ort-5f-2">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/ort_5f_orthoptic-training-lab.jpg" alt="5F 視能訓練実習室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">5F</span>視能訓練実習室
            </h3>
            <p class="facility-detail-card__dep">視能訓練学科</p>
            <p class="facility-detail-card__desc">
              斜視・弱視に関する専門的な視能検査や視能訓練を行う実習室です。両眼視機能検査、眼位・眼球運動検査などを通して視機能を評価し、弱視訓練や両眼視機能訓練などの視能矯正について学びます。
            </p>
          </div>
        </div>
      </article>

      <!-- 4. 視能検査実習室 -->
      <article class="facility-detail-card" id="room-ort-5f-3">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/ort_5f_eye-exam-lab.jpg" alt="5F 視能検査実習室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">5F</span>視能検査実習室
            </h3>
            <p class="facility-detail-card__dep">視能訓練学科</p>
            <p class="facility-detail-card__desc">
              眼科で日常的に行われるさまざまな検査を学ぶ実習室です。視力や眼圧、屈折の検査をはじめ、角膜内皮細胞検査や眼軸長測定などを通して、正確な検査を行うための知識と技術を身につけます。
            </p>
          </div>
        </div>
      </article>

      <!-- 5. 暗室 -->
      <article class="facility-detail-card" id="room-ort-5f-4">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/ort_5f_darkroom.jpg" alt="5F 暗室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">5F</span>暗室
            </h3>
            <p class="facility-detail-card__dep">視能訓練学科</p>
            <p class="facility-detail-card__desc">
              視野検査や眼底検査、OCT（光干渉断層計）など、疾患の診断や経過観察に欠かせない検査を学ぶ実習室です。検査結果と疾患との関連について理解を深めます。
            </p>
          </div>
        </div>
      </article>

    </div>

  </div>
</section>









<section class="section-facility-detail reveal">
  <div class="section__inner">

    <div class="floor-guide -reha" id="school-reha">
      <!-- ヘッダー（校名・対象学科） -->
      <div class="floor-guide__header">
        <h3 class="floor-guide__school-name">大分リハビリテーション専門学校</h3>
        <p class="floor-guide__departments">理学療法士科／作業療法士科／言語聴覚士科</p>
      </div>

      <!-- 3カラム学科エリア -->
      <div class="floor-guide__grid">

        <!-- 1. 理学療法士科 -->
        <div class="floor-guide__col">
          <div class="floor-guide__body">
            <!-- 5F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">5F</div>
              <ul class="floor-guide__room-list">
                <li>
                  <a href="#room-pt-5f" class="floor-guide__room-link">
                    <span class="name">大講義室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- 4F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">4F</div>
              <ul class="floor-guide__room-list">
                <li>
                  <a href="#room-pt-4f" class="floor-guide__room-link">
                    <span class="name">基礎実習室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- 3F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">3F</div>
              <ul class="floor-guide__room-list">
                <li>
                  <a href="#room-pt-3f-1" class="floor-guide__room-link">
                    <span class="name">機能訓練室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
                <li>
                  <a href="#room-pt-3f-2" class="floor-guide__room-link">
                    <span class="name">学習室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- 2F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">2F</div>
              <ul class="floor-guide__room-list">
                <li>
                  <a href="#room-pt-2f" class="floor-guide__room-link">
                    <span class="name">ADL室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- 1F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">1F</div>
              <ul class="floor-guide__room-list">
                <li>
                  <a href="#room-pt-1f-1" class="floor-guide__room-link">
                    <span class="name">水治療法室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
                <li>
                  <a href="#room-pt-1f-2" class="floor-guide__room-link">
                    <span class="name">図書室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <h4 class="floor-guide__col-title">理学療法士科</h4>
        </div>

        <!-- 2. 作業療法士科 -->
        <div class="floor-guide__col">
          <div class="floor-guide__body">
            <!-- 7F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">7F</div>
              <div class="floor-guide__empty">ー</div>
            </div>
            <!-- 6F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">6F</div>
              <ul class="floor-guide__room-list">
                <li>
                  <a href="#room-ot-6f" class="floor-guide__room-link">
                    <span class="name">図書室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- 5F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">5F</div>
              <div class="floor-guide__empty">ー</div>
            </div>
            <!-- 4F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">4F</div>
              <ul class="floor-guide__room-list">
                <li>
                  <a href="#room-ot-4f-1" class="floor-guide__room-link">
                    <span class="name">木工室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
                <li>
                  <a href="#room-ot-4f-2" class="floor-guide__room-link">
                    <span class="name">陶工室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- 3F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">3F</div>
              <div class="floor-guide__empty">ー</div>
            </div>
            <!-- 2F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">2F</div>
              <ul class="floor-guide__room-list">
                <li>
                  <a href="#room-ot-2f" class="floor-guide__room-link">
                    <span class="name">実技室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- 1F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">1F</div>
              <div class="floor-guide__empty">ー</div>
            </div>
          </div>
          <h4 class="floor-guide__col-title">作業療法士科</h4>
        </div>

        <!-- 3. 言語聴覚士科 -->
        <div class="floor-guide__col">
          <div class="floor-guide__body">
            <!-- 5F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">5F</div>
              <ul class="floor-guide__room-list">
                <li>
                  <a href="#room-st-5f" class="floor-guide__room-link">
                    <span class="name">合同講義室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- 4F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">4F</div>
              <ul class="floor-guide__room-list">
                <li>
                  <a href="#room-st-4f-1" class="floor-guide__room-link">
                    <span class="name">聴覚訓練室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
                <li>
                  <a href="#room-st-4f-2" class="floor-guide__room-link">
                    <span class="name">聴覚観察室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- 3F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">3F</div>
              <ul class="floor-guide__room-list">
                <li>
                  <a href="#room-st-3f-1" class="floor-guide__room-link">
                    <span class="name">聴覚検査室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
                <li>
                  <a href="#room-st-3f-2" class="floor-guide__room-link">
                    <span class="name">防音室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- 2F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">2F</div>
              <ul class="floor-guide__room-list">
                <li>
                  <a href="#room-st-2f-1" class="floor-guide__room-link">
                    <span class="name">普通教室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
                <li>
                  <a href="#room-st-2f-2" class="floor-guide__room-link">
                    <span class="name">基礎実習室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- 1F -->
            <div class="floor-guide__row">
              <div class="floor-guide__floor">1F</div>
              <ul class="floor-guide__room-list">
                <li>
                  <a href="#room-st-1f" class="floor-guide__room-link">
                    <span class="name">図書室</span>
                    <span class="arrow"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <h4 class="floor-guide__col-title">言語聴覚士科</h4>
        </div>

      </div>
    </div>

  </div>
</section>



<section class="section-facility-detail reveal">
  <div class="section__inner">

    <!-- 学科専用施設 ヘッダー -->
    <div class="facility-detail-header">
      <h2 class="headline2_underline-style">理学療法士科 専用施設</h2>
    </div>

    <!-- 設備・実習室カードグリッド (3カラム) -->
    <div class="facility-card-grid">

      <!-- 1. 水治療法室 -->
      <article class="facility-detail-card" id="room-pt-1f-1">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/pt_1f_hydrotherapy-room.jpg" alt="1F 水治療法室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">1F</span>水治療法室
            </h3>
            <p class="facility-detail-card__dep">理学療法士科</p>
            <p class="facility-detail-card__desc">
              水の浮力や粘性抵抗などを用いた水治療法の活用方法を学ぶための教室です。ハバードタンクや過流浴、気泡浴などの水治療法機器を備えています。
            </p>
          </div>
        </div>
      </article>

      <!-- 2. 図書室 -->
      <article class="facility-detail-card" id="room-pt-1f-2">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/pt_1f_library.jpg" alt="1F 図書室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">1F</span>図書室
            </h3>
            <p class="facility-detail-card__dep">理学療法士科</p>
            <p class="facility-detail-card__desc">
              理学療法に関連する書籍を中心に1000冊以上所蔵しています。学生は必要に応じて閲覧できます。
            </p>
          </div>
        </div>
      </article>

      <!-- 3. ADL室 -->
      <article class="facility-detail-card" id="room-pt-2f">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/pt_2f_adl-room.jpg" alt="2F ADL室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">2F</span>ADL室
            </h3>
            <p class="facility-detail-card__dep">理学療法士科</p>
            <p class="facility-detail-card__desc">
              リハビリテーションを受ける患者さんが自宅復帰する際に、起居、歩行、トイレ、着替え、入浴、調理などの日常生活を円滑に送るための指導方法を学びます。
            </p>
          </div>
        </div>
      </article>

      <!-- 4. 機能訓練室 -->
      <article class="facility-detail-card" id="room-pt-3f-1">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/pt_3f_training-room.jpg" alt="3F 機能訓練室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">3F</span>機能訓練室
            </h3>
            <p class="facility-detail-card__dep">理学療法士科</p>
            <p class="facility-detail-card__desc">
              理学療法に関連する様々な筋力訓練装置、平行棒などの訓練機器や、筋電図や呼気ガス分析装置などの評価機器を備えています。これらの機器をどのように活用するかを学ぶための教室です。
            </p>
          </div>
        </div>
      </article>

      <!-- 5. 学習室 -->
      <article class="facility-detail-card" id="room-pt-3f-2">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/pt_3f_study-room.jpg" alt="3F 学習室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">3F</span>学習室
            </h3>
            <p class="facility-detail-card__dep">理学療法士科</p>
            <p class="facility-detail-card__desc">
              医学を中心とした専門書や学術雑誌が所蔵されています。放課後などには個人学習のスペースとしても活用することができます。
            </p>
          </div>
        </div>
      </article>

      <!-- 6. 基礎実習室 -->
      <article class="facility-detail-card" id="room-pt-4f">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/pt_4f_basic-lab.jpg" alt="4F 基礎実習室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">4F</span>基礎実習室
            </h3>
            <p class="facility-detail-card__dep">理学療法士科</p>
            <p class="facility-detail-card__desc">
              解剖学演習や生理学演習など、人体の構造や働きを理解するために必要な科目の授業を中心に多目的に利用されています。
            </p>
          </div>
        </div>
      </article>

      <!-- 7. 大講義室 -->
      <article class="facility-detail-card" id="room-pt-5f">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/pt_5f_lecture-hall.jpg" alt="5F 大講義室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">5F</span>大講義室
            </h3>
            <p class="facility-detail-card__dep">理学療法士科</p>
            <p class="facility-detail-card__desc">
              筋機能評価学や疾患別治療学などの理学療法士が行う評価や治療に関連する科目で主に利用されます。各科目の実技練習や演習発表など、用途に応じて広く活用されています。
            </p>
          </div>
        </div>
      </article>

    </div>

  </div>
</section>



<section class="section-facility-detail reveal">
  <div class="section__inner">

    <!-- 作業療法士科 専用施設 ヘッダー -->
    <div class="facility-detail-header">
      <h2 class="headline2_underline-style">作業療法士科 専用施設</h2>
    </div>

    <!-- 設備・実習室カードグリッド (3カラム) -->
    <div class="facility-card-grid">

      <!-- 1. 実技室 -->
      <article class="facility-detail-card" id="room-ot-2f">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/ot_2f_practice-room.jpg" alt="2F 実技室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">2F</span>実技室
            </h3>
            <p class="facility-detail-card__dep">作業療法士科</p>
            <p class="facility-detail-card__desc">
              臨床場面を想定した実技を学ぶ部屋です。身体機能や精神機能の作業療法を学びます。車椅子やベッドなどのリハビリ機器もそろえています。
            </p>
          </div>
        </div>
      </article>

      <!-- 2. 木工室 -->
      <article class="facility-detail-card" id="room-ot-4f-1">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/ot_4f_woodwork-room.jpg" alt="4F 木工室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">4F</span>木工室
            </h3>
            <p class="facility-detail-card__dep">作業療法士科</p>
            <p class="facility-detail-card__desc">
              木材の工作を行うための道具や器材、材料があります。木工や革細工、かご作りなどを通して”作業”を学びます。
            </p>
          </div>
        </div>
      </article>

      <!-- 3. 陶工室 -->
      <article class="facility-detail-card" id="room-ot-4f-2">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/ot_4f_pottery-room.jpg" alt="4F 陶工室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">4F</span>陶工室
            </h3>
            <p class="facility-detail-card__dep">作業療法士科</p>
            <p class="facility-detail-card__desc">
              陶芸に必要な粘土や窯があります。茶碗や皿作りを通して”作業”を学びます。
            </p>
          </div>
        </div>
      </article>

      <!-- 4. 図書室 -->
      <article class="facility-detail-card" id="room-ot-6f">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/ot_6f_library.jpg" alt="6F 図書室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">6F</span>図書室
            </h3>
            <p class="facility-detail-card__dep">作業療法士科</p>
            <p class="facility-detail-card__desc">
              リハビリテーションに関する専門書や参考書、国家資格取得に役立つ資料など、約２０００冊の本を管理しています。自習室としても活用されています。
            </p>
          </div>
        </div>
      </article>

    </div>

  </div>
</section>



<section class="section-facility-detail reveal">
  <div class="section__inner">

    <!-- 言語聴覚士科 専用施設 ヘッダー -->
    <div class="facility-detail-header">
      <h2 class="headline2_underline-style">言語聴覚士科 専用施設</h2>
    </div>

    <!-- 設備・実習室カードグリッド (3カラム) -->
    <div class="facility-card-grid">

      <!-- 1. 図書室 -->
      <article class="facility-detail-card" id="room-st-1f">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/st_1f_library.jpg" alt="1F 図書室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">1F</span>図書室
            </h3>
            <p class="facility-detail-card__dep">言語聴覚士科</p>
            <p class="facility-detail-card__desc">
              医学・リハビリテーション分野の書籍が充実しており、言語聴覚療法の書籍は県内最多の蔵書数です。在校生・卒業生に広く利用されています。静かに学習できるスペースとしても活用中です。
            </p>
          </div>
        </div>
      </article>

      <!-- 2. 普通教室 -->
      <article class="facility-detail-card" id="room-st-2f-1">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/st_2f_classroom.jpg" alt="2F 普通教室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">2F</span>普通教室
            </h3>
            <p class="facility-detail-card__dep">言語聴覚士科</p>
            <p class="facility-detail-card__desc">
              クラス制を導入しており、1学年に1教室を設けています。全員で講義を受講します。PC、プロジェクター、Wi-Fi、音響設備を常設しています。
            </p>
          </div>
        </div>
      </article>

      <!-- 3. 基礎実習室 -->
      <article class="facility-detail-card" id="room-st-2f-2">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/st_2f_basic-lab.jpg" alt="2F 基礎実習室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">2F</span>基礎実習室
            </h3>
            <p class="facility-detail-card__dep">言語聴覚士科</p>
            <p class="facility-detail-card__desc">
              学生が自由に使える広い教室です。学習、昼食、交流など多目的に利用されています。3学年共用で、電子レンジや冷蔵庫も自由に使えます。
            </p>
          </div>
        </div>
      </article>

      <!-- 4. 聴覚検査室 -->
      <article class="facility-detail-card" id="room-st-3f-1">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/st_3f_hearing-test-room.jpg" alt="3F 聴覚検査室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">3F</span>聴覚検査室
            </h3>
            <p class="facility-detail-card__dep">言語聴覚士科</p>
            <p class="facility-detail-card__desc">
              聴力検査機器や音声機能評価機器を複数備えた、演習用の実習室です。室内全体が高い遮音性を備え、演習に適した環境です。
            </p>
          </div>
        </div>
      </article>

      <!-- 5. 防音室 -->
      <article class="facility-detail-card" id="room-st-3f-2">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/st_3f_soundproof-room.jpg" alt="3F 防音室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">3F</span>防音室
            </h3>
            <p class="facility-detail-card__dep">言語聴覚士科</p>
            <p class="facility-detail-card__desc">
              聴力検査専用の部屋で、2室あります。各室に聴力検査機器を1セットずつ設置しており、精密な検査を実施できます。
            </p>
          </div>
        </div>
      </article>

      <!-- 6. 聴覚訓練室 -->
      <article class="facility-detail-card" id="room-st-4f-1">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/st_4f_hearing-training-room.jpg" alt="4F 聴覚訓練室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">4F</span>聴覚訓練室
            </h3>
            <p class="facility-detail-card__dep">言語聴覚士科</p>
            <p class="facility-detail-card__desc">
              主に小児を対象とした演習を行う部屋です。実際にお子さんに来校いただき、カーペット敷きの空間で、学生がさまざまな関わりを体験できます。
            </p>
          </div>
        </div>
      </article>

      <!-- 7. 聴覚観察室 -->
      <article class="facility-detail-card" id="room-st-4f-2">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/st_4f_observation-room.jpg" alt="4F 聴覚観察室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">4F</span>聴覚観察室
            </h3>
            <p class="facility-detail-card__dep">言語聴覚士科</p>
            <p class="facility-detail-card__desc">
              特殊なガラス越しに、聴覚訓練室での他の学生の演習を観察できる部屋です。演習後の振り返りやまとめにも活用します。
            </p>
          </div>
        </div>
      </article>

      <!-- 8. 合同講義室 -->
      <article class="facility-detail-card" id="room-st-5f">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/st_5f_joint-lecture-room.jpg" alt="5F 合同講義室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">5F</span>合同講義室
            </h3>
            <p class="facility-detail-card__dep">言語聴覚士科</p>
            <p class="facility-detail-card__desc">
              言語聴覚士科で最大の講義室です。全体集会や合同講義、3学科合同のIPE(専門職連携教育)など、大人数で集まる場面で使用します。
            </p>
          </div>
        </div>
      </article>

    </div>

  </div>
</section>




<section class="section-facility-detail reveal">
  <div class="section__inner">
    <div class="floor-guide" id="school-igijutsu">
      <!-- 校名・学科ヘッダー -->
      <div class="floor-guide__header">
        <h3 class="floor-guide__school-name">大分医学技術専門学校</h3>
        <p class="floor-guide__departments">柔道整復師科</p>
      </div>

      <!-- フロアマップ一覧 -->
      <div class="floor-guide__body -one-col">
        <!-- 5F -->
        <div class="floor-guide__row">
          <div class="floor-guide__floor">5F</div>
          <ul class="floor-guide__room-list">
            <li>
              <a href="#room-judo-5f" class="floor-guide__room-link">
                <span class="name">大講堂</span>
                <span class="arrow"></span>
              </a>
            </li>
          </ul>
        </div>

        <!-- 4F -->
        <div class="floor-guide__row">
          <div class="floor-guide__floor">4F</div>
          <ul class="floor-guide__room-list">
            <li>
              <a href="#room-judo-4f" class="floor-guide__room-link">
                <span class="name">柔道場</span>
                <span class="arrow"></span>
              </a>
            </li>
          </ul>
        </div>

        <!-- 3F -->
        <div class="floor-guide__row">
          <div class="floor-guide__floor">3F</div>
          <ul class="floor-guide__room-list">
            <li>
              <a href="#room-judo-3f-1" class="floor-guide__room-link">
                <span class="name">教室（大）</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-judo-3f-2" class="floor-guide__room-link">
                <span class="name">実技室</span>
                <span class="arrow"></span>
              </a>
            </li>
          </ul>
        </div>

        <!-- 2F -->
        <div class="floor-guide__row">
          <div class="floor-guide__floor">2F</div>
          <ul class="floor-guide__room-list">
            <li>
              <a href="#room-judo-2f" class="floor-guide__room-link">
                <span class="name">教室</span>
                <span class="arrow"></span>
              </a>
            </li>
          </ul>
        </div>

        <!-- 1F -->
        <div class="floor-guide__row">
          <div class="floor-guide__floor">1F</div>
          <ul class="floor-guide__room-list">
            <li>
              <a href="#room-judo-1f" class="floor-guide__room-link">
                <span class="name">図書館</span>
                <span class="arrow"></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section-facility-detail reveal">
  <div class="section__inner">

    <!-- 柔道整復師科 専用施設 ヘッダー -->
    <div class="facility-detail-header">
      <h2 class="headline2_underline-style">柔道整復師科 専用施設</h2>
    </div>

    <!-- 設備・実習室カードグリッド (3カラム) -->
    <div class="facility-card-grid">

      <!-- 1. 図書室 -->
      <article class="facility-detail-card" id="room-judo-1f">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/jt_1f_library.jpg" alt="1F 図書室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">1F</span>図書室
            </h3>
            <p class="facility-detail-card__dep">柔道整復師科</p>
            <p class="facility-detail-card__desc">
              解剖学や生理学など医学の基礎となる書籍や最新の柔道整復術が学べる技術書などが揃っています。落ち着きのある部屋でしっかりと勉強に集中できます。
            </p>
          </div>
        </div>
      </article>

      <!-- 2. 教室 -->
      <article class="facility-detail-card" id="room-judo-2f">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/jt_2f_classroom.jpg" alt="2F 教室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">2F</span>教室
            </h3>
            <p class="facility-detail-card__dep">柔道整復師科</p>
            <p class="facility-detail-card__desc">
              大きな黒板や骨格模型、プロジェクター、個人用ロッカーなど充実の設備を揃えています。3年間の学校生活の拠点となる安心安全のひと部屋です。
            </p>
          </div>
        </div>
      </article>

      <!-- 3. 教室（大） -->
      <article class="facility-detail-card" id="room-judo-3f-1">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/jt_3f_large-classroom.jpg" alt="3F 教室（大）">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">3F</span>教室（大）
            </h3>
            <p class="facility-detail-card__dep">柔道整復師科</p>
            <p class="facility-detail-card__desc">
              広いスペースを活用してグループ学習や模試などをおこない、基礎学力の向上を図ります。この教室で学んだ知識は国家試験合格のための揺るぎない力となります。
            </p>
          </div>
        </div>
      </article>

      <!-- 4. 実技室 -->
      <article class="facility-detail-card" id="room-judo-3f-2">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/jt_3f_practice-room.jpg" alt="3F 実技室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">3F</span>実技室
            </h3>
            <p class="facility-detail-card__dep">柔道整復師科</p>
            <p class="facility-detail-card__desc">
              柔道整復師として臨床現場で活躍するため実技力を学びます。3年間でテーピングや包帯、ギプス固定など様々な技術を習得します。
            </p>
          </div>
        </div>
      </article>

      <!-- 5. 柔道場 -->
      <article class="facility-detail-card" id="room-judo-4f">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/jt_4f_judo-hall.jpg" alt="4F 柔道場">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">4F</span>柔道場
            </h3>
            <p class="facility-detail-card__dep">柔道整復師科</p>
            <p class="facility-detail-card__desc">
              3年間で柔道の基礎（礼法・受け身）から応用（立ち技・寝技など）までを習得します。柔道未経験者の方でも安心安全に学べる教育体制を整えています。
            </p>
          </div>
        </div>
      </article>

      <!-- 6. 大講堂 -->
      <article class="facility-detail-card" id="room-judo-5f">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/jt_5f_auditorium.jpg" alt="5F 大講堂">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">5F</span>大講堂
            </h3>
            <p class="facility-detail-card__dep">柔道整復師科</p>
            <p class="facility-detail-card__desc">
              最大約90名を収容できる学校内で一番広い教室です。音響設備も充実しており、特別講義や模擬試験などで使用しています。
            </p>
          </div>
        </div>
      </article>

    </div>

  </div>
</section>




<section class="section-facility-detail reveal">
  <div class="section__inner">
    <div class="floor-guide" id="school-shika">
      <!-- 校名・学科ヘッダー -->
      <div class="floor-guide__header">
        <h3 class="floor-guide__school-name">大分歯科専門学校</h3>
        <p class="floor-guide__departments">歯科衛生士科</p>
      </div>

      <!-- フロアマップ一覧 -->
      <div class="floor-guide__body -one-col">

        <!-- 2F -->
        <div class="floor-guide__row">
          <div class="floor-guide__floor">2F</div>
          <ul class="floor-guide__room-list">
            <li>
              <a href="#room-dh-2f-1" class="floor-guide__room-link">
                <span class="name">普通教室III</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-dh-2f-2" class="floor-guide__room-link">
                <span class="name">実験室</span>
                <span class="arrow"></span>
              </a>
            </li>
            <li>
              <a href="#room-dh-2f-3" class="floor-guide__room-link">
                <span class="name">基礎実習室</span>
                <span class="arrow"></span>
              </a>
            </li>
          </ul>
          </ul>
        </div>

        <!-- 1F -->
        <div class="floor-guide__row">
          <div class="floor-guide__floor">1F</div>
          <div class="floor-guide__empty">ー</div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="section-facility-detail reveal">
  <div class="section__inner">

    <!-- 歯科衛生士科 専用施設 ヘッダー -->
    <div class="facility-detail-header">
      <h2 class="headline2_underline-style">歯科衛生士科 専用施設</h2>
    </div>

    <!-- 設備・実習室カードグリッド (3カラム) -->
    <div class="facility-card-grid">

      <!-- 1. 普通教室 Ⅲ -->
      <article class="facility-detail-card" id="room-dh-2f-1">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/dh_2f_classroom-3.jpg" alt="2F 普通教室 Ⅲ">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">2F</span>普通教室 Ⅲ
            </h3>
            <p class="facility-detail-card__dep">歯科衛生士科</p>
            <p class="facility-detail-card__desc">
              大型スクリーンと視聴覚器材が整備されており、特別講義や専門セミナーで効果的に活用します。外部講師による特別授業やオンライン講義にも対応しており、最新の歯科医療情報をリアルタイムで共有できます。
            </p>
          </div>
        </div>
      </article>

      <!-- 2. 実験室 -->
      <article class="facility-detail-card" id="room-dh-2f-2">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/dh_2f_laboratory.jpg" alt="2F 実験室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">2F</span>実験室
            </h3>
            <p class="facility-detail-card__dep">歯科衛生士科</p>
            <p class="facility-detail-card__desc">
              歯科医療の現場で求められる確かな技術を身につけるために、専用のマネキンを使用した実習を行います。学生同士口腔内での実習を行う前の基礎的技術の習得を実際の患者さんに近い環境で練習できます。
            </p>
          </div>
        </div>
      </article>

      <!-- 3. 基礎実習室 -->
      <article class="facility-detail-card" id="room-dh-2f-3">
        <div class="facility-detail-card__link">
          <div class="facility-detail-card__img-wrap">
            <img src="/images/facilities/dh_2f_basic-lab.jpg" alt="2F 基礎実習室">
          </div>
          <div class="facility-detail-card__info">
            <h3 class="facility-detail-card__title">
              <span class="floor">2F</span>基礎実習室
            </h3>
            <p class="facility-detail-card__dep">歯科衛生士科</p>
            <p class="facility-detail-card__desc">
              実際の歯科医院と同じユニットを備え、モニターを使用し口腔内の観察や歯石除去などの技術を学びます。臨床に近い設備で練習することで、現場で求められる技術と対応力を確実に身につけられます。
            </p>
          </div>
        </div>
      </article>

    </div>

  </div>
</section>




<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/section-conversion.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>