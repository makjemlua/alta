@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="">
                                <!-- Button trigger modal -->
                                <button type="button" class="buton-bell" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-solid fa-bell"></i>
                                </button>
                            </li>
                            <li class="icon-avatar"><img
                                    src="https://live.staticflickr.com/7418/27269083173_c3fd44968a_h.jpg" alt=""></li>
                            <li class="icon-name">
                                <p class="xin-chao">Xin chao</p>
                                <p class="icon-user-name">Le Quynh Ai Van</p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="content-wrapper">
        <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://live.staticflickr.com/8165/7681941764_0748811979.jpg" alt="" class="avatar-user">
                    <div class="avatar-input">
                        <a href="" class=""><i class="fa fa-solid fa-camera"></i></a>
                    </div>
                    <div class="d-flex justify-content-center user-name">
                        <p>Lê Quỳnh Ái Vân</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group col-md-8">
                        <label for="name">Tên người dùng</label>
                        <input type="name" name="name" id="name" class="form-control" placeholder="Nguyễn Văn An" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Số điện thoại</label>
                        <input type="name" name="name" id="name" class="form-control" placeholder="0987654321" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Email</label>
                        <input type="name" name="name" id="name" class="form-control" placeholder="nguyenan@gmail.com" disabled>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group col-md-8">
                        <label for="name">Tên đăng nhập</label>
                        <input type="name" name="name" id="name" class="form-control" placeholder="nguyenan" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Mật khẩu</label>
                        <input type="name" name="name" id="name" class="form-control" placeholder="123456" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Vai trò</label>
                        <input type="name" name="name" id="name" class="form-control" placeholder="Kế toán" disabled>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                            <tr>
                                <th scope="row">
                                    <p class="user-bell">Người dùng: Nguyen Thi Thuy Dung</p>
                                    <p class="time-bell">Thời gian nhận so: 12h20 ngay 30/01/2022</p>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <p class="user-bell">Người dùng: Nguyen Thi Thuy Dung</p>
                                    <p class="time-bell">Thời gian nhận so: 12h20 ngay 30/01/2022</p>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <p class="user-bell">Người dùng: Nguyen Thi Thuy Dung</p>
                                    <p class="time-bell">Thời gian nhận so: 12h20 ngay 30/01/2022</p>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <p class="user-bell">Người dùng: Nguyen Thi Thuy Dung</p>
                                    <p class="time-bell">Thời gian nhận so: 12h20 ngay 30/01/2022</p>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <p class="user-bell">Người dùng: Nguyen Thi Thuy Dung</p>
                                    <p class="time-bell">Thời gian nhận so: 12h20 ngay 30/01/2022</p>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="{{ asset('js/jquery.twbsPagination.min.js') }}"></script>
    <script src="{{ asset('js/user/user.js') }}"></script>
@endsection
