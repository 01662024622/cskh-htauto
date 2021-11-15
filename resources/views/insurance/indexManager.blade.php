@extends('layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="/css/insurance/insurance.css">
@endsection
@section('content')

    <br><br>
    <button type="button" class="btn btn-primary" onclick="clearForm()" data-toggle="modal" href='#add-modal'>+Thêm
        mới
    </button>

    <br><br>
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên Nhóm Hàng</th>
            <th>Link</th>
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
                    <h4 class="modal-title">Thêm mới</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form id="add-form" action="{{asset('/insurance')}}" method="POST">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Tên Nhóm*</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="Nhập Tên Nhóm...">
                        </div>
                        <div class="form-group">
                            <label for="name">Link</label>
                            <input type="text" class="form-control" id="link" name="link"
                                   placeholder="Nhập Mã Phòng Ban...">
                        </div>

                        <div class="form-group">
                            <input type="checkbox" id="type" name="type" value="1">
                            <label for="name">Đã có chính sách riêng</label>
                        </div>
                        <div class="form-group" id="insurance-content">
                            <label for="name">Quy định bảo hành</label>
                            <textarea name="content-ckeditor" id="content-ckeditor"></textarea>
                        </div>
                        <input type="hidden" name="id" id="eid">

                    </div>

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

    {{--    <script src="{{ asset('js/ckeditor.js') }}"></script>--}}
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="{{ asset('js/insurance/manager.js') }}"></script>
    <script>
        CKEDITOR.replace('content-ckeditor', {
            filebrowserUploadUrl: '{{route('ckeditor.upload',['_token'=>csrf_token()])}}',
            filebrowserUploadMethod: 'form'
        })
    </script>
@endsection
