<?php get_header(); ?>

	<?php
		if (have_posts()) : while (have_posts()) : the_post();
			get_template_part('entry');
			get_template_part('nav', 'below-single');

			if (comments_open() && !post_password_required()) {
				comments_template(); 
			}
		endwhile; endif;
	?>

<?php get_footer(); ?>