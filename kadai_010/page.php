<?php get_header(); ?>

  <!-- Home -->

  <div class="home">
    <div class="breadcrumbs_container">
      <div class="image_header">
        <div class="header_info">
          <!-- titleを出力します -->
          <!-- <div>about us</div> -->
          <div><?php the_title(); ?></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Course -->

  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post();?>
      <div class="course">
        <div class="row content-body">
          <!-- Course -->
          <div class="col-lg-8">
            <!-- Course Tabs -->
            <div class="course_tabs_container">
              <div class="tab_panels">
                <!-- Description -->
                <div class="tab_panel">
                  <div class="tab_panel_title"><?php the_title(); ?></div>
                  <!-- ここからはすべて the_content()で置き換えるため削除します。 -->
                  <!-- ここに大学の年表を表示します -->
                  <?php the_content(); ?>
                  <!-- ここまではすべて the_content()で置き換えるため削除します。 -->
                </div>
              </div>
            </div>
          </div>

          <!-- Course Sidebar -->
          <div class="col-lg-4" style="background-color: #2b7b8e33">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>
