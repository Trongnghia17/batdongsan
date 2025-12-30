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
        <div class="row justify-content-between">
            <div class="col-lg-7">
                <div class="img-property-slide-wrap">
                    <div class="img-property-slide">
                        @if($property->image)
                            @if(Str::startsWith($property->image, 'properties/'))
                                <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->title }}" class="img-fluid" />
                            @else
                                <img src="{{ asset('images/' . $property->image) }}" alt="{{ $property->title }}" class="img-fluid" />
                            @endif
                        @else
                            <img src="{{ asset('images/img_1.jpg') }}" alt="{{ $property->title }}" class="img-fluid" />
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h2 class="heading text-primary">{{ $property->title }}</h2>
                <p class="meta">{{ $property->city }}, {{ $property->country }}</p>
                
                <div class="price mb-3">
                    <span class="text-success" style="font-size: 1.5rem; font-weight: 700;">
                        {{ number_format($property->price, 0, ',', '.') }} VNĐ
                    </span>
                </div>

                <div class="specs-wrap mb-4">
                    <div class="row">
                        @if($property->project_type)
                        <div class="col-12 mb-3">
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

                <h5 class="mb-3">Mô tả chi tiết</h5>
                <p class="text-black-50" style="text-align: justify; line-height: 1.8;">
                    {{ $property->description ?? 'Thông tin chi tiết đang được cập nhật...' }}
                </p>

                @if($property->facilities)
                <h5 class="mb-3 mt-4">Tiện ích</h5>
                <div class="facilities-list">
                    @foreach(explode(';', $property->facilities) as $facility)
                        @if(trim($facility))
                        <div class="d-flex align-items-start mb-2">
                            <i class="bi bi-check-circle-fill me-2 mt-1" style="color: #28a745;"></i>
                            <span>{{ trim($facility) }}</span>
                        </div>
                        @endif
                    @endforeach
                </div>
                @endif

                <div class="d-block p-4 mt-4" style="background: #f8f9fa; border-radius: 8px;">
                    <h6 class="mb-3">Thông tin liên hệ</h6>
                    <p class="mb-2"><i class="bi bi-geo-alt me-2"></i> {{ $property->address }}</p>
                    <p class="mb-2"><i class="bi bi-pin-map me-2"></i> {{ $property->city }}, {{ $property->country }}</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary mt-3 w-100">Liên hệ ngay</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
