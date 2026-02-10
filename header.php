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

  <header class="header">
    <div class="l-container">
      <div class="header__inner">
        <h1 class="header__logo">
          <a href="#">SoberLife</a>
        </h1>
        <nav class="header__nav">
          <a href="#" class="header__nav-link header__nav-link--active">ホーム</a>
          <a href="#" class="header__nav-link">断酒のメリット</a>
          <a href="#" class="header__nav-link">実践テクニック</a>
          <a href="#" class="header__nav-link">体験談</a>
          <a href="#" class="header__nav-link header__nav-link--accent">禁酒用語集</a>
          <a href="#" class="header__nav-link">お問い合わせ</a>
        </nav>
        <button class="header__mobile-btn" aria-label="メニューを開く" aria-expanded="false">
          <!-- ハンバーガーアイコン -->
          <svg class="header__icon-menu" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
          <!-- 閉じるアイコン -->
          <svg class="header__icon-close" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </header>