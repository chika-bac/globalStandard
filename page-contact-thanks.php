<?php
/*
Template Name: お問い合わせ完了
*/
get_header();
?>
<div class="container">
  <div class="container__inner inner">
    <div class="contact">
      <div class="contact__inner">
        <p class="contact__thanks-msg">
          お問い合わせありがとうございました。<br>2日以内に担当者からメールにてご連絡いたしますので、しばらくお待ちいただけますと幸いです。
        </p>
        <p class="contact__top">→<a href="<?php echo home_url("/"); ?>">トップへ戻る</a></p>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>