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


Route::post('/comment','Home\CommentController@commentStore');
Route::get('/comment/{comment}/delete','Home\CommentController@delete');


Route::get('/answers','Home\AnswersController@index');
Route::post('/answers','Home\AnswersController@answersStore');



Route::get('/message','Home\MessageController@index');
Route::get('/message/{message}/delete','Home\MessageController@index');

Route::post('/message','Home\MessageController@MessageStore');

Route::get('/about','Home\AboutController@index');

Route::get('/login','Home\LoginController@loginForm');
Route::get('/logout','Home\LoginController@logout');
Route::post('/login','Home\LoginController@login');


Route::get('/register','Home\LoginController@registerForm');
Route::post('/register','Home\LoginController@register');







