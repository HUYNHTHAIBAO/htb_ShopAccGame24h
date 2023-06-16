<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2023 02:40:40 GMT -->
<head>
    <!--  Title -->
    <title>Mordenize</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('backend')}}/assets/images/logos/favicon.png" />
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="{{asset('backend')}}/assets/css/style.min.css" />
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <img src="{{asset('backend')}}/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
</div>
<!-- Preloader -->
<div class="preloader">
    <img src="{{asset('backend')}}/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
</div>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">

                            <a href="" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" width="180" alt="">
                            </a>
                            <form method="post">
                                @csrf
                                {{--            // thông báo khi đăng nhập thất bại--}}
                                @if(session('errors'))
                                    <div class="alert alert-danger" role="alert">
                                        {{session('errors')}}
                                    </div>
                                @endif
{{--                                // đăng xuất thành công --}}
                                @if(session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('status')}}
                                    </div>
                                @endif
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tài khoản</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tài khoản">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="form-check">
                                    </div>
                                    <a class="text-primary fw-medium" href="authentication-forgot-password.html">Quên mật khẩu?</a>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Đăng nhập</button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-medium">Chưa có tài khoản?</p>
                                    <a class="text-primary fw-medium ms-2" href="authentication-register.html">Đăng ký</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Import Js Files -->
<script src="{{asset('backend')}}/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="{{asset('backend')}}/assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="{{asset('backend')}}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--  core files -->
<script src="{{asset('backend')}}/assets/js/app.min.js"></script>
<script src="{{asset('backend')}}/assets/js/app.init.js"></script>
<script src="{{asset('backend')}}/assets/js/app-style-switcher.js"></script>
<script src="{{asset('backend')}}/assets/js/sidebarmenu.js"></script>

<script src="{{asset('backend')}}/assets/js/custom.js"></script>
</body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2023 02:40:40 GMT -->
</html>
