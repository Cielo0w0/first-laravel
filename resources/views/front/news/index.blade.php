@extends('layouts.front')

@section('title', '最新消息')

@section('css')
    <link rel="stylesheet" href="{{asset('/css/news.css')}}">
@endsection

@section('content')
    <h1>最新消息</h1>

    <div class="row">
        {{-- news 有幾筆資料，foreach就跑幾次 --}}
        @foreach ($news as $item)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> {{$item->title}}</h5>
                        <p class="card-text">
                            {{$item->content}}
                        </p>
                        <a href="{{ asset('news')}}/{{ $item->id }}">查看更多<a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection
