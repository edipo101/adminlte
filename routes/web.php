<?php

use Illuminate\Support\Facades\Route;

Route::get('home', 'HomeController@index')->name('home');

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login.form');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login.show');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('products','ProductController@index')->name('products.index');
Route::get('products/datatable','ProductController@dataTable')->name('products.datatable');
Route::get('products/create','ProductController@create')->name('products.create');
Route::get('tasks','TaskController@index')->name('tasks.index');
