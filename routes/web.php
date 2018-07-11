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

Auth::routes();

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', 'HomeController@index');

Route::resource('add','AddController');

Route::get('/tracker', 'AddController@show');
Route::get('/trackerAll', 'AddController@showAll')->name('trackerAll');

Route::resource('/memo','TaskController');

Route::get('/manage', 'AddController@showMonth');
Route::get('/manageAll', 'AddController@showMonthAll')->name('manageAll');

route::get('/admin','AdminController@index')->name('admin');

route::post('/adminpage','AdminController@adminpage')->name('adminpage');


