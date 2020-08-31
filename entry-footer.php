<span class="cat-links"><?php
	esc_html_e('Categories: ', 'levissimo');
	the_category(', ');
?></span>

<span class="tag-links"><?php the_tags(); ?></span>

<?php
	if (comments_open() && (get_comments_number() > 0)) {
		echo ' - <span class="comments-link"><a href="' . esc_url(get_comments_link()) . '">' . sprintf(esc_html__('%d Comments', 'levissimo'), get_comments_number()) . '</a></span>';
	}
?>