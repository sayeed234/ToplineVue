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
//Company............................................................................................

Route::get('/company', 'Admin\CompanyController@apiindex')->name('company');

Route::get('/service','Admin\ServiceController@indexapi');

Route::post('/register','Admin\AdminController@userstore');

