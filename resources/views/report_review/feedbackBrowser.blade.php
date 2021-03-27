@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="/css/review360/feedbackme.css">
@endsection
@section('content')

    <br><br>
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Loại phản hồi</th>
            <th>Phòng Ban</th>
            <th>Feedback</th>
            <th>Tên HĐ</th>
            <th>Nội dung</th>
            <th>Ảnh</th>
            <th>Ngày tạo</th>
            <th>Phản hồi</th>
            <th>Hành Động</th>
        </tr>
        </thead>
    </table>
@endsection

@section('js')
    <script src="{{ asset('js/review360/feedbackBrowser.js') }}"></script>
@endsection
