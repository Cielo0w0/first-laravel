<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//  Model是用來與資料庫互動 溝通的東西
//  所以創出Model後，以後不用在controller db資料表了，而是直接與Model溝通
//  這樣比較符合MVC的模式

//  FrontController改打成
//  public function contactus(){
//      $lists = Contactus::get();
//      $lists = DB::table('Contactus')->get(); 不用這個了，因為他會直接修改資料庫
//  }

//  優點1:透過 Model 操作，Model 當保護者，保護資料庫不被駭客攻擊

class Contactus extends Model
{
    // protected $fillable 要打完整，有寫進去的欄位才能被資料庫 儲存/修改/刪除
    // $fillable 類似白名單功能，有寫在裡面才進得去資料庫

    // 相反的，也有黑名單功能(但幾乎不會遇到某個資料不能進入資料庫的狀況，所以很少用)
    // protected $

    //欄位要對應資料表內的欄位，但id因為是主鍵，所以會自己創建，不用特別打
    protected $fillable = ['name','email','phone','content','created_at','updated_at'];
}
