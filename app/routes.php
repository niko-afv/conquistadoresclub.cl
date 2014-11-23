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


/****************
 * PUBLIC
 ***************/
Route::get('/', 'HomeController@showWelcome');
Route::get('/recursos','RecursosViewController@index');
Route::get('/recursos/{id_recurso}','RecursosViewController@showRecursos');
Route::get('/recursos/ver_recurso/{id_recurso}','RecursosViewController@showSingleRecurso');
Route::get('/recursos/recursos_varios/', 'RecursosViewController@recursos_varios');
Route::get('/login', 'LoginController@showLogin');
Route::get('/blog', 'BlogController@listar');

Route::post('login', 'LoginController@doLogin');
Route::get('logout', 'LoginController@doLogOut');



/*Route::get('/formulario', function()
{
	return View::make('formulario');
});
/*Route::get('/crear_especialidad', 'CrearEspecialidadesController@index');
Route::post('/guardar_especialidad', 'CrearEspecialidadesController@guardar');
Route::get('/crear_requisito', 'CrearEspecialidadesController@index2');
Route::post('/guardar_requisito', 'CrearEspecialidadesController@guardar2');
Route::get('/get_requisitos', 'CrearEspecialidadesController@get_requisitos');
*/




/****************
 * PRIVATE
 ***************/

Route::group(array('before' => 'auth'), function()
{
    Route::get('/dashboard', 'DashboardController@showDashboard');
    Route::get('/admin/perfil', 'DashboardPerfilController@showPerfil');
    
    Route::get('/admin/especialidad/ver/{id_especialidad}', 'DashboardEspecialidadesController@ver');
    Route::get('/admin/especialidad/listar', 'DashboardEspecialidadesController@listar');
    Route::get('/admin/especialidad/crear', 'DashboardEspecialidadesController@crear');
    Route::post('/admin/especialidad/guardar', 'DashboardEspecialidadesController@guardar');
    Route::post('/admin/especialidad/{id_especialidad}/requisito/guardar', 'DashboardEspecialidadesController@guardarRequisito');
    Route::post('admin/especialidad/cargarImg','DashboardEspecialidadesController@cargarImg');

    Route::get('/admin/recursos/ver/{id_especialidad}', 'DashboardRecursosController@ver');
    Route::get('/admin/recursos/listar', 'DashboardRecursosController@listar');
    Route::get('/admin/recursos/crear', 'DashboardRecursosController@crear');
    Route::post('/admin/recursos/guardar', 'DashboardRecursosController@guardar');
    Route::post('admin/recursos/cargarImg','DashboardRecursosController@cargarImg');
    
    Route::get('/admin/blog/ver/{id_post}', 'DashboardBlogController@ver');
    Route::get('/admin/blog/crear', 'DashboardBlogController@crear');
    Route::post('/admin/blog/guardar', 'DashboardBlogController@guardar');
    Route::post('admin/blog/cargarImg','DashboardBlogController@cargarImg');
});










App::missing(function($exception)
{
    return Response::view('backend/404', array(), 404);
    
});