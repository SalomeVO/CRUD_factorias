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

//ruta de lista
Route::get('/', 'UserController@lista');

//ruta para el formulario
Route::get('/form', 'UserController@userform');

//ruta para guardar
Route::post('/save', 'UserController@save')->name('save');
