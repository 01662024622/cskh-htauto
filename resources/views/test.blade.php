<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HTAuto</title>
    <link rel="shortcut icon" href="../../../public/crop-logo.png">
    <link href="{{asset('/css/vendor/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
{{--    <link href="{{asset('/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css"
          rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/css/review360/intergration.css">
    <link rel="stylesheet" type="text/css" href="/css/survey/index.css">
</head>
<body>
<form action="/HT20" method="post" id="add-form">
    @csrf
    <main class="page payment-page">
        <section class="payment-form dark">

            <div class="container-form" style="border-top: 0px!important;">
                <div class="header-logo" style="height: 40px;line-height: 40px">
                    <img src="../../../public/htautoz.png" style="height: 35px;width: auto">
                </div>
                <div class="card-details">
                    <p style="font-size: 1.1rem">
                        Nhằm cải thiện và nâng cao chất lượng dịch vụ. HTAUTO mong muốn được lắng nghe các ý kiến phản
                        hồi từ khách hàng. Rất mong Quý khách đánh giá trải nghiệm mua hàng tại HTAuto Việt Nam (nhấn
                        chọn biểu tượng cảm xúc để đánh giá). Trân trọng!
                    </p>
                    <div class="row">
                        <div class="col-12 ">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <div class="emoji opacity-7 emoji-1" onclick="changeLv(1)">
                                        <div class="emoji-checked hidden check-emoji-1">&#9989;</div>
                                        &#128522;
                                    </div>
                                    <div class="text-emoji">Hài lòng<i id="number-lv1"></i></div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="emoji opacity-7 emoji-2" onclick="changeLv(2)">
                                        <div class="emoji-checked hidden check-emoji-2">&#9989;</div>
                                        &#128529;
                                    </div>
                                    <div class="text-emoji">Bình thường<i id="number-lv2"></i></div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="emoji opacity-7 emoji-3" onclick="changeLv(3)">
                                        <div class="emoji-checked hidden check-emoji-3">&#9989;</div>
                                        &#128543;
                                    </div>
                                    <div class="text-emoji">Không hài Lòng<i id="number-lv3"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row container-lv container-lv1 hidden">
                        <div class="col-12 checkbox-container checkbox-0" data-type="0">
                            <i class="fa fa-square-o" aria-hidden="true"></i> Thái độ NV nhiệt tình/ thân thiện
                        </div>
                        <div class="col-12 checkbox-container checkbox-1" data-type="1">
                            <i class="fa fa-square-o" aria-hidden="true"></i> Chất lượng tư vấn nhanh gọn/chính xác
                        </div>
                        <div class="col-12 checkbox-container checkbox-2" data-type="2">
                            <i class="fa fa-square-o" aria-hidden="true"></i> Giá cả phù hợp
                        </div>
                        <div class="col-12 checkbox-container checkbox-3" data-type="3">
                            <i class="fa fa-square-o" aria-hidden="true"></i> Giao hàng nhanh chóng
                        </div>
                        <div class="col-12 checkbox-container checkbox-5" data-type="5">
                            <i class="fa fa-square-o" aria-hidden="true"></i> Chất lượng sản phẩm đúng cam kết
                        </div>
                    </div>

                    <div class="row container-lv container-lv2 hidden">
                        <div class="col-12 checkbox-container checkbox-0" data-type="0">
                            <i class="fa fa-square-o" aria-hidden="true"></i> Thái độ nhân viên
                        </div>
                        <div class="col-12 checkbox-container checkbox-1" data-type="1">
                            <i class="fa fa-square-o" aria-hidden="true"></i> Chất lượng tư vấn
                        </div>
                        <div class="col-12 checkbox-container checkbox-2" data-type="2">
                            <i class="fa fa-square-o" aria-hidden="true"></i> Giá cả
                        </div>
                        <div class="col-12 checkbox-container checkbox-3" data-type="3">
                            <i class="fa fa-square-o" aria-hidden="true"></i> Giao hàng
                        </div>
                        <div class="col-12 checkbox-container checkbox-5" data-type="5">
                            <i class="fa fa-square-o" aria-hidden="true"></i> Chất lượng sản phẩm
                        </div>
                    </div>
                    <div class="row container-lv container-lv3 hidden">
                        <div class="col-12 checkbox-container checkbox-0" data-type="0">
                            <i class="fa fa-square-o" aria-hidden="true"></i> Thái độ NV chưa nhiệt tình/ thân thiện
                        </div>
                        <div class="col-12 checkbox-container checkbox-1" data-type="1">
                            <i class="fa fa-square-o" aria-hidden="true"></i> Chất lượng tư vấn chậm trễ/ chưa chính xác
                        </div>
                        <div class="col-12 checkbox-container checkbox-2" data-type="2">
                            <i class="fa fa-square-o" aria-hidden="true"></i> Giá cả chưa phù hợp
                        </div>
                        <div class="col-12 checkbox-container checkbox-3 checkbox-special" data-type="3" data-option="0">
                            <i class="fa fa-square-o" aria-hidden="true"></i> Giao hàng chậm
                        </div>
                        <div class="col-12 checkbox-container checkbox-3 checkbox-special" data-type="3" data-option="1">
                            <i class="fa fa-square-o" aria-hidden="true"></i> Giao hàng sai
                        </div>
                        <div class="col-12 checkbox-container checkbox-5" data-type="5">
                            <i class="fa fa-square-o" aria-hidden="true"></i> Chất lượng sản phẩm chưa đúng cam kết
                        </div>
                    </div>
                    <div class="row container-action hidden container-note">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="comment">Góp ý:</label>
                                <textarea class="form-control" rows="2" id="comment"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button id="submit" type="submit" class="btn btn-success opacity-7"
                                    style="padding: 5px 10px;" disabled>Gửi
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="container-fluid justify-content-center align-items-center container-custom">
                <div class="row" style="max-width: 1220px; margin: auto">
                    <div class="col-md-3 row">
                        <div class="col-3" style="padding: 0px"><img class="img-fluid"
                                                                     src="{{asset('icon/survey/icons-01.png')}}"></div>
                        <div class="col-9" style="padding-right: 0px">
                            <p class="header-ups">SẢN PHẨM CHÍNH HÃNG</p>
                            <p class="content-ups">Nguồn gốc xuất xứ rõ ràng</p>
                        </div>
                    </div>
                    <div class="col-md-3 row">
                        <div class="col-3" style="padding: 0px"><img class="img-fluid"
                                                                     src="{{asset('icon/survey/icons-02.png')}}"></div>
                        <div class="col-9" style="padding-right: 0px">
                            <p class="header-ups">GIÁ CẢ</p>
                            <p class="content-ups">Luôn ổn định so với thị trường</p>
                        </div>
                    </div>
                    <div class="col-md-3 row">
                        <div class="col-3" style="padding: 0px"><img class="img-fluid"
                                                                     src="{{asset('icon/survey/icons-04.png')}}"></div>
                        <div class="col-9" style="padding-right: 0px">
                            <p class="header-ups">BẢO HÀNH</p>
                            <p class="content-ups">Lên đến 6 tháng</p>
                        </div>
                    </div>
                    <div class="col-md-3 row">
                        <div class="col-3" style="padding: 0px"><img class="img-fluid"
                                                                     src="{{asset('icon/survey/icons-03.png')}}"></div>
                        <div class="col-9" style="padding-right: 0px">
                            <p class="header-ups">DỊCH VỤ GIAO HÀNG</p>
                            <p class="content-ups">Nhanh chóng, cụ thể, linh hoạt</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<!-- Custom scripts for all pages-->
<script src="{{asset('/js/sb-admin-2.min.js')}}"></script>
<!-- Page level plugins -->

<!-- Page level custom scripts -->
<script src="{{asset('/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
<script src="{{ asset('/js/survey/emoji.js') }}"></script>

</body>
</html>
