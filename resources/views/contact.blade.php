@extends('layouts.app')

@section('title', 'Liên Hệ')

@section('content')
<div class="hero page-inner overlay" style="background-image: url('{{ asset('images/hero_bg_1.jpg') }}')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Liên Hệ</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang Chủ</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            Liên Hệ
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <!-- Contact Info Grid -->
        <div class="row mb-5">
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info-card h-100">
                    <div class="contact-item">
                        <i class="icon-room"></i>
                        <h4 class="mb-3">Trụ Sở</h4>
                        <p class="mb-2">
                            <strong>Trụ sở chính:</strong><br />
                            Số 28K, Khu phố 3, phường Phú Tân, tỉnh Vĩnh Long
                        </p>
                        <p class="mb-2">
                            <strong>CN HCM:</strong><br />
                            Tòa nhà Diamond Plaza, số 34 Lê Duẩn, phường Bến Nghé, Q.1, TP HCM
                        </p>
                        <p class="mb-0">
                            <strong>CN Hà Nội:</strong><br />
                            443 đường Lĩnh Nam, Phường Vĩnh Hưng, TP Hà Nội
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-info-card h-100">
                    <div class="contact-item">
                        <i class="icon-briefcase"></i>
                        <h4 class="mb-3">Cơ Hội Nghề Nghiệp</h4>
                        <p class="mb-1">
                            <strong>Điện thoại CN TPHCM:</strong><br />
                            0906 313 388
                        </p>
                        <p class="mb-0">
                            <strong>Email:</strong><br />
                            Hoisochinh@ngantingroup.com
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-info-card h-100">
                    <div class="contact-item">
                        <i class="icon-headphones"></i>
                        <h4 class="mb-3">Dịch Vụ Khách Hàng</h4>
                        <p class="mb-1">
                            <strong>Điện thoại:</strong><br />
                            024.234.68899
                        </p>
                        <p class="mb-0">
                            <strong>Email:</strong><br />
                            Hoisochinh@ngantingroup.com
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="contact-info-card h-100">
                    <div class="contact-item">
                        <i class="icon-phone"></i>
                        <h4 class="mb-3">Liên Hệ CN Hà Nội</h4>
                        <p class="mb-1">
                            <strong>Điện thoại:</strong><br />
                            024.6296.8899
                        </p>
                        <p class="mb-0">
                            <strong>Email:</strong><br />
                            Hoisochinh@ngantingroup.com
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="row">
            <div class="col-12" data-aos="fade-up" data-aos-delay="500">
                <div class="contact-form-wrapper">
                    <h3 class="mb-4 text-center">Gửi Tin Nhắn Cho Chúng Tôi</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Tên của bạn" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control" placeholder="Email của bạn" />
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" placeholder="Tiêu đề" />
                            </div>
                            <div class="col-12 mb-3">
                                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Tin nhắn"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <input type="submit" value="Gửi tin nhắn" class="btn btn-primary px-5 py-3" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.contact-info-card {
    background: white;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}
.contact-info-card:hover {
    box-shadow: 0 5px 25px rgba(0,0,0,0.15);
    transform: translateY(-5px);
}
.contact-item i {
    font-size: 2.5rem;
    color: #f5c92c;
    margin-bottom: 1rem;
}
.contact-item h4 {
    color: #1a1a2e;
    font-weight: 700;
    font-size: 1.2rem;
}
.contact-item p {
    color: #666;
    font-size: 0.95rem;
    line-height: 1.8;
}
.contact-form-wrapper {
    background: white;
    padding: 3rem;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0,0,0,0.08);
}
.contact-form-wrapper h3 {
    color: #1a1a2e;
    font-weight: 700;
}
.contact-form-wrapper .form-control {
    padding: 0.8rem 1rem;
    border-radius: 8px;
    border: 1px solid #ddd;
}
.contact-form-wrapper .form-control:focus {
    border-color: #c8102e;
    box-shadow: 0 0 0 0.2rem rgba(200, 16, 46, 0.15);
}
@media (max-width: 768px) {
    .contact-info-card {
        padding: 1.5rem;
    }
    .contact-form-wrapper {
        padding: 2rem 1.5rem;
    }
}
</style>
@endsection
