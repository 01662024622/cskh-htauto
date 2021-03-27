@extends('layouts.app')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>

@endsection
@section('content')

<br><br>
<button type="button" class="btn btn-primary" data-toggle="modal" href='#add-modal' onclick="clearForm()">Thêm mới</button>

<br><br>
<table class="table table-bordered" id="users-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Tên Người Dùng</th>
      <th>Email Đăng Nhập</th>
      <th>Số Điện Thoại</th>
      <th>Quyền Hạn</th>
      <th>Hành Động</th>
    </tr>
  </thead>
</table>


<!-- The Modal -->
<div class="modal" id="add-modal">
  <div class="modal-dialog" style="max-width: 700px;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thông Tin Người Dùng</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form id="add-form" action="{{asset('/users')}}" method="POST" >
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group">
            <label for="name">Tên Người Dùng*</label>
            <input type="text" class="form-control" id="name" name="name"  placeholder="Nhập Họ và Tên...">
          </div>
          <div class="form-group">
            <label for="name">Chức Vụ</label>
            <input type="text" class="form-control" id="position" name="position"  placeholder="Nhập Chức Vụ Người Dùng...">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Phòng Ban</label>
            <select class="form-control" id="apartment_id" name="apartment_id">
              @foreach ($apartments as $apartment)
              <option value="{{$apartment->id}}">{{$apartment->code}}-{{$apartment->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="name">Địa Điểm</label>
            <select class="form-control" id="location" name="location">
              <option value="Hà Nội">Hà Nội</option>
              <option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
{{--              <option value="An Giang">An Giang</option>--}}
{{--              <option value="Bà Rịa–Vũng Tàu">Bà Rịa – Vũng Tàu</option>--}}
{{--              <option value="Bắc Giang">Bắc Giang</option>--}}
{{--              <option value="Bắc Kạn">Bắc Kạn</option>--}}
{{--              <option value="Bạc Liêu">Bạc Liêu</option>--}}
{{--              <option value="Bắc Ninh">Bắc Ninh</option>--}}
{{--              <option value="Bến Tre">Bến Tre</option>--}}
{{--              <option value="Bình Định">Bình Định</option>--}}
{{--              <option value="Bình Dương">Bình Dương</option>--}}
{{--              <option value="Bình Phước">Bình Phước</option>--}}
{{--              <option value="Bình Thuận">Bình Thuận</option>--}}
{{--              <option value="Cà Mau">Cà Mau</option>--}}
{{--              <option value="Cần Thơ">Cần Thơ</option>--}}
{{--              <option value="Cao Bằng">Cao Bằng</option>--}}
{{--              <option value="Đà Nẵng">Đà Nẵng</option>--}}
{{--              <option value="Đắk Lắk">Đắk Lắk</option>--}}
{{--              <option value="Đắk Nông">Đắk Nông</option>--}}
{{--              <option value="Điện Biên">Điện Biên</option>--}}
{{--              <option value="Đồng Nai">Đồng Nai</option>--}}
{{--              <option value="Đồng Tháp">Đồng Tháp</option>--}}
{{--              <option value="Gia Lai">Gia Lai</option>--}}
{{--              <option value="Hà Giang">Hà Giang</option>--}}
{{--              <option value="Hà Nam">Hà Nam</option>--}}
{{--              <option value="Hà Tĩnh">Hà Tĩnh</option>--}}
{{--              <option value="Hải Dương">Hải Dương</option>--}}
{{--              <option value="Hải Phòng">Hải Phòng</option>--}}
{{--              <option value="Hậu Giang">Hậu Giang</option>--}}
{{--              <option value="Hòa Bình">Hòa Bình</option>--}}
{{--              <option value="Hưng Yên">Hưng Yên</option>--}}
{{--              <option value="Khánh Hòa">Khánh Hòa</option>--}}
{{--              <option value="Kiên Giang">Kiên Giang</option>--}}
{{--              <option value="Kon Tum">Kon Tum</option>--}}
{{--              <option value="Lai Châu">Lai Châu</option>--}}
{{--              <option value="Lâm Đồng">Lâm Đồng</option>--}}
{{--              <option value="Lạng Sơn">Lạng Sơn</option>--}}
{{--              <option value="Lào Cai">Lào Cai</option>--}}
{{--              <option value="Long An">Long An</option>--}}
{{--              <option value="Nam Định">Nam Định</option>--}}
{{--              <option value="Nghệ An">Nghệ An</option>--}}
{{--              <option value="Ninh Bình">Ninh Bình</option>--}}
{{--              <option value="Ninh Thuận">Ninh Thuận</option>--}}
{{--              <option value="Phú Thọ">Phú Thọ</option>--}}
{{--              <option value="Phú Yên">Phú Yên</option>--}}
{{--              <option value="Quảng Bình">Quảng Bình</option>--}}
{{--              <option value="Quảng Nam">Quảng Nam</option>--}}
{{--              <option value="Quảng Ngãi">Quảng Ngãi</option>--}}
{{--              <option value="Quảng Ninh">Quảng Ninh</option>--}}
{{--              <option value="Quảng Trị">Quảng Trị</option>--}}
{{--              <option value="Sóc Trăng">Sóc Trăng</option>--}}
{{--              <option value="Sơn La">Sơn La</option>--}}
{{--              <option value="Tây Ninh">Tây Ninh</option>--}}
{{--              <option value="Thái Bình">Thái Bình</option>--}}
{{--              <option value="Thái Nguyên">Thái Nguyên</option>--}}
{{--              <option value="Thanh Hóa">Thanh Hóa</option>--}}
{{--              <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>--}}
{{--              <option value="Tiền Giang">Tiền Giang</option>--}}
{{--              <option value="Trà Vinh">Trà Vinh</option>--}}
{{--              <option value="Tuyên Quang">Tuyên Quang</option>--}}
{{--              <option value="Vĩnh Long">Vĩnh Long</option>--}}
{{--              <option value="Vĩnh Phúc">Vĩnh Phúc</option>--}}
{{--              <option value="Yên Bái">Yên Bái</option>--}}
            </select>
          </div>
          <div class="form-group">
            <label for="name">Skype</label>
            <input type="text" class="form-control" id="skype" name="skype"  placeholder="Nhập Skype Người Dùng...">
          </div>
          <div class="form-group">
            <label for="name">Email HTAuto</label>
            <input type="email" class="form-control" id="email_htauto" name="email_htauto"  placeholder="Nhập Email HTAuto...">
          </div>
          <div class="form-group">
            <label for="name">SĐT</label>
            <input type="tel" class="form-control" id="phone" name="phone"  placeholder="Nhập Số Điện Thoại Cá Nhân...">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Ngày sinh</label>
            <input class="form-control" data-date-format="dd/mm/yyyy" id="birth_day" name="birth_day">
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


<script src="{{ asset('js/user/users.js') }}"></script>

@endsection
