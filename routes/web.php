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

Route::get('/admin/home', 'admin\AdminController@index')->name('admin.home');
Route::get('/admin/author', 'admin\AuthorController@index')->name('admin.author');

Route::get('/admin', 'admin\MultiAuth\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'admin\MultiAuth\LoginController@login')->name('admin.loginn');

Route::post('/admin/logout', 'admin\MultiAuth\LoginController@logout')->name('admin.logout');
Route::post('/admin/password/email', 'admin\MultiAuth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin/password/reset', 'admin\MultiAuth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin/password/reset', 'admin\MultiAuth\ResetPasswordController@reset');
Route::get('/admin/password/reset/{token}', 'admin\MultiAuth\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::get('/admin/register', 'admin\MultiAuth\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('/admin/register', 'admin\MultiAuth\RegisterController@register')->name('admin.register');




Route::get('/admin/customer', 'admin\CustomerController@index')->name('admin.customer');




