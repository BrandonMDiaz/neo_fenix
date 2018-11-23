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

// usuarios
Route::get('/user/create', 'UsersController@create');
Route::get('/user/edit', 'UsersController@modUser');
Route::get('/user/delete', 'UsersController@delUser');
Route::get('/user/upload', 'UsersController@upload');

Route::post('/user', 'UsersController@store');
Route::put('/user/{user}', 'UsersController@update');
Route::delete('/user/{user}', 'UsersController@destroy');

// plan

Route::get('/plan', 'PlanAnualController@index');
Route::get('/plan/docencia', 'PlanAnualController@docencia');
Route::get('/plan/investigacion', 'PlanAnualController@investigacion');
Route::get('/plan/tutoria', 'PlanAnualController@tutoria');
Route::get('/plan/gestion', 'PlanAnualController@gestion');
Route::get('/plan/difusion', 'PlanAnualController@difusion');
Route::get('/plan/superacion', 'PlanAnualController@superacion');
Route::get('/plan/horas', 'PlanAnualController@horas');

Route::post('/plan/docencia', 'PlanAnualController@docenciaCreate');
Route::post('/plan/investigacion', 'PlanAnualController@investigacionCreate');
Route::post('/plan/tutoria', 'PlanAnualController@tutoriaCreate');
Route::post('/plan/gestion', 'PlanAnualController@gestionCreate');
Route::post('/plan/difusion', 'PlanAnualController@difusionCreate');
Route::post('/plan/superacion', 'PlanAnualController@superacionCreate');
Route::post('/plan/horas', 'PlanAnualController@horasCreate');

Route::put('/plan/docencia', 'PlanAnualController@docenciaEdit');
Route::put('/plan/investigacion', 'PlanAnualController@investigacionEdit');
Route::put('/plan/tutoria', 'PlanAnualController@tutoriaEdit');
Route::put('/plan/gestion', 'PlanAnualController@gestionEdit');
Route::put('/plan/difusion', 'PlanAnualController@difusionEdit');
Route::put('/plan/superacion', 'PlanAnualController@superacionEdit');
Route::put('/plan/horas', 'PlanAnualController@horasCreate');

// informe

Route::get('/plan', 'PlanAnualController@index');
Route::get('/plan/docencia', 'PlanAnualController@docencia');
Route::get('/plan/investigacion', 'PlanAnualController@investigacion');
Route::get('/plan/tutoria', 'PlanAnualController@tutoria');
Route::get('/plan/gestion', 'PlanAnualController@gestion');
Route::get('/plan/difusion', 'PlanAnualController@difusion');
Route::get('/plan/superacion', 'PlanAnualController@superacion');
Route::get('/plan/horas', 'PlanAnualController@horas');

Route::post('/plan/docencia', 'PlanAnualController@docenciaCreate');
Route::post('/plan/investigacion', 'PlanAnualController@investigacionCreate');
Route::post('/plan/tutoria', 'PlanAnualController@tutoriaCreate');
Route::post('/plan/gestion', 'PlanAnualController@gestionCreate');
Route::post('/plan/difusion', 'PlanAnualController@difusionCreate');
Route::post('/plan/superacion', 'PlanAnualController@superacionCreate');
Route::post('/plan/horas', 'PlanAnualController@horasCreate');

Route::put('/plan/docencia', 'PlanAnualController@docenciaEdit');
Route::put('/plan/investigacion', 'PlanAnualController@investigacionEdit');
Route::put('/plan/tutoria', 'PlanAnualController@tutoriaEdit');
Route::put('/plan/gestion', 'PlanAnualController@gestionEdit');
Route::put('/plan/difusion', 'PlanAnualController@difusionEdit');
Route::put('/plan/superacion', 'PlanAnualController@superacionEdit');
Route::put('/plan/comentarios', 'PlanAnualController@horasCreate');
Route::put('/plan/horas', 'PlanAnualController@horasCreate');

//configuracion

//lineas_de_investigacion

//Carrera

//Division

//Materia


// Route::resource('division','DivisionsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
