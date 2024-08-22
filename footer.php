<footer class="footer">
  <div class="footer__inner">
    <div class="footer__top">
      <div class="footer__download">
        <p class="footer__title">
          <span class="footer__title-en">Download</span>
          <span class="footer__title-ja">資料ダウンロード</span>
        </p>
        <div class="footer__button">
          <a href="<?php echo home_url("download"); ?>" class="button button--more">View more</a>
        </div>
      </div>
      <div class="footer__contact">
        <p class="footer__title">
          <span class="footer__title-en">contact</span>
          <span class="footer__title-ja">お問い合わせ</span>
        </p>
        <div class="footer__button">
          <a href="<?php echo home_url("contact"); ?>" class="button button--more">View more</a>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <p class="footer__logo">Global Standard</p>
      <ul class="footer__info">
        <li class="footer__info-item">〒550-1000　大阪市西区土佐堀9-5-5</li>
        <li class="footer__info-item">TEL　06-123-4567</li>
        <li class="footer__info-item">FAX　06-123-4568</li>
      </ul>
      <small class="footer__copy">&copy;2021 Global Standard. All Rights Reserved.</small>
    </div>
  </div>
</footer>

<!-- go to top -->
<div class="floating">
  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-top.svg" alt=""></a>
</div>
<?php wp_footer(); ?>
</body>

</html>