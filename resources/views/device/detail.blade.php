@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/device.css') }}">
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="breadCrumb">
                            <h4><span>Thiết bị</span> > <a href="">Danh sách thiết bị</a></h4>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <h4 class="">Quản lý thiết bị</h4>
                <div class="row">
                    <div class="card card-info">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <p>Thông tin thiết bị</p>
                            <form method="POST" action="" enctype="multipart/form-data" id="createProduct">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group row">
                                            <label for="product_name" class="col-sm-3 col-form-label">Mã thiết bị: </label>
                                            <div class="col-sm-9">
                                                {{$device->de_code}}

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="product_price" class="col-sm-3 col-form-label">Tên thiết bị:
                                            </label>
                                            <div class="col-sm-9">
                                                {{$device->de_name}}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description" class="col-sm-3 col-form-label">Địa chỉ IP: </label>
                                            <div class="col-sm-9">
                                                {{$device->de_ip}}
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="is_sales" class="col-sm-3 col-form-label">Loại thiết bị: </label>
                                            <div class="col-sm-9">
                                                @if ($device->de_type == 1)
                                                    Kiosk
                                                @else
                                                    Display counter
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="description" class="col-sm-3 col-form-label">Tên đăng nhập: </label>
                                            <div class="col-sm-9">
                                                {{$device->de_username}}
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="description" class="col-sm-3 col-form-label">Mật khẩu: </label>
                                            <div class="col-sm-9">
                                                {{$device->de_password}}
                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description" class="col-sm-6 col-form-label">Dịch vụ sử dụng</label>
                                        <div class="col-md-10">
                                            {{$device->de_service}}
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <div class="form-group">
                            <a href="{{ route('device.update', $device->id) }}" class="btn btn-success"><i
                                    class="fas fa-backspace"></i> Cập nhập thiết bị</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
