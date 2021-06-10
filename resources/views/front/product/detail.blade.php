@extends('layouts.front')

@section('title', '產品介紹')

@section('css')
    <link rel="stylesheet" href="{{asset('/css/product.css')}}">
@endsection

@section('content')
    <div class="container-fluid" style="height: auto">
        <h1>產品介紹-內容頁</h1>

        <h5 class="title"> 產品名稱 : {{$record_products->name}} </h5>
        <p class="img"> 我是圖片 : {{$record_products->img}} </p>

        <p class="text"> 產品介紹 : {{$record_products->discript}} </p>
        <p class="text"> 產品定價 : {{$record_products->price}} </p>
        <p class="text"> 產品折扣 : {{$record_products->discount}} 折</p>
        <p class="text"> 折扣後價格 : {{$record_products->price*$record_products->discount}} </p>
    </div>
@endsection
