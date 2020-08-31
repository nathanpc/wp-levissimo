	</main>

	<!-- Sidebar -->
	<!--<aside id="sidebar">
		<?php //get_sidebar(); ?>
	</aside>-->

	<!-- Pager -->
	<nav class="pager">
		<p><?php
			if (!is_singular()) {
				get_template_part('nav', 'below');
			} else {
				get_template_part('nav', 'below-single');
			}
		?></p>
	</nav>

	<!-- Footer -->
	<footer>
		<div class="right">&copy; <?php echo esc_html(date_i18n(__('Y', 'levissimo'))); ?> <?php echo esc_html(get_bloginfo('name')); ?></div>
		
		<div class="left">
			<a href="https://github.com/nathanpc/wp-levissimo">Levissimo</a>
		</div>

		<div style="clear: both;"></div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>