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
            <th>Số lượng</th>
            <th>Ngày tạo</th>
        </tr>
        </thead>
    </table>

@endsection

@section('js')
    <script src="{{ asset('js/review360/prmanager.js') }}"></script>
@endsection
