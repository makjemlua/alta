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
                                        <label for="de_code" class="col-sm-6 col-form-label">Họ tên: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_code" class="form-control" id="de_code"
                                                placeholder="">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="de_code" class="col-sm-6 col-form-label">Số điện thoại: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_code" class="form-control" id="de_code"
                                                placeholder="">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="de_code" class="col-sm-6 col-form-label">Email: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_code" class="form-control" id="de_code"
                                                placeholder="">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="de_code" class="col-sm-6 col-form-label">Vai trò: *</label>
                                        <div class="col-sm-9">
                                            <select name="is_sale" id="is_sale" class="form-control">
                                                <option value="1">Kế toán</option>
                                                <option value="2">Quản lý</option>
                                                <option value="3">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="de_code" class="col-sm-6 col-form-label">Tên đăng nhập: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_code" class="form-control" id="de_code"
                                                placeholder="">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="de_code" class="col-sm-6 col-form-label">Mật khẩu: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_code" class="form-control" id="de_code"
                                                placeholder="">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="de_code" class="col-sm-6 col-form-label">Nhập lại mật khẩu: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_code" class="form-control" id="de_code"
                                                placeholder="">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="de_code" class="col-sm-6 col-form-label">Tình trạng: *</label>
                                        <div class="col-sm-9">
                                            <select name="is_sale" id="is_sale" class="form-control">
                                                <option value="1">Ngưng hoạt động</option>
                                                <option value="2">Hoạt động</option>
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
