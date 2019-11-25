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

//**********************************ADMIN***********************************************************

Auth::routes();

Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');

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
Route::post('/vendorshop/store','Admin\VendorshopController@store')->name('vendorstore');
Route::get('/vendorshop/edit/{id}','Admin\VendorshopController@edit');
Route::post('/vendorshop/update','Admin\VendorshopController@update');
Route::get('/vendorshop/status/{id}',[
    'uses'=>'Admin\VendorshopController@vendorstatus',
    'as'=>'vendorstatus'
    ]);

//Customer Details..........................................................................
Route::get('/customerlist','Admin\CustomerController@index')->name('customerlist');

//======================================Category===================================
//service................................................................
Route::get('/service','Admin\ServiceController@index')->name('service');
Route::post('/service/store','Admin\ServiceController@store');
Route::get('/service/edit/{id}','Admin\ServiceController@edit');
Route::post('/service/update','Admin\ServiceController@update');
Route::get('/service/delete/{id}','Admin\ServiceController@delete');
Route::get('/service/status/{id}',[
    'uses'=>'Admin\ServiceController@status',
    'as'=>'status'
    ]);

 //doctors Category.....................................................
Route::get('/doctor_category','Admin\ServiceController@doctor_category')->name('doctor_category');
Route::post('/doctor_category/store','Admin\ServiceController@doctor_category_store');
Route::get('/doctor_category/edit/{id}','Admin\ServiceController@doctor_category_edit');
Route::post('/doctor_category/update','Admin\ServiceController@doctor_category_update');
Route::get('/doctor_category/delete/{id}','Admin\ServiceController@doctor_category_delete');

//Restaurent menu........................................................
Route::get('/restaurent_menu','Admin\RestaurentController@restaurent_menu')->name('menu');
Route::post('/restaurent_menu/store','Admin\RestaurentController@restaurent_menu_store');
Route::get('/restaurent_menu/edit/{id}','Admin\RestaurentController@restaurent_menu_edit');
Route::post('/restaurent_menu/update','Admin\RestaurentController@restaurent_menu_update');
Route::get('/restaurent_menu/delete/{id}','Admin\RestaurentController@restaurent_menu_delete');
//Restaurent Category........................................................
Route::get('/restaurent_category','Admin\RestaurentController@restaurent_category')->name('category');
Route::post('/restaurent_category/store','Admin\RestaurentController@restaurent_category_store');
Route::get('/restaurent_category/edit/{id}','Admin\RestaurentController@restaurent_category_edit');
Route::post('/restaurent_category/update','Admin\RestaurentController@restaurent_category_update');
Route::get('/restaurent_category/delete/{id}','Admin\RestaurentController@restaurent_category_delete');
//Grocery Menu......................................................................
Route::get('/grocery_menu','Admin\GroceryController@grocery_menu')->name('grocery_menu');
Route::post('/grocery_menu/store','Admin\GroceryController@grocery_menu_store');
Route::get('/grocery_menu/edit/{id}','Admin\GroceryController@grocery_menu_edit');
Route::post('/grocery_menu/update','Admin\GroceryController@grocery_menu_update');
Route::get('/grocery_menu/delete/{id}','Admin\GroceryController@grocery_menu_delete');
//Grocery Category...................................................................
Route::get('/grocery_category','Admin\GroceryController@restaurent_category')->name('grocery_category');
Route::post('/grocery_category/store','Admin\GroceryController@grocery_category_store');
Route::get('/grocery_category/edit/{id}','Admin\GroceryController@grocery_category_edit');
Route::post('/grocery_category/update','Admin\GroceryController@grocery_category_update');
Route::get('/grocery_category/delete/{id}','Admin\GroceryController@grocery_category_delete');


//*********************************FrontEnd****************************************************
//registration................login.....................................
Route::post('/userregistration','HomeController@users');
Route::post('/userlogin','FrontEnd\LoginController@login');
Route::post('/userlogout','FrontEnd\LoginController@logout');
//home.....................................................
Route::get('/','FrontEnd\HomeController@home');
//search result.............................................
Route::get('/Service/{id}','FrontEnd\AllresultController@allresult');
//hospital vendor.............................................
Route::get('/v/{slug}','FrontEnd\HospitalProfileController@hospitalprofile');

//restaurent single...............................................
Route::get('/restaurent_product/{id}','FrontEnd\HospitalProfileController@singleproduct')->name('rsp');
//********************************** VENDOR ****************************************************  
Route::get('/mydashboard','Vendor\DashboardController@vendordashboard')->name('mydashboard');
//================================hospital===================================
// Route::get('/hospital_info','Vendor\HospitalController@hospital_info');
Route::get('/hospital_info/{id}','Vendor\HospitalController@hospital_info_edit');
Route::post('/hospital_info/update','Vendor\HospitalController@hospital_info_update');
//......................Doctor...........................................
Route::get('/doctor_list','Vendor\HospitalController@doctor_list');
Route::post('/doctor_list/store','Vendor\HospitalController@doctor_list_store');
Route::get('/doctor_list/edit/{id}','Vendor\HospitalController@doctor_list_edit');
Route::post('/doctor_list/update','Vendor\HospitalController@doctor_list_update');
Route::get('/doctor_list/delete/{id}','Vendor\HospitalController@doctor_list_delete');
Route::get('/doctor_list/status/{id}',[
    'uses'=>'Vendor\HospitalController@status',
    'as'=>'status1'
    ]);
Route::get('/doctor_list/status2/{id}',[
    'uses'=>'Vendor\HospitalController@status2',
    'as'=>'status2'
    ]);
//........................Service.........................................    
Route::get('/service_list','Vendor\HospitalController@service_list');
Route::post('/service_list/store','Vendor\HospitalController@service_store');
Route::get('/service_list/edit/{id}','Vendor\HospitalController@service_edit');
Route::post('/service_list/update','Vendor\HospitalController@service_update');
Route::get('/service_list/delete/{id}','Vendor\HospitalController@service_delete');

//================================Doctors===================================
Route::get('/doctor_info/{id}','Vendor\DoctorController@doctor_info_edit');
Route::post('/doctor_info/update','Vendor\DoctorController@doctor_info_update');
//.............................Chamber....................................
Route::get('/doctor_chamber','Vendor\DoctorController@doctor_chamber');
Route::post('/doctor_chamber/store','Vendor\DoctorController@doctor_chamber_store');
Route::get('/doctor_chamber/edit/{id}','Vendor\DoctorController@doctor_chamber_edit');
Route::post('/doctor_chamber/update','Vendor\DoctorController@doctor_chamber_update');
Route::get('/doctor_chamber/delete/{id}','Vendor\DoctorController@doctor_chamber_delete');
Route::get('/doctor_chamber/status/{id}',[
    'uses'=>'Vendor\DoctorController@status',
    'as'=>'status'
    ]);

//=================================Restaurent======================================
//profile information....................................................
Route::get('/restaurent_info/{id}','Vendor\RestaurentController@restaurent_info_edit');
Route::post('/restaurent_info/update','Vendor\RestaurentController@restaurent_info_update');

//product information....................................................
Route::get('/restaurent_product','Vendor\RestaurentController@product')->name('products');
Route::post('/restaurent_product/store','Vendor\RestaurentController@productstore');
Route::get('/restaurent_product/edit/{id}','Vendor\RestaurentController@productedit');
Route::post('/restaurent_product/update','Vendor\RestaurentController@productupdate');
Route::get('/restaurent_product/delete/{id}','Vendor\RestaurentController@productdelete');
Route::get('/restaurent_product/status/{id}',[
    'uses'=>'Vendor\RestaurentController@productstatus',
    'as'=>'productstatus'
    ]);









