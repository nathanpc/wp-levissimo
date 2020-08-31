	<nav class="pager">
		<p><?php
			$args = array(
				'prev_text' => sprintf(esc_html__('%s Older Posts', 'levissimo'), '<span class="meta-nav">&larr;</span>'),
				'next_text' => sprintf(esc_html__('Newer Posts %s', 'levissimo'), '<span class="meta-nav">&rarr;</span>')
			);

			// Determine which link will have the hack to make them appear in the same line.
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			if ($paged > 1) {
				$args['next_text'] .= '</a></div><div style="clear: both;"><a style="display: none;">';
			} else {
				$args['prev_text'] .= '</a></div><div style="clear: both;"><a style="display: none;">';
			}

			the_posts_navigation($args);
		?></p>
	</nav>