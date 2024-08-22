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
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<?php get_footer(); ?>