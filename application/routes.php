<?php


// This is the index page. The first route.
Route::set( '' , function() {
	View::make('index');
});

// This is a test route, leading to an about page.
Route::set( 'about' , function() {
	View::make( 'about' );
});