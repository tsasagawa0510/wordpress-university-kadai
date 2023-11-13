<div class="sidebar">
  <div class="category">
    <div class="section_title_container category_title">
      <h2>CATEGORY</h2>
      <div class="section_subtitle">カテゴリー</div>
    </div>
    <div class="sidebar_categories">
      <ul>
        <?php
          $args = array(
            'hide_empty' => 1, // 投稿記事があるカテゴリーのみ表示する
            'title_li' => '',  // リストの外側に表示するタイトルと表示形式（''であれば何も表示しない）
          );
          wp_list_categories( $args ); 
        ?>
      </ul>
    </div>
  </div>
  <div class="category">
    <div class="section_title_container category_title">
      <h2>Latest Post</h2>
      <div class="section_subtitle">最新記事</div>
    </div>
    <div class="sidebar_categories">
      <ul>
        <?php 
          $args = array(
            // 表示件数の指定
            'posts_per_page' => 3,
          );
          $posts = get_posts($args);
          // ループの開始
          foreach($posts as $post):
          //記事データのセット 
          setup_postdata($post);
        ?>

        <li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
        <?php
          endforeach;
          wp_reset_postdata();
        ?>
      </ul>
    </div>
  </div>
</div>