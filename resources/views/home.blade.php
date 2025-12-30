@extends('layouts.app')

@section('title', 'Bất Động Sản - Trang Chủ')

@section('content')
<div class="hero">
    <div class="hero-slide">
        <div class="img overlay" style="background-image: url('{{ asset('images/hero_bg_7.jpg') }}')"></div>
        <div class="img overlay" style="background-image: url('{{ asset('images/hero_bg_6.jpg') }}')"></div>
        <div class="img overlay" style="background-image: url('{{ asset('images/hero_bg_5.jpg') }}')"></div>
        <div class="img overlay" style="background-image: url('{{ asset('images/hero_bg_4.jpg') }}')"></div>
        <div class="img overlay" style="background-image: url('{{ asset('images/hero_bg_3.jpg') }}')"></div>
        <div class="img overlay" style="background-image: url('{{ asset('images/hero_bg_2.jpg') }}')"></div>
        <div class="img overlay" style="background-image: url('{{ asset('images/hero_bg_1.jpg') }}')"></div>
    </div>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center">
                <h1 class="heading" data-aos="fade-up">
                    Cách dễ nhất để tìm ngôi nhà mơ ước của bạn
                </h1>
                <form action="#" class="narrow-w form-search d-flex flex-nowrap align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                    <input type="text" class="form-control px-4" placeholder="Mã ZIP hoặc Thành phố của bạn. VD: Hà Nội" style="flex: 1;" />
                    <button type="submit" class="btn btn-primary py-3 px-5" style="white-space: nowrap;">Tìm kiếm</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Giới thiệu chung Section -->
<div class="section" style="background-color: #f8f9fa;">
    <div class="container">
        <!-- Header -->
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <h2 class="font-weight-bold text-primary mb-3" style="font-size: 2rem; letter-spacing: 1px;">GIỚI THIỆU CHUNG</h2>
                <div class="mx-auto" style="height: 3px; width: 60px; background-color: #1a237e;"></div>
            </div>
        </div>

        <!-- Content -->
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <!-- Left Column - Main Content -->
                    <div class="col-lg-7 mb-4 mb-lg-0" data-aos="fade-right">
                        <div class="bg-white p-3 h-100" style="box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                            <p style="font-size: 1rem; line-height: 1.9; color: #666; text-align: justify; margin-bottom: 1.2rem;">
                                <strong style="color: #333;">Công ty Cổ phần Tập đoàn Đầu tư Ngân Tín</strong> <span style="color: #666;">(Tập đoàn Ngân Tín)</span> được thành lập năm <strong style="color: #1a237e;">2009</strong>, là một tập đoàn kinh doanh đa ngành nghề trong các lĩnh vực: <strong style="color: #333;">Bất động sản, Năng lượng xanh, Kho cảng biển</strong> và <strong style="color: #333;">Kinh doanh xăng dầu</strong>.
                            </p>
                            <p style="font-size: 1rem; line-height: 1.9; color: #666; text-align: justify; margin-bottom: 0;">
                                Qua <strong style="color: #1a237e;">15 năm</strong> xây dựng và phát triển, Tập đoàn đã xây dựng được hệ sinh thái vững mạnh, phát triển cả về quy mô, cơ cấu tổ chức, năng lực tài chính, năng lực đầu tư, thành lập thêm nhiều đơn vị thành viên trong hệ sinh thái, thực hiện mục tiêu niêm yết trên sàn chứng khoán <strong style="color: #333;">London</strong> và <strong style="color: #333;">New York</strong>.
                            </p>
                        </div>
                    </div>

                    <!-- Right Column - Quote & Values -->
                    <div class="col-lg-5" data-aos="fade-left">
                        <!-- Quote Box -->
                        <div class="bg-white p-3 mb-3" style="box-shadow: 0 2px 8px rgba(0,0,0,0.05); border-left: 3px solid #1a237e;">
                            <p class="fst-italic mb-2" style="font-size: 1rem; line-height: 1.6; color: #333;">
                                "Ngân Tín của cộng đồng, Chúng tôi vì xã hội"
                            </p>
                            <p class="mb-0" style="font-size: 0.9rem; color: #1a237e;">
                                <strong>— Chủ tịch HĐQT Trương Đình Hải</strong>
                            </p>
                        </div>

                        <!-- Core Values -->
                        <div class="bg-white p-3" style="box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                            <h6 class="text-uppercase mb-3" style="font-weight: 700; font-size: 0.95rem; color: #1a237e; letter-spacing: 0.5px;">GIÁ TRỊ CỐT LÕI</h6>
                            <div class="row g-0">
                                <div class="col-6 text-center" style="padding: 0.8rem 0; border-bottom: 2px solid #1a237e;">
                                    <span class="icon-star d-block mb-1" style="font-size: 1.8rem; color: #1a237e;"></span>
                                    <p class="mb-0" style="font-size: 0.85rem; font-weight: 600; color: #333;">Chuyên nghiệp</p>
                                </div>
                                <div class="col-6 text-center" style="padding: 0.8rem 0; border-bottom: 2px solid #1a237e;">
                                    <span class="icon-check d-block mb-1" style="font-size: 1.8rem; color: #1a237e;"></span>
                                    <p class="mb-0" style="font-size: 0.85rem; font-weight: 600; color: #333;">Uy tín</p>
                                </div>
                                <div class="col-6 text-center" style="padding: 0.8rem 0; border-bottom: 2px solid #1a237e;">
                                    <span class="icon-lightbulb-o d-block mb-1" style="font-size: 1.8rem; color: #1a237e;"></span>
                                    <p class="mb-0" style="font-size: 0.85rem; font-weight: 600; color: #333;">Sáng tạo</p>
                                </div>
                                <div class="col-6 text-center" style="padding: 0.8rem 0; border-bottom: 2px solid #1a237e;">
                                    <span class="icon-shield d-block mb-1" style="font-size: 1.8rem; color: #1a237e;"></span>
                                    <p class="mb-0" style="font-size: 0.85rem; font-weight: 600; color: #333;">Bền vững</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="text-center mt-4" data-aos="fade-up">
                    <a href="{{ route('about') }}" class="btn text-white px-5 py-3" style="background-color: #ffc107; border: none; border-radius: 50px; font-weight: 600; font-size: 1rem; box-shadow: 0 4px 12px rgba(255,193,7,0.3);">
                        Xem thêm <span class="ms-2">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6">
                 <h2 class="font-weight-bold text-primary heading">
                    Bất Động Sản Phổ Biến
                </h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <p>
                    <a href="{{ route('properties') }}" class="btn btn-primary text-white py-3 px-4">Xem tất cả BĐS</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="property-slider-wrap">
                    <div class="property-slider">
                        @for ($i = 1; $i <= 8; $i++)
                        <div class="property-item">
                            <a href="{{ route('property.single') }}" class="img">
                                <img src="{{ asset('images/img_' . $i . '.jpg') }}" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 phòng ngủ</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 phòng tắm</span>
                                        </span>
                                    </div>

                                    <a href="{{ route('property.single') }}" class="btn btn-primary py-2 px-3">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>

                    <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                        <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Trước</span>
                        <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Sau</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="features-1">
    <div class="container">
        <div class="row">
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="box-feature">
                    <span class="flaticon-house"></span>
                    <h3 class="mb-3">BĐS Của Chúng Tôi</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptates, accusamus.
                    </p>
                    <p><a href="#" class="learn-more">Tìm Hiểu Thêm</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="box-feature">
                    <span class="flaticon-building"></span>
                    <h3 class="mb-3">BĐS Cần Bán</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptates, accusamus.
                    </p>
                    <p><a href="#" class="learn-more">Tìm Hiểu Thêm</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="box-feature">
                    <span class="flaticon-house-3"></span>
                    <h3 class="mb-3">Đại Lý BĐS</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptates, accusamus.
                    </p>
                    <p><a href="#" class="learn-more">Tìm Hiểu Thêm</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <div class="box-feature">
                    <span class="flaticon-house-1"></span>
                    <h3 class="mb-3">Nhà Cần Bán</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptates, accusamus.
                    </p>
                    <p><a href="#" class="learn-more">Tìm Hiểu Thêm</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section sec-testimonials">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-md-6">
                <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                    Khách Hàng Nói Gì
                </h2>
            </div>
            <div class="col-md-6 text-md-end">
                <div id="testimonial-nav">
                    <span class="prev" data-controls="prev">Trước</span>
                    <span class="next" data-controls="next">Sau</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4"></div>
        </div>
        <div class="testimonial-slider-wrap">
            <div class="testimonial-slider">
                @php
                    $testimonials = [
                        ['name' => 'James Smith', 'image' => 'person_1-min.jpg', 'role' => 'Thiết kế, Đồng sáng lập'],
                        ['name' => 'Mike Houston', 'image' => 'person_2-min.jpg', 'role' => 'Thiết kế, Đồng sáng lập'],
                        ['name' => 'Cameron Webster', 'image' => 'person_3-min.jpg', 'role' => 'Thiết kế, Đồng sáng lập'],
                        ['name' => 'Dave Smith', 'image' => 'person_4-min.jpg', 'role' => 'Thiết kế, Đồng sáng lập'],
                    ];
                @endphp

                @foreach ($testimonials as $testimonial)
                <div class="item">
                    <div class="testimonial">
                        <img src="{{ asset('images/' . $testimonial['image']) }}" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                        <div class="rate">
                            @for ($i = 0; $i < 5; $i++)
                            <span class="icon-star text-warning"></span>
                            @endfor
                        </div>
                        <h3 class="h5 text-primary mb-4">{{ $testimonial['name'] }}</h3>
                        <blockquote>
                            <p>
                                &ldquo;Far far away, behind the word mountains, far from the
                                countries Vokalia and Consonantia, there live the blind
                                texts. Separated they live in Bookmarksgrove right at the
                                coast of the Semantics, a large language ocean.&rdquo;
                            </p>
                        </blockquote>
                        <p class="text-black-50">{{ $testimonial['role'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="section section-4 bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-5">
                <h2 class="font-weight-bold heading text-primary mb-4">
                    Hãy tìm ngôi nhà hoàn hảo cho bạn
                </h2>
                <p class="text-black-50">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                    enim pariatur similique debitis vel nisi qui reprehenderit.
                </p>
            </div>
        </div>
        <div class="row justify-content-between mb-5">
            <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                <div class="img-about dots">
                    <img src="{{ asset('images/hero_bg_3.jpg') }}" alt="Image" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-home2"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">2 Triệu BĐS</h3>
                        <p class="text-black-50">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nostrum iste.
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-person"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">Đại Lý Uy Tín</h3>
                        <p class="text-black-50">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nostrum iste.
                        </p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-security"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">BĐS Hợp Pháp</h3>
                        <p class="text-black-50">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nostrum iste.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row section-counter mt-5">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">3298</span></span>
                    <span class="caption text-black-50"># BĐS đã mua</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">2181</span></span>
                    <span class="caption text-black-50"># BĐS đang bán</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">9316</span></span>
                    <span class="caption text-black-50"># Tất cả BĐS</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">7191</span></span>
                    <span class="caption text-black-50"># Đại lý</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="row justify-content-center footer-cta" data-aos="fade-up">
        <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4">Trở thành một phần trong đội ngũ đại lý BĐS đang phát triển của chúng tôi</h2>
            <p>
                <a href="#" class="btn btn-primary text-white py-3 px-4">Đăng ký làm Đại lý BĐS</a>
            </p>
        </div>
    </div>
</div>

<div class="section section-5 bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-6 mb-5">
                <h2 class="font-weight-bold heading text-primary mb-4">
                    Đại Lý Của Chúng Tôi
                </h2>
                <p class="text-black-50">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                    enim pariatur similique debitis vel nisi qui reprehenderit totam?
                    Quod maiores.
                </p>
            </div>
        </div>
        <div class="row">
            @php
                $agents = [
                    ['name' => 'James Doe', 'image' => 'person_1-min.jpg'],
                    ['name' => 'Jean Smith', 'image' => 'person_2-min.jpg'],
                    ['name' => 'Alicia Huston', 'image' => 'person_3-min.jpg'],
                ];
            @endphp

            @foreach ($agents as $agent)
            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="h-100 person">
                    <img src="{{ asset('images/' . $agent['image']) }}" alt="Image" class="img-fluid" />

                    <div class="person-contents">
                        <h2 class="mb-0"><a href="#">{{ $agent['name'] }}</a></h2>
                        <span class="meta d-block mb-3">Đại Lý Bất Động Sản</span>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Facere officiis inventore cumque tenetur laboriosam, minus
                            culpa doloremque odio, neque molestias?
                        </p>

                        <ul class="social list-unstyled list-inline dark-hover">
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-twitter"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-facebook"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><span class="icon-instagram"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
