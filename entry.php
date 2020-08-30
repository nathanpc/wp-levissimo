<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<nav><?php
		if (!is_search()) {
			get_template_part('entry', 'meta');
		}
	?></nav>

	<div class="article-body">
		<?php get_template_part('entry', (is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content')); ?>
		<?php
			if (is_singular()) {
				get_template_part('entry-footer');
			}
		?>
	</div>
</article>

<hr>