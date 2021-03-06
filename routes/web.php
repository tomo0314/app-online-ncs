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
    return view('pages/sample');
});

Route::get('/template', function () {
    return view('pages/template');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::get('/signup', function () {
    return view('pages/signup');
});

Route::get('/works', function () {
    return view('pages/work_top');
});

Route::get('/works/typeA', function () {
    return view('pages/work_detail');
});

Route::get('/takeScreen', function () {
    return view('pages/work_takeScreen');
});

Route::get('/about', function () {
    return view('pages/profile_workReport');
});

Route::get("/test", "FireTestController@show");

