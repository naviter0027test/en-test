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

Route::group(['prefix' => 'admin', 'middleware' => ['check.login']], function() {

    Route::get('login', 'Admin\UserController@loginPage');
    Route::post('login', 'Admin\UserController@login');

    Route::get('setting', 'Admin\SettingController@index');

    Route::get('setting/exam', function() {
        return view('admin.setting.exam');
    });

    Route::get('setting/info', function() {
        return view('admin.setting.info');
    });

    Route::get('questions', 'Admin\QuestionController@lists');
    Route::get('questions/create', 'Admin\QuestionController@createPage');
    Route::post('questions/create', 'Admin\QuestionController@create');
    Route::get('questions/edit/{id}', 'Admin\QuestionController@edit');
    Route::post('questions/edit/{id}', 'Admin\QuestionController@update');
    Route::get('questions/del/{id}', 'Admin\QuestionController@del');

    Route::get('result', function() {
        return view('admin.result.index');
    });

    Route::get('logout', 'Admin\UserController@logout');
});
