@extends('layouts.back')

@section('page_title','產品管理')

@section('css')
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('h1_title','產品管理')

@section('content')
    <a href="{{ asset('/admin/product/create') }}" class="btn btn-success mb-3">新增</a>
    {{-- datdtabli多功能 漂釀的表格 --}}
    <table id="my-datatable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>筆</th>
                <th>產品名稱</th>
                <th>價格</th>
                <th>折扣</th>
                <th>產品描述</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $lists as $item )
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}} </td>
                    <td>{{$item->discount}}</td>
                    <td>{{$item->discript}}</td>
                    <td>
                        <a href="{{asset('admin/product/edit') }}/{{ $item->id }}" class="btn btn-primary btn-sm">編輯</a>
                        <form  class="form-delete" style="display:inline-block" action="{{ asset('admin/product/delete')  }}/{{ $item->id }}" method="post" >
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm btn-delete">刪除</button>
                        </form>
                        {{-- <a href="{{asset('admin/contactus/delete') }}/{{ $item->id }}" class="btn btn-danger btn-sm">刪除</a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>筆</th>
                <th>產品名稱</th>
                <th>價格</th>
                <th>折扣</th>
                <th>產品描述</th>
                <th>操作</th>
            </tr>
        </tfoot>
    </table>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script> --}}
    <script>
        $(document).ready(function() {
            $('#my-datatable').DataTable({
                "ordering":false,
            });
        } );

        $('.btn-delete').click(function(e){
            e.preventDefault();

            var yes = confirm('確定要刪除該筆資料嗎?');
            if (yes) {
                $('.form-delete').submit();
            }
        });
    </script>
@endsection
