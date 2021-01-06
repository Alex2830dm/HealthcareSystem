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

Route::get('/',                 function () { return view('index.welcome');             });
Route::get('quienes-somos',     function () { return view('index.quienes-somos');       });
Route::get('unete-hs',          function () { return view('index.unete-hs');            });
Route::get('primeros-auxilios', function () { return view('index.primeros-auxilios');   });
Route::get('emergencias',       'Usuarios@emergencias');
Route::get('doctores',          'Usuarios@doctores');

Auth::routes();
Route::group(['prefix' => 'usuarios'], function () {
    Route::get('/', function(){return view('welcome');})->middleware('auth');
    Route::get('home', 'HomeController@index')->name('home')->middleware('auth');//pagina principal
    Route::get('quienes-somos', function () { return view('usuarios.quienes-somos'); })->middleware('auth');
    Route::get('unete-hs', function () { return view('usuarios.unete-hs'); })->middleware('auth');
    Route::get('primeros-auxilios', function () { return view('usuarios.primeros-auxilios'); })->middleware('auth');

    Route::get('emergencias', function(){return view('servicios.emergencias');})->middleware('auth'); //pagina del dorectorio de doctores
    Route::get('listaemergencias', 'EmergenciasController@index')->middleware('auth'); //ruta para usar vue del directorio emergencias

    Route::get('doctores', 'DoctoresController@list')->middleware('auth'); //ruta para usar vue del directorio emergencias
    //Route::get('detalles/{id}', 'DoctoresController@show')->middleware('auth');
    //Route::get('agenda-cita/{id}', 'CitasController@cita')->middleware('auth');
    Route::post('registrar', 'CitasController@store')->middleware('auth');
    
    Route::get('historial/{id}', 'UsersContoller@index')->middleware('auth');
    Route::get('detallescita/{id}', 'UsersContoller@show')->middleware('auth');
    
    Route::get('modificar/{id}', 'UsersContoller@edit')->middleware('auth');
    Route::patch('update/{id}', 'UsersContoller@update')->middleware('auth');//modificar datos
    
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function(){return view('administrador.welcome');})->middleware('auth');
    Route::get('home', 'HomeController@index')->name('home')->middleware('auth');//pagina principal
    Route::get('quienes-somos', function () { return view('administrador.quienes-somos'); })->middleware('auth');
    Route::get('unete-hs', function () { return view('administrador.unete-hs'); })->middleware('auth');
    Route::get('primeros-auxilios', function () { return view('administrador.primeros-auxilios'); })->middleware('auth');

    Route::get('emergencias', function(){return view('administrador.emergencias');})->middleware('auth'); //pagina del directorio de emergencias
    Route::get('listaemergencias', 'EmergenciasController@index')->middleware('auth'); //ruta para usar vue del directorio emergencias
    Route::post('insertaremer', 'EmergenciasController@store'); //Ruta para registrar emergencias a travez de vue
    Route::put('editemer/{id}', 'EmergenciasController@update');
    
    Route::get('doctores', function(){return view('administrador.doctores');})->middleware('auth');
    Route::get('listadoctores', 'DoctoresController@index')->middleware('auth');    
    Route::post('insertdocs', 'DoctoresController@store')->middleware('auth');
    Route::put('editdocs/{id}', 'DoctoresController@update')->middleware('auth');
    Route::delete('deletedoc/{id}', 'DoctoresController@destroy');
});
Route::group(['prefix' => 'doctores'], function () {
    Route::get('/', function(){return view('administrador.welcome');})->middleware('auth');
});