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

//Route::get('/','HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'HomeController@index')->name('root');

Auth::routes();




// to the admin
Route::post('/admin', ['middleware' => 'admin', 'uses' => 'ProductController@store']);


// this routes to the actions displays
Route::get('/admin/show', ['middleware' => 'admin', 'uses' => 'ProductController@show'])->name('show');


// routes to the create product page
Route::get('/admin/create', ['middleware' => 'admin', 'uses' => 'ProductController@create']);


// redirects the admin to the update page
Route::get('/admin/edit/{id}', ['middleware' => 'admin', 'uses' => 'ProductController@edit']);


// processes update form.
Route::post('admin/update/{id}', ['middleware' => 'admin', 'uses' => 'ProductController@updateProduct']);


// processes the delete item
Route::get('/admin/{id}', 'ProductController@destroy');





