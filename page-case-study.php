<?php
/*
Template Name: 導入事例
*/

get_header();
?>
<div class="container">
  <div class="container__inner inner">
    <div class="case__tabs">
      <ul class="case__tabs-list">
        <?php $terms = get_terms('junre');
        foreach ($terms as $term) : ?>
          <li class="case__tab">
            <a href="#<?php echo $term->slug; ?>" class="case__tab-link"><?php echo $term->name; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="case__container">
      <?php
      foreach ($terms as $term) :
        include('template-parts/content-case-study.php');
      endforeach; ?>

    </div>
  </div>
</div>
<?php get_footer(); ?>