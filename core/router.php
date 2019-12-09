<?php

namespace Core;

use Core\Requests;

Class Router extends Requests{
	
	public $urlSegment;
	public $controllerSegment;
	public $paramSegment;

	public function __construct(){
		
		parent::__construct();
		
		$urlSegment = explode("/", $this->url);
		$urlSegment = array_slice($urlSegment, 1); 
		
		$this->controllerSegment = (isset($urlSegment[0])?$urlSegment[0]:'');
		$this->methodSegment = (isset($urlSegment[1])?$urlSegment[1]:'');
		$this->paramSegment = array_slice($urlSegment, 2); 
	}	
    
    public static function Route(){
    	
    }
}