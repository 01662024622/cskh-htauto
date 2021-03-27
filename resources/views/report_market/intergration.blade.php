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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">

  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>

<link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
  <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  <link rel="stylesheet" type="text/css" href="/css/intergration.css">
</head>
<body id="body">

  <br><br>
  <h3>{{$name}}</h3>
  <button type="button" class="btn btn-primary" data-toggle="modal" href='#add-modal' onclick="clearForm()">Thêm mới</button>

  <br><br>
  <table class="table table-bordered table-striped" id="users-table">
    <thead>
      <tr class="table-primary">
        <th>Ngày thăm</th>
        <th>Tên khách</th>
        <th>TT tư vấn</th>
        <th>Phản hồi</th>
        <th>KHPT</th>
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
              <input type="text" class="form-control" id="feedback_other" name="feedback_other"  placeholder="Phản hồi của khách...">
            </div>
            <div class="form-group">
              <label for="name">Kế hoạch phát triển</label>
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


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $('#date_work').datepicker({
      weekStart: 1,
      daysOfWeekHighlighted: "6,0",
      autoclose: true,
      todayHighlight: true,
    });
  </script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('/js/sb-admin-2.min.js')}}"></script>
  <!-- Page level plugins -->

  <!-- Page level custom scripts -->



  <script src="{{asset('/js/jquery.validate.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
  <script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'Authorization': '{{$auth}}'
      }
    });

  </script>


  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('/js/main/intergration.js') }}"></script>

</body>
</html>
