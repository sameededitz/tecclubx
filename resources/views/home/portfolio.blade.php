@extends('layout.home-layout')
@section('title')
    Portfolio | TecClub - Technology
@endsection

@section('home_content')
    <!-- Banner Area Start -->
    <div class="page__banner">
        <div class="page__banner-shape">
            <img src="assets/img/shape/page-banner-shape.png" alt="image">
        </div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="page__banner-content py-5">
                        <h2>Portfolios</h2>
                        <span><a href="{{ route('home') }}">Home</a>
                            <span>|</span>
                            Portfolio
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Modern Portfolio Section Start -->
    <div class="modern-portfolio-section section-padding">
        <div class="portfolio-bg-shapes">
            <div class="portfolio-shape shape-1"></div>
            <div class="portfolio-shape shape-2"></div>
            <div class="portfolio-shape shape-3"></div>
        </div>
        
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-xl-8 col-lg-9">
                    <div class="portfolio-header" data-aos="fade-up">
                        <div class="portfolio-badge">
                            <i class="fas fa-briefcase"></i>
                            <span>OUR WORK</span>
                        </div>
                        <h2 class="portfolio-main-title">Our Latest Projects</h2>
                        <p class="portfolio-description">
                            Discover Our Portfolio Of Successful Projects - From Mobile Apps To Web Platforms,<br>Each Built With Precision, Innovation, And Excellence
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row g-4">
                @forelse ($portfolios as $portfolio)
                    <div class="col-xl-6 col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="ultra-modern-portfolio-card">
                            <!-- Card Number Badge -->
                            <div class="card-number-badge">
                                <span class="number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            </div>
                            
                            <!-- Image Section with Tilt Effect -->
                            <div class="portfolio-image-container">
                                <div class="image-tilt-wrapper">
                                    <img src="{{ $portfolio->getFirstMediaUrl('cover') }}" 
                                         alt="{{ $portfolio->title }}" 
                                         class="portfolio-main-image">
                                    
                                    <!-- Animated Corner Accents -->
                                    <div class="corner-accent corner-top-left"></div>
                                    <div class="corner-accent corner-top-right"></div>
                                    <div class="corner-accent corner-bottom-left"></div>
                                    <div class="corner-accent corner-bottom-right"></div>
                                    
                                    <!-- Hover Overlay with Blur -->
                                    <div class="modern-overlay">
                                        <div class="overlay-inner">
                                            <div class="category-pill">
                                                <i class="fas fa-layer-group"></i>
                                                <span>{{ $portfolio->category }}</span>
                                            </div>
                                            <a href="{{ route('show-portfolio', $portfolio->slug) }}" class="explore-btn">
                                                <span class="btn-text">Explore Project</span>
                                                <span class="btn-icon">
                                                    <i class="fas fa-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Content Section with Glassmorphism -->
                            <div class="portfolio-info-section">
                                <div class="info-wrapper">
                                    <h3 class="project-title">
                                        <a href="{{ route('show-portfolio', $portfolio->slug) }}">
                                            {{ $portfolio->title }}
                                        </a>
                                    </h3>
                                    
                                    <div class="project-details-row">
                                        <div class="detail-item">
                                            <i class="fas fa-calendar-day"></i>
                                            <span>{{ $portfolio->date->format('M Y') }}</span>
                                        </div>
                                        <div class="detail-divider"></div>
                                        <div class="detail-item">
                                            <i class="fas fa-tag"></i>
                                            <span>{{ $portfolio->category }}</span>
                                        </div>
                                    </div>
                                    
                                    <a href="{{ route('show-portfolio', $portfolio->slug) }}" class="view-details-link">
                                        <span>View Full Details</span>
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="no-portfolio-message">
                            <i class="fas fa-folder-open"></i>
                            <h3>No Projects Found</h3>
                            <p>We're currently working on amazing projects. Check back soon!</p>
                        </div>
                    </div>
                @endforelse
            </div>
            
            @if($portfolios->isNotEmpty())
                <div class="row mt-4">
                <div class="col-12">
                    <div class="portfolio__two-pagination">
                       {{ $portfolios->links() }}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <!-- Modern Portfolio Section End -->
@endsection
@section('home_scripts')
@endsection