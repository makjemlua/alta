@extends('layouts.app')
@section('content')
<style>label{
    margin-left: 20px;
    }
    #datepicker{
    width:180px; 
    margin: 0 20px 20px 20px;
    }
    #datepicker > span:hover{
    cursor: pointer;
    }</style>
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
                        <div class="col-md-10">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="de_active" class="col-sm-12 control-label">Trạng thái hoạt động</label>
                                        <div class="col-sm-10">
                                            <select name="active" id="de_active" class="form-control"
                                            onchange="this.form.submit()">
                                                <option value=""
                                                    {{ \Request::get('active') == '' ? "selected='selected'" : '' }}>Tất
                                                    cả
                                                </option>
                                                <option value="1"
                                                    {{ \Request::get('active') == 1 ? "selected='selected'" : '' }}>Hoạt động
                                                </option>
                                                <option value="2"
                                                    {{ \Request::get('active') == 2 ? "selected='selected'" : '' }}>Ngưng hoạt động
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <form action="" id="form-time">
                                    <div class="form-group">
                                        <label for="is_sale" class="col-sm-12 control-label">Chọn thời gian</label>

                                        <div class='col-md-5'>
                                            <div class="form-group">
                                               <div class='input-group date' id='datetimepicker6'>
                                                  <input type='text' class="form-control" name="time_start" {{ \Request::get('time_start')}} value="{{ $start }}"/>
                                                  <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-calendar"></span>
                                                  </span>
                                               </div>
                                            </div>
                                         </div>
                                         <div class='col-md-5'>
                                            <div class="form-group">
                                               <div class='input-group date' id='datetimepicker7'>
                                                  <input type='text' class="form-control" name="time_end" {{ \Request::get('time_end')}} value="{{ $end }}"/>
                                                  <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-calendar"></span>
                                                  </span>
                                               </div>
                                            </div>
                                        </div>
                                        <div class='col-md-2'>
                                            <div class="form-group">
                                               <div class='input-group date' id='datetimepicker7'>
                                                  <button type="submit" class="btn btn-default">Xác nhận</button>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>

                                <div class="col-md-3 align-content-end">
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
                                <th>Mã dịch vụ</th>
                                <th>Tên dịch vụ</th>
                                <th>Mô tả</th>
                                <th>Trạng thái hoạt động</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{ $service->se_code }}</td>
                                    <td>{{ $service->se_name }}</td>
                                    <td>{{ $service->se_describe }}</td>
                                    <td width="160px">
                                        <a href="{{ route('service.action', ['active', $service->id]) }}">
                                            <i class="{{$service->getStatus($service->se_active)['class']}}"></i> 
                                            {{$service->getStatus($service->se_active)['name']}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('service.detail', $service->id) }}">Chi tiết</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('service.update', $service->id) }}">Cập nhập</a>
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
                    <a href="{{ route('service.create') }}" class="btn btn-success button-add"><i
                            class="fas fa-plus-square"></i>
                        <p>Thêm dịch vụ</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker6').datetimepicker({
                format: 'YYYY-MM-DD'
            });
            $('#datetimepicker7').datetimepicker({
                format: 'YYYY-MM-DD'
            });
            $("#datetimepicker6").on("dp.change", function (e) {
                $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
                $('#datetimepicker6').mouseleave(function (e) {
                    //$(this).parents('form').submit();
                })
            });
            
            $("#datetimepicker7").on("dp.change", function (e) {
                $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
                $('#datetimepicker7').mouseleave(function (e) {
                    //$(this).parents('form').submit();
                })
            });
        });
    </script>
@endsection
