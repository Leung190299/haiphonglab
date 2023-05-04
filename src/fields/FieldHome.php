<?php

namespace HPlab\fields;

class FieldHome
{
	public function __construct()
	{
		$this->banner();
		$this->test();
		$this->partner();
	}

	public function banner()
	{
		acf_add_local_field_group(
			[
				'key' => 'fieldBanner',
				'title' => 'Banner',
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
				'show_in_rest' => 0,
				'location' => [
					[
						[
							'param' => 'page_template',
							'operator' => '==',
							'value' => 'page-templates/home-page.php',
						]
					]
				],
				'fields' => [
					[
						'key' => 'banner',
						'name' => 'banner',
						'label' => 'Chỉnh sửa banner',
						'instructions' => 'Thêm và chỉnh sửa banner trang chủ',
						'type' => 'repeater',
						'layout' => 'row',
						'button_label' => 'Thêm banner',
						'sub_fields' => [
							[
								'key' => 'image',
								'label' => 'Image',
								'name' => 'image',
								'type' => 'image',
								'return_format' => 'id',
								'library' => 'all',
								'preview_size' => 'medium',
								'parent_repeater' => 'banner',
							],
							[
								'key' => 'link',
								'label' => 'Link banner',
								'name' => 'link',
								'type' => 'text',
								'parent_repeater' => 'fieldGroupInfo',
								'default_value' => '#'
							]
						]
					]
				]
			]
		);
	}
	public function test()
	{
		acf_add_local_field_group([
			'key' => 'test',
			'title' => 'Chỉnh sửa phần xét nghiệm',
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
			'show_in_rest' => 0,
			'location' => [
				[
					[
						'param' => 'page_template',
						'operator' => '==',
						'value' => 'page-templates/home-page.php',
					]
				]
			],
			'fields' => [
				[
					'key' => 'titleGetTest',
					'label' => 'Tiêu đề lấy xét nghiệm',
					'name' => 'titleGetTest',
					'type' => 'text',
					'default_value'=>'Xem kết quả xét nghiệm'
				],
				[
					'key' => 'titleSetTest',
					'label' => 'Tiêu đề đặt lịch',
					'name' => 'titleSetTest',
					'type' => 'text',
					'default_value'=>'Đặt lịch hẹn'
				],
				[
					'key' => 'codeFormTest',
					'label' => 'code form đăt lịch',
					'name' => 'codeFormTest',
					'type' => 'text',
				]

			]
		]);
	}
	public function partner(){
		acf_add_local_field_group([
			'key' => 'partner',
			'title' => 'Các đối tác ',
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
			'show_in_rest' => 0,
			'location' => [
				[
					[
						'param' => 'page_template',
						'operator' => '==',
						'value' => 'page-templates/home-page.php',
					]
				]
			],
			'fields' => [
				[
					'key' => 'partners',
					'name' => 'partners',
					'label' => 'Các đối tác',
					'instructions' => 'Thêm và chỉnh sửa các đối tác',
					'type' => 'repeater',
					'layout' => 'row',
					'button_label' => 'Thêm đối tác',
					'sub_fields' => [
						[
							'key' => 'image',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'return_format' => 'id',
							'library' => 'all',
							'preview_size' => 'medium',
							'parent_repeater' => 'partners',
						],
						[
							'key' => 'link',
							'label' => 'Link đối tác',
							'name' => 'link',
							'type' => 'text',
							'parent_repeater' => 'partners',
							'default_value' => '#'
						]
					]
				]


			]
		]);
	}
}
