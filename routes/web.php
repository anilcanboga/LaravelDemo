<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\RegisterSuccess;
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
Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('profile',function(){
      return 'This is profile';
    });
});

Route::get('/', function () {
    return view('welcome');
});




Route::get('/RegisterSuccess', 'RegisterSuccess@index')->name('RegisterS');

Route::get('/mailgonder', 'UyeController@send');
