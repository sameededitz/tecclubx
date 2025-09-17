@extends('layout.home-layout')
@section('title')
    About Us | TecClub - Technology
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
                        <h2>About Us</h2>
                        <span><a href="{{ route('home') }}">Home</a>
                            <span>|</span>
                            About Us
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- About Area Start -->
    <div class="about__one section-padding">
        <div class="container">
            <div class="row align-items-center flex-wrap-reverse gy-4">
                <div class="col-xl-6 col-lg-5" data-aos="fade-right">
                    <div class="about__one-image">
                        <div class="experience-bar animate-y-axis-slider">
                            <i class="flaticon-consultant"></i>
                            <div class="experience-bar-right">
                                <div class="experience-bar-counter">
                                    <h4 class="counter">5</h4>
                                    <span>+</span>
                                </div>
                                <span>Years Experience</span>
                            </div>
                        </div>
                        <div class="about__one-image-wrapper">
                            @if ($aboutImages->isNotEmpty())
                                @foreach ($aboutImages as $image)
                                    <img src="{{ $image->getFirstMediaUrl('section_img') ?? asset('assets/img/about/about-1.png') }}"
                                        alt="" class="image-{{ $loop->iteration }}">
                                @endforeach
                            @else
                                <img src="assets/img/about/about-1.png" alt="" class="image-1">
                                <img src="assets/img/about/about-2.png" alt="" class="image-2">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-9" data-aos="fade-left">
                    <div class="about__one-content">
                        <span class="subtitle-one">About us</span>
                        <h2>What We’re All About</h2>
                        <p>At TecClub, we are passionate about transforming ideas into powerful digital solutions. With
                            over five years of experience in the industry, our team specializes in delivering top-notch
                            services in app development, web development, UX/UI design, and digital marketing, Graphics
                            Designing , Search Engine Optimization (SEO).</p>
                        <div class="about__one-content-service">
                            <div class="service">
                                <i class="far fa-check-circle"></i>
                                <span> Mobile App Development</span>
                            </div>
                            <div class="service">
                                <i class="far fa-check-circle"></i>
                                <span>Web Developments</span>
                            </div>

                            <div class="service">
                                <i class="far fa-check-circle"></i>
                                <span>UI & UX Design</span>
                            </div>
                            <div class="service">
                                <i class="far fa-check-circle"></i>
                                <span>Digital Marketing</span>
                            </div>
                        </div>
                        <a href="services.blade.php" class="btn-one">Discover More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->

    <!-- Brand Area Start -->
    <div class="brand__area section-padding pt-0">
        <div class="container">
            <div class="row brand__area-border">
                <div class="col-xl-12">
                    <div class="swiper brand__slider">
                        <div class="swiper-wrapper">
                            @if ($sliderimg->isNotEmpty())
                                @foreach ($sliderimg as $image)
                                    <div class="brand__area-item swiper-slide">
                                        <img src="{{ $image->getFirstMediaUrl('section_img') ?? asset('assets/img/brand/brand-1.png') }}"
                                            alt="slider image">
                                    </div>
                                @endforeach
                            @else
                                <div class="brand__area-item swiper-slide">
                                    <img src="{{ asset('assets/img/brand/brand-1.png') }}" alt="slider image">
                                </div>
                                <div class="brand__area-item swiper-slide">
                                    <img src="{{ asset('assets/img/brand/brand-2.png') }}" alt="slider image">
                                </div>
                                <div class="brand__area-item swiper-slide">
                                    <img src="{{ asset('assets/img/brand/brand-3.png') }}" alt="slider image">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End -->

    <!-- Company Stats Section Start -->
    <section class="company-stats-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5" data-aos="fade-up">
                    <div class="section-badge">
                        <i class="fas fa-chart-bar"></i>
                        <span>Our Achievements</span>
                    </div>
                    <h2 class="section-title">Numbers That Speak for Themselves</h2>
                    <p class="section-subtitle">Our track record demonstrates our commitment to delivering exceptional results</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stats-card">
                        <div class="stats-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stats-content">
                            <h3 class="stats-number" data-count="53">53</h3>
                            <span class="stats-label">Happy Clients</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stats-card">
                        <div class="stats-icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <div class="stats-content">
                            <h3 class="stats-number" data-count="70">70</h3>
                            <span class="stats-label">Projects Completed</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stats-card">
                        <div class="stats-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="stats-content">
                            <h3 class="stats-number" data-count="15">15</h3>
                            <span class="stats-label">Countries Served</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stats-card">
                        <div class="stats-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stats-content">
                            <h3 class="stats-number" data-count="24">24</h3>
                            <span class="stats-label">Hours Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Company Stats Section End -->

    <!-- Our Mission & Vision Section Start -->
    <section class="mission-vision-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5" data-aos="fade-up">
                    <div class="section-badge">
                        <i class="fas fa-bullseye"></i>
                        <span>Our Purpose</span>
                    </div>
                    <h2 class="section-title">Mission & Vision</h2>
                    <p class="section-subtitle">Guiding principles that drive our commitment to excellence</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="mission-card">
                        <div class="mission-header">
                            <div class="mission-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h3>Our Mission</h3>
                        </div>
                        <div class="mission-content">
                            <p>To empower businesses and individuals by providing innovative, reliable, and scalable digital solutions that transform ideas into successful realities. We are committed to delivering exceptional value through cutting-edge technology and personalized service.</p>
                            <ul class="mission-points">
                                <li><i class="fas fa-check"></i> Deliver innovative digital solutions</li>
                                <li><i class="fas fa-check"></i> Exceed client expectations</li>
                                <li><i class="fas fa-check"></i> Foster long-term partnerships</li>
                                <li><i class="fas fa-check"></i> Drive technological advancement</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="vision-card">
                        <div class="vision-header">
                            <div class="vision-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3>Our Vision</h3>
                        </div>
                        <div class="vision-content">
                            <p>Our vision is to become the global leader in digital transformation — renowned for innovation, excellence, and a steadfast commitment to delivering solutions that create meaningful impact for businesses and communities worldwide.</p>
                            <ul class="vision-points">
                                <li><i class="fas fa-star"></i> Global technology leadership</li>
                                <li><i class="fas fa-star"></i> Innovation-driven culture</li>
                                <li><i class="fas fa-star"></i> Sustainable digital growth</li>
                                <li><i class="fas fa-star"></i> Community empowerment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Our Mission & Vision Section End -->

    <!-- Team Section Start -->
    <section class="modern-team-section section-padding">
        <div class="team-background">
            <div class="floating-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
                <div class="shape shape-4"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5" data-aos="fade-up">
                    <div class="team-badge">
                        <div class="badge-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <span>Meet Our Expert Team</span>
                        <div class="badge-shine"></div>
                    </div>
                    <h2 class="team-main-title">The Minds Behind <span class="highlight-text">TecClub's Success</span></h2>
                    <p class="team-subtitle">Passionate innovators and technical experts dedicated to transforming your digital vision into reality</p>
                </div>
            </div>

            <!-- Leadership Row -->
            <div class="leadership-section">
                <div class="row justify-content-center g-4 mb-5">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member-card leadership-card">
                            <div class="card-glow"></div>
                            <div class="member-header">
                                <div class="member-avatar leadership-avatar">
                                    <div class="avatar-ring"></div>
                                    <div class="avatar-image">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="status-indicator online"></div>
                                </div>
                                <div class="member-role-badge ceo-badge">
                                    <i class="fas fa-crown"></i>
                                    <span>CEO</span>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3 class="member-name">Hassan Nisar</h3>
                                <p class="member-title">Chief Executive Officer & Co-Founder</p>
                                <p class="member-description">Visionary leader driving TecClub's innovation strategy with 5+ years of technical expertise in digital transformation and business growth.</p>
                                <div class="member-specialties">
                                    <span class="specialty">Strategic Leadership</span>
                                    <span class="specialty">Innovation</span>
                                    <span class="specialty">Business Growth</span>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member-card leadership-card">
                            <div class="card-glow"></div>
                            <div class="member-header">
                                <div class="member-avatar leadership-avatar">
                                    <div class="avatar-ring"></div>
                                    <div class="avatar-image">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="status-indicator online"></div>
                                </div>
                                <div class="member-role-badge cto-badge">
                                    <i class="fas fa-cogs"></i>
                                    <span>CTO</span>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3 class="member-name">M.Sohaib Abbas</h3>
                                <p class="member-title">Chief Technology Officer</p>
                                <p class="member-description">Technology architect leading cutting-edge development initiatives and ensuring scalable, robust digital solutions for our clients.</p>
                                <div class="member-specialties">
                                    <span class="specialty">Tech Architecture</span>
                                    <span class="specialty">Innovation</span>
                                    <span class="specialty">System Design</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member-card leadership-card">
                            <div class="card-glow"></div>
                            <div class="member-header">
                                <div class="member-avatar leadership-avatar">
                                    <div class="avatar-ring"></div>
                                    <div class="avatar-image">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="status-indicator online"></div>
                                </div>
                                <div class="member-role-badge director-badge">
                                    <i class="fas fa-chart-line"></i>
                                    <span>Director</span>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3 class="member-name">Farhan Ali</h3>
                                <p class="member-title">Director of Operations</p>
                                <p class="member-description">Strategic Operations Leader & UI/UX Designer focused on creating exceptional client experiences and driving sustainable business growth.</p>
                                <div class="member-specialties">
                                    <span class="specialty">Operations</span>
                                    <span class="specialty">Strategy</span>
                                    <span class="specialty">Client Success</span>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Development Team -->
            <div class="development-section">
                <div class="section-divider">
                    <div class="divider-line"></div>
                    <div class="divider-text">Development Experts</div>
                    <div class="divider-line"></div>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member-card developer-card">
                            <div class="card-glow"></div>
                            <div class="member-header">
                                <div class="member-avatar developer-avatar">
                                    <div class="avatar-ring"></div>
                                    <div class="avatar-image">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="status-indicator online"></div>
                                </div>
                                <div class="member-role-badge mobile-badge">
                                    <i class="fas fa-mobile-alt"></i>
                                    <span>Mobile</span>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3 class="member-name">Uzair Ahmad</h3>
                                <p class="member-title">App Development Lead</p>
                                <p class="member-description">Mobile app specialist creating innovative iOS and Android applications with focus on user experience and performance optimization.</p>
                                <div class="member-specialties">
                                    <span class="specialty">React Native</span>
                                    <span class="specialty">Flutter</span>
                                    <span class="specialty">iOS/Android</span>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member-card developer-card">
                            <div class="card-glow"></div>
                            <div class="member-header">
                                <div class="member-avatar developer-avatar">
                                    <div class="avatar-ring"></div>
                                    <div class="avatar-image">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="status-indicator online"></div>
                                </div>
                                <div class="member-role-badge web-badge">
                                    <i class="fas fa-code"></i>
                                    <span>Web</span>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3 class="member-name">M.Sameed</h3>
                                <p class="member-title">Web Development Lead</p>
                                <p class="member-description">Full-stack web developer crafting responsive, scalable web solutions using modern frameworks and cutting-edge technologies.</p>
                                <div class="member-specialties">
                                    <span class="specialty">Laravel</span>
                                    <span class="specialty">React</span>
                                    <span class="specialty">Node.js</span>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member-card developer-card">
                            <div class="card-glow"></div>
                            <div class="member-header">
                                <div class="member-avatar developer-avatar">
                                    <div class="avatar-ring"></div>
                                    <div class="avatar-image">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="status-indicator online"></div>
                                </div>
                                <div class="member-role-badge ecommerce-badge">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span>E-commerce</span>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3 class="member-name">M.Haroon</h3>
                                <p class="member-title">E-commerce Development Lead</p>
                                <p class="member-description">E-commerce specialist building high-converting online stores with seamless user experiences and advanced functionality.</p>
                                <div class="member-specialties">
                                    <span class="specialty">Shopify</span>
                                    <span class="specialty">WooCommerce</span>
                                    <span class="specialty">Magento</span>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

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

@section('styles')
<style>
/* Modern About Section Enhancements */
.modern-about-visual {
    position: relative;
}

.modern-experience {
    background: linear-gradient(135deg, #2d7cff 0%, #0e59f2 100%);
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(45, 124, 255, 0.3);
    border: none;
}

.experience-icon {
    background: rgba(255, 255, 255, 0.2);
    width: 60px;
    height: 60px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
}

.modern-image-grid {
    position: relative;
}

.modern-image {
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.modern-image:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
}

.floating-stats {
    position: absolute;
    bottom: -30px;
    right: -30px;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.stat-card {
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    gap: 15px;
    min-width: 180px;
    animation: float 3s ease-in-out infinite;
}

.stat-card:nth-child(2) {
    animation-delay: 1.5s;
}

.stat-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(45deg, #2d7cff, #0e59f2);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
}

.stat-number {
    font-size: 1.5rem;
    font-weight: 800;
    color: #1e293b;
    line-height: 1;
}

.stat-label {
    color: #64748b;
    font-size: 0.8rem;
    font-weight: 600;
}

/* Modern About Content */
.modern-about-content {
    padding-left: 30px;
}

.section-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(45, 124, 255, 0.1);
    color: #2d7cff;
    padding: 8px 20px;
    border-radius: 25px;
    font-weight: 600;
    margin-bottom: 20px;
}

.modern-title {
    font-size: 2.5rem;
    font-weight: 800;
    color: #1e293b;
    line-height: 1.2;
    margin-bottom: 25px;
}

.modern-description {
    font-size: 1.1rem;
    color: #64748b;
    line-height: 1.7;
    margin-bottom: 35px;
}

.expertise-highlights {
    margin-bottom: 35px;
}

.highlight-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 25px;
}

.highlight-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(45deg, #facc15, #f59e0b);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
    flex-shrink: 0;
}

.highlight-content h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 5px;
}

.highlight-content p {
    color: #64748b;
    font-size: 0.95rem;
    line-height: 1.5;
    margin: 0;
}

.modern-services {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
    margin-bottom: 40px;
}

.modern-service-item {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 15px;
    padding: 20px 15px;
    display: flex;
    align-items: center;
    gap: 15px;
    transition: all 0.3s ease;
}

.modern-service-item:hover {
    background: #2d7cff;
    border-color: #2d7cff;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(45, 124, 255, 0.2);
}

.service-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(45deg, #2d7cff, #0e59f2);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 16px;
    transition: all 0.3s ease;
}

.modern-service-item:hover .service-icon {
    background: rgba(255, 255, 255, 0.2);
}

.modern-cta-buttons {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.btn-modern-primary {
    background: linear-gradient(135deg, #2d7cff 0%, #0e59f2 100%);
    color: white;
    padding: 16px 32px;
    border-radius: 15px;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s ease;
    box-shadow: 0 5px 20px rgba(45, 124, 255, 0.3);
}

.btn-modern-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(45, 124, 255, 0.4);
    color: white;
    text-decoration: none;
}

.btn-modern-secondary {
    background: white;
    border: 2px solid #e2e8f0;
    color: #1e293b;
    padding: 14px 30px;
    border-radius: 15px;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s ease;
}

.btn-modern-secondary:hover {
    border-color: #2d7cff;
    color: #2d7cff;
    transform: translateY(-2px);
    text-decoration: none;
}

/* Company Stats Section */
.company-stats-section {
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
}

.section-title {
    font-size: 2.5rem;
    font-weight: 800;
    color: #1e293b;
    margin-bottom: 15px;
}

.section-subtitle {
    font-size: 1.1rem;
    color: #64748b;
    max-width: 600px;
    margin: 0 auto;
}

.stats-card {
    background: white;
    border-radius: 20px;
    padding: 40px 30px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    border: 1px solid rgba(45, 124, 255, 0.1);
    position: relative;
    overflow: hidden;
}

.stats-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: #0e59f2;
}

.stats-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(45, 124, 255, 0.15);
}

.stats-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(45deg, #2d7cff, #0e59f2);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 32px;
    margin: 0 auto 25px;
}

.stats-number {
    font-size: 3rem;
    font-weight: 800;
    color: #1e293b;
    margin-bottom: 10px;
}

.stats-label {
    color: #64748b;
    font-weight: 600;
    font-size: 1rem;
}

/* Mission & Vision Section */
.mission-vision-section {
    background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
    color: white;
    position: relative;
    overflow: hidden;
}

.mission-vision-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at 20% 80%, rgba(45, 124, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(245, 204, 21, 0.1) 0%, transparent 50%);
}

.mission-vision-section .section-title,
.mission-vision-section .section-subtitle {
    color: white;
}

.mission-vision-section .section-badge {
    background: rgba(245, 204, 21, 0.1);
    color: #facc15;
}

.mission-card,
.vision-card {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 25px;
    padding: 40px 30px;
    height: 100%;
    transition: all 0.3s ease;
    position: relative;
    z-index: 2;
}

.mission-card:hover,
.vision-card:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-5px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
}

.mission-header,
.vision-header {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 25px;
}

.mission-icon,
.vision-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(45deg, #2d7cff, #0e59f2);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 28px;
}

.vision-icon {
    background: linear-gradient(45deg, #facc15, #f59e0b);
}

.mission-header h3,
.vision-header h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: white;
    margin: 0;
}

.mission-content p,
.vision-content p {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.7;
    margin-bottom: 25px;
    font-size: 1.05rem;
}

.mission-points,
.vision-points {
    list-style: none;
    padding: 0;
    margin: 0;
}

.mission-points li,
.vision-points li {
    display: flex;
    align-items: center;
    gap: 12px;
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 12px;
    font-size: 0.95rem;
}

.mission-points i {
    color: #10b981;
    font-size: 14px;
}

.vision-points i {
    color: #facc15;
    font-size: 14px;
}

/* Animations */
@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
}

/* Responsive Design */
@media (max-width: 1200px) {
    .floating-stats {
        position: static;
        flex-direction: row;
        justify-content: center;
        margin-top: 30px;
    }
    
    .modern-about-content {
        padding-left: 0;
        margin-top: 30px;
    }
}

@media (max-width: 992px) {
    .modern-title {
        font-size: 2rem;
    }
    
    .modern-services {
        grid-template-columns: 1fr;
    }
    
    .modern-cta-buttons {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .stats-number {
        font-size: 2.5rem;
    }
}

@media (max-width: 768px) {
    .floating-stats {
        flex-direction: column;
        align-items: center;
    }
    
    .stat-card {
        min-width: auto;
        width: 100%;
        max-width: 250px;
    }
    
    .modern-title {
        font-size: 1.8rem;
    }
    
    .section-title {
        font-size: 1.8rem;
    }
    
    .expertise-highlights .highlight-item {
        flex-direction: column;
        text-align: center;
    }
    
    .mission-header,
    .vision-header {
        flex-direction: column;
        text-align: center;
    }
}

/* Team Section Styles */
.modern-team-section {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    position: relative;
    overflow: hidden;
}

.team-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
}

.floating-shapes {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.shape {
    position: absolute;
    border-radius: 50%;
    opacity: 0.1;
    animation: float 20s infinite ease-in-out;
}

.shape-1 {
    width: 200px;
    height: 200px;
    background: linear-gradient(135deg, #2d7cff, #facc15);
    top: 10%;
    left: 10%;
    animation-delay: 0s;
}

.shape-2 {
    width: 150px;
    height: 150px;
    background: linear-gradient(135deg, #facc15, #f59e0b);
    top: 60%;
    right: 15%;
    animation-delay: 5s;
}

.shape-3 {
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, #8b5cf6, #2d7cff);
    top: 30%;
    right: 30%;
    animation-delay: 10s;
}

.shape-4 {
    width: 120px;
    height: 120px;
    background: linear-gradient(135deg, #10b981, #059669);
    bottom: 20%;
    left: 20%;
    animation-delay: 15s;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    33% { transform: translateY(-30px) rotate(120deg); }
    66% { transform: translateY(-20px) rotate(240deg); }
}

.modern-team-section .container {
    position: relative;
    z-index: 2;
}

.team-badge {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: linear-gradient(135deg, #2d7cff, #1e40af);
    color: white;
    padding: 12px 24px;
    border-radius: 50px;
    font-weight: 600;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(45, 124, 255, 0.3);
}

.badge-icon {
    width: 30px;
    height: 30px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
}

.badge-shine {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.8s;
}

.team-badge:hover .badge-shine {
    left: 100%;
}

.team-main-title {
    font-size: 3.5rem;
    font-weight: 800;
    color: #1e293b;
    margin-bottom: 25px;
    line-height: 1.2;
}

.highlight-text {
    background: linear-gradient(135deg, #2d7cff, #8b5cf6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.team-subtitle {
    font-size: 1.2rem;
    color: #64748b;
    margin-bottom: 60px;
    line-height: 1.6;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.section-divider {
    display: flex;
    align-items: center;
    margin: 60px 0 40px;
    gap: 20px;
}

.divider-line {
    height: 2px;
    background: linear-gradient(135deg, #2d7cff, #8b5cf6);
    flex: 1;
    border-radius: 1px;
}

.divider-text {
    font-size: 1.1rem;
    font-weight: 600;
    color: #475569;
    padding: 0 20px;
    background: white;
    border-radius: 20px;
    border: 2px solid #e2e8f0;
    white-space: nowrap;
}

.team-member-card {
    background: white;
    border-radius: 25px;
    padding: 30px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
    border: 1px solid #f1f5f9;
    height: 100%;
}

.card-glow {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(45, 124, 255, 0.1), rgba(139, 92, 246, 0.1));
    opacity: 0;
    transition: opacity 0.4s ease;
    border-radius: 25px;
}

.team-member-card:hover {
    transform: translateY(-15px);
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.15);
}

.team-member-card:hover .card-glow {
    opacity: 1;
}

.leadership-card {
    border: 2px solid transparent;
    background: linear-gradient(white, white) padding-box,
                linear-gradient(135deg, #facc15, #f59e0b) border-box;
}

.developer-card {
    border: 2px solid transparent;
    background: linear-gradient(white, white) padding-box,
                linear-gradient(135deg, #2d7cff, #8b5cf6) border-box;
}

.member-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 25px;
    position: relative;
    z-index: 2;
}

.member-avatar {
    position: relative;
    width: 80px;
    height: 80px;
}

.avatar-ring {
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    border: 3px solid;
    border-radius: 50%;
    animation: pulse 2s infinite;
}

.leadership-avatar .avatar-ring {
    border-color: #facc15;
}

.developer-avatar .avatar-ring {
    border-color: #2d7cff;
}

@keyframes pulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.1); opacity: 0.7; }
    100% { transform: scale(1); opacity: 1; }
}

.avatar-image {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #f8fafc, #e2e8f0);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    color: #64748b;
    border: 3px solid white;
    position: relative;
    z-index: 2;
}

.status-indicator {
    position: absolute;
    bottom: 5px;
    right: 5px;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    border: 3px solid white;
    z-index: 3;
}

.status-indicator.online {
    background: #10b981;
    animation: blink 2s infinite;
}

@keyframes blink {
    0%, 50% { opacity: 1; }
    51%, 100% { opacity: 0.5; }
}

.member-role-badge {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    color: white;
    position: relative;
    overflow: hidden;
}

.ceo-badge {
    background: linear-gradient(135deg, #facc15, #f59e0b);
}

.cto-badge {
    background: linear-gradient(135deg, #8b5cf6, #7c3aed);
}

.director-badge {
    background: linear-gradient(135deg, #10b981, #059669);
}

.mobile-badge {
    background: linear-gradient(135deg, #2d7cff, #1e40af);
}

.web-badge {
    background: linear-gradient(135deg, #f59e0b, #d97706);
}

.ecommerce-badge {
    background: linear-gradient(135deg, #ef4444, #dc2626);
}

.member-info {
    position: relative;
    z-index: 2;
}

.member-name {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 8px;
}

.member-title {
    font-size: 1rem;
    color: #2d7cff;
    font-weight: 600;
    margin-bottom: 15px;
}

.member-description {
    font-size: 0.95rem;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 20px;
}

.member-specialties {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 25px;
}

.specialty {
    background: linear-gradient(135deg, #f1f5f9, #e2e8f0);
    color: #475569;
    padding: 6px 12px;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
    border: 1px solid #e2e8f0;
}

.member-social {
    display: flex;
    gap: 12px;
}

.social-btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 16px;
}

.social-btn.linkedin {
    background: linear-gradient(135deg, #0077b5, #005885);
}

.social-btn.twitter {
    background: linear-gradient(135deg, #1da1f2, #0d8bd9);
}

.social-btn.github {
    background: linear-gradient(135deg, #333, #24292e);
}

.social-btn.email {
    background: linear-gradient(135deg, #ea4335, #d33b2c);
}

.social-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

/* Team Responsive Styles */
@media (max-width: 768px) {
    .team-main-title {
        font-size: 2.5rem;
    }

    .team-member-card {
        padding: 25px;
        margin-bottom: 30px;
    }

    .member-header {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 15px;
    }

    .section-divider {
        flex-direction: column;
        gap: 15px;
    }

    .divider-line {
        width: 100px;
        height: 2px;
    }
}
</style>

@section('home_scripts')
<script>
// Counter Animation
function animateCounters() {
    const counters = document.querySelectorAll('.stats-number[data-count]');
    
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;
        
        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            counter.textContent = Math.floor(current);
        }, 16);
    });
}

// Intersection Observer for counter animation
const observerOptions = {
    threshold: 0.7,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounters();
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe stats section
document.addEventListener('DOMContentLoaded', function() {
    const statsSection = document.querySelector('.company-stats-section');
    if (statsSection) {
        observer.observe(statsSection);
    }
});
</script>
