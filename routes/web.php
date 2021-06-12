<?php

use Illuminate\Support\Facades\DB;
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

// Route::get('/', function () {
//     return view('welcome');
// });



// 前端
Route::get('/', 'FrontController@index');

Route::get('/news', 'FrontController@news');
Route::get('/news/{id}', 'FrontController@newsDetail');

Route::get('/product', 'FrontController@product');
Route::get('/product/{id}', 'FrontController@productDetail');

Route::get('/contactus', 'FrontController@contactus');
Route::post('/contactus/send', 'FrontController@contactusSend');

Route::get('/change', 'FrontController@change');


// 後端
Route::get('/admin', function(){
    return view('admin.index');
});

// Back-ContactusController
Route::get('/admin/contactus', 'ContactusController@index');
Route::get('/admin/contactus/edit/{id}', 'ContactusController@edit');
Route::post('/admin/contactus/update/{id}', 'ContactusController@update');
Route::delete('/admin/contactus/delete/{id}', 'ContactusController@delete');
