<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <title>@yield('title', 'Bất Động Sản - Website Miễn Phí Bootstrap 5 bởi Untree.co')</title>
</head>
<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <a href="{{ route('home') }}" class="logo m-0 float-start"><img src="{{ asset('images/logo.png') }}" alt="Logo" style="max-height: 80px;" /></a>

                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}">Trang Chủ</a>
                        </li>
                        <li class="has-children {{ request()->routeIs('properties*') ? 'active' : '' }}">
                            <a href="{{ route('properties') }}">Bất Động Sản</a>
                            <ul class="dropdown">
                                <li><a href="#">Mua Bất Động Sản</a></li>
                                <li><a href="#">Bán Bất Động Sản</a></li>
                                <li class="has-children">
                                    <a href="#">Danh Mục</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Danh Mục Con 1</a></li>
                                        <li><a href="#">Danh Mục Con 2</a></li>
                                        <li><a href="#">Danh Mục Con 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ request()->routeIs('services') ? 'active' : '' }}">
                            <a href="{{ route('services') }}">Dịch Vụ</a>
                        </li>
                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                            <a href="{{ route('about') }}">Giới Thiệu</a>
                        </li>
                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                            <a href="{{ route('contact') }}">Liên Hệ</a>
                        </li>
                    </ul>

                    <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Liên Hệ</h3>
                        <address>43 Raymouth Rd. Baltemoer, London 3910</address>
                        <ul class="list-unstyled links">
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Nguồn</h3>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Dịch vụ</a></li>
                            <li><a href="#">Tầm nhìn</a></li>
                            <li><a href="#">Sứ mệnh</a></li>
                            <li><a href="#">Điều khoản</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                        </ul>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">Đối tác</a></li>
                            <li><a href="#">Kinh doanh</a></li>
                            <li><a href="#">Tuyển dụng</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Câu hỏi thường gặp</a></li>
                            <li><a href="#">Sáng tạo</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Liên Kết</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">Tầm nhìn của chúng tôi</a></li>
                            <li><a href="#">Giới thiệu về chúng tôi</a></li>
                            <li><a href="#">Liên hệ chúng tôi</a></li>
                        </ul>

                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p>
                        Bản quyền &copy;<script>document.write(new Date().getFullYear());</script>. Tất cả quyền được bảo lưu. &mdash; Thiết kế với tình yêu bởi
                        <a href="https://untree.co">Untree.co</a>
                    </p>
                    <div>
                        Phân phối bởi <a href="https://themewagon.com/" target="_blank">themewagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Đang tải...</span>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
