@extends('layouts.app')

@section('title', $property->title . ' - Chi tiết BĐS')

@section('content')
<div class="hero page-inner overlay" style="background-image: url('{{ $property->image && Str::startsWith($property->image, 'properties/') ? asset('storage/' . $property->image) : asset('images/' . ($property->image ?? 'hero_bg_3.jpg')) }}')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">
                    {{ $property->title }}
                </h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('properties') }}">Bất động sản</a>
                        </li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            {{ Str::limit($property->title, 50) }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <!-- Cột hình ảnh và thông tin chi tiết -->
            <div class="col-lg-8">
                <!-- Hình ảnh chính -->
                <div class="img-property-slide-wrap mb-4">
                    <div class="img-property-slide">
                        @if($property->image)
                            @if(Str::startsWith($property->image, 'properties/'))
                                <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->title }}" class="img-fluid" style="border-radius: 12px;" />
                            @else
                                <img src="{{ asset('images/' . $property->image) }}" alt="{{ $property->title }}" class="img-fluid" style="border-radius: 12px;" />
                            @endif
                        @else
                            <img src="{{ asset('images/img_1.jpg') }}" alt="{{ $property->title }}" class="img-fluid" style="border-radius: 12px;" />
                        @endif
                    </div>
                </div>

                <!-- Tiêu đề và giá -->
                <div class="mb-4">
                    <h2 class="heading text-primary mb-2">{{ $property->title }}</h2>
                    <p class="meta mb-3"><i class="bi bi-geo-alt me-1"></i> {{ $property->city }}, {{ $property->country }}</p>
                    
                    <div class="price">
                        <span class="text-success" style="font-size: 2rem; font-weight: 700;">
                            {{ number_format($property->price, 0, ',', '.') }} VNĐ
                        </span>
                    </div>
                </div>

                <!-- Thông số kỹ thuật -->
                <div class="specs-wrap mb-4">
                    <h5 class="mb-3">Thông số kỹ thuật</h5>
                    <div class="row">
                        @if($property->project_type)
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3" style="background: #f8f9fa; border-radius: 8px;">
                                <i class="bi bi-building me-3" style="font-size: 1.5rem; color: #1a237e;"></i>
                                <div>
                                    <small class="text-muted d-block">Loại dự án</small>
                                    <strong>{{ $property->project_type }}</strong>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        @if($property->area)
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3" style="background: #f8f9fa; border-radius: 8px;">
                                <i class="bi bi-rulers me-3" style="font-size: 1.5rem; color: #1a237e;"></i>
                                <div>
                                    <small class="text-muted d-block">Tổng diện tích</small>
                                    <strong>{{ number_format($property->area, 0, ',', '.') }} m²</strong>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        @if($property->total_products)
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3" style="background: #f8f9fa; border-radius: 8px;">
                                <i class="bi bi-houses me-3" style="font-size: 1.5rem; color: #1a237e;"></i>
                                <div>
                                    <small class="text-muted d-block">Tổng số sản phẩm</small>
                                    <strong>{{ number_format($property->total_products) }} căn</strong>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        @if($property->delivery_time)
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3" style="background: #f8f9fa; border-radius: 8px;">
                                <i class="bi bi-calendar-check me-3" style="font-size: 1.5rem; color: #1a237e;"></i>
                                <div>
                                    <small class="text-muted d-block">Thời gian bàn giao</small>
                                    <strong>{{ $property->delivery_time }}</strong>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        @if($property->ownership_duration)
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center p-3" style="background: #f8f9fa; border-radius: 8px;">
                                <i class="bi bi-clock-history me-3" style="font-size: 1.5rem; color: #1a237e;"></i>
                                <div>
                                    <small class="text-muted d-block">Thời gian sở hữu</small>
                                    <strong>{{ $property->ownership_duration }}</strong>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Mô tả chi tiết -->
                <div class="mb-4">
                    <h5 class="mb-3">Mô tả chi tiết</h5>
                    <p class="text-black-50" style="text-align: justify; line-height: 1.8;">
                        {{ $property->description ?? 'Thông tin chi tiết đang được cập nhật...' }}
                    </p>
                </div>

                <!-- Tiện ích -->
                @if($property->facilities)
                <div class="mb-4">
                    <h5 class="mb-3">Tiện ích</h5>
                    <div class="facilities-list row">
                        @foreach(explode(';', $property->facilities) as $facility)
                            @if(trim($facility))
                            <div class="col-md-6 mb-2">
                                <div class="d-flex align-items-start">
                                    <i class="bi bi-check-circle-fill me-2 mt-1" style="color: #28a745;"></i>
                                    <span>{{ trim($facility) }}</span>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <!-- Cột sidebar thông tin liên hệ -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <!-- Card thông tin liên hệ -->
                    <div class="card shadow-sm mb-4" style="border: none; border-radius: 12px;">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-3">Thông tin liên hệ</h5>
                            
                            <div class="mb-3 pb-3 border-bottom">
                                <p class="mb-2 d-flex align-items-start">
                                    <i class="bi bi-geo-alt me-2 mt-1" style="color: #1a237e;"></i>
                                    <span><strong>Địa chỉ:</strong><br>{{ $property->address }}</span>
                                </p>
                                <p class="mb-0 d-flex align-items-center">
                                    <i class="bi bi-pin-map me-2" style="color: #1a237e;"></i>
                                    <span>{{ $property->city }}, {{ $property->country }}</span>
                                </p>
                            </div>
                            
                            <a href="{{ route('contact') }}" class="btn btn-primary w-100 mb-2">
                                <i class="bi bi-telephone me-2"></i>Liên hệ ngay
                            </a>
                            <button class="btn btn-outline-primary w-100">
                                <i class="bi bi-heart me-2"></i>Lưu tin
                            </button>
                        </div>
                    </div>

                    <!-- Card giá -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
