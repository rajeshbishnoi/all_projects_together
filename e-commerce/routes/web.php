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
    return view('index');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registered', function () {
    return view('registered');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/admin/login',function(){
	return view('/Admin/login');
});

Route::get('/admin/changepassword',function(){
	return view('/Admin/changepassword');
});

Route::get('/admin/profile',function(){
	return view('/Admin/profile');
});

Route::get('/admin/categoryselection',function(){
	return view('/Admin/categoryselection');
});

Route::any('/admin/savecategory','CategoryController@save');

