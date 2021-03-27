@extends('layouts.app')
@section('css')
    <link rel="Stylesheet" type="text/css" href="/css/image/croppie.css"/>
    <link href="/css/posts/add.css" rel="stylesheet"/>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12"><h3>Cập nhật bài viết</h3></div>
        <br>
        <br>
        <div class="col-lg-8 col-xl-9">
            <div class="item">
                <input type="text" class="form-control input-custom" id="title" value="{{$post->title}}"
                       placeholder="Nhập tiêu đề...">
            </div>
            <div class="item">
                <div class="header-item">
                    <p>Nhúng nội dung</p>
                </div>
                <div class="header-item">
                    <div class="row">
                        <div class="col-3" style="padding-left: 30px">
                            Nhúng website
                            <br>
                            Điền url ở đây nếu có...
                        </div>
                        <div class="col-9">
                            <textarea id="embed" cols="5" rows="3">{{$post->embed}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <textarea class="ckeditor" name="editor1"> {!! $post->content !!}</textarea>
            </div>

            <div class="item">
                <div class="header-item">
                    <p>Phân quyền</p>
                </div>
                <div class="header-item">
                    <div class="form-group">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#apartment" id="apartment_toggle">Phòng
                                    ban</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#group" id="group_toggle">Nhóm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#staff" id="staff_toggle">Nhân viên</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="apartment" class="container tab-pane active"><br>
                                <div class="row">
                                    <div class="col col-6">
                                        <input type="text" name="apartment_find" id="apartment_find_text"
                                               style="width: 150px;" maxlength="30">
                                        <button id="apartment_find">Tìm kiếm</button>
                                        <br>
                                        <br>
                                        <p>Kết quả tìm kiếm:</p>
                                        <select multiple="multiple" id="multiple_apartment_select"
                                                style="height:160px; width: 210px;">

                                        </select>

                                        <button id="apartment_select">Chọn</button>
                                    </div>
                                    <div class="col col-6">
                                        <table style="width:100%" id="apartment_role_table">
                                            <tr>
                                                <th>Phòng ban</th>
                                                <th>Quyền hạn</th>
                                            </tr>
                                            @foreach($post->apartments as $apartment)
                                                <tr>
                                                    <td>{{$apartment->name}}</td>
                                                    <td>
                                                        <select class="role-select" name="role"
                                                                id="apartment_role_{{$apartment->id}}">
                                                            <option value="0" style="font-weight: 700; color: #3ED317"
                                                                    @if ($apartment->role==0) selected @endif>Cho phép
                                                            </option>
                                                            <option value="2" style="font-weight: 700; color: #AA0000"
                                                                    @if ($apartment->role==2) selected @endif>Chặn
                                                            </option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="group" class="container tab-pane fade"><br>
                                <div class="row">
                                    <div class="col col-6">
                                        <input type="text" name="group_find_text" id="group_find_text"
                                               style="width: 150px;" maxlength="30">
                                        <button id="group_find">Tìm kiếm</button>
                                        <br>
                                        <br>
                                        <p>Kết quả tìm kiếm:</p>
                                        <select multiple="multiple" id="multiple_group_select"
                                                style="height:160px; width: 210px;">

                                        </select>

                                        <button id="group_select">Chọn</button>
                                    </div>
                                    <div class="col col-6">
                                        <table style="width:100%" id="group_role_table">
                                            <tr>
                                                <th>Nhóm</th>
                                                <th>Quyền hạn</th>
                                            @foreach($post->groups as $group)
                                                <tr>
                                                    <td>{{$group->name}}</td>
                                                    <td>
                                                        <select class="role-select" name="role"
                                                                id="group_role_{{$group->id}}">
                                                            <option value="0" style="font-weight: 700; color: #3ED317"
                                                                    @if ($group->role==0) selected @endif>Cho phép
                                                            </option>
                                                            <option value="2" style="font-weight: 700; color: #AA0000">
                                                                Xóa
                                                            </option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="staff" class="container tab-pane fade"><br>
                                <div class="row">
                                    <div class="col col-6">
                                        <input type="text" name="apartment_find" id="staff_find_text"
                                               style="width: 150px;" maxlength="30">
                                        <button id="staff_find">Tìm kiếm</button>
                                        <br>
                                        <p>Kết quả tìm kiếm:</p>
                                        <br>
                                        <select multiple="multiple" id="multiple_staff_select"
                                                style="height:160px; width: 210px;">

                                        </select>
                                        <button id="staff_select">Chọn</button>
                                    </div>
                                    <div class="col col-6">
                                        <table style="width:100%" id="staff_role_table">
                                            <tr>
                                                <th>Nhân viên</th>
                                                <th>Quyền hạn</th>
                                            </tr>
                                            @foreach($post->users as $user)
                                                <tr>
                                                    <td>{{$user->name}}</td>
                                                    <td>
                                                        <select class="role-select" name="role"
                                                                id="user_role_{{$user->id}}">
                                                            <option value="0" style="font-weight: 700; color: #3ED317"
                                                                    @if ($user->role==0) selected @endif>Cho phép
                                                            </option>
                                                            <option value="2" style="font-weight: 700; color: #AA0000"
                                                                    @if ($user->role==2) selected @endif>Chặn
                                                            </option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xl-3">
            <div class="item">
                <div class="header-item">
                    <p>Đăng</p>
                </div>
                <div class="header-item">
                    <div class="row" style="margin: 15px 0 15px 0">
                        <div class="col-6">
                            <span>Hiển thị:</span>
                            <span>
                                <select id="role" name="role">
                                    <option value="0" @if ($post->role==0) selected @endif>Công khai</option>
                                    <option value="2" @if ($post->role==2) selected @endif>Khóa chọn</option>
                                    <option value="3" @if ($post->role==3) selected @endif>Tạm lưu</option>
                                </select>
                            </span>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-light">Xem thử</a>
                        </div>
                        <div class="col-12">
                            <br>
                            Ngày đăng: <span id="date-save">{{$post->updated_at}}</span>
                        </div>
                    </div>
                </div>
                <div class="header-item text-right header-body">
                    <button id="save-posts" class="btn btn-primary">Đăng</button>
                </div>
            </div>
            <div class="item">
                <div class="header-item">
                    <p>Tất cả chuyên mục</p>
                </div>
                <div class="header-item">
                    <div class="scroll">
                        <ul id="categorilist">
                            <li id="popular-category-135" class="popular-category">
                                <label class="selectit">
                                    @foreach($categories as $category)
                                        <input class="check-input" id="category-{{$category->id}}" type="checkbox"
                                               value="{{$category->id}}">    &nbsp;    &nbsp;{{$category->title}}
                                        <br>
                                    @endforeach
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="header-item">
                    <p>Ảnh đại diện</p>
                </div>
                <div class="header-item">
                    <div id="avata" class="text-center">
                        @if ($post->avata!='')
                            <img id="upload-data-avata" src="{{$post->avata}}" alt="avata"
                                 style="width:100%;height:auto">
                        @endif</div>
                    <div class="text-center">
                        <h6>Cập nhật ảnh địa diện...</h6>
                        <input type="file" id="upload-image" class="text-center center-block file-upload"
                               accept="image/png, image/jpeg, image/jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <input type="hidden" id="eid" value="{{$post->id}}">



    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Căn chỉnh ảnh đại diện</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div id="image-preview"></div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button id="crop_image" type="button" class="btn btn-info">Lưu</button>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('js')

    <script src="/js/image/croppie.js"></script>
    <script src="{{ asset('js/posts/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.editorConfig = function (config) {
            // config.language = 'es';
            // config.uiColor = '#F7B42C';
            // config.height = 300;
            // config.toolbarCanCollapse = true;
            config.height = '800px';
        };

        var users = [];
        var apartments = [];
        var categories = [];
        var groups = [];


        $(document).ready(function () {
            @foreach($post->groups as $group)
            groups.push({{$group->id}});
            @endforeach
            @foreach($post->categories as $category)
            categories.push({{$category->id}})
            $('#category-{{$category->id}}').prop('checked', true);
            @endforeach
            @foreach($post->apartments as $apartment)
            apartments.push({{$apartment->id}})
            @endforeach
            @foreach($post->users as $user)
            users.push({{$user->id}})
            @endforeach
        });
    </script>
    <script src="{{ asset('js/posts/edit.js') }}"></script>

@endsection
