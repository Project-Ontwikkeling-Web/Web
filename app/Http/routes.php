<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', 'HomeController@index');

    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/project/new', 'AdminController@create');
    Route::post('/admin/project/new', 'AdminController@create');

    //project routes
    Route::get('/project/{id}', 'AdminController@get');

    //fase routes
    Route::post('/fase/new', 'ProjectFaseController@create');
    Route::post('/fase/{fase_id}', 'ProjectFaseController@update');

    //media routes
    Route::post('/media/{fase_id}', 'ProjectMediaController@create');


    //JSON endpoints
    Route::get('/json/project/all', 'ProjectController@allJson');
    Route::get('/json/project/{project_id}', 'ProjectController@getProjectJson');
    Route::get('/json/media/all', 'ProjectMediaController@getJson');
    Route::get('/json/fases/all', 'ProjectFaseController@getJson');
    Route::get('/json/fases/{fase_id}', 'ProjectFaseController@getFaseJson');

});
