@extends('layouts.app')
@section('css')

@endsection
@section('content')

    <br><br>
    <button type="button" class="btn btn-primary" onclick="clearForm()" data-toggle="modal" href='#add-modal'>+Thêm mới</button>

    <br><br>
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên nhóm</th>
            <th>Người dùng</th>
            <th>Chú Thích</th>
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

                <form id="add-form" action="{{asset('/groups')}}" method="POST" >
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Tên Nhóm*</label>
                            <input type="text" class="form-control" id="name" name="name"  placeholder="Nhập tên nhóm...">
                        </div>
                        <div class="form-group">
                            <label for="name">Note</label>
                            <input type="text" class="form-control" id="description" name="description"  placeholder="Chú thích...">
                        </div>
                        <div id="staff" class="container"><br>
                            <div class="row">
                                <div class="col col-6">
                                    <input type="text" name="apartment_find" id="staff_find_text"
                                           style="width: 150px;" maxlength="30">
                                    <button id="staff_find" type="button">Tìm kiếm</button>
                                    <br>
                                    <p>Kết quả tìm kiếm:</p>
                                    <br>
                                    <select multiple="multiple" id="multiple_staff_select"
                                            style="height:160px; width: 210px;">

                                    </select>
                                    <button id="staff_select" type="button">Chọn</button>
                                </div>
                                <div class="col col-6">
                                    <table style="width:100%" id="staff_role_table">
                                        <tr>
                                            <th>Nhân viên</th>
                                            <th>Quyền hạn</th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id" id="eid">
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




@endsection

@section('js')
    <script src="{{ asset('js/group/index.js') }}"></script>
@endsection
