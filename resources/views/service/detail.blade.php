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
                <div class="row">
                    <div class="col-md-3 detail-left">
                        <h4>Thông tin dịch vụ</h4>
                        <p>Mã dịch vụ:</p>
                        <p>Tên dịch vụ:</p>
                        <p>Mô tả:</p>
                        <h4>Quy tắc cấp số</h4>
                        <p>Tăng tự động <span class="num">0001</span> đến <span class="num">9999</span></p>
                        <p>Prefix: <span class="num">0001</span></p>
                        <p>Reset mỗi ngày</p>
                        <p>Ví dụ 201-2001</p>
                    </div>
                    <div class="col-md-7 detail-right">
                        <div class="card-header">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="is_sale" class="col-sm-12 control-label">Trạng thái</label>
                                            <div class="col-sm-12">
                                                <select name="is_sale" id="is_sale" class="form-control">
                                                    <option value="0">Tất cả</option>
                                                    <option value="1">Hoạt động</option>
                                                    <option value="2">Ngưng hoạt động</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="is_sale" class="col-sm-12 control-label">Chọn thời gian</label>

                                            <div class='col-md-6'>
                                                <div class="form-group">
                                                    <div class='input-group date' id='datetimepicker6'>
                                                        <input type='text' class="form-control" />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='col-md-6'>
                                                <div class="form-group">
                                                    <div class='input-group date' id='datetimepicker7'>
                                                        <input type='text' class="form-control" />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Từ khóa</label>
                                            <input type="text" name="search_name" id="search_name"
                                                class="search_name form-control" value="" title="" placeholder="Nhập tên">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Số thứ tự</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <div class="col-md-1">
                        <a href="" class="btn btn-success" style="width: 87px;white-space: unset;"><i
                                class="fas fa-backspace"></i>
                            <p>Cập nhập danh sách</p>
                        </a>
                        <a href="" class="btn btn-default" style="width: 87px;white-space: unset;"><i
                            class="fas fa-backspace"></i>
                        <p>Quay lại</p>
                    </a>
                    </div>


                </div>
            </div>
        </section>
    </div>
@endsection
