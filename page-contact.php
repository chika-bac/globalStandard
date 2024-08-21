<?php
/*
Template Name: お問い合わせ
*/
get_header();
?>
<div class="container">
  <div class="container__inner inner">
    <section class="contact">
      <div class="contact__inner">
        <p class="contact__msg">
          研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。
          2日以内に担当者からメールにてご連絡いたします。
        </p>
        <h3 class="contact__heading">お問い合わせ</h3>
        <div class="contact__content">
          <form action="" id="js-form" class="contact__form">
            <div class="contact__fields">
              <!-- contact__field -->
              <div class="contact__field">
                <!-- company -->
                <div class="form-field">
                  <div class="form-field__head">
                    <label for="your-company" class="form-field__label">会社名</label>
                  </div>
                  <div class="form-field__item">
                    <input type="text" name="your-company" id="your-company" class="form-text js-input" placeholder="例）○○株式会社" />
                  </div>
                </div>
                <!-- name -->
                <div class="form-field">
                  <div class="form-field__head">
                    <label for="your-name" class="form-field__label">お名前</label>
                    <span class="form-field__tag">必須</span>
                  </div>
                  <div class="form-field__item">
                    <input type="text" name="your-name" id="your-name" class="form-text js-input" placeholder="例）鈴木　一郎" required />
                  </div>
                </div>
                <!-- kana -->
                <div class="form-field">
                  <div class="form-field__head">
                    <label for="your-kana" class="form-field__label">お名前（フリガナ）</label>
                    <span class="form-field__tag">必須</span>
                  </div>
                  <div class="form-field__item">
                    <input type="text" name="your-kana" id="your-kana" class="form-text js-input" placeholder="例）スズキ　イチロウ" required />
                  </div>
                </div>
                <!-- tel -->
                <div class="form-field">
                  <div class="form-field__head">
                    <label for="your-tel" class="form-field__label">電話番号</label>
                    <span class="form-field__tag">必須</span>
                  </div>
                  <div class="form-field__item">
                    <input type="tel" name="your-tel" id="your-tel" class="form-text js-input" placeholder="例）0312345678" required />
                  </div>
                </div>
                <!-- email -->
                <div class="form-field">
                  <div class="form-field__head">
                    <label for="your-email" class="form-field__label">メールアドレス</label>
                    <span class="form-field__tag">必須</span>
                  </div>
                  <div class="form-field__item">
                    <input type="email" name="your-email" id="your-email" class="form-text js-input" placeholder="例）info@example.comm" required />
                  </div>
                </div>

                <!-- select content -->
                <div class="form-field">
                  <div class="form-field__head">
                    <label for="your-content" class="form-field__label">ご用件</label>
                    <span class="form-field__tag">必須</span>
                  </div>
                  <div class="form-field__item">
                    <div class="form-select">
                      <select name="your-content" id="your-content" required class="js-input">
                        <option value="" hidden>ご選択ください</option>
                        <option value="1">選択項目1</option>
                        <option value="2">選択項目2</option>
                        <option value="3">選択項目3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- message -->
                <div class="form-field form-field-message">
                  <div class="form-field__head">
                    <label for="your-content" class="form-field__label">ご用件の詳細</label>
                    <span class="form-field__tag">必須</span>
                  </div>
                  <div class="form-field__item">
                    <textarea name="your-message" id="your-message" class="form-textarea js-input" placeholder="ご自由にご記入ください。" aria-label="メッセージ記入欄" required></textarea>
                  </div>
                </div>
              </div>
              <!-- end contact__field -->

              <!-- privacy -->
              <div class="contact__privacy">
                <label class="form-checkbox">
                  <input type="checkbox" name="form-checkbox" id="form-checkbox" class="form-checkbox__input" required />
                  <span class="form-checkbox__text"><a href="" target="_blank" class="">個人情報保護方針</a>に同意します。</span>
                </label>
              </div>
              <!-- end privacy -->

              <!-- submit btn -->
              <div class="contact__button">
                <input type="submit" value="送信" class="button button--secondary button-submit" aria-label="送信ボタン" />
              </div>
              <!-- end submit btn -->
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</div>

<?php get_footer(); ?>