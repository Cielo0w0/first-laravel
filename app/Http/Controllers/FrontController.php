<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// 記得要先打DB+enter出現此句，下面的DB才能用



class FrontController extends Controller
{
    //首頁
    public function index(){
        // ['key' => 'value'] php陣列 = js中的陣列['key','value']
        // php的變數要加$
        $discount = 0.8;
        $total = 500 * $discount;
        return view('front.index', ['name' => 'apple', 'price' => $total]);
    }

    // 最新消息-列表
    public function news(){
        // 從資料表中去取得所有資料欄位
        // 變數               資料表名稱
        // $users =  DB::table('users')-> get();

        $news = DB::table('news')->get();
        //把資料$news傳到前端，用,compact('變數')的方式
        return view('front.news.index',compact('news'));
        // 比起上一個，compact為較常用法
    }


    // 最新消息-單筆資料
    public function newsDetail($id){
        $record = DB::table('news')->find($id);
        return view('front.news.detail',compact('record'));
    }

    // 產品介紹-列表
    public function product(){
        $products = DB::table('products')->get();
        return view('front.product.index',compact('products'));
    }

    // 產品介紹-單筆資料
    public function productDetail($id){
        $record_products = DB::table('products')->find($id);
        // selectRaw看文件應該是有新增欄位的意思，as 後面自己取$key值，再到頁面call他
        $products_discount = DB::table('products')->selectRaw('price * discount as productDiscount')->find($id);
        return view('front.product.detail',compact('record_products'));
    }
}
