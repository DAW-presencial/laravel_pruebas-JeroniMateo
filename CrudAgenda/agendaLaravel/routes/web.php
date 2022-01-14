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

Route::resource('contactos','AgendaController')
    ->parameters(['contactos'=>'agenda'])
    ->names('agenda')
    ->middleware('auth');


Route::view('/contactos', 'contactos')->name('contactos');

Route::get('/home','HomeController@index')->name('home');
Auth::routes();

Auth::routes(['register'=> true ]);