<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.services');
});
// Route::get('/user/chargeUser','UsersController@chargeUser');
Route::post('/user', 'UsersController@store');


// usuarios
Route::get('/user/create', 'UsersController@create');
Route::get('/user/edit', 'UsersController@modUser');
Route::get('/user/delete', 'UsersController@delUser');
Route::get('/user/upload', 'UsersController@upload');

Route::put('/user/{user}', 'UsersController@update');
Route::delete('/user/{user}', 'UsersController@destroy');

// plan

Route::get('/plan/index', 'PlanAnualController@index');
Route::get('/plan/docencia', 'PlanAnualController@docencia');
Route::get('/plan/investigacion', 'PlanAnualController@investigacion');
Route::get('/plan/tutoria', 'PlanAnualController@tutoria');
Route::get('/plan/gestion', 'PlanAnualController@gestion');
Route::get('/plan/difusion', 'PlanAnualController@difusion');
Route::get('/plan/superacion', 'PlanAnualController@superacion');
Route::get('/plan/horas', 'PlanAnualController@horas');


// Route::resource('division','DivisionsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
