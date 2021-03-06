@extends('layouts.app')
@section('content')
    <style>
        label {
            margin-left: 20px;
        }

        #datepicker {
            width: 180px;
            margin: 0 20px 20px 20px;
        }

        #datepicker>span:hover {
            cursor: pointer;
        }
        .num-pagination {
            position: absolute;
            bottom: 10;
        }

        .show-pagination {
            position: absolute;
            bottom: 10;
            right: 150px;
            margin: 5px;
        }

    </style>
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="breadCrumb">
                            <h4><span>Cấp số</span> > <a href="">Danh sách cấp số</a></h4>
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
                <h4 class="text-left">Quản lý cấp số</h4>
                <form action="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="select_service" class="col-sm-12 control-label">Tên dịch vụ</label>
                                        <div class="col-sm-12">
                                            <select name="select_service" id="select_service" class="form-control"
                                            onchange="this.form.submit()">
                                                <option value="0">Tất cả</option>
                                                    @foreach($services as $service)
                                                        <option value="{{$service->id}}"
                                                            {{ \Request::get('select_service') == $service->id ? "selected='selected'" : '' }}>
                                                            {{$service->se_name}}
                                                        </option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="select_status" class="col-sm-12 control-label">Tình trạng</label>
                                        <div class="col-sm-12">
                                            <select name="select_status" id="select_status" class="form-control"
                                            onchange="this.form.submit()">
                                            <option value=""
                                            {{ \Request::get('select_status') == '' ? "selected='selected'" : '' }}>Tất cả
                                            </option>
                                            <option value="1"
                                                {{ \Request::get('select_status') == 1 ? "selected='selected'" : '' }}>Đang chờ
                                            </option>
                                            <option value="2"
                                                {{ \Request::get('select_status') == 2 ? "selected='selected'" : '' }}>Đã sử dụng
                                            </option>
                                            <option value="3"
                                                {{ \Request::get('select_status') == 3 ? "selected='selected'" : '' }}>Bỏ qua
                                            </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="select_system" class="col-sm-12 control-label">Nguồn cấp</label>
                                        <div class="col-sm-12">
                                            <select name="select_system" id="select_system" class="form-control"
                                            onchange="this.form.submit()">
                                            <option value=""
                                            {{ \Request::get('select_system') == '' ? "selected='selected'" : '' }}>Tất cả
                                            </option>
                                            <option value="Kiosk"
                                                {{ \Request::get('select_system') == 'Kiosk' ? "selected='selected'" : '' }}>Kiosk
                                            </option>
                                            <option value="Hệ thống"
                                                {{ \Request::get('select_system') == 'Hệ thống' ? "selected='selected'" : '' }}>Hệ thống
                                            </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
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

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Từ khóa</label>
                                        <input type="text" name="search_name" id="search_name"
                                            class="search_name form-control" value="" title="" placeholder="Nhập tên">
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
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên khách hàng</th>
                                <th>Tên dịch vụ</th>
                                <th>Thời gian cấp</th>
                                <th>Hạn sử dụng</th>
                                <th>Trạng thái</th>
                                <th>Nguồn cấp</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($numbers as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->num_name }}</td>
                                    <td>{{ $item->num_service }}</td>
                                    <td>{{ date('H:i d/m/Y', strtotime($item->num_start_time)) }}</td>
                                    <td>{{ date('H:i d/m/Y', strtotime($item->num_end_time)) }}</td>
                                    <td width="160px">
                                        <a href="{{ route('number.action', ['status', $item->id]) }}" name="status">
                                            <i class="{{$item->getStatus($item->num_status)['class']}}"></i> 
                                            {{$item->getStatus($item->num_status)['name']}}
                                        </a>
                                    </td>
                                    <td>{{ $item->num_device }}</td>
                                    <td>
                                        <a href="{{ route('number.detail', $item->id) }}">Chi tiết</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- /.card-body -->
            </div>
            <div class="col-md-1 col-sm-1">
                <div class="form-group">
                    <a href="{{ route('number.create') }}" class="btn btn-success button-add"><i
                            class="fas fa-plus-square"></i>
                        <p>Cấp số mới</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="pagiWrap">
            <div class="row">
                <div class="col-md-4 col-sm-6 num-pagination">
                    <div class="showreslt">Hiển thị 1-10</div>
                </div>
                <div class="col-md-8 col-sm-6 text-right show-pagination">
                    {!! $numbers->links() !!}
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
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
