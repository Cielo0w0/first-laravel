@extends('layouts.back')

@section('page_title','編輯聯絡我們')

@section('css')
@endsection

@section('h1_title','編輯聯絡我們')

@section('content')
    <div class="container">
        <form action="{{asset ('admin/contactus/update')}}/{{$record->id }}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">姓名</label>
                    <input type="text" class="form-control" id="name"name="name" required value="{{$record->name}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email"name="email" required value="{{$record->email}}">
                </div>

                <div class="form-group col-md-12">
                    <label for="phone">電話</label>
                    <input type="text" class="form-control" id="phone" placeholder="09-65666666" name="phone"requiredvalue="{{$record->phone}}">
                    {{-- placeholder = 提示文字 --}}
                </div>

                <div class="form-group col-md-12">
                    <label for="content">內容</label>
                    <textarea class="form-control" id="content" rows="3" name="content"requiredvalue="{{$record->content}}"></textarea>
                </div>
            </div>

            {{-- type必須是submit，按下按鈕後，即可將表單發送給指定的路徑--}}
            <button type="submit" class="btn btn-primary">送出</button>
        </form>
    </div>
@endsection

@section('js')
@endsection
