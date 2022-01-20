<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/contactos', 'ContactosController@index')->name('contactos.index');
Route::get('/contactos/create', 'ContactosController@create')->name('contactos.create');

Route::get('/contactos/{contactos}/editar', 'ContactosController@edit')->name('contactos.edit');
Route::patch('/contactos/{contactos}', 'ContactosController@update')->name('contactos.update');


Route::post('/contactos', 'ContactosController@store')->name('contactos.store');
Route::get('/contactos/{contactos}', 'ContactosController@show')->name('contactos.show');

Route::delete('/contactos/{contactos}', 'ContactosController@destroy')->name('contactos.destroy');


Auth::routes();

Auth::routes(['register' => true]);
