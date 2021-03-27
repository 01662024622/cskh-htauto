@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/review360/intergration.css">
@endsection
@section('content')
<main class="page payment-page">
    <section class="payment-form dark">
        <br><br>
        <div class="container">
            <div class="container-form">

                <div class="products">
                    <h2 class="title">Báo Cáo</h2>
                    <div class="item">
                        <span class="price">{{Auth::user()->name}}</span>
                        <p class="item-name">Họ và Tên</p>
                    </div>
                    <div class="item">
                        <span class="price">{{$apartment}}</span>
                        <p class="item-name">Phòng ban</p>
                    </div>
                </div>

            </div>
            <div class="container-form">
                <div class="card-details">
                    <h3 class="title">Loại đánh giá</h3>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="card-holder" class="form-label-header">Chọn thể loại feedback mà bạn muốn.</label>
                            <select class="form-control" id="type" name="type">
                                <option disabled selected value> -- Chọn -- </option>
                                <option value="review">Feedback thái độ làm việc</option>
                                <option value="qc">Quy trình và lỗi sai số liệu</option>
                                <option value="giao-nhan">Feedback khách hàng</option>
                                <option value="san-pham">Feedback Kho</option>
{{--                                <option value="pr">Feedback đối ngoại</option>--}}
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div id="review" class="report">

                <div class="container-form">
                    <div class="card-details">
                        <h3 class="title">Phản Ánh Phòng Ban</h3>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Theo bạn bộ phận/phòng/ban nào cần "cải thiện" về việc hợp tác cùng nhau trong công việc? *</label>
                                <select class="form-control" id="apartment_id" name="apartment_id">
                                    <option disabled selected value> -- Chọn -- </option>
                                    @foreach ($apartments as $apartment)
                                    <option value="{{ $apartment->id }}">{{ $apartment->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-form" id="custom" style="display: none;">
                    <div class="card-details">
                        <h3 class="title">Nội Dung Phản Ánh</h3>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Tên "cá nhân" trong bộ phận cần cải thiện (nếu có). Trường hợp không nêu đích danh NV, TBP được góp ý sẽ chịu trách nhiệm</label>
                                <select class="form-control" id="user_id" name="user_id">
                                </select>
                            </div>

                            <div class="form-group col-12">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header" >Nội dung phản ánh(*)</label>
                                <input class="text-button" type="text" placeholder="Câu trả lời của bạn" id="content_att">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form" style="border:none; box-shadow:none;background:none">
                    <button class="btn btn-primary" type="submit" id="submit" disabled>Gửi</button>
                </div>

            </div> {{-- review 360 --}}

            <div id="giao-nhan" class="report">
                <div class="container-form">
                    <div class="card-details">
                        <h3 class="title">Feedback khách hàng</h3>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Số toa *</label>
                                <input class="text-button validate-feedback" type="text" name="order-feedback" id="order-feedback" placeholder="Câu trả lời của bạn">
                                <br>
                                <br>
                                <br>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Nội dung khách hàng feedback *</label>
                                <input class="text-button validate-feedback" type="text" name="content-feedback" id="content-feedback" placeholder="Câu trả lời của bạn">
                                <br>
                                <br>
                                <br>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Cá nhân góp ý (nếu có)</label>
                                <input class="text-button" type="text" name="note-feedback" id="note-feedback" placeholder="Câu trả lời của bạn">
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form" style="border:none; box-shadow:none;background:none">
                    <button class="btn btn-primary" type="submit" id="submit-feedback" disabled>Gửi</button>
                </div>
            </div>

            <div id="san-pham" class="report">
                <div class="container-form">
                    <div class="card-details">
                        <h3 class="title">Chạy cửa, bỏ toa, SKU xuất nhập sai</h3>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Hãy chọn loại feedback mà bạn muốn*</label>
                                <select class="form-control" id="type-wh" name="type-wh">
                                    <option disabled selected value> -- Chọn -- </option>
                                    <option value="CC">Chạy cửa</option>
                                    <option value="BT">Bỏ toa</option>
                                    <option value="SKU">SKU bị xuất nhập sai</option>
                                    <option value="QC">Các lỗi sai về QC</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="container-form warehouse" id="amount">
                    <div class="card-details">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Hãy nhập mã sản phẩm*</label>
                                <input class="text-button wh-text" type="text" name="code-product" id="code-product" placeholder="Câu trả lời của bạn">
                                <br>
                                <br>
                                <br>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Hãy nhập số lượng*</label>
                                <input class="text-button wh-text" type="text" name="amount-wh" id="amount-wh" placeholder="Câu trả lời của bạn">
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-form warehouse" id="quality">
                    <div class="card-details">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header" >Nội dung cần phản ánh (nếu có), có thể tích nhiều lựa chọn</label>
                                <div class="form-check">
                                    <input class="form-check-input check-box-wh" type="checkbox" value="20">
                                    <label class="form-check-label form-label" for="defaultCheck1">Không xé tem nhãn</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input check-box-wh" type="checkbox" value="21">
                                    <label class="form-check-label form-label" for="defaultCheck1">Nhận hàng không rõ nguồn gốc</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input check-box-wh" type="checkbox" value="22">
                                    <label class="form-check-label form-label" for="defaultCheck1">Hàng hỏng không báo</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input check-box-wh" type="checkbox" value="23">
                                    <label class="form-check-label form-label" for="defaultCheck1">KV LV không sạch sẽ: Bàn làm việc, giá kệ, sàn</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input check-box-wh" type="checkbox" value="24">
                                    <label class="form-check-label  form-label" for="defaultCheck1">Giấy tờ lung tung ở giá kệ, tường, bàn,…</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input check-box-wh" type="checkbox" value="25">
                                    <label class="form-check-label  form-label" for="defaultCheck1">Để hàng không đúng vị trí</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input check-box-wh" type="checkbox" value="26">
                                    <label class="form-check-label  form-label" for="defaultCheck1">Một mặt hàng để quá nhiều vị trí</label>
                                </div>

                                <div class="form-check">
                                    <label style="max-width: 30%">

                                        <label><input class="form-check-input" type="checkbox" value="" id="new-checkbox-wh" onclick="return false;"></label>
                                        <label class="form-check-label  form-label"> Mục khác:</label>
                                    </label>
                                    <label class="form-check-label  form-label" for="defaultCheck1" style="min-width: 70%">
                                        <input class="text-button" id="new-checkbox-text-wh" type="text" value="" placeholder="Câu trả lời của bạn">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form" style="border:none; box-shadow:none;background:none">
                    <button class="btn btn-primary" type="submit" id="submit-wh" disabled>Gửi</button>
                </div>
            </div>



{{--            <div id="pr" class="report">--}}
{{--                <div class="container-form">--}}
{{--                    <div class="card-details">--}}
{{--                        <h3 class="title">Feedback đối ngoại</h3>--}}
{{--                        <div class="row">--}}
{{--                            <div class="form-group col-sm-12">--}}
{{--                                <label for="card-holder" class="form-label-header">Số lần không phản hồi email*</label>--}}
{{--                                <input class="text-button" type="number" name="amount-pr" id="amount-pr" placeholder="Câu trả lời của bạn">--}}
{{--                                <br>--}}
{{--                                <br>--}}
{{--                                <br>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="container-form" style="border:none; box-shadow:none;background:none">--}}
{{--                    <button class="btn btn-primary" type="submit" id="submit-pr" disabled>Gửi</button>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div id="qc" class="report">

                <div class="container-form">
                    <div class="card-details">
                        <h3 class="title">Phản Ánh Phòng Ban</h3>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Theo bạn bộ phận/phòng/ban nào cần lưu ý về quy trình hoặc lỗi sai số liệu? *</label>
                                <select class="form-control" id="apartment_id_qc" name="apartment_id_qc">
                                    <option disabled selected value> -- Chọn -- </option>
                                    @foreach ($apartments as $apartment)
                                        <option value="{{ $apartment->id }}">{{ $apartment->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-form" id="custom_qc" style="display: none;">
                    <div class="card-details">
                        <h3 class="title">Nội Dung Phản Ánh</h3>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header">Tên "cá nhân" trong bộ phận cần cải thiện (nếu có). Trường hợp không nêu đích danh NV, TBP được góp ý sẽ chịu trách nhiệm</label>
                                <select class="form-control" id="user_id_qc" name="user_id_qc">
                                </select>
                                <br>
                                <br>
                                <br>
                            </div>

                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header" >Tên quy trình hoặc lỗi sai số liệu(*)</label>
                                <input class="text-button text-qc" type="text" value="" name="" placeholder="Câu trả lời của bạn" id="name_qc">
                                <br>
                                <br>
                                <br>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header" >Nội dung phản ánh(*)</label>
                                <input class="text-button text-qc" type="text" value="" name="" placeholder="Câu trả lời của bạn" id="content_qc">
                                <br>
                                <br>
                                <br>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="card-holder" class="form-label-header" >Ảnh chụp</label>
                                <input class="" type="file" placeholder="Câu trả lời của bạn" id="image_qc" accept="image/*">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-form" style="border:none; box-shadow:none;background:none">
                    <button class="btn btn-primary" type="submit" id="submit_qc" disabled>Gửi</button>
                </div>

            </div>

<div class="container-form" style="border:none; box-shadow:none;background:none; font-size: 0.7rem">
    Báo cáo đánh giá của nhân viên công ty TNHH HTAuto
</div>

</div>
</section>
</main>

@endsection

@section('js')
<script src="{{ asset('js/review360/intergration.js') }}"></script>
@endsection


