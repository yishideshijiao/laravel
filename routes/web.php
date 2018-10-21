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
//默认
Route::get('/', function () {
    return view('welcome');
});

//学生
Route::get('student/index', 'StudentController@index')->name('student.index');
Route::any('student/add', 'StudentController@add')->name('student.add');
Route::any('student/edit/{id}', 'StudentController@edit')->name('student.edit');
Route::any('student/del/{id}', 'StudentController@del')->name('student.del');

//文章
Route::get('article/index', 'ArticleController@index')->name('article.index');
Route::any('article/add', 'ArticleController@add')->name('article.add');
Route::any('article/edit/{id}', 'ArticleController@edit')->name('article.edit');
Route::any('article/del/{id}', 'ArticleController@del')->name('article.del');
//练习
Route::get('db/index', 'DbController@index')->name('db.index');
Route::any('db/del/{id}',function ($id){
    $result=\Illuminate\Support\Facades\DB::delete("delete from articles where id=:id",["id"=>$id]);
    dd($result);
} );
//商品类别
Route::get('lei/index', 'LeiController@index')->name('lei.index');
Route::any('lei/add', 'LeiController@add')->name('lei.add');
Route::any('lei/edit/{id}', 'LeiController@edit')->name('lei.edit');
Route::any('lei/del/{id}', 'LeiController@del')->name('lei.del');

//商品
Route::get('shop/index', 'ShopController@index')->name('shop.index');
Route::any('shop/add', 'ShopController@add')->name('shop.add');
Route::any('shop/edit/{id}', 'ShopController@edit')->name('shop.edit');
Route::any('shop/del/{id}', 'ShopController@del')->name('shop.del');

Route::any('user/reg', 'UserController@reg')->name('user.reg');
Route::get('user/index', 'UserController@index')->name('user.index');
Route::any('user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::any('user/del/{id}', 'UserController@del')->name('user.del');