<!-- header.phpのHTMLなどを読み込む -->
<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <div class="hero-content">
      <span class="badge">NEW LIFE START</span>
      <h2>お酒のない、<br><span>もっと自由な毎日へ。</span></h2>
      <p class="hero-text">
        断酒は何かを失うことではなく、本来の自分と健康、そして時間を取り戻すプロセスです。今日から、新しい自分を始めませんか？
      </p>
      <div class="hero-actions">
        <a href="#" class="btn btn-primary">記事を読む</a>
        <a href="#" class="btn btn-secondary">初めての方へ</a>
      </div>
    </div>
  </div>
  <div class="decor-circle"></div>
</section>

<main class="container">
  <div class="main-layout">

    <!-- Main Content Area -->
    <div class="content-area">
      <h3 class="section-title">最新の記事</h3>

      <div class="post-grid">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="post-card">
              <div class="post-thumb">
                <span class="category-tag">健康・メリット</span>
              </div>
              <div class="post-body">
                <time>2023.10.27</time>
                <h4><?php the_title(); ?></h4>
                <p class="post-excerpt"><?php the_excerpt(); ?></p>
              </div>
            </article>
        <?php endwhile;
        endif; ?>


      </div>

      <div class="content-area__btn">
        <button class="btn btn-outline">もっと見る</button>
      </div>
    </div>

    <!-- Sidebar Area -->
    <aside class="sidebar">

      <!-- Counter -->
      <div class="widget counter-widget">
        <h5 class="counter-label">Sober Timer</h5>
        <div id="counter" class="counter-value">0</div>
        <p class="counter-unit">日間、お酒を辞めています</p>
        <div class="counter-settings">
          <input type="date" id="start-date">
          <button onclick="updateCounter()" class="btn btn-primary !py-2 !px-4 !text-xs">設定</button>
        </div>
      </div>

      <!-- Categories -->
      <div class="widget">
        <h5>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
          </svg>
          カテゴリー
        </h5>
        <ul class="category-list">
          <li><a href="#"><span>健康・メリット</span><span class="count">12</span></a></li>
          <li><a href="#"><span>実践テクニック</span><span class="count">8</span></a></li>
          <li><a href="#"><span>ノンアルライフ</span><span class="count">5</span></a></li>
        </ul>
      </div>

      <!-- Newsletter -->
      <div class="widget newsletter-widget">
        <h5>ニュースレター</h5>
        <p>挫折しそうな時、週に一度の応援メッセージをお届けします。</p>
        <input type="email" placeholder="メールアドレス">
        <button class="btn btn-primary w-full">購読する</button>
      </div>
    </aside>
  </div>
</main>

<!-- footer.phpのHTMLなどを読み込む -->
<?php get_footer(); ?>