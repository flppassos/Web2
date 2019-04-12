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

Route::get('/', 'BasicoController@inicial');
Route::get('/quem-somos', 'BasicoController@quemsomos');
Route::get('/contato', 'BasicoController@contato');
