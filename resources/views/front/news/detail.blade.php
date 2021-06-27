@extends('layouts.front')

{{-- 如果有section帶參數「,xxx」，後面就不用endsection --}}
@section('title', '最新消息-內容頁')
{{-- @endsection --}}

@section('css')
    <link rel="stylesheet" href="{{asset('/css/news.css')}}">
@endsection

@section('content')
    <h1 >最新消息-內容頁</h1>

    <div class="container-fluid" style="margin: 50px 0 ">
        <h2 class="title">
            {{-- 最新消息:標題 --}}
            {{ $record->title }}
        </h2>

        <p class="text">
            {{-- 最新消息:內容 --}}
            {{ $record->content }}
        </p>
    </div>
@endsection
