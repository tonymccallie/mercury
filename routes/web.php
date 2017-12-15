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

// Route::get('/', function () {
//     return view('page',);
// });

Route::get('/', 'PageController@page');

// Route::get('/test', function() {
// 	echo 'Specific';
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('/{pageslug}', 'PageController@page')->where('pageslug', '(.*)');
