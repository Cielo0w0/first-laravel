@extends('layouts.back')

@section('page_title','聯絡我們管理')

@section('css')
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('h1_title','聯絡我們管理')

@section('content')
    {{-- datdtabli多功能 漂釀的表格 --}}
    <table id="my-datatable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>筆</th>
                <th>姓名</th>
                <th>信箱</th>
                <th>電話</th>
                <th>內容</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $lists as $item )
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}} </td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->content}}</td>
                    <td>
                        <a href="{{asset('admin/contactus/edit') }}/{{ $item->id }}" class="btn btn-primary btn-sm">編輯</a>
                        <form action="{{ asset('admin/contactus/delete')  }}/{{ $item->id }}" method="post"style="display:inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">刪除</button>
                        </form>
                        {{-- <a href="{{asset('admin/contactus/delete') }}/{{ $item->id }}" class="btn btn-danger btn-sm">刪除</a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>筆</th>
                <th>姓名</th>
                <th>信箱</th>
                <th>電話</th>
                <th>內容</th>
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
            $('#my-datatable').DataTable();
        } );
    </script>
@endsection
