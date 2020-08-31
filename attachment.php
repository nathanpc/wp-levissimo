<?php get_header(); ?>
<?php global $post; ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<header>
				<a href="<?php echo esc_url(get_permalink($post->post_parent)); ?>" title="<?php printf(esc_html__('Return to %s', 'levissimo'), esc_html(get_the_title($post->post_parent), 1)); ?>" rev="attachment"><?php printf(esc_html__('%s Return to ', 'levissimo'), '<span class="meta-nav">&larr;</span>'); ?><?php echo get_the_title($post->post_parent); ?></a>

				<nav class="pager">
					<div class="previous"><?php previous_image_link(false, '&lsaquo; Previous'); ?></div>
					<div class="next"><?php next_image_link(false, 'Next &rsaquo;'); ?></div>
					<div style="clear: both;"></div>
				</nav>

				<hr>
			</header>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<nav><?php get_template_part('entry', 'meta'); ?></nav>

				<div class="article-body">
					<div class="entry-attachment">
						<?php if (wp_attachment_is_image($post->ID)) : $att_image = wp_get_attachment_image_src($post->ID, 'full'); ?>
							<p class="attachment">
								<a href="<?php echo esc_url(wp_get_attachment_url($post->ID)); ?>" title="<?php the_title_attribute(); ?>" rel="attachment">
									<img src="<?php echo esc_url($att_image[0]); ?>" width="<?php echo esc_attr($att_image[1]); ?>" height="<?php echo esc_attr($att_image[2]); ?>" class="attachment-full" alt="<?php $post->post_excerpt; ?>" />
								</a>
							</p>
						<?php else : ?>
							<a href="<?php echo esc_url(wp_get_attachment_url($post->ID)); ?>" title="<?php echo esc_attr(get_the_title($post->ID), 1); ?>" rel="attachment">
								<?php echo esc_url(basename($post->guid)); ?>
							</a>
						<?php endif; ?>
					</div>

					<div class="entry-caption">
						<?php if (!empty($post->post_excerpt)) { the_excerpt(); } ?>
					</div>

					<?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?>
				</div>
			</article>

			<hr>
			
			<header>
				<nav class="pager">
					<div class="previous"><?php previous_image_link(false, '&lsaquo; Previous'); ?></div>
					<div class="next"><?php next_image_link(false, 'Next &rsaquo;'); ?></div>
					<div style="clear: both;"></div>
				</nav>

				<hr>
			</header>

			<?php comments_template(); ?>
		<?php endwhile; endif; ?>

<?php get_footer(); ?>