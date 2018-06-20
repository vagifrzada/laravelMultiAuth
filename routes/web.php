<?php

Route::view('/', 'welcome');
Route::view('/admin', 'welcome_admin');

Auth::routes();

Route::get('/admin/login', 'AuthAdmin\LoginController@showLoginForm')->name('login.admin');
Route::post('/admin/login', 'AuthAdmin\LoginController@login');
Route::post('/admin/logout', 'AuthAdmin\LoginController@logout')->name('logout.admin');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/home', 'AdminHomeController@index')->name('admin.home');