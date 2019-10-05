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

Route::get('lists/id/{list}/item/done/{item}', 'ItemsController@done');


Route::post('/lists/id/{list}/item/create', 'ItemsController@storeItem');
Route::get('/lists/id/{list}/item/remove/{item}', 'ItemsController@removeItem');








