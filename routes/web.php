<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');


//About us
Route::get('/about', 'HomeController@aboutus')->name('home.about');
Route::get('/admin/about', 'AdminController@compose')->name('admin.about');
Route::post('/admin/about/update', 'AdminController@updatetinfo');

Route::get('/admin/home', 'AdminController@index')->name('admin.dashboard');

//shop details route
Route::get('/admin/shopdetails', 'AdminController@createshop');
Route::post('/admin/shopdetails/submit', 'AdminController@insertshop');
Route::get('/admin/shopdetails/all', 'AdminController@show')->name('admin.shopdetails.all');
Route::get('/admin/shopdetails/edit/{id}', 'AdminController@editshop');
Route::post('/admin/shopdetails/update', 'AdminController@updateshop');
Route::get('/admin/shopdetails/delete/{id}', 'AdminController@deleteshop');

//admin login registration routes
Route::get('/admin/login', 'Auth\admin\LoginController@loginform')->name('admin.login');

Route::post('/admin/login/submit', 'Auth\admin\LoginController@login')->name('admin.submit');

Route::get('/admin/signupadmin', 'Auth\admin\LoginController@signup')->name('admin.signupadmin');

Route::post('/admin/register/submit', 'Auth\admin\RegisterController@create')->name('admin.register.submit');

Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');
//bill details routes

Route::get('/admin/bill', 'AdminController@createbill');
Route::post('/admin/bill/submit', 'AdminController@insertbill');
Route::get('/admin/bill/all', 'AdminController@showbill')->name('admin.bill.all');
Route::get('/admin/bill/edit/{id}', 'AdminController@editbill');
Route::post('/admin/bill/update', 'AdminController@updatebill');
Route::get('/admin/bill/delete/{id}', 'AdminController@deletebill');




///website route
Route::get('/user/dashboard', 'WebsiteController@userdashboard')->name('user.dashboard');
