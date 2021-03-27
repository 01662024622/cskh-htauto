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


<!-- The Modal -->
<div class="modal" id="add-modal">
    <div class="modal-dialog" style="max-width: 700px;">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Phản hồi</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form id="add-form" action="#" method="GET">
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nội dung</label>
                        <textarea class="form-control" name="confirm" id="confirm" rows="3"></textarea>
                    </div>

                </div>

                <input type="hidden" name="id" id="eid">
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('js/review360/feedbackapartment.js') }}"></script>
@endsection
