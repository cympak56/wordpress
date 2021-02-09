		<footer class="main-footer">
		  <div class="content-footer">
			<?php
				wp_nav_menu( [
					'menu_class' => 'b-menu__list',
					'container' => 'div',
					'container_class' => 'bottom-menu',
					'depth' => 1,
					'theme_location' => 'footer-menu'
				] );
			?>
		  <div class="copyright-wrap">
			<div class="copyright-text">Туристик<a href="<?php echo get_home_url(); ?>" class="copyright-text__link"> loftschool 2016</a></div>
		  </div>
		  </div>
		</footer>
    </div>
    <!-- wrapper_end-->
	
	<?php wp_footer(); ?>
  </body>
</html>