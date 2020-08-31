<?php get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<nav><?php edit_post_link(); ?></nav>

				<div class="article-body">
					<?php get_template_part('entry', 'content'); ?>
				</div>

				<div class="entry-links"><?php wp_link_pages(); ?></div>
			</article>

			<hr>

			<?php comments_template(); ?>
		<?php endwhile; endif; ?>

<?php get_footer(); ?>