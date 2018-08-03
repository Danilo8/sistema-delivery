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
//Rotas do Globais
Route::get('/', 'SistemaController@index');

//Rotas para o Restaurante
Route::get('/restaurante/cadastro','RestauranteController@cadastro');
Route::get('/restaurante/login','RestauranteController@login');
