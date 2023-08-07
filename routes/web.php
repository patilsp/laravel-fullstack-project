<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
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

Route::resource('userdashboard', 'UserDashboardController');

Route::resource('roles', 'RoleController');
Route::get('roles.getall', 'RoleController@getall')->name('roles.getall');
Route::get('roles.getdata', 'RoleController@getdata')->name('roles.getdata');
Route::get('roles.delete', 'RoleController@destroy')->name('roles.delete');


Route::resource('permissions', 'PermissionController');
Route::get('permissions.getall', 'PermissionController@getall')->name('permissions.getall');
Route::get('permissions.getdata', 'PermissionController@getdata')->name('permissions.getdata');
Route::get('permissions.delete', 'PermissionController@destroy')->name('permissions.delete');

Route::resource('users', 'UserController');
Route::get('users.getall', 'UserController@getall')->name('users.getall');
Route::get('users.getdata', 'UserController@getdata')->name('users.getdata');
Route::get('users.delete', 'UserController@destroy')->name('users.delete');

Route::resource('customers', 'CustomerController');
Route::get('customers.getall', 'CustomerController@getall')->name('customers.getall');
Route::get('customers.getdata', 'CustomerController@getdata')->name('customers.getdata');
Route::get('customers.delete', 'CustomerController@destroy')->name('customers.delete');

Route::resource('tickets', 'TicketController');
Route::get('tickets.getall', 'TicketController@getall')->name('tickets.getall');
Route::get('tickets.getdata', 'TicketController@getdata')->name('tickets.getdata');
Route::get('tickets.delete', 'TicketController@destroy')->name('tickets.delete');

Route::resource('task', 'TaskController');
Route::get('task.gettasks', 'TaskController@gettasks')->name('task.gettasks');
Route::get('task.gettaskdetails', 'TaskController@gettaskdetails')->name('task.gettaskdetails');


Route::get('tickets/{status}/{id?}', 'TicketController@index')->name('tickets');
Route::resource('tickets', 'TicketController');
Route::get('tickets.getnotifications', 'TicketController@getnotifications')->name('tickets.getnotifications')->middleware('setconnection');
Route::get('tickets.getall', 'TicketController@getall')->name('tickets.getall');
Route::get('tickets.getticketdetails', 'TicketController@getticketdetails')->name('tickets.getticketdetails');
Route::get('tickets.ticketstypes', 'TicketController@ticketstypes')->name('tickets.ticketstypes');
Route::get('tickets.getprojects', 'TicketController@getProjects')->name('tickets.getprojects');
Route::get('pushnotification', 'HomeController@pushNotifications')->name('pushnotification');
Route::get('tickets.getteammembers', 'TicketController@getTeamMembers')->name('tickets.getteammembers');
Route::post('tickets.assignprojects', 'TicketController@assignProjects')->name('tickets.assignprojects');
Route::get('tickets.ganttchart', 'TicketController@ganttChart');
Route::get('tickets.getusers', 'TicketController@getUsers')->name('tickets.getusers');
Route::get('tickets.getCount', 'TicketController@getCount')->name('tickets.getCount')->middleware('setconnection');
Route::get('tickets.getimpactedoptions', 'TicketController@getimpactedoptions')->name('tickets.getimpactedoptions');
