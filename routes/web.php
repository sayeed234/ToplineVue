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
    return view('welcome');
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
Route::get('/registration', 'Auth\RegisterController@index')->name('registration');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
});

//======================================Company===================================
Route::get('/company', 'Admin\CompanyController@index')->name('company');
Route::post('/company/store', 'Admin\CompanyController@store');
Route::post('/company/update', 'Admin\CompanyController@update');
Route::get('/company/edit/{id}', 'Admin\CompanyController@edit');

//User Admin.....................................................................
Route::get('/user_admin', 'Admin\AdminController@index')->name('user_admin');
Route::post('/user_admin/store', 'Admin\AdminController@store');
Route::get('/user_admin/edit/{id}', 'Admin\AdminController@edit');
Route::post('/user_admin/update', 'Admin\AdminController@update');
Route::get('/user_admin/status/{id}',[
    'uses'=>'Admin\AdminController@adminstatus',
    'as'=>'adminstatus'
    ]);



//DeliveryMan...................................................................
Route::get('/deliveryman', 'Admin\DeliverymanController@index')->name('deliveryman');

//Vendor Shop..........................................................................
Route::get('/vendorshop','Admin\VendorshopController@index')->name('vendor');
Route::get('/vendorshop_singleview/{id}','Admin\VendorshopController@view');
Route::post('/vendorshop/store','Admin\VendorshopController@store');
Route::get('/vendorshop/edit/{id}','Admin\VendorshopController@edit');
Route::post('/vendorshop/update','Admin\VendorshopController@update');
Route::get('/vendorshop/status/{id}',[
    'uses'=>'Admin\VendorshopController@vendorstatus',
    'as'=>'vendorstatus'
    ]);



//Customer Details..........................................................................
Route::get('/customerlist','Admin\CustomerController@index')->name('customerlist');

//======================================Category===================================
Route::get('/service','Admin\ServiceController@index')->name('service');
Route::post('/service/store','Admin\ServiceController@store');
Route::get('/service/edit/{id}','Admin\ServiceController@edit');
Route::post('/service/update','Admin\ServiceController@update');
Route::get('/service/delete/{id}','Admin\ServiceController@delete');
Route::get('/service/status/{id}',[
    'uses'=>'Admin\ServiceController@status',
    'as'=>'status'
    ]);




//********************************** VENDOR *********************************** */   
Route::get('/mydashboard','Vendor\DashboardController@vendordashboard')->name('vendordashboard');