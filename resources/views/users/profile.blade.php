@extends('layouts.app')
@section('css')

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://rawgit.com/adrotec/knockout-file-bindings/master/knockout-file-bindings.css">
<link rel="Stylesheet" type="text/css" href="/css/image/croppie.css"/>
@endsection
@section('content')


<hr>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-12"><h3>{{ Auth::user()->email }}</h3></div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->


            <div class="text-center">
                <div id="avata" class="text-center">
                    @if (Auth::user()->avata!='')
                        <img id="upload-data-avata" src="{{Auth::user()->avata}}" alt="avata" style="width:100%;height:auto">
                    @endif</div>
                <div class="text-center">
                    <h6>Cập nhật ảnh địa diện...</h6>
                    <input type="file" id="upload-image" class="text-center center-block file-upload"
                           accept="image/png, image/jpeg, image/jpg">
                </div>
            </div>
            <br>


        </div><!--/col-3-->
        <div class="col-sm-9">


            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                    <form class="form" action="/user-profile" method="post" id="update-profile">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>Họ và Tên</h4></label>
                                <input type="text" class="form-control" value="{{Auth::user()->name}}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>Chức vụ</h4></label>
                                <input type="text" class="form-control" value="{{Auth::user()->position}}" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>Phòng ban</h4></label>
                                <input type="text" class="form-control" value="{{$apartment}}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>Skype ID</h4></label>
                                <input type="text" class="form-control" name="skype" id="skype"
                                placeholder="Nhập Id skype của bạn..." value="{{Auth::user()->skype}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>Email Htauto</h4></label>
                                <input type="text" class="form-control" name="email_htauto" id="email_htauto"
                                placeholder="Nhập email Htauto cấp cho bạn..." value="{{Auth::user()->email_htauto}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>Phone</h4></label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                placeholder="Nhập số điện thoại của bạn..." value="{{Auth::user()->phone}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name"><h4>Ngày sinh</h4></label>
                                <input type="text" class="form-control" name="birth_day" id="birth_day" data-date-format="dd/mm/yyyy"
                                placeholder="Nhập ngày sinh của bạn..." value="{{ \Carbon\Carbon::parse(Auth::user()->birth_day)->format('d/m/Y')}}">

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="/js/image/croppie.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.1.0/knockout-min.js"></script>
<script src="https://rawgit.com/adrotec/knockout-file-bindings/master/knockout-file-bindings.js"></script>
<script src="{{ asset('js/user/user-profile.js') }}"></script>

@endsection
