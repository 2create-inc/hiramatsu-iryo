<?php
$page_title = "資料請求";
$page_desc  = "資料請求ページです。";

include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>


<section class="section-page-mv" id="js-mv">
<div class="page-header">
  <h1><span class="en">Request</span>資料請求</h1>
  <ul class="pankuzu-list">
    <li><a href="/">HOME</a></li>
    <li>資料請求</li>
  </ul>
</div>
</section>


<section class="section-contact">
  <div class="section__inner">

    <!-- フォーム導入テキスト -->
    <div class="contact-lead">
      <p class="contact-lead__text">
        パンフレットや入試要項などをお送りいたします。<br>
        受験希望または興味のある学科で第1志望学科からご請求ください。
      </p>
    </div>

    <!-- 資料請求フォーム -->
    <form action="" method="post" class="contact-form">

      <!-- 1. 資料請求をしたい学科 (セレクトボックス) -->
      <div class="form-group">
        <label for="request-department" class="form-label">
          <span class="form-label__title">資料請求をしたい学科</span>
          <span class="form-label__badge -required">必須</span>
        </label>
        <div class="form-select-wrap">
          <select name="request_department" id="request-department" class="form-select" required>
            <option value="" disabled selected>選択してください</option>
            <option value="臨床検査学科（大分平松総合医療専門学校）">臨床検査学科（大分平松総合医療専門学校）</option>
            <option value="臨床工学科（大分平松総合医療専門学校）">臨床工学科（大分平松総合医療専門学校）</option>
            <option value="視能訓練学科（大分平松総合医療専門学校）">視能訓練学科（大分平松総合医療専門学校）</option>
            <option value="理学療法士科（大分リハビリテーション専門学校）">理学療法士科（大分リハビリテーション専門学校）</option>
            <option value="作業療法士科（大分リハビリテーション専門学校）">作業療法士科（大分リハビリテーション専門学校）</option>
            <option value="言語聴覚士科（大分リハビリテーション専門学校）">言語聴覚士科（大分リハビリテーション専門学校）</option>
            <option value="柔道整復師科（大分医学技術専門学校）">柔道整復師科（大分医学技術専門学校）</option>
            <option value="歯科衛生士科（大分歯科専門学校）">歯科衛生士科（大分歯科専門学校）</option>
          </select>
        </div>
      </div>

      <!-- 2. 氏名 -->
      <div class="form-group">
        <label for="request-name" class="form-label">
          <span class="form-label__title">氏名</span>
          <span class="form-label__badge -required">必須</span>
        </label>
        <input type="text" name="name" id="request-name" class="form-input" placeholder="例：平松 太郎" required>
      </div>

      <!-- 3. フリガナ -->
      <div class="form-group">
        <label for="request-kana" class="form-label">
          <span class="form-label__title">フリガナ</span>
          <span class="form-label__badge -required">必須</span>
        </label>
        <input type="text" name="kana" id="request-kana" class="form-input" placeholder="例：ヒラマツ タロウ" required>
      </div>

      <!-- 4. 住所 (※資料発送のため「必須」に変更) -->
      <div class="form-group">
        <label class="form-label">
          <span class="form-label__title">住所</span>
          <span class="form-label__badge -required">必須</span>
        </label>
        <div class="form-address-block">
          <div class="form-zip-wrap">
            <span class="prefix">〒</span>
            <input type="text" name="zip" id="request-zip" class="form-input -zip" placeholder="例：870-8658" autocomplete="postal-code" required>
          </div>
          <input type="text" name="address" id="request-address" class="form-input" placeholder="例：大分市千代町2丁目4番4号" autocomplete="street-address" required>
        </div>
      </div>

      <!-- 5. メールアドレス -->
      <div class="form-group">
        <label for="request-email" class="form-label">
          <span class="form-label__title">メールアドレス</span>
          <span class="form-label__badge -required">必須</span>
        </label>
        <input type="email" name="email" id="request-email" class="form-input" placeholder="例：hiramatsu@example.com" required>
      </div>

      <!-- 6. 電話番号 -->
      <div class="form-group">
        <label for="request-tel" class="form-label">
          <span class="form-label__title">電話番号</span>
          <span class="form-label__badge -required">必須</span>
        </label>
        <input type="tel" name="tel" id="request-tel" class="form-input" placeholder="例：097-535-0201" required>
      </div>

      <!-- 7. 学校名 (※「任意」項目) -->
      <div class="form-group">
        <label for="request-school" class="form-label">
          <span class="form-label__title">学校名</span>
          <span class="form-label__badge -optional">任意</span>
        </label>
        <input type="text" name="school" id="request-school" class="form-input" placeholder="例：◯◯高校">
      </div>

      <!-- 8. 学年 (※「任意」項目) -->
      <div class="form-group">
        <label for="request-grade" class="form-label">
          <span class="form-label__title">学年</span>
          <span class="form-label__badge -optional">任意</span>
        </label>
        <input type="text" name="grade" id="request-grade" class="form-input" placeholder="例：高校◯年生">
      </div>

      <!-- 同意チェックボックス ＋ 送信ボタンエリア -->
      <div class="form-submit-block">
        <p class="form-privacy-note">
          本校の<a href="/privacy/" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a>を参照し、内容に同意のうえ、お問い合わせください。
        </p>

        <div class="form-agree-wrap">
          <label class="form-checkbox-label">
            <input type="checkbox" name="agree" id="request-agree" class="form-checkbox" required>
            <span class="checkmark"></span>
            <span class="text">同意する</span>
          </label>
        </div>

        <!-- 送信ボタン（ラッパー構造） -->
        <div class="contact-submit-btn-wrap">
          <input type="submit" class="contact-submit-btn" value="送信する">
        </div>
      </div>

    </form>

  </div>
</section>




<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
