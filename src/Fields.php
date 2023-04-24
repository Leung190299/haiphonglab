<?php

namespace HPlab;

use HPlab\fields\FieldHome;
use HPlab\fields\FieldOption;

class Fields
{

	public function __construct()
	{
		new FieldOption;
		new FieldHome;
	}
}
