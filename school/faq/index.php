<?php
$page_title = "よくある質問";
$page_desc  = "よくある質問一覧ページです。";

include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>


<section class="section-page-mv" id="js-mv">
  <div class="page-header">
    <h1><span class="en">Q&A</span>よくある質問</h1>
    <ul class="pankuzu-list">
      <li><a href="/">HOME</a></li>
      <li><a href="/school/">学校紹介</a></li>
      <li>よくある質問</li>
    </ul>
  </div>
  <div class="page-mv"><img src="/images/faq/mv.jpg"></div>
</section>



<section class="section-faq reveal">
  <div class="section__inner">
    <h2 class="headline2">みんなが不安に思っていること、疑問に思っていること、<span class="is-desktop-block">Q&Aをご紹介します。</span></h2>


    <div class="facilities-grid">
      <!-- 1. 入試・出願について -->
      <a href="#faq-cat01" class="facilities-card">
        <div class="facilities-card__text">
          <h3 class="facilities-card__name">入試・出願について</h3>
        </div>
        <span class="facilities-card__arrow"></span>
      </a>

      <!-- 2. 学費・奨学金について -->
      <a href="#faq-cat02" class="facilities-card">
        <div class="facilities-card__text">
          <h3 class="facilities-card__name">学費・奨学金について</h3>
        </div>
        <span class="facilities-card__arrow"></span>
      </a>

      <!-- 3. 授業・勉強内容について -->
      <a href="#faq-cat04" class="facilities-card">
        <div class="facilities-card__text">
          <h3 class="facilities-card__name">授業・勉強内容について</h3>
        </div>
        <span class="facilities-card__arrow"></span>
      </a>

      <!-- 4. 学校生活について -->
      <a href="#faq-cat04" class="facilities-card">
        <div class="facilities-card__text">
          <h3 class="facilities-card__name">学校生活について</h3>
        </div>
        <span class="facilities-card__arrow"></span>
      </a>

      <!-- 5. 実習・資格について -->
      <!-- <a href="#faq-cat05" class="facilities-card">
        <div class="facilities-card__text">
          <h3 class="facilities-card__name">実習・資格について</h3>
        </div>
        <span class="facilities-card__arrow"></span>
      </a> -->

      <!-- 6. 就職について -->
      <a href="#faq-cat06" class="facilities-card ">

        <div class="facilities-card__text">
          <h3 class="facilities-card__name">就職について</h3>
        </div>
        <span class="facilities-card__arrow"></span>
      </a>

      <!-- 7. 通学・生活について -->
      <a href="#faq-cat07" class="facilities-card">

        <div class="facilities-card__text">
          <h3 class="facilities-card__name">通学・生活について</h3>
        </div>
        <span class="facilities-card__arrow"></span>
      </a>

    </div>


    <div class="underline-header" id="faq-cat01">
      <h2 class="headline2_underline-style">入試・出願</h2>
    </div>

    <div class="faq-list">
      <div class="faq-item js-faq-item">
        <dt class="faq-item__question js-faq-trigger">
          <span class="faq-item__q-icon">Q</span>
          <span class="faq-item__q-text">面接では、具体的にどのような志望動機が評価されますか？</span>
          <span class="faq-item__toggle-icon"></span>
        </dt>
        <dd class="faq-item__answer js-faq-answer">
          <div class="faq-item__answer-inner">
            <span class="faq-item__a-icon">A</span>
            <div class="faq-item__a-text">
              <p>主に次の3点を大切にしています。①その職種を目指したきっかけ、②数ある養成校の中から本校を選んだ理由、③ご自身の強みを将来の仕事にどう生かしたいか。上手に話すことよりも、ご自身の経験に基づいた具体的な言葉で伝えることが大切です。オープンキャンパスで授業や在校生に触れることも、志望動機を深める良い機会になります。</p>
            </div>
          </div>
        </dd>
      </div>

      <div class="faq-item js-faq-item">
        <dt class="faq-item__question js-faq-trigger">
          <span class="faq-item__q-icon">Q</span>
          <span class="faq-item__q-text">複数の入試が行われますが、違いは何ですか？</span>
          <span class="faq-item__toggle-icon"></span>
        </dt>
        <dd class="faq-item__answer js-faq-answer">
          <div class="faq-item__answer-inner">
            <span class="faq-item__a-icon">A</span>
            <div class="faq-item__a-text">
              <p>指定校推薦入試、一般推薦入試・文化スポーツ推薦入試、自己推薦入試・社会人入試（1〜3期）、一般入試（1〜3期）を実施しています。すべての入試で小論文（60分・800字）と面接を行い、一般推薦入試・一般入試では学科試験（英語・数学・国語から1科目選択）が加わります（歯科衛生士科は学科試験なし）。また、入試区分によって利用できる学費サポート制度が異なります。</p>
            </div>
          </div>
        </dd>
      </div>

      <div class="faq-item js-faq-item">
        <dt class="faq-item__question js-faq-trigger">
          <span class="faq-item__q-icon">Q</span>
          <span class="faq-item__q-text">どのようなことを高校時代に勉強していたら良いですか？</span>
          <span class="faq-item__toggle-icon"></span>
        </dt>
        <dd class="faq-item__answer js-faq-answer">
          <div class="faq-item__answer-inner">
            <span class="faq-item__a-icon">A</span>
            <div class="faq-item__a-text">
              <p>生物・化学の基礎は、入学後の解剖学・生理学などの理解に役立ちます。また、基本的な計算力や英語、文章の読解・記述力、論理的に考える力は、専門書の読解やレポート作成、国家試験対策の土台になります。さらに、高校までに学んだ知識は、就職試験の一般常識問題でも生かされます。医療職は人と関わる仕事のため、コミュニケーション能力も大切です。あわせて、日頃から体調管理を心がけ、出席を大切にする習慣を身につけておきましょう。</p>
            </div>
          </div>
        </dd>
      </div>
    </div>



    <div class="underline-header" id="faq-cat02">
      <h2 class="headline2_underline-style">学費・奨学金</h2>
    </div>

    <div class="faq-list">
      <div class="faq-item js-faq-item">
        <dt class="faq-item__question js-faq-trigger">
          <span class="faq-item__q-icon">Q</span>
          <span class="faq-item__q-text">学費以外に、教科書代や実習費で毎年いくらかかる追加でかかりますか？</span>
          <span class="faq-item__toggle-icon"></span>
        </dt>
        <dd class="faq-item__answer js-faq-answer">
          <div class="faq-item__answer-inner">
            <span class="faq-item__a-icon">A</span>
            <div class="faq-item__a-text">
              <p>学納金（授業料・実験実習費・施設設備費）以外に、初年度は実習着や実習器材などの費用が必要です。前年度実績では、大分平松総合医療専門学校・大分医学技術専門学校は約15万円、大分リハビリテーション専門学校・大分歯科専門学校は約25万円です。教科書代は学年・学期により異なります。また、3年次には国家試験の受験手数料（職種により約1万〜3.8万円）が必要です。詳しくは各校・各学科へお気軽にお問い合わせください。</p>
            </div>
          </div>
        </dd>
      </div>

      <div class="faq-item js-faq-item">
        <dt class="faq-item__question js-faq-trigger">
          <span class="faq-item__q-icon">Q</span>
          <span class="faq-item__q-text">独自の特待生制度（学費免除など）について、条件や内容を詳しく知りたいです。</span>
          <span class="faq-item__toggle-icon"></span>
        </dt>
        <dd class="faq-item__answer js-faq-answer">
          <div class="faq-item__answer-inner">
            <span class="faq-item__a-icon">A</span>
            <div class="faq-item__a-text">
              <p>平松学園では、独自の学費サポート制度を5種類設けています（平松特待生制度、部活生等減免制度、医療資格特待生制度、家族入学減免制度、県外入学減免制度）。さらに、各校とも高等教育の修学支援新制度の認定校であり、要件を満たせば給付型奨学金や授業料等の減免を受けられます。日本学生支援機構の奨学金（高校在学中の予約採用も可）、国の教育ローン、提携教育ローンもご利用いただけます。各制度の内容・条件は【学費サポート制度のページへのリンク】をご覧ください。制度ごとに併用条件があり、入学願書受理後の申請はできませんので、出願前にご相談ください。</p>
            </div>
          </div>
        </dd>
      </div>
    </div>




    <div class="underline-header" id="faq-cat03">
      <h2 class="headline2_underline-style">授業・勉強内容</h2>
    </div>

    <div class="faq-list">
      <!-- FAQ 1：高校の授業との違い -->
      <div class="faq-item js-faq-item">
        <dt class="faq-item__question js-faq-trigger">
          <span class="faq-item__q-icon">Q</span>
          <span class="faq-item__q-text">高校の授業との違いは何ですか？</span>
          <span class="faq-item__toggle-icon"></span>
        </dt>
        <dd class="faq-item__answer js-faq-answer">
          <div class="faq-item__answer-inner">
            <span class="faq-item__a-icon">A</span>
            <div class="faq-item__a-text">
              <p>講義は1回90分で、専門用語を用いた医学の基礎科目から学び始めます。学年が上がるにつれて実技科目や臨床実習が増え、より実践的な内容になります。成績や出席日数をもとに進級判定会議で進級が決まるため、日々の積み重ねが大切です。なお、時間割や1日の時限数は学科により異なります。</p>
            </div>
          </div>
        </dd>
      </div>

      <!-- FAQ 2：文系・理科科目への不安 -->
      <div class="faq-item js-faq-item">
        <dt class="faq-item__question js-faq-trigger">
          <span class="faq-item__q-icon">Q</span>
          <span class="faq-item__q-text">文系で生物や物理が苦手でも、入学後の授業についていけますか？</span>
          <span class="faq-item__toggle-icon"></span>
        </dt>
        <dd class="faq-item__answer js-faq-answer">
          <div class="faq-item__answer-inner">
            <span class="faq-item__a-icon">A</span>
            <div class="faq-item__a-text">
              <p>入学後は医学の基礎科目から全員が同時にスタートするため、これまでの得意・不得意以上に、入学後の努力が結果につながりやすいです。学科により理科の比重は異なりますが、これまで多くの先輩が、科目の得意・不得意に関係なく定期試験や国家試験をクリアしています。学科によっては個別指導も行っています。</p>
            </div>
          </div>
        </dd>
      </div>

      <!-- FAQ 3：実業系高校からの進学 -->
      <div class="faq-item js-faq-item">
        <dt class="faq-item__question js-faq-trigger">
          <span class="faq-item__q-icon">Q</span>
          <span class="faq-item__q-text">実業系の高校に所属していますが、勉強についていけますか？</span>
          <span class="faq-item__toggle-icon"></span>
        </dt>
        <dd class="faq-item__answer js-faq-answer">
          <div class="faq-item__answer-inner">
            <span class="faq-item__a-icon">A</span>
            <div class="faq-item__a-text">
              <p>商業科や工業科など、実業系高校出身の在校生・卒業生も一定数在籍しています。全員が同じスタートラインから学ぶため、入学後の努力が結果につながりやすいのが特徴です。また、高校での資格取得の経験は、各学科の国家試験対策でも大いに生かされます。</p>
            </div>
          </div>
        </dd>
      </div>
    </div>






    <div class="underline-header" id="faq-cat04">
      <h2 class="headline2_underline-style">学校生活</h2>
    </div>

    <div class="faq-list">
      <!-- FAQ 1：クラスの雰囲気 -->
      <div class="faq-item js-faq-item">
        <dt class="faq-item__question js-faq-trigger">
          <span class="faq-item__q-icon">Q</span>
          <span class="faq-item__q-text">クラスの雰囲気はどうですか？（年齢層や男女比、仲の良さなど）</span>
          <span class="faq-item__toggle-icon"></span>
        </dt>
        <dd class="faq-item__answer js-faq-answer">
          <div class="faq-item__answer-inner">
            <span class="faq-item__a-icon">A</span>
            <div class="faq-item__a-text">
              <p>現役の高校卒業生が中心ですが、社会人経験のある入学生も在籍しています。男女比は学科により異なります（例：歯科衛生士科は女性が中心、柔道整復師科は男性が多め）。同じ国家資格を目指す仲間が集まるため、講義や行事を通じて、共に国家試験に向かう仲間として自然とまとまっていきます。</p>
            </div>
          </div>
        </dd>
      </div>

      <!-- FAQ 2：昼食・周辺環境 -->
      <div class="faq-item js-faq-item">
        <dt class="faq-item__question js-faq-trigger">
          <span class="faq-item__q-icon">Q</span>
          <span class="faq-item__q-text">昼食はどうしていますか？周辺にコンビニや飲食店はありますか？</span>
          <span class="faq-item__toggle-icon"></span>
        </dt>
        <dd class="faq-item__answer js-faq-answer">
          <div class="faq-item__answer-inner">
            <span class="faq-item__a-icon">A</span>
            <div class="faq-item__a-text">
              <p>昼休みは1時間程度です。お弁当を持参しなくても、学校の近くにある大型スーパーやコンビニで購入できます。学校によっては購買も備えています。</p>
            </div>
          </div>
        </dd>
      </div>

      <!-- FAQ 3：友達づくり・学校の雰囲気 -->
      <div class="faq-item js-faq-item">
        <dt class="faq-item__question js-faq-trigger">
          <span class="faq-item__q-icon">Q</span>
          <span class="faq-item__q-text">友達ができるか不安ですが、学校の雰囲気はどんな感じですか？</span>
          <span class="faq-item__toggle-icon"></span>
        </dt>
        <dd class="faq-item__answer js-faq-answer">
          <div class="faq-item__answer-inner">
            <span class="faq-item__a-icon">A</span>
            <div class="faq-item__a-text">
              <p>同じ目標を持つ仲間がクラスメートになるため、勉強や行事を通して自然と関係が深まります。入学後のオリエンテーションや学科によっては宿泊研修があり、グループワークの時間を多く取り入れています。学園祭や体育祭は全学科で行い、また複数学科で取り組むIPE（多職種連携教育）など、学科の枠を越えた交流の機会もあります。</p>
            </div>
          </div>
        </dd>
      </div>
    </div>



    <div class="underline-header" id="faq-cat05">
      <h2 class="headline2_underline-style">就職</h2>
    </div>

    <div class="faq-list">
      <!-- FAQ 1：地元（大分県内）での就職サポート -->
      <div class="faq-item js-faq-item">
        <dt class="faq-item__question js-faq-trigger">
          <span class="faq-item__q-icon">Q</span>
          <span class="faq-item__q-text">地元（大分県内）での就職を強く希望していますが、どのような就職指導やサポートがありますか？</span>
          <span class="faq-item__toggle-icon"></span>
        </dt>
        <dd class="faq-item__answer js-faq-answer">
          <div class="faq-item__answer-inner">
            <span class="faq-item__a-icon">A</span>
            <div class="faq-item__a-text">
              <p>大分県内はもとより全国から求人が寄せられており、多くの学生が希望する地域・施設に就職しています。2年次の終わりから志望調査と就職面談を行い、一人ひとりの希望や適性をふまえて職場選びをアドバイスします。履歴書の書き方指導や模擬面接、施設訪問・見学など実践的な支援に加え、開校以来蓄積してきた卒業生の就職情報データと、全国で活躍する卒業生のネットワークを生かして、希望地域への就職を後押しします。また、開業セミナー（大分医学技術専門学校）や地域の歯科医師会との連携（大分歯科専門学校）など、学校ごとの独自サポートもあります。学科によっては、卒業予定者1人あたり数十件を超える求人が寄せられています。</p>
            </div>
          </div>
        </dd>
      </div>

      <!-- FAQ 2：国家資格と就職・転職の優位性 -->
      <div class="faq-item js-faq-item">
        <dt class="faq-item__question js-faq-trigger">
          <span class="faq-item__q-icon">Q</span>
          <span class="faq-item__q-text">国家資格を取得すると、就職や転職でも優位に働きますか？</span>
          <span class="faq-item__toggle-icon"></span>
        </dt>
        <dd class="faq-item__answer js-faq-answer">
          <div class="faq-item__answer-inner">
            <span class="faq-item__a-icon">A</span>
            <div class="faq-item__a-text">
              <p>国家資格は一生有効で、景気に左右されにくいことが大きな魅力です。全国どこでも通用するため、結婚・出産・転居などのライフイベントの後も復職しやすく、長く働き続けることができます。</p>
            </div>
          </div>
        </dd>
      </div>
    </div>



    <div class="underline-header" id="faq-cat07">
      <h2 class="headline2_underline-style">通学・生活</h2>
    </div>

    <div class="faq-list">
      <!-- FAQ 1：自転車・バイク通学と駐輪場 -->
      <div class="faq-item js-faq-item">
        <dt class="faq-item__question js-faq-trigger">
          <span class="faq-item__q-icon">Q</span>
          <span class="faq-item__q-text">自転車やバイクでの通学はできますか？また、駐輪場は利用できますか？</span>
          <span class="faq-item__toggle-icon"></span>
        </dt>
        <dd class="faq-item__answer js-faq-answer">
          <div class="faq-item__answer-inner">
            <span class="faq-item__a-icon">A</span>
            <div class="faq-item__a-text">
              <p>自転車は届出をすれば通学に利用できます（排気量125ccまでの原付バイクも利用できます）。学校指定の無料駐輪場があります。自動車での通学も可能ですが、学校の駐車場はないため、コインパーキングなどを各自でご利用ください。</p>
            </div>
          </div>
        </dd>
      </div>

      <!-- FAQ 2：大分駅からのアクセス・坂道の有無 -->
      <div class="faq-item js-faq-item">
        <dt class="faq-item__question js-faq-trigger">
          <span class="faq-item__q-icon">Q</span>
          <span class="faq-item__q-text">大分駅からの実際の徒歩時間や、坂道の有無を知りたいです。</span>
          <span class="faq-item__toggle-icon"></span>
        </dt>
        <dd class="faq-item__answer js-faq-answer">
          <div class="faq-item__answer-inner">
            <span class="faq-item__a-icon">A</span>
            <div class="faq-item__a-text">
              <p>大分駅から徒歩15分程度で、平坦な道のりのため歩きやすいルートです。各校舎は近接しており、学校による所要時間の差は5分程度です。</p>
            </div>
          </div>
        </dd>
      </div>

      <!-- FAQ 3：学校・学科の行事 -->
      <div class="faq-item js-faq-item">
        <dt class="faq-item__question js-faq-trigger">
          <span class="faq-item__q-icon">Q</span>
          <span class="faq-item__q-text">勉強以外で、どのような学校や学科の行事がありますか？</span>
          <span class="faq-item__toggle-icon"></span>
        </dt>
        <dd class="faq-item__answer js-faq-answer">
          <div class="faq-item__answer-inner">
            <span class="faq-item__a-icon">A</span>
            <div class="faq-item__a-text">
              <p>学園祭や体育祭（学科合同）、学科交流会、研修旅行、宿泊研修などがあります。学科の枠を越えて交流できる行事もあり、学生生活を彩る機会となっています。</p>
            </div>
          </div>
        </dd>
      </div>
    </div>


  </div>
</section>




<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>