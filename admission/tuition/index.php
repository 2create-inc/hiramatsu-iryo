<?php
$page_title = "出願書類";
$page_desc  = "出願書類ページです。";

include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>


<section class="section-page-mv" id="js-mv">
<div class="page-header">
  <h1><span class="en">Tuition Information</span>学費のご案内</h1>
  <ul class="pankuzu-list">
    <li><a href="/">HOME</a></li>
    <li><a href="/admission/">入学案内</a></li>
    <li>学費のご案内</li>
  </ul>
</div>
<div class="page-mv"><img src="/images/tuition/mv.jpg"></div>
</section>


<section class="section-about-school reveal">
  <div class="section__inner">

  <div class="underline-header">
    <h2 class="headline2_underline-style">学納金と必要諸経費</h2>
  </div>

  <!-- 緑縦バー小見出し：学納金 -->
    <h3 class="headline-bar">学納金</h3>

    <!-- 料金表テーブルコンテナ -->
    <div class="tuition-table-wrap">
      <table class="tuition-table">
        <thead>
          <tr>
            <!-- 💡 rowspan="2" を追加して2行分縦結合する -->
            <th scope="col" rowspan="2" class="-school">学校名</th>
            <th scope="col" rowspan="2" class="-department">学科名</th>
            <th scope="col" rowspan="2" class="-admission">入学金</th>
            <!-- 💡 4列分を横結合する -->
            <th scope="col" colspan="4" class="-annual-head">学納金<span>（年額）</span></th>
          </tr>
          <tr>
            <!-- 💡 2行目は学納金の内訳4項目のみ -->
            <th scope="col" class="-sub-head">授業料</th>
            <th scope="col" class="-sub-head">実験実習費<span class="sub">（実習費）</span></th>
            <th scope="col" class="-sub-head">施設設備費</th>
            <th scope="col" class="-sub-head -total">学納金計</th>
          </tr>
        </thead>
        <tbody>
          <!-- 大分平松総合医療専門学校 -->
          <tr>
            <th scope="rowgroup" rowspan="3" class="-school-name">大分平松総合医療専門学校</th>
            <td class="-dept-name">臨床検査学科</td>
            <td rowspan="7" class="-admission-fee">240,000</td>
            <td class="-num">600,000</td>
            <td class="-num">310,000</td>
            <td class="-num">260,000</td>
            <td class="-num -total-val">1,170,000</td>
          </tr>
          <tr>
            <td class="-dept-name">臨床工学科</td>
            <td class="-num">600,000</td>
            <td class="-num">280,000</td>
            <td class="-num">260,000</td>
            <td class="-num -total-val">1,140,000</td>
          </tr>
          <tr>
            <td class="-dept-name">視能訓練学科</td>
            <td class="-num">600,000</td>
            <td class="-num">310,000</td>
            <td class="-num">260,000</td>
            <td class="-num -total-val">1,170,000</td>
          </tr>

          <!-- 大分リハビリテーション専門学校 -->
          <tr class="-border-top-school">
            <th scope="rowgroup" rowspan="3" class="-school-name">大分リハビリテーション専門学校</th>
            <td class="-dept-name">理学療法士科</td>
            <td class="-num">590,000</td>
            <td class="-num">300,000</td>
            <td class="-num">220,000</td>
            <td class="-num -total-val">1,110,000</td>
          </tr>
          <tr>
            <td class="-dept-name">作業療法士科</td>
            <td class="-num">590,000</td>
            <td class="-num">300,000</td>
            <td class="-num">220,000</td>
            <td class="-num -total-val">1,110,000</td>
          </tr>
          <tr>
            <td class="-dept-name">言語聴覚士科</td>
            <td class="-num">590,000</td>
            <td class="-num">300,000</td>
            <td class="-num">220,000</td>
            <td class="-num -total-val">1,110,000</td>
          </tr>

          <!-- 大分医学技術専門学校 -->
          <tr class="-border-top-school">
            <th scope="row" class="-school-name">大分医学技術専門学校</th>
            <td class="-dept-name">柔道整復師科</td>
            <td class="-num">1,000,000</td>
            <td class="-num -dash">ー</td>
            <td class="-num">300,000</td>
            <td class="-num -total-val">1,300,000</td>
          </tr>

          <!-- 大分歯科専門学校 -->
          <tr class="-border-top-school">
            <th scope="row" class="-school-name" colspan="2">大分歯科専門学校</th>
            <td class="-admission-fee">160,000</td>
            <td class="-num"></td>
            <td class="-num"></td>
            <td class="-num"></td>
            <td class="-num -total-val"></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- 表下の注意書き注記 -->
    <ul class="tuition-notes">
      <li>※入学金は初年度のみの納入となります。</li>
      <li>※学納金（授業料・実験実習費・施設設備費）は年額を示しています。</li>
      <li>※学納金の納入は4月（前期）と9月（後期）の2回分割納入となります。</li>
    </ul>

    <!-- 緑縦バー小見出し：学納金以外の必要諸経費について -->
    <h3 class="headline-bar -sec-title">学納金以外の必要諸経費について</h3>

    <!-- 2カラムブロック（左：テキスト説明 / 右：初年度合計額カード） -->
    <div class="tuition-other-grid">
      
      <!-- 左：文章エリア -->
      <div class="tuition-other-text">
        <p class="main">
          初年度は実習着、実習器材等の費用が必要です。<br>
          また、教科書代は学科・学年・学期によって異なります。
        </p>
        <p class="sub">・詳細は各学校各学科までお問い合わせください。</p>
      </div>

      <!-- 右：初年度の合計額（概算）カード -->
      <div class="tuition-total-card">
        <h4 class="tuition-total-card__title">初年度の合計額（概算）について</h4>
        <div class="tuition-total-card__list">
          <div class="tuition-total-card__item">
            <span class="label">・大分平松総合医療専門学校・大分医学技術専門学校</span>
            <span class="price">15万円程度</span>
          </div>
          <div class="tuition-total-card__item">
            <span class="label">・大分リハビリテーション専門学校・大分歯科専門学校</span>
            <span class="price">25万円程度</span>
          </div>
        </div>
      </div>

    </div>



    <div class="underline-header">
      <h2 class="headline2_underline-style">高等教育の修学支援新制度</h2>
    </div>

    <!-- リードテキストエリア -->
    <div class="support-system-lead">
      <p>
        この制度は、「大学等における修学の支援に関する法律」に基づき、国が行う公的な修学支援制度です。<br>
        平松学園医療系専門学校は本制度の認定を受けています。
      </p>
      <p class="link-text">
        修学支援新制度について詳細は<a href="https://www.mext.go.jp/a_menu/koutou/hutankeigen/index.htm" target="_blank" rel="noopener noreferrer">コチラ</a>
      </p>
    </div>

    <!-- グレー背景バナーカード -->
    <div class="support-system-banner">
      <h3 class="support-system-banner__catch">
        入学した支援対象者は、<span>「授業料等の減免」</span>を受けることができます
      </h3>

      <!-- 3つの金額メリットカード -->
      <ul class="support-system-cards">
        <li class="support-card">
          <span class="support-card__label">入学金</span>
          <div class="support-card__price">
            <span class="sub">最大</span>
            <span class="num">16</span>
            <span class="unit">万円</span>
          </div>
        </li>
        <li class="support-card">
          <span class="support-card__label">授業料</span>
          <div class="support-card__price">
            <span class="sub">最大</span>
            <span class="num">59</span>
            <span class="unit">万円</span>
            <span class="note">（年額）</span>
          </div>
        </li>
        <li class="support-card">
          <span class="support-card__label">初年度<small>（支援区分Ⅰ）</small></span>
          <div class="support-card__price">
            <span class="sub">最大</span>
            <span class="num">75</span>
            <span class="unit">万円</span>
          </div>
        </li>
      </ul>

      <!-- 支援内容＆支援要件 2カラムインフォグラフィック -->
      <div class="support-system-info">
        <!-- 支援内容 -->
        <div class="support-info-block">
          <h4 class="headline-bar">支援内容</h4>
          <ul class="support-info-list">
            <li><span class="num">1</span>給付型奨学金</li>
            <li><span class="num">2</span>授業料等の減免</li>
          </ul>
          <p class="support-info-block__note">※1と2がパッケージとして支援対象者に提供されます。</p>
        </div>

        <!-- 支援要件 -->
        <div class="support-info-block">
          <h4 class="headline-bar">支援要件</h4>
          <ul class="support-info-list">
            <li><span class="num">1</span>家計基準（世帯収入や資産等）</li>
            <li><span class="num">2</span>学力基準（学業成績や学ぶ意欲）</li>
          </ul>
          <p class="support-info-block__note">
            ※1と2の他にも要件があります。詳しくは文部科学省や（独）日本学生支援機構のホームページをご覧ください。
          </p>
        </div>
      </div>
    </div>

    <p class="support-system-section__note">
      ※給付型奨学金（候補者）の決定を受けている方には、入学手続において授業料の納入を猶予します（ただし、入学金・実験実習費・施設設備費の納入が必要となります）。
    </p>

    <!-- 申込項目 -->
    <div class="support-system-apply">
      <h3 class="headline-bar">申込</h3>
      <ol class="support-apply-list">
        <li>在籍する高等学校で、（独）日本学生支援機構の給付型奨学金の申込が必要です。</li>
        <li>平松学園へ進学した後、申し込むこともできます。</li>
      </ol>
    </div>
    

<!-- 社会人対象 教育訓練給付制度 セクション -->
    <div class="underline-header">
      <h2 class="headline2_underline-style">社会人対象 教育訓練給付制度</h2>
    </div>

    <!-- 対象校・対象者エリア -->
    <dl class="benefit-target-list">
      <div class="row">
        <dt>【対象校】</dt>
        <dd>対象校については各学校各学科にお問い合わせください</dd>
      </div>
      <div class="row">
        <dt>【対象者】</dt>
        <dd>入学日までに雇用保険の一般被保険者のうち、支給要件期間が2年以上ある人</dd>
      </div>
    </dl>

    <!-- 緑見出し ＋ 説明文 ＋ リンク -->
    <div class="benefit-lead-block">
      <h3 class="benefit-lead-block__title">国の学費支援制度をご利用できます。</h3>
      <p class="benefit-lead-block__desc">
        この制度は働く人の主体的で中長期的なキャリア形成を支援するために、一定の条件を満たした人に対して、本人が教育訓練施設（学校）に支払った金額（学費）の一部をハローワークを通して受給できるものです。
      </p>
      <p class="benefit-lead-block__link">
        教育訓練給付制度について詳細は<a href="https://www.mhlw.go.jp/stf/seisakunitsuite/bunya/koyou_roudou/jinzaikaihatsu/kyouiku.html" target="_blank" rel="noopener noreferrer">コチラ</a>
      </p>
    </div>

    <!-- 支給例図表バナーカード（枠線コンテナ ＋ 2枚目画像） -->
    <div class="benefit-chart-card">
      <div class="benefit-chart-card__img-wrap">
        <img src="/images/tuition/benefit_chart.jpg" alt="専門実践教育訓練給付金および教育訓練支援給付金の支給例。3年間で最大192万円＋基本手当日額等で最大約508万円支給" width="840" height="420" loading="lazy">
      </div>
    </div>


  <!-- 1. 日本学生支援機構奨学金 -->
  <div class="scholarship-loan-block">
    <div class="underline-header">
      <h2 class="headline2_underline-style">日本学生支援機構奨学金</h2>
    </div>
    <p class="scholarship-loan-block__catch">
      本校入学後の申請は勿論のこと、高校在学中に貸与を予約して進学することもできます。
    </p>
    <p class="scholarship-loan-block__note">
      ※詳細は、日本学生支援機構（JASSO）のホームページをご覧ください。
    </p>
    <p class="scholarship-loan-block__link">
      日本学生支援機構奨学金について詳細は<a href="https://www.jasso.go.jp/" target="_blank" rel="noopener noreferrer">コチラ</a>
    </p>
  </div>

  <!-- 2. 国の教育ローン（教育一般貸付） -->
  <div class="scholarship-loan-block">
    <div class="underline-header">
      <h2 class="headline2_underline-style">国の教育ローン（教育一般貸付）</h2>
    </div>
    <p class="scholarship-loan-block__catch">
      日本政策金融公庫による公的な融資制度です。低利子で入学生・在校生を問わずにご利用できます。
    </p>
    <p class="scholarship-loan-block__note">
      ※詳細は、日本政策金融公庫のホームページをご覧ください。
    </p>
    <p class="scholarship-loan-block__link">
      国の教育ローン（教育一般貸付）について詳細は<a href="https://www.jfc.go.jp/n/finance/search/ippan.html" target="_blank" rel="noopener noreferrer">コチラ</a>
    </p>
  </div>

  <!-- 3. その他教育ローン -->
  <div class="scholarship-loan-block">
    <div class="underline-header">
      <h2 class="headline2_underline-style">その他教育ローン</h2>
    </div>
    
    <!-- 緑色丸数字付きリスト -->
    <ul class="loan-institution-list">
      <li>
        <span class="num">1</span>
        <span class="text">株式会社オリエントコーポレーション ＝学費サポートプラン＝</span>
      </li>
      <li>
        <span class="num">2</span>
        <span class="text">大分県信用組合 ＝けんしんスペシャル 教育ローン＝</span>
      </li>
    </ul>

    <p class="scholarship-loan-block__note -indent">
      ※詳細は、大分県信用組合の下記フリーダイヤルに直接お問い合わせください。 0120-393-528 受付時間／9:00〜17:00（土日・祝日を除く）
    </p>
    <p class="scholarship-loan-block__link">
      株式会社オリエントコーポレーション学費サポートプランについて詳細は<a href="https://orico-web.jp/gakuhi/index.html?clientid=17435249&amp;do=confirm" target="_blank" rel="noopener noreferrer">コチラ</a>
    </p>
  </div>



  </div>
</section>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
