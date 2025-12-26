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
                                    <h4 class="counter">7</h4>
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
                        <h2>What We're All About</h2>
                        <p>At TecClub, we are passionate about transforming ideas into powerful digital solutions. With
                            over seven years of experience in the industry, our team specializes in delivering top-notch
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
@endsection
