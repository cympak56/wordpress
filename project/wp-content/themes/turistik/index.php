
      
	  <?php get_header(); ?>
	  
      <!-- header_end-->
      <div class="main-content">
        <div class="content-wrapper">
          <div class="content">
            <h1 class="title-page">
			<?php
				if ( is_home() ) {
					echo 'Последние новости и акции из мира туризма';
				} elseif (is_tag() ) {
					single_tag_title();
				} elseif( is_search() ) {
					echo 'Поиск по запросу:'; the_search_query();
				} elseif( is_category() ) {
					single_cat_title();
				}
			?></h1>
            <div class="posts-list">
			  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <!-- post-mini-->
              <div class="post-wrap">
                <div class="post-thumbnail">
					<?php the_post_thumbnail('thumbnail'); ?>
				</div>
                <div class="post-content">
                  <div class="post-content__post-info">
                    <div class="post-date"><?php the_time('d.m.Y'); ?></div>
                  </div>
                  <div class="post-content__post-text">
                    <div class="post-title">
                      <?php the_title(); ?>
                    </div>
                    <p>
                      <?php the_excerpt(); ?>
                    </p>
                  </div>
                  <div class="post-content__post-control"><a href="<?php the_permalink(); ?>" class="btn-read-post">Читать далее >></a></div>
                </div>
              </div>
              <!-- post-mini_end-->
			  <?php endwhile; else : ?>
				<p>В данный момнет записей нет.</p>
			  <?php endif; ?>
            </div>
            <div class="pagenavi-post-wrap">
				<?php 
					$links = paginate_links( array(
						'prev_text' => '<i class="icon icon-angle-double-left"></i>',
						'next_text' => '<i class="icon icon-angle-double-right"></i>'
					) );
					
					echo $links;
				?>
			</div>
          </div>
          <!-- sidebar-->
		  
		  <?php get_sidebar(); ?>
		  
        </div>
      </div>
	  
	  <?php get_footer(); ?>