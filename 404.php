<?php
/*
Template Name: 404 Not Found
*/
?>


<!-- header.phpのHTMLなどを読み込む -->
<?php get_header(); ?>

<main class="error-404-page">
  <div class="">
    <div class="l-inner">
      <p class="error-404-page-text">お探しのページは見つかりませんでした。<br />URLが間違っているか、<br class="u-pc-hide"/>ページが削除された可能性があります。</p>
      <span class="back-to-home-404"><a href="<?php echo home_url(); ?>" class="back-to-home-404-link">ホームへ戻るにはこちら</a></span>
    </div>
  </div>

</main>
<!-- footer.phpのHTMLなどを読み込む -->
<?php get_footer(); ?>