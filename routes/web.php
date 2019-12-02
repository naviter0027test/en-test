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
    return redirect('/step1');
});

Route::get('/step1', 'ExamController@step1');

Route::get('/step2', 'ExamController@step2');
Route::get('/questions', 'ExamController@getQuestions');

Route::post('/user-answer', 'ExamController@userAnswer');
Route::get('/step3', 'ExamController@step3');

Route::group(['prefix' => 'admin', 'middleware' => ['check.login']], function() {

    Route::get('login', 'Admin\UserController@loginPage');
    Route::post('login', 'Admin\UserController@login');

    Route::get('setting', 'Admin\SettingController@index');
    Route::post('setting', 'Admin\UserController@passUpdate');

    Route::get('setting/exam', 'Admin\SettingController@examInfoPage');
    Route::post('setting/exam', 'Admin\SettingController@examSavePage');

    Route::get('setting/info', function() {
        return view('admin.setting.info');
    });

    Route::get('questions', 'Admin\QuestionController@lists');
    Route::get('questions/create', 'Admin\QuestionController@createPage');
    Route::post('questions/create', 'Admin\QuestionController@create');
    Route::get('questions/edit/{id}', 'Admin\QuestionController@edit');
    Route::post('questions/edit/{id}', 'Admin\QuestionController@update');
    Route::get('questions/del/{id}', 'Admin\QuestionController@del');

    Route::get('result', 'Admin\ResultController@lists');
    Route::get('result/export', 'Admin\ResultController@export');
    Route::get('detail/{id}', 'Admin\ResultController@detail');

    Route::get('logout', 'Admin\UserController@logout');
});
