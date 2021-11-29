<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorrarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*


Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/portoflio', 'portfolio')->name('porfolio');
Route::view('/contact', 'contact')->name('contact');




// Route ::view('/', 'home')->name('home');
//Politicas de privacidad,terminos y condiciones



/* Route::get('/', function () {
    $nombre ="Jorge";

    return view('home', compact('nombre'));    //['nombre' => $nombre] 
});
 */

Route::view('/', 'welcome');
Route::view('/{value}', 'visitas');


Route::get('/',function (){
    return view('welcome');
});
Route::get('/bienvenido', BorrarController::class,'index');