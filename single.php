<?php get_header(); ?>

	<?php
		if (have_posts()) : while (have_posts()) : the_post();
			get_template_part('entry');

			if (comments_open() && !post_password_required()) {
				comments_template(); 
			}
		endwhile; endif;
	?>

<?php get_footer(); ?>