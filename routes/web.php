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

//Route::get('/','AdminController@index')->name('admin');
Route::get('admin','AdminController@index')->name('admin.index');
Route::get('registered','AdminController@registered_member')->name('admin.registered');
Route::get('car_brand','AdminController@car_brand')->name('admin.car_brand');
Route::get('car_brand_edit','AdminController@car_brand_edit')->name('admin.car_brand_edit');
Route::post('car_brand_save','AdminController@car_brand_save')->name('admin.car_brand_save');
//颜色
Route::get('car_color','AdminController@car_color')->name('admin.car_color');
Route::get('car_color_edit','AdminController@car_color_edit')->name('admin.car_color_edit');
Route::post('car_color_save','AdminController@car_color_save')->name('admin.car_color_save');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
