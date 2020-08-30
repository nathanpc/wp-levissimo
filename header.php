<div class="title-block">
	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></h1>
	<h3><?php bloginfo( 'description' ); ?></h3>
</div>

<nav>
	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	<!--<div id="search"><?php get_search_form(); ?></div>-->
</nav>