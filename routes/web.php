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
require_once ('admin.php');//后端路由


Route::get('/','Home\IndexController@index');

/*Route::get('/article','Home\ArticleController@lists');*/

Route::get('/article/{id?}','Home\ArticleController@index');

Route::get('/article/{id}/detail','Home\ArticleController@show');

Route::get('/answers','Home\AnswersController@index');

Route::get('/message','Home\MessageController@index');

Route::get('/about','Home\AboutController@index');

Route::get('/login','Home\LoginController@loginForm');
Route::post('/login','Home\LoginController@login');
Route::get('/register','Home\LoginController@registerForm');
Route::post('/register','Home\LoginController@register');







