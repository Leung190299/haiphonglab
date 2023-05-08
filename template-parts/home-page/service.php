<section class="section">
	<div class="container">
			<div class="section_label wow animate__fadeInDown" data-wow-duration="1s">
				<h2 class="label">DỊCH VỤ CUNG CẤP</h2>
				<a href="<?= home_url('/') ?>">Xem tất cả</a>
			</div>
		<div class="homeService_body section_body wow animate__fadeInDown" data-wow-duration="1s">
			<?php
			$args = [
				'category_name' => 'dich-vu',
				'posts_per_page' => 5,
				'page' => get_query_var('page')
			];

			$the_query = new WP_Query($args);

			// The Loop
			if ($the_query->have_posts()) :
				while ($the_query->have_posts()) : $the_query->the_post();
					get_template_part('template-parts/service');
				endwhile;
			endif;

			// Reset Post Data
			wp_reset_postdata(); ?>
		</div>
	</div>
</section>