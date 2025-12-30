@extends('layouts.app')

@section('title', 'Tin Tức - Ngân Tín Group')

@section('content')
    <div class="hero page-inner overlay" style="background-image: url('{{ asset('images/hero_bg_1.jpg') }}')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Tin Tức</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang Chủ</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">Tin Tức</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Tin Nổi Bật -->
    @if($featuredNews->count() > 0)
    <div class="section bg-light">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">Tin Nổi Bật</h2>
                </div>
            </div>
            <div class="row">
                @foreach($featuredNews as $featured)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-item h-100">
                        <a href="{{ route('news.show', $featured->slug) }}" class="img-link">
                            <img src="{{ asset($featured->image ?? 'images/hero_bg_1.jpg') }}" 
                                 alt="{{ $featured->title }}" 
                                 class="img-fluid news-img">
                        </a>
                        <div class="news-content p-4">
                            <span class="badge bg-primary mb-2">{{ $featured->category }}</span>
                            <h3 class="news-title">
                                <a href="{{ route('news.show', $featured->slug) }}">{{ $featured->title }}</a>
                            </h3>
                            <p class="text-muted small mb-3">
                                <i class="bi bi-calendar3"></i> {{ $featured->published_at->format('d/m/Y') }}
                                <span class="mx-2">|</span>
                                <i class="bi bi-eye"></i> {{ $featured->views }} lượt xem
                            </p>
                            <p class="news-excerpt">{{ $featured->excerpt }}</p>
                            <a href="{{ route('news.show', $featured->slug) }}" class="btn btn-outline-primary btn-sm">
                                Xem chi tiết <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <!-- Tất Cả Tin Tức -->
    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">Tất Cả Tin Tức</h2>
                </div>
            </div>
            <div class="row">
                @forelse($news as $article)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-item h-100">
                        <a href="{{ route('news.show', $article->slug) }}" class="img-link">
                            <img src="{{ asset($article->image ?? 'images/hero_bg_1.jpg') }}" 
                                 alt="{{ $article->title }}" 
                                 class="img-fluid news-img">
                        </a>
                        <div class="news-content p-4">
                            <span class="badge bg-secondary mb-2">{{ $article->category }}</span>
                            <h3 class="news-title">
                                <a href="{{ route('news.show', $article->slug) }}">{{ $article->title }}</a>
                            </h3>
                            <p class="text-muted small mb-3">
                                <i class="bi bi-calendar3"></i> {{ $article->published_at->format('d/m/Y') }}
                                <span class="mx-2">|</span>
                                <i class="bi bi-eye"></i> {{ $article->views }} lượt xem
                            </p>
                            <p class="news-excerpt">{{ $article->excerpt }}</p>
                            <a href="{{ route('news.show', $article->slug) }}" class="btn btn-outline-primary btn-sm">
                                Xem chi tiết <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <p class="text-center">Chưa có tin tức nào.</p>
                </div>
                @endforelse
            </div>

            <!-- Phân Trang -->
            @if($news->hasPages())
            <div class="row mt-5">
                <div class="col-12">
                    <div class="custom-pagination">
                        {{ $news->links() }}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <style>
        .news-item {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .news-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 25px rgba(0,0,0,0.15);
        }

        .news-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .news-item:hover .news-img {
            transform: scale(1.05);
        }

        .img-link {
            display: block;
            overflow: hidden;
        }

        .news-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .news-title a {
            color: #1a1a1a;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .news-title a:hover {
            color: #2f55d4;
        }

        .news-excerpt {
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .badge {
            font-size: 0.75rem;
            padding: 5px 10px;
        }
    </style>
@endsection
