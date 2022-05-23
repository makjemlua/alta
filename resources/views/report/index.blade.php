@extends('layouts.app')
@section('content')
    <style>
        label {
            margin-left: 20px;
        }
        .card-body
        {
            height: 450px;
        }

        #datepicker {
            width: 180px;
            margin: 0 20px 20px 20px;
        }

        #datepicker>span:hover {
            cursor: pointer;
        }

    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="breadCrumb">
                            <h4><span>Dịch vụ</span> > <a href="">Danh sách dịch vụ</a></h4>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <h4 class="text-left">Quản lý dịch vụ</h4>
                <form action="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4 align-items-start">
                                <div class="form-group">
                                    <label for="is_sale" class="col-sm-12 control-label">Chọn thời gian</label>
                                    <div class='col-md-6'>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker6'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-6'>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker7'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
        </section>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-10 card">
                <div class="card-header">
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered" id="dataTable">
                        @php
                            $i = 1;
                        @endphp
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên dịch vụ</th>
                                <th>Thời gian cấp</th>
                                <th>Trạng thái</th>
                                <th>Nguồn cấp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reports as $report)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $report->num_name }}</td>
                                    <td>{{ $report->num_start_time }}</td>
                                    <td>
                                        @if ($report->num_status == 1)
                                            <i class="fas fa-circle active"></i> Đang chờ
                                        @elseif($report->num_status == 0)
                                            <i class="fas fa-circle inactive"></i> Đã sử dụng
                                        @elseif($report->num_status == 3)
                                            <i class="fas fa-circle ignore"></i> Bỏ qua
                                        @endif
                                    </td>
                                    <td>{{ $report->num_device }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class="pagiWrap">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 num-pagination">
                                <div class="showreslt">Hiển thị 1-10</div>
                            </div>
                            <div class="col-md-5 col-sm-6 text-right show-pagination">
                                {!! $reports->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="col-md-1 col-sm-1">
                <div class="form-group">
                    <a href="{{ route('report.export') }}" class="btn btn-success button-add"><i
                            class="fas fa-plus-square"></i>
                        <p>Tải về</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" defer></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').DataTable({
                paging: false,
                ordering: true,
                searching: false,
                "bInfo" : false
            });
        });
        $(function() {
            $('#datetimepicker6').datetimepicker({
                format: 'YYYY-MM-DD'
            });
            $('#datetimepicker7').datetimepicker({
                format: 'YYYY-MM-DD'
            });
            $("#datetimepicker6").on("dp.change", function(e) {
                $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
            });
            $("#datetimepicker7").on("dp.change", function(e) {
                $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
            });
        });
    </script>
@endsection
