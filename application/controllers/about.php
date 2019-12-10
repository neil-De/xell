<?php

namespace Controllers;

use \Core\BaseController;

Class About extends BaseController{
	
	public function __construct(){
		
	}

	public function hobby($arg = false){
		echo "your are inside About Controller and hobby method<br>The return data is <br>";
		return $arg;
	}
}