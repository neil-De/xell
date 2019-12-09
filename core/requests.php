<?php
namespace Core;

Class Requests{
	public $url;

	public function __construct(){
		$this->url = $_SERVER['REQUEST_URI'];
	}

}
