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
                        <form method="GET" action="{{ route('role.created') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="name" class="col-sm-6 col-form-label">Tên vai trò: *</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Nhập tên vai trò">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="col-sm-6 col-form-label">Mô tả: *</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <p>Phân quyền chức năng</p>
                                    <h4>Nhóm chức năng A</h4>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkAll" name="role[]" value="" id="role"
                                            >
                                        <label class="form-check-label" for="role">
                                            Tất cả
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="role[]" value="1" id="role">
                                        <label class="form-check-label" for="role">
                                            Chức năng Xem
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="role[]" value="2" id="role">
                                        <label class="form-check-label" for="role">
                                            Chức năng Thêm, xóa, sửa
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="role[]" value="3" id="role">
                                        <label class="form-check-label" for="role">
                                            Chức năng Truy cập tất cả
                                        </label>
                                    </div>
                                </div>


                            </div>
                            <div class="form-group text-center">
                                <a href="" class="btn btn-default" name="cancel" class="form-control" id="cancel">Hủy
                                    bỏ</a>
                                <button type="submit" class="btn btn-success" name="submit" class="form-control"
                                    id="submit">Thêm</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script language="JavaScript">
        $("#checkAll").click(function() {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
    </script>
@endsection
