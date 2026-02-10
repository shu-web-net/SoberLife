<!-- Footer -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-content">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo">
        <?php bloginfo('name'); ?>
      </a>

      <p class="footer-text">
        <?php bloginfo('description'); ?>
      </p>

      <nav class="footer-nav">
        <?php
        // フッターメニューを管理画面から制御する場合
        // wp_nav_menu(array(
        //     'theme_location' => 'footer-menu',
        //     'container'      => false,
        //     'depth'          => 1,
        // ));
        ?>
        <a href="#">プライバシーポリシー</a>
        <a href="#">運営者情報</a>
        <a href="#">免責事項</a>
        <a href="#">お問い合わせ</a>
      </nav>

      <p class="copyright">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
      </p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>