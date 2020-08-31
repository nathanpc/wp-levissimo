	<nav class="pager">
		<p><?php
			$args = array(
				'prev_text' => '<span class="meta-nav">&larr;</span> %title',
				'next_text' => '%title <span class="meta-nav">&rarr;</span>'
			);

			// Determine which link will have the hack to make them appear in the same line.
			if (strlen(get_next_post()->post_title) > 0) {
				$args['next_text'] .= '</a></div><div style="clear: both;"><a style="display: none;">';
			} else {
				$args['prev_text'] .= '</a></div><div style="clear: both;"><a style="display: none;">';
			}

			the_post_navigation($args);
		?></p>
	</nav>