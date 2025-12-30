@extends('layouts.app')

@section('title', $article->title . ' - Ngân Tín Group')

@section('content')
    <div class="hero page-inner overlay" style="background-image: url('{{ asset('images/hero_bg_1.jpg') }}')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Tin Tức</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('news.index') }}">Tin Tức</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">{{ Str::limit($article->title, 50) }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Nội Dung Bài Viết -->
                <div class="col-lg-8">
                    <article class="news-detail">
                        <span class="badge bg-primary mb-3">{{ $article->category }}</span>
                        <h1 class="mb-4">{{ $article->title }}</h1>
                        
                        <div class="article-meta mb-4">
                            <span class="text-muted">
                                <i class="bi bi-calendar3"></i> {{ $article->published_at->format('d/m/Y H:i') }}
                            </span>
                            <span class="mx-3 text-muted">|</span>
                            <span class="text-muted">
                                <i class="bi bi-eye"></i> {{ $article->views }} lượt xem
                            </span>
                        </div>

                        @if($article->image)
                        <div class="article-image mb-4">
                            <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" class="img-fluid rounded">
                        </div>
                        @endif

                        @if($article->excerpt)
                        <div class="article-excerpt mb-4">
                            <p class="lead">{{ $article->excerpt }}</p>
                        </div>
                        @endif

                        <div class="article-content">
                            {!! $article->content !!}
                        </div>

                        <!-- Chia Sẻ -->
                        <div class="article-share mt-5 pt-4 border-top">
                            <h5 class="mb-3">Chia sẻ bài viết:</h5>
                            <div class="share-buttons">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" 
                                   target="_blank" 
                                   class="btn btn-outline-primary me-2">
                                    <i class="bi bi-facebook"></i> Facebook
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($article->title) }}" 
                                   target="_blank" 
                                   class="btn btn-outline-info me-2">
                                    <i class="bi bi-twitter"></i> Twitter
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($article->title) }}" 
                                   target="_blank" 
                                   class="btn btn-outline-primary">
                                    <i class="bi bi-linkedin"></i> LinkedIn
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Tin Liên Quan -->
                    @if($relatedNews->count() > 0)
                    <div class="sidebar-widget mb-4">
                        <h4 class="widget-title mb-4">Tin Liên Quan</h4>
                        @foreach($relatedNews as $related)
                        <div class="related-item mb-3">
                            <a href="{{ route('news.show', $related->slug) }}" class="d-flex">
                                <img src="{{ asset($related->image ?? 'images/hero_bg_1.jpg') }}" 
                                     alt="{{ $related->title }}" 
                                     class="related-img me-3">
                                <div class="related-content">
                                    <h6 class="related-title mb-2">{{ Str::limit($related->title, 80) }}</h6>
                                    <p class="text-muted small mb-0">
                                        <i class="bi bi-calendar3"></i> {{ $related->published_at->format('d/m/Y') }}
                                    </p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    <!-- Danh Mục -->
                    <div class="sidebar-widget">
                        <h4 class="widget-title mb-4">Danh Mục</h4>
                        <ul class="category-list">
                            <li><a href="{{ route('news.index') }}">Bất Động Sản</a></li>
                            <li><a href="{{ route('news.index') }}">Năng Lượng</a></li>
                            <li><a href="{{ route('news.index') }}">Năng Lượng Xanh</a></li>
                            <li><a href="{{ route('news.index') }}">Logistics</a></li>
                            <li><a href="{{ route('news.index') }}">Kinh Doanh</a></li>
                            <li><a href="{{ route('news.index') }}">Cộng Đồng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .news-detail {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }

        .article-image img {
            width: 100%;
            height: auto;
        }

        .article-excerpt {
            background: #f8f9fa;
            padding: 20px;
            border-left: 4px solid #2f55d4;
            font-size: 1.1rem;
            color: #666;
        }

        .article-content {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #444;
        }

        .article-content p {
            margin-bottom: 1.5rem;
        }

        .article-content img {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
            border-radius: 5px;
        }

        .sidebar-widget {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }

        .widget-title {
            font-size: 1.3rem;
            color: #1a1a1a;
            position: relative;
            padding-bottom: 10px;
        }

        .widget-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: #2f55d4;
        }

        .related-item {
            padding-bottom: 15px;
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .related-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }

        .related-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
        }

        .related-title {
            font-size: 0.95rem;
            color: #1a1a1a;
            line-height: 1.4;
            transition: color 0.3s ease;
        }

        .related-item a:hover .related-title {
            color: #2f55d4;
        }

        .category-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .category-list li {
            margin-bottom: 10px;
        }

        .category-list a {
            color: #666;
            text-decoration: none;
            transition: all 0.3s ease;
            display: block;
            padding: 8px 12px;
            border-radius: 5px;
        }

        .category-list a:hover {
            color: #2f55d4;
            background: #f8f9fa;
            padding-left: 20px;
        }

        .share-buttons .btn {
            margin-bottom: 10px;
        }

        @media (max-width: 991px) {
            .news-detail {
                padding: 20px;
            }

            .sidebar-widget {
                margin-top: 30px;
            }
        }
    </style>
@endsection
