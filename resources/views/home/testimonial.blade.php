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