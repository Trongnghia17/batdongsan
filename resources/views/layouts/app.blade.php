<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Ngân Tín Group" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" />

    <meta name="description" content="Tập đoàn Ngân Tín - Công ty Cổ phần Tập đoàn Đầu tư Ngân Tín, chuyên về Bất động sản, Năng lượng xanh, Kho cảng biển và Kinh doanh xăng dầu" />
    <meta name="keywords" content="ngân tín, ngan tin group, bất động sản, năng lượng xanh, xăng dầu, logistic, đầu tư bất động sản" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="@yield('title', 'Tập đoàn Ngân Tín - Bất Động Sản')" />
    <meta property="og:description" content="Tập đoàn Ngân Tín - Công ty Cổ phần Tập đoàn Đầu tư Ngân Tín, chuyên về Bất động sản, Năng lượng xanh, Kho cảng biển và Kinh doanh xăng dầu. Liên hệ: 024.234.68899" />
    <meta property="og:image" content="{{ asset('images/logo.png') }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:site_name" content="NGAN TIN GROUP" />
    <meta property="og:locale" content="vi_VN" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="{{ url()->current() }}" />
    <meta name="twitter:title" content="@yield('title', 'Tập đoàn Ngân Tín - Bất Động Sản')" />
    <meta name="twitter:description" content="Tập đoàn Ngân Tín - Công ty Cổ phần Tập đoàn Đầu tư Ngân Tín" />
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}" />

    <!-- Additional Meta Tags -->
    <meta property="business:contact_data:street_address" content="Số 28K, Khu phố 3, phường Phú Tân" />
    <meta property="business:contact_data:locality" content="Vĩnh Long" />
    <meta property="business:contact_data:country_name" content="Vietnam" />
    <meta property="business:contact_data:phone_number" content="024.234.68899" />
    <meta property="business:contact_data:website" content="https://ngantinland.com/" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <style>
        /* Mobile Menu Icon - Hamburger Style */
        @media (max-width: 991.98px) {
            .site-navigation {
                display: flex !important;
                justify-content: space-between !important;
                align-items: center !important;
                width: 100% !important;
            }
            
            .site-menu-toggle {
                position: relative !important;
                margin-left: auto !important;
                margin-right: 0 !important;
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
                padding: 10px !important;
                z-index: 9999 !important;
                background: rgba(0,0,0,0.3);
                border-radius: 5px;
            }

            .site-menu-toggle i {
                font-size: 36px !important;
                color: #fff !important;
                transition: color 0.3s ease;
                display: block !important;
                line-height: 1 !important;
            }

            .site-menu-toggle:hover i {
                color: #f5c92c !important;
            }

            /* Ẩn burger cũ nếu còn */
            .burger {
                display: none !important;
            }
        }
    </style>

    <title>@yield('title', 'Dự án')</title>
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
                    <a href="{{ route('home') }}" class="logo m-0 float-start"><img src="{{ asset('images/logo.png') }}"
                            alt="Logo" style="max-height: 80px;" /></a>

                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}">Trang Chủ</a>
                        </li>
                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                            <a href="{{ route('about') }}">Giới Thiệu</a>
                        </li>
                        <li class="has-children">
                            <a href="#">Lĩnh vực hoạt động</a>
                            <ul class="dropdown">
                                <li><a href="#">Bất Động Sản</a></li>
                                <li><a href="#">Xăng dầu</a></li>
                                <li><a href="#">Năng lượng xanh</a></li>
                                <li><a href="#">Logistic</a></li>

                            </ul>
                        </li>
                        <li class="{{ request()->routeIs('properties') ? 'active' : '' }}">
                            <a href="{{ route('properties') }}">Dự Án</a>
                        </li>
                        <li class="{{ request()->routeIs('services') ? 'active' : '' }}">
                            <a href="{{ route('services') }}">Dịch Vụ</a>
                        </li>

                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                            <a href="{{ route('contact') }}">Liên Hệ</a>
                        </li>
                    </ul>

                    <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-lg-none" 
                        data-toggle="collapse" data-target="#main-navbar">
                        <i class="bi bi-list" style="font-size: 36px; color: #fff; display: block;"></i>
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
                        <h3>Trụ Sở</h3>
                        <ul class="list-unstyled links mb-4">
                            <li class="mb-3">
                                <strong>Trụ sở chính:</strong><br>
                                <address class="mb-0">Số 28K, Khu phố 3, phường Phú Tân, tỉnh Vĩnh Long</address>
                            </li>
                            <li class="mb-3">
                                <strong>CN HCM:</strong><br>
                                <address class="mb-0">Tòa nhà Diamond Plaza, số 34 Lê Duẩn, phường Sài Gòn, TP HCM
                                </address>
                            </li>
                            <li class="mb-3">
                                <strong>CN Hà Nội:</strong><br>
                                <address class="mb-0">443 đường Lĩnh Nam, Phường Vĩnh Hưng, TP Hà Nội</address>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Cơ Hội Nghề Nghiệp</h3>
                        <ul class="list-unstyled links mb-4">
                            <li><strong>Điện thoại CN TPHCM:</strong></li>
                            <li><a href="tel://0906313388">0906 313 388</a></li>
                            <li class="mt-2"><strong>Email:</strong></li>
                            <li><a href="mailto:Hoisochinh@ngantingroup.com">Hoisochinh@ngantingroup.com</a></li>
                        </ul>

                        <h3 class="mt-4">Dịch Vụ Khách Hàng</h3>
                        <ul class="list-unstyled links">
                            <li><strong>Điện thoại:</strong></li>
                            <li><a href="tel://02423468899">024.234.68899</a></li>
                            <li class="mt-2"><strong>Email:</strong></li>
                            <li><a href="mailto:Hoisochinh@ngantingroup.com">Hoisochinh@ngantingroup.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Liên Hệ CN Hà Nội</h3>
                        <ul class="list-unstyled links mb-4">
                            <li><strong>Điện thoại:</strong></li>
                            <li><a href="tel://02462968899">024.6296.8899</a></li>
                            <li class="mt-2"><strong>Email:</strong></li>
                            <li><a href="mailto:Hoisochinh@ngantingroup.com">Hoisochinh@ngantingroup.com</a></li>
                        </ul>

                        <h3 class="mt-4">Mạng Xã Hội</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-youtube"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p>
                        Bản quyền &copy;
                        <script>document.write(new Date().getFullYear());</script>. Tập đoàn Ngân Tín. Tất cả quyền được
                        bảo lưu.
                    </p>
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