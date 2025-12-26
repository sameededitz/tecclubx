@extends('layout.home-layout')
@section('title')
    Home | TecClub - Technology
@endsection

@section('home_content')

    <!-- Premium Banner Area Start -->
    <div class="premium-banner-section">
        <div class="banner-background">
            <div class="gradient-overlay"></div>
            <div class="floating-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
                <div class="shape shape-4"></div>
                <div class="shape shape-5"></div>
            </div>
            <div class="banner-particles">
                <div class="particle particle-1"></div>
                <div class="particle particle-2"></div>
                <div class="particle particle-3"></div>
                <div class="particle particle-4"></div>
                <div class="particle particle-5"></div>
                <div class="particle particle-6"></div>
                <div class="particle particle-7"></div>
                <div class="particle particle-8"></div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center gy-4 justify-content-center">
                <div class="col-xl-6 col-lg-6" data-aos="fade-right">
                    <div class="premium-banner-content">
                        <div class="banner-badge">
                            <div class="badge-icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <span class="badge-text">TecClub Technology</span>
                            <div class="badge-glow"></div>
                        </div>
                        <h1 class="banner-title">
                            Transform Your Ideas Into
                            <span class="text-highlight">Digital Reality</span>
                        </h1>
                        <p class="banner-description">
                            We are a leading software development agency, primarily focused on creating secure and high-performance VPN solutions.
                            Alongside VPN development, we also craft cutting-edge web and mobile applications, turning your ideas into scalable, reliable technology that drives business growth.
                        </p>
                        <div class="hero-features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>70+ Projects Delivered</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>7+ Years Experience</span>
                            </div>
                        </div>
                        <div class="banner-actions">
                            <a href="{{ route('services') }}" class="btn-premium-primary">
                                <span>Explore Solutions</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="{{ route('portfolio') }}" class="btn-premium-secondary">
                                <span>View Portfolio</span>
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="banner-stats">
                            <div class="stat-item">
                                <div class="stat-number" data-count="70">70</div>
                                <div class="stat-symbol">+</div>
                                <div class="stat-label">Projects</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number" data-count="98">99</div>
                                <div class="stat-symbol">%</div>
                                <div class="stat-label">Satisfaction</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number" data-count="50">50</div>
                                <div class="stat-symbol">+</div>
                                <div class="stat-label">Clients</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-9" data-aos="fade-left">
                    <div class="premium-banner-image">
                        <div class="image-decorations">
                            <div class="decoration-circle circle-1"></div>
                            <div class="decoration-circle circle-2"></div>
                            <div class="decoration-circle circle-3"></div>
                        </div>
                        <div class="image-glow"></div>
                        <div class="banner-image-wrapper">
                            <div class="floating-elements">
                                <div class="element element-1">
                                    <i class="fab fa-react"></i>
                                </div>
                                <div class="element element-2">
                                    <i class="fab fa-laravel"></i>
                                </div>
                                <div class="element element-3">
                                    <i class="fab fa-node-js"></i>
                                </div>
                                <div class="element element-4">
                                    <i class="fab fa-figma"></i>
                                </div>
                            </div>
                            @if ($bannerimg)
                                <img src="{{ $bannerimg->getFirstMediaUrl('section_img') ?? asset('assets/img/banner/banner-right-img.png') }}"
                                    alt="TecClub Technology Solutions" class="main-banner-image">
                            @else
                                <img src="{{ asset('assets/img/banner/banner-right-img.png') }}"
                                    alt="TecClub Technology Solutions" class="main-banner-image">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Premium Banner Area End -->

    <!-- Premium Brand Area Start -->
    <div class="premium-brand-section">
        <div class="container">
            <div class="premium-brand-wrapper">
                <div class="brand-header">
                    <div class="brand-badge">
                        <i class="fas fa-handshake"></i>
                        <span>Trusted Partners</span>
                    </div>
                    <h3 class="brand-title">Trusted by Industry Leaders</h3>
                    <p class="brand-description">Join 50+ companies that trust us with their digital transformation</p>
                </div>
                <div class="brand-slider-container">
                    <div class="swiper premium-brand-slider">
                        <div class="swiper-wrapper">
                            @if ($sliderimg->isNotEmpty())
                                @foreach ($sliderimg as $image)
                                    <div class="premium-brand-item swiper-slide">
                                        <div class="brand-image-wrapper">
                                            <img src="{{ $image->getFirstMediaUrl('section_img') ?? asset('assets/img/brand/brand-1.png') }}"
                                                alt="Partner Brand">
                                            <div class="brand-overlay">
                                                <div class="brand-hover-content">
                                                    <i class="fas fa-heart"></i>
                                                    <span>Trusted Partner</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="premium-brand-item swiper-slide">
                                    <div class="brand-image-wrapper">
                                        <img src="{{ asset('assets/img/brand/brand-1.png') }}" alt="Partner Brand">
                                        <div class="brand-overlay">
                                            <div class="brand-hover-content">
                                                <i class="fas fa-heart"></i>
                                                <span>Trusted Partner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="premium-brand-item swiper-slide">
                                    <div class="brand-image-wrapper">
                                        <img src="{{ asset('assets/img/brand/brand-2.png') }}" alt="Partner Brand">
                                        <div class="brand-overlay">
                                            <div class="brand-hover-content">
                                                <i class="fas fa-heart"></i>
                                                <span>Trusted Partner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="premium-brand-item swiper-slide">
                                    <div class="brand-image-wrapper">
                                        <img src="{{ asset('assets/img/brand/brand-3.png') }}" alt="Partner Brand">
                                        <div class="brand-overlay">
                                            <div class="brand-hover-content">
                                                <i class="fas fa-heart"></i>
                                                <span>Trusted Partner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="trust-indicators">
                    <div class="trust-item">
                        <div class="trust-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="trust-content">
                            <div class="trust-number">100%</div>
                            <div class="trust-label">Secure</div>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="trust-content">
                            <div class="trust-number">24/7</div>
                            <div class="trust-label">Support</div>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="trust-content">
                            <div class="trust-number">7+</div>
                            <div class="trust-label">Years</div>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="trust-content">
                            <div class="trust-number">50+</div>
                            <div class="trust-label">Clients</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Premium Brand Area End -->

    <!-- Premium Services Area Start -->
    <div class="premium-services-section section-padding">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="premium-section-header">
                        <div class="section-badge">
                            <i class="fas fa-cogs"></i>
                            <span>Our Services</span>
                        </div>
                        <h2 class="section-title">Premium Digital Solutions</h2>
                        <p class="section-description">
                            We deliver cutting-edge technology solutions that transform businesses and drive growth.
                            From innovative mobile apps to robust web platforms, our expert team creates digital
                            experiences that captivate users and achieve your business objectives.
                        </p>
                    </div>
                </div>
            </div>
            <div class="premium-services-grid">
                <div class="premium-service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper">
                            <div class="service-icon mobile-app-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Mobile App Development</h4>
                            <p class="service-description">
                                Transform your ideas into powerful mobile experiences. We craft intuitive iOS and Android
                                applications that engage users and drive business growth with cutting-edge technology.
                            </p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Native & Cross-Platform</li>
                                <li><i class="fas fa-check"></i> UI/UX Optimization</li>
                                <li><i class="fas fa-check"></i> App Store Deployment</li>
                            </ul>
                        </div>
                        <div class="service-footer">
                            <a href="{{ route('services') }}" class="service-link">
                                <span>Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="card-decoration">
                            <div class="decoration-element element-1"></div>
                            <div class="decoration-element element-2"></div>
                        </div>
                    </div>
                </div>

                <div class="premium-service-card featured" data-aos="fade-up" data-aos-delay="200">
                    <div class="featured-badge">
                        <i class="fas fa-star"></i>
                        <span>Most Popular</span>
                    </div>
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper">
                            <div class="service-icon web-dev-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Web Development</h4>
                            <p class="service-description">
                                Build robust, scalable web solutions that captivate users and drive conversions. From
                                e-commerce platforms to custom applications, we deliver excellence in every line of code.
                            </p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Responsive Design</li>
                                <li><i class="fas fa-check"></i> Modern Frameworks</li>
                                <li><i class="fas fa-check"></i> Performance Optimized</li>
                            </ul>
                        </div>
                        <div class="service-footer">
                            <a href="{{ route('services') }}" class="service-link">
                                <span>Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="card-decoration">
                            <div class="decoration-element element-1"></div>
                            <div class="decoration-element element-2"></div>
                        </div>
                    </div>
                </div>

                <div class="premium-service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper">
                            <div class="service-icon design-icon">
                                <i class="fas fa-palette"></i>
                            </div>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">UI & UX Design</h4>
                            <p class="service-description">
                                Create stunning interfaces that users love. Our design team crafts beautiful, intuitive
                                experiences that enhance user engagement and drive meaningful interactions.
                            </p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> User Research</li>
                                <li><i class="fas fa-check"></i> Prototype Design</li>
                                <li><i class="fas fa-check"></i> Visual Identity</li>
                            </ul>
                        </div>
                        <div class="service-footer">
                            <a href="{{ route('services') }}" class="service-link">
                                <span>Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="card-decoration">
                            <div class="decoration-element element-1"></div>
                            <div class="decoration-element element-2"></div>
                        </div>
                    </div>
                </div>

                <div class="premium-service-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper">
                            <div class="service-icon marketing-icon">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Digital Marketing</h4>
                            <p class="service-description">
                                Amplify your brand's digital presence with strategic marketing solutions. We drive
                                targeted traffic, boost engagement, and deliver measurable results across all channels.
                            </p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> SEO Optimization</li>
                                <li><i class="fas fa-check"></i> Social Media</li>
                                <li><i class="fas fa-check"></i> PPC Campaigns</li>
                            </ul>
                        </div>
                        <div class="service-footer">
                            <a href="{{ route('services') }}" class="service-link">
                                <span>Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="card-decoration">
                            <div class="decoration-element element-1"></div>
                            <div class="decoration-element element-2"></div>
                        </div>
                    </div>
                </div>

                <div class="premium-service-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper">
                            <div class="service-icon ecommerce-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">E-Commerce Solutions</h4>
                            <p class="service-description">
                                Build powerful online stores that convert visitors into customers. Our e-commerce
                                solutions integrate seamlessly with your business operations and scale with your growth.
                            </p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Custom Platforms</li>
                                <li><i class="fas fa-check"></i> Payment Integration</li>
                                <li><i class="fas fa-check"></i> Inventory Management</li>
                            </ul>
                        </div>
                        <div class="service-footer">
                            <a href="{{ route('services') }}" class="service-link">
                                <span>Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="card-decoration">
                            <div class="decoration-element element-1"></div>
                            <div class="decoration-element element-2"></div>
                        </div>
                    </div>
                </div>

                <div class="premium-service-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper">
                            <div class="service-icon graphics-icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Graphics Design</h4>
                            <p class="service-description">
                                Bring your brand to life with stunning visual designs. From logos to marketing materials,
                                we create graphics that capture attention and communicate your brand's unique story.
                            </p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Brand Identity</li>
                                <li><i class="fas fa-check"></i> Marketing Materials</li>
                                <li><i class="fas fa-check"></i> Digital Assets</li>
                            </ul>
                        </div>
                        <div class="service-footer">
                            <a href="{{ route('services') }}" class="service-link">
                                <span>Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="card-decoration">
                            <div class="decoration-element element-1"></div>
                            <div class="decoration-element element-2"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="services-cta" data-aos="fade-up" data-aos-delay="700">
                <div class="cta-content">
                    <h3>Ready to Transform Your Business?</h3>
                    <p>Let's discuss how our premium solutions can drive your success</p>
                    <div class="cta-actions">
                        <a href="{{ route('contact') }}" class="btn-premium-primary">
                            <span>Start Your Project</span>
                            <i class="fas fa-rocket"></i>
                        </a>
                        <a href="{{ route('services') }}" class="btn-premium-outline">
                            <span>View All Services</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Two Area End -->

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
                        <a href="{{ route('services') }}" class="btn-one">Discover More
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->

    <!-- Why Choose us Area Start -->
    <div class="why-choose-us__one section-padding">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-xl-6 col-lg-7 col-md-9" data-aos="fade-up-right">
                    <div class="why-choose-us__one-left">
                        <div class="why-choose-us__one-title">
                            <span class="subtitle-one">Why Chose Us</span>
                            <h2>Why Our Clients Choose Us</h2>
                            <p>At TecClub, we believe that our success is measured by the success of our clients. Here’s
                                why partnering with us is the best decision for your business:</p>
                        </div>
                        <div class="why-choose-us__one-quality">
                            <div class="why-choose-us__one-quality-single">
                                <div class="icon">
                                    <i class="flaticon-machine-repair"></i>
                                </div>
                                <div class="why-choose-us__one-quality-single-content">
                                    <h4>Expertise & Experience</h4>
                                    <p>With over seven years in the industry, we bring deep expertise in web development, app
                                        development, UX/UI design, and digital marketing. We stay ahead of trends to deliver
                                        innovative solutions.</p>
                                </div>
                            </div>
                            <div class="why-choose-us__one-quality-single">
                                <div class="icon">
                                    <i class="flaticon-web-research"></i>
                                </div>
                                <div class="why-choose-us__one-quality-single-content">
                                    <h4>Custom Solutions</h4>
                                    <p>TecClub delivers customized solutions that align perfectly with your unique business
                                        needs. With a proven track record and scalable approach, we're your ideal partner
                                        for success.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-10" data-aos="fade-up-left">
                    <div class="why-choose-us__one-image">
                        <div class="why-choose-us__one-image-shape">
                            <div class="shape shape-1 animate-x-axis"></div>
                            <div class="shape shape-2 animate-x-axis"></div>
                            <img src="assets/img/shape/why-choose-shape.png" alt=""
                                class="shape shape-3 animate-y-axis">
                        </div>
                        @if ($whychoose)
                            <img src="{{ $whychoose->getFirstMediaUrl('section_img') ?? '' }}" alt="image">
                        @else
                            <img src="{{ asset('assets/img/why-choose-us/why-choose.png') }}" alt="image">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why choose us Area End -->

    <!-- Testimonial Area Start -->
    <div class="testimonial__one section-padding" data-aos="zoom-in">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="testimonial__one-left">
                        <div class="testimonial__one-left-title">
                            <span class="subtitle-one">Client Testimonial</span>
                            <h2>WebTech Solutions the <span class="highlighted">transfor</span> </h2>
                            <a href="{{ route('contact') }}" class="btn-one">Get Support
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="testimonial__one-right">
                        <div class="swiper testimonial__one-slider-active">
                            <div class="swiper-wrapper">
                                <!-- Existing testimonial -->
                                <div class="single-slider swiper-slide">
                                    <div class="single-slider-user">
                                        <div class="single-slider-user-name">
                                            <h4>Garth Van Sittert</h4>
                                            <span>South Africa</span>
                                        </div>
                                        <div class="single-slider-user-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star "></i>
                                        </div>
                                    </div>
                                    <p>Working with Hassan and his team has been a game-changer for our business. His team
                                        delivered a quality app tailored to our needs, with excellent attention to detail
                                        and communication throughout the project.</p>
                                </div>

                                <!-- New testimonial -->
                                <div class="single-slider swiper-slide">
                                    <div class="single-slider-user">
                                        <div class="single-slider-user-name">
                                            <h4>Ankit Sharma</h4>
                                            <span>India</span>
                                        </div>
                                        <div class="single-slider-user-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star "></i>
                                        </div>
                                    </div>
                                    <p> {{ config('app.name') }} is knowledgeable and helped with what we needed, they
                                        jumped on call quickly
                                        and answered all the questions we had</p>
                                </div>
                                <div class="single-slider swiper-slide">
                                    <div class="single-slider-user">
                                        <div class="single-slider-user-name">
                                            <h4>Cyril Selivanov</h4>
                                            <span>Germany</span>
                                        </div>
                                        <div class="single-slider-user-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star "></i>
                                        </div>
                                    </div>
                                    <p> {{ config('app.name') }} is a true professional. Is able to work on processes and
                                        deliver the result
                                        on time. They understands the delivery methodology and is attentive to details.
                                        Highly
                                        recommend.</p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial__one-right-bottom">
                            <div class="slider-arrow">
                                <i class="swiper-button-prev fas fa-arrow-left"></i>
                                <i class="swiper-button-next fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->

    <!-- Portfolio Area Start -->
    <div class="portfolio__one section-padding"data-aos="fade-right" data-aos-offset="300"
        data-aos-easing="ease-in-sine">
        <div class="container">
            <div class="row gy-4 align-items-end justify-content-between mb-5">
                <div class="col-xl-6 col-lg-7 col-md-9 col-sm-10">
                    <div class="portfolio__one-content-left">
                        <span class="subtitle-one">Tech Portfolio</span>
                        <h2>Case Studies in Ingenious IT Portfolio</h2>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="portfolio__one-content-right text-lg-end">
                        <a href="{{ route('portfolio') }}" class="btn-one">All Portfolio
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container custom__container">
            <div class="portfolio__one-slider swiper py-5">
                <div class="swiper-wrapper portfolio-items align-items-center">
                    @if ($recentPosts)
                        @foreach ($recentPosts as $post)
                            <div class="swiper-slide portfolio__one-single-portfolio single-portfolio">
                                <img src="{{ $post->getFirstMediaUrl('cover') }}" alt="image">
                                <div class="portfolio__one-single-portfolio-content">
                                    <h4>{{ $post->title }}</h4>
                                    <span>{{ $post->category }}</span>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="swiper-slide portfolio__one-single-portfolio single-portfolio">
                            <div class="portfolio__one-single-portfolio-content">
                                <h4>No Portfolios Found</h4>
                                <span>Currently, there are no published portfolios available. Please check back
                                    later.</span>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Area End -->

    <!-- Start new section for languages -->
    <div class="services__one section-padding" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="container">
            <!-- Title Section -->
            <div class="row justify-content-center text-center mb-4">
                <div class="col-xl-7 col-lg-7 col-md-9">
                    <span class="subtitle-one">Tools & Technology</span>
                    <h2>Trusted Technology We Use
                    </h2>
                </div>
            </div>
            <!-- Tabs Section -->
            <div class="tabs_wrap">
                <ul class="nav nav-pills justify-content-center text-center gap-3 tabs-nav" id="pills-tab"
                    role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                            <h6>MOBILE</h6>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-web-tab" data-bs-toggle="pill" data-bs-target="#pills-web"
                            type="button" role="tab" aria-controls="pills-web" aria-selected="false">
                            <h6>WEB</h6>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-uiux-tab" data-bs-toggle="pill" data-bs-target="#pills-uiux"
                            type="button" role="tab" aria-controls="pills-uiux" aria-selected="false">
                            <h6>UI/UX</h6>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-blockchain-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-blockchain" type="button" role="tab"
                            aria-controls="pills-blockchain" aria-selected="false">
                            <h6>BLOCKCHAIN</h6>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-ecommerce-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-ecommerce" type="button" role="tab"
                            aria-controls="pills-ecommerce" aria-selected="false">
                            <h6>E-COMMERCE</h6>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-devops-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-devops" type="button" role="tab" aria-controls="pills-devops"
                            aria-selected="false">
                            <h6>DEVOPS SERVICES</h6>
                        </button>
                    </li>
                </ul>

                <!-- Tab Content Section -->
                <div class="tab-content mt-4" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="row justify-content-center">
                            <!-- Card 1 -->
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://upload.wikimedia.org/wikipedia/en/3/30/Java_programming_language_logo.svg"
                                        alt="Java">
                                    {{-- <i class="fa-brands fa-java" style="font-size: 3rem; color: #007bff;"></i> --}}
                                    <h4>JAVA</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/74/Kotlin_Icon.png"
                                        alt="Kotlin">
                                    <h4>KOTLIN</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://developer.apple.com/assets/elements/icons/swift-playgrounds-mac/swift-playgrounds-mac-96x96_2x.png"
                                        alt="Swift">
                                    <h4>SWIFT</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://cdn.prod.website-files.com/5ee12d8d7f840543bde883de/5ef3a1148ac97166a06253c1_flutter-logo-white-inset.svg"
                                        alt="Flutter">
                                    <h4>FLUTTER</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d7/Android_robot.svg"
                                        alt="Android">
                                    <h4>ANDROID</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg"
                                        alt="iOS">
                                    <h4>IOS</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://www.designveloper.com/wp-content/uploads/2022/09/what-is-Objective-C-1024x443.png"
                                        alt="iOS">
                                    <h4>OBJECTIVE-C</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://go.dev/blog/go-brand/Go-Logo/PNG/Go-Logo_Aqua.png" alt="go">
                                    <h4>GO</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/ISO_C%2B%2B_Logo.svg"
                                        alt="go">
                                    <h4>C++</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHOcjv23NFs8q6vP9wcm9-Ooa92ooXDHE-XQ&s"
                                        alt="go">
                                    <h4>RUBY</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1V96dt8eHKIox72npVr9nYaOAnu0Rjl4n0Q&s"
                                        alt="go">
                                    <h4>C#</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3X6kNltLcXvHc8akxDy_JpYrZkABotlFLrQ&s"
                                        alt="go">
                                    <h4>RUST</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row justify-content-center">
                            <!-- Card 1 -->
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://e7.pngegg.com/pngimages/410/100/png-clipart-web-development-html-responsive-web-design-logo-javascript-html-angle-web-design-thumbnail.png"
                                        alt="Html">
                                    {{-- <i class="fa-brands fa-java" style="font-size: 3rem; color: #007bff;"></i> --}}
                                    <h4>HTML</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/CSS3_logo.svg/2048px-CSS3_logo.svg.png"
                                        alt="Css">
                                    <h4>CSS</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://cdn.worldvectorlogo.com/logos/javascript-1.svg" alt="Javascript">
                                    <h4>JAVASCRIPT</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXalRyF7J7QRLkJfMwCMqA47UUDCFdHJ-dFQ&s"
                                        alt="PHP">
                                    <h4>PHP</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://cdn.iconscout.com/icon/free/png-256/free-python-logo-icon-download-in-svg-png-gif-file-formats--technology-social-media-vol-5-pack-logos-icons-2945099.png?f=webp&w=256
                                        alt="PYTHON">
                                    <h4>PYTHON</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://w7.pngwing.com/pngs/980/847/png-transparent-ruby-on-rails-logo-programming-language-rubygems-ruby-angle-design-ruby-thumbnail.png"
                                        alt="RUBY">
                                    <h4>RUBY</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://logos-world.net/wp-content/uploads/2022/07/Java-Logo.png"
                                        alt="JAVA">
                                    <h4>JAVA</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0ZY7pSp8vUlxBODPl3S4YYzsx0Ht-sB7EkQ&s"
                                        alt="NOTE.JS">
                                    <h4>NOTE.JS</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://logowik.com/content/uploads/images/azure-sql2162.jpg"
                                        alt="MYSQL">
                                    <h4>MYSQL</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://cdn4.iconfinder.com/data/icons/logos-3/600/React.js_logo-512.png"
                                        alt="REACT.JS">
                                    <h4>REACT.JS</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://cdn.iconscout.com/icon/free/png-256/free-graphql-logo-icon-download-in-svg-png-gif-file-formats--technology-social-media-vol-3-pack-logos-icons-2944912.png?f=webp"
                                        alt="GRAPHQL">
                                    <h4>GRAPHQL</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://www.logo.wine/a/logo/Laravel/Laravel-Logo.wine.svg" alt="LARAVEL">
                                    <h4>LARAVEL</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://cdn.worldvectorlogo.com/logos/next-js.svg" alt="NEXT.JS">
                                    <h4>NEXT.JS</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://thumbs.dreamstime.com/b/angular-logo-editorial-illustrative-white-background-angular-logo-editorial-illustrative-white-background-eps-download-208329119.jpg"
                                        alt="ANGULAR">
                                    <h4>ANGULAR</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=" https://seeklogo.com/images/T/tailwind-css-logo-5AD4175897-seeklogo.com.png"
                                        alt="TAILWIND CSS">
                                    <h4>TAILWIND CSS</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=" https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/1280px-Bootstrap_logo.svg.png"
                                        alt="BOOTSRTAP">
                                    <h4>BOOTSRTAP</h4>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-uiux" role="tabpanel" aria-labelledby="pills-uiux-tab">
                        <div class="row justify-content-center">
                            <!-- Card 1 -->
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://seekvectors.com/files/download/d08147cfe906857857e934019e859d5f.jpg"
                                        alt="FIGMA">
                                    {{-- <i class="fa-brands fa-java" style="font-size: 3rem; color: #007bff;"></i> --}}
                                    <h4>FIGMA</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://download.logo.wine/logo/Adobe_XD/Adobe_XD-Logo.wine.png
                                        alt="Css">
                                    <h4>ADOBE XD</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHpIn7aV9QP9VpmoGME98J4unIWk91Un44QQ&s"
                                        alt="SKETCH">
                                    <h4>SKETCH</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://cdn.worldvectorlogo.com/logos/invision.svg" alt="INVISION">
                                    <h4>INVISION</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://i.pinimg.com/originals/b8/61/bd/b861bde36e090720f7a5a9f33e664afe.png
                                        alt="FRAMER">
                                    <h4>FRAMER</h4>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-blockchain" role="tabpanel"
                        aria-labelledby="pills-blockchain-tab">
                        <div class="row justify-content-center">
                            <!-- Card 1 -->
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzy3qK1atDG5afv8SGLPlEDyUyzFR0VXfBAQ&s"
                                        alt="SOLIDITY">
                                    {{-- <i class="fa-brands fa-java" style="font-size: 3rem; color: #007bff;"></i> --}}
                                    <h4>SOLIDITY</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://thumbs.dreamstime.com/b/solana-sol-token-symbol-cryptocurrency-logo-circle-coin-icon-isolated-white-background-vector-illustration-222245595.jpg
                                        alt="SOLANA">
                                    <h4>SOLANA</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUKCpkIT8exTova3u7ZqZh2OCvK0c9TlOnGQ&s"
                                        alt="ETHERIUM">
                                    <h4>ETHERIUM</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYz6pvmAKSxKvoOdrO9XcKR3bOtKxtqpTcKg&s"
                                        alt="POLYGON">
                                    <h4>POLYGON</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://cryptologos.cc/logos/avalanche-avax-logo.svg?v=035 alt="Avalanche">
                                    <h4>Avalanche</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVKOnf5YQTxWjKDZOCeHpbO12xDVXtv9JYxA&s
                                        alt="FANTOM">
                                    <h4>FANTOM</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://repository-images.githubusercontent.com/24655114/c71c5800-6a8c-11e9-9117-8ec357c9f69e
                                        alt="WEB.JS">
                                    <h4>WEB.JS</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfKQcdGE_PJW9j9x6HeGFn_PmPZCToSs2b_w&s
                                        alt="MORAILS">
                                    <h4>MORAILS</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-ecommerce" role="tabpanel"
                        aria-labelledby="pills-ecommerce-tab">
                        <div class="row justify-content-center">
                            <!-- Card 1 -->
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ58f__Hs5QwGWIEcsawDwW1o5IQzaYNPONhQ&s"
                                        alt="SHOPIFY">
                                    {{-- <i class="fa-brands fa-java" style="font-size: 3rem; color: #007bff;"></i> --}}
                                    <h4>SHOPIFY</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiQqvP9mSAN_KNxZlbvD9VT-yl4Vf_PuT6Cw&s
                                        alt="WORDPRESS">
                                    <h4>WORDPRESS</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlGmKtrnxElpqw3AExKXPWWBulcwjlvDJa1Q&s"
                                        alt="REACT">
                                    <h4>REACT</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://e7.pngegg.com/pngimages/410/100/png-clipart-web-development-html-responsive-web-design-logo-javascript-html-angle-web-design-thumbnail.png"
                                        alt="HTML">
                                    <h4>HTML</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://cdn.worldvectorlogo.com/logos/css-3.svg alt="CSS">
                                    <h4>CSS</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDsDPlMP28XkjCqyUoeVOw0fqxkd6UR_7XZw&s
                                        alt="JAVASCRIPT">
                                    <h4>JAVASCRIPT</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://images.seeklogo.com/logo-png/52/1/team-liquid-logo-png_seeklogo-528696.png?v=638475860110000000
                                        alt="LIQUID">
                                    <h4>LIQUID</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://i.pinimg.com/474x/91/23/7f/91237f1eca767ef74d722ca534f9281a.jpg
                                        alt="MONGODB">
                                    <h4>MONGODB</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ58f__Hs5QwGWIEcsawDwW1o5IQzaYNPONhQ&s
                                        alt="SHOPIFY OS 2.0">
                                    <h4>SHOPIFY OS 2.0</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-devops" role="tabpanel" aria-labelledby="pills-devops-tab">
                        <div class="row justify-content-center">
                            <!-- Card 1 -->
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://cdn.prod.website-files.com/621c63f4d47b2e3664b182bb/6476fc8691c70344e78a99a8_76be012e-2adf-44e0-93d3-95d537b75e99.png"
                                        alt="GITLAB CI/CD">
                                    {{-- <i class="fa-brands fa-java" style="font-size: 3rem; color: #007bff;"></i> --}}
                                    <h4>GITLAB CI/CD</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIqVLx1eZWBsj68Zlp7BhY3Y_yRy_YOKqMFw&s
                                        alt="GITHUB">
                                    <h4>GITHUB</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://cdn.worldvectorlogo.com/logos/elastic-stack.svg" alt="ELK-STACK">
                                    <h4>ELK-STACK</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnffN7rDwqOHrHwgH8ydwt0D51QLIQC5o38A&s"
                                        alt="SALTSTACK">
                                    <h4>SALTSTACK</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://seeklogo.com/images/D/docker-logo-9FF973197B-seeklogo.com.png
                                        alt="DOCKER">
                                    <h4>DOCKER</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLocSQYVTny35XkhYa_P4OoDui1fPSwPaTvw&s
                                        alt="TERRAFORM">
                                    <h4>TERRAFORM</h4>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 mb-4">
                                <div class="tech-item">
                                    <img src=https://static-00.iconduck.com/assets.00/git-icon-2048x2048-juzdf1l5.png
                                        alt="GIT">
                                    <h4>GIT</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End -->

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
                    <h2 class="team-main-title">The Minds Behind <span class="highlight-text">TecClub's Success</span>
                    </h2>
                    <p class="team-subtitle">Passionate innovators and technical experts dedicated to transforming your
                        digital vision into reality</p>
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
                                <p class="member-description">Visionary leader driving TecClub's innovation strategy with
                                    5+ years of technical expertise in digital transformation and business growth.</p>
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
                                <p class="member-description">Technology architect leading cutting-edge development
                                    initiatives and ensuring scalable, robust digital solutions for our clients.</p>
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
                                <p class="member-description">Strategic Operations Leader & UI/UX Designer focused on
                                    creating exceptional client experiences and driving sustainable business growth.</p>
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
                                <p class="member-description">Mobile app specialist creating innovative iOS and Android
                                    applications with focus on user experience and performance optimization.</p>
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
                                <p class="member-description">Full-stack web developer crafting responsive, scalable web
                                    solutions using modern frameworks and cutting-edge technologies.</p>
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
                                <p class="member-description">E-commerce specialist building high-converting online stores
                                    with seamless user experiences and advanced functionality.</p>
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


    <!-- Blog Area Start -->
    <div class="blog__one section-padding pt-lg-0 mt-5">
        <div class="container ">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6 col-lg-6 mt-5">
                    <div class="blog__one-title">
                        <span class="subtitle-one">Blog And news</span>
                        <h2>Exploring Technology</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gy-4">
                @if ($recentblogs)
                    @foreach ($recentblogs as $blog)
                        <div class="col-xl-4 col-lg-6">
                            <div class="blog__one-single-blog">
                                <div class="blog__one-single-blog-image">
                                    <img src="{{ $blog->getFirstMediaUrl('thumbnail') }}"
                                        alt="{{ $blog->title }} - image">
                                </div>
                                <div class="blog__one-single-blog-date">
                                    <span class="date">{{ $blog->published_at->format('d') }}</span>
                                    <span class="month">{{ $blog->published_at->format('M') }}</span>
                                </div>
                                <div class="blog__one-single-blog-content">
                                    <div class="blog__one-single-blog-content-top">
                                        <span>
                                            <i class="far fa-user"></i>
                                            {{ $blog->author->name }}
                                        </span>
                                        <span>
                                            <i class="far fa-folder-open"></i>
                                            {{ $blog->category->name }}
                                        </span>
                                    </div>
                                    <a href="{{ route('show-blog', $blog->slug) }}"
                                        class="blog-heading">{{ Str::limit($blog->title, 20) }}</a>
                                    <a href="{{ route('show-blog', $blog->slug) }}" class="btn-three">Read More
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="swiper-slide portfolio__one-single-portfolio single-portfolio">
                        <div class="portfolio__one-single-portfolio-content">
                            <h4>No Blogs Found</h4>
                            <span>Currently, there are no published blogs available. Please check back later.</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

@endsection
@section('home_scripts')
    <script>
        // Counter Animation for Banner Stats
        function animateCounters() {
            const counters = document.querySelectorAll('[data-count]');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = parseInt(counter.getAttribute('data-count'));
                        const duration = 2000;
                        const increment = target / (duration / 16);
                        let current = 0;

                        const timer = setInterval(() => {
                            current += increment;
                            if (current >= target) {
                                counter.textContent = target;
                                clearInterval(timer);
                            } else {
                                counter.textContent = Math.floor(current);
                            }
                        }, 16);

                        observer.unobserve(counter);
                    }
                });
            });

            counters.forEach(counter => observer.observe(counter));
        }

        // Initialize Premium Brand Slider
        function initPremiumSliders() {
            if (typeof Swiper !== 'undefined') {
                const brandSlider = new Swiper('.premium-brand-slider', {
                    slidesPerView: 6,
                    spaceBetween: 30,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        320: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        576: {
                            slidesPerView: 3,
                            spaceBetween: 25
                        },
                        768: {
                            slidesPerView: 4,
                            spaceBetween: 30
                        },
                        1024: {
                            slidesPerView: 5,
                            spaceBetween: 30
                        },
                        1200: {
                            slidesPerView: 6,
                            spaceBetween: 30
                        }
                    }
                });
            }
        }

        // Initialize animations when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            animateCounters();
            initPremiumSliders();
        });
    </script>
@endsection