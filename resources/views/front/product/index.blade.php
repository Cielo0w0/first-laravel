@extends('layouts.front')

@section('title', '產品介紹-內容頁')

@section('css')
    <link rel="stylesheet" href="{{asset('/css/product.css')}}">
@endsection

@section('content')
    <div class="container-fluid" style="height: auto">
        <h1>產品介紹</h1>

        <div class="row">
            {{-- products 有幾筆資料，foreach就跑幾次 --}}
            @foreach ($products as $item)
                <div class=" d-flex mb-3">
                    <div class="card " style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"> 產品名稱 : {{$item->name}} </h5>
                            <p class="card-text"> 產品介紹 : {{$item->discript}} </p>
                            <p class="card-title"> 我是圖片 : {{$item->img}} </p>
                            <p class="card-text"> 折扣後價格 : {{$item->price*$item->discount}} </p>

                            <a href="{{ asset('product')}}/{{ $item->id }}" class="btn btn-primary">
                                查看更多
                            <a>
                            {{-- <p class="card-text"> 折扣後價格 : {{$products_discount->productDiscount}} </p> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


