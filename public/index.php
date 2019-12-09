<?php
	define( 'WEBROOT', str_replace('index.php','',$_SERVER['SCRIPT_NAME']) );	
	define(	'ROOT', str_replace('index.php','', $_SERVER['SCRIPT_FILENAME']) );
 	
 	require(ROOT.'vendor/autoload.php');
 	require(ROOT.'core/dispatcher.php');
	
	$dispatcher = new Dispatcher();
	$dispatcher->dispatch(); 	