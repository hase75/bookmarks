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

Route::get('/', 'Admin\BookController@index');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    // 本
    Route::resource('books', 'BookController', ['except' => ['show', 'destroy']]);
    Route::get('/books/{book}', 'BookController@destroy')->name('books.destroy');
});

Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'User'], function () {
    // 本
    Route::resource('books', 'BookController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // 口コミ
    Route::post('/evaluations', 'EvaluationController@store')->name('evaluations.store');
});
