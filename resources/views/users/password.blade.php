@extends('layouts.app')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://rawgit.com/adrotec/knockout-file-bindings/master/knockout-file-bindings.css">
@endsection
@section('content')


    <hr>
    <div class="container bootstrap snippet">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-sm-3"><!--left col-->
                <div class="text-center">
                    <img src="{{ Auth::user()->avata }}" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Ảnh địa diện</h6>
                </div>
                <br>
            </div><!--/col-3-->
            <div class="col-sm-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <form class="form" action="/change-password" method="post" id="change-password">
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="first_name"><h4>Email đăng nhập</h4></label>
                                    <input type="text" class="form-control" value="{{Auth::user()->email}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="first_name"><h4>Mật khẩu cũ</h4></label>
                                    <input type="password" class="form-control" name="old_password" id="old-password"
                                           placeholder="Mật khẩu cũ...">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="first_name"><h4>Mật khẩu mới</h4></label>
                                    <input type="password" class="form-control" name="new_password" id="new-password"
                                           placeholder="Mật khẩu mới...">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="first_name"><h4>Nhập lại mât khẩu mới</h4></label>
                                    <input type="password" class="form-control" name="ver_password" id="ver-password"
                                           placeholder="Nhập lại mật khẩu...">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"><i
                                            class="glyphicon glyphicon-ok-sign"></i> Lưu
                                    </button>
                                </div>
                            </div>
                        </form>

                        <hr>

                    </div><!--/tab-pane-->

                </div><!--/tab-pane-->
            </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->



@endsection

@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('js/user/user-password.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.1.0/knockout-min.js"></script>
    <script src="https://rawgit.com/adrotec/knockout-file-bindings/master/knockout-file-bindings.js"></script>

@endsection
