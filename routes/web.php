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

Route::get('/lists/id/{list}', 'ListsController@openList');
Route::get('/lists', 'ListsController@index');
Route::get('/lists/create', 'ListsController@create');

Route::get('lists/{list}/edit', 'ListsController@edit');
Route::post('lists/{list}/edit', 'ListsController@save_edit');

Route::post('/lists/create', 'ListsController@storeList');
Route::get('/lists/remove/{list}', 'ListsController@remove');


Route::get('lists/id/{list}/item/create', 'ItemsController@create');
Route::get('lists/item/remove', 'ItemsController@remove');

Route::get('/404', 'ErrorsController@err404');

Route::get('lists/id/{list}/item/done/{item}', 'ItemsController@done');


Route::post('/lists/id/{list}/item/create', 'ItemsController@storeItem');
Route::get('/lists/id/{list}/item/remove/{item}', 'ItemsController@removeItem');

Route::get('lists/id/{list}/item/edit/{item}', 'ItemsController@edit');
Route::post('lists/id/{list}/item/edit/{item}', 'ItemsController@save_edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
