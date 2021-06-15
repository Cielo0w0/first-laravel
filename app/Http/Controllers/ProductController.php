<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $lists = Product::get();
        return view('admin.product.index',compact('lists'));
    }

    public function create(){
        return view('admin.product.create');
    }

    // 只要是post過來的東西，都要用route接住 -> 用Request
    public function productStore(Request $request){

        Product::created([
            'name' =>  $request->name,
            'price' => $request->price,
            'discount' => $request->discount,
            'discript' => $request->discript,
        ]);

        return redirect('/admin/product')->with('message','新增產品成功');
    }

    public function edit($id){
        $record = Product::find($id);
        return view('admin.product.edit',compact('record'));
    }

    public function productUpdate(Request $request,$id){

        $old_record = Product::find($id);
        $old_record->name =$request->name;
        $old_record->price =$request->price;
        $old_record->discount =$request->discount;
        $old_record->discript =$request->discript;
        $old_record->save();

        return redirect('/admin/product')->with('message','編輯產品成功!');
    }

    public function delete($id){
        $old_record = Product::find($id);
        $old_record->delete();

        return redirect('/admin/product')->with('message','刪除產品成功');
    }
}
