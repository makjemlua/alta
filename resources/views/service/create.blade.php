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
                            <h4><span>Dịch vụ</span> > <a href="">Danh sách dịch vụ</a></h4>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <h4 class="">Quản lý dịch vụ</h4>
                <div class="card card-info">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <p>Thông tin dịch vụ</p>
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="se_code" class="col-sm-6 col-form-label">Mã dịch vụ: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="se_code" class="form-control" id="se_code"
                                                placeholder="Nhập mã thiết bị">
                                            @if ($errors->has('se_code'))
                                                <div class="error">{{ $errors->first('se_code') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="se_name" class="col-sm-6 col-form-label">Tên dịch vụ: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="se_name" class="form-control" id="se_name"
                                                placeholder="Nhập tên thiết bị">
                                            @if ($errors->has('se_name'))
                                                <div class="error">{{ $errors->first('se_name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="se_describe" class="col-sm-6 col-form-label">Mô tả: *</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="se_describe" id="se_describe" rows="3"></textarea>
                                            @if ($errors->has('se_describe'))
                                                <div class="error">{{ $errors->first('se_describe') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="col-md-12">
                                <h4>Quy tắc cấp số</h4>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Tăng tự động từ <span class="num">0001</span> đến <span
                                            class="num">9999</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Prefix <span class="num">0001</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Surfix <span class="num">0001</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Reset mỗi ngày
                                    </label>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <a href="{{ route('device.index') }}" class="btn btn-default" name="cancel"
                                    class="form-control" id="cancel">Hủy bỏ</a>
                                <button type="submit" class="btn btn-success" name="submit" class="form-control"
                                    id="submit">Thêm thiết bị</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
