@extends('layouts.app')
@section('content')
    <style>
        .text-sm {
            font-size: 10px !important;
        }
    </style>
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
                                        <label for="de_active" class="col-sm-12 control-label">Trạng thái hoạt động</label>
                                        <div class="col-sm-10">
                                            <select name="active" id="de_active" class="form-control"
                                                onchange="this.form.submit()">
                                                <option value=""
                                                    {{ \Request::get('active') == '' ? "selected='selected'" : '' }}>Tất
                                                    cả
                                                </option>
                                                <option value="1"
                                                    {{ \Request::get('active') == 1 ? "selected='selected'" : '' }}>Hoạt
                                                    động
                                                </option>
                                                <option value="2"
                                                    {{ \Request::get('active') == 2 ? "selected='selected'" : '' }}>Ngưng
                                                    hoạt động
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="de_connect" class="col-sm-12 control-label">Trạng thái kết nối</label>
                                        <div class="col-sm-10">
                                            <select name="connect" id="de_connect" class="form-control"
                                                onchange="this.form.submit()">
                                                <option value=""
                                                    {{ \Request::get('connect') == '' ? "selected='selected'" : '' }}>Tất
                                                    cả
                                                </option>
                                                <option value="1"
                                                    {{ \Request::get('connect') == 1 ? "selected='selected'" : '' }}>Kết
                                                    nối
                                                </option>
                                                <option value="2"
                                                    {{ \Request::get('connect') == 2 ? "selected='selected'" : '' }}>Mất
                                                    kết nối
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 align-content-end">
                                    <form action="" method="GET">
                                        <div class="form-group">
                                            <label>Từ khóa</label>
                                            <input type="text" name="search" id="search" class="search form-control"
                                                value="{{ \Request::get('search') }}" title="" placeholder="Nhập tên">
                                        </div>
                                    </form>
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
                            @foreach ($devices as $device)
                                <tr>
                                    <td>{{ $device->de_code }}</td>
                                    <td>{{ $device->de_name }}</td>
                                    <td>{{ $device->de_ip }}</td>
                                    <td width="160px">
                                        <a href="{{ route('device.action', ['active', $device->id]) }}">
                                            <i class="{{$device->getStatus($device->de_active)['class']}}"></i> 
                                            {{$device->getStatus($device->de_active)['name']}}
                                        </a>
                                    </td>
                                    <td width="160px">
                                        <a href="{{ route('device.action', ['connect', $device->id]) }}">
                                            <i class="{{$device->getConnect($device->de_connect)['class']}}"></i> 
                                            {{$device->getConnect($device->de_connect)['name']}}
                                        </a>
                                    </td>
                                    <td>
                                        <p id="more-{{ $device->id }}" class="read-more">
                                            {{ $device->de_service }}
                                        </p>
                                        <a href="" class="xemtoanbo">Xem thêm</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('device.detail', $device->id) }}">Chi tiết</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('device.update', $device->id) }}">Cập nhập</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class="pagiWrap">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 num-pagination">
                                <div class="showreslt">Hiển thị 1-5</div>
                            </div>
                            <div class="col-md-8 col-sm-6 text-right show-pagination">
                                {!! $devices->links() !!}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <a href="{{ route('device.create') }}" class="btn btn-success button-add"><i
                            class="fas fa-plus-square"></i>
                        <p>Thêm thiết bị</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script>
        $(".xemtoanbo").click(function(e) {
            e.preventDefault()
            let el = $(this).parent('td').children('p');
            el.removeClass('read-more');
            $(this).remove();
        });
    </script>
@endsection
