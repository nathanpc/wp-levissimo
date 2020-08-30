<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Setup -->
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- WordPress Head -->
	<?php wp_head(); ?>

	<!-- Sanitize -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sanitize.css/2.0.0/sanitize.min.css" integrity="sha512-uZEpdg8O5w6a2kJ9VKX6MJPr5MIj+R85f7706fR5D+dlr91P0sWQq3mBL/O/cQ8MfAOavO7VjUoJCH55BNsLDw==" crossorigin="anonymous" />

	<!-- Prism (Syntax Highlighting) -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.21.0/prism.min.js" integrity="sha512-WkVkkoB31AoI9DAk6SEEEyacH9etQXKUov4JRRuM1Y681VsTq7jYgrRw06cbP6Io7kPsKx+tLFpH/HXZSZ2YEQ==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.21.0/plugins/autolinker/prism-autolinker.min.js" integrity="sha512-/uypNVmpEQdCQLYz3mq7J2HPBpHkkg23FV4i7/WSUyEuTJrWJ2uZ3gXx1IBPUyB3qbIAY+AODbanXLkIar0NBQ==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.21.0/plugins/autoloader/prism-autoloader.min.js" integrity="sha512-ROhjG07IRaPZsryG77+MVyx3ZT5q3sGEGENoGItwc9xgvx+dl+s3D8Ob1zPdbl/iKklMKp7uFemLJFDRw0bvig==" crossorigin="anonymous"></script>
	<script>Prism.plugins.autoloader.languages_path = 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.21.0/components/';</script>
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
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php get_template_part('entry'); ?>
			<?php comments_template(); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part('nav', 'below'); ?>
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
