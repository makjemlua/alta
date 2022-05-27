@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="breadCrumb">
                            <h4><span>Dịch vụ > <a href="">Danh sách dịch vụ</a></h4>
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
                                                value="{{ $service->se_code }}">
                                            @if ($errors->has('se_code'))
                                                <div class="error">{{ $errors->first('se_code') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="se_name" class="col-sm-6 col-form-label">Tên dịch vụ: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="se_name" class="form-control" id="se_name"
                                                value="{{ $service->se_name }}">
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
                                            <textarea class="form-control" name="se_describe" rows="3">{{ $service->se_describe }}</textarea>
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
                                    <input class="form-check-input" name="check_se_num" type="checkbox" value="" id="flexCheckDefault" checked>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Tăng tự động từ <input type="text" class="form-control form-control-inline"
                                            width="2px" name="se_start_num" id="" value="{{$service->se_start_num}}"> đến <input type="text"
                                            class="form-control form-control-inline" width="2px" name="se_end_num" id="" value="{{$service->se_end_num}}">
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="check_se_prefix" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Prefix <input type="text" class="form-control form-control-inline" width="2px"
                                            name="se_prefix" id="" value="{{$service->se_prefix}}">
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="check_se_suffix" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Surfix <input type="text" class="form-control form-control-inline" width="2px"
                                            name="se_surfix" id="" value="{{$service->se_surfix}}">
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="check_reset" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Reset mỗi ngày
                                    </label>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <a href="{{ route('device.index') }}" class="btn btn-default" name="cancel"
                                    class="form-control" id="cancel">Hủy bỏ</a>
                                <button type="submit" class="btn btn-success" name="submit" class="form-control"
                                    id="submit">Cập nhập</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
