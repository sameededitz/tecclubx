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
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="modern-pagination">
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

@section('styles')
<style>
/* Modern Portfolio Section Styles */
.modern-portfolio-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    position: relative;
    overflow: hidden;
}

.portfolio-bg-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.portfolio-shape {
    position: absolute;
    border-radius: 50%;
    opacity: 0.1;
    animation: float 20s infinite ease-in-out;
}

.portfolio-shape.shape-1 {
    width: 200px;
    height: 200px;
    background: linear-gradient(135deg, #0E59F2, #2D7CFF);
    top: 10%;
    left: 5%;
    animation-delay: 0s;
}

.portfolio-shape.shape-2 {
    width: 150px;
    height: 150px;
    background: linear-gradient(135deg, #F8E559, #FFC107);
    top: 60%;
    right: 10%;
    animation-delay: 10s;
}

.portfolio-shape.shape-3 {
    width: 120px;
    height: 120px;
    background: linear-gradient(135deg, #28a745, #20c997);
    bottom: 15%;
    left: 20%;
    animation-delay: 5s;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0) rotate(0deg);
    }
    33% {
        transform: translateY(-20px) rotate(120deg);
    }
    66% {
        transform: translateY(-10px) rotate(240deg);
    }
}

.portfolio-header {
    margin-bottom: 60px;
}

.portfolio-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: white;
    border: 2px solid #0E59F2;
    border-radius: 50px;
    padding: 10px 25px;
    margin-bottom: 25px;
    font-weight: 700;
    color: #0E59F2;
    box-shadow: 0 5px 15px rgba(14, 89, 242, 0.2);
}

.portfolio-main-title {
    font-size: 3rem;
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 20px;
    line-height: 1.2;
}

.portfolio-description {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #666;
    margin: 0;
}

/* Ultra Modern Portfolio Card */
.ultra-modern-portfolio-card {
    background: white;
    border-radius: 25px;
    overflow: hidden;
    position: relative;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.ultra-modern-portfolio-card:hover {
    transform: translateY(-15px);
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
}

.card-number-badge {
    position: absolute;
    top: 20px;
    left: 20px;
    z-index: 10;
    background: linear-gradient(135deg, #0E59F2, #2D7CFF);
    border-radius: 12px;
    padding: 8px 15px;
    color: white;
    font-weight: 700;
    font-size: 14px;
    box-shadow: 0 5px 15px rgba(14, 89, 242, 0.3);
}

.portfolio-image-container {
    position: relative;
    height: 280px;
    overflow: hidden;
}

.image-tilt-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
    border-radius: 25px 25px 0 0;
}

.portfolio-main-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.6s ease;
}

.ultra-modern-portfolio-card:hover .portfolio-main-image {
    transform: scale(1.05);
}

.corner-accent {
    position: absolute;
    width: 40px;
    height: 40px;
    border: 3px solid #F8E559;
    opacity: 0;
    transition: all 0.4s ease;
}

.corner-top-left {
    top: 15px;
    left: 15px;
    border-right: none;
    border-bottom: none;
}

.corner-top-right {
    top: 15px;
    right: 15px;
    border-left: none;
    border-bottom: none;
}

.corner-bottom-left {
    bottom: 15px;
    left: 15px;
    border-right: none;
    border-top: none;
}

.corner-bottom-right {
    bottom: 15px;
    right: 15px;
    border-left: none;
    border-top: none;
}

.ultra-modern-portfolio-card:hover .corner-accent {
    opacity: 1;
}

.modern-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(14, 89, 242, 0.95), rgba(45, 124, 255, 0.95));
    backdrop-filter: blur(10px);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.4s ease;
}

.ultra-modern-portfolio-card:hover .modern-overlay {
    opacity: 1;
}

.overlay-inner {
    text-align: center;
    transform: translateY(20px);
    transition: all 0.4s ease;
}

.ultra-modern-portfolio-card:hover .overlay-inner {
    transform: translateY(0);
}

.category-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(248, 229, 89, 0.2);
    border: 1px solid rgba(248, 229, 89, 0.3);
    border-radius: 25px;
    padding: 8px 20px;
    color: #F8E559;
    font-weight: 600;
    margin-bottom: 20px;
    backdrop-filter: blur(10px);
}

.explore-btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: white;
    color: #0E59F2;
    padding: 12px 25px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 700;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(255, 255, 255, 0.3);
}

.explore-btn:hover {
    background: #F8E559;
    color: #1a1a1a;
    transform: translateX(5px);
}

.btn-icon {
    transition: transform 0.3s ease;
}

.explore-btn:hover .btn-icon {
    transform: translateX(5px);
}

.portfolio-info-section {
    padding: 30px;
    background: white;
    position: relative;
}

.project-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    line-height: 1.3;
}

.project-title a {
    color: #1a1a1a;
    text-decoration: none;
    transition: color 0.3s ease;
}

.project-title a:hover {
    color: #0E59F2;
}

.project-details-row {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
    color: #666;
    font-size: 0.9rem;
}

.detail-item {
    display: flex;
    align-items: center;
    gap: 6px;
}

.detail-divider {
    width: 4px;
    height: 4px;
    background: #ddd;
    border-radius: 50%;
}

.view-details-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #0E59F2;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.view-details-link:hover {
    color: #2D7CFF;
    gap: 12px;
}

.no-portfolio-message {
    text-align: center;
    padding: 100px 20px;
    color: #666;
}

.no-portfolio-message i {
    font-size: 4rem;
    color: #ddd;
    margin-bottom: 20px;
}

.no-portfolio-message h3 {
    font-size: 1.8rem;
    color: #1a1a1a;
    margin-bottom: 15px;
}

.modern-pagination {
    display: flex;
    justify-content: center;
    margin-top: 50px;
}

/* Responsive Design Fixes */
.modern-portfolio-section .container {
    overflow-x: hidden;
}

/* Large screens - 2 columns */
@media (min-width: 1200px) {
    .portfolio-main-title {
        font-size: 3rem;
    }
    
    .portfolio-image-container {
        height: 300px;
    }
}

/* Medium-large screens - 2 columns but smaller */
@media (min-width: 992px) and (max-width: 1199px) {
    .modern-portfolio-section .col-xl-6.col-lg-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }
    
    .portfolio-main-title {
        font-size: 2.5rem;
    }
    
    .portfolio-image-container {
        height: 260px;
    }
    
    .portfolio-info-section {
        padding: 25px;
    }
    
    .project-title {
        font-size: 1.3rem;
    }
}

/* Medium screens - 50% width fix */
@media (min-width: 768px) and (max-width: 991px) {
    .modern-portfolio-section .col-xl-6.col-lg-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }
    
    .modern-portfolio-section .container {
        max-width: 95%;
        padding-left: 15px;
        padding-right: 15px;
    }
    
    .portfolio-main-title {
        font-size: 2.3rem;
    }
    
    .portfolio-image-container {
        height: 240px;
    }
    
    .portfolio-info-section {
        padding: 20px;
    }
    
    .project-title {
        font-size: 1.2rem;
    }
    
    .ultra-modern-portfolio-card {
        margin-bottom: 25px;
    }
}

/* Small tablets */
@media (min-width: 576px) and (max-width: 767px) {
    .modern-portfolio-section .col-xl-6.col-lg-6.col-md-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    
    .portfolio-main-title {
        font-size: 2rem;
    }
    
    .portfolio-image-container {
        height: 220px;
    }
    
    .ultra-modern-portfolio-card {
        margin-bottom: 30px;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }
}

/* Mobile */
@media (max-width: 575px) {
    .modern-portfolio-section .col-xl-6.col-lg-6.col-md-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    
    .portfolio-main-title {
        font-size: 1.8rem;
    }
    
    .portfolio-description {
        font-size: 1rem;
    }
    
    .portfolio-image-container {
        height: 200px;
    }
    
    .portfolio-info-section {
        padding: 20px;
    }
    
    .project-title {
        font-size: 1.1rem;
    }
    
    .ultra-modern-portfolio-card {
        margin-bottom: 25px;
        border-radius: 20px;
    }
    
    .card-number-badge {
        top: 15px;
        left: 15px;
        padding: 6px 12px;
        font-size: 12px;
    }
    
    .explore-btn {
        padding: 10px 20px;
        font-size: 0.9rem;
    }
    
    .project-details-row {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
    
    .detail-divider {
        display: none;
    }
}

/* Extra small screens */
@media (max-width: 480px) {
    .portfolio-main-title {
        font-size: 1.6rem;
        line-height: 1.3;
    }
    
    .portfolio-description br {
        display: none;
    }
    
    .portfolio-image-container {
        height: 180px;
    }
    
    .portfolio-info-section {
        padding: 15px;
    }
    
    .project-title {
        font-size: 1rem;
    }
    
    .no-portfolio-message {
        padding: 60px 15px;
    }
    
    .no-portfolio-message i {
        font-size: 3rem;
    }
    
    .no-portfolio-message h3 {
        font-size: 1.5rem;
    }
}

/* Fix for container overflow on all screen sizes */
.row {
    margin-left: 0;
    margin-right: 0;
}

.row > * {
    padding-right: calc(var(--bs-gutter-x) * 0.5);
    padding-left: calc(var(--bs-gutter-x) * 0.5);
}

/* Prevent horizontal scroll */
body {
    overflow-x: hidden;
}

/* Better gap management for different screen sizes */
@media (max-width: 991px) {
    .row.g-4 {
        --bs-gutter-x: 20px;
        --bs-gutter-y: 20px;
    }
}

@media (max-width: 576px) {
    .row.g-4 {
        --bs-gutter-x: 15px;
        --bs-gutter-y: 15px;
    }
}
</style>
@endsection
