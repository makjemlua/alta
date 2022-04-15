<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Include the above in your HEAD tag -->

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ 'css/login.css' }}">
    <script src="{{asset('js/login.js')}}"></script>
</head>

<body>
    <main>
        <div class="container-fluid form-login">
            <div class="row">
                <div class="col-sm-6 col-md-5 login-section-wrapper form-login-left">
                    <div class="brand-wrapper d-flex justify-content-center">
                        <img src="{{ 'img/logo.png' }}" alt="Logo" class="logo" width="150px" height="150px">
                    </div>
                    <div class="login-wrapper my-auto">
                        <!-- <h1 class="login-title">Log in</h1> -->
                        <form action="" method="post">
                            @csrf
                            <div class="form-group col-md-8">
                                <label for="name">Tên đăng nhập *</label>
                                <input type="name" name="name" id="name"
                                    class="{{ Session::has('danger') ? 'form-control danger' : 'form-control' }}"
                                    placeholder="nguyenvanan">
                            </div>
                            <div class="form-group mb-4 col-md-8">
                                <label for="password">Mật khẩu *</label>
                                <input type="password" name="password" id="password"
                                    class="{{ Session::has('danger') ? 'form-control danger' : 'form-control' }}"
                                    placeholder="enter your passsword">
                                    <a class="eye" href="javascript:;void(0)"><i class="fa fa-eye-slash"></i></a>
                                @if (Session::has('danger'))
                                    <div class="error"><i class="fa fa-exclamation-circle"></i> {{ Session::get('danger') }}</div>
                                @endif
                            </div>
                            <div class="col-md-8 forgot-password">
                                <a href="{{ route('admin.forgotPassword') }}" class="forgot-password-link">Quên mật
                                    khẩu?</a>
                            </div>
                            <div class="col-md-8 d-flex justify-content-center login-submit">
                                <button name="login" id="login" class="btn col-md-4 button-login" type="submit">Đăng
                                    nhập</button>

                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-sm-6 col-md-7 px-0 d-none d-sm-block form-login-right">
                    <img src="{{ 'img/hethong.png' }}" alt="login image" class="login-img">
                </div>
            </div>
        </div>
    </main>
</body>

</html>
