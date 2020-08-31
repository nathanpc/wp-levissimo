<?php get_header(); ?>

		<header>
			<?php the_post(); ?>
			<h2><?php the_author_link(); ?></h2>
			<div class="description"><?php
				if ('' != get_the_author_meta('user_description')) {
					echo esc_html(get_the_author_meta('user_description'));
				}
			?></div>
			<?php rewind_posts(); ?>

			<hr>
		</header>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php get_template_part('entry'); ?>
		<?php endwhile; endif; ?>

<?php get_footer(); ?>