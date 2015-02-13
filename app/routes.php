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

Route::get('{section_url}', ['as' => 'section', 'uses' => 'SectionsController@show']);

Route::get('{section_url}/{post_url}/{id}', ['as' => 'post', 'uses' => 'PostsController@show']);

Route::post('buscar', ['as' => 'search', 'uses' => 'HomeController@search']);
