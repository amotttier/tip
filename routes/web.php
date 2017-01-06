<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::auth();
Route::get('/logout','Auth\LoginController@logout');
Route::get('/', 'HomeController@index');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/calendrier','PageCalendrierController@index');
    Route::get('/bibliotheque','PageBibliothequeController@index');
    //Admin Routes
    Route::group(['middleware' => 'admin'], function () {
    /* Users Routes */
    Route::get('/user','PageUserController@index');
    Route::get('/user/create','PageUserController@create');
    Route::post('/user/create','UserController@create');
    Route::get('/user/{id}/edit','PageUserController@edit');
    Route::post('/user/{id}/edit','UserController@edit');

    /* Classes Routes */
    Route::get('/classe','PageClasseController@index');
    Route::get('/classe/create','PageClasseController@create');
    Route::post('/classe/create','ClasseController@create');
    });
});
