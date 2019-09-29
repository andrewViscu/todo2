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

Route::get('lists/id/{list}',function($id){
	$list = DB::table('my_lists')->find($id);
    return view('lists.show',compact('list'));
});

Route::get('/lists', 'ListsController@index');

Route::get('/lists/create', 'ListsController@create' );

Route::get('lists/remove', 'ListsController@remove');

Route::post('/listaction', 'ListsController@storeList');

Route::post('/listraction', 'ListsController@removeList');