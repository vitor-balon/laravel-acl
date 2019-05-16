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

Auth::routes();

Route::get('/', 'SiteController@index')->name('home');

Route::get('/home', 'PanelController@index')->name('home');

Route::get('notice/{id}/update', ['uses' => 'HomeController@update', 'as' => 'notice.update']);

Route::get('/roles/permissions', ['uses' => 'HomeController@rolesPermissions', 'as' => 'notice.role.permissions']);