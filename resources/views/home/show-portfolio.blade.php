@extends('layout.home-layout')
@section('title')
    Portfolio | TecClub - Technology
@endsection

@section('home_content')
    <!-- Banner Area Start -->
    <div class="page__banner">
        <div class="page__banner-shape">
            <img src="{{ asset('assets/img/shape/page-banner-shape.png') }}" alt="image">
        </div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="page__banner-content py-5">
                        <h2>{{ $portfolio->title }}</h2>
                        <span>
                            <a href="{{ route('home') }}">Home</a>
                            <span>|</span>
                            <a href="{{ route('portfolio') }}">Portfolios</a>
                            <span>|</span>
                            {{ $portfolio->title }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Premium Portfolio Detail Section Start -->
    <div class="premium-portfolio-detail section-padding">
        <div class="detail-bg-shapes">
            <div class="detail-shape shape-1"></div>
            <div class="detail-shape shape-2"></div>
            <div class="detail-shape shape-3"></div>
        </div>
        
        <div class="container">
            <!-- Project Hero Section -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="project-hero" data-aos="fade-up">
                        <div class="project-hero-badge">
                            <i class="fas fa-rocket"></i>
                            <span>{{ $portfolio->category }}</span>
                        </div>
                        <h1 class="project-hero-title">{{ $portfolio->title }}</h1>
                        <div class="project-hero-meta">
                            <div class="hero-meta-item">
                                <i class="far fa-calendar-alt"></i>
                                <span>{{ $portfolio->date->format('F d, Y') }}</span>
                            </div>
                            <div class="hero-meta-divider"></div>
                            <div class="hero-meta-item">
                                <i class="fas fa-folder-open"></i>
                                <span>{{ $portfolio->category }}</span>
                            </div>
                            <div class="hero-meta-divider"></div>
                            <div class="hero-meta-item">
                                <div class="project-rating-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">5.0 Rating</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Featured Image -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="project-featured-image" data-aos="zoom-in">
                        <div class="featured-image-wrapper">
                            <img src="{{ $portfolio->getFirstMediaUrl('cover') }}" 
                                 alt="{{ $portfolio->title }}" 
                                 class="featured-img">
                            <div class="image-overlay-gradient"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <!-- Main Content -->
                <div class="col-xl-8 col-lg-8">
                    <div class="project-main-content" data-aos="fade-up">
                        <div class="content-section">
                            <div class="section-label">
                                <i class="fas fa-file-alt"></i>
                                <span>Project Details</span>
                            </div>
                            <div class="content-body premium-content">
                                {!! $portfolio->description !!}
                            </div>
                        </div>

                        <!-- Project Gallery (if preview images exist) -->
                        @if($portfolio->getFirstMediaUrl('preview'))
                        <div class="content-section mt-5">
                            <div class="section-label">
                                <i class="fas fa-images"></i>
                                <span>Project Gallery</span>
                            </div>
                            <div class="project-gallery">
                                <div class="gallery-item">
                                    <img src="{{ $portfolio->getFirstMediaUrl('preview') }}" 
                                         alt="Preview" 
                                         class="gallery-img">
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4">
                    <div class="project-sidebar">
                        <!-- Project Info Card -->
                        <div class="sidebar-card project-info-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-header">
                                <i class="fas fa-info-circle"></i>
                                <h3>Project Information</h3>
                            </div>
                            <div class="card-body">
                                <div class="info-item">
                                    <div class="info-label">
                                        <i class="fas fa-tag"></i>
                                        <span>Category</span>
                                    </div>
                                    <div class="info-value">{{ $portfolio->category }}</div>
                                </div>
                                <div class="info-divider"></div>
                                <div class="info-item">
                                    <div class="info-label">
                                        <i class="far fa-calendar"></i>
                                        <span>Completion Date</span>
                                    </div>
                                    <div class="info-value">{{ $portfolio->date->format('M d, Y') }}</div>
                                </div>
                                <div class="info-divider"></div>
                                <div class="info-item">
                                    <div class="info-label">
                                        <i class="fas fa-star"></i>
                                        <span>Rating</span>
                                    </div>
                                    <div class="info-value">
                                        <div class="rating-display">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="rating-number">5.0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Card -->
                        <div class="sidebar-card cta-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="cta-content">
                                <div class="cta-icon">
                                    <i class="fas fa-rocket"></i>
                                </div>
                                <h3>Have A Project?</h3>
                                <p>Let's discuss your next big idea and bring it to life together.</p>
                                <a href="{{ route('contact') }}" class="cta-button">
                                    <span>Start Your Project</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back to Portfolio Button -->
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a href="{{ route('portfolio') }}" class="back-to-portfolio-btn" data-aos="fade-up">
                        <i class="fas fa-arrow-left"></i>
                        <span>Back to All Projects</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Premium Portfolio Detail Section End -->

    <!-- Subscribe Area End -->
    <div class="subscribe__one">
        <div class="container">
            <div class="row justify-content-center text-center subscribe__one-content"
                style="background-image: url(assets/img/subscribe/subscribe-one-shape-1.png);">
                <div class="col-xl-7 col-lg-8">
                    <div class="subscribe__one-title">
                        <h3>Subscribe Our newsletter </h3>
                    </div>
                    <form action="#" class="subscribe__one-form">
                        <input type="email" placeholder="Enter Your Email">
                        <button class="btn-two" type="submit">subscribe now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe Area End -->
@endsection
@section('home_scripts')
@endsection
