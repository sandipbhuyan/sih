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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware'=>'auth'],function (){

    Route::get('/home',function (){
        return view('admin.dashboard');
    })->name('home');

    Route::get('/mail_analysis',function (){
        return view('admin.mail_analysis');
    })->name('mails');

    Route::get('/users',function (){
        return view('admin.users');
    })->name('users');

    Route::get('/visualization',function (){
        return view('admin.visualization');
    })->name('visualization');
});