<?php
/**
 * Template Name: Home page
 */
?>
<?php get_header(); ?>

<main id="primary" class="site-main ">

	<?php
		get_template_part('template-parts/home-page/banner');
		get_template_part('template-parts/home-page/getTest');
		get_template_part('template-parts/home-page/service');
		get_template_part('template-parts/home-page/partner');
		get_template_part('template-parts/home-page/homePost');


	?>

</main>

<?php get_footer(); ?>