<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- Header -->
  <header class="site-header sticky top-0 z-50 glass-effect shadow-sm">
    <div class="container flex justify-between items-center py-4">
      <h1 class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      </h1>

      <nav class="nav-menu hidden md:flex">
        <?php
        // WordPressのカスタムメニューを表示する場合
        // wp_nav_menu(array(
        //     'theme_location' => 'main-menu',
        //     'container'      => false,
        //     'menu_class'     => 'nav-list', // Sassで定義したクラスに合わせて調整
        // ));
        ?>
        <!-- 以下、プロトタイプの静的構造 -->
        <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
        <a href="#">断酒のメリット</a>
        <a href="#">実践テクニック</a>
        <a href="#">体験談</a>
        <a href="#" class="text-primary">禁酒用語集</a>
        <a href="#">お問い合わせ</a>
      </nav>

      <button class="mobile-menu-btn md:hidden" aria-label="メニューを開く">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
      </button>
    </div>
  </header>