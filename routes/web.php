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

Route::get('/nut/{name?}/{surname?}/{age?}', function ($name,$surname,$age) {
    return view('test', array(
        'name' => $name,
        'surname' => $surname,
        'age' => $age,
    )

    );
});
// Route::get('/', function () {
//     return view('layouts.master');
// });
Route::get('/', function () {
    return view('test');
});
Route::get('/product', 'ProductController@index' );
Route::post('/product/search', 'ProductController@search');
Route::get('/product/search', 'ProductController@search');
Route::get('/product/edit/{id?}', 'ProductController@edit');
Route::post('/product/update', 'ProductController@update');
Route::post('/product/insert', 'ProductController@insert');
Route::get('/product/remove/{id}', 'ProductController@remove');
