<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    @include('components.linkcss')
    <style>
        .center {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 10px;
        }

        .form-control {
            width: 300px;
        }

    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Trang quản trị</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        {{-- <a href="#" class="d-block">{{Auth::user()->name}}</a> --}}
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li> -->

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-shopping-cart"></i>
                                <p>
                                    Cấp số
                                </p>
                            </a>
                        </li>

                    </ul>
                    <li class="nav-item button-logout">
                        <a href="" class="nav-link">

                            <a href="{{ route('logout.index') }}" class="btn btn-logout"><i
                                    class="fas fa-sign-out-alt"></i>&nbsp;Đăng xuất</a>
                        </a>
                    </li>

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Main content -->
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
                                <div class="col-md-12">
                                    <select name="num_service" id="num_service" class="form-control">
                                        @foreach ($service as $item)
                                            <option value="{{ $item->id }}|{{ $item->se_name }}">
                                                {{ $item->se_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Tên người dùng</label>
                                <input type="name" name="username" id="username" class="form-control" value=""
                                    placeholder="Nhập tên người dùng" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Số điện thoại</label>
                                <input type="name" name="phone" id="phone" class="form-control" value=""
                                    placeholder="Nhập số điện thoại" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="name" name="email" id="email" class="form-control" value=""
                                    placeholder="Nhập email" required>
                            </div>
                        </div>
                        <div class="">
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
            <div class="alert alert-success alert-dismissible"
                style="width: 350px; height: 250px; position: fixed;left: 46%;top: 68%; z-index: 99">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <center>
                    <strong>Số thứ tự được cấp</strong>
                    <h1>{{ $number->num_number }}</h1>
                    <p>DV: {{ $number->num_service }} <b>(Tại quầy số 1)</b></p>
                    <div class="bottom-popup">
                        <h5>Thời gian cấp: {{ date('H:i d/m/Y', strtotime($number->num_start_time)) }}</h5>
                        <h5>Hạn sử dụng: {{ date('H:i d/m/Y', strtotime($number->num_end_time)) }}</h5>
                    </div>
                </center>
            </div>
        @endif

        <!-- /.content -->

        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('components.linkjs')
</body>

</html>
