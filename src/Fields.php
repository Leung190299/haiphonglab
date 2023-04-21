<?php
namespace HPlab;

class Fields
{

	public function __construct()
	{
		$this->initOptionPage();
	}

	public function initOptionPage(){
		acf_add_options_page([
			'page_title'    => 'Theme General Settings',
			'menu_title'    => 'Theme Settings',
			'menu_slug'     => 'theme-general-settings',
			'capability'    => 'edit_posts',
			'redirect'      => false
		]);
	}

}
