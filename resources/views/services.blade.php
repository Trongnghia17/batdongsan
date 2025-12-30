@extends('layouts.app')

@section('title', 'Dịch Vụ')

@section('content')
<div class="hero page-inner overlay" style="background-image: url('{{ asset('images/hero_bg_1.jpg') }}')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Dịch Vụ</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang Chủ</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            Dịch Vụ
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="section bg-light">
    <div class="container">
        <div class="row">
            @php
                $services = [
                    ['icon' => 'flaticon-house', 'title' => 'Mua Bán Nhà Đất', 'desc' => 'Hỗ trợ tư vấn và môi giới mua bán các loại hình bất động sản từ nhà riêng, chung cư đến đất nền với giá tốt nhất thị trường.', 'delay' => '300'],
                    ['icon' => 'flaticon-house-2', 'title' => 'Cho Thuê BĐS', 'desc' => 'Dịch vụ cho thuê căn hộ, nhà riêng, văn phòng, mặt bằng kinh doanh với nhiều lựa chọn phù hợp với nhu cầu của bạn.', 'delay' => '400'],
                    ['icon' => 'flaticon-building', 'title' => 'Đầu Tư BĐS', 'desc' => 'Tư vấn đầu tư bất động sản hiệu quả, phân tích thị trường và cung cấp thông tin các dự án tiềm năng sinh lời cao.', 'delay' => '500'],
                    ['icon' => 'flaticon-house-3', 'title' => 'Định Giá BĐS', 'desc' => 'Dịch vụ định giá bất động sản chuyên nghiệp, chính xác dựa trên phân tích thị trường và vị trí địa lý.', 'delay' => '600'],
                    ['icon' => 'flaticon-house-4', 'title' => 'Quản Lý Tài Sản', 'desc' => 'Quản lý và vận hành bất động sản chuyên nghiệp, giúp tối ưu hóa giá trị và duy trì tài sản lâu dài.', 'delay' => '300'],
                    ['icon' => 'flaticon-building', 'title' => 'Tư Vấn Pháp Lý', 'desc' => 'Hỗ trợ pháp lý toàn diện trong giao dịch bất động sản, đảm bảo quyền lợi và giảm thiểu rủi ro cho khách hàng.', 'delay' => '400'],
                    ['icon' => 'flaticon-house', 'title' => 'Môi Giới Chuyên Nghiệp', 'desc' => 'Đội ngũ môi giới giàu kinh nghiệm, am hiểu thị trường, tận tâm tìm kiếm giải pháp tối ưu cho mọi nhu cầu.', 'delay' => '500'],
                    ['icon' => 'flaticon-house-1', 'title' => 'Hỗ Trợ Vay Vốn', 'desc' => 'Tư vấn và hỗ trợ thủ tục vay vốn mua nhà với lãi suất ưu đãi từ các ngân hàng uy tín hàng đầu.', 'delay' => '600'],
                ];
            @endphp

            @foreach ($services as $service)
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $service['delay'] }}">
                <div class="box-feature mb-4">
                    <span class="{{ $service['icon'] }} mb-4 d-block"></span>
                    <h3 class="text-black mb-3 font-weight-bold">
                        {{ $service['title'] }}
                    </h3>
                    <p class="text-black-50">
                        {{ $service['desc'] }}
                    </p>
                    <p><a href="#" class="learn-more">Đọc thêm</a></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

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
                        ['name' => 'Nguyễn Văn An', 'image' => 'person_1-min.jpg', 'role' => 'Chủ đầu tư dự án', 'review' => 'Tôi rất hài lòng với dịch vụ tư vấn bất động sản tại đây. Đội ngũ chuyên nghiệp, nhiệt tình và giúp tôi tìm được căn nhà ưng ý trong thời gian ngắn với mức giá hợp lý.'],
                        ['name' => 'Trần Thị Mai', 'image' => 'person_2-min.jpg', 'role' => 'Khách hàng doanh nghiệp', 'review' => 'Dịch vụ môi giới chuyên nghiệp, thủ tục nhanh gọn. Họ đã hỗ trợ tôi từ khâu tìm kiếm, thương lượng giá đến hoàn tất pháp lý một cách trọn gói và minh bạch.'],
                        ['name' => 'Lê Hoàng Nam', 'image' => 'person_3-min.jpg', 'role' => 'Nhà đầu tư cá nhân', 'review' => 'Tư vấn đầu tư bất động sản rất tốt, phân tích thị trường chính xác giúp tôi đưa ra quyết định đúng đắn. Tôi đã sinh lời tốt từ những gợi ý của họ.'],
                        ['name' => 'Phạm Thu Hương', 'image' => 'person_4-min.jpg', 'role' => 'Khách hàng cá nhân', 'review' => 'Đội ngũ tư vấn rất am hiểu về pháp lý và thị trường. Họ đã giúp tôi tránh được nhiều rủi ro trong quá trình giao dịch mua bán bất động sản. Rất đáng tin cậy!'],
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
                                &ldquo;{{ $testimonial['review'] }}&rdquo;
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
@endsection
