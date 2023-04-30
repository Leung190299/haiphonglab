<?php

namespace HPlab\fields;

class FieldCategory
{
	public	function __construct()
	{
		$this->init();
	}
	public function init()
	{
		acf_add_local_field_group(
			[
				'key' => 'fieldCategory',
				'title' => 'Ảnh banner danh mục',
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
							'param' => 'taxonomy',
							'operator' => '==',
							'value' => 'category',
						]
					]
				],
				'fields' => [
					[
						'key' => 'bannerCategory',
						'label' => 'Ảnh banner ',
						'name' => 'bannerCategory',
						'type' => 'image',
						'return_format' => 'id',
						'library' => 'all',
						'preview_size' => 'medium',
					],
				]
			]
		);
	}
}
