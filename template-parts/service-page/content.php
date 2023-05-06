<div class="service">
	<div class="container">
		<h1 class="service_title"><?= get_the_title() ?></h1>
		<?php
		$args = [
			'category_name' => 'dich-vu',
			'posts_per_page' => -1,
			'page' => get_query_var('page')
		];

		$the_query = new WP_Query($args);

		// The Loop
		if ($the_query->have_posts()) :
			while ($the_query->have_posts()) : $the_query->the_post();
		?>
				<div class="serviceItem">
					<div class="serviceItem_image box  ">
						<a href="<?= get_permalink() ?>">
							<?= get_the_post_thumbnail() ?>
						</a>
					</div>
					<div class="serviceItem_body box ">
						<a href="<?= get_permalink() ?>" class="serviceItem_title">
							<?= get_the_title() ?>
						</a>
						<div class="serviceItem_des ">
							<?= get_the_excerpt() ?>
						</div>
						<a href="<?= get_permalink() ?>" class="serviceItem_link">
							Xem thêm
						</a>
					</div>
				</div>
		<?php

			endwhile;
		endif;

		// Reset Post Data
		wp_reset_postdata();
		?>
	</div>
</div>
<script>

	const elements = document.querySelectorAll('.serviceItem_body');

	function fadeInElements() {
	elements.forEach(element => {
		const elementTop = element.getBoundingClientRect().top;
		const elementHeight = element.offsetHeight;
		const windowHeight = window.innerHeight;

		if (elementTop < windowHeight - elementHeight) {
		element.style.opacity = '1';
		}
	});
	}

	window.addEventListener('scroll', fadeInElements);
	window.addEventListener('resize', fadeInElements);


	fadeInElements();
</script>