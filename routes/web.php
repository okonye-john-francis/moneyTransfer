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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/admin', 'HomeController@index');

Route::get('/systemUsers', 'SystemUsersController@get_all_system_users');

Route::get('/{id}/moreDetails', 'SystemUsersController@get_all_details_for_selected_user');

Route::get('/{id}/blockUser', 'SystemUsersController@block_selected_user');

Route::get('/{id}/accounts', 'SystemUsersController@get_all_accounts_for_selected_contact');

Route::get('/home', 'HomeController@index');



