@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="/css/review360/main.css">
@endsection
@section('content')

    <br><br>
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Loại</th>
            <th>Mã</th>
            <th>Số Lượng</th>
            <th>Nội dung</th>
            <th>Ngày Tạo</th>
        </tr>
        </thead>
    </table>

@endsection

@section('js')
    <script src="{{ asset('js/review360/feedbackWarehouse.js') }}"></script>
@endsection
