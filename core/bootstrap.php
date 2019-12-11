<?php

Class Bootstrap {

	public function __construct() {

		$url = (isset($_GET['url'])) ? $_GET['url'] : 'index';
		$url = rtrim($url, '/');
		$url = explode("/", $url);
		// $url_segment = array_slice($url_segment, 1); // This remove the first segment "0";
		// print_r($url_segment);

		// $controller_segment = (isset($url_segment[0]) ? $url_segment[0]:'');
		// $method_segment = (isset($url_segment[1])?$url_segment[1]:'');
		// $paramater_segment = (isset($url_segment[2])?$url_segment[2]:'');

		// This file if exists 
		$file = 'application/controller/' . $url[0] . '.php';
		if( file_exists($file) ) {
			require $file;
		} else {
			echo "The file: $url[0].php does not exists";
		}

		$controller = new $url[0];

		if( isset($url[2]) ) {
			$controller->{ $url[1] }( $url[2] );
		} else {
			if( isset($url[1]) ) {
				$controller->{ $url[1] }();
			}
		}

		// if( isset($route->controller_segment) && class_exists($controller_name) ) {
		// $controller = new $controller_name;

		// 	if( isset( $route->method_segment ) ) {
		// 		$methods_list = array_map("strtolower",get_class_methods($controller));
		// 		if(in_array($route->method_segment,$methods_list)){
		// 			print_r($controller->{$route->method_segment}($route->parameter_segment));
		// 		}
		// 	}
		// }		
	}

}