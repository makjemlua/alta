@extends('layouts.app')
@section('content')
    <style>
        .center {
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-control {
            width: 300px;
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
        </section>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-10 card">
                <div class="card-header">
                </div>
                <!-- /.card-header -->
                <h1 class="center">Cấp số mới</h1>
                <p class="center">Dịch vụ khách hàng lựa chọn</p>
                <div class="center">
                    <div class="form-group ">
                        <div class="col-md-2">
                            <select name="is_sale" id="is_sale" class="form-control">
                                <option value="0">Chọn dịch vụ</option>
                                <option value="1">Khám tim mạch</option>
                                <option value="2">Khám thai</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <button class="btn btn-default">Huy bo</button>
                    <button class="btn btn-success" type="submit">In so</button>
                </div>

                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.card -->
    </div>
@endsection
