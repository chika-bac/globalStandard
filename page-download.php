<?php
/*
Template Name: ダウンロード
*/
get_header();
?>
<div class="container">
  <div class="container__inner inner">
    <section class="download">
      <div class="download__inner">
        <div class="download__left">
          <h3 class="download__msg">世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。</h3>
          <div class="download__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/download-pamphlet.png" alt="">
          </div>
          <div class="download__desc">
            <p>急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。<br>ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、世界レベルでの人脈を構築する研修をご用意しております。</p>
            <p>英語に苦手意識のある方でもご安心ください。<br>ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。<br>まずはこちらの資料をごらんください。</p>
          </div>
        </div>
        <div class="download__right download-form">
          <div class="download-form__inner">
            <h3 class="download-form__heading">資料ダウンロード</h3>
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
                    <!-- department -->
                    <div class="form-field">
                      <div class="form-field__head">
                        <label for="your-department" class="form-field__label">部署</label>
                      </div>
                      <div class="form-field__item">
                        <input type="text" name="your-department" id="your-department" class="form-text js-input" placeholder="例）人事部" />
                      </div>
                    </div>
                    <!-- name -->
                    <div class="form-field">
                      <div class="form-field__head form-field__head--download">
                        <label for="your-name" class="form-field__label">お名前</label>
                        <span class="form-field__tag">必須</span>
                      </div>
                      <div class="form-field__item">
                        <input type="text" name="your-name" id="your-name" class="form-text js-input" placeholder="例）鈴木　一郎" required />
                      </div>
                    </div>
                    <!-- kana -->
                    <div class="form-field">
                      <div class="form-field__head form-field__head--download">
                        <label for="your-kana" class="form-field__label">お名前（フリガナ）</label>
                        <span class="form-field__tag">必須</span>
                      </div>
                      <div class="form-field__item">
                        <input type="text" name="your-kana" id="your-kana" class="form-text js-input" placeholder="例）スズキ　イチロウ" required />
                      </div>
                    </div>
                    <!-- email -->
                    <div class="form-field">
                      <div class="form-field__head form-field__head--download">
                        <label for="your-email" class="form-field__label">メールアドレス</label>
                        <span class="form-field__tag">必須</span>
                      </div>
                      <div class="form-field__item">
                        <input type="email" name="your-email" id="your-email" class="form-text js-input" placeholder="例）info@example.comm" required />
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
                    <input type="submit" value="資料をダウンロードする" class="button button--secondary button-submit button-submit--download" aria-label="送信ボタン" />
                  </div>
                  <!-- end submit btn -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<?php get_footer(); ?>