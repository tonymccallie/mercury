<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('page', 'PageController@create');
Route::post('pages', 'PageController@createmultiple');
Route::get('/page/{id}', 'PageController@get');

Route::get('pagetree', 'PageController@pagetree');
Route::post('pagetree', 'PageController@pagemove');

Route::get('templates', 'TemplateController@list');
Route::get('/template/{id}', 'TemplateController@get');