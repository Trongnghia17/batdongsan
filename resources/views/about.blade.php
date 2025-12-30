@extends('layouts.app')

@section('title', 'Giới Thiệu - Ngân Tín Group')

@section('content')
<div class="hero page-inner overlay" style="background-image: url('{{ asset('images/hero_bg_3.jpg') }}')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Về Ngân Tín Group</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang Chủ</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            Giới Thiệu
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row text-left mb-5">
            <div class="col-12">
                <h2 class="font-weight-bold heading text-primary mb-4">Tập đoàn Ngân Tín uy tín trên thị trường</h2>
                <p class="lead text-dark mb-4">Công ty Cổ Phần Tập đoàn đầu tư Ngân Tín</p>
            </div>
            <div class="col-lg-6">
                <p class="text-black-50">
                    Mục tiêu phát triển thành tập đoàn quốc gia, trở thành <strong>Tập đoàn Tỷ đô</strong> đã và đang khẳng định dấu ấn và thương hiệu của mình trên thị trường trong nước và thế giới tại các lĩnh vực kinh doanh:
                </p>
                <ul class="text-black-50">
                    <li>Đầu tư dự án Bất động sản</li>
                    <li>Năng lượng gồm Năng lượng xanh (Khí hóa lỏng, khí hydrogen, điện gió)</li>
                    <li>Năng lượng khí đốt: (Gas, xăng, dầu DO)</li>
                    <li>Kho cảng biển và logistic</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <p class="text-black-50">
                    Trải qua hơn <strong>15 năm</strong> thành lập và phát triển, Tập đoàn đã không ngừng lớn mạnh về quy mô, cơ cấu tổ chức, không ngừng mở rộng thị phần, phát triển hệ sinh thái đa dạng.
                </p>
                <p class="text-black-50">
                    Công ty CP Tập đoàn đầu tư Ngân Tín hoạt động trải dài từ <strong>Bắc đến Nam</strong> và các tỉnh miền Tây.
                </p>
                <div class="mt-4 p-4 bg-primary bg-opacity-10 rounded text-center">
                    <h2 class="text-warning display-4 fw-bold mb-2">2009 - 2024</h2>
                    <h1 class="text-primary display-1 fw-bold mb-0">15</h1>
                    <p class="text-muted mb-0">NĂM</p>
                    <h4 class="text-primary fw-bold">PHÁT TRIỂN BỀN VỮNG</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section pt-0">
    <div class="container">
        <div class="row justify-content-between mb-5">
            <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                <div class="img-about dots">
                    <img src="{{ asset('images/hero_bg_3.jpg') }}" alt="Image" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-4">
                <h3 class="text-primary mb-4">Sứ Mệnh & Tầm Nhìn</h3>
                
                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-star"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">Triết Lý</h3>
                        <p class="text-black-50">
                            Chuyên nghiệp • Uy tín • Sáng tạo • Bền vững
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-home2"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">Tầm Nhìn</h3>
                        <p class="text-black-50">
                            Trở thành Doanh nghiệp tỷ đô, phát triển hệ sinh thái đồng bộ. Mở rộng thị phần trên khắp cả nước và các nước lân cận.
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-person"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">Sứ Mệnh</h3>
                        <p class="text-black-50">
                            Nâng cao giá trị cho Doanh nghiệp, Cổ đông, Nhà đầu tư và mang lại lợi ích cho người lao động, đóng góp cho xã hội.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section pt-0">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center mb-4">
                <h2 class="font-weight-bold heading text-primary">Giá Trị Cốt Lõi</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-star"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">Uy Tín</h3>
                        <p class="text-black-50">
                            Uy tín trên thị trường, tạo niềm tin đối với khách hàng và đối tác.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-heart"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">Khách hàng là trọng tâm</h3>
                        <p class="text-black-50">
                            Hướng mục tiêu vào những nhu cầu của khách hàng, cung cấp sản phẩm và dịch vụ chất lượng.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-home2"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">Sáng Tạo</h3>
                        <p class="text-black-50">
                            Chú trọng sự đổi mới, sáng tạo, cải tiến chất lượng dịch vụ và sản phẩm, nâng cao hiệu quả kinh doanh.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-security"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">Tuân thủ pháp luật</h3>
                        <p class="text-black-50">
                            Am hiểu và tuân thủ pháp luật trong hoạt động kinh doanh, đảm bảo sự phát triển bền vững.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-person"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">Cộng Đồng</h3>
                        <p class="text-black-50">
                            Luôn đồng hành và có các hoạt động vì cộng đồng, tích cực đóng góp cho xã hội.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section pt-0">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="font-weight-bold heading text-primary mb-5">Lịch Sử Phát Triển</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="p-4 bg-light rounded mb-4">
                    <h4 class="text-primary">02/12/2009</h4>
                    <p class="text-black-50">"Thành lập Công ty TNHH Ngân Tín"</p>
                </div>
                <div class="p-4 bg-light rounded">
                    <h4 class="text-primary">16/03/2023</h4>
                    <p class="text-black-50">"Tập đoàn Ngân Tín nâng vốn điều lệ thành 800 tỷ VNĐ"</p>
                </div>
            </div>
            <div class="col-md-4 mt-lg-5" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 bg-light rounded mb-4">
                    <h4 class="text-primary">26/09/2017</h4>
                    <p class="text-black-50">"Được cấp chứng nhận Thương nhân phân phối xăng dầu do Bộ Công Thương cấp"</p>
                </div>
                <div class="p-4 bg-light rounded">
                    <h4 class="text-primary">31/12/2023</h4>
                    <p class="text-black-50">"Hoàn thành chỉ tiêu phát triển 40 hệ thống đại lý và cửa hàng bán lẻ xăng dầu"</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 bg-light rounded mb-4">
                    <h4 class="text-primary">25/03/2024</h4>
                    <p class="text-black-50">"Thành công nhận Quyết định chấp thuận chủ đầu tư cho dự án hơn 2.500 tỷ VNĐ"</p>
                </div>
                <div class="p-4 bg-light rounded">
                    <h4 class="text-success">25/04/2024</h4>
                    <p class="text-black-50">"Tập đoàn Ngân tín nâng vốn điều lệ thành 1.120 tỷ VNĐ"</p>
                </div>
            </div>
        </div>
        <div class="row section-counter mt-5">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">15</span></span>
                    <span class="caption text-black-50"># Năm Kinh Nghiệm</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">1120</span></span>
                    <span class="caption text-black-50"># Tỷ VNĐ Vốn Điều Lệ</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">40</span>+</span>
                    <span class="caption text-black-50"># Hệ Thống Đại Lý</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">25</span>+</span>
                    <span class="caption text-black-50"># Tỉnh Thành Hoạt Động</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section pt-0 sec-testimonials bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="font-weight-bold heading text-primary mb-4">Địa Bàn Hoạt Động</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="p-4 bg-white rounded shadow-sm h-100">
                    <h4 class="text-primary mb-3"><span class="icon-location-pin me-2"></span>MIỀN BẮC</h4>
                    <ul class="list-unstyled text-black-50">
                        <li>• Thành Tỉnh Nam Định</li>
                        <li>• Thành phố Hà Nội</li>
                        <li>• Tỉnh Hà Giang</li>
                        <li>• Tỉnh Tuyên Quang</li>
                        <li>• Tỉnh Thái Nguyên</li>
                        <li>• Thành phố Hải Phòng</li>
                        <li>• Tỉnh Quảng Ninh</li>
                        <li>• Tỉnh Thanh Hóa</li>
                        <li>• Tỉnh Nghệ An</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4">
                <div class="p-4 bg-white rounded shadow-sm h-100">
                    <h4 class="text-primary mb-3"><span class="icon-location-pin me-2"></span>MIỀN TRUNG</h4>
                    <ul class="list-unstyled text-black-50">
                        <li>• Tỉnh Bình Thuận</li>
                        <li>• Tỉnh Tây Ninh</li>
                        <li>• Khu vực Nam Tây Nguyên</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4">
                <div class="p-4 bg-white rounded shadow-sm h-100">
                    <h4 class="text-primary mb-3"><span class="icon-location-pin me-2"></span>MIỀN NAM</h4>
                    <ul class="list-unstyled text-black-50">
                        <li>• Thành phố Hồ Chí Minh</li>
                        <li>• Tỉnh Đồng Nai</li>
                        <li>• Tỉnh Bình Dương</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4">
                <div class="p-4 bg-white rounded shadow-sm h-100">
                    <h4 class="text-primary mb-3"><span class="icon-location-pin me-2"></span>MIỀN TÂY NAM BỘ</h4>
                    <ul class="list-unstyled text-black-50">
                        <li>• Tỉnh Tiền Giang</li>
                        <li>• Thành phố Cần Thơ</li>
                        <li>• Tỉnh Trà Vinh</li>
                        <li>• Tỉnh Vĩnh Long</li>
                        <li>• Các tỉnh Đồng Bằng Sông Cửu Long</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
