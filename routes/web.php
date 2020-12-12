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
    Route::get('quienes-somos', function () { return view('quienes-somos.index'); })->middleware('auth');
    Route::get('unete-hs', function () { return view('quienes-somos.informacion'); })->middleware('auth');
    Route::get('primeros-auxilios', function () { return view('servicios.index'); })->middleware('auth');  
    Route::get('doctores', function(){return view('doctores.index');})->middleware('auth'); //pagina del dorectorio de doctores    
    Route::get('listadoctores', 'DoctoresController@index')->middleware('auth'); //ruta para usar vue del directorio emergencias
    Route::get('emergencias', function(){return view('servicios.emergencias');})->middleware('auth'); //pagina del dorectorio de doctores    
    Route::get('listaemergencias', 'EmergenciasController@index')->middleware('auth'); //ruta para usar vue del directorio emergencias
    Route::get('agenda-cita/{id}', 'CitasController@cita')->middleware('auth');
    Route::post('registrar-cita', 'CitasController@store')->middleware('auth');
    Route::post('historial', 'CitasController@historial')->middleware('auth');
    Route::get('modificar/{id}', 'UsersContoller@edit')->middleware('auth');
    Route::patch('update/{id}', 'UsersContoller@update')->name('update')->middleware('auth');//modificar datos
    
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('emergencias', function(){return view('administrador.emergencias');})->middleware('auth'); //pagina del directorio de emergencias
    Route::get('listaemergencias', 'EmergenciasController@index')->middleware('auth'); //ruta para usar vue del directorio emergencias
    Route::post('insertaremer', 'EmergenciasController@store'); //Ruta para registrar emergencias a travez de vue
    Route::put('editemer/{id}', 'EmergenciasController@update');
    
    Route::get('doctores', function(){return view('administrador.doctores');})->middleware('auth');
    Route::get('listadoctores', 'DoctoresController@index')->middleware('auth');    
    Route::post('insertdocs', 'DoctoresController@store')->middleware('auth');
    Route::put('editdocs/{id}', 'DoctoresController@update')->middleware('auth');
});