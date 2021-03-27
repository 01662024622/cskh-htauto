<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{asset('/css/vendor/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css" media="screen">
        *, *:before, *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            min-width: 1200px;
            margin: 0;
            padding: 50px;
            color: #eee9dc;
            font: 16px Verdana, sans-serif;
            background: #2e6ba7;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        #wrapper {
            position: relative;

        }

        .branch {
            position: relative;
            margin-left: 450px;
        }

        .branch:before {
            content: "";
            width: 65px;
            border-top: 2px solid #eee9dc;
            position: absolute;
            left: -115px;
            top: 50%;
            margin-top: 1px;
        }

        .entry {
            position: relative;
            min-height: 160px;
        }

        .entry:before {
            content: "";
            height: 100%;
            border-left: 2px solid #eee9dc;
            position: absolute;
            left: -50px;
        }

        .entry:after {
            content: "";
            width: 50px;
            border-top: 2px solid #eee9dc;
            position: absolute;
            left: -50px;
            top: 50%;
            margin-top: 1px;
        }

        .entry:first-child:before {
            width: 10px;
            height: 50%;
            top: 50%;
            margin-top: 2px;
            border-radius: 10px 0 0 0;
        }

        .entry:first-child:after {
            height: 10px;
            border-radius: 10px 0 0 0;
        }

        .entry:last-child:before {
            width: 10px;
            height: 50%;
            border-radius: 0 0 0 10px;
        }

        .entry:last-child:after {
            height: 10px;
            border-top: none;
            border-bottom: 2px solid #eee9dc;
            border-radius: 0 0 0 10px;
            margin-top: -9px;
        }

        .entry.sole:before {
            display: none;
        }

        .entry.sole:after {
            width: 50px;
            height: 0;
            margin-top: 1px;
            border-radius: 0;
        }

        .label {
            display: block;
            width: 350px;
            padding: 5px 10px;
            line-height: 20px;
            text-align: center;
            border: 2px solid #eee9dc;
            border-radius: 5px;
            position: absolute;
            left: 0;
            top: calc(50% - 55px);
            margin-top: -15px;
        }

        .label-entry {
            display: block;
            width: 350px;
            padding: 5px 10px;
            line-height: 16px;
            text-align: center;
            border: 2px solid #eee9dc;
            border-radius: 5px;
            position: absolute;
            left: 14px;
            top: calc(50% - 55px);
            margin-top: -15px;
        }

        p {
            margin-bottom: 0.5rem
        }

        .lv2 {
            margin-left: 462px;
        }

        a {
            color: white;
        }
        .entry-special:after{
            top: calc(50% - 105px);
        }
        .entry-special{
            margin-bottom: -100px;
        }
    </style>
</head>
<body>
<h1 style="text-align: center">Sơ đồ tổ chức phòng ban của HTAUTO</h1>
<div id="wrapper">
    <div class="label row" style="padding-right: 0">
        <div class="col-12"><a href="/user-t1">Ban tổng giám đốc</a></div>
        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
            <div class="col-4" style="padding: 0">
                <img src="0.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-8" style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">

                <p><i class="fa fa-user" aria-hidden="true"></i> Hoàng Diệu Thúy </p>
                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Chloe Thúy Hoàng</i></p>

                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc trưởng kết nối sáng
                        tạo</i></p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i> thuy.hoang@htauto.com.vn</p>
                <p><i class="fa fa-credit-card" aria-hidden="true"></i> Tổng giám đốc</p>
            </div>
        </div>
    </div>
    <div class="branch lv1">
        <div class="entry">
            <div class="label-entry row" style="padding-right: 0">
                <div class="col-12"><a href="/user-t1">Ban phát triển</a></div>
                <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                    <div class="col-4" style="padding: 0">
                        <img src="0.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-8" style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                        <p><i class="fa fa-user" aria-hidden="true"></i> Hoàng Diệu Thúy </p>
                        <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Chloe Thúy Hoàng</i></p>
                        <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc trưởng kết nối
                                sáng
                                tạo</i></p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> thuy.hoang@htauto.com.vn</p>
                        <p><i class="fa fa-credit-card" aria-hidden="true"></i> Trưởng ban phát triển</p>
                    </div>
                </div>
            </div>

            <div class="branch lv2">
                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng R&D</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="0.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Hoàng Thanh Tâm</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Julia Tâm Hoàng</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Chuyên gia nghiên cứu và am hiểu sản phẩm</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> tam.hoang@htauto.com.vn</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> TP R&D</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng phát triển công nghệ</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Đào Ngọc Ánh</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Steve Ánh Đào</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhà khai sáng công nghệ</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> technology@aspgroup.vn</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> TP phát triển công nghệ</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng dự án chiến lược</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Phạm Việt Anh</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Miguel Việt Anh Phạm</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nghiên cứu gia</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> mar.research@htauto.com.vn</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> PT dự án chiến lược</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="entry">
            <div class="label-entry row" style="padding-right: 0">
                <div class="col-12"><a href="/user-t1">Ban chiến lược</a></div>
                <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                    <div class="col-4" style="padding: 0">
                        <img src="0.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-8" style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                        <p><i class="fa fa-user" aria-hidden="true"></i> Hoàng Diệu Thúy </p>
                        <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Chloe Thúy Hoàng</i></p>
                        <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc trưởng kết nối
                                sáng tạo</i></p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> thuy.hoang@htauto.com.vn</p>
                        <p><i class="fa fa-credit-card" aria-hidden="true"></i> Trưởng ban chiến lược</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="entry entry-special">
            <div class="label-entry row" style="padding-right: 0; top: calc(50% - 155px)">
                <div class="col-12"><a href="/user-t1">Ban Kinh doanh</a></div>
                <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                    <div class="col-4" style="padding: 0">
                        <img src="0.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-8" style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                        <p><i class="fa fa-user" aria-hidden="true"></i> Hoàng Diệu Thúy </p>
                        <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Chloe Thúy Hoàng</i></p>
                        <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Nhạc trưởng kết nối
                                sáng tạo</i></p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> thuy.hoang@htauto.com.vn</p>
                        <p><i class="fa fa-credit-card" aria-hidden="true"></i> Trưởng ban kinh doanh</p>
                    </div>
                </div>
            </div>

            <div class="branch lv2" style="top:-100px">
                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng kinh doanh ASP</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Phạm Đức Thắng</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Eric Thắng Phạm</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Người lãnh đạo phát triển ASP</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> thang.pham@aspgroup.vn</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> Giám đốc kinh doanh ASP</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng tư vấn dầu</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Nguyễn Trường Tuyên</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Felix Tuyên Nguyễn</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Chuyên gia thị trường dầu,phụ gia,nước mát</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> lube.hn@aspgroup.vn</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> TP tư vấn dầu</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng tư vấn phụ tùng</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="user-nullable.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> ?</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">?</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>?</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> ?</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> ?</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng marketing</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Nguyễn Hải Đăng</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Brembo Đăng Nguyễn</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Chuyên gia định hướng & phát triển Marketing</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> marketing@htauto.com.vn</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> Phó phòng Marketing</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng CS trải nghiệm KH</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="0.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Đặng Thị Vân Anh</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Sandy Vân Anh Đặng</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Chuyên gia am hiểu khách hàng và dịch vụ</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> cskh@htauto.com.vn</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> Quản lý cs trải nghiệm khách hàng</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng phát triển thị trường</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="user-nullable.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i>?</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">?</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>?</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> ?</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> TP Phát Triển TT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="entry">
            <div class="label-entry row" style="padding-right: 0">
                <div class="col-12"><a href="/user-t1">Ban vận hành</a></div>
                <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                    <div class="col-4" style="padding: 0">
                        <img src="1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-8" style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                        <p><i class="fa fa-user" aria-hidden="true"></i> Trịnh Văn Tô</p>
                        <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Kindly Tô Trịnh</i></p>
                        <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Chuyên gia về vận
                                hành doanh nghiệp</i></p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> to.trinh@htauto.com.vn</p>
                        <p><i class="fa fa-credit-card" aria-hidden="true"></i> Phó ban vận hành</p>
                    </div>
                </div>
            </div>

            <div class="branch lv2">
                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng quy trình</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="0.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Phạm Thúy Hợp</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Azura Hợp Phạm</i></p>

                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Chuyên gia
                                        xây dựng và kiểm soát hoạt động</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> process@htauto.com.vn</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> TP quy trình</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng kiểm soát</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="0.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Lê Thị Hà</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Alma Hà Lê</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Chuyên gia
                                        xây dựng và kiểm soát hoạt động</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> process2@htauto.com.vn</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> TP kiểm soát</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng kho</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="0.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Lê Minh Thảo</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Junie Thảo Lê</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Chuyên gia về kho hàng</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> kho.hn@htauto.com.vn</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> TP Kho Hàng</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng dịch vụ giao nhận</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Trịnh Văn Tô</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Kindly Tô Trịnh</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Chuyên gia
                                        vận chuyển</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> to.trinh@htauto.com.vn</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> TP dịch vụ giao nhận
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng hành chính nhân sự</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="0.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Đắc Thị Nhung</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Ariana Nhung Đắc</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Chuyên gia về tổ chức và thấu hiểu con người</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> hr2@htuato.com.vn</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> TP HCNS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng truyền thông nội bộ</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="user-nullable.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> ?</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">?</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>?</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> ?</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> ?</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="entry">
            <div class="label-entry row" style="padding-right: 0">
                <div class="col-12"><a href="/user-t1">Ban Tài chính</a></div>
                <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                    <div class="col-4" style="padding: 0">
                        <img src="0.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-8" style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                        <p><i class="fa fa-user" aria-hidden="true"></i> Hoàng Thị Hường</p>
                        <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px"> Maris Hường Hoàng</i></p>
                        <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Người lãnh đạo nội chính</i></p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> huong.hoang@htauto.com.vn</p>
                        <p><i class="fa fa-credit-card" aria-hidden="true"></i> Trưởng ban tài chính</p>
                    </div>
                </div>
            </div>
{{--         brand tài chính--}}
            <div class="branch lv2">
                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng kế toán</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="0.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Hoàng Thị Hường</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Maris Hường Hoàng</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Người lãnh đạo nội chính</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> huong.hoang@htauto.com.vn</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> Kế toán trưởng</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng nhập mua</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="0.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Hoàng Thị Hảo</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Merry Hảo Hoàng</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Chuyên gia nhập khẩu</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> hao.hoang@htauto.com.vn</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> TP nhập mua</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng đối ngoại</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="0.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Hoàng Thị Hảo</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Merry Hảo Hoàng</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Chuyên gia đối ngoại</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> hao.hoang@htauto.com.vn</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> TP đối ngoại</p>
                            </div>
                        </div>
                    </div>
                </div><div class="entry">
                    <div class="label-entry row" style="padding-right: 0">
                        <div class="col-12"><a href="/user-t1">Phòng tài chính</a></div>
                        <div class="col-12 row" style="margin-right: 0;padding-right: 0">
                            <div class="col-4" style="padding: 0">
                                <img src="1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8"
                                 style="font-size: 10px;text-align: left;padding-right: 0;margin-right: 0px">
                                <p><i class="fa fa-user" aria-hidden="true"></i> Trần Tuấn Anh</p>
                                <p><i class="fa fa-user-plus" aria-hidden="true"></i> <i style="font-size: 8px">Jason Tuấn Anh Trần</i></p>
                                <p style="font-size: 8px;"><i class="fa fa-rss" aria-hidden="true"></i> <i>Người điều hành tài chính</i></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> taichinh@htauto.com.vn</p>
                                <p><i class="fa fa-credit-card" aria-hidden="true"></i> TP tài chính</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>
