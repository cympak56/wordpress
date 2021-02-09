
      
	  <?php get_header(); ?>
	  
      <div class="main-content">
        <div class="content-wrapper">
          <div class="content">
            <h1 class="title-page"><?php the_title(); ?></h1>
			<?php the_content(); ?>
          </div>
          
		  <?php get_sidebar(); ?>
		  
        </div>
      </div>
      	  
	  <?php get_footer(); ?>