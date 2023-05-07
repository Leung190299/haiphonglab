<?php
namespace HPlab\fields;

class FieldPostType{

	public function __construct()
	{
		$this->postTypeAnalysis();
	}

	public function postTypeAnalysis(){
		acf_add_local_field_group([
			'key' => 'analysis',
			'title' => 'Thông tin phiếu',
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
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'analysis',
					]
				]
			],
			'fields' => [
				[
					'key' => 'analysisPhone',
					'label' => 'số điện thoại ',
					'name' => 'analysisPhone',
					'type' => 'text',
				],
				[
					'key' => 'analysisId',
					'label' => 'mã bệnh nhân',
					'name' => 'analysisId',
					'type' => 'text',
				],
				[
					'key' => 'analysisFile',
					'label' => 'Phiếu kết quả',
					'name' => 'analysisFile',
					'type' => 'file',
					'return_format' => 'url',
				],


			]
		]);
	}
}
?>