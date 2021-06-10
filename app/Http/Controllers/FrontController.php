<?php

namespace App\Http\Controllers;

use App\Contactus;
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

    // 聯絡我們
    public function contactus(){
            //  $lists = DB::table('Contactus')->get();
            $lists = Contactus::get();
            return view('front.contactus.index');
        }


    // 真資料:透過model新增資料
    // public function push()
    // {
    //     Contactus::create([
    //         php串字串是用.
    //         'name' => '你好'.'123',
    //         'email' => 'abc@123',
    //         'phone' => '0987654321',
    //         'content' => 'jfdijoisyhoegrhepiwjuurofchoiedch4eip',
    //     ]);
    // }










    
    public function contactusSend(Request $request)
    {
        Contactus::create([
            // php串字串是用.
            // 'name' => '你好'.'123',
            // 'email' => 'abc@123',
            // 'phone' => '0987654321',
            // 'content' => 'jfdijoisyhoegrhepiwjuurofchoiedch4eip',

            'name' =>  $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'content' => $request->content,
        ]);

        return redirect('/contactus')->with('message','成功聯絡我們');
        // 寫route
    }

    public function change(){
        // // 抓到要改的資料
        // $old_record=Contactus::find(1);
        // // 修改資料欄位
        // $old_record->name='Yuki';
        // $old_record->phone='0988066666';
        // // 改完存檔
        // $old_record->save();

        // dd($old_record);

        $old_record = Contactus::where('email','abc@123')->get();

        foreach ($old_record as $key => $value) {
            $value->name = 'yuki';
            $value->phone = '0988055221';
            $value->save();
        }
    }



}
