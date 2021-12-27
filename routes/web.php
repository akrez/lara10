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

Route::get('/', 'SiteController@indexAction')->name('home');
Route::get('/site/test', 'SiteController@testAction')->name('test')->middleware('check.blog');

Route::get('/post', 'PostController@indexAction')->name('post.index');
Route::get('/post/{id}', 'PostController@viewAction')->name('post.view');

Route::get('/blog', 'BlogController@indexAction')->name('blog.index');
Route::get('/blog/{id}', 'BlogController@viewAction')->name('blog.view');
Route::get('/blog/{id}/edit', 'BlogController@editAction')->name('blog.edit');
Route::post('/blog/{id}/store', 'BlogController@storeAction')->name('blog.store');
Route::get('/blog/{id}/delete', 'BlogController@deleteAction')->name('blog.delete');
