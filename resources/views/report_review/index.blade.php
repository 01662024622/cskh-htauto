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
            <th>Loại phản hồi</th>
            <th>Phòng ban</th>
            <th>Người dùng</th>
            <th>Tên HĐ</th>
            <th>Nội dung</th>
            <th>Ảnh</th>
            <th>Ngày tạo</th>
            <th>Phản hồi</th>
        </tr>
        </thead>
    </table>

@endsection

@section('js')
    <script src="{{ asset('js/review360/main.js') }}"></script>
@endsection
