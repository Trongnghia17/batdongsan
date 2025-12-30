@extends('layouts.app')

@section('title', 'Giới Thiệu')

@section('content')
<div class="hero page-inner overlay" style="background-image: url('{{ asset('images/hero_bg_3.jpg') }}')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Giới Thiệu</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang Chủ</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            Giới Thiệu
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row text-left mb-5">
            <div class="col-12">
                <h2 class="font-weight-bold heading text-primary mb-4">Về Chúng Tôi</h2>
            </div>
            <div class="col-lg-6">
                <p class="text-black-50">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                    enim pariatur similique debitis vel nisi qui reprehenderit totam?
                    Quod maiores.
                </p>
                <p class="text-black-50">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                    saepe, explicabo nihil. Est, autem error cumque ipsum repellendus
                    veniam sed blanditiis unde ullam maxime veritatis perferendis
                    cupiditate, at non esse!
                </p>
                <p class="text-black-50">
                    Enim, nisi labore exercitationem facere cupiditate nobis quod
                    autem veritatis quis minima expedita. Cumque odio illo iusto
                    reiciendis, labore impedit omnis, nihil aut atque, facilis
                    necessitatibus asperiores porro qui nam.
                </p>
            </div>
            <div class="col-lg-6">
                <p class="text-black-50">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                    saepe, explicabo nihil. Est, autem error cumque ipsum repellendus
                    veniam sed blanditiis unde ullam maxime veritatis perferendis
                    cupiditate, at non esse!
                </p>
                <p class="text-black-50">
                    Enim, nisi labore exercitationem facere cupiditate nobis quod
                    autem veritatis quis minima expedita. Cumque odio illo iusto
                    reiciendis, labore impedit omnis, nihil aut atque, facilis
                    necessitatibus asperiores porro qui nam.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section pt-0">
    <div class="container">
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
                        <h3 class="heading">Bất động sản chất lượng</h3>
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
                        <h3 class="heading">Đại lý uy tín</h3>
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
                        <h3 class="heading">Dễ dàng và an toàn</h3>
                        <p class="text-black-50">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nostrum iste.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section pt-0">
    <div class="container">
        <div class="row justify-content-between mb-5">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="img-about dots">
                    <img src="{{ asset('images/hero_bg_2.jpg') }}" alt="Image" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-home2"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">Bất động sản chất lượng</h3>
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
                        <h3 class="heading">Đại lý uy tín</h3>
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
                        <h3 class="heading">Dễ dàng và an toàn</h3>
                        <p class="text-black-50">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nostrum iste.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <img src="{{ asset('images/img_1.jpg') }}" alt="Image" class="img-fluid" />
            </div>
            <div class="col-md-4 mt-lg-5" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('images/img_3.jpg') }}" alt="Image" class="img-fluid" />
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('images/img_2.jpg') }}" alt="Image" class="img-fluid" />
            </div>
        </div>
        <div class="row section-counter mt-5">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">2917</span></span>
                    <span class="caption text-black-50"># BĐS đã bán</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">3918</span></span>
                    <span class="caption text-black-50"># BĐS đang bán</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">38928</span></span>
                    <span class="caption text-black-50"># Tất cả BĐS</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <div class="counter-wrap mb-5 mb-lg-0">
                    <span class="number"><span class="countup text-primary">1291</span></span>
                    <span class="caption text-black-50"># Đại lý</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section sec-testimonials bg-light">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-md-6">
                <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                    Đội Ngũ
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
                    $team = [
                        ['name' => 'James Smith', 'image' => 'person_1-min.jpg', 'role' => 'Thiết kế, Đồng sáng lập'],
                        ['name' => 'Mike Houston', 'image' => 'person_2-min.jpg', 'role' => 'Thiết kế, Đồng sáng lập'],
                        ['name' => 'Cameron Webster', 'image' => 'person_3-min.jpg', 'role' => 'Thiết kế, Đồng sáng lập'],
                        ['name' => 'Dave Smith', 'image' => 'person_4-min.jpg', 'role' => 'Thiết kế, Đồng sáng lập'],
                    ];
                @endphp

                @foreach ($team as $member)
                <div class="item">
                    <div class="testimonial">
                        <img src="{{ asset('images/' . $member['image']) }}" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                        <div class="rate">
                            @for ($i = 0; $i < 5; $i++)
                            <span class="icon-star text-warning"></span>
                            @endfor
                        </div>
                        <h3 class="h5 text-primary mb-4">{{ $member['name'] }}</h3>
                        <blockquote>
                            <p>
                                &ldquo;Far far away, behind the word mountains, far from the
                                countries Vokalia and Consonantia, there live the blind
                                texts. Separated they live in Bookmarksgrove right at the
                                coast of the Semantics, a large language ocean.&rdquo;
                            </p>
                        </blockquote>
                        <p class="text-black-50">{{ $member['role'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
