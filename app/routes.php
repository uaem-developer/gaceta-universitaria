<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

require(__DIR__ . '/routes/administrator.php');


Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/{section_url}', ['as' => 'section', 'uses' => 'SectionsController@show']);

/**
Route::get('/docencia', 		['as' => 'docencia', 'uses' => 'SectionsController@show']);
Route::get('/investigacion', 	['as' => 'investigacion', 'uses' => 'SectionsController@show']);
Route::get('/extencion', 		['as' => 'extencion', 'uses' => 'SectionsController@show']);
Route::get('/anuncios', 		['as' => 'anuncios', 'uses' => 'SectionsController@show']);
Route::get('/colaboraciones', 	['as' => 'colaboraciones', 'uses' => 'SectionsController@show']);
Route::get('/galeria-de-fotos', ['as' => 'galeria', 'uses' => 'SectionsController@show']);
*/

Route::get('/{section_url}/{post_url}/{id}', ['as' => 'post', 'uses' => 'PostsController@show']);


Route::get('seccion', function()
{
	return View::make('section');
});


