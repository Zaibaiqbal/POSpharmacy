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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/staff-registration', 'PagesController@staffregister');
Route::get('/admin', 'PagesController@admin');
Route::get('/sales_form', 'PagesController@sales_item');
Route::get('/addproduct', 'PagesController@addproduct');

Route::get('addproduct', 'ProductController@create');
Route::post('sales_form', 'ProductController@search');

Route::post('addproduct','ProductController@save');



Route::get('pages/product_list','ProductController@index');


Route::get('pages/show/{product}', 'ProductController@show');





Route::get('pages/{id}/editproduct' , 'ProductController@edit');




Route::get('pages/{id}/product_list' , 'ProductController@destroy');



