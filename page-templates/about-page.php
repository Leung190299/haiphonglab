<?php

/**
 * Template Name: About page
 */
?>
<?php get_header(); ?>

<main id="primary" class="site-main ">

	<?php
	get_template_part('template-parts/about-page/banner');
	?>
	<div class="container">

		<?= 	get_the_content() ?>
	</div>

</main>

<?php get_footer(); ?>