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

Route::resource('projects', 'ProjectController');
Route::get('projects.getall', 'ProjectController@getall')->name('projects.getall');
Route::get('projects.getdata', 'ProjectController@getdata')->name('projects.getdata');
Route::get('projects.delete', 'ProjectController@destroy')->name('projects.delete');


Route::resource('tasks', 'TaskController');
Route::get('tasks.getall', 'TaskController@getall')->name('tasks.getall');
Route::get('tasks.getdata', 'TaskController@getdata')->name('tasks.getdata');
Route::get('tasks.delete', 'TaskController@destroy')->name('tasks.delete');

Route::get('task.gettasks', 'TaskController@gettasks')->name('task.gettasks');
Route::get('task.gettaskdetails', 'TaskController@gettaskdetails')->name('task.gettaskdetails');

Route::resource('tickets', 'TicketController');
Route::get('tickets.getall', 'TicketController@getall')->name('tickets.getall');
Route::get('tickets.getdata', 'TicketController@getdata')->name('tickets.getdata');
Route::get('tickets.delete', 'TicketController@destroy')->name('tickets.delete');


Route::get('tickets/{status}/{id?}', 'TicketController@index')->name('tickets');
Route::resource('tickets', 'TicketController');
Route::get('tickets.getnotifications', 'TicketController@getnotifications')->name('tickets.getnotifications')->middleware('setconnection');
Route::get('tickets.gettickets', 'TicketController@gettickets')->name('tickets.gettickets');
Route::get('tickets.getticketdetails', 'TicketController@getticketdetails')->name('tickets.getticketdetails');
Route::get('tickets.ticketstypes', 'TicketController@ticketstypes')->name('tickets.ticketstypes');
Route::get('tickets.getprojects', 'TicketController@getProjects')->name('tickets.getprojects');


Route::get('users.getusersbyrole', 'UserController@getusersbyrole')->name('users.getusersbyrole');


Route::get('users', 'UserController@index')->name('users');
Route::get('users.index', 'UserController@index')->name('users.index');
Route::post('users.importexcel', 'UserController@importexcel')->name('users.importexcel');
Route::get('employee.index', 'UserController@employeeindex')->name('employee.index');
Route::get('employee.getallemployee','UserController@getallemployee')->name('employee.getallemployee');
Route::get('employee.getemployee','UserController@getemployee')->name('employee.getemployee');
Route::post('employee.update','UserController@employeeupdate')->name('employee.update');
Route::get('users.getalldata', 'UserController@getalldata')->name('users.getalldata');




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

Route::resource('userprofile', 'UserProfileController');
Route::get('userprofile.getall', 'UserProfileController@getall')->name('userprofile.getall');
Route::get('userprofile.getdata', 'UserProfileController@getdata')->name('userprofile.getdata');
Route::get('userprofile.delete', 'UserProfileController@destroy')->name('userprofile.delete');
