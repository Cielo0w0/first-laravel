@extends('layouts.front')

@section('title', '最新消息')

@section('content')
    <h1>最新消息</h1>

    <div class="row">
        {{-- news 有幾筆資料，foreach就跑幾次 --}}
        @foreach ($news as $item)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title"> {{$item->title}}</h5>
                <p class="card-text">
                    {{$item->content}}
                </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>


@endsection
