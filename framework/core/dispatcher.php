<?php

use Core\Router;
use Core\BaseController;

class Dispatcher{
	
	public function dispatch(){
		$route = new Router();
		$controllerName = "\Controllers\\".ucfirst($route->controllerSegment);

		if(isset($route->controllerSegment) && class_exists($controllerName)){
			$controller = new $controllerName;
			if(isset($route->methodSegment)){
				$methodsList = array_map("strtolower",get_class_methods($controller));
				if(in_array($route->methodSegment,$methodsList)){
					print_r($controller->{$route->methodSegment}($route->paramSegment));
				}
			}
		}		
	}

}

