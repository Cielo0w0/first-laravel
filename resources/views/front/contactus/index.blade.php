@extends('layouts.front')

@section('title', '最新消息')

@section('css')
@endsection

@section('content')
    <h1>聯絡我們</h1>

{{-- form action="要把表單送到啥路徑" method="route的方法" --}}
{{-- 會自動抓input的值送出去，但一定要幫資料取名，name="" --}}
    <div class="container">
        <form action="/contactus/send" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">姓名</label>
                    <input type="text" class="form-control" id="name"name="name" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email"name="email" required>
                </div>

                <div class="form-group col-md-12">
                    <label for="phone">電話</label>
                    <input type="text" class="form-control" id="phone" placeholder="09-65666666" name="phone"required>
                    {{-- placeholder = 提示文字 --}}
                </div>

                <div class="form-group col-md-12">
                    <label for="content">內容</label>
                    <textarea class="form-control" id="content" rows="3" name="content"required></textarea>
                </div>
            </div>

            {{-- type必須是submit，按下按鈕後，即可將表單發送給指定的路徑--}}
            <button type="submit" class="btn btn-primary">送出</button>
        </form>
    </div>

@endsection
