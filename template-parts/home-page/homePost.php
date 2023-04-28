<section class="section">
	<div class="container">
			<div class="section_label">
				<h2 class="label">KIẾN THỨC Y KHOA</h2>
				<a href="<?= home_url('/') ?>">Xem tất cả</a>
			</div>
		<div class="homePost_body section_body">
			<?php
			$args = [
				'category_name' => 'kien-thuc-y-khoa',
				'posts_per_page' => 5,
				'page' => get_query_var('page')
			];

			$the_query = new WP_Query($args);

			// The Loop
			if ($the_query->have_posts()) :
				while ($the_query->have_posts()) : $the_query->the_post();
					get_template_part('template-parts/postContent');
				endwhile;
			endif;

			// Reset Post Data
			wp_reset_postdata(); ?>
		</div>
	</div>
</section>