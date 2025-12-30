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
                    ['icon' => 'flaticon-house', 'title' => 'BĐS Chất Lượng', 'delay' => '300'],
                    ['icon' => 'flaticon-house-2', 'title' => 'Đại Lý Uy Tín', 'delay' => '400'],
                    ['icon' => 'flaticon-building', 'title' => 'BĐS Cần Bán', 'delay' => '500'],
                    ['icon' => 'flaticon-house-3', 'title' => 'Nhà Cần Bán', 'delay' => '600'],
                    ['icon' => 'flaticon-house-4', 'title' => 'BĐS Chất Lượng', 'delay' => '300'],
                    ['icon' => 'flaticon-building', 'title' => 'Đại Lý Uy Tín', 'delay' => '400'],
                    ['icon' => 'flaticon-house', 'title' => 'BĐS Cần Bán', 'delay' => '500'],
                    ['icon' => 'flaticon-house-1', 'title' => 'Nhà Cần Bán', 'delay' => '600'],
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
                        Far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts.
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
@endsection
