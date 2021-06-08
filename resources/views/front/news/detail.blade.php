@extends('layouts.front')

{{-- 如果有section帶參數「,xxx」，後面就不用endsection --}}
@section('title', '最新消息內容頁')
{{-- @endsection --}}

@section('css')
    <link rel="stylesheet" href="{{asset('/css/news.css')}}">
@endsection

@section('content')
    <h1>最新消息-內容頁</h1>

    <div class="container-fluid">
        <h2 class="title">
            {{ $record->title }}
        </h2>

        <p class="text">
            {{ $record->content }}
        </p>
    </div>
@endsection
