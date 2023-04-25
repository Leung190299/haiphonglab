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

	?>

</main>

<?php get_footer(); ?>