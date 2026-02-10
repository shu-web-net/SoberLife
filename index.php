<!-- header.phpのHTMLなどを読み込む -->
<?php get_header(); ?>

<section class="hero">
  <div class="l-container">
    <div class="hero__content">
      <span class="hero__badge">NEW LIFE START</span>
      <h2 class="hero__title">お酒のない、<br><span class="hero__title-accent">もっと自由な毎日へ。</span></h2>
      <p class="hero__text">
        断酒は何かを失うことではなく、本来の自分と健康、そして時間を取り戻すプロセスです。今日から、新しい自分を始めませんか？
      </p>
      <div class="hero__actions">
        <a href="#" class="btn btn--primary">記事を読む</a>
        <a href="#" class="btn btn--secondary">初めての方へ</a>
      </div>
    </div>
  </div>
</section>

<main class="l-container">
  <div class="l-main">
    <div class="l-main__content">
      <h3 class="c-section-title">最新の記事</h3>

      <div class="post-grid">
        <article class="post-card">
          <div class="post-card__thumb">
            <span class="post-card__tag">健康・メリット</span>
          </div>
          <div class="post-card__body">
            <span class="post-card__meta">2023.10.27</span>
            <h4 class="post-card__title">断酒して1ヶ月。体と心に起きた「劇的な変化」まとめ</h4>
            <p class="post-card__excerpt">睡眠の質、肌荒れ、メンタルの安定。30日間お酒を辞めてみて分かった驚きの効果を詳しく解説します。</p>
          </div>
        </article>

        <article class="post-card">
          <div class="post-card__thumb">
            <span class="post-card__tag">テクニック</span>
          </div>
          <div class="post-card__body">
            <span class="post-card__meta">2023.10.25</span>
            <h4 class="post-card__title">飲み会の誘いをスマートに断る3つのフレーズ</h4>
            <p class="post-card__excerpt">角を立てずに、かつ確実に断酒中であることを伝えるコミュニケーション術を紹介。</p>
          </div>
        </article>

        <article class="post-card">
          <div class="post-card__thumb">
            <span class="post-card__tag">ライフスタイル</span>
          </div>
          <div class="post-card__body">
            <span class="post-card__meta">2023.10.20</span>
            <h4 class="post-card__title">満足度120%のモクテル（ノンアル）5選</h4>
            <p class="post-card__excerpt">夜のリラックスタイムを彩る、自家製ノンアルコールドリンクの簡単レシピ。</p>
          </div>
        </article>

        <article class="post-card">
          <div class="post-card__thumb">
            <span class="post-card__tag">体験談</span>
          </div>
          <div class="post-card__body">
            <span class="post-card__meta">2023.10.15</span>
            <h4 class="post-card__title">連続断酒100日達成。私が一番大切だと思ったこと</h4>
            <p class="post-card__excerpt">挫折を繰り返した私が、どうやって100日間の大台に乗ることができたのか。</p>
          </div>
        </article>
      </div>

      <div class="l-actions">
        <a href="#" class="btn btn--outline">もっと見る</a>
      </div>
    </div>

    <aside class="l-main__sidebar">
      <div class="widget">
        <div class="sober-counter">
          <h5 class="widget__title widget__title--centered">Sober Timer</h5>
          <div id="counter" class="sober-counter__number">0</div>
          <p class="sober-counter__label">日間、お酒を辞めています</p>
          <div class="sober-counter__settings">
            <input type="date" id="start-date" class="sober-counter__input">
            <button id="save-btn" class="btn btn--primary btn--small">保存</button>
          </div>
        </div>
      </div>

      <div class="widget">
        <h5 class="widget__title">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
          </svg>
          カテゴリー
        </h5>
        <ul class="category-list">
          <li class="category-list__item"><a href="#" class="category-list__link"><span>健康・メリット</span><span class="category-list__count">12</span></a></li>
          <li class="category-list__item"><a href="#" class="category-list__link"><span>実践テクニック</span><span class="category-list__count">8</span></a></li>
          <li class="category-list__item"><a href="#" class="category-list__link"><span>ノンアルライフ</span><span class="category-list__count">5</span></a></li>
        </ul>
      </div>

      <div class="newsletter">
        <h5 class="newsletter__title">応援レター</h5>
        <p class="newsletter__desc">挫折しそうな時、週に一度のメッセージをお届けします。</p>
        <input type="email" placeholder="メールアドレス" class="newsletter__input">
        <button class="btn btn--primary btn--full">購読する</button>
      </div>
    </aside>
  </div>
</main>


<!-- footer.phpのHTMLなどを読み込む -->
<?php get_footer(); ?>