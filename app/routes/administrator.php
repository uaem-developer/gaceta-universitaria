<?php


Route::get('admin/', ['as' => 'admin', 'uses' => 'HomeController@index']);

Route::post('admin/login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::get('admin/sign-up', ['as' => 'sign_up', 'uses' => 'HomeController@signUp']);
Route::post('admin/sign-up', ['as' => 'register', 'uses' => 'UsersController@register']);


Route::get('admin/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

Route::get('admin/profile', ['as' => 'admin_profile', 'uses' => 'UsersController@profile']);

Route::get('admin/pass', ['as' => 'change_password', 'uses' => 'UsersController@remindPassword']);

/**
 * Posts
 */
Route::get('admin/posts',         ['as' => 'admin_posts', 'uses' => 'PostsController@index']);
Route::get('admin/posts/add',     ['as' => 'admin_post_create', 'uses' => 'PostsController@create']);
Route::post('admin/posts/add',    ['as' => 'admin_post_store', 'uses' => 'PostsController@store']);
Route::get('admin/posts/edit/{post_id}',    ['as' => 'admin_post_edit', 'uses' => 'PostsController@edit']);
Route::put('admin/posts/edit/{post_id}',   ['as' => 'admin_post_update', 'uses' => 'PostsController@update']);

/**
 * Sections
 */
Route::get('admin/sections',         ['as' => 'admin_sections', 'uses' => 'SectionsController@index']);
Route::get('admin/sections/add',     ['as' => 'admin_section_create', 'uses' => 'SectionsController@create']);
Route::post('admin/sections/add',    ['as' => 'admin_section', 'uses' => 'SectionsController@store']);
Route::get('admin/sections/edit/{section_id}',    ['as' => 'admin_section_edit', 'uses' => 'SectionsController@edit']);
Route::put('admin/sections/edit/{section_id}',   ['as' => 'admin_section_update', 'uses' => 'SectionsController@update']);