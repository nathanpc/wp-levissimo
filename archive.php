<?php get_header(); ?>

		<header>
			<h2><?php single_term_title(); ?></h2>
			<div class="description"><?php
				if ('' != the_archive_description()) {
					echo esc_html(the_archive_description());
				}
			?></div>

			<hr>
		</header>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php get_template_part('entry'); ?>
		<?php endwhile; endif; ?>

<?php get_footer(); ?>