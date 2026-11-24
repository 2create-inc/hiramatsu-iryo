<?php
$page_title = "お問い合わせ";
$page_desc  = "お問い合わせページです。";

include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>


<section class="section-page-mv" id="js-mv">
<div class="page-header">
  <h1><span class="en">Contact</span>お問い合わせ</h1>
  <ul class="pankuzu-list">
    <li><a href="/">HOME</a></li>
    <li>お問い合わせ</li>
  </ul>
</div>
</section>


<section class="section-contact">
  <div class="section__inner">

    <!-- フォーム導入テキスト -->
    <div class="contact-lead">
      <p class="contact-lead__text">
        ご質問やご相談など、お気軽にお問い合わせください。<br>
        「必須」マークのある項目は必ずご入力いただきますようお願いいたします。
      </p>
    </div>

    <!-- お問い合わせフォーム -->
    <form action="" method="post" class="contact-form">

      <!-- 1. お問い合わせ先 (セレクトボックス) -->
      <div class="form-group">
        <label for="contact-target" class="form-label">
          <span class="form-label__title">お問い合わせ先</span>
          <span class="form-label__badge -required">必須</span>
        </label>
        <div class="form-select-wrap">
          <select name="contact_target" id="contact-target" class="form-select" required>
            <option value="" disabled selected>選択してください</option>
            <option value="臨床検査学科（大分平松総合医療専門学校）">臨床検査学科（大分平松総合医療専門学校）</option>
            <option value="臨床工学科（大分平松総合医療専門学校）">臨床工学科（大分平松総合医療専門学校）</option>
            <option value="視能訓練学科（大分平松総合医療専門学校）">視能訓練学科（大分平松総合医療専門学校）</option>
            <option value="理学療法士科（大分リハビリテーション専門学校）">理学療法士科（大分リハビリテーション専門学校）</option>
            <option value="作業療法士科（大分リハビリテーション専門学校）">作業療法士科（大分リハビリテーション専門学校）</option>
            <option value="言語聴覚士科（大分リハビリテーション専門学校）">言語聴覚士科（大分リハビリテーション専門学校）</option>
            <option value="柔道整復師科（大分医学技術専門学校）">柔道整復師科（大分医学技術専門学校）</option>
            <option value="歯科衛生士科（大分歯科専門学校）">歯科衛生士科（大分歯科専門学校）</option>
            <option value="大分臨床検査技師専門学校">大分臨床検査技師専門学校</option>
            <option value="大分臨床工学技士専門学校">大分臨床工学技士専門学校</option>
            <option value="大分医学技術専門学校 鍼灸師科">大分医学技術専門学校 鍼灸師科</option>
            <option value="大分看護福祉専門学校">大分看護福祉専門学校</option>
            <option value="大分スクールオブビジネス">大分スクールオブビジネス</option>
          </select>
        </div>
      </div>

      <!-- 2. 氏名 -->
      <div class="form-group">
        <label for="contact-name" class="form-label">
          <span class="form-label__title">氏名</span>
          <span class="form-label__badge -required">必須</span>
        </label>
        <input type="text" name="name" id="contact-name" class="form-input" placeholder="例：平松 太郎" required>
      </div>

      <!-- 3. フリガナ -->
      <div class="form-group">
        <label for="contact-kana" class="form-label">
          <span class="form-label__title">フリガナ</span>
          <span class="form-label__badge -required">必須</span>
        </label>
        <input type="text" name="kana" id="contact-kana" class="form-input" placeholder="例：ヒラマツ タロウ" required>
      </div>

      <!-- 4. 住所 (郵便番号 ＋ 住所) -->
      <div class="form-group">
        <label class="form-label">
          <span class="form-label__title">住所</span>
          <span class="form-label__badge -optional">任意</span>
        </label>
        <div class="form-address-block">
          <div class="form-zip-wrap">
            <span class="prefix">〒</span>
            <input type="text" name="zip" id="contact-zip" class="form-input -zip" placeholder="例：870-8658" autocomplete="postal-code">
          </div>
          <input type="text" name="address" id="contact-address" class="form-input" placeholder="例：大分市千代町2丁目4番4号" autocomplete="street-address">
        </div>
      </div>

      <!-- 5. メールアドレス -->
      <div class="form-group">
        <label for="contact-email" class="form-label">
          <span class="form-label__title">メールアドレス</span>
          <span class="form-label__badge -required">必須</span>
        </label>
        <input type="email" name="email" id="contact-email" class="form-input" placeholder="例：hiramatsu@example.com" required>
      </div>

      <!-- 6. 電話番号 -->
      <div class="form-group">
        <label for="contact-tel" class="form-label">
          <span class="form-label__title">電話番号</span>
          <span class="form-label__badge -required">必須</span>
        </label>
        <input type="tel" name="tel" id="contact-tel" class="form-input" placeholder="例：097-535-0201" required>
      </div>

      <!-- 7. 最終学歴 -->
      <div class="form-group">
        <label for="contact-education" class="form-label">
          <span class="form-label__title">最終学歴</span>
          <span class="form-label__badge -required">必須</span>
        </label>
        <input type="text" name="education" id="contact-education" class="form-input" placeholder="例：" required>
      </div>

      <!-- 8. お問い合わせ内容 -->
      <div class="form-group">
        <label for="contact-message" class="form-label">
          <span class="form-label__title">お問い合わせ内容</span>
          <span class="form-label__badge -required">必須</span>
        </label>
        <textarea name="message" id="contact-message" class="form-textarea" placeholder="お問い合わせ内容をご入力ください。" rows="6" required></textarea>
      </div>

      <!-- 同意チェックボックス ＋ 送信ボタンエリア -->
      <div class="form-submit-block">
        <p class="form-privacy-note">
          本校の<a href="/privacy/" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a>を参照し、内容に同意のうえ、お問い合わせください。
        </p>

        <div class="form-agree-wrap">
          <label class="form-checkbox-label">
            <input type="checkbox" name="agree" id="contact-agree" class="form-checkbox" required>
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
