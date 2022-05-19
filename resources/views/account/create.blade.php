@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/role.css') }}">
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="breadCrumb">
                            <h4><span>Cài đặt hệ thống</span> > <span>Quản lý tài khoản</span> > <a href="">Thêm tài khoản</a></h4>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <h4 class="">Quản lý tài khoản</h4>
                <div class="card card-info">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <p>Thông tin tài khoản</p>
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="username" class="col-sm-6 col-form-label">Họ tên: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="username" class="form-control" id="username"
                                                placeholder="">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="col-sm-6 col-form-label">Số điện thoại: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="phone" class="form-control" id="phone"
                                                placeholder="">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-6 col-form-label">Email: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="email" class="form-control" id="email"
                                                placeholder="">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="role" class="col-sm-6 col-form-label">Vai trò: *</label>
                                        <div class="col-sm-9">
                                            <select name="role" id="role" class="form-control">
                                                @foreach ($roles as $item)
                                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="col-sm-6 col-form-label">Tên đăng nhập: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-6 col-form-label">Mật khẩu: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="password" class="form-control" id="password"
                                                placeholder="">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="repassword" class="col-sm-6 col-form-label">Nhập lại mật khẩu: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="repassword" class="form-control" id="repassword"
                                                placeholder="">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="active" class="col-sm-6 col-form-label">Tình trạng: *</label>
                                        <div class="col-sm-9">
                                            <select name="active" id="active" class="form-control">
                                                <option value="1">Hoạt động</option>
                                                <option value="2">Ngưng hoạt động</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="form-group text-center">
                                <a href="" class="btn btn-default" name="cancel"
                                    class="form-control" id="cancel">Hủy bỏ</a>
                                <button type="submit" class="btn btn-success" name="submit" class="form-control"
                                    id="submit">Thêm</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
