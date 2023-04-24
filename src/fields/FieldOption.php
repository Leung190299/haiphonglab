<?php

namespace HPlab\fields;

class FieldOption
{
	public	function __construct()
	{
		$this->initOptionPage();
		$this->settingFieldOptionPage();
	}

	public function initOptionPage()
	{
		acf_add_options_page([
			'page_title'    => 'Theme General Settings',
			'menu_title'    => 'Theme Settings',
			'menu_slug'     => 'settingPage',
			'capability'    => 'edit_posts',
			'redirect'      => false
		]);
		acf_add_options_page([
			'page_title'    => 'Header setting',
			'menu_title'    => 'Header',
			'parent_slug'   => 'settingPage',
			'menu_slug'     => 'header',
		]);
		acf_add_options_page([
			'page_title'    => 'Footer seting',
			'menu_title'    => 'Footer',
			'parent_slug'   => 'settingPage',
			'menu_slug'     => 'footer',
		]);
	}

	public function settingFieldOptionPage()
	{

		acf_add_local_field_group([
			'key' => 'fieldOptionPageFooter',
			'title' => 'Setting footer',
			'fields' => [
				[
					'key' => 'tab',
					'label' => 'Thông tin liên hệ',
					'type' => 'tab',
					'instructions' => '',
					'placement' => 'left',

				],
				[
					'key' => 'infoGroup',
					'label' => 'Thông tin',
					'name' => 'infoGroup',
					'type' => 'repeater',
					'instructions' => 'Thông tin liên hệ cho của website',
					'layout' => 'row',
					'max' => 4,
					'button_label' => 'Thêm thông tin',
					'sub_fields' => [
						[
							'key' => 'subFieldIcon',
							'label' => 'Icon',
							'name' => 'icon',
							'type' => 'image',
							'return_format' => 'id',
							'library' => 'all',
							'preview_size' => 'medium',
							'parent_repeater' => 'fieldGroupInfo',
						],
						[
							'key' => 'subfieldTitle',
							'label' => 'Title',
							'name' => 'titleInfo',
							'type' => 'text',
							'parent_repeater' => 'fieldGroupInfo',
						],
						[
							'key' => 'subFieldValue',
							'type' => 'text',
							'name' => 'value',
							'label' => 'Value',
							'parent_repeater' => 'fieldGroupInfo',
						],
						[
							'key' => 'subFieldLink',
							'type' => 'text',
							'name' => 'link',
							'label' => 'Value',
							'default_value' => '#',
							'parent_repeater' => 'fieldGroupInfo',
						],
					],
				],
				[
					'key' => 'tabSevice',
					'label' => 'Dịch vụ',
					'type' => 'tab',
					'placement' => 'left',
				],
				[
					'key' => 'footer',
					'name' => 'footer',
					'max' => 4,
					'type' => 'flexible_content',
					'button_label' => ' Chọn layout',
					'layouts' => [
						'layout1' => [
							'key' => 'layout1',
							'name' => 'layout1',
							'label' => 'Nội dung chữ có gắn link',
							'display' => 'row',
							'sub_fields' => [
								[
									'key' => 'labelLayout1',
									'name' => 'labelLayout1',
									'label' => 'Tiêu đề nội dung',
									'type' => 'text'
								],
								[
									'key' => 'groupLink',
									'name' => 'groupLink',
									'type' => 'repeater',
									'layout' => 'row',
									'button_label' => 'Thêm link',
									'sub_fields' => [
										[
											'key' => 'title',
											'name' => 'title',
											'label' => 'Title',
											'type' => 'text'
										],
										[
											'key' => 'link',
											'name' => 'link',
											'label' => 'Link',
											'default_value' => '#',
											'type' => 'text'
										]
									]
								],


							]
						],
						'layout2' => [
							'key' => 'layout2',
							'name' => 'layout2',
							'label' => 'Trang',
							'display' => 'row',
							'sub_fields' => [
								[
									'key' => 'labelLayout2',
									'name' => 'labelLayout2',
									'label' => 'Tiêu đề nội dung',
									'type' => 'text'
								],
								[
									'key' => 'page',
									'label' => 'Chọn Trang',
									'name' => 'pages',
									'type' => 'post_object',

									'post_type' => [
										0 => 'page',
									],
									'taxonomy' => '',
									'return_format' => 'id',
									'multiple' => 1,

								],

							]
						],
						'layout3' => [
							'key' => 'layout3',
							'name' => 'layout3',
							'label' => 'code form',
							'layout' => 'row',
							'sub_fields' => [
								[
									'key' => 'labelLayout3',
									'name' => 'labelLayout3',
									'label' => 'Tiêu đề nội dung',
									'type' => 'text'
								],
								[
									'key' => 'codeForm',
									'name' => 'codeForm',
									'label' => 'Code Form',
									'type' => 'text'
								],

							]
						]
					]
				],
				[
					'key' => 'tabContact',
					'label' => 'Thông tin phòng khám',
					'type' => 'tab',
					'placement' => 'left',
				],
				[
					'key' => 'contact',
					'name' => 'contact',
					'label' => 'Thông tin',
					'type' => 'wysiwyg',
					'media_upload' => 0,
				],
				[
					'key' => 'map',
					'name' => 'map',
					'label' => 'Bản đồ',
					'type' => 'textarea',

				]
			],
			'location' => [
				[
					[
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'footer',
					],
				],
			],
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
			'show_in_rest' => 0,
		]);
	}
}
