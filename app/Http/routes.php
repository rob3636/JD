<?php

//Main Page
Route::get('/', 'mainController@index');

//Admin Page
Route::get('/admin', 'HomeController@index');
Route::auth();

//Hero Page
Route::get('/admin/hero', 'heroController@index');
Route::put('/admin/hero', 'heroController@update');

//Menu Page
Route::get('/admin/menu', 'menuController@index');
Route::get('/admin/menu/new', 'menuController@create');
Route::put('/admin/menu/create', 'menuController@store');
Route::get('/admin/menu/{id}' , 'menuController@show');
Route::put('/admin/menu/{id}' , 'menuController@update');
Route::get('/admin/menu/{id}/delete' , 'menuController@destroy');


//Users Page
Route::get('/admin/users', 'usersController@index');
Route::get('/admin/users/newuser', 'usersController@create');
Route::post('/admin/users/newuser/create', 'usersController@store');
Route::get('/admin/users/{id}/delete', 'usersController@destroy');


//Gallery
Route::get('/gallery', 'mainController@gallery');
Route::put('/admin/gallery', 'galleryController@store');
Route::get('/admin/gallery', 'galleryController@index');
Route::get('/admin/gallery/{id}/delete', 'galleryController@destroy');