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
       <section class="payment-form dark">

            <div class="container-form">
                <div class="card-details">
                    <p style="font-size: 1rem">
                        <i>HTAUTO xin kính chào quý khách</i>
                        <br><br>Nhằm cải thiện và nâng cao chất lượng dịch vụ, HTAUTO mong muốn được lắng nghe các ý kiến được phản hồi từ khách hàng.
                        <br><br>Kính mong quý khách phản hồi theo thông tin dưới đây.
                        <br><br><b>Xin trân trọng cảm ơn!</b>
                        <br>
                        </p>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="container-form">
                    <div class="card-details">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Anh/ Chị đánh giá như thế nào về thái độ của Nhân viên tư vấn bán hàng HTAUTO?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="attitude" value="Hài lòng" checked>
                                    <label class="form-check-label form-label" for="exampleRadios1">Hài lòng</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="attitude" value="Bình thường">
                                    <label class="form-check-label form-label" for="exampleRadios1">Bình thường</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="attitude" value="Không hài lòng">
                                    <label class="form-check-label form-label" for="exampleRadios1">Không hài lòng</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Anh/ Chị đánh giá thế nào về kiến thức sản phẩm của nhân viên tư vấn bán hàng?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="knowledge" value="Hài lòng" checked>
                                    <label class="form-check-label form-label" for="exampleRadios1">Hài lòng</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="knowledge" value="Bình thường">
                                    <label class="form-check-label form-label" for="exampleRadios1">Bình thường</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="knowledge" value="Không hài lòng">
                                    <label class="form-check-label form-label" for="exampleRadios1">Không hài lòng</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Đánh giá của anh chị về thời gian giao hàng?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="time" value="Nhanh" checked>
                                    <label class="form-check-label form-label" for="exampleRadios1">Nhanh</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="time" value="Bình thường">
                                    <label class="form-check-label form-label" for="exampleRadios1">Bình thường</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="time" value="Chậm">
                                    <label class="form-check-label form-label" for="exampleRadios1">Chậm</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Anh chị đánh giá thế nào về giá bán sản phẩm của HTAUTO?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="cost" value="Tất cả đều hợp lý" checked>
                                    <label class="form-check-label form-label" for="exampleRadios1">Tất cả đều hợp lý</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="cost" value="Tất cả đều cao">
                                    <label class="form-check-label form-label" for="exampleRadios1">Tất cả đều cao</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="cost" value="Tùy mặt hàng, có mặt hàng hợp lý, có mặt hàng còn cao">
                                    <label class="form-check-label form-label" for="exampleRadios1">Tùy mặt hàng, có mặt hàng hợp lý, có mặt hàng còn cao</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Anh/ Chị đánh giá như thế nào về chất lượng sản phẩm của HTAUTO?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="quality" value="Hài lòng" checked>
                                    <label class="form-check-label form-label" for="exampleRadios1">Hài lòng</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="quality" value="Bình thường">
                                    <label class="form-check-label form-label" for="exampleRadios1">Bình thường</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="quality" value="Không hài lòng">
                                    <label class="form-check-label form-label" for="exampleRadios1">Không hài lòng</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label  for="card-holder" class="form-label-header">Ý kiến đóng góp thêm ( Nếu có)</label>
                                <textarea class="form-control" rows="4" id="note" name="note" placeholder="Hãy nhập câu trả lời của bạn..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-form" style="border:none!important; box-shadow:none;background:none">
                    <button class="btn btn-primary" type="submit">Gửi</button>
                </div>
                <div class="container-form" style="border:none!important; box-shadow:none;background:none; font-size: 0.7rem">
                    Báo cáo đánh giá khách hàng về công ty TNHH HTAUTO
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
<script src="{{ asset('/js/feedback/customer.js') }}"></script>

</body>
</html>
