<?php

Class Index extends Controller {
	
	public function __construct() {

		// instantiate base controller
		parent::__construct();

		echo "This index";

		$this->make->title = 'TESTTTTT';
		$this->view->render( 'index' );
		// View::render('index');

	}



}

?>