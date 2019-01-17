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

Route::get('/article/{article}/detail','Home\ArticleController@show');

//评论
Route::post('/comment','Home\CommentController@commentStore');
Route::get('/comment/{comment}/delete','Home\CommentController@delete');

//发表问题
Route::get('/answers','Home\AnswersController@index');
Route::get('/answers/{answers}/detail','Home\AnswersController@answersShow');
Route::post('/answers','Home\AnswersController@answersStore');



//回答
Route::get('/reply','Home\ReplyController@index');
Route::get('/replies/{replies}/delete','Home\ReplyController@delete');
Route::post('/reply','Home\ReplyController@replyStore');



//留言
Route::get('/message','Home\MessageController@index');
/*Route::get('/message/{message}/delete','Home\MessageController@delete');*/
Route::post('/message/delete','Home\MessageController@delete');

Route::post('/message','Home\MessageController@MessageStore');

Route::get('/about','Home\AboutController@index');

Route::get('/login','Home\LoginController@loginForm');
Route::get('/logout','Home\LoginController@logout');
Route::post('/login','Home\LoginController@login');


Route::get('/register','Home\LoginController@registerForm');
Route::post('/register','Home\LoginController@register');


//点赞
Route::post('/zans','Home\ZanController@zans');
Route::post('/unzans','Home\ZanController@zans');








