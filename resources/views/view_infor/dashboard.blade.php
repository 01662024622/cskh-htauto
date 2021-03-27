@extends('layouts.app')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"
          rel="stylesheet"/>
    <link rel="stylesheet" href="https://rawgit.com/adrotec/knockout-file-bindings/master/knockout-file-bindings.css">
    <link rel="stylesheet" href="/public/css/okrs/key.css">
    <link rel="stylesheet" href="/public/css/okrs/index.css">
    <link rel="stylesheet" href="/public/css/okrs/dashboard.css">
    <link rel="stylesheet" href="{{asset('/vendor/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/vendor/css/rowGroup.bootstrap4.min.css')}}">
@endsection
@section('content')
    <div class="row kpi-main-header">
        <div class="col-4">
            <div class="box-kpi">
                <div class="kpi-header">
                    <i class="fa fa-caret-right" aria-hidden="true"></i> Tổng hợp năm
                </div>
                <form id="target-kpi-form" method="POST" action="/targetkpi">
                    <div class="target-body">
                        <div class="kpi-target row" id="kpi-year-2021">
                            <div class="col-3">
                                <div id="number-kpi-year-2021" class="number-kpi-year">0</div>
                            </div>
                            <div class="col-6">Năm 2021</div>
                            <div id="total-kpi-year-2021" class="col-3 text-right total-kpi-month">0%</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-8">
            <div class="box-kpi">
                <div class="kpi-header row">
                    <div id="user-detail-kpi" class="col-10"></div>
                    <div class="col-2 text-right"><span class="btn btn-sm btn-link analytics"
                                                        onclick="changeTypeShow()">Thống kê</span><span
                            class="btn btn-sm btn-link analytics hidden" onclick="changeTypeShow()">Số liệu</span></div>
                </div>

                <div class="kpi-body analytics">
                    <div class="row kpi-month">
                        <div class="col-4 row kpi-moth-detail" id="kpi-month-detail-1" onclick="changeMonth(1)" data-status="disabled">
                            <div class="col-3">
                                <div id="number-kpi-month-1" class="number-kpi-year">0</div>
                            </div>
                            <div class="col-6">Tháng 1</div>
                            <div id="total-kpi-month-1" class="col-3 text-right total-kpi-month">0%</div>
                        </div>
                        <div class="col-4 row kpi-moth-detail" id="kpi-month-detail-2" onclick="changeMonth(2)" data-status="disabled">
                            <div class="col-3">
                                <div id="number-kpi-month-2" class="number-kpi-year">0</div>
                            </div>
                            <div class="col-6">Tháng 2</div>
                            <div id="total-kpi-month-2" class="col-3 text-right total-kpi-month">0%</div>
                        </div>
                        <div class="col-4 row kpi-moth-detail" id="kpi-month-detail-3" onclick="changeMonth(3)" data-status="disabled">
                            <div class="col-3">
                                <div id="number-kpi-month-3" class="number-kpi-year">0</div>
                            </div>
                            <div class="col-6">Tháng 3</div>
                            <div id="total-kpi-month-3" class="col-3 text-right total-kpi-month">0%</div>
                        </div>
                        <div class="col-4 row kpi-moth-detail" id="kpi-month-detail-4" onclick="changeMonth(4)" data-status="disabled">
                            <div class="col-3">
                                <div id="number-kpi-month-4" class="number-kpi-year">0</div>
                            </div>
                            <div class="col-6">Tháng 4</div>
                            <div id="total-kpi-month-4" class="col-3 text-right total-kpi-month">0%</div>
                        </div>
                        <div class="col-4 row kpi-moth-detail" id="kpi-month-detail-5" onclick="changeMonth(5)" data-status="disabled">
                            <div class="col-3">
                                <div id="number-kpi-month-5" class="number-kpi-year">0</div>
                            </div>
                            <div class="col-6">Tháng 5</div>
                            <div id="total-kpi-month-5" class="col-3 text-right total-kpi-month">0%</div>
                        </div>
                        <div class="col-4 row kpi-moth-detail" id="kpi-month-detail-6" onclick="changeMonth(6)" data-status="disabled">
                            <div class="col-3">
                                <div id="number-kpi-month-6" class="number-kpi-year">0</div>
                            </div>
                            <div class="col-6">Tháng 6</div>
                            <div id="total-kpi-month-6" class="col-3 text-right total-kpi-month">0%</div>
                        </div>
                        <div class="col-4 row kpi-moth-detail" id="kpi-month-detail-7" onclick="changeMonth(7)" data-status="disabled">
                            <div class="col-3">
                                <div id="number-kpi-month-7" class="number-kpi-year">0</div>
                            </div>
                            <div class="col-6">Tháng 7</div>
                            <div id="total-kpi-month-7" class="col-3 text-right total-kpi-month">0%</div>
                        </div>
                        <div class="col-4 row kpi-moth-detail" id="kpi-month-detail-8" onclick="changeMonth(8)" data-status="disabled">
                            <div class="col-3">
                                <div id="number-kpi-month-8" class="number-kpi-year">0</div>
                            </div>
                            <div class="col-6">Tháng 8</div>
                            <div id="total-kpi-month-8" class="col-3 text-right total-kpi-month">0%</div>
                        </div>
                        <div class="col-4 row kpi-moth-detail" id="kpi-month-detail-9" onclick="changeMonth(9)" data-status="disabled">
                            <div class="col-3">
                                <div id="number-kpi-month-9" class="number-kpi-year">0</div>
                            </div>
                            <div class="col-6">Tháng 9</div>
                            <div id="total-kpi-month-9" class="col-3 text-right total-kpi-month">0%</div>
                        </div>
                        <div class="col-4 row kpi-moth-detail" id="kpi-month-detail-10" onclick="changeMonth(10)" data-status="disabled">
                            <div class="col-3">
                                <div id="number-kpi-month-10" class="number-kpi-year">0</div>
                            </div>
                            <div class="col-6">Tháng 10</div>
                            <div id="total-kpi-month-10" class="col-3 text-right total-kpi-month">0%</div>
                        </div>
                        <div class="col-4 row kpi-moth-detail" id="kpi-month-detail-11" onclick="changeMonth(11)" data-status="disabled">
                            <div class="col-3">
                                <div id="number-kpi-month-11" class="number-kpi-year">0</div>
                            </div>
                            <div class="col-6">Tháng 11</div>
                            <div id="total-kpi-month-11" class="col-3 text-right total-kpi-month">0%</div>
                        </div>
                        <div class="col-4 row kpi-moth-detail" id="kpi-month-detail-12" onclick="changeMonth(12)" data-status="disabled">
                            <div class="col-3">
                                <div id="number-kpi-month-12" class="number-kpi-year">0</div>
                            </div>
                            <div class="col-6">Tháng 12</div>
                            <div id="total-kpi-month-12" class="col-3 text-right total-kpi-month">0%</div>
                        </div>
                    </div>
                </div>
                <div class="kpi-body analytics hidden">
                    <canvas id="myChart"></canvas>
                </div>
            </div>

        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <span style="line-height: 35px">Ghi chú mức độ quan trọng:</span>
        <span>5 Điểm(<div class="level-box color-lv-2" aria-hidden="true"></div>)--</span>
        <span>10 Điểm(<div class="level-box color-lv-4" aria-hidden="true"></div>)--</span>
        <span>15 Điểm(<div class="level-box color-lv-6" aria-hidden="true"></div>)--</span>
        <span>20 Điểm(<div class="level-box color-lv-8" aria-hidden="true"></div>)</span>
        <br>
        <br>
    </div>


    <div class="row" id="kpi">
        <table class="table table-bordered dataTable no-footer">
            <thead id="detail-table-all-header">
            <th>
                Mục tiêu
            </th>
            <th>
                Điểm
            </th>
            <th style="padding-right: 15px">
                <div class="row">
                    <div class="col-8">
                        Kpi
                    </div>
                    <div class="col-1">
                        Điểm
                    </div>
                    <div class="col-1">
                        Time
                    </div>
                    <div class="col-2">
                        Kết quả
                    </div>
                </div>
            </th>
            </thead>
            <tbody id="detail-table-all-body">
            </tbody>
        </table>
    </div>
    <!-- The Modal manager Target-->




    <!-- Set rusult months -->
    <div class="modal" id="set-result-month-modal">
        <div class="modal-dialog" id="modal-set-width" style="max-width: 1200px;">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Thêm mới</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div id="detail-container-modal" class="col-4">
                            <div class="">
                                <b for="name">Tên Kpi</b>
                                <p id="name-kpi" class="kpi-detail-show">Kpi A</p>
                            </div>
                            <div class="">
                                <p id="detail-kpi-show" class="kpi-detail-show">
                                    <b for="name">điểm: </b>
                                    <i class="fa fa-square" style="color: green" aria-hidden="true"></i>--5 Điểm
                                    <b for="name">Tháng: </b><span id="kpi-detail-month">1</span>
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="name"><b>Kết quả</b></label>
                                <input id="result-kpi-detail" type="text" class="form-control form-control-sm"
                                       pattern="^\d{0,3}(\.\d{0,2})?$" name="result" placeholder="Kết quả Kpi">
                            </div>
                        </div>
                        <div id="result-container-modal" class="col-8">

                            <form id="result-detail-form" method="POST" action="/results">
                                <div class="row">
                                    <div class="col-2">
                                        <input type="text" class="form-control form-control-sm" name="date"
                                               id="result-date">
                                    </div>
                                    <div class="col-7">
                                        <input type="text" class="form-control form-control-sm" name="description"
                                               placeholder="Mô tả...">
                                    </div>
                                    <div class="col-2">
                                        <input type="text" class="form-control form-control-sm" name="number"
                                               placeholder="Số lần vi phạm...">
                                        <input type="hidden" name="kr_id" id="eid-krs">
                                    </div>
                                    <div class="col-1">
                                        <button type="submit" class="btn btn-link">Thêm</button>
                                    </div>
                                </div>
                            </form>
                            <table class="table table-bordered" id="results-table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ngày vi phạm</th>
                                    <th>Mô tả</th>
                                    <th>số lần</th>
                                    <th>Hành Động</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" id="kpis-result-detail" class="btn btn-sm btn-link" onclick="saveResult()">
                        Lưu
                    </button>
                    <button type="button" class="btn btn-sm btn-link" onclick="removeResult()">Xóa</button>
                    <button type="button" class="btn btn-sm btn-link" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    {{--    <script src="{{ asset('js/okrs/key.js') }}"></script>--}}
    <script src="{{ asset('js/okrs/dashboard.js') }}"></script>
    <script src="{{ asset('js/okrs/key.js') }}"></script>
@endsection
