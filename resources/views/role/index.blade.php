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

    </style>
    <link rel="stylesheet" href="{{ asset('css/role.css') }}">
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="breadCrumb">
                            <h4><span>Cài đặt hệ thống</span> > <a href="">Quản lý vai trò</a></h4>
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
                <h4 class="text-left">Danh sách vai trò</h4>
                <form action="">
                    <div class="container">
                        <div class="row search-role">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Từ khóa</label>
                                    <input type="text" name="search_name" id="search_name" class="search_name form-control"
                                        value="" title="" placeholder="Nhập tên">
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
                                <th>Tên vai trò</th>
                                <th>Số người dùng</th>
                                <th>Mô tả</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $item)
                                <tr>
                                    <td>{{$item->ro_name}}</td>
                                    <td>6</td>
                                    <td>{{$item->ro_describe}}</td>
                                    <td>
                                        <a href="{{ route('role.update', $item->id) }}">Cập nhập</a>
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
                    <a href="{{ route('role.create') }}" class="btn btn-success button-add"><i
                            class="fas fa-plus-square"></i>
                        <p>Thêm vai trò</p>
                    </a>
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
