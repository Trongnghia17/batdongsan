@extends('layouts.app')

@section('title', 'Dự Án - Tập Đoàn Ngân Tín')

@section('content')
<div class="hero page-inner overlay" style="background-image: url('{{ asset('images/hero_bg_3.jpg') }}')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">DỰ ÁN</h1>
                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">Dự án</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="section bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="intro-box p-4" data-aos="fade-up">
                    <p>
                        Kinh doanh Bất động sản là một trong những lĩnh vực then chốt và định hướng lâu dài của Tập đoàn Ngân Tín. 
                        Tập đoàn Ngân Tín đã và đang đắn khắng định tên của mình với việc triển khai và hoàn thiện một loạt các 
                        Dự án khu đô thị; Khu nghỉ dưỡng biển quốc tế.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse($properties as $property)
            <div class="col-12 mb-5" data-aos="fade-up">
                <div class="property-card">
                    <div class="row g-0 {{ $loop->iteration % 2 == 0 ? 'flex-row-reverse' : '' }}">
                        <div class="col-lg-7">
                            <div class="property-image-wrap">
                                @if($property->image && Str::startsWith($property->image, 'properties/'))
                                    <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->title }}" class="property-img">
                                @elseif($property->image)
                                    <img src="{{ asset('images/' . $property->image) }}" alt="{{ $property->title }}" class="property-img">
                                @else
                                    <img src="{{ asset('images/img_1.jpg') }}" alt="{{ $property->title }}" class="property-img">
                                @endif
                                <div class="property-badge"><i class="bi bi-star-fill"></i></div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="property-content">
                                <h2 class="property-title">{{ $property->title }}</h2>
                                <div class="property-location mb-3">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <span>{{ $property->address }}, {{ $property->city }}</span>
                                </div>
                                <div class="property-info-grid mb-4">
                                    <div class="info-item">
                                        <div class="info-icon"><i class="bi bi-building"></i></div>
                                        <div class="info-content">
                                            <small>Loại hình</small>
                                            <strong>{{ $property->project_type ?? 'Khu đô thị' }}</strong>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-icon"><i class="bi bi-rulers"></i></div>
                                        <div class="info-content">
                                            <small>Diện tích</small>
                                            <strong>{{ number_format($property->area, 1) }} ha</strong>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-icon"><i class="bi bi-houses"></i></div>
                                        <div class="info-content">
                                            <small>Sản phẩm</small>
                                            <strong>{{ $property->total_products ?? 'Đa dạng' }}</strong>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-icon"><i class="bi bi-calendar-check"></i></div>
                                        <div class="info-content">
                                            <small>Tiến độ</small>
                                            <strong>{{ $property->delivery_time ?? 'Đang cập nhật' }}</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-desc mb-4">
                                    <p>{{ Str::limit($property->description, 280) }}</p>
                                </div>
                                <div class="property-action">
                                    <a href="{{ route('property.single', $property->id) }}" class="btn-detail">
                                        Xem Chi Tiết <i class="bi bi-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="empty-state">
                    <i class="bi bi-house-x"></i>
                    <h4>Chưa có dự án nào</h4>
                    <p>Hiện tại chưa có dự án nào được công bố</p>
                </div>
            </div>
            @endforelse
        </div>

        @if($properties->hasPages())
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center">
                {{ $properties->links() }}
            </div>
        </div>
        @endif
    </div>
</div>

<style>
.intro-box {
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 15px rgba(0,0,0,0.06);
}
.intro-box p {
    font-size: 1rem;
    line-height: 1.9;
    color: #666;
    text-align: justify;
    margin: 0;
}
.property-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 3px 20px rgba(0,0,0,0.08);
    transition: all 0.4s ease;
}
.property-card:hover {
    box-shadow: 0 8px 30px rgba(0,0,0,0.15);
    transform: translateY(-8px);
}
.property-image-wrap {
    position: relative;
    height: 100%;
    min-height: 450px;
    overflow: hidden;
}
.property-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.property-card:hover .property-img {
    transform: scale(1.05);
}
.property-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: linear-gradient(135deg, #f5c92c 0%, #ffd54f 100%);
    color: #1a237e;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 15px rgba(245, 201, 44, 0.4);
}
.property-content {
    padding: 2.5rem;
    display: flex;
    flex-direction: column;
    height: 100%;
}
.property-title {
    color: #1a237e;
    font-weight: 700;
    font-size: 1.5rem;
    line-height: 1.4;
    margin-bottom: 1rem;
}
.property-location {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #666;
    font-size: 0.95rem;
}
.property-location i {
    color: #f5c92c;
    font-size: 1.1rem;
}
.property-info-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
}
.info-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px;
    background: #f8f9fa;
    border-radius: 10px;
    transition: all 0.3s ease;
}
.info-item:hover {
    background: #e9ecef;
    transform: translateX(5px);
}
.info-icon {
    width: 45px;
    height: 45px;
    background: linear-gradient(135deg, #1a237e 0%, #303f9f 100%);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.info-icon i {
    color: white;
    font-size: 1.2rem;
}
.info-content {
    flex: 1;
    min-width: 0;
}
.info-content small {
    display: block;
    font-size: 0.75rem;
    color: #888;
    margin-bottom: 2px;
}
.info-content strong {
    display: block;
    font-size: 0.9rem;
    color: #333;
    font-weight: 600;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.property-desc {
    flex-grow: 1;
}
.property-desc p {
    color: #555;
    font-size: 0.95rem;
    line-height: 1.7;
    text-align: justify;
    margin: 0;
}
.btn-detail {
    display: inline-flex;
    align-items: center;
    padding: 14px 32px;
    background: linear-gradient(135deg, #1a237e 0%, #303f9f 100%);
    color: white;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(26, 35, 126, 0.4);
}
.btn-detail:hover {
    background: linear-gradient(135deg, #303f9f 0%, #1a237e 100%);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(26, 35, 126, 0.5);
}
.btn-detail i {
    transition: transform 0.3s ease;
}
.btn-detail:hover i {
    transform: translateX(5px);
}
.empty-state {
    text-align: center;
    padding: 5rem 2rem;
    background: white;
    border-radius: 15px;
    box-shadow: 0 2px 15px rgba(0,0,0,0.06);
}
.empty-state i {
    font-size: 5rem;
    color: #dee2e6;
    margin-bottom: 1.5rem;
}
.empty-state h4 {
    color: #333;
    margin-bottom: 0.5rem;
}
.empty-state p {
    color: #999;
    margin: 0;
}
@media (max-width: 991px) {
    .property-image-wrap {
        min-height: 300px !important;
    }
    .property-content {
        padding: 2rem 1.5rem;
    }
    .property-title {
        font-size: 1.3rem;
    }
    .property-info-grid {
        grid-template-columns: 1fr;
    }
}
@media (max-width: 575px) {
    .intro-box p {
        font-size: 0.9rem;
        line-height: 1.7;
    }
    .property-content {
        padding: 1.5rem;
    }
    .property-title {
        font-size: 1.2rem;
    }
    .btn-detail {
        width: 100%;
        justify-content: center;
    }
}
</style>
@endsection
