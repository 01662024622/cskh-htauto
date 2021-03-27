<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"
          rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="/css/review360/intergration.css">
    <link rel="stylesheet" type="text/css" href="/css/survey/index.css">

</head>
<body>
<form action="/HT01" method="post" id="add-form">
    @csrf
    <main class="page payment-page">
        <section class="payment-form dark">

            <div class="container-form">
                <div class="card-details">
                    <div class="header-survey">Cập nhật thông tin khách hàng thân thiết HTAUTO</div>
                    <hr>
                    <br>
                    <p>
                        Cảm ơn Quý Khách hàng đã đồng hành cùng Công ty TNHH HTAUTO Việt Nam. Phụ tùng HTAUTO trân trọng mời Quý khách tham gia hệ thống thành viên thân thiết với rất nhiều ưu đãi đặc quyền. Kính mong Quý khách bớt chút thời gian cập nhật thông tin dưới đây. Sự hợp tác của Quý khách sẽ giúp chúng tôi đáp ứng tốt hơn nhu cầu về sản phẩm và dịch vụ.
                    </p>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="container-form-body">
                    <div class="card-details">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <p class="abc">
                                <label for="card-holder" class="form-label-header">Tên Gara/Cửa hàng/Khách hàng *</label>
                                    <input class="text-button" type="text" name="name_gara" placeholder="Câu trả lời của bạn">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form-body">
                    <div class="card-details">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Tên chủ Gara/Cửa hàng *</label>
                                <input class="text-button" type="text" name="name" placeholder="Câu trả lời của bạn" maxlength="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form-body">
                    <div class="card-details">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Số điện thoại chủ Gara/Cửa hàng *</label>
                                <input class="text-button" type="text" name="phone" placeholder="Câu trả lời của bạn" maxlength="100"
                                       pattern="[0]{1}[0-9]{0,9}$">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form-body">
                    <div class="card-details">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Họ tên người phụ trách mua hàng *</label>
                                <input class="text-button" type="text" name="name_sale" placeholder="Câu trả lời của bạn" maxlength="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form-body">
                    <div class="card-details">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Số điện thoại người phụ trách mua hàng *</label>
                                <input class="text-button" type="text" name="phone_sale" placeholder="Câu trả lời của bạn" maxlength="100" pattern="[0]{1}[0-9]{0,9}$">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form-body">
                    <div class="card-details">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Họ tên kế toán (áp dụng Gara/Cửa hàng có kế toán riêng)</label>
                                <input class="text-button" type="text" name="name_accountant" placeholder="Câu trả lời của bạn" maxlength="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form-body">
                    <div class="card-details">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Số điện thoại kế toán (áp dụng Gara/Cửa hàng có kế toán riêng)</label>
                                <input class="text-button" type="text" name="phone_accountant" placeholder="Câu trả lời của bạn" maxlength="100" pattern="[0]{1}[0-9]{0,9}$">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form-body">
                    <div class="card-details">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Địa chỉ (đầy đủ: số nhà, đường, phố/phường, quận/huyện, thành phố/tỉnh) *</label>
                                <input class="text-button" type="text" name="address" placeholder="Câu trả lời của bạn" maxlength="500">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form-body">
                    <div class="card-details">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Quận/Huyện *</label>
                                <input class="text-button" type="text" name="province" placeholder="Câu trả lời của bạn" maxlength="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form-body">
                    <div class="card-details">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Tỉnh/Thành Phố *</label>
                                <input class="text-button" type="text" name="city" placeholder="Câu trả lời của bạn" maxlength="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form-body">
                    <div class="card-details">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Ngày sinh nhật của chủ Gara/Cửa hàng *</label>
                                <input id="datepicker" name="birthday" class="text-button" type="date"
                                       placeholder="dd-mm-yyyy" value=""
                                       min="1900-01-01" max="2020-12-31">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form-body">
                    <div class="card-details">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Địa chỉ Email</label>
                                <input class="text-button" type="email" name="email" placeholder="Câu trả lời của bạn" maxlength="100">
                            </div>
                        </div>
                    </div>
                </div>
                <input name="code" type="hidden" value="{{$code}}">
                <div class="container-form-body" style="border:none; box-shadow:none;background:none">
                    <button class="btn btn-primary" type="submit">Gửi</button>
                </div>
                <div class="container-form-body" style="border:none; box-shadow:none;background:none; font-size: 0.7rem">
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
<script src="{{asset('/public/js/vendor/bootstrap-datepicker.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
<script src="{{ asset('/js/survey/index.js') }}"></script>

</body>
</html>
