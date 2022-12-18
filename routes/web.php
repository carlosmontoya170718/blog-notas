<?php

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
    return view('plan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get("/","NotasContrller@traernotas");  
////Route::post('/notita', [App\Http\Controllers\NotasContrller::class, 'store'])->name('');
Route::resource('/','App\Http\Controllers\NotasContrller');
///Route::resource('/notas','App\Http\Controllers\NotasContrller');
Route::resource('users2', 'App\Http\Controllers\NotasContrller');

Route::resource('users3', 'App\Http\Controllers\carriles');
Route::resource('users4', 'App\Http\Controllers\mostrawhere');
Route::resource('nuevoclock', 'App\Http\Controllers\lavadora');
///////////////////Route::resource('users5', 'App\Http\Controllers\brenda');

////Route::get('/rege', [App\Http\Controllers\NotasContrller::class, 'registro'])->name('rege'); 