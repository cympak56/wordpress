
      
	  <?php get_header(); ?>
	  
      <div class="main-content">
        <div class="content-wrapper">
          <div class="content">
            <div class="article-title title-page">
              <?php the_title(); ?>
            </div>
            <div class="article-image">
				<?php the_post_thumbnail('full'); ?>
			</div>
            <div class="article-info">
              <div class="post-date"><?php the_time('d.m.Y'); ?></div>
            </div>
            <div class="article-text">
              <?php the_content(); ?>
            </div>
            <div class="article-pagination">
			  <?php if ( $previos_post = get_previous_post() ) : ?>
              <div class="article-pagination__block pagination-prev-left"><a href="<?php echo get_post_permalink($previos_post->ID); ?>" class="article-pagination__link"><i class="icon icon-angle-double-left"></i>Предыдущая статья</a>
                <div class="wrap-pagination-preview pagination-prev-left">
                  <div class="preview-article__img"><?php echo get_the_post_thumbnail( $previos_post->ID, [ 170, 113 ]) ?></div>
                  <div class="preview-article__content">
                    <div class="preview-article__info"><a href="<?php echo get_post_permalink($previos_post->ID); ?>" class="post-date"><?php echo get_the_time( 'd.m.Y', $previos_post->ID) ?></a></div>
                    <div class="preview-article__text"><?php echo get_the_title( $previos_post->ID) ?></div>
                  </div>
                </div>
              </div>
			  <?php endif; ?>
			  
			  <?php if ( $next_post = get_next_post() ) : ?>
              <div class="article-pagination__block pagination-prev-right"><a href="<?php echo get_post_permalink($next_post->ID); ?>" class="article-pagination__link">Сдедующая статья<i class="icon icon-angle-double-right"></i></a>
                <div class="wrap-pagination-preview pagination-prev-right">
                  <div class="preview-article__img"><?php echo get_the_post_thumbnail( $next_post->ID, [ 170, 113 ]) ?></div>
                  <div class="preview-article__content">
                    <div class="preview-article__info"><a href="<?php echo get_post_permalink($next_post->ID); ?>" class="post-date"><?php echo get_the_time( 'd.m.Y', $next_post->ID) ?></a></div>
                    <div class="preview-article__text"><?php echo get_the_title( $next_post->ID) ?></div>
                  </div>
                </div>
              </div>
			  <?php endif; ?>
            </div>
          </div>
          
		  <?php get_sidebar(); ?>
		  
        </div>
      </div>
	  
	  <?php get_footer(); ?>