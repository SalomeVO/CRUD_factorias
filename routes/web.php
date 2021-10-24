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

//ruta de Eiminar usuarios
Route::delete('/delete/{id}', 'UserController@delete')->name('delete');

//ruta de Formulario para editar usuarios
Route::get('/editform/{id}','UserController@editform')->name('editform');

//ruta de Edición de usuarios
Route::patch('/edit/{id}','UserController@edit')->name('edit');
