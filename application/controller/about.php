<?php

Class About extends Controller {
	
	public function __construct() {

		// instantiate base controller
		parent::__construct();
		echo "This is about <br>";
		
	}

	public function team($arg = false) {
		echo 'working with the team <br>';
		echo 'Team Member: ' . $arg; 
	}
}