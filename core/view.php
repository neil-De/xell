<?php 

Class View {

	function __construct() {

	}

	public function render($name) {
		require 'application/view/' . $name . '.php';
	}
}