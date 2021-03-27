@extends('layouts.app')
@section('css')
  <link rel="stylesheet" type="text/css" href="/css/intergration.css">
@endsection
@section('content')

 <br><br>
  <button type="button" class="btn btn-primary" data-toggle="modal" href='#add-modal' onclick="clearForm()">Thêm mới</button>

  <br><br>
  <table class="table table-bordered table-striped" id="users-table">
    <thead>
      <tr>
        <th>Ngày thăm</th>
        <th>Tên khách</th>
        <th>TT tư vấn</th>
        <th>Phản hồi</th>
        <th>KHPT</th>
        <th>Phân loại</th>
        <th>Quy mô</th>
        <th>SP&DV</th>
        <th>Xung quanh</th>
        <th>Tác vụ</th>
      </tr>
    </thead>
  </table>



  <!-- The Modal -->
  <div class="modal" id="add-modal">
    <div class="modal-dialog" style="max-width: 700px;">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Báo cáo thị trường</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <form id="add-form" action="{{asset('/report/market')}}" method="POST" >
          <!-- Modal body -->
          <div class="modal-body">

            <div class="form-group">
              <label for="exampleFormControlSelect1">Ngày vào thăm</label>
              <input class="form-control" data-date-format="dd/mm/yyyy" id="date_work" name="date_work">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Khách hàng</label>
              <select class="form-control selectpicker" data-live-search="true" id="customer_id" name="customer_id">
                @foreach ($customers as $customer)
                <option value="{{ $customer->Code }}">{{ $customer->Name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="name">Tiến trình tư vấn</label>
                <select class="form-control" id="advisory" name="advisory">
                    <option value="Chào hàng lần đầu">Chào hàng lần đầu</option>
                    <option value="Thăm lại khách đã chào hàng">Thăm lại khách đã chào hàng</option>
                    <option value="Thăm lại khách đã nhập hàng">Thăm lại khách đã nhập hàng</option>
                    <option value="Thăm khách hàng ký gửi">Thăm khách hàng ký gửi</option>
                    <option value="Telesales">Telesales</option>
                    <option value="Thúc đẩy doanh số bán hàng">Thúc đẩy doanh số bán hàng</option>
                    <option value="Mở thêm SKU, Brand mới">Mở thêm SKU, Brand mới</option>
                </select>
            </div>
            <div class="form-group">
              <label for="name">Phản hồi của khách / Noted</label>
              <input type="text" class="form-control" id="feedback" name="feedback"  placeholder="Phản hồi của khách...">
            </div>
            <div class="form-group">
              <label for="name">Phản hồi khác</label>
                <select class="form-control" id="dev_plan" name="dev_plan">
                    <option value="Tiếp tục chăm sóc">Tiếp tục chăm sóc</option>
                    <option value="Dừng chăm sóc, khách không tiềm năng">Dừng chăm sóc, khách không tiềm năng</option>
                    <option value="Cấp vật dụng POSM, làm hình ảnh tại điểm bán">Cấp vật dụng POSM, làm hình ảnh tại điểm bán</option>
                    <option value="Ký gửi sản phẩm">Ký gửi sản phẩm</option>
                    <option value="Tập dung Dầu Số">Tập dung Dầu Số</option>
                    <option value="Tập trung đẩy Phụ Gia ">Tập trung đẩy Phụ Gia </option>
                    <option value="Tập trung Dầu Động Cơ">Tập trung Dầu Động Cơ</option>
                    <option value="Khác">Khác</option>
                </select>
            </div>
            <div class="form-group">
              <label for="name">Kế hoạch phát triển</label>
              <input type="text" class="form-control" id="dev_plan" name="dev_plan"  placeholder="Kế hoạch phát triển...">
            </div>
            <div class="form-group">
              <label for="name">Phân loại khách hàng</label>
              <select class="form-control" id="type" name="type">
                <option value="Khác">Khác</option>
                <option value="Bỏ">Bỏ</option>
                <option value="Bình Thường">Bình Thường</option>
                <option value="Đang Lấy">Đang Lấy</option>
                <option value="Tiềm Năng">Tiềm Năng</option>
              </select>
            </div>
            <div class="form-group">
              <label for="name">Quy mô / loại hình KD / phân khúc</label>
              <select class="form-control" id="scale" name="scale">
                <option value="Gara vừa">Gara vừa</option>
                <option value="Cửa hàng phụ tùng">Cửa hàng phụ tùng</option>
                <option value="Đại lý lớn">Đại lý lớn</option>
                <option value="Trung cấp">Trung cấp</option>
                <option value="Cao cấp">Cao cấp</option>
              </select>
            </div>

            <div class="form-group">
              <label for="name">Sản phẩm & dịch vụ</label>
              <input type="text" class="form-control" id="service" name="service"  placeholder="Sản phẩm & dịch vụ...">
            </div>

            <div class="form-group">
              <label for="name">Thị trường xung quanh (Trục đường, quanh 100m)</label>
              <input type="text" class="form-control" id="type_market" name="type_market"  placeholder="Thị trường xung quanh...">
            </div>
            <div class="form-group">
              <label for="name">Ảnh Trước</label>
              <label class="labelimage labelimage_1"><i class="icon-download-alt"></i> Đã có</label>
              <input type="file" class="form-control" id="image_1" name="image_1"  data-buttonText="Hello there, pick your files" accept="image/png, image/jpeg, image/jpg">
            </div>
            <div class="form-group">
              <label for="name">Ảnh khu trưng bày</label>
              <label class="labelimage labelimage_2"><i class="icon-download-alt"></i> Đã có</label>
              <input type="file" class="form-control" id="image_2" name="image_2"  data-buttonText="Hello there, pick your files" accept="image/png, image/jpeg , image/jpg">
            </div>
            <div class="form-group">
              <label for="name">Ảnh Khác</label>
              <label class="labelimage labelimage_3"><i class="icon-download-alt"></i> Đã có</label>
              <input type="file" class="form-control" id="image_3" name="image_3"  data-buttonText="Hello there, pick your files" accept="image/png, image/jpeg, image/jpg">
            </div>

            <input type="hidden" name="id" id="eid">

          </div>

          <!-- Modal footer -->
          <div class="modal-footer">

            <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-primary">Lưu</button>
          </div>
        </form>
      </div>
    </div>
  </div>



@endsection

@section('js')
<script src="{{ asset('js/main/report_market.js') }}"></script>

@endsection
