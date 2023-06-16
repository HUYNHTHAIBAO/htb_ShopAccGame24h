<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2023 02:40:00 GMT -->
<head>
    <!--  Title -->
    <title>@yield('title')</title>
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
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css">
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
<!-- Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="index.html" class="text-nowrap logo-img">
                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg" class="light-logo"  width="180" alt="" />
                </a>
                <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                <ul id="sidebarnav">
                    <!-- ============================= -->
                    <!-- Home -->
                    <!-- ============================= -->
{{--                    <li class="nav-small-cap">--}}
{{--                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>--}}
{{--                        <span class="hide-menu"></span>--}}
{{--                    </li>--}}

                    <!-- ============================= -->
                    <!-- Apps -->
                    <!-- ============================= -->

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('backend.home.index')}}" aria-expanded="false">
                  <span>
                  <i class="ti ti-home"></i>
                  </span>
                            <span class="hide-menu">Trang chủ</span>
                        </a>
                    </li>


                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-category"></i>
                  </span>
                            <span class="hide-menu">Danh mục game</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{route('backend.category.index')}}" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Danh sách</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{route('backend.category.create')}}" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Thêm mới</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                  <i class="ti ti-slideshow"></i>
                  </span>
                            <span class="hide-menu">Slider</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="blog-posts.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Danh sách</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="blog-detail.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Thêm mới</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                <i class="ti ti-file-pencil"></i>
                  </span>
                            <span class="hide-menu">Bài viết</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="blog-posts.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Danh sách</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="blog-detail.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Thêm mới</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-brand-youtube-kids"></i>
                  </span>
                            <span class="hide-menu">Video</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="blog-posts.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Danh sách</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="blog-detail.html" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Thêm mới</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </nav>
            <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
                <div class="hstack gap-3">
                    <div class="john-img">
                        <img src="{{asset('backend')}}/assets/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="">
                    </div>
                    <div class="john-title">
                        <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                        <span class="fs-2 text-dark">Designer</span>
                    </div>
                    <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                        <i class="ti ti-power fs-6"></i>
                    </button>
                </div>
            </div>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- Sidebar End -->
    <!-- Main wrapper -->
    <div class="body-wrapper">
        <!-- Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="ti ti-search"></i>
                        </a>
                    </li>
                </ul>
{{--                <ul class="navbar-nav quick-links d-none d-lg-flex">--}}
{{--                    <li class="nav-item dropdown hover-dd d-none d-lg-block">--}}
{{--                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Apps<span class="mt-1"><i class="ti ti-chevron-down"></i></span></a>--}}
{{--                        <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-8">--}}
{{--                                    <div class=" ps-7 pt-7">--}}
{{--                                        <div class="border-bottom">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="position-relative">--}}
{{--                                                        <a href="app-chat.html" class="d-flex align-items-center pb-9 position-relative">--}}
{{--                                                            <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">--}}
{{--                                                                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid" width="24" height="24">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="d-inline-block">--}}
{{--                                                                <h6 class="mb-1 fw-semibold bg-hover-primary">Chat Application</h6>--}}
{{--                                                                <span class="fs-2 d-block text-dark">New messages arrived</span>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                        <a href="app-invoice.html" class="d-flex align-items-center pb-9 position-relative">--}}
{{--                                                            <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">--}}
{{--                                                                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-invoice.svg" alt="" class="img-fluid" width="24" height="24">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="d-inline-block">--}}
{{--                                                                <h6 class="mb-1 fw-semibold bg-hover-primary">Invoice App</h6>--}}
{{--                                                                <span class="fs-2 d-block text-dark">Get latest invoice</span>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                        <a href="app-contact2.html" class="d-flex align-items-center pb-9 position-relative">--}}
{{--                                                            <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">--}}
{{--                                                                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-mobile.svg" alt="" class="img-fluid" width="24" height="24">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="d-inline-block">--}}
{{--                                                                <h6 class="mb-1 fw-semibold bg-hover-primary">Contact Application</h6>--}}
{{--                                                                <span class="fs-2 d-block text-dark">2 Unsaved Contacts</span>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                        <a href="app-email.html" class="d-flex align-items-center pb-9 position-relative">--}}
{{--                                                            <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">--}}
{{--                                                                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-message-box.svg" alt="" class="img-fluid" width="24" height="24">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="d-inline-block">--}}
{{--                                                                <h6 class="mb-1 fw-semibold bg-hover-primary">Email App</h6>--}}
{{--                                                                <span class="fs-2 d-block text-dark">Get new emails</span>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-6">--}}
{{--                                                    <div class="position-relative">--}}
{{--                                                        <a href="page-user-profile.html" class="d-flex align-items-center pb-9 position-relative">--}}
{{--                                                            <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">--}}
{{--                                                                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-cart.svg" alt="" class="img-fluid" width="24" height="24">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="d-inline-block">--}}
{{--                                                                <h6 class="mb-1 fw-semibold bg-hover-primary">User Profile</h6>--}}
{{--                                                                <span class="fs-2 d-block text-dark">learn more information</span>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                        <a href="app-calendar.html" class="d-flex align-items-center pb-9 position-relative">--}}
{{--                                                            <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">--}}
{{--                                                                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-date.svg" alt="" class="img-fluid" width="24" height="24">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="d-inline-block">--}}
{{--                                                                <h6 class="mb-1 fw-semibold bg-hover-primary">Calendar App</h6>--}}
{{--                                                                <span class="fs-2 d-block text-dark">Get dates</span>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                        <a href="app-contact.html" class="d-flex align-items-center pb-9 position-relative">--}}
{{--                                                            <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">--}}
{{--                                                                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-lifebuoy.svg" alt="" class="img-fluid" width="24" height="24">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="d-inline-block">--}}
{{--                                                                <h6 class="mb-1 fw-semibold bg-hover-primary">Contact List Table</h6>--}}
{{--                                                                <span class="fs-2 d-block text-dark">Add new contact</span>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                        <a href="app-notes.html" class="d-flex align-items-center pb-9 position-relative">--}}
{{--                                                            <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">--}}
{{--                                                                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-application.svg" alt="" class="img-fluid" width="24" height="24">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="d-inline-block">--}}
{{--                                                                <h6 class="mb-1 fw-semibold bg-hover-primary">Notes Application</h6>--}}
{{--                                                                <span class="fs-2 d-block text-dark">To-do and Daily tasks</span>--}}
{{--                                                            </div>--}}
{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row align-items-center py-3">--}}
{{--                                            <div class="col-8">--}}
{{--                                                <a class="fw-semibold text-dark d-flex align-items-center lh-1" href="#"><i class="ti ti-help fs-6 me-2"></i>Frequently Asked Questions</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-4">--}}
{{--                                                <div class="d-flex justify-content-end pe-4">--}}
{{--                                                    <button class="btn btn-primary">Check</button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-4 ms-n4">--}}
{{--                                    <div class="position-relative p-7 border-start h-100">--}}
{{--                                        <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>--}}
{{--                                        <ul class="">--}}
{{--                                            <li class="mb-3">--}}
{{--                                                <a class="fw-semibold text-dark bg-hover-primary" href="page-pricing.html">Pricing Page</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="mb-3">--}}
{{--                                                <a class="fw-semibold text-dark bg-hover-primary" href="authentication-login.html">Authentication Design</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="mb-3">--}}
{{--                                                <a class="fw-semibold text-dark bg-hover-primary" href="authentication-register.html">Register Now</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="mb-3">--}}
{{--                                                <a class="fw-semibold text-dark bg-hover-primary" href="authentication-error.html">404 Error Page</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="mb-3">--}}
{{--                                                <a class="fw-semibold text-dark bg-hover-primary" href="app-notes.html">Notes App</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="mb-3">--}}
{{--                                                <a class="fw-semibold text-dark bg-hover-primary" href="page-user-profile.html">User Application</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="mb-3">--}}
{{--                                                <a class="fw-semibold text-dark bg-hover-primary" href="page-account-settings.html">Account Settings</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown-hover d-none d-lg-block">--}}
{{--                        <a class="nav-link" href="app-chat.html">Chat</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown-hover d-none d-lg-block">--}}
{{--                        <a class="nav-link" href="app-calendar.html">Calendar</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown-hover d-none d-lg-block">--}}
{{--                        <a class="nav-link" href="app-email.html">Email</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
                <div class="d-block d-lg-none">
                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg" class="light-logo"  width="180" alt="" />
                </div>
                <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                            <i class="ti ti-align-justified fs-7"></i>
                        </a>
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">


                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-bell-ringing"></i>
                                    <div class="notification bg-primary rounded-circle"></div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                        <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                                    </div>
                                    <div class="message-body" data-simplebar>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="{{asset('backend')}}/assets/images/profile/user-1.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                          </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold">Roman Joined the Team!</h6>
                                                <span class="d-block">Congratulate him</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="{{asset('backend')}}/assets/images/profile/user-2.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                          </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold">New message</h6>
                                                <span class="d-block">Salma sent you new message</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="{{asset('backend')}}/assets/images/profile/user-3.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                          </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold">Bianca sent payment</h6>
                                                <span class="d-block">Check your earnings</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="{{asset('backend')}}/assets/images/profile/user-4.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                          </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold">Jolly completed tasks</h6>
                                                <span class="d-block">Assign her new tasks</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="{{asset('backend')}}/assets/images/profile/user-5.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                          </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold">John received payment</h6>
                                                <span class="d-block">$230 deducted from account</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                          <span class="me-3">
                            <img src="{{asset('backend')}}/assets/images/profile/user-1.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                          </span>
                                            <div class="w-75 d-inline-block v-middle">
                                                <h6 class="mb-1 fw-semibold">Roman Joined the Team!</h6>
                                                <span class="d-block">Congratulate him</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="py-6 px-7 mb-1">
                                        <button class="btn btn-outline-primary w-100"> See All Notifications </button>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <div class="user-profile-img">
                                            <img src="{{asset('backend')}}/assets/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="" />
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                    <div class="profile-dropdown position-relative" data-simplebar>
                                        <div class="py-3 px-7 pb-0">
                                            <h5 class="mb-0 fs-5 fw-semibold">Tài khoản</h5>
                                        </div>
                                        <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                            <img src="{{asset('backend')}}/assets/images/profile/user-1.jpg" class="rounded-circle" width="80" height="80" alt="" />
                                            <div class="ms-3">
                                                <h5 class="mb-1 fs-3">Xin chào !</h5>
                                                <span class="mb-1 d-block text-dark">{{Auth()->guard('backend')->user()->name}}</span>
                                            </div>
                                        </div>
                                        <div class="message-body">
                                            <a href="page-user-profile.html" class="py-8 px-7 mt-8 d-flex align-items-center">
                            <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                              <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-account.svg" alt="" width="24" height="24">
                            </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h6 class="mb-1 bg-hover-primary fw-semibold"> Tài khoản của tôi </h6>
                                                    <span class="d-block text-dark">Cài đặt tài khoản</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-grid py-4 px-7 pt-8">
                                            <a href="{{route('backend.account.logout')}}" class="btn btn-outline-primary">Đăng xuất</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Header End -->
        @yield('content')
        <!-- container-fluid over -->
    </div>
</div>
<!--  Shopping Cart -->
<div class="offcanvas offcanvas-end shopping-cart" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header py-4">
        <h5 class="offcanvas-title fs-5 fw-semibold" id="offcanvasRightLabel">Shopping Cart</h5>
        <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
    </div>
    <div class="offcanvas-body h-100 px-4 pt-0" data-simplebar>
        <ul class="mb-0">
            <li class="pb-7">
                <div class="d-flex align-items-center">
                    <img src="{{asset('backend')}}/images/products/product-1.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="" />
                    <div>
                        <h6 class="mb-1">Supreme toys cooker</h6>
                        <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                            <div class="input-group input-group-sm w-50">
                                <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button" id="add1"> - </button>
                                <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add1" value="1" />
                                <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button" id="addo2"> + </button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="pb-7">
                <div class="d-flex align-items-center">
                    <img src="{{asset('backend')}}/images/products/product-2.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="" />
                    <div>
                        <h6 class="mb-1">Supreme toys cooker</h6>
                        <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                            <div class="input-group input-group-sm w-50">
                                <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button" id="add2"> - </button>
                                <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add2" value="1" />
                                <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button" id="addon34"> + </button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="pb-7">
                <div class="d-flex align-items-center">
                    <img src="{{asset('backend')}}/images/products/product-3.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="" />
                    <div>
                        <h6 class="mb-1">Supreme toys cooker</h6>
                        <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                            <div class="input-group input-group-sm w-50">
                                <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button" id="add3"> - </button>
                                <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add3" value="1" />
                                <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button" id="addon3"> + </button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="align-bottom">
            <div class="d-flex align-items-center pb-7">
                <span class="text-dark fs-3">Sub Total</span>
                <div class="ms-auto">
                    <span class="text-dark fw-semibold fs-3">$2530</span>
                </div>
            </div>
            <div class="d-flex align-items-center pb-7">
                <span class="text-dark fs-3">Total</span>
                <div class="ms-auto">
                    <span class="text-dark fw-semibold fs-3">$6830</span>
                </div>
            </div>
            <a href="eco-checkout.html" class="btn btn-outline-primary w-100">Go to shopping cart</a>
        </div>
    </div>
</div>
<!--  Mobilenavbar -->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
    <nav class="sidebar-nav scroll-sidebar">
        <div class="offcanvas-header justify-content-between">
            <img src="{{asset('backend')}}/assets/images/logos/favicon.png" alt="" class="img-fluid">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body profile-dropdown mobile-navbar" data-simplebar=""  data-simplebar>
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span>
                  <i class="ti ti-apps"></i>
                </span>
                        <span class="hide-menu">Apps</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level my-3">
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-chat.svg" alt="" class="img-fluid" width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-invoice.svg" alt="" class="img-fluid" width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-mobile.svg" alt="" class="img-fluid" width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-message-box.svg" alt="" class="img-fluid" width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Email App</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-cart.svg" alt="" class="img-fluid" width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-date.svg" alt="" class="img-fluid" width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-lifebuoy.svg" alt="" class="img-fluid" width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                                </div>
                            </a>
                        </li>
                        <li class="sidebar-item py-2">
                            <a href="#" class="d-flex align-items-center">
                                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-application.svg" alt="" class="img-fluid" width="24" height="24">
                                </div>
                                <div class="d-inline-block">
                                    <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                                    <span class="fs-2 d-block fw-normal text-muted">To-do and Daily tasks</span>
                                </div>
                            </a>
                        </li>
                        <ul class="px-8 mt-7 mb-4">
                            <li class="sidebar-item mb-3">
                                <h5 class="fs-5 fw-semibold">Quick Links</h5>
                            </li>
                            <li class="sidebar-item py-2">
                                <a class="fw-semibold text-dark" href="#">Pricing Page</a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a class="fw-semibold text-dark" href="#">Authentication Design</a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a class="fw-semibold text-dark" href="#">Register Now</a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a class="fw-semibold text-dark" href="#">404 Error Page</a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a class="fw-semibold text-dark" href="#">Notes App</a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a class="fw-semibold text-dark" href="#">User Application</a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a class="fw-semibold text-dark" href="#">Account Settings</a>
                            </li>
                        </ul>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="app-chat.html" aria-expanded="false">
                <span>
                  <i class="ti ti-message-dots"></i>
                </span>
                        <span class="hide-menu">Chat</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="app-calendar.html" aria-expanded="false">
                <span>
                  <i class="ti ti-calendar"></i>
                </span>
                        <span class="hide-menu">Calendar</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="app-email.html" aria-expanded="false">
                <span>
                  <i class="ti ti-mail"></i>
                </span>
                        <span class="hide-menu">Email</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- Search Bar -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-1">
            <div class="modal-header border-bottom">
                <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
                <span data-bs-dismiss="modal" class="lh-1 cursor-pointer">
              <i class="ti ti-x fs-5 ms-3"></i>
            </span>
            </div>
            <div class="modal-body message-body" data-simplebar="">
                <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                <ul class="list mb-0 py-2">
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="#">
                            <span class="fs-3 text-black fw-normal d-block">Modern</span>
                            <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="#">
                            <span class="fs-3 text-black fw-normal d-block">Dashboard</span>
                            <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="#">
                            <span class="fs-3 text-black fw-normal d-block">Contacts</span>
                            <span class="fs-3 text-muted d-block">/apps/contacts</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="#">
                            <span class="fs-3 text-black fw-normal d-block">Posts</span>
                            <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="#">
                            <span class="fs-3 text-black fw-normal d-block">Detail</span>
                            <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="#">
                            <span class="fs-3 text-black fw-normal d-block">Shop</span>
                            <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="#">
                            <span class="fs-3 text-black fw-normal d-block">Modern</span>
                            <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="#">
                            <span class="fs-3 text-black fw-normal d-block">Dashboard</span>
                            <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="#">
                            <span class="fs-3 text-black fw-normal d-block">Contacts</span>
                            <span class="fs-3 text-muted d-block">/apps/contacts</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="#">
                            <span class="fs-3 text-black fw-normal d-block">Posts</span>
                            <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="#">
                            <span class="fs-3 text-black fw-normal d-block">Detail</span>
                            <span class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="#">
                            <span class="fs-3 text-black fw-normal d-block">Shop</span>
                            <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Customizer -->
<button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
    <i class="ti ti-settings fs-7" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Settings"></i>
</button>
<div class="offcanvas offcanvas-end customizer" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" data-simplebar="">
    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
        <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">Tùy chỉnh giao diện</h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-4">
        <div class="theme-option pb-4">
            <h6 class="fw-semibold fs-4 mb-1">Giao diện</h6>
            <div class="d-flex align-items-center gap-3 my-3">
                <a href="javascript:void(0)"  onclick="toggleTheme('{{asset('backend')}}/assets/css/style.min.css')"  class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 light-theme text-dark">
                    <i class="ti ti-brightness-up fs-7 text-primary"></i>
                    <span class="text-dark">Sáng</span>
                </a>
                <a href="javascript:void(0)" onclick="toggleTheme('{{asset('backend')}}/assets/css/style-dark.min.css')" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 dark-theme text-dark">
                    <i class="ti ti-moon fs-7 "></i>
                    <span class="text-dark">Tối</span>
                </a>
            </div>
        </div>
        <div class="theme-direction pb-4">
            <h6 class="fw-semibold fs-4 mb-1">Hướng giao diện</h6>
            <div class="d-flex align-items-center gap-3 my-3">
                <a href="" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
                    <i class="ti ti-text-direction-ltr fs-6 text-primary"></i>
                    <span class="text-dark">LTR</span>
                </a>
                <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/rtl/index.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
                    <i class="ti ti-text-direction-rtl fs-6 text-dark"></i>
                    <span class="text-dark">RTL</span>
                </a>
            </div>
        </div>
        <div class="theme-colors pb-4">
            <h6 class="fw-semibold fs-4 mb-1">Màu sắc</h6>
            <div class="d-flex align-items-center gap-3 my-3">
                <ul class="list-unstyled mb-0 d-flex gap-3 flex-wrap change-colors">
                    <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                        <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin1-bluetheme-primary active-theme " onclick="toggleTheme('{{asset('backend')}}/assets/css/style.min.css')"  data-color="blue_theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME"><i class="ti ti-check text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                    </li>
                    <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                        <a href="javascript:void(0)"  class="rounded-circle position-relative d-block customizer-bgcolor skin2-aquatheme-primary " onclick="toggleTheme('{{asset('backend')}}/assets/css/style-aqua.min.css')"  data-color="aqua_theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                    </li>
                    <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                        <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin3-purpletheme-primary" onclick="toggleTheme('{{asset('backend')}}/assets/css/style-purple.min.css')"  data-color="purple_theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                    </li>
                    <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                        <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin4-greentheme-primary" onclick="toggleTheme('{{asset('backend')}}/assets/css/style-green.min.css')"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                    </li>
                    <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                        <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin5-cyantheme-primary" onclick="toggleTheme('{{asset('backend')}}/assets/css/style-cyan.min.css')"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                    </li>
                    <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                        <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin6-orangetheme-primary" onclick="toggleTheme('{{asset('backend')}}/assets/css/style-orange.min.css')"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="layout-type pb-4">
            <h6 class="fw-semibold fs-4 mb-1">Loại bố cục</h6>
            <div class="d-flex align-items-center gap-3 my-3">
                <a href="index.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
                    <i class="ti ti-layout-sidebar fs-6 text-primary"></i>
                    <span class="text-dark">Dọc</span>
                </a>
                <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/horizontal/index.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
                    <i class="ti ti-layout-navbar fs-6 text-dark"></i>
                    <span class="text-dark">Ngang</span>
                </a>
            </div>
        </div>
        <div class="container-option pb-4">
            <h6 class="fw-semibold fs-4 mb-1">Tùy chỉnh bố cục màn hình</h6>
            <div class="d-flex align-items-center gap-3 my-3">
                <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 boxed-width text-dark">
                    <i class="ti ti-layout-distribute-vertical fs-7 text-primary"></i>
                    <span class="text-dark">Nhỏ</span>
                </a>
                <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 full-width text-dark">
                    <i class="ti ti-layout-distribute-horizontal fs-7"></i>
                    <span class="text-dark">Lớn</span>
                </a>
            </div>
        </div>
        <div class="sidebar-type pb-4">
            <h6 class="fw-semibold fs-4 mb-1">Tùy chỉnh menu bên trái</h6>
            <div class="d-flex align-items-center gap-3 my-3">
                <a  href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 fullsidebar">
                    <i class="ti ti-layout-sidebar-right fs-7"></i>
                    <span class="text-dark">Mở ra</span>
                </a>
                <a  href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center text-dark sidebartoggler gap-2">
                    <i class="ti ti-layout-sidebar fs-7"></i>
                    <span class="text-dark">Co lại</span>
                </a>
            </div>
        </div>
        <div class="card-with pb-4">
            <h6 class="fw-semibold fs-4 mb-1">Tùy chỉnh bố cục</h6>
            <div class="d-flex align-items-center gap-3 my-3">
                <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 text-dark cardborder">
                    <i class="ti ti-border-outer fs-7"></i>
                    <span class="text-dark">Viền</span>
                </a>
                <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 cardshadow">
                    <i class="ti ti-border-none fs-7"></i>
                    <span class="text-dark">Bóng mờ</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Customizer -->
<!-- Import Js Files -->
<script src="{{asset('backend')}}/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="{{asset('backend')}}/assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="{{asset('backend')}}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- core files -->
<script src="{{asset('backend')}}/assets/js/app.min.js"></script>
<script src="{{asset('backend')}}/assets/js/app.init.js"></script>
<script src="{{asset('backend')}}/assets/js/app-style-switcher.js"></script>
<script src="{{asset('backend')}}/assets/js/sidebarmenu.js"></script>
<script src="{{asset('backend')}}/assets/js/custom.js"></script>
<!-- current page js files -->
{{--<script src="{{asset('backend')}}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>--}}
{{--<script src="{{asset('backend')}}/assets/js/jplayer/jplayer.js"></script>--}}
{{--<script src="{{asset('backend')}}/assets/libs/jplayer/dist/jplayer/jquery.jplayer.min.js"></script>--}}
{{--<script src="{{asset('backend')}}/assets/libs/jplayer/dist/add-on/jplayer.playlist.min.js"></script>--}}

{{--//--}}
<!--  current page js files -->
<script src="{{asset('backend')}}/assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="{{asset('backend')}}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="{{asset('backend')}}/assets/js/dashboard.js"></script>
{{--// slug--}}
<script>
    function ChangeToSlug()
    {
        var slug;

        //Lấy text từ thẻ input title
        slug = document.getElementById("slug").value;
        slug = slug.toLowerCase();
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('convert_slug').value = slug;
    }
</script>
</body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2023 02:40:04 GMT -->
</html>
