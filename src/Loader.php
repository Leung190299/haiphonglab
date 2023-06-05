<?php

namespace HPlab;

class Loader
{

	public function __construct()
	{
		add_action('after_setup_theme', [$this, 'setup']);
		add_action('widgets_init', [$this, 'tmt_widgets_init']);
		add_action('wp_enqueue_scripts', [$this, 'enqueue_assets']);
		add_action('init', [$this, 'create_post_type']);
		add_action('wp_ajax_analysis', [$this, 'sreach_analysis']);
		add_action('wp_ajax_nopriv_analysis', [$this, 'sreach_analysis']);
		add_action('admin_enqueue_scripts', [$this, 'enqueue_admin']);
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

	public function enqueue_admin()
	{
		Assets::css('admin');
	}


	public function enqueue_assets()
	{
		wp_enqueue_style('hpl-theme', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));
		// Assets::css('animation');

		// wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.min.css', [], '1.1.0');
		// wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', ['jquery'], '1.1.0', true);


		Assets::js('wow');
		Assets::js('script', ['jquery'], [
			'url' => admin_url('admin-ajax.php'),
			'homeUrl'=>home_url('/'),
	]);

		//Thêm style cho template
		Assets::template_css('page-templates/home-page.php', 'home');
		Assets::template_css('page-templates/home-page.php', 'slick');
		Assets::template_js('page-templates/home-page.php', 'slick', ['jquery']);
		Assets::template_js('page-templates/home-page.php', 'slider', ['jquery']);


		Assets::template_css('page-templates/service-page.php', 'service');
		Assets::template_js('page-templates/service-page.php', 'service');
		Assets::template_css('page-templates/about-page.php', 'abouts');


		Assets::archiave_css('archive');
		Assets::search_css('search');
		Assets::single_css('single');
		Assets::single_css('slick');
		Assets::single_js('slick', ['jquery']);
		Assets::single_js('slider', ['jquery']);


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
	public function create_post_type()
	{
		$labels = [
			'name' => __('Phiếu xét nghiệm', 'hpl'),
			'singular_name' => __('Phiếu xét nghiệm', 'hpl'),
			'menu_name' => __('Phiếu xét nghiệm', 'hpl'),
			'name_admin_bar' => __('Phiếu xét nghiệm', 'hpl'),
			'add_new'               => __('Thêm  phiếu', 'hpl'),

		];

		$args = [
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => ['slug' => 'analysis'],
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon'			=>'dashicons-media-text',
			'supports'           => ['title', 'author', 'thumbnail', 'custom-fields'],
		];
		register_post_type('analysis', $args);
	}
	public function sreach_analysis()
	{
		$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
		$id = isset($_POST['id']) ? $_POST['id'] : '';
		$data = [];
		$args = [
			'post_type' => 'analysis',
			'meta_query' => [
				'relation' => 'AND',
				[
					'key' => 'analysisId',
					'value' => $id,
					'compare' => '='
				],
				[
					'key' => 'analysisPhone',
					'value' => $phone,
					'compare' => '='
				]
			],
		];
		$analysis = get_posts($args)[0];
		if (!$analysis) {
			wp_send_json_error('Vui lòng xem lại thông tin. Chúng tôi không tìm thấy thông tin nào như bạn đã nhập');
			return;
		};
		$data = [
			'id' => get_field('analysisId', $analysis->ID),
			'phone' => get_field('analysisPhone', $analysis->ID),
			'file' => get_field('analysisFile', $analysis->ID),
			'name' => get_the_title($analysis->ID)
		];

		wp_send_json_success($data);

		die();
	}
}
