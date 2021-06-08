<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 記得要先打DB+enter出現此句，下面的DB才能用
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //首頁
    public function index(){
        // ['key' => 'value'] php陣列 = js中的陣列['key','value']
        // php的變數要加$
        $discount = 0.8;
        $total = 500 * $discount;
        return view('front.product.index', ['name' => 'apple', 'price' => $total]);
    }

    // 最新消息
    // 1.列表
    public function news(){
        // 從資料表中去取得所有資料欄位
        // 變數               資料表名稱
        // $users =  DB::table('users')-> get();
        $news = DB::table('news')->get();
        //把資料$news傳到前端，用,compact('變數')的方式
        return view('front.news.index',compact('news'));
        // 比起上一個，compact為較常用法
    }
    // 2.單筆資料
    public function newsDetail($id){
        $record = DB::table('news')->find($id);
        return view('front.news.detail',compact('record'));
    }

    // 產品介紹
    public function product(){
            return view('front.product.product');
    }
}
