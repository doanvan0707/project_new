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

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
	Route::get('/dashboard', 'PageController@dashboard')->name('admin.dashboard');
	Route::resource('/customers', 'CustomerController');
	Route::resource('/categories', 'CategoryController');
	Route::get('/categories/{id}/create-sub-cate/', 'CategoryController@createSubCate')->name('categories.create-sub-cate');
	Route::post('/categories/{id}/create-sub-cate/', 'CategoryController@storeSubCate')->name('categories.store-sub-cate');
	Route::resource('/products', 'ProductController');
});

