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

Route::get('/admin/login', function() {
    return view('admin.login');
});

Route::get('/admin/setting', function() {
    return view('admin.setting.index');
});

Route::get('/admin/setting/exam', function() {
    return view('admin.setting.exam');
});

Route::get('/admin/setting/info', function() {
    return view('admin.setting.info');
});

Route::get('/admin/questions', function() {
    return view('admin.questions.index');
});

Route::get('/admin/questions/create', function() {
    return view('admin.questions.create');
});

Route::get('/admin/result', function() {
    return view('admin.result.index');
});

Route::get('/admin/logout', function() {
    return view('admin.login');
});
