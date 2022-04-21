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
                                        <label for="de_code" class="col-sm-6 col-form-label">Tên vai trò: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_code" class="form-control" id="de_code"
                                                placeholder="Nhập mã thiết bị">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="de_code" class="col-sm-6 col-form-label">Tên vai trò: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_code" class="form-control" id="de_code"
                                                placeholder="Nhập mã thiết bị">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="de_code" class="col-sm-6 col-form-label">Tên vai trò: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_code" class="form-control" id="de_code"
                                                placeholder="Nhập mã thiết bị">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="de_code" class="col-sm-6 col-form-label">Tên vai trò: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_code" class="form-control" id="de_code"
                                                placeholder="Nhập mã thiết bị">
                                            
                                        </div>
                                    </div>
                                    
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="de_code" class="col-sm-6 col-form-label">Tên vai trò: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_code" class="form-control" id="de_code"
                                                placeholder="Nhập mã thiết bị">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="de_code" class="col-sm-6 col-form-label">Tên vai trò: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_code" class="form-control" id="de_code"
                                                placeholder="Nhập mã thiết bị">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="de_code" class="col-sm-6 col-form-label">Tên vai trò: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_code" class="form-control" id="de_code"
                                                placeholder="Nhập mã thiết bị">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="de_code" class="col-sm-6 col-form-label">Tên vai trò: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="de_code" class="form-control" id="de_code"
                                                placeholder="Nhập mã thiết bị">
                                            
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
