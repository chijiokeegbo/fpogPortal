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
// Controller for the main pages
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/program', 'PagesController@program');
Route::get('/services', 'PagesController@services');

//Route::get('/sce', 'PagesControllers@sce');
// controller for about pages
Route::get('/pages/magt', 'PagesController@management');
Route::get('/pages/history', 'PagesController@history');
Route::get('/pages/rector','PagesController@message');
Route::get('/pages/mission','PagesController@mission');
Route::get('/pages/contact', 'PagesController@contact');

/* Controller for the Admin pages
Route::get('/mainadmin', 'AdminControllers@mainadmin');
Route::get('/consultancyadmin', 'AdminControllers@consultancyadmin');
Route::get('/procurementadmin', 'AdminControllers@procurementadmin');
Route::get('/remedialadmin', 'AdminControllers@remedialadmin');
Route::get('/sceadmin', 'AdminControllers@sceadmin');
*/


//Route::get('/posts/school', 'SchoolsController@show');

// Controllers for the other side pages
Route::get('/sidepages/sce', 'OtherControllers@sce');
Route::get('/sidepages/remedial', 'OtherControllers@remedial');
Route::get('/sidepages/procurement', 'OtherControllers@procurement');
Route::get('/sidepages/consultancy', 'OtherControllers@consultancy');

// Controller for the Students registration controller
Route::get('/registrations/regdetail','ParttimeformController@index');
Route::post('/registrations','ParttimeformController@store');
Route::get('/registrations/regform','ParttimeformController@create');

Route::get('/students','StudentsController@home');




/*
Route::resource('pages','PostsController');
*/
Route::resource('posts', 'PostsController');
Route::resource('unit', 'UnitsController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
