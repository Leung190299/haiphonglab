<?php

namespace HPlab;

class Loader
{

	public function __construct()
	{
		add_action('after_setup_theme', [$this, 'setup']);
		add_action('widgets_init', [$this, 'tmt_widgets_init']);
		add_action('wp_enqueue_scripts', [$this, 'enqueue_assets']);
	}
	public function setup()
	{
		load_theme_textdomain('hpl', get_template_directory() . '/languages');

		register_nav_menus([
			'menu' 		=>  esc_html__('Primary Menu', 'hpl'),
			'menu-mobile' 	=>  esc_html__('Menu Mobile', 'hpl'),
			'about' 	=>  esc_html__('Menu About', 'hpl'),
		]);

		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script']);

		add_theme_support('post-thumbnails');
		add_theme_support('custom-logo');
		add_theme_support('responsive-embeds');
	}

	function tmt_widgets_init()
	{
		register_sidebar(
			[
				'name'          => esc_html__('footer', 'hpl'),
				'id'            => 'sidebar-1',
				'before_widget' => '<aside class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			]
		);
	}


	public function enqueue_assets()
	{
		wp_enqueue_style('novanet-theme', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));
		wp_enqueue_style('animation-theme', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');

		wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.min.css', [], '1.1.0' );
		wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', [ 'jquery' ], '1.1.0', true );

		// wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css', [], '1.8.1' );
		// wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', [ 'jquery' ], '1.8.1', true );

		wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', [ 'jquery' ], '1.0', true );
		wp_enqueue_script('wow', 'https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js', [], '1.1.3', true);

		//Thêm style cho template
		Assets::template_css( 'page-templates/home-page.php', 'home' );
		Assets::template_css('page-templates/home-page.php','slick');
		Assets::template_js('page-templates/home-page.php','slick',['jquery']);


		Assets::template_css( 'page-templates/service-page.php', 'service' );

		// Assets::template_js([
		// 	'page-templates/home-template.php',
		// ], 'slick');

		// Thêm Script cho template
		// Assets::template_js([
		// 	'page-templates/home-template.php',
		// 	'page-templates/about-group-template.php',
		// 	'page-templates/scholarship-template.php',
		// 	'page-templates/news-template.php',
		// ], 'slider', ['jquery']);

	}
}
