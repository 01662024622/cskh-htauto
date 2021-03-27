<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{asset('/css/vendor/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    {{--    <link href="{{asset('/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">--}}
    <style>
        *,
        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        * {
            position: relative;
            margin: 0;
            padding: 0;

            border: 0 none;

            -webkit-transition: all ease .4s;
            -moz-transition: all ease .4s;
            transition: all ease .4s;
        }

        html,
        body {
            width: 100%;
            height: 100%;

            background: RGBA(0, 58, 97, 1);

            font-family: 'Fjalla One', sans-serif;
            font-size: 18px;
        }

        h1 {
            padding-top: 40px;

            color: #ccc;
            text-align: center;
            font-size: 1.8rem;

            text-shadow: rgba(0, 0, 0, 0.6) 1px 0, rgba(0, 0, 0, 0.6) 1px 0, rgba(0, 0, 0, 0.6) 0 1px, rgba(0, 0, 0, 0.6) 0 1px;
        }

        .nav {
            margin: 20px auto;
            min-height: auto;
        }

        .nav ul {
            position: relative;
            padding-top: 20px;
        }

        .nav li {
            position: relative;
            padding: 20px 3px 0 3px;
            float: left;

            text-align: center;
            list-style-type: none;
        }

        .nav li::before, .nav li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            width: 50%;
            height: 20px;
            border-top: 1px solid #ccc;
        }

        .nav li::after {
            left: 50%;
            right: auto;

            border-left: 1px solid #ccc;
        }

        .nav li:only-child::after, .nav li:only-child::before {
            content: '';
            display: none;
        }

        .nav li:only-child {
            padding-top: 0;
        }

        .nav li:first-child::before, .nav li:last-child::after {
            border: 0 none;
        }

        .nav li:last-child::before {
            border-right: 1px solid #ccc;
            border-radius: 0 5px 0 0;
        }

        .nav li:first-child::after {
            border-radius: 5px 0 0 0;
        }

        .nav ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 1px solid #ccc;
            width: 0;
            height: 20px;
        }

        .nav li a {
            display: inline-block;
            padding: 5px 10px;

            border-radius: 5px;
            border: 1px solid #ccc;

            text-decoration: none;
            text-transform: uppercase;
            color: #ccc;
            font-family: arial, verdana, tahoma;
            font-size: 11px;
        }


        .nav li a:hover + ul li::after,
        .nav li a:hover + ul li::before,
        .nav li a:hover + ul::before,
        .nav li a:hover + ul ul::before {
            content: '';
            border-color: #94a0b4;
        }

        p {
            margin-bottom: 5px
        }

        .header {
            font-size: 14px;
            font-weight: 700
        }

        .fa-skype:before {
            content: "\f17e";
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<h1 style="text-align: center">Sơ đồ tổ chức nhân sự phòng HCNS</h1>
<nav class="nav">
    <ul>
        <li>
            <a href="/user-t2">
                <div class="label row" style="padding-right: 0">

                    <div class="col-12 header">Ban giám đốc</div>
                    <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                        <div class="col-4">
                            <img src="0.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-8" style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                            <p><i class="fa fa-user" aria-hidden="true"></i> Chloe Thúy Hoàng</p>
                            <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc trưởng kết
                                    nối sáng tạo</i></p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> test@htauto.com.vn</p>
                            <p><i class="fa fa-skype" aria-hidden="true"></i> skype link</p>
                            <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám Đốc Điều hành</p>
                        </div>
                    </div>
                </div>
            </a>
            <ul class="row" style="width: 2700px">
                <li class="col">
                    <a href="/user-t2">
                        <div class="label row" style="padding-right: 0">
                            <div class="col-12 header">Ban giám đốc</div>
                            <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                                <div class="col-12">
                                    <img src="0.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-12"
                                     style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Chloe Thúy Hoàng</p>
                                    <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc
                                            trưởng kết nối sáng tạo</i></p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> test@htauto.com.vn</p>
                                    <p><i class="fa fa-skype" aria-hidden="true"></i> skype link</p>
                                    <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám Đốc Điều hành</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col">
                    <a href="/user-t2">
                        <div class="label row" style="padding-right: 0">

                            <div class="col-12 header">Ban giám đốc</div>
                            <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                                <div class="col-12">
                                    <img src="0.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-12"
                                     style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Chloe Thúy Hoàng</p>
                                    <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc
                                            trưởng kết nối sáng tạo</i></p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> test@htauto.com.vn</p>
                                    <p><i class="fa fa-skype" aria-hidden="true"></i> skype link</p>
                                    <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám Đốc Điều hành</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col">
                    <a href="/user-t2">
                        <div class="label row" style="padding-right: 0">

                            <div class="col-12 header">Ban giám đốc</div>
                            <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                                <div class="col-12">
                                    <img src="0.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-12"
                                     style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Chloe Thúy Hoàng</p>
                                    <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc
                                            trưởng kết nối sáng tạo</i></p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> test@htauto.com.vn</p>
                                    <p><i class="fa fa-skype" aria-hidden="true"></i> skype link</p>
                                    <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám Đốc Điều hành</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col">
                    <a href="/user-t2">
                        <div class="label row" style="padding-right: 0">

                            <div class="col-12 header">Ban giám đốc</div>
                            <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                                <div class="col-12">
                                    <img src="0.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-12"
                                     style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Chloe Thúy Hoàng</p>
                                    <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc
                                            trưởng kết nối sáng tạo</i></p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> test@htauto.com.vn</p>
                                    <p><i class="fa fa-skype" aria-hidden="true"></i> skype link</p>
                                    <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám Đốc Điều hành</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col">
                    <a href="/user-t2">
                        <div class="label row" style="padding-right: 0">

                            <div class="col-12 header">Ban giám đốc</div>
                            <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                                <div class="col-12">
                                    <img src="0.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-12"
                                     style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Chloe Thúy Hoàng</p>
                                    <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc
                                            trưởng kết nối sáng tạo</i></p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> test@htauto.com.vn</p>
                                    <p><i class="fa fa-skype" aria-hidden="true"></i> skype link</p>
                                    <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám Đốc Điều hành</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col">
                    <a href="/user-t2">
                        <div class="label row" style="padding-right: 0">

                            <div class="col-12 header">Ban giám đốc</div>
                            <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                                <div class="col-12">
                                    <img src="0.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-12"
                                     style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Chloe Thúy Hoàng</p>
                                    <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc
                                            trưởng kết nối sáng tạo</i></p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> test@htauto.com.vn</p>
                                    <p><i class="fa fa-skype" aria-hidden="true"></i> skype link</p>
                                    <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám Đốc Điều hành</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col">
                    <a href="/user-t2">
                        <div class="label row" style="padding-right: 0">
                            <div class="col-12 header">Ban giám đốc</div>
                            <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                                <div class="col-12">
                                    <img src="0.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-12"
                                     style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Chloe Thúy Hoàng</p>
                                    <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc
                                            trưởng kết nối sáng tạo</i></p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> test@htauto.com.vn</p>
                                    <p><i class="fa fa-skype" aria-hidden="true"></i> skype link</p>
                                    <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám Đốc Điều hành</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col">
                    <a href="/user-t2">
                        <div class="label row" style="padding-right: 0">
                            <div class="col-12 header">Ban giám đốc</div>
                            <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                                <div class="col-12">
                                    <img src="0.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-12"
                                     style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Chloe Thúy Hoàng</p>
                                    <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc
                                            trưởng kết nối sáng tạo</i></p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> test@htauto.com.vn</p>
                                    <p><i class="fa fa-skype" aria-hidden="true"></i> skype link</p>
                                    <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám Đốc Điều hành</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col">
                    <a href="/user-t2">
                        <div class="label row" style="padding-right: 0">

                            <div class="col-12 header">Ban giám đốc</div>
                            <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                                <div class="col-12">
                                    <img src="0.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-12"
                                     style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Chloe Thúy Hoàng</p>
                                    <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc
                                            trưởng kết nối sáng tạo</i></p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> test@htauto.com.vn</p>
                                    <p><i class="fa fa-skype" aria-hidden="true"></i> skype link</p>
                                    <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám Đốc Điều hành</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col">
                    <a href="/user-t2">
                        <div class="label row" style="padding-right: 0">

                            <div class="col-12 header">Ban giám đốc</div>
                            <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                                <div class="col-12">
                                    <img src="0.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-12"
                                     style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Chloe Thúy Hoàng</p>
                                    <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc
                                            trưởng kết nối sáng tạo</i></p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> test@htauto.com.vn</p>
                                    <p><i class="fa fa-skype" aria-hidden="true"></i> skype link</p>
                                    <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám Đốc Điều hành</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col">
                    <a href="/user-t2">
                        <div class="label row" style="padding-right: 0">

                            <div class="col-12 header">Ban giám đốc</div>
                            <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                                <div class="col-12">
                                    <img src="0.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-12"
                                     style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Chloe Thúy Hoàng</p>
                                    <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc
                                            trưởng kết nối sáng tạo</i></p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> test@htauto.com.vn</p>
                                    <p><i class="fa fa-skype" aria-hidden="true"></i> skype link</p>
                                    <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám Đốc Điều hành</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col">
                    <a href="/user-t2">
                        <div class="label row" style="padding-right: 0">

                            <div class="col-12 header">Ban giám đốc</div>
                            <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                                <div class="col-12">
                                    <img src="0.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-12"
                                     style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Chloe Thúy Hoàng</p>
                                    <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc
                                            trưởng kết nối sáng tạo</i></p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> test@htauto.com.vn</p>
                                    <p><i class="fa fa-skype" aria-hidden="true"></i> skype link</p>
                                    <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám Đốc Điều hành</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col">
                    <a href="/user-t2">
                        <div class="label row" style="padding-right: 0">

                            <div class="col-12 header">Ban giám đốc</div>
                            <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                                <div class="col-12">
                                    <img src="0.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-12"
                                     style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Chloe Thúy Hoàng</p>
                                    <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc
                                            trưởng kết nối sáng tạo</i></p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> test@htauto.com.vn</p>
                                    <p><i class="fa fa-skype" aria-hidden="true"></i> skype link</p>
                                    <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám Đốc Điều hành</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col">
                    <a href="/user-t2">
                        <div class="label row" style="padding-right: 0">

                            <div class="col-12 header">Ban giám đốc</div>
                            <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                                <div class="col-12">
                                    <img src="0.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-12"
                                     style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Chloe Thúy Hoàng</p>
                                    <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc
                                            trưởng kết nối sáng tạo</i></p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> test@htauto.com.vn</p>
                                    <p><i class="fa fa-skype" aria-hidden="true"></i> skype link</p>
                                    <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám Đốc Điều hành</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col">
                    <a href="/user-t2">
                        <div class="label row" style="padding-right: 0">

                            <div class="col-12 header">Ban giám đốc</div>
                            <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                                <div class="col-12">
                                    <img src="0.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-12"
                                     style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Chloe Thúy Hoàng</p>
                                    <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc
                                            trưởng kết nối sáng tạo</i></p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i> test@htauto.com.vn</p>
                                    <p><i class="fa fa-skype" aria-hidden="true"></i> skype link</p>
                                    <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám Đốc Điều hành</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
</body>
</html>
