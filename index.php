<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--[if IE]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Header -->
	<header id="header">
		<?php get_header(); ?>
	</header>

	<!-- Articles -->
	<main class="article-container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php comments_template(); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part( 'nav', 'below' ); ?>
	</main>

	<!-- Sidebar -->
	<!--<aside id="sidebar">
		<?php get_sidebar(); ?>
	</aside>-->

	<!-- Pager -->
	<nav class="pager">
		<p>
			<!-- |pager.prev| -->
			<!-- |pager.items| -->
			<!-- |pager.next| -->
		</p>
	</nav>

	<!-- Footer -->
	<footer id="footer">
		<?php get_footer(); ?>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
