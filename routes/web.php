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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('roles', 'RoleController');
Route::get('roles.getall', 'RoleController@getall')->name('roles.getall');
Route::get('roles.getdata', 'RoleController@getdata')->name('roles.getdata');
Route::get('roles.delete', 'RoleController@destroy')->name('roles.delete');
