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

Route::get('/', 'Controller@index')->name('home');
Route::get('/faq', 'Controller@faq')->name('faq');

Route::post('/nuevaConsulta', 'ConsultaController@store')->name('nuevaConsulta');

Auth::routes();
// Route::get('/login', 'HomeController@index')->name('login');
Route::get('/home', 'HomeController@index')->name('home');
