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
                    <form action="#" id="contactForm" onsubmit="submitContact(event)">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="contact_name" class="form-label">Họ và tên <span class="text-danger">*</span></label>
                                <input type="text" id="contact_name" name="name" class="form-control" placeholder="Nhập họ và tên của bạn" required />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="contact_phone" class="form-label">Số điện thoại <span class="text-danger">*</span></label>
                                <input type="tel" id="contact_phone" name="phone" class="form-control" placeholder="Nhập số điện thoại" required pattern="[0-9]{10,11}" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="contact_email" class="form-label">Email</label>
                                <input type="email" id="contact_email" name="email" class="form-control" placeholder="Nhập email của bạn" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="contact_subject" class="form-label">Tiêu đề</label>
                                <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Tiêu đề tin nhắn" />
                            </div>
                            <div class="col-12 mb-3">
                                <label for="contact_message" class="form-label">Nhu cầu tư vấn</label>
                                <textarea id="contact_message" name="message" cols="30" rows="7" class="form-control" placeholder="Mô tả ngắn gọn nhu cầu của bạn..."></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary px-5 py-3">Gửi tin nhắn</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function submitContact(e) {
        e.preventDefault();
        
        const formData = new FormData(e.target);
        const data = Object.fromEntries(formData);
        
        // TODO: Gửi data đến server
        console.log('Contact form data:', data);
        
        // Hiển thị thông báo thành công
        alert('Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi trong thời gian sớm nhất.');
        
        // Reset form
        e.target.reset();
    }
</script>

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
.contact-form-wrapper .form-label {
    font-weight: 500;
    color: #555;
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
}
.contact-form-wrapper .form-control {
    padding: 0.8rem 1rem;
    border-radius: 8px;
    border: 1px solid #ddd;
    background: #fafafa;
    transition: all 0.2s;
}
.contact-form-wrapper .form-control:focus {
    border-color: #1a237e;
    background: white;
    box-shadow: 0 0 0 3px rgba(26, 35, 126, 0.08);
    outline: none;
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
