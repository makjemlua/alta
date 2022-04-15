@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/device.css') }}">
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <div class="breadCrumb">
                            <h4><span>Thiết bị</span> > <a href="">Danh sách thiết bị</a></h4>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="">
                                <!-- Button trigger modal -->
                                <button type="button" class="buton-bell" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-solid fa-bell"></i>
                                </button>
                            </li>
                            <li class="icon-avatar"><img
                                    src="https://live.staticflickr.com/7418/27269083173_c3fd44968a_h.jpg" alt=""></li>
                            <li class="icon-name">
                                <p class="xin-chao">Xin chao</p>
                                <a href="{{route('user.index')}}" class="icon-user-name">Le Quynh Ai Van</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <h4 class="text-left">Quản lý thiết bị</h4>
                <form action="">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="is_sale" class="col-sm-12 control-label">Trạng thái hoạt động</label>
                                        <div class="col-sm-10">
                                            <select name="is_sale" id="is_sale" class="form-control">
                                                <option value="0">Tất cả</option>
                                                <option value="1">Hoạt động</option>
                                                <option value="2">Ngưng hoạt động</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="is_sale" class="col-sm-12 control-label">Trạng thái kết nối</label>
                                        <div class="col-sm-10">
                                            <select name="is_sale" id="is_sale" class="form-control">
                                                <option value="0">Tất cả</option>
                                                <option value="1">Kết nối</option>
                                                <option value="2">Mất kết nối</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 align-content-end">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
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
                                <th>Mã thiết bị</th>
                                <th>Tên thiết bị</th>
                                <th>Địa chỉ IP</th>
                                <th>Trạng thái hoạt động</th>
                                <th>Trạng thái kết nối</th>
                                <th>Dịch vụ sử dụng</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>KIO_01</td>
                                <td>kiosk</td>
                                <td>192.168.1.10</td>
                                <td>Ngưng hoạt động</td>
                                <td>Mất kết nối</td>
                                <td>Khám tim mạch, khám mắt</td>
                                <td>Chi tiết</td>
                                <td>Cập nhập</td>
                            </tr>
                            <tr>
                                <td>KIO_01</td>
                                <td>kiosk</td>
                                <td>192.168.1.10</td>
                                <td>Ngưng hoạt động</td>
                                <td>Mất kết nối</td>
                                <td>Khám tim mạch, khám mắt</td>
                                <td>Chi tiết</td>
                                <td>Cập nhập</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- /.card-body -->
            </div>
            <div class="col-md-1 col-sm-1">
                <div class="form-group">
                    <button type="button" class="btn btn-success deleteSearch"><i class="fas fa-backspace"></i> Thêm thiết bị</button>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
@endsection