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

Route::get('/','homeController@showhome');
Route::get('Bai-viet/{unsigned_name}','PostController@Baiviet');
Route::get('Bai-viet-1/{unsigned_name}','PostController@Baiviet1');
Route::get('blog/{unsigned_name}','BlogController@blog');
Route::get('danhmuc/{unsigned_name}','categoryController@Baiviet');
Route::get('listblog','categoryController@Blog');
Route::get('listblog/blog/{unsigned_name}','BlogController@blog');
Route::get('danhmuc/Bai-viet/{unsigned_name}','PostController@Baiviet');
Route::get('danhmuc/Bai-viet/{unsigned_name}','PostController@Baiviet');


