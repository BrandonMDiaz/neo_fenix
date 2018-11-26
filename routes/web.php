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

Route::get('/informe', 'InformesController@index');
Route::get('/informe/docencia', 'InformesController@docencia');
Route::get('/informe/investigacion', 'InformesController@investigacion');
Route::get('/informe/tutoria', 'InformesController@tutoria');
Route::get('/informe/gestion', 'InformesController@gestion');
Route::get('/informe/difusion', 'InformesController@difusion');
Route::get('/informe/superacion', 'InformesController@superacion');
Route::get('/informe/horas', 'InformesController@horas');

Route::post('/informe/docencia', 'InformesController@docenciaCreate');
Route::post('/informe/investigacion', 'InformesController@investigacionCreate');
Route::post('/informe/tutoria', 'InformesController@tutoriaCreate');
Route::post('/informe/gestion', 'InformesController@gestionCreate');
Route::post('/informe/difusion', 'InformesController@difusionCreate');
Route::post('/informe/superacion', 'InformesController@superacionCreate');
Route::post('/informe/horas', 'InformesController@horasCreate');

Route::put('/informe/docencia', 'InformesController@docenciaEdit');
Route::put('/informe/investigacion', 'InformesController@investigacionEdit');
Route::put('/informe/tutoria', 'InformesController@tutoriaEdit');
Route::put('/informe/gestion', 'InformesController@gestionEdit');
Route::put('/informe/difusion', 'InformesController@difusionEdit');
Route::put('/informe/superacion', 'InformesController@superacionEdit');
Route::put('/informe/comentarios', 'InformesController@horasCreate');
Route::put('/informe/horas', 'InformesController@horasCreate');

//configuracion
Route::get('/configuracion', 'Configuracion@index');
Route::put('/configuracion', 'Configuracion@modify');

//lineas_de_investigacion
Route::get('/lineas', 'lineas_de_investigacion@index');
Route::post('/lineas', 'lineas_de_investigacion@index');
Route::put('/lineas', 'lineas_de_investigacion@index');
Route::delete('/lineas', 'lineas_de_investigacion@index');

//Carrera
Route::get('/lineas', 'lineas_de_investigacion@index');
Route::post('/lineas', 'lineas_de_investigacion@index');
Route::put('/lineas', 'lineas_de_investigacion@index');
Route::delete('/lineas', 'lineas_de_investigacion@index');

//Division
Route::get('/lineas', 'lineas_de_investigacion@index');
Route::post('/lineas', 'lineas_de_investigacion@index');
Route::put('/lineas', 'lineas_de_investigacion@index');
Route::delete('/lineas', 'lineas_de_investigacion@index');

//Materia
Route::get('/lineas', 'lineas_de_investigacion@index');
Route::post('/lineas', 'lineas_de_investigacion@index');
Route::put('/lineas', 'lineas_de_investigacion@index');
Route::delete('/lineas', 'lineas_de_investigacion@index');

// Route::resource('division','DivisionsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
