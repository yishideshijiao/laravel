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

Route::get('/', function () {
    return view('welcome');
});

Route::get('student/index', 'StudentController@index')->name('student.index');
Route::any('student/add', 'StudentController@add')->name('student.add');
Route::any('student/edit/{id}', 'StudentController@edit')->name('student.edit');
Route::any('student/del/{id}', 'StudentController@del')->name('student.del');


Route::get('article/index', 'ArticleController@index')->name('article.index');
Route::any('article/add', 'ArticleController@add')->name('article.add');
Route::any('article/edit/{id}', 'ArticleController@edit')->name('article.edit');
Route::any('article/del/{id}', 'ArticleController@del')->name('article.del');


