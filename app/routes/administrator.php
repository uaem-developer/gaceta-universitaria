<?php
Route::group(['before' => 'guest'], function () {

    Route::get('admin/', ['as' => 'admin', 'uses' => 'HomeController@admin']);

    Route::post('admin/login', ['as' => 'login', 'uses' => 'AuthController@login']);
    Route::get('admin/sign-up', ['as' => 'sign_up', 'uses' => 'HomeController@signUp']);
    Route::post('admin/sign-up', ['as' => 'register', 'uses' => 'UsersController@register']);
});


Route::group(['before' => 'auth'], function () {

    Route::get('admin/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

    Route::get('admin/profile', ['as' => 'admin_profile', 'uses' => 'UsersController@profile']);

    Route::get('admin/pass', ['as' => 'change_password', 'uses' => 'UsersController@remindPassword']);

    /**
     * Posts
     */
    Route::get('admin/posts', ['as' => 'admin_posts', 'uses' => 'PostsController@index']);
    Route::get('admin/posts/add', ['as' => 'admin_post_create', 'uses' => 'PostsController@create']);
    Route::post('admin/posts/add', ['as' => 'admin_post_store', 'uses' => 'PostsController@store']);
    Route::get('admin/posts/edit/{post_id}', ['as' => 'admin_post_edit', 'uses' => 'PostsController@edit']);
    Route::put('admin/posts/edit/{post_id}', ['as' => 'admin_post_update', 'uses' => 'PostsController@update']);
    Route::get('admin/posts/delete/{post_id}', ['as' => 'admin_post_delete', 'uses' => 'PostsController@destroy']);

    /**
     * Sections
     */
    Route::get('admin/secciones', ['as' => 'admin_sections', 'uses' => 'SectionsController@index']);
    Route::get('admin/secciones/add', ['as' => 'admin_section_create', 'uses' => 'SectionsController@create']);
    Route::post('admin/secciones/add', ['as' => 'admin_section_store', 'uses' => 'SectionsController@store']);
    Route::get('admin/secciones/edit/{section_id}', ['as' => 'admin_section_edit', 'uses' => 'SectionsController@edit']);
    Route::put('admin/secciones/edit/{section_id}', ['as' => 'admin_section_update', 'uses' => 'SectionsController@update']);

});