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
                    <br><br>Nhằm cải thiện và nâng cao chất lượng dịch vụ, HTAUTO mong muốn mang đến cho khách hàng dịch
                    vụ bảo hành thuận tiện nhất.
                    <br><br>Kính mong quý khách phản hồi thông tin bảo hành dưới đây.
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
                            <label for="card-holder" class="form-label-header">Anh chị hãy chọn loại sản phẩm mình muốn bảo hành(*)</label>

{{--                            ///--}}
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown_coins"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    Bạn muốn bảo hành loại sản phẩm nào?
                                </button>
                                <div id="menu" class="dropdown-menu" aria-labelledby="dropdown_coins">
                                    <input type="search" class="form-control" id="searchCoin" placeholder="Lựa chọn của bạn..."
                                           autofocus="autofocus">
                                    <div id="menuItems"></div>
                                    <div id="empty" class="dropdown-header">Không tìm thấy giá trị phù hợp</div>
                                </div>
                            </div>
{{--                            ///--}}

                            <div id="content-insurance"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container-form"
                 style="border:none!important; box-shadow:none;background:none; font-size: 0.7rem">
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
<script>
    var names = [
            @foreach ($data as $value)
        {"id": {{ $value->id }}, "name": "{{ $value->name }}"},
        @endforeach
    ];
</script>
<script src="{{ asset('/js/feedback/customer.js') }}"></script>

</body>
</html>
