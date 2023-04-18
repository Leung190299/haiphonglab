<?php
namespace Sol;

class Fields
{

	public function __construct()
	{
		add_filter('rwmb_meta_boxes', [$this, 'register']);
		add_filter('mb_settings_pages', [$this, 'setting_page']);
	}
	public function register($meta_boxes)
	{
		$meta_boxes[] = $this->home_page();
		$meta_boxes[] = $this->publisher_page();
		$meta_boxes[] = $this->advertiser_page();
		$meta_boxes[] = $this->casestudy_page();
		$meta_boxes[] = $this->contact_page();

		$meta_boxes[] = $this->footer();
		$meta_boxes[] = $this->chiendich();
		$meta_boxes[] = $this->mangluoi();
		$meta_boxes[] = $this->formcase();

		return $meta_boxes;
	}

	//Home Page
	function home_page(){
		return [
			'title'      => __( 'Cài đặt trang', 'novanet' ),
			'post_types' => [ 'page' ],
			'tab_style'  => 'left',
			'include'    => [
				'relation' => 'OR',
				'template' => [ 'page-templates/home-page.php' ],
			],
			'tabs'       => [
				'banner'   => [
					'label' => 'Banner',
				],
				'sanpham'  => [
					'label' => 'Sản phẩm',
				],
				'quytrinh' => [
					'label' => 'Quy trình',
				],
				'doitac' => [
					'label' => 'Đối tác',
				],
				'conso' => [
					'label' => 'Con số',
				],
			],
			'fields' =>[
				//Banner
				[
					'name' => __('Ảnh', 'novanet'),
					'id'   => 'banner-image',
					'type' => 'single_image',
					'tab'  => 'banner',
				],
				[
					'name'	 => __('Tiêu đề', 'novanet'),
					'id'     => 'banner-title',
					'type'	 => 'wysiwyg',
					'options' => [
						'textarea_rows' => 3,
						'media_buttons' => false,
					],
					'tab'  => 'banner',
				],
				[
					'name'	 => __('Nội dung', 'novanet'),
					'id'     => 'banner-content',
					'type'   => 'textarea',
					'tab' 	 => 'banner',
				],
				[
					'name'	 		=> __('Buttons', 'novanet'),
					'id'     		=> 'banner-buttons',
					'type'	 		=> 'group',
					'clone'	 		=> true,
					'max_clone'		=> 2,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'group_title'   => '{button-name}',
					'save_state'    => true,
					'tab' 			=> 'banner',
					'fields' 		=> [
						[
							'name'	=> __('Tên button', 'novanet'),
							'id'    => 'button-name',
						],
						[
							'name'	=> __('Tiêu đề form', 'novanet'),
							'id'    => 'button-title',
						],
						[
							'name'	=> __('Mô tả form', 'novanet'),
							'id'    => 'button-desc',
						],
					],
				],

				//Sản phẩm
				[
					'name' => __('Ảnh', 'novanet'),
					'id'   => 'sanpham-image',
					'type' => 'single_image',
					'label_description' => __( '312*568', 'novanet' ),
					'tab'  => 'sanpham',
				],
				[
					'name'	 => __('Tiêu đề', 'novanet'),
					'id'     => 'sanpham-title',
					'type'	 => 'wysiwyg',
					'options' => [
						'textarea_rows' => 2,
						'media_buttons' => false,
					],
					'tab'  => 'sanpham',
				],
				[
					'name'	 => __('Mô tả ngắn', 'novanet'),
					'id'     => 'sanpham-desc',
					'type'   => 'textarea',
					'tab' 	 => 'sanpham',
				],
				[
					'name'	 		=> __('Nội dung bên trái ảnh', 'novanet'),
					'id'     		=> 'content-left',
					'type'	 		=> 'group',
					'clone'	 		=> true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'group_title'   => '{title-left}',
					'save_state'    => true,
					'tab' 			=> 'sanpham',
					'fields' 		=> [
						[
							'name'	=> __('Tiêu đề', 'novanet'),
							'id'    => 'title-left',
						],
						[
							'name'	=> __('Chi tiết', 'novanet'),
							'id'    => 'desc-left',
							'type'  => 'textarea',
						],
					],
				],
				[
					'name'	 		=> __('Nội dung bên phải ảnh', 'novanet'),
					'id'     		=> 'content-right',
					'type'	 		=> 'group',
					'clone'	 		=> true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'group_title'   => '{title-right}',
					'save_state'    => true,
					'tab' 			=> 'sanpham',
					'fields' 		=> [
						[
							'name'	=> __('Tiêu đề', 'novanet'),
							'id'    => 'title-right',
						],
						[
							'name'	=> __('Chi tiết', 'novanet'),
							'id'    => 'desc-right',
							'type'  => 'textarea',
						],
					],
				],

				//Quy trình
				[
					'name' => __('Ảnh', 'novanet'),
					'id'   => 'quytrinh-image',
					'type' => 'single_image',
					'label_description' => __( '292*560', 'novanet' ),
					'tab'  => 'quytrinh',
				],
				[
					'name'	 => __('Tiêu đề', 'novanet'),
					'id'     => 'quytrinh-title',
					'type'	 => 'wysiwyg',
					'options' => [
						'textarea_rows' => 2,
						'media_buttons' => false,
					],
					'tab'  => 'quytrinh',
				],
				[
					'name'	 		=> __('Nội dung cột bên trái', 'novanet'),
					'id'     		=> 'qtcontent-left',
					'type'	 		=> 'group',
					'clone'	 		=> true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'group_title'   => '{qttitle-left}',
					'save_state'    => true,
					'tab' 			=> 'quytrinh',
					'fields' 		=> [
						[
							'name'	=> __('Tiêu đề', 'novanet'),
							'id'    => 'qttitle-left',
						],
						[
							'name'	=> __('Chi tiết', 'novanet'),
							'id'    => 'qtdesc-left',
							'type'  => 'textarea',
						],
					],
				],
				[
					'name'	 		=> __('Nội dung cột bên phải', 'novanet'),
					'id'     		=> 'qtcontent-right',
					'type'	 		=> 'group',
					'clone'	 		=> true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'group_title'   => '{qttitle-right}',
					'save_state'    => true,
					'tab' 			=> 'quytrinh',
					'fields' 		=> [
						[
							'name'	=> __('Tiêu đề', 'novanet'),
							'id'    => 'qttitle-right',
						],
						[
							'name'	=> __('Chi tiết', 'novanet'),
							'id'    => 'qtdesc-right',
							'type'  => 'textarea',
						],
					],
				],

				//Đối tác
				[
					'name' => __('Ảnh', 'novanet'),
					'id'   => 'doitac-image',
					'type' => 'single_image',
					'label_description' => __( '390*380', 'novanet' ),
					'tab'  => 'doitac',
				],
				[
					'name'	 => __('Tiêu đề', 'novanet'),
					'id'     => 'doitac-title',
					'type'	 => 'wysiwyg',
					'options' => [
						'textarea_rows' => 2,
						'media_buttons' => false,
					],
					'tab'  => 'doitac',
				],
				[
					'name'	=> __('Nội dung', 'novanet'),
					'id'    => 'doitac-contents',
					'type'	 		=> 'group',
					'clone'	 		=> true,
					'max_clone'		=> 2,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'group_title'   => '{content-title}',
					'save_state'    => true,
					'tab' 			=> 'doitac',
					'fields'   		=> [
						[
							'name'	 	=> __('Tiêu đề', 'novanet'),
							'id'		=> 'content-title',
						],
						[
							'name'	 => __('Chi tiết', 'novanet'),
							'id'     => 'content-desc',
							'type'   => 'textarea',
						],
						[
							'name'	=> __('Tên button', 'novanet'),
							'id'    => 'button-name',
						],
						[
							'name'	=> __('Tiêu đề form', 'novanet'),
							'id'    => 'button-title',
						],
						[
							'name'	=> __('Mô tả form', 'novanet'),
							'id'    => 'button-desc',
							'type'   => 'textarea',
						],
					],
				],

				//Con số
				[
					'name'	 => __('Tiêu đề', 'novanet'),
					'id'     => 'conso-title',
					'type'	 => 'wysiwyg',
					'options' => [
						'textarea_rows' => 3,
						'media_buttons' => false,
					],
					'tab'  => 'conso',
				],
				[
					'name'	 		=> __('Nội dung', 'novanet'),
					'id'     		=> 'conso-contents',
					'type'	 		=> 'group',
					'clone'	 		=> true,
					'max_clone'		=> 3,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'group_title'   => '{conso-number}',
					'save_state'    => true,
					'tab' 			=> 'conso',
					'fields' 		=> [
						[
							'name'	=> __('Ảnh', 'novanet'),
							'id'    => 'conso-image',
							'type'	=> 'single_image',
							'label_description' => __('263*185', 'novanet'),
						],
						[
							'name'	=> __('Con số', 'novanet'),
							'id'    => 'conso-number',
						],
						[
							'name'	=> __('Đơn vị', 'novanet'),
							'id'    => 'conso-donvi',
						],
						[
							'name'	=> __('Mô tả', 'novanet'),
							'id'    => 'conso-desc',
							'type'  => 'textarea',
						],
						[
							'name'	=> __('Animate', 'novanet'),
							'label_description' => __('không sửa', 'novanet'),
							'id'    => 'conso-animate',
						],
					],
				],
			],
		];
	}

	// Publisher Page
	function publisher_page() {
		return [
			'title'      => __( 'Cài đặt trang', 'novanet' ),
			'post_types' => [ 'page' ],
			'tab_style'  => 'left',
			'include'    => [
				'relation' => 'OR',
				'template' => [ 'page-templates/publisher-page.php' ],
			],
			'tabs'       => [
				'banner'   => [
					'label' => 'Banner',
				],
				'giaiphap'  => [
					'label' => 'Giải pháp',
				],
				'loiich' => [
					'label' => 'Lợi ích',
				],
				'case' => [
					'label' => 'Trở thành đối tác',
				],
			],
			'fields' => [
				//Banner
				[
					'name' => __('Ảnh', 'novanet'),
					'id'   => 'banner-image',
					'type' => 'single_image',
					'tab'  => 'banner',
				],
				[
					'name'	 => __('Tiêu đề', 'novanet'),
					'id'     => 'banner-title',
					'type'	 => 'textarea',
					'tab'  => 'banner',
				],
				[
					'name'	=> __('Tên button', 'novanet'),
					'id'    => 'button-name',
					'tab'  => 'banner',
				],
				[
					'name'	=> __('Tiêu đề form', 'novanet'),
					'id'    => 'button-title',
					'tab'  => 'banner',
				],
				[
					'name'	=> __('Mô tả form', 'novanet'),
					'id'    => 'button-desc',
					'tab'  => 'banner',
				],

				// Giải pháp
				[
					'name'	 => __('Tiêu đề', 'novanet'),
					'id'     => 'giaiphap-title',
					'type'	 => 'wysiwyg',
					'options' => [
						'textarea_rows' => 2,
						'media_buttons' => false,
					],
					'tab'  => 'giaiphap',
				],
				[
					'name'	 => __('Mô tả ngắn', 'novanet'),
					'id'     => 'giaiphap-desc',
					'type'   => 'textarea',
					'tab' 	 => 'giaiphap',
				],
				[
					'name' => __('Ảnh', 'novanet'),
					'id'   => 'giaiphap-image',
					'type' => 'single_image',
					'label_description' => __('560*325', 'novanet' ),
					'tab'  => 'giaiphap',
				],
				[
					'name'	 => __('Nội dung', 'novanet'),
					'id'     => 'giaiphap-content',
					'type'   => 'textarea',
					'tab' 	 => 'giaiphap',
				],

				//Lợi ich
				[
					'name'	 => __('Tiêu đề', 'novanet'),
					'id'     => 'loiich-title',
					'type'	 => 'wysiwyg',
					'options' => [
						'textarea_rows' => 2,
						'media_buttons' => false,
					],
					'tab'  => 'loiich',
				],
				[
					'name'	 		=> __('', 'novanet'),
					'id'     		=> 'loiich-contents',
					'type'	 		=> 'group',
					'clone'	 		=> true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'group_title'   => 'Khối {#}',
					'save_state'    => true,
					'tab' 			=> 'loiich',
					'fields' 		=> [
						[
							'name' => __('Ảnh', 'novanet'),
							'id'   => 'loiich-logo',
							'type' => 'single_image',
							'label_description' => __( '450*280', 'novanet' ),
						],
						[
							'name'	=> __('Mô tả', 'novanet'),
							'id'    => 'loiich-desc',
							'type'  => 'wysiwyg',
							'options' => [
								'textarea_rows' => 2,
								'media_buttons' => false,
							],
						],
						[
							'name'	=> __('Class Animate Image', 'novanet'),
							'label_description' => __('không sửa', 'novanet'),
							'id'    => 'animate-image',
						],
						[
							'name'	=> __('Class Animate Content', 'novanet'),
							'label_description' => __('không sửa', 'novanet'),
							'id'    => 'animate-content',
						],
					],
				],

				//Trở thành đối tác
				[
					'name' => __('Ảnh', 'novanet'),
					'id'   => 'case-image',
					'type' => 'single_image',
					'label_description' => __('590*537', 'novanet'),
					'tab'  => 'case',
				],
				[
					'name'	 => __('Tiêu đề', 'novanet'),
					'id'     => 'case-title',
					'type'	 => 'wysiwyg',
					'options' => [
						'textarea_rows' => 2,
						'media_buttons' => false,
					],
					'tab'  => 'case',
				],
				[
					'name'	 => __('Mô tả ngắn', 'novanet'),
					'id'     => 'case-desc',
					'type'   => 'text',
					'tab' 	 => 'case',
				],
			],
		];
	}

	//Advertiser Page
	function advertiser_page() {
		return [
			'title'      => __( 'Cài đặt trang', 'novanet' ),
			'post_types' => [ 'page' ],
			'tab_style'  => 'left',
			'include'    => [
				'relation' => 'OR',
				'template' => [ 'page-templates/advertiser-page.php' ],
			],
			'tabs'       => [
				'banner'   => [
					'label' => 'Banner',
				],
				'giaiphap'  => [
					'label' => 'Giải pháp',
				],
				'banner-qc'  => [
					'label' => 'Định dạng banner quảng cáo',
				],
				'quytrinh' => [
					'label' => 'Quy trình thực hiện',
				],
				'chose' => [
					'label' => 'Tại sao chọn Novanet',
				],
			],
			'fields' => [
				//Banner
				[
					'name' => __('Ảnh', 'novanet'),
					'id'   => 'banner-image',
					'type' => 'single_image',
					'tab'  => 'banner',
				],
				[
					'name'	 => __('Tiêu đề', 'novanet'),
					'id'     => 'banner-title',
					'type'	 => 'textarea',
					'tab'  => 'banner',
				],
				[
					'name'	=> __('Tên button', 'novanet'),
					'id'    => 'button-name',
					'tab'  => 'banner',
				],
				[
					'name'	=> __('Tiêu đề form', 'novanet'),
					'id'    => 'button-title',
					'tab'  => 'banner',
				],
				[
					'name'	=> __('Mô tả form', 'novanet'),
					'id'    => 'button-desc',
					'tab'  => 'banner',
				],

				// Giải pháp
				[
					'name'	 => __('Tiêu đề', 'novanet'),
					'id'     => 'giaiphap-title',
					'type'	 => 'wysiwyg',
					'options' => [
						'textarea_rows' => 2,
						'media_buttons' => false,
					],
					'tab'  => 'giaiphap',
				],
				[
					'name'	 => __('Mô tả ngắn', 'novanet'),
					'id'     => 'giaiphap-desc',
					'type'   => 'textarea',
					'tab' 	 => 'giaiphap',
				],
				[
					'name' => __('Ảnh', 'novanet'),
					'id'   => 'giaiphap-image',
					'type' => 'single_image',
					'label_description' => __('559*372', 'novanet' ),
					'tab'  => 'giaiphap',
				],
				[
					'name'	 => __('Nội dung', 'novanet'),
					'id'     => 'giaiphap-content',
					'type'   => 'textarea',
					'tab' 	 => 'giaiphap',
				],

				// Banner quảng cáo
				[
					'name'	 => __('Tiêu đề', 'novanet'),
					'id'     => 'banner-qc-title',
					'type'	 => 'wysiwyg',
					'options' => [
						'textarea_rows' => 2,
						'media_buttons' => false,
					],
					'tab'  => 'banner-qc',
				],
				[
					'name'	=> __('Tên tab chính', 'novanet'),
					'id'    => 'banner-qc-tabs',
					'type'	 		=> 'group',
					'clone'	 		=> true,
					'max_clone' 	=> 2,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'group_title'   => 'Tab chính {#}',
					'save_state'    => true,
					'tab' 			=> 'banner-qc',
					'fields'   		=> [
						[
							'name' => __('Icon tab', 'novanet'),
							'id'   => 'tab-icon',
							'type' => 'single_image',
						],
						[
							'name'	 	=> __('Tên tab chính', 'novanet'),
							'id'		=> 'tab-name',
						],
					],
				],
				[
					'name'	=> __('Nội dung từng tab', 'novanet'),
					'id'    => 'banner-qc-contents',
					'type'	 		=> 'group',
					'clone'	 		=> true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'group_title'   => 'Nội dung cho tab chính {#}',
					'save_state'    => true,
					'tab' 			=> 'banner-qc',
					'fields'   		=> [
						[
							'name'	 	=> __('Tên button', 'novanet'),
							'id'		=> 'tab-btn',
						],
						[
							'name'	 	=> __('Link button', 'novanet'),
							'id'		=> 'tab-link',
						],
						[
							'name'	=> __('Tên các tab phụ', 'novanet'),
							'id'    => 'banner-qc-tab-mini-name',
							'type'	 		=> 'group',
							'clone'	 		=> true,
							'collapsible'   => true,
							'default_state' => 'collapsed',
							'group_title'   => 'Tên tab phụ {#}',
							'save_state'    => true,
							'fields'   		=> [
								[
									'name'	 	=> __('', 'novanet'),
									'id'		=> 'tab-name-mini',
								],
							],
						],
						[
							'name'	=> __('Nội dung tab phụ', 'novanet'),
							'id'    => 'banner-qc-tab-mini',
							'type'	 		=> 'group',
							'clone'	 		=> true,
							'collapsible'   => true,
							'default_state' => 'collapsed',
							'group_title'   => 'Nội dung cho tab phụ {#}',
							'save_state'    => true,
							'fields'   		=> [
								[
									'name' => __('Ảnh', 'novanet'),
									'id'   => 'tab-image',
									'type' => 'single_image',
								],
								[
									'name'	 	=> __('Định dạng', 'novanet'),
									'id'		=> 'tab-dinhdang',
									'type'	 	=> 'wysiwyg',
									'options' 	=> [
										'textarea_rows' => 3,
										'media_buttons' => false,
									],
								],
								[
									'name'	 	=> __('Ưu điểm', 'novanet'),
									'id'		=> 'tab-uudiem',
									'type'	 	=> 'wysiwyg',
									'options' 	=> [
										'textarea_rows' => 3,
										'media_buttons' => false,
									],
								],
							],
						],
					],
				],

				// Quy trình
				[
					'name'	 => __('Tiêu đề chính', 'novanet'),
					'id'     => 'quytrinh-title',
					'type'	 => 'wysiwyg',
					'options' => [
						'textarea_rows' => 2,
						'media_buttons' => false,
					],
					'tab'  => 'quytrinh',
				],
				[
					'name'	 		=> __('', 'novanet'),
					'id'     		=> 'quytrinh-contents',
					'type'	 		=> 'group',
					'clone'	 		=> true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'group_title'   => '{item-title}',
					'save_state'    => true,
					'tab' 			=> 'quytrinh',
					'fields' 		=> [
						[
							'name'	=> __('Tiêu đề phụ', 'novanet'),
							'id'    => 'item-title',
						],
						[
							'name'	=> __('Mô tả', 'novanet'),
							'id'    => 'item-desc',
							'type'	 => 'wysiwyg',
							'options' => [
								'textarea_rows' => 2,
								'media_buttons' => false,
							],
						],
					],
				],

				// Tại sao chọn novanet
				[
					'name'	 => __('Tiêu đề chính', 'novanet'),
					'id'     => 'chose-title',
					'type'	 => 'wysiwyg',
					'options' => [
						'textarea_rows' => 2,
						'media_buttons' => false,
					],
					'tab'  => 'chose',
				],
				[
					'name'	 		=> __('', 'novanet'),
					'id'     		=> 'chose-contents',
					'type'	 		=> 'group',
					'clone'	 		=> true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'group_title'   => '{item-title}',
					'save_state'    => true,
					'tab' 			=> 'chose',
					'fields' 		=> [
						[
							'name' => __('Ảnh', 'novanet'),
							'id'   => 'item-image',
							'type' => 'single_image',
							'label_description' => __('450*340', 'novanet' ),
						],
						[
							'name'	=> __('Tiêu đề phụ', 'novanet'),
							'id'    => 'item-title',
							'type'	 => 'wysiwyg',
							'options' => [
								'textarea_rows' => 2,
								'media_buttons' => false,
							],
						],
						[
							'name'	=> __('Nội dung', 'novanet'),
							'id'    => 'item-desc',
							'type'	=> 'textarea',
						],
						[
							'name'	=> __('Class Animate Content', 'novanet'),
							'label_description' => __('không sửa', 'novanet'),
							'id'    => 'animate-content',
						],
						[
							'name'	=> __('Class Animate Image', 'novanet'),
							'label_description' => __('không sửa', 'novanet'),
							'id'    => 'animate-image',
						],
					],
				],
			],
		];
	}

	//Casestudy Page
	function casestudy_page(){
		return [
			'title'      => __( 'Cài đặt trang', 'novanet' ),
			'post_types' => [ 'page' ],
			'tab_style'  => 'left',
			'include'    => [
				'relation' => 'OR',
				'template' => [ 'page-templates/casestudy-page.php' ],
			],
			'tabs'       => [
				'tab-content'   => [
					'label' => 'Nội dung casestudy',
				],
				'mang-luoi'   => [
					'label' => 'Mạng lưới publisher',
				],
			],
			'fields' =>   [
				//tab-content
				[
					'name'	=> __('Tên tab', 'novanet'),
					'id'    => 'tab-groups',
					'type'	 		=> 'group',
					'clone'	 		=> true,
					'max_clone' 	=> 4,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'group_title'   => '{tab-name}',
					'save_state'    => true,
					'tab' 			=> 'tab-content',
					'fields'   		=> [
						[
							'name'	 	=> __('Tên tab', 'novanet'),
							'id'		=> 'tab-name',
						],
						[
							'name' => __('Ảnh background', 'novanet'),
							'id'   => 'tab-bg',
							'type' => 'single_image',
							'label_description' => __('500*500','novanet'),
						],
					],
				],
				[
					'name'	=> __('Nội dung từng tab', 'novanet'),
					'id'    => 'tab-contents',
					'type'	 		=> 'group',
					'clone'	 		=> true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'group_title'   => '{tab-title}',
					'save_state'    => true,
					'tab' 			=> 'tab-content',
					'fields'   		=> [
						[
							'name'	 	=> __('Tiêu đề', 'novanet'),
							'id'		=> 'tab-title',
						],
						[
							'name'	 	=> __('Nội dung', 'novanet'),
							'id'		=> 'tab-desc',
							'type'	 => 'wysiwyg',
							'options' => [
								'textarea_rows' => 3,
								'media_buttons' => false,
							],
						],
						[
							'name' => __('Logo', 'novanet'),
							'id'   => 'tab-logo',
							'type' => 'single_image',
						],
						[
							'name'	 	=> __('Số view', 'novanet'),
							'id'		=> 'tab-view',
						],
						[
							'name'	 	=> __('Số click', 'novanet'),
							'id'		=> 'tab-click',
						],
						[
							'name'	 	=> __('Tiêu đề nhỏ trên ảnh', 'novanet'),
							'id'		=> 'tab-title-mini',
						],
						[
							'name' => __('Ảnh', 'novanet'),
							'id'   => 'tab-image',
							'type' => 'single_image',
						],
					],
				],

				//Mạng lưới
				[
					'name'	 => __('Tiêu đề', 'novanet'),
					'id'     => 'mang-luoi-title',
					'type'	 => 'wysiwyg',
					'tab' 	 => 'mang-luoi',
					'options' => [
						'textarea_rows' => 2,
						'media_buttons' => false,
					],
				],
				[
					'name'	 => __('Ảnh logo', 'novanet'),
					'id'     => 'mang-luoi-image',
					'type'   => 'image_advanced',
					'label_description' => __('100*25','novanet'),
					'tab' 	 => 'mang-luoi',
				],
			],
		];
	}

	//Contact Page
	function contact_page(){
		return [
			'title'      => __( 'Cài đặt trang', 'novanet' ),
			'post_types' => [ 'page' ],
			'tab_style'  => 'left',
			'include'    => [
				'relation' => 'OR',
				'template' => [ 'page-templates/contact-page.php' ],
			],
			'fields' =>  [
				[
					'name'	 	=> __('Tiêu đề', 'novanet'),
					'id'		=> 'contact-title',
				],
				[
					'name'	=> __('Thông tin', 'novanet'),
					'id'    => 'contact-groups',
					'type'	 		=> 'group',
					'clone'	 		=> true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'group_title'   => '{content}',
					'save_state'    => true,
					'fields'   		=> [
						[
							'name' => __('icon', 'novanet'),
							'id'   => 'icon',
							'type' => 'single_image',
						],
						[
							'name'	 	=> __('Nội dung', 'novanet'),
							'id'		=> 'content',
						],
					],
				],
				[
					'name' => __('Ảnh map', 'novanet'),
					'id'   => 'contact-image',
					'type' => 'single_image',
					'label_description' => __('500*255','novanet'),
				],
				[
					'name'	 => __('Tiêu đề form', 'novanet'),
					'id'     => 'form-title',
					'type'	 => 'wysiwyg',
					'options' => [
						'textarea_rows' => 2,
						'media_buttons' => false,
					],
				],
				[
					'name'	 	=> __('Mô tả form', 'novanet'),
					'id'		=> 'form-desc',
				],
			],
		];
	}

	// footer
	function footer()
	{
		return [
			'settings_pages' => ['footer'],
			'tabs'           => [
				'sanpham'       => [
					'label' => 'Sản phẩm',
				],
				'novanet'    => [
					'label' => 'Về Novanet',
				],
				'hotro' => [
					'label' => 'Hỗ trợ',
				],
				'sanphamkhac'    => [
					'label' => 'Sản phẩm khác',
				],
				'ketnoi'    => [
					'label' => 'Kết nối chúng tôi',
				],
				'logo'    => [
					'label' => 'Thông tin thêm',
				],
			],
			'fields'         => [
				// Sản phẩm
				[
					'name' => __('Title', 'novanet'),
					'id'   => 'title_sanpham',
					'type' => 'text',
					'tab'  => 'sanpham',
				],
				[
					'id'      => 'content_sanpham',
					'name'    => esc_html__('Content', 'novanet'),
					'type'    => 'wysiwyg',
					'tab'     => 'sanpham',
					'options' => [
						'textarea_rows' => 5,
						'media_buttons' => false,
					],
				],
				// Về Novanet
				[
					'name' => __('Title', 'novanet'),
					'id'   => 'title_novanet',
					'type' => 'text',
					'tab'  => 'novanet',
				],
				[
					'id'      => 'content_novanet',
					'name'    => esc_html__('Content', 'novanet'),
					'type'    => 'wysiwyg',
					'tab'     => 'novanet',
					'options' => [
						'textarea_rows' => 5,
						'media_buttons' => false,
					],
				],
				// Hỗ trợ
				[
					'name' => __('Title', 'novanet'),
					'id'   => 'title_hotro',
					'type' => 'text',
					'tab'  => 'hotro',
				],
				[
					'id'      => 'content_hotro',
					'name'    => esc_html__('Content', 'novanet'),
					'type'    => 'wysiwyg',
					'tab'     => 'hotro',
					'options' => [
						'textarea_rows' => 5,
						'media_buttons' => false,
					],
				],
				// Sản phẩm khác
				[
					'name' => __('Title', 'novanet'),
					'id'   => 'title_sanphamkhac',
					'type' => 'text',
					'tab'  => 'sanphamkhac',
				],
				[
					'id'      => 'content_sanphamkhac',
					'name'    => esc_html__('Content', 'novanet'),
					'type'    => 'wysiwyg',
					'tab'     => 'sanphamkhac',
					'options' => [
						'textarea_rows' => 5,
						'media_buttons' => false,
					],
				],
				//Kết nối với chúng tôi
				[
					'name' => __('Title', 'novanet'),
					'id'   => 'title_ketnoi',
					'type' => 'text',
					'tab'  => 'ketnoi',
				],
				// Thông tin thêm
				[
					'id'	   => 'logo_image',
					'name'     => __('', 'novanet'),
					'type'     => 'image_advanced',
					'tab'      => 'logo',
				],
			],
		];
	}

	//Chiến dịch
	function chiendich()
	{
		return [
			'settings_pages' => ['chiendich'],
			'fields' => [
				[
					'name'	 => __('Tiêu đề', 'novanet'),
					'id'     => 'chiendich-title',
					'type'	 => 'wysiwyg',
					'options' => [
						'textarea_rows' => 2,
						'media_buttons' => false,
					],
				],
				[
					'name'	 		=> __('Nội dung', 'novanet'),
					'id'     		=> 'chiendich-contents',
					'type'	 		=> 'group',
					'clone'	 		=> true,
					'collapsible'   => true,
					'default_state' => 'collapsed',
					'group_title'   => 'Slide {#}',
					'save_state'    => true,
					'fields' 		=> [
						[
							'name' => __('Ảnh-logo', 'novanet'),
							'id'   => 'chiendich-logo',
							'type' => 'single_image',
							'label_description' => __( '360*115', 'novanet' ),
						],
						[
							'name'	=> __('Số view', 'novanet'),
							'id'    => 'chiendich-view',
						],
						[
							'name'	=> __('Số click', 'novanet'),
							'id'    => 'chiendich-click',
						],
						[
							'name'	=> __('Mô tả', 'novanet'),
							'id'    => 'chiendich-desc',
							'type'  => 'wysiwyg',
							'options' => [
								'textarea_rows' => 3,
								'media_buttons' => false,
							],
						],
						[
							'name'	=> __('Tiêu đề nhỏ trên ảnh', 'novanet'),
							'id'    => 'chiendich-titlemini',
						],
						[
							'name' => __('Ảnh dưới phần nội dung', 'novanet'),
							'id'   => 'chiendich-image',
							'type' => 'single_image',
							'label_description' => __( '970*465', 'novanet' ),
						],
					],
				],
			],
		];
	}

	//Mạng lưới KH
	function mangluoi()
	{
		return[
			'settings_pages' => ['mangluoi'],
			'fields'  =>[
				[
					'name'	 => __('Tiêu đề', 'novanet'),
					'id'     => 'mangluoi-title',
					'type'	 => 'wysiwyg',
					'options' => [
						'textarea_rows' => 2,
						'media_buttons' => false,
					],
				],
				[
					'name'	 => __('Mô tả', 'novanet'),
					'id'     => 'mangluoi-desc',
					'type'   => 'textarea',
				],
				[
					'name'	 => __('Ảnh logo', 'novanet'),
					'id'     => 'mangluoi-image',
					'type'   => 'image_advanced',
					'label_description' => __('100*25','novanet'),
				],
			],
		];
	}

	// Form nhận casestudy
	function formcase()
	{
		return[
			'settings_pages' => ['formcase'],
			'fields'  =>[
				[
					'name' => __('Ảnh', 'novanet'),
					'id'   => 'formcase-image',
					'type' => 'single_image',
					'label_description' => __('590*537', 'novanet'),
				],
				[
					'name'	 => __('Tiêu đề', 'novanet'),
					'id'     => 'formcase-title',
					'type'	 => 'wysiwyg',
					'options' => [
						'textarea_rows' => 2,
						'media_buttons' => false,
					],
				],
				[
					'name'	 => __('Mô tả ngắn', 'novanet'),
					'id'     => 'formcase-desc',
					'type'   => 'text',
				],
			],
		];
	}

	// setting page
	function setting_page($settings_pages)
	{
		$settings_pages[] = $this->settingFooter();
		$settings_pages[] = $this->settingChienDich();
		$settings_pages[] = $this->settingMangLuoikh();
		$settings_pages[] = $this->settingFormCase();

		return $settings_pages;
	}
	function settingFooter()
	{
		return [
			'id'          => 'footer',
			'menu_title'  => __('Footer', 'novanet'),
			'option_name' => 'footer',
			'position'    => 24,
			'parent'      => 'themes.php',
			'style'       => 'no-boxes',
			'columns'     => 1,
			'icon_url'    => 'dashicons-admin-generic',
		];
	}

	function settingChienDich()
	{
		return [
			'id'          => 'chiendich',
			'menu_title'  => __('Chiến dịch tiêu biểu', 'novanet'),
			'option_name' => 'chiendich',
			'position'    => 23,
			'parent'      => 'themes.php',
			'style'       => 'no-boxes',
			'columns'     => 1,
			'icon_url'    => 'dashicons-admin-generic',
		];
	}

	function settingMangLuoikh()
	{
		return [
			'id'          => 'mangluoi',
			'menu_title'  => __('Mạng lưới KH', 'novanet'),
			'option_name' => 'mangluoi',
			'position'    => 22,
			'parent'      => 'themes.php',
			'style'       => 'no-boxes',
			'columns'     => 1,
			'icon_url'    => 'dashicons-admin-generic',
		];
	}
	function settingFormCase()
	{
		return [
			'id'          => 'formcase',
			'menu_title'  => __('Form nhận casestudy', 'novanet'),
			'option_name' => 'formcase',
			'position'    => 21,
			'parent'      => 'themes.php',
			'style'       => 'no-boxes',
			'columns'     => 1,
			'icon_url'    => 'dashicons-admin-generic',
		];
	}
}
