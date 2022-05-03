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
            <form action="" method="post">
                @csrf
                @if (Auth::check())
                    <input type="hidden" name="num_device" value="Hệ thống">
                @else
                    <input type="hidden" name="num_device" value="Kiosk">
                @endif
                <div class="col-md-10 card">
                    <div class="card-header">
                    </div>
                    <!-- /.card-header -->
                    <h1 class="center">Cấp số mới</h1>
                    <p class="center">Dịch vụ khách hàng lựa chọn</p>
                    <div class="center">
                        <div class="form-group ">
                            <div class="col-md-2">
                                <select name="num_service" id="num_service" class="form-control">
                                    @foreach ($service as $item)
                                        <option value="{{ $item->id }}">{{ $item->se_name }}</option>
                                    @endforeach
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
            </form>
        </div>
        <!-- /.card -->
    </div>
    @if (Session::has('number'))
        <div class="alert alert-success alert-dismissible" style="width: 350px; height: 250px; position: fixed;left: 46%;top: 50%; z-index: 99">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <center>
                <strong>Số thứ tự được cấp</strong>
                <h1>{{$number->num_number}}</h1>
                <p>DV: {{$number->num_service}} <b>(Tại quầy số 1)</b></p>
                <div class="bottom-popup">
                    <h5>Thời gian cấp: {{date("H:i d/m/Y", strtotime($number->num_start_time))}}</h5>
                    <h5>Hạn sử dụng: {{date("H:i d/m/Y", strtotime($number->num_end_time))}}</h5>
                </div>
            </center>
        </div>
    @endif
@endsection
