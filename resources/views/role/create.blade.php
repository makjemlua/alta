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
                            <h4><span>Dịch vụ</span> > <a href="">Danh sách vai trò</a></h4>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <h4 class="">Quản lý vai trò</h4>
                <div class="card card-info">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <p>Thông tin vai trò</p>
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="ro_name" class="col-sm-6 col-form-label">Tên vai trò: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ro_name" class="form-control" id="ro_name"
                                                placeholder="Nhập tên vai trò">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ro_describe" class="col-sm-6 col-form-label">Mô tả: *</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="ro_describe" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <p>Phân quyền chức năng</p>
                                    <h4>Nhóm chức năng A</h4>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Tất cả
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Chức năng A
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Chức năng B
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Chức năng C
                                        </label>
                                    </div>

                                    <h4>Nhóm chức năng B</h4>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Tất cả
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Chức năng X
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Chức năng Y
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Chức năng Z
                                        </label>
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
