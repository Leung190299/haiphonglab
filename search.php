<?php

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">

		<div class="seachBanner">

		</div>
		<header class="page-header">
			<h1 class="page-title">
				<?php
				printf(esc_html__('Kết quả tìm kiếm cho: %s', 'rv'), '<span>' . get_search_query() . '</span>');
				?>
			</h1>
		</header>
		<div class="search-body">
			<?php if (have_posts()) : ?>
				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', 'newBottom');
				endwhile;
				?>
			<?php
				the_posts_navigation();
			else :
				get_template_part('template-parts/content', 'none');

			endif;
			?>
		</div>
	</div>
</main>

<?php
get_footer();
?>

