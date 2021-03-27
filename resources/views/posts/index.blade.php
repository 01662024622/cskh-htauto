@extends('layouts.app')
@section('css')
@endsection
@section('content')

    <br><br>
    <a  class="btn btn-primary"  href='/posts/create'>Thêm mới</a>

    <br><br>
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Ảnh đại diện</th>
            <th>Trạng thái</th>
            <th>Hành Động</th>
        </tr>
        </thead>
    </table>



@endsection

@section('js')


    <script src="{{ asset('js/posts/posts.js') }}"></script>

@endsection
