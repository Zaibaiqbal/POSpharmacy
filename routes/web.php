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
    return view('admin.login');
});



Route::get('pages/saleslist', function () {
    return view('pages.sales-list');
});
Route::get('pages/supplierprofile', function () {
    return view('pages.supplierprofile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/staff-registration', 'PagesController@staffregister');
Route::get('/admin', 'PagesController@admin');
Route::get('pages/sales_form', 'PagesController@sales_item');
Route::get('/addproduct', 'PagesController@addproduct');
Route::get('/addsupplier', 'PagesController@addsupplier');

Route::get('addproduct', 'ProductController@create');


Route::post('addproduct','ProductController@save');
Route::get('pages/product_list','ProductController@index');
Route::get('pages/show/{product}', 'ProductController@show');

Route::get('pages/{id}/editproduct' , 'ProductController@edit');

Route::post('pages/updateproduct' , 'ProductController@update');

Route::get('pages/{id}/product_list' , 'ProductController@destroy');


Route::get('pages/addsupplier', 'SupplierController@create');

Route::post('/addsupplier','SupplierController@save');
Route::get('pages/supplier-list', 'SupplierController@index');
 Route::get('pages/profiles/{supplier}', 'SupplierController@show');
 Route::get('pages/{id}/editsupplier' , 'SupplierController@edit');
 
 Route::post('pages/updatesupplier' , 'SupplierController@update');
 Route::get('pages/{id}/supplier-list' , 'SupplierController@destroy');

 Route::get('pages/addpurchase', 'OrderController@create');
 Route::post('pages/addpurchase','OrderController@store');
//Route::get('pages/purchase-list', 'OrderController@index');

//Route::get('pages/sales_form' , 'SaleController@create');
Route::post('pages/sales_form', 'ProductController@search');
Route::post('pages/sales_form' , 'SaleController@store');