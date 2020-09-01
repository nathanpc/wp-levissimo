<?php get_header(); ?>

		<?php if (have_posts()) : ?>
			<header>
				<h2><?php printf(esc_html__('Search Results for: %s', 'levissimo'), get_search_query()); ?></h2>
				<p><div style="text-align: center"><?php get_search_form(); ?></div></p>

				<hr>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<nav><?php edit_post_link(); ?></nav>

					<div class="article-body">
						<?php get_template_part('entry', 'content'); ?>
					</div>

					<div class="entry-links"><?php wp_link_pages(); ?></div>
				</article>

				<hr>

				<?php if (comments_open() && !post_password_required()) { comments_template('', true); } ?>
			<?php endwhile; ?>
		<?php else : ?>
			<article id="post-0" class="post no-results not-found">
				<h2><?php esc_html_e('Nothing Found', 'levissimo'); ?></h2>

				<div class="article-body">
					<p><?php printf(esc_html__("Sorry, nothing matched your search for '%s'. Please try again.", 'levissimo'), get_search_query()); ?></p>
				</div>
			</article>

			<hr>
		<?php endif; ?>

<?php get_footer(); ?>