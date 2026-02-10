<!-- archive-blog.phpをほぼコピペ -->
<!-- header.phpのHTMLなどを読み込む -->
<?php get_header(); ?>

<!-- fv ファーストビュー -->
<section class="p-fv">
  
  
</section>


<div class="archive-contents-wrapper">

  <main class="archive-main">
    <div class="archive-inner l-inner">
      <ul class="archive-list">
        <?php   // 現在のカテゴリー情報を取得
        $current_category = get_queried_object(); ?>
        <?php
        if ($current_category && $current_category instanceof WP_Term && $current_category->taxonomy === 'category') :
          $args = array(
            'posts_per_page' => 10,
            'cat' => $current_category->term_id, // 現在のカテゴリーIDを指定
          );
          $my_query = new WP_Query($args);
        ?>
          <?php if ($my_query->have_posts()) : ?>
            <?php while ($my_query->have_posts()) : ?>
              <?php $my_query->the_post(); ?>
              <li class="archive-list-item">
                <a href="<?php the_permalink(); ?>" class="archive-list-item-link">
                  <span class="archive-list-label">NEW</span>
                  <div class="archive-list-img-container">
                    <!-- アイキャッチの表示 -->
                    <!-- entry-item-img -->
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri() ?>/assets/img/no-image/no-image.png" alt="">
                    <?php endif; ?>
                  </div>
                  <div class="archive-list-text-container">
                    <!-- タームじゃなくカテゴリーに修正 -->
                    <?php
                    $categories = get_the_category();
                    if ($categories && ! is_wp_error($categories)) : ?>
                      <?php foreach ($categories as $category) : ?>
                        <span class="archive-list-text-tag" rel="tag"><?php echo esc_html($category->name); ?></span>
                      <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- タイトル -->
                    <p class="archive-list-text-title"><?php the_title(); ?></p>
                    <!-- entry-meta -->
                    <div class="entry-meta">
                      <time class="archive-entry-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                    </div><!-- /entry-meta -->
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </ul>



      <!-- pagination -->
      <?php if (paginate_links()) : ?>
        <div class="pagination">
          <?php if (wp_is_mobile()) : ?>
            <?php echo paginate_links(
              array(
                "end_size" => 1,
                "mid_size" => 0,
                "prev_next" => true,
                "prev_text" => "前へ",
                "next_text" => "次へ",
              )
            );
            ?>
          <?php else : ?>
            <?php echo paginate_links(
              array(
                "end_size" => 1,
                "mid_size" => 2,
                "prev_next" => true,
                "prev_text" => "前へ",
                "next_text" => "次へ",
              )
            );
            ?>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <!-- /pagination -->
    </div>

  </main>
  <!-- sidebar.phpのHTMLなどを読み込む -->
  <?php get_sidebar(); ?>
</div>
<!-- footer.phpのHTMLなどを読み込む -->
<?php get_footer('bar'); ?>
<!-- footer.phpのHTMLなどを読み込む -->
<?php get_footer(); ?>