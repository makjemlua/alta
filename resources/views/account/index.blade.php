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
                            <h4><span>Cài đặt hệ thống</span> > <a href="">Quản lý tài khoản</a></h4>
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
                <h4 class="text-left">Danh sách tài khoản</h4>
                <form action="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="is_sale" class="col-sm-12 control-label">Tên vai trò</label>
                                    <div class="col-sm-12">
                                        <select name="is_sale" id="is_sale" class="form-control">
                                            <option value="0">Kế toán</option>
                                            <option value="1">Quản lý</option>
                                            <option value="2">Admin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
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
                                <th>Tên đăng nhập</th>
                                <th>Họ tên</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Vai trò</th>
                                <th>Trạng thái hoạt động</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->username}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>
                                        @if ($item->group_role == 1)
                                            Kế toán
                                        @elseif($item->group_role == 2)
                                            Quản lý
                                        @elseif($item->group_role == 3)
                                            Admin
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->active == 1)
                                            Hoạt động
                                        @elseif($item->active == 2)
                                            Ngưng hoạt động
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('account.update', 1) }}">Cập nhập</a>
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
                    <a href="{{ route('account.create') }}" class="btn btn-success button-add"><i
                            class="fas fa-plus-square"></i>
                        <p>Thêm tài khoản</p>
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
v
