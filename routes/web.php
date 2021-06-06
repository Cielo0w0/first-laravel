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

Route::get('/', function () {
    // ['key' => 'value'] php陣列 = js中的陣列['key','value']
    // php的變數要加$
    $discount = 0.8;
    $total = 500 * $discount;
    return view('front.index', ['name' => 'apple', 'price' => $total]);
});

Route::get('/news', function () {
    // 從資料表中去取得所有資料欄位
    // 變數               資料表名稱
    // $users =  DB::table('users')-> get();
    $news = DB::table('news')->get();
    //把資料$news傳到前端，用,compact('變數')的方式
    return view('front.news',compact('news'));
    // 比起上一個，compact為較常用法
});
Route::get('/product', function () {
    return view('front.product');
});
