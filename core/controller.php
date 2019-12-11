<?php

Class Controller {

	public function __construct() {
		echo 'This is base controller';
		$this->view = new View();
	}
}