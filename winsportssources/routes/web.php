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
Route::get('/','Controller@index')->name('home');

Route::get('/video','Controller@videoLanding')->name('video');

Route::get('/infografia','Controller@infografiaLanding')->name('infografia');

Route::get('/tyc','Controller@tyc')->name('tyc');