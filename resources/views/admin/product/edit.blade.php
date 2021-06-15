@extends('layouts.back')

@section('page_title','修改產品')

@section('css')
@endsection

@section('h1_title','修改產品')

@section('content')
    <div class="container">
        <form action="{{asset ('/admin/product/productUpdate')}}/{{ $record->id }}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">產品名稱</label>
                    <input type="text" class="form-control" id="name"name="name" required  value="{{$record->name}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="price">價格</label>
                    <input type="number" class="form-control" id="price"name="price" required  value="{{$record->price}}">
                </div>

                <div class="form-group col-md-12">
                    <label for="discount">折扣</label>
                    <input type="number" class="form-control" id="discount" name="discount"required  value="{{$record->discount}}">
                    {{-- placeholder = 提示文字 --}}
                </div>

                <div class="form-group col-md-12">
                    <label for="discript">描述</label>
                    <textarea class="form-control" id="discript" rows="3" name="discript"required value="{{$record->discript}}"></textarea>
                </div>
            </div>

            {{-- type必須是submit，按下按鈕後，即可將表單發送給指定的路徑--}}
            <button type="submit" class="btn btn-primary">修改</button>
        </form>
    </div>
@endsection

@section('js')
@endsection
