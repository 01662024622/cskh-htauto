@extends('layouts.app')
@section('css')

@endsection
@section('content')

<br><br>
<button type="button" class="btn btn-primary" onclick="clearForm()" data-toggle="modal" href='#add-modal'>+Thêm mới</button>

<br><br>
<table class="table table-bordered" id="users-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Tên Phòng Ban</th>
      <th>Mã Phòng Ban</th>
      <th>Quản lý</th>
      <th>Chú Thích</th>
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
        <h4 class="modal-title">Thêm mới</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form id="add-form" action="{{asset('/apartments')}}" method="POST" >
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group">
            <label for="name">Tên Phòng Ban*</label>
            <input type="text" class="form-control" id="name" name="name"  placeholder="Nhập Tên Phòng Ban...">
          </div>
          <div class="form-group">
            <label for="name">Mã Phòng Ban*</label>
            <input type="text" class="form-control" id="code" name="code"  placeholder="Nhập Mã Phòng Ban...">
          </div>
          <div class="form-group">
            <label for="card-holder" class="form-label-header">Quản Lý</label>
            <select class="form-control" id="user_id" name="user_id">
              @foreach ($users as $user)
              <option value="{{ $user->id }}">{{ $user->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="name">Note</label>
            <input type="text" class="form-control" id="description" name="description"  placeholder="Chú thích...">
          </div>
          <input type="hidden" name="id" id="eid">

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Modal body..
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('js/apartment/index.js') }}"></script>

@endsection
