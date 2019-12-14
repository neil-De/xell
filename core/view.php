<?php 

Class View {

	function __construct() {

	}

	public function render($name) {

		require 'application/view/' . $name . '.php';

	}

	public static function make($view) {

		if ( Route::isRouteValid() ) {
			// Create the view and the view controller.
			// This will cause error when file is not exist so let's try to catch!
			// require_once( '/application/controller/'.$view.'.php' );
			require_once( './application/view/' . $view . '.php' );

			// Check if the controller file exists
			try {
				// if (! @include_once( '/application/controller/'.$view.'.php' ) // @ - to suppress warnings, 
				// you can also use error_reporting function for the same purpose which may be a better option
				// throw new Exception ('functions.php does not exist');
				// or 
				if ( !file_exists( './application/controller/' . $view . '.php' ) )
					throw new Exception ($view . '.php does not exist');
				else
					require_once( './application/controller/' . $view . '.php' ); 
			} catch( Exception $e ) {    
				echo "Controller file : " . $e->getMessage();
				echo "<br>Code : " . $e->getCode();
			}

			return 1;
		}

	}
}