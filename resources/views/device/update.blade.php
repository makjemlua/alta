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
                @foreach ($services as $item)
                    <input class="item" type="hidden" name="pname[]" value="{{ $item }}">
                @endforeach
                <div class="card card-info">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <p>Thông tin thiết bị</p>
                        <form method="POST" action="" enctype="multipart/form-data" onkeydown="return event.key != 'Enter';">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="de_code" class="col-sm-6 col-form-label">Mã thiết bị: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_code" class="form-control" id="de_code"
                                                placeholder="Nhập mã thiết bị" value="{{ $device->de_code }}">
                                            @if ($errors->has('de_code'))
                                                <div class="error">{{ $errors->first('de_code') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="de_name" class="col-sm-6 col-form-label">Tên thiết bị: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_name" class="form-control"
                                                id="de_name" placeholder="Nhập tên thiết bị"
                                                value="{{ $device->de_name }}">
                                            @if ($errors->has('de_name'))
                                                <div class="error">{{ $errors->first('de_name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="de_ip" class="col-sm-6 col-form-label">Địa chỉ IP: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_ip" class="form-control"
                                                id="de_ip" placeholder="Nhập địa chỉ IP"
                                                value="{{ $device->de_ip }}">
                                            @if ($errors->has('de_password'))
                                                <div class="error">{{ $errors->first('de_password') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="de_type" class="col-sm-6 col-form-label">Loại thiết bị: *</label>
                                        <div class="col-sm-9">

                                            <select name="de_type" id="de_type" class="form-control">
                                                <option value="0">Kiosk</option>
                                                <option value="2">Display counter</option>
                                            </select>
                                            <div class="error" id="errorSales"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="de_username" class="col-sm-6 col-form-label">Tên đăng nhập: *</label>
                                        <div class="col-sm-9">

                                            <input type="text" name="de_username" class="form-control"
                                                id="de_username" placeholder="Nhập tài khoản"
                                                value="{{ $device->de_username }}">
                                            @if ($errors->has('de_username'))
                                                <div class="error">{{ $errors->first('de_username') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="de_password" class="col-sm-6 col-form-label">Mật khẩu: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_password" class="form-control"
                                                id="de_password" placeholder="Nhập mật khẩu"
                                                value="{{ $device->de_password }}">
                                            @if ($errors->has('de_password'))
                                                <div class="error">{{ $errors->first('de_password') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="de_service" class="col-sm-6 col-form-label">Dịch vụ sử dụng</label>
                                    <div class="col-md-10">
                                        <input type="text" name="de_service" class="form-control tags_input" id="de_service"
                                            placeholder="Nhập dịch vụ sử dụng" value="{{ $device->de_service }}"/>
                                        @if ($errors->has('de_service'))
                                            <div class="error">{{ $errors->first('de_service') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <p>* là trường thông tin bắt buộc</p>
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
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="{{ asset('js/fm.tagator.jquery.js') }}"></script>
    <script>
        const data = $("input[name='pname[]']")
            .map(function() {
                return $(this).val();
            }).get();
        
        $('.tags_input').tagator({
            autocomplete: data,
            useDimmer: true,
            showAllOptionsOnFocus: true,
        });
    </script>
@endsection
