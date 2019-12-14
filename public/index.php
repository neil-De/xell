<?php

define( 'BASEDIR', '/' );
define( 'CORE', './core/' );

// The array 'Routes' stores all of the valid routes, you can add
// new routes by editing the file 'application/route.php'.
$Routes = array();

/*
 * By including application/route.php we get access to the $Routes
 * array containing all of the valid routes for our app.
*/
require_once( './application/routes.php' );

// FUTURE: Let's use autoloader here!
// This is alternative for autoloader in composer
// Since this is a deprecated class, please use below
function __autoload($class_name) {
	require_once './core/' . $class_name . '.php';
}

$app = new Bootstrap();
$app->run();

?>