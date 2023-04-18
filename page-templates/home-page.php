<?php
/**
 * Template Name: Home page
 */
?>
<?php get_header(); ?>

<main id="primary" class="site-main ">

	<?php
		get_template_part('template-parts/home-page/banner');
		get_template_part('template-parts/home-page/san-pham');
		get_template_part('template-parts/home-page/quy-trinh');
		get_template_part('template-parts/home-page/doi-tac');
		get_template_part('template-parts/home-page/con-so');
		get_template_part('template-parts/chien-dich');
		get_template_part('template-parts/mang-luoi-kh');
		get_template_part('template-parts/form-casestudy');

	?>

</main>

<?php get_footer(); ?>