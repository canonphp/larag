<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/12/11
 * Time: 14:48
 */
Route::get('/backend','Admin\IndexController@index');
Route::get('/backend/welcome','Admin\IndexController@welcome');
Route::get('/backend/icon','Admin\IndexController@icon');



Route::get('/backend/login','Admin\LoginController@index');
Route::post('/backend/login','Admin\LoginController@login');


//后台文章
Route::get('/backend/article','Admin\ArticleController@index');
Route::get('/backend/article/create','Admin\ArticleController@create');
Route::post('/backend/article/create','Admin\ArticleController@store');
Route::get('/backend/article/{article}','Admin\ArticleController@show');
Route::get('/backend/article/{article}/edit','Admin\ArticleController@edit');
Route::put('/backend/article/{article}','Admin\ArticleController@update');
Route::delete('/backend/article/{article}','Admin\ArticleController@destroy');
Route::post('/backend/article/upload','Admin\ArticleController@upload');



//后台管理员
Route::get('/backend/admin','Admin\AdminController@index');
Route::get('/backend/admin/create','Admin\AdminController@create');
Route::post('/backend/admin/create','Admin\AdminController@shore');
Route::get('/backend/admin/{id}','Admin\AdminController@show');
Route::get('/backend/admin/{id}/edit','Admin\AdminController@edit');
Route::put('/backend/admin/{id}','Admin\AdminController@update');
Route::delete('/backend/admin/create','Admin\AdminController@destroy');

Route::get('/backend/admin/role','Admin\AdminController@role');


//文章分类
Route::get('/backend/cate','Admin\CateController@index');
Route::get('/backend/cate/create','Admin\CateController@create');
Route::post('/backend/cate/create','Admin\CateController@shore');
Route::get('/backend/cate/{id}','Admin\CateController@show');
Route::get('/backend/cate/{id}/edit','Admin\CateController@edit');
Route::put('/backend/cate/{id}','Admin\CateController@update');
Route::delete('/backend/cate/{id}','Admin\CateController@destroy');




