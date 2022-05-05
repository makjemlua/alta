@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">

    <div class="content-wrapper">
        <div class="card">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('img/upload/' . $user->avatar) }}" alt="" class="avatar-user">
                    <div class="avatar-input">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="file-upload" class="custom-file-upload">
                                <i class="fa fa-solid fa-camera"></i>
                            </label>
                            <input id="file-upload" name="avatar" accept="image/jpeg, image/jpg" type="file"
                                onchange="form.submit()" />
                        </form>
                    </div>
                    <div class="d-flex justify-content-center user-name">
                        <p>{{ $user->username }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group col-md-8">
                        <label for="name">Tên người dùng</label>
                        <input type="name" name="name" id="name" class="form-control" value="{{ $user->username }}"
                            disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Số điện thoại</label>
                        <input type="name" name="name" id="name" class="form-control" value="{{ $user->phone }}"
                            disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Email</label>
                        <input type="name" name="name" id="name" class="form-control" value="{{ $user->email }}"
                            disabled>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group col-md-8">
                        <label for="name">Tên đăng nhập</label>
                        <input type="name" name="name" id="name" class="form-control" value="{{ $user->name }}"
                            disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Mật khẩu</label>
                        <input type="name" name="name" id="name" class="form-control" value="********" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Vai trò</label>
                        <input type="name" name="name" id="name" class="form-control"
                            value="@if ($user->group_role == 1) Admin @elseif($user->group_role == 2) User @endif"
                            disabled>
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
