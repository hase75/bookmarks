<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'User\BookController@index')->name('/')->middleware('UserRoleMiddleware');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'AdminRoleMiddleware'], function () {
    // 本
    Route::resource('/books', 'BookController', ['except' => ['show']]);
});

Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'User', 'middleware' => 'UserRoleMiddleware'], function () {
    // 本
    Route::resource('/books', 'BookController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // 口コミ
    Route::post('/evaluations', 'EvaluationController@store')->name('evaluations.store');
});
