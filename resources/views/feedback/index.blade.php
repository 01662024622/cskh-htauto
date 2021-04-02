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
    <link rel="shortcut icon" href="/crop-logo.png">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css"
          rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/css/review360/intergration.css">
    <link rel="stylesheet" type="text/css" href="/css/survey/index.css">
</head>
<body>
<form action="/customer/feedback/report" method="post" id="add-form">
    @csrf
    <main class="page payment-page">
        <section class="payment-form dark">

            <div class="container-form">
                <div class="card-details">
                    <p style="font-size: 1rem">
                        <i>HTAUTO xin kính chào quý khách,</i>
                        <br><br>Nhằm cải thiện và nâng cao chất lượng dịch vụ, HTAUTO mong muốn được lắng nghe các ý
                        kiến được phản hồi từ khách hàng.
                        <br><br>Kính mong quý khách phản hồi theo thông tin dưới đây.
                        <br><br><b>Xin trân trọng cảm ơn!</b>
                        <br>
                        <br>
                    </p>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="container-form">
                    <div class="card-details">
                        <div class="row">
                            <div id="type-check-0" class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">1.Anh/ Chị đánh giá như thế nào về
                                    thái
                                    độ của Nhân viên tư vấn bán hàng HTAUTO?</label>
                                <label id="error-0" class="error hidden">Lựa chọn của bạn?</label>
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <div class="emoji emoji-1 emoji-1-1" onclick="changeLv(1,1)">
                                            <div class="checked-emoji checked-emoji-1 hidden check-emoji-1-1">&#9989;
                                            </div>
                                            <img class="emoji-image" src="/image/emoji/1.png">
                                        </div>
                                        <div class="text-emoji">Hài lòng<i id="number-lv1"></i></div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="emoji emoji-1 emoji-1-2" onclick="changeLv(1,2)">
                                            <div class="checked-emoji checked-emoji-1 hidden check-emoji-1-2">&#9989;
                                            </div>
                                            <img class="emoji-image" src="/image/emoji/2.png">
                                        </div>
                                        <div class="text-emoji">Bình thường<i id="number-lv2"></i></div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="emoji emoji-1 emoji-1-3" onclick="changeLv(1,3)">
                                            <div class="checked-emoji checked-emoji-1 hidden check-emoji-1-3">&#9989;
                                            </div>
                                            <img class="emoji-image" src="/image/emoji/3.png">
                                        </div>
                                        <div class="text-emoji">Không hài Lòng<i id="number-lv3"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div id="type-check-1" class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">2.Anh/ Chị đánh giá thế nào về kiến
                                    thức sản phẩm của nhân viên tư vấn bán hàng?</label>
                                <label id="error-1" class="error hidden">Lựa chọn của bạn?</label>

                                <div class="row">
                                    <div class="col-4 text-center">
                                        <div class="emoji emoji-2 emoji-2-1" onclick="changeLv(2,1)"
                                             data-type="0">
                                            <div class="checked-emoji checked-emoji-2 hidden check-emoji-2-1">&#9989;
                                            </div>
                                            <img class="emoji-image" src="/image/emoji/1.png">
                                        </div>
                                        <div class="text-emoji">Hài lòng<i id="number-lv1"></i></div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="emoji emoji-2 emoji-2-2" onclick="changeLv(2,2)"
                                             data-type="0">
                                            <div class="checked-emoji checked-emoji-2 hidden check-emoji-2-2">&#9989;
                                            </div>
                                            <img class="emoji-image" src="/image/emoji/2.png">
                                        </div>
                                        <div class="text-emoji">Bình thường<i id="number-lv2"></i></div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="emoji emoji-2 emoji-2-3" onclick="changeLv(2,3)"
                                             data-type="0">
                                            <div class="checked-emoji checked-emoji-2 hidden check-emoji-2-3">&#9989;
                                            </div>
                                            <img class="emoji-image" src="/image/emoji/3.png">
                                        </div>
                                        <div class="text-emoji">Không hài Lòng<i id="number-lv3"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div id="type-check-2" class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">3.Đánh giá của anh chị về thời gian
                                    giao hàng?</label>
                                <label id="error-2" class="error hidden">Lựa chọn của bạn?</label>

                                <div class="row">
                                    <div class="col-4 text-center">
                                        <div class="emoji emoji-3 emoji-3-1" onclick="changeLv(3,1)"
                                             data-type="0">
                                            <div class="checked-emoji checked-emoji-3 hidden check-emoji-3-1">&#9989;
                                            </div>
                                            <img class="emoji-image" src="/image/emoji/sp1.png">
                                        </div>
                                        <div class="text-emoji">Nhanh<i id="number-lv1"></i></div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="emoji emoji-3 emoji-3-2" onclick="changeLv(3,2)"
                                             data-type="0">
                                            <div class="checked-emoji checked-emoji-3 hidden check-emoji-3-2">&#9989;
                                            </div>
                                            <img class="emoji-image" src="/image/emoji/sp2.png">
                                        </div>
                                        <div class="text-emoji">Bình thường<i id="number-lv2"></i></div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="emoji emoji-3 emoji-3-3" onclick="changeLv(3,3)"
                                             data-type="0">
                                            <div class="checked-emoji checked-emoji-3 hidden check-emoji-3-3">&#9989;
                                            </div>
                                            <img class="emoji-image" src="/image/emoji/sp3.png">
                                        </div>
                                        <div class="text-emoji">Chậm<i id="number-lv3"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div id="type-check-3" class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">4.Anh chị đánh giá thế nào về giá bán
                                    sản phẩm của HTAUTO?</label>
                                <label id="error-3" class="error hidden">Lựa chọn của bạn?</label>
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <div class="emoji emoji-4 emoji-4-1" onclick="changeLv(4,1)"
                                             data-type="0">
                                            <div class="checked-emoji checked-emoji-4 hidden check-emoji-4-1">&#9989;
                                            </div>
                                            <img class="emoji-image" src="/image/emoji/m1.png">
                                        </div>
                                        <div class="text-emoji">Hợp lý<i id="number-lv1"></i></div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="emoji emoji-4 emoji-4-2" onclick="changeLv(4,2)"
                                             data-type="0">
                                            <div class="checked-emoji checked-emoji-4 hidden check-emoji-4-2">&#9989;
                                            </div>
                                            <img class="emoji-image" src="/image/emoji/m2.png">
                                        </div>
                                        <div class="text-emoji">Bình thường<i id="number-lv2"></i></div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="emoji emoji-4 emoji-4-3" onclick="changeLv(4,3)"
                                             data-type="0">
                                            <div class="checked-emoji checked-emoji-4 hidden check-emoji-4-3">&#9989;
                                            </div>
                                            <img class="emoji-image" src="/image/emoji/m3.png">
                                        </div>
                                        <div class="text-emoji">Chưa hợp lý<i id="number-lv3"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div id="type-check-4" class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">5.Anh/ Chị đánh giá như thế nào về
                                    chất
                                    lượng sản phẩm của HTAUTO?</label>
                                <label id="error-4" class="error hidden">Lựa chọn của bạn?</label>
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <div class="emoji emoji-5 emoji-5-1" onclick="changeLv(5,1)"
                                             data-type="0">
                                            <div class="checked-emoji checked-emoji-5 hidden check-emoji-5-1">&#9989;
                                            </div>
                                            <img class="emoji-image" src="/image/emoji/1.png">
                                        </div>
                                        <div class="text-emoji">Hài lòng<i id="number-lv1"></i></div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="emoji emoji-5 emoji-5-2" onclick="changeLv(5,2)"
                                             data-type="0">
                                            <div class="checked-emoji checked-emoji-5 hidden check-emoji-5-2">&#9989;
                                            </div>
                                            <img class="emoji-image" src="/image/emoji/2.png">
                                        </div>
                                        <div class="text-emoji">Bình thường<i id="number-lv2"></i></div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="emoji emoji-5 emoji-5-3" onclick="changeLv(5,3)"
                                             data-type="0">
                                            <div class="checked-emoji checked-emoji-5 hidden check-emoji-5-3">&#9989;
                                            </div>
                                            <img class="emoji-image" src="/image/emoji/3.png">
                                        </div>
                                        <div class="text-emoji">Không hài Lòng<i id="number-lv3"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Ý kiến đóng góp thêm ( Nếu
                                    có)</label>
                                <textarea class="form-control" rows="4" id="note" name="note"
                                          placeholder="Hãy nhập câu trả lời của bạn..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form">
                    <div class="card-details">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Họ & Tên(*)</label>
                            <label id="error-name" class="error hidden">Lựa chọn của bạn?</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="Câu trả lời của bạn...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số điện thoại(*)</label>
                            <label id="error-phone" class="error hidden">Lựa chọn của bạn?</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                   placeholder="Câu trả lời của bạn...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="Câu trả lời của bạn...">
                        </div>
                    </div>
                </div>
                <div class="container-form" style="border-top:none!important; box-shadow:none;background:none">
                    <button class="btn btn-primary" type="submit">Gửi</button>
                </div>
                <div class="container-form"
                     style="border-top:none!important; box-shadow:none;background:none; font-size: 0.7rem">
                    Báo cáo đánh giá khách hàng về công ty TNHH HTAUTO
                </div>
            </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
<script src="{{ asset('/js/survey/emoji2.js') }}"></script>

</body>
</html>
