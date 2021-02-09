<!DOCTYPE html>
<html lang="ru">
  <head>
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
    <?php wp_head(); ?>
	
  </head>
  <body>
    <div class="wrapper">
      <header class="main-header">
        <div class="top-header">
          <div class="top-header__wrap">
            <div class="logotype-block">
              <div class="logo-wrap"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/img/logo.svg" alt="Логотип" class="logo-wrap__logo-img"></a></div>
            </div>
			<?php
				wp_nav_menu( [
					'menu_class' => 'nav-list',
					'container' => 'nav',
					'container_class' => 'main-navigation',
					'depth' => 1,
					'theme_location' => 'header-menu'
				] );
			?>
          </div>
        </div>
        <div class="bottom-header">
          <div class="search-form-wrap">
			<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
              <input type="text" placeholder="Поиск..." class="search-form__input" name="s" value="<?php echo get_search_query(); ?>">
              <button class="search-form__btn-search"><i class="icon icon-search"></i></button>
            </form>
          </div>
        </div>
      </header>