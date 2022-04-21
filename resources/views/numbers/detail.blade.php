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
                            <h4><span>Cấp số</span> > <a href="">Danh sách cấp số</a></h4>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <h4 class="">Quản lý cấp số</h4>
                <div class="row">
                    <div class="card card-info">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <p>Thông tin cấp số</p>
                            <form method="POST" action="" enctype="multipart/form-data" id="createProduct">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group row">
                                            <label for="product_name" class="col-sm-3 col-form-label">Họ tên: </label>
                                            <div class="col-sm-9">
                                                

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="product_price" class="col-sm-3 col-form-label">Tên dịch vụ:
                                            </label>
                                            <div class="col-sm-9">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description" class="col-sm-3 col-form-label">Số thứ tự: </label>
                                            <div class="col-sm-9">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description" class="col-sm-3 col-form-label">Thời gian cấp: </label>
                                            <div class="col-sm-9">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description" class="col-sm-3 col-form-label">Hạn sử dụng: </label>
                                            <div class="col-sm-9">
                                                
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="is_sales" class="col-sm-3 col-form-label">Nguồn cấp: </label>
                                            <div class="col-sm-9">
                                                
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="description" class="col-sm-3 col-form-label">Trạng thái: </label>
                                            <div class="col-sm-9">
                                                
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="description" class="col-sm-3 col-form-label">Số điện thoại: </label>
                                            <div class="col-sm-9">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description" class="col-sm-3 col-form-label">Địa chỉ email: </label>
                                            <div class="col-sm-9">
                                                
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <div class="form-group">
                            <a href="" class="btn btn-success"><i
                                    class="fas fa-backspace"></i> Quay lại</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
