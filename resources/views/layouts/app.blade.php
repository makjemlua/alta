<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  @include('components.linkcss')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Trang quản trị</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          {{-- <a href="#" class="d-block">{{Auth::user()->name}}</a> --}}
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
            <a href="{{route('home.index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('device.index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Thiết bị
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('service.index')}}" class="nav-link">
              <i class="nav-icon fab fa-product-hunt"></i>
              <p>
                Dịch vụ
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('number.index')}}" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Cấp số
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('report.index')}}" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Báo cáo
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Cài đặt hệ thống
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                    <a href="{{route('role.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Quản lý vai trò</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('account.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Quản lý tài khoản</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('log.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Nhật ký người dùng</p>
                    </a>
                </li>
            </ul>
        </li>

        </ul>
        <li class="nav-item button-logout">
          <a href="" class="nav-link">
            
              <a  href="{{route('logout.index')}}" class="btn btn-logout"><i class="fas fa-sign-out-alt"></i>&nbsp;Đăng xuất</a>
          </a>
        </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible" style="position: fixed;left: 40%;z-index: 99">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {{ Session::get('success') }}
            </div>
        @endif
        @if(Session::has('danger'))
            <div class="alert alert-danger alert-dismissible" style="position: fixed;left: 40%;z-index: 99">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Fail!</strong> {{ Session::get('danger') }}
            </div>
        @endif
        @if(Session::has('warning'))
          <div class="alert alert-warning alert-dismissible" style="position: fixed;left: 40%;top: 100px;z-index: 9999">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Warning!</strong> {{ Session::get('warning') }}
          </div>
        @endif

  <!-- Main content -->
  <div class="nd">
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      
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
                                  src="{{ asset('img/upload/'.Auth::user()->avatar) }}" alt=""></li>
                          <li class="icon-name">
                              <p class="xin-chao">Xin chao</p>
                              <a href="{{route('user.index')}}" class="icon-user-name">{{Auth::user()->username}}</a>
                          </li>
                      </ol>
                  </div>
              </div>
          </div>
      </section>
  </div>
    @yield('content')
  </div>
    
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
@yield('script')
<script>
  $('#confirm-logout').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
</script>
</body>
</html>