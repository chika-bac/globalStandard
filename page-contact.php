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
          <?php the_content(); ?>
        </div>
      </div>
    </section>
  </div>
</div>

<?php get_footer(); ?>