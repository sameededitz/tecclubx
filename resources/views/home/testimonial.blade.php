@extends('layout.home-layout')
@section('title')
    Testimonial | TecClub - Technology
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
                        <h2>Testimonials</h2>
                        <span><a href="{{ route('home') }}">Home</a>
                            <span>|</span>
                            Testimonials
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Testimonial Area Start -->
    
    <div class="testimonial__six section-padding">
        <div class="testimonial__six-bg-shapes">
            <div class="shape-circle circle-1"></div>
            <div class="shape-circle circle-2"></div>
            <div class="shape-circle circle-3"></div>
        </div>
        
        <div class="container" data-aos="zoom-out-up">
            <div class="row justify-content-center text-center mb-60">
                <div class="col-xl-8 col-lg-9 col-md-10">
                    <span class="subtitle-one">
                        <i class="fas fa-star"></i> Client Reviews <i class="fas fa-star"></i>
                    </span>
                    <h2 class="gradient-text">What Our Clients Say</h2>
                    <p class="section-desc">Real feedback from businesses worldwide who trust us with their digital transformation</p>
                </div>
            </div>
            
            <div class="row justify-content-center align-items-stretch">
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex" data-aos="fade-up">
                    <div class="testimonial__six-card gradient-card-1">
                        <div class="card-header-section">
                            <div class="quote-icon-wrapper">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        
                        <p class="testimonial-text">Working with Hassan and his team has been a game-changer for our business. They delivered a quality app tailored to our needs, with excellent attention to detail and communication throughout the project.</p>
                        
                        <div class="client-profile">
                            <div class="client-avatar">
                                <span class="avatar-letter">G</span>
                            </div>
                            <div class="client-info">
                                <h4>Garth Van Sittert</h4>
                                <span><i class="fas fa-map-marker-alt"></i> South Africa</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial__six-card gradient-card-2 featured-card">
                        <div class="featured-badge">
                            <i class="fas fa-crown"></i> Featured
                        </div>
                        <div class="card-header-section">
                            <div class="quote-icon-wrapper">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        
                        <p class="testimonial-text">{{ config('app.name') }} is a true professional. They are able to work on processes and deliver results on time. They understand delivery methodology and are attentive to details. Highly recommend.</p>
                        
                        <div class="client-profile">
                            <div class="client-avatar">
                                <span class="avatar-letter">C</span>
                            </div>
                            <div class="client-info">
                                <h4>Cyril Selivanov</h4>
                                <span><i class="fas fa-map-marker-alt"></i> Germany</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial__six-card gradient-card-3">
                        <div class="card-header-section">
                            <div class="quote-icon-wrapper">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        
                        <p class="testimonial-text">{{ config('app.name') }} is knowledgeable and helped with exactly what we needed. They jumped on a call quickly and answered all our questions, showing dedication and true commitment to client success.</p>
                        
                        <div class="client-profile">
                            <div class="client-avatar">
                                <span class="avatar-letter">A</span>
                            </div>
                            <div class="client-info">
                                <h4>Ankit Sharma</h4>
                                <span><i class="fas fa-map-marker-alt"></i> India</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Hidden Testimonials -->
            <div class="row justify-content-center align-items-stretch more-testimonials" style="margin-top: 30px;">
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex" data-aos="fade-up">
                    <div class="testimonial__six-card gradient-card-1">
                        <div class="card-header-section">
                            <div class="quote-icon-wrapper">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        
                        <p class="testimonial-text">Outstanding work! {{ config('app.name') }} delivered our e-commerce platform ahead of schedule. Their technical expertise and problem-solving skills are exceptional. Would definitely work with them again.</p>
                        
                        <div class="client-profile">
                            <div class="client-avatar">
                                <span class="avatar-letter">M</span>
                            </div>
                            <div class="client-info">
                                <h4>Michael Johnson</h4>
                                <span><i class="fas fa-map-marker-alt"></i> United States</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial__six-card gradient-card-2">
                        <div class="card-header-section">
                            <div class="quote-icon-wrapper">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        
                        <p class="testimonial-text">Highly professional team! They understood our requirements perfectly and delivered a beautiful, functional website. The communication was clear and they were always available to answer questions.</p>
                        
                        <div class="client-profile">
                            <div class="client-avatar">
                                <span class="avatar-letter">S</span>
                            </div>
                            <div class="client-info">
                                <h4>Sarah Williams</h4>
                                <span><i class="fas fa-map-marker-alt"></i> United Kingdom</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial__six-card gradient-card-3">
                        <div class="card-header-section">
                            <div class="quote-icon-wrapper">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        
                        <p class="testimonial-text">Excellent service from start to finish! {{ config('app.name') }} created a custom mobile app for our business that exceeded our expectations. Their attention to detail and creativity is remarkable.</p>
                        
                        <div class="client-profile">
                            <div class="client-avatar">
                                <span class="avatar-letter">R</span>
                            </div>
                            <div class="client-info">
                                <h4>Rajesh Kumar</h4>
                                <span><i class="fas fa-map-marker-alt"></i> Dubai</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- See More Button -->
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <button class="btn-see-more" id="seeMoreBtn">
                        <span class="btn-text">See More Reviews</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <div class="testimonial-stats">
                        <div class="stat-item">
                            <h3>53+</h3>
                            <p>Happy Clients</p>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <h3>5.0</h3>
                            <p>Average Rating</p>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <h3>70+</h3>
                            <p>Projects Done</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Testimonial Area End -->
@endsection
@section('home_scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const seeMoreBtn = document.getElementById('seeMoreBtn');
    const moreTestimonials = document.querySelector('.more-testimonials');
    let isExpanded = false;
    let isAnimating = false;
    
    seeMoreBtn.addEventListener('click', function() {
        if (isAnimating) return; // Prevent multiple clicks during animation
        
        isAnimating = true;
        isExpanded = !isExpanded;
        
        if (isExpanded) {
            // Show more testimonials with animation
            moreTestimonials.classList.add('show');
            
            // Update button with smooth transition
            this.querySelector('.btn-text').style.opacity = '0';
            this.querySelector('i').style.transform = 'scale(0)';
            
            setTimeout(() => {
                this.querySelector('.btn-text').textContent = 'Show Less';
                this.querySelector('i').classList.remove('fa-chevron-down');
                this.querySelector('i').classList.add('fa-chevron-up');
                this.classList.add('active');
                
                this.querySelector('.btn-text').style.opacity = '1';
                this.querySelector('i').style.transform = 'scale(1)';
            }, 200);
            
            // Scroll to new content smoothly with delay
            setTimeout(() => {
                const offset = 100; // Offset from top
                const elementPosition = moreTestimonials.getBoundingClientRect().top + window.pageYOffset;
                const offsetPosition = elementPosition - offset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
                
                isAnimating = false;
            }, 600);
        } else {
            // Hide testimonials with animation
            moreTestimonials.classList.remove('show');
            
            // Update button
            this.querySelector('.btn-text').style.opacity = '0';
            this.querySelector('i').style.transform = 'scale(0)';
            
            setTimeout(() => {
                this.querySelector('.btn-text').textContent = 'See More Reviews';
                this.querySelector('i').classList.remove('fa-chevron-up');
                this.querySelector('i').classList.add('fa-chevron-down');
                this.classList.remove('active');
                
                this.querySelector('.btn-text').style.opacity = '1';
                this.querySelector('i').style.transform = 'scale(1)';
            }, 200);
            
            // Scroll back to first reviews section with smooth offset
            setTimeout(() => {
                const firstReviewSection = document.querySelector('.testimonial__six .row.justify-content-center.align-items-stretch:first-of-type');
                if (firstReviewSection) {
                    const offset = 150; // Offset to show section title
                    const elementPosition = firstReviewSection.getBoundingClientRect().top + window.pageYOffset;
                    const offsetPosition = elementPosition - offset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
                
                isAnimating = false;
            }, 300);
        }
    });
    
    // Add hover effect
    seeMoreBtn.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-5px) scale(1.05)';
    });
    
    seeMoreBtn.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
    });
});
</script>
@endsection

@section('styles')
<style>
/* ========== Testimonial Section Styles ========== */
.testimonial__six {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

/* Animated Background Shapes */
.testimonial__six-bg-shapes {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    overflow: hidden;
    z-index: 1;
}

.shape-circle {
    position: absolute;
    border-radius: 50%;
    opacity: 0.08;
    animation: float 20s infinite ease-in-out;
}

.circle-1 {
    width: 400px;
    height: 400px;
    top: -100px;
    right: -100px;
    background: #0E59F2;
    animation-delay: 0s;
}

.circle-2 {
    width: 300px;
    height: 300px;
    bottom: -80px;
    left: -80px;
    background: #0E59F2;
    animation-delay: 5s;
}

.circle-3 {
    width: 250px;
    height: 250px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #0E59F2;
    animation-delay: 10s;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0) scale(1) rotate(0deg);
    }
    50% {
        transform: translateY(-30px) scale(1.1) rotate(180deg);
    }
}

.testimonial__six .container {
    position: relative;
    z-index: 2;
}

/* Section Header */
.testimonial__six .subtitle-one {
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 0.6rem 1.8rem;
    border-radius: 50px;
    display: inline-block;
    font-size: 0.85rem;
    margin-bottom: 1.5rem;
}

.testimonial__six .subtitle-one i {
    font-size: 0.7rem;
    animation: sparkle 1.5s infinite;
}

@keyframes sparkle {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.4; }
}

/* Gradient Text Effect */
.gradient-text {
    color: #0E59F2;
    font-size: 3rem;
    font-weight: 800;
    margin: 1rem 0;
    line-height: 1.2;
}

/* Section Description */
.section-desc {
    font-size: 1.15rem;
    color: #6c757d;
    margin-bottom: 0;
    font-weight: 400;
}

/* Base Testimonial Cards */
.testimonial__six-card {
    border-radius: 20px;
    padding: 2.5rem;
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    margin-bottom: 2rem;
    position: relative;
    overflow: hidden;
    background: #ffffff;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

.testimonial__six-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: #0E59F2;
    transform: scaleX(0);
    transition: transform 0.4s ease;
}

.testimonial__six-card:hover::before {
    transform: scaleX(1);
}

.testimonial__six-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
}

/* Featured Card Enhancement */
.featured-card {
    transform: scale(1.05);
    border: 2px solid #0E59F2;
}

.featured-card:hover {
    transform: translateY(-10px) scale(1.05);
}

/* Featured Badge */
.featured-badge {
    position: absolute;
    top: 4px;
    right: 20px;
    background: rgba(255, 215, 0, 0.95);
    color: #1a1a1a;
    padding: 0.5rem 1rem;
    border-radius: 25px;
    font-size: 0.75rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 0.4rem;
    box-shadow: 0 4px 15px rgba(255, 215, 0, 0.4);
    z-index: 2;
}

.featured-badge i {
    font-size: 0.7rem;
}

/* Card Header Section */
.card-header-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
}

/* Quote Icon Wrapper */
.quote-icon-wrapper {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    background: #0E59F2;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 5px 20px rgba(14, 89, 242, 0.3);
}

.quote-icon-wrapper i {
    color: #ffffff;
    font-size: 1.4rem;
}

/* Star Ratings */
.testimonial-rating {
    display: flex;
    gap: 0.3rem;
}

.testimonial-rating i {
    color: #ffd700;
    font-size: 1.1rem;
    filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
    transition: transform 0.2s ease;
}

.testimonial__six-card:hover .testimonial-rating i {
    animation: starPulse 0.5s ease;
}

@keyframes starPulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.2); }
}

/* Testimonial Text */
.testimonial-text {
    color: #4a5568;
    font-size: 1.05rem;
    line-height: 1.8;
    margin-bottom: 2rem;
    font-style: italic;
    position: relative;
    padding-left: 1.2rem;
    border-left: 4px solid #0E59F2;
    flex-grow: 1;
}

/* Client Profile Section */
.client-profile {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding-top: 1.5rem;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    margin-top: auto;
}

/* Client Avatar */
.client-avatar {
    width: 60px;
    height: 60px;
    min-width: 60px;
    border-radius: 50%;
    background: #0E59F2;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 5px 15px rgba(14, 89, 242, 0.3);
    position: relative;
}

.avatar-letter {
    color: #ffffff !important;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    width: 100%;
}

/* Client Info */
.client-info {
    flex-grow: 1;
}

.client-info h4 {
    color: #1a202c;
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 0.4rem;
}

.client-info span {
    color: #0E59F2;
    font-size: 0.9rem;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 0.4rem;
}

.client-info span i {
    font-size: 0.8rem;
}

/* Testimonial Stats Section */
.testimonial-stats {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 3rem;
    padding: 3rem;
    background: #ffffff;
    border-radius: 25px;
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
    margin-top: 2rem;
}

.stat-item {
    text-align: center;
}

.stat-item h3 {
    font-size: 2.8rem;
    font-weight: 800;
    color: #0E59F2;
    margin-bottom: 0.5rem;
}

.stat-item p {
    color: #6c757d;
    font-size: 0.95rem;
    font-weight: 600;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

.stat-divider {
    width: 2px;
    height: 70px;
    background: linear-gradient(180deg, transparent 0%, #0E59F2 50%, transparent 100%);
}

/* Responsive Design */
@media (max-width: 992px) {
    .gradient-text {
        font-size: 2.5rem;
    }
    
    .featured-card {
        transform: scale(1);
    }
    
    .featured-card:hover {
        transform: translateY(-10px) scale(1);
    }
    
    .testimonial-stats {
        gap: 2rem;
        padding: 2.5rem;
    }
    
    .stat-item h3 {
        font-size: 2.2rem;
    }
    
    .testimonial-text {
        font-size: 1rem;
    }

    .row.justify-content-center.align-items-stretch {
        gap: 20px !important;
    }

    .more-testimonials {
        margin-top: 20px !important;
    }
}

@media (max-width: 768px) {
    .gradient-text {
        font-size: 2rem;
    }
    
    .testimonial__six-card {
        padding: 2rem;
    }
    
    .featured-card {
        border-width: 2px;
    }
    
    .client-avatar {
        width: 55px;
        height: 55px;
        min-width: 55px;
    }
    
    .avatar-letter {
        font-size: 1.4rem;
    }
    
    .client-info h4 {
        font-size: 1.1rem;
    }
    
    .testimonial-stats {
        flex-direction: column;
        gap: 2rem;
        padding: 2rem;
    }
    
    .stat-divider {
        width: 80px;
        height: 2px;
        background: linear-gradient(90deg, transparent 0%, #0E59F2 50%, transparent 100%);
    }
    
    .circle-1, .circle-2 {
        width: 250px;
        height: 250px;
    }

    .row.justify-content-center.align-items-stretch {
        gap: 15px !important;
    }

    .more-testimonials {
        margin-top: 15px !important;
    }

    .btn-see-more {
        padding: 14px 35px;
        font-size: 15px;
    }
    
    .circle-3 {
        width: 180px;
        height: 180px;
    }
}

@media (max-width: 576px) {
    .gradient-text {
        font-size: 1.7rem;
    }
    
    .testimonial__six .subtitle-one {
        font-size: 0.75rem;
        padding: 0.5rem 1.2rem;
    }
    
    .testimonial__six-card {
        padding: 1.8rem;
        margin-bottom: 15px !important;
    }
    
    .section-desc {
        font-size: 1rem;
    }
    
    .testimonial-text {
        font-size: 0.95rem;
        padding-left: 1rem;
        border-left-width: 3px;
    }
    
    .client-avatar {
        width: 50px;
        height: 50px;
        min-width: 50px;
    }
    
    .avatar-letter {
        font-size: 1.3rem;
    }
    
    .client-info h4 {
        font-size: 1.05rem;
    }
    
    .client-info span {
        font-size: 0.85rem;
    }

    .row.justify-content-center.align-items-stretch {
        gap: 0px !important;
        margin-left: -10px;
        margin-right: -10px;
    }
    
    .row.justify-content-center.align-items-stretch > [class*="col-"] {
        padding-left: 10px;
        padding-right: 10px;
        margin-bottom: 15px;
    }

    .more-testimonials {
        margin-top: 10px !important;
    }

    .btn-see-more {
        padding: 12px 30px;
        font-size: 14px;
        margin-top: 30px;
        width: 100%;
        justify-content: center;
    }
    
    .testimonial-stats {
        padding: 1.5rem;
    }
    
    .stat-item h3 {
        font-size: 2rem;
    }
    
    .stat-item p {
        font-size: 0.85rem;
    }
    
    .featured-badge {
        font-size: 0.7rem;
        padding: 0.4rem 0.8rem;
        top: 15px;
        right: 15px;
    }
    
    .quote-icon-wrapper {
        width: 45px;
        height: 45px;
    }
    
    .quote-icon-wrapper i {
        font-size: 1.2rem;
    }
    
    .testimonial-rating i {
        font-size: 0.95rem;
    }
    
    .card-header-section {
        margin-bottom: 1.2rem;
    }
}

/* ========== See More Button Styles ========== */
.btn-see-more {
    background: linear-gradient(135deg, #0E59F2 0%, #2d7cff 100%);
    color: #ffffff;
    border: none;
    padding: 16px 40px;
    border-radius: 50px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
    display: inline-flex;
    align-items: center;
    gap: 12px;
    box-shadow: 0 8px 25px rgba(14, 89, 242, 0.3);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    position: relative;
    overflow: hidden;
}

.btn-see-more::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transform: translate(-50%, -50%);
    transition: width 0.6s ease, height 0.6s ease;
}

.btn-see-more:hover::before {
    width: 300px;
    height: 300px;
}

.btn-see-more:hover {
    transform: translateY(-5px) scale(1.05);
    box-shadow: 0 15px 45px rgba(14, 89, 242, 0.5);
    background: linear-gradient(135deg, #2d7cff 0%, #0E59F2 100%);
}

.btn-see-more:active {
    transform: translateY(-2px) scale(1.02);
    transition: all 0.1s ease;
}

.btn-see-more i {
    transition: transform 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    position: relative;
    z-index: 1;
}

.btn-see-more.active i {
    transform: rotate(180deg) scale(1.1);
}

.btn-see-more .btn-text {
    position: relative;
    z-index: 1;
}

/* ========== More Testimonials Animation ========== */
.more-testimonials {
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    transition: max-height 0.8s cubic-bezier(0.4, 0, 0.2, 1),
                opacity 0.6s cubic-bezier(0.4, 0, 0.2, 1) 0.1s,
                transform 0.7s cubic-bezier(0.34, 1.56, 0.64, 1);
    transform: translateY(-50px) scale(0.95);
    transform-origin: top center;
}

.more-testimonials.show {
    max-height: 2500px;
    opacity: 1;
    transform: translateY(0) scale(1);
}

/* Card entrance animation when shown */
.more-testimonials.show .testimonial__six-card {
    animation: slideInUpBounce 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    opacity: 0;
}

.more-testimonials.show .col-xl-4:nth-child(1) .testimonial__six-card {
    animation-delay: 0.15s;
}

.more-testimonials.show .col-xl-4:nth-child(2) .testimonial__six-card {
    animation-delay: 0.3s;
}

.more-testimonials.show .col-xl-4:nth-child(3) .testimonial__six-card {
    animation-delay: 0.45s;
}

@keyframes slideInUpBounce {
    0% {
        opacity: 0;
        transform: translateY(60px) scale(0.9) rotateX(10deg);
    }
    60% {
        opacity: 1;
        transform: translateY(-8px) scale(1.02) rotateX(-2deg);
    }
    80% {
        transform: translateY(4px) scale(0.99) rotateX(1deg);
    }
    100% {
        opacity: 1;
        transform: translateY(0) scale(1) rotateX(0deg);
    }
}

/* Smooth collapse animation */
.more-testimonials:not(.show) {
    transition: max-height 0.6s cubic-bezier(0.4, 0, 0.2, 1),
                opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1),
                transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Add smooth scroll behavior */
html {
    scroll-behavior: smooth;
}

/* Extra smooth transitions for cards */
.testimonial__six-card {
    transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
}
</style>
@endsection
