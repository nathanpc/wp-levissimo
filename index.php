<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Setup -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- WordPress Head -->
	<?php wp_head(); ?>

	<!-- Sanitize -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/10up-sanitize.css/8.0.0/sanitize.min.css" integrity="sha256-gk3z+XTkT2rjrvAxcKDA15OH4w1FssyEwnSC3WnKbWU=" crossorigin="anonymous" />

	<!-- Prism (Syntax Highlighting) -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/prism.min.js" integrity="sha256-jc6y1s/Y+F+78EgCT/lI2lyU7ys+PFYrRSJ6q8/R8+o=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/themes/prism.min.css" integrity="sha256-N1K43s+8twRa+tzzoF3V8EgssdDiZ6kd9r8Rfgg8kZU=" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/plugins/autolinker/prism-autolinker.min.js" integrity="sha256-SBdcXd1yqPQNixmtcMwSZJrzPTudHK/LXJxgLGCh3Go=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/plugins/autoloader/prism-autoloader.min.js" integrity="sha256-uCRLqQjYcKEykao3hISbnt7+Pf9EfLCJUD2oD0JLq40=" crossorigin="anonymous"></script>
	<script>Prism.plugins.autoloader.languages_path = 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/components/';</script>
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
		<hr>
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
