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
                            We're a leading software development agency crafting innovative digital solutions.
                            From cutting-edge web applications to mobile apps that captivate users, we turn
                            your vision into powerful, scalable technology that drives business growth.
                        </p>
                        <div class="banner-features">
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
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>24/7 Support</span>
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
                        <div class="banner-image-wrapper">
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
                            spaceBetween: 15
                        },
                        480: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        },
                        576: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        },
                        768: {
                            slidesPerView: 4,
                            spaceBetween: 25
                        },
                        992: {
                            slidesPerView: 5,
                            spaceBetween: 25
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

@section('styles')
    <style>
        /* Premium Banner Section Styles */
        .premium-banner-section {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
            padding: 120px 0;
        }
        
        @media (max-width: 1200px) {
            .premium-banner-section {
                padding: 100px 0;
                min-height: 90vh;
            }
        }
        
        @media (max-width: 992px) {
            .premium-banner-section {
                padding: 80px 0;
                min-height: 85vh;
            }
        }

        .banner-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
            z-index: 0;
        }

        .gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(14, 89, 242, 0.15) 0%, rgba(245, 204, 21, 0.1) 50%, rgba(14, 89, 242, 0.05) 100%);
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .floating-shapes .shape {
            position: absolute;
            background: linear-gradient(45deg, rgba(14, 89, 242, 0.1), rgba(245, 204, 21, 0.1));
            border-radius: 50%;
            animation: float 8s ease-in-out infinite;
            will-change: transform;
        }

        .shape.shape-1 {
            width: 150px;
            height: 150px;
            top: 10%;
            left: 5%;
            animation-delay: 0s;
        }

        .shape.shape-2 {
            width: 200px;
            height: 200px;
            top: 60%;
            right: 5%;
            animation-delay: 2s;
        }

        .shape.shape-3 {
            width: 120px;
            height: 120px;
            top: 30%;
            right: 20%;
            animation-delay: 4s;
        }

        .shape.shape-4 {
            width: 180px;
            height: 180px;
            bottom: 10%;
            left: 15%;
            animation-delay: 1s;
        }

        .shape.shape-5 {
            width: 100px;
            height: 100px;
            top: 70%;
            left: 40%;
            animation-delay: 3s;
        }

        .banner-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .banner-particles .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: #F8E559;
            border-radius: 50%;
            animation: sparkle 3s linear infinite;
            will-change: opacity, transform;
        }

        .particle.particle-1 {
            top: 15%;
            left: 10%;
            animation-delay: 0s;
        }

        .particle.particle-2 {
            top: 30%;
            left: 80%;
            animation-delay: 1s;
        }

        .particle.particle-3 {
            top: 50%;
            left: 20%;
            animation-delay: 2s;
        }

        .particle.particle-4 {
            top: 70%;
            left: 70%;
            animation-delay: 0.5s;
        }

        .particle.particle-5 {
            top: 25%;
            left: 60%;
            animation-delay: 1.5s;
        }

        .particle.particle-6 {
            top: 80%;
            left: 30%;
            animation-delay: 2.5s;
        }

        .particle.particle-7 {
            top: 40%;
            left: 90%;
            animation-delay: 0.3s;
        }

        .particle.particle-8 {
            top: 85%;
            left: 85%;
            animation-delay: 1.8s;
        }

        .premium-banner-content {
            color: white;
            z-index: 10;
            position: relative;
        }

        .banner-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(14, 89, 242, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(14, 89, 242, 0.2);
            border-radius: 50px;
            padding: 12px 25px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .badge-icon {
            background: linear-gradient(45deg, #0E59F2, #2D7CFF);
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            font-size: 14px;
        }

        .badge-text {
            font-weight: 600;
            font-size: 0.9rem;
        }

        .badge-glow {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(245, 204, 21, 0.3), transparent);
            animation: shimmer 3s infinite;
        }

        .banner-title {
            font-size: 3.5rem;
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 25px;
            background: linear-gradient(135deg, #ffffff 0%, #e2e8f0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .text-highlight {
            background: #0E59F2;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .banner-description {
            font-size: 1.2rem;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 35px;
            max-width: 600px;
        }

        .banner-features {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 40px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .feature-icon {
            background: linear-gradient(45deg, #0E59F2, #2D7CFF);
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: white;
        }

        .banner-actions {
            display: flex;
            gap: 20px;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }

        .btn-premium-primary {
            background: #0E59F2;
            color: #ffffff;
            padding: 15px 30px;
            border-radius: 15px;
            text-decoration: none;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(89, 89, 248, 0.3);
        }

        .btn-premium-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(22, 119, 255, 0.4);
            color: #1e293b;
        }

        .btn-premium-secondary {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            padding: 15px 30px;
            border-radius: 15px;
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
        }

        .btn-premium-secondary:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(14, 89, 242, 0.3);
            color: white;
            transform: translateY(-2px);
        }

        .banner-stats {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 900;
            color: #F8E559;
            line-height: 1;
        }

        .stat-symbol {
            font-size: 1.8rem;
            color: #F8E559;
            font-weight: 700;
        }

        .stat-label {
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.8);
            margin-left: 5px;
        }

        .premium-banner-image {
            position: relative;
            z-index: 10;
        }

        .image-decorations {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .decoration-circle {
            position: absolute;
            background: linear-gradient(45deg, rgba(14, 89, 242, 0.15), rgba(245, 204, 21, 0.15));
            border-radius: 50%;
            animation: float 12s ease-in-out infinite;
        }

        .decoration-circle.circle-1 {
            width: 150px;
            height: 150px;
            top: -20px;
            right: -20px;
            animation-delay: 0s;
        }

        .decoration-circle.circle-2 {
            width: 100px;
            height: 100px;
            bottom: -20px;
            left: -20px;
            animation-delay: 4s;
        }

        .decoration-circle.circle-3 {
            width: 80px;
            height: 80px;
            top: 50%;
            left: -40px;
            animation-delay: 8s;
        }

        .image-glow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: 120%;
            background: radial-gradient(circle, rgba(14, 89, 242, 0.3) 0%, transparent 70%);
            border-radius: 50%;
            animation: pulse 4s ease-in-out infinite;
        }

        .banner-image-wrapper {
            position: relative;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.3);
        }

        .main-banner-image {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 25px;
        }

        /* Premium Brand Section Styles */
        .premium-brand-section {
            background: #f8fafc;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        @media (max-width: 1200px) {
            .premium-brand-section {
                padding: 80px 0;
            }
        }
        
        @media (max-width: 992px) {
            .premium-brand-section {
                padding: 70px 0;
            }
        }
        
        @media (max-width: 768px) {
            .premium-brand-section {
                padding: 60px 0;
            }
        }

        .premium-brand-wrapper {
            background: white;
            border-radius: 30px;
            padding: 60px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }

        .brand-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .brand-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(14, 89, 242, 0.1);
            border: 1px solid rgba(14, 89, 242, 0.2);
            border-radius: 50px;
            padding: 10px 20px;
            margin-bottom: 20px;
            gap: 8px;
            font-weight: 600;
            color: #0E59F2;
        }

        .brand-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 15px;
        }

        .brand-description {
            font-size: 1.1rem;
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
        }

        .brand-slider-container {
            margin-bottom: 50px;
        }

        .premium-brand-item {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px;
        }

        .brand-image-wrapper {
            position: relative;
            padding: 20px;
            border-radius: 15px;
            transition: all 0.3s ease;
            background: #f8fafc;
            border: 1px solid rgba(0, 0, 0, 0.05);
            width: 100%;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .brand-image-wrapper:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            background: white;
            border-color: rgba(14, 89, 242, 0.2);
        }

        .brand-image-wrapper img {
            max-width: 80%;
            max-height: 60px;
            object-fit: contain;
            transition: all 0.3s ease;
            filter: grayscale(100%) opacity(0.7);
        }

        .brand-image-wrapper:hover img {
            filter: grayscale(0%) opacity(1);
            transform: scale(1.1);
        }

        .brand-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(14, 89, 242, 0.9), rgba(245, 204, 21, 0.9));
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
            border-radius: 15px;
        }

        .brand-image-wrapper:hover .brand-overlay {
            opacity: 1;
        }

        .brand-hover-content {
            text-align: center;
            color: white;
            font-weight: 600;
        }

        .brand-hover-content i {
            font-size: 24px;
            margin-bottom: 8px;
            display: block;
        }

        .trust-indicators {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 15px;
            background: #f8fafc;
            padding: 20px 25px;
            border-radius: 20px;
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .trust-item:hover {
            background: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        .trust-icon {
            background: linear-gradient(135deg, #0E59F2, #2D7CFF);
            width: 50px;
            height: 50px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            box-shadow: 0 8px 25px rgba(14, 89, 242, 0.3);
        }

        .trust-content {
            text-align: center;
        }

        .trust-number {
            font-size: 1.8rem;
            font-weight: 800;
            color: #1e293b;
            line-height: 1;
        }

        .trust-label {
            font-size: 0.9rem;
            color: #64748b;
            margin-top: 2px;
        }

        /* Premium Services Section Styles */
        .premium-services-section {
            background: #f8fafc;
            position: relative;
            overflow: hidden;
        }

        .services-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .services-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .service-shape {
            position: absolute;
            background: linear-gradient(45deg, rgba(14, 89, 242, 0.03), rgba(245, 204, 21, 0.03));
            border-radius: 50%;
            animation: float 15s ease-in-out infinite;
        }

        .service-shape.shape-1 {
            width: 300px;
            height: 300px;
            top: 10%;
            left: 5%;
        }

        .service-shape.shape-2 {
            width: 200px;
            height: 200px;
            top: 60%;
            right: 10%;
            animation-delay: 5s;
        }

        .service-shape.shape-3 {
            width: 150px;
            height: 150px;
            bottom: 20%;
            left: 20%;
            animation-delay: 10s;
        }

        .premium-section-header {
            position: relative;
            z-index: 10;
            margin-bottom: 60px;
        }

        .section-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(14, 89, 242, 0.1);
            border: 1px solid rgba(14, 89, 242, 0.2);
            border-radius: 50px;
            padding: 10px 20px;
            margin-bottom: 25px;
            gap: 8px;
            font-weight: 600;
            color: #0E59F2;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .section-description {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #64748b;
            max-width: 800px;
            margin: 0 auto;
        }

        .premium-services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-bottom: 60px;
            position: relative;
            z-index: 10;
        }

        .premium-service-card {
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            position: relative;
            height: 100%;
        }

        .premium-service-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.15);
            border-color: rgba(14, 89, 242, 0.2);
        }

        .premium-service-card.featured {
            background: linear-gradient(135deg, #0E59F2 0%, #2D7CFF 100%);
            color: white;
            transform: scale(1.05);
        }

        .premium-service-card.featured:hover {
            transform: translateY(-15px) scale(1.05);
        }

        .featured-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(248, 229, 89, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(248, 229, 89, 0.3);
            border-radius: 25px;
            padding: 8px 15px;
            font-size: 0.8rem;
            font-weight: 600;
            color: #F8E559;
            display: flex;
            align-items: center;
            gap: 5px;
            z-index: 20;
        }

        .service-card-inner {
            padding: 40px;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .service-icon-wrapper {
            position: relative;
            margin-bottom: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Premium Service Icon Styles */
        .service-icon {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 32px;
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        /* Individual Icon Gradients */
        .mobile-app-icon {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 8px 32px rgba(102, 126, 234, 0.3);
        }

        .web-dev-icon {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            box-shadow: 0 8px 32px rgba(245, 87, 108, 0.3);
        }

        .design-icon {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            box-shadow: 0 8px 32px rgba(79, 172, 254, 0.3);
        }

        .marketing-icon {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            box-shadow: 0 8px 32px rgba(67, 233, 123, 0.3);
        }

        .ecommerce-icon {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            box-shadow: 0 8px 32px rgba(250, 112, 154, 0.3);
        }

        .graphics-icon {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            box-shadow: 0 8px 32px rgba(168, 237, 234, 0.3);
        }

        /* Icon Hover Effects */
        .premium-service-card:hover .service-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow:
                0 20px 40px rgba(0, 0, 0, 0.3),
                0 0 0 8px rgba(255, 255, 255, 0.1);
        }

        .premium-service-card:hover .mobile-app-icon {
            box-shadow:
                0 20px 40px rgba(102, 126, 234, 0.4),
                0 0 0 8px rgba(102, 126, 234, 0.2);
        }

        .premium-service-card:hover .web-dev-icon {
            box-shadow:
                0 20px 40px rgba(245, 87, 108, 0.4),
                0 0 0 8px rgba(245, 87, 108, 0.2);
        }

        .premium-service-card:hover .design-icon {
            box-shadow:
                0 20px 40px rgba(79, 172, 254, 0.4),
                0 0 0 8px rgba(79, 172, 254, 0.2);
        }

        .premium-service-card:hover .marketing-icon {
            box-shadow:
                0 20px 40px rgba(67, 233, 123, 0.4),
                0 0 0 8px rgba(67, 233, 123, 0.2);
        }

        .premium-service-card:hover .ecommerce-icon {
            box-shadow:
                0 20px 40px rgba(250, 112, 154, 0.4),
                0 0 0 8px rgba(250, 112, 154, 0.2);
        }

        .premium-service-card:hover .graphics-icon {
            box-shadow:
                0 20px 40px rgba(168, 237, 234, 0.4),
                0 0 0 8px rgba(168, 237, 234, 0.2);
        }

        /* Icon Animation */
        .service-icon i {
            transition: all 0.3s ease;
            animation: iconFloat 3s ease-in-out infinite;
        }

        @keyframes iconFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }

        .premium-service-card:hover .service-icon i {
            animation-play-state: paused;
            transform: scale(1.1);
        }

        .premium-service-card.featured .service-icon {
            transform: scale(1.05);
            animation: featuredPulse 2s ease-in-out infinite;
        }

        @keyframes featuredPulse {

            0%,
            100% {
                transform: scale(1.05);
                box-shadow: 0 8px 32px rgba(245, 87, 108, 0.3);
            }

            50% {
                transform: scale(1.1);
                box-shadow: 0 12px 40px rgba(245, 87, 108, 0.5);
            }
        }

        .service-icon img {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }

        .icon-glow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            opacity: 0;
            transition: all 0.4s ease;
            z-index: -1;
        }

        .premium-service-card:hover .icon-glow {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.2);
        }

        /* Responsive Icon Adjustments */
        @media (max-width: 768px) {
            .service-icon {
                width: 70px;
                height: 70px;
                font-size: 28px;
                border-radius: 16px;
            }

            .icon-glow {
                width: 100px;
                height: 100px;
            }
        }

        @media (max-width: 480px) {
            .service-icon {
                width: 60px;
                height: 60px;
                font-size: 24px;
                border-radius: 14px;
            }

            .icon-glow {
                width: 90px;
                height: 90px;
            }
        }

        transition: all 0.3s ease;
        }

        .premium-service-card:hover .icon-glow {
            opacity: 1;
            animation: pulse 2s ease-in-out infinite;
        }

        .service-content {
            flex-grow: 1;
            margin-bottom: 25px;
        }

        .service-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 15px;
        }

        .premium-service-card.featured .service-title {
            color: white;
        }

        .service-description {
            font-size: 1rem;
            line-height: 1.6;
            color: #64748b;
            margin-bottom: 20px;
        }

        .premium-service-card.featured .service-description {
            color: rgba(255, 255, 255, 0.9);
        }

        .service-features {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .service-features li {
            padding: 5px 0;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
            color: #475569;
        }

        .premium-service-card.featured .service-features li {
            color: rgba(255, 255, 255, 0.8);
        }

        .service-features i {
            color: #0E59F2;
            font-size: 12px;
        }

        .premium-service-card.featured .service-features i {
            color: #F8E559;
        }

        .service-footer {
            margin-top: auto;
        }

        .service-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgba(14, 89, 242, 0.1);
            color: #0E59F2;
            padding: 12px 20px;
            border-radius: 15px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .service-link:hover {
            background: #0E59F2;
            color: white;
            transform: translateX(5px);
        }

        .premium-service-card.featured .service-link {
            background: rgba(248, 229, 89, 0.2);
            color: #F8E559;
        }

        .premium-service-card.featured .service-link:hover {
            background: #F8E559;
            color: #1e293b;
        }

        .card-decoration {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .decoration-element {
            position: absolute;
            background: linear-gradient(45deg, rgba(14, 89, 242, 0.1), rgba(245, 204, 21, 0.1));
            border-radius: 50%;
            animation: float 12s ease-in-out infinite;
        }

        .decoration-element.element-1 {
            width: 100px;
            height: 100px;
            top: -50px;
            right: -50px;
        }

        .decoration-element.element-2 {
            width: 60px;
            height: 60px;
            bottom: -30px;
            left: -30px;
            animation-delay: 6s;
        }

        .services-cta {
            background: white;
            border-radius: 25px;
            padding: 50px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(0, 0, 0, 0.05);
            position: relative;
            z-index: 10;
        }

        .cta-content h3 {
            font-size: 2rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 15px;
        }

        .cta-content p {
            font-size: 1.1rem;
            color: #64748b;
            margin-bottom: 30px;
        }

        .cta-actions {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .btn-premium-outline {
            background: transparent;
            border: 2px solid #0E59F2;
            color: #0E59F2;
            padding: 13px 28px;
            border-radius: 15px;
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
        }

        .btn-premium-outline:hover {
            background: #0E59F2;
            color: white;
            transform: translateY(-2px);
        }

        /* Animations */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        @keyframes sparkle {

            0%,
            100% {
                opacity: 0;
                transform: scale(0);
            }

            50% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes shimmer {
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.7;
            }

            50% {
                transform: translate(-50%, -50%) scale(1.1);
                opacity: 1;
            }
        }

        /* Responsive Design */
        @media (max-width: 1400px) {
            .banner-title {
                font-size: 3.2rem;
            }
            
            .section-title {
                font-size: 2.8rem;
            }
            
            .premium-services-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 25px;
            }
        }

        @media (max-width: 1200px) {
            .premium-services-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 25px;
            }

            .banner-title {
                font-size: 3rem;
            }

            .section-title {
                font-size: 2.5rem;
            }
            
            .team-main-title {
                font-size: 3rem;
            }
            
            .premium-brand-wrapper {
                padding: 50px 30px;
            }
        }

        @media (max-width: 992px) {
            .banner-title {
                font-size: 2.8rem;
            }
            
            .section-title {
                font-size: 2.3rem;
            }
            
            .team-main-title {
                font-size: 2.8rem;
            }
            
            .premium-services-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
            
            .banner-stats {
                gap: 30px;
            }
            
            .stat-number {
                font-size: 2.2rem;
            }
            
            .stat-symbol {
                font-size: 1.6rem;
            }
            
            .trust-indicators {
                gap: 30px;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .trust-item {
                min-width: 140px;
                padding: 15px 20px;
            }
            
            .banner-description {
                font-size: 1.1rem;
                max-width: 500px;
            }
        }

        /* Keep 3 columns for larger tablets */
        @media (min-width: 993px) and (max-width: 1100px) {
            .premium-services-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 15px;
            }
            
            .service-card-inner {
                padding: 25px;
            }
            
            .service-title {
                font-size: 1.3rem;
            }
            
            .service-description {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 768px) {
            .premium-banner-section {
                padding: 80px 0;
                min-height: 80vh;
            }

            .banner-title {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 2rem;
            }
            
            .team-main-title {
                font-size: 2.5rem;
            }

            .banner-actions {
                flex-direction: column;
                align-items: stretch;
                gap: 15px;
            }

            .btn-premium-primary,
            .btn-premium-secondary {
                width: 100%;
                justify-content: center;
                padding: 12px 25px;
            }

            .banner-stats {
                justify-content: center;
                gap: 20px;
                flex-wrap: wrap;
            }

            .stat-item {
                flex-direction: column;
                text-align: center;
                gap: 5px;
                min-width: 120px;
            }

            .premium-brand-wrapper {
                padding: 40px 20px;
                border-radius: 20px;
            }

            .trust-indicators {
                gap: 15px;
            }

            .trust-item {
                flex-direction: column;
                text-align: center;
                gap: 10px;
                padding: 20px;
                flex: 1;
                min-width: 130px;
            }

            .premium-services-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .service-card-inner {
                padding: 30px;
            }

            .services-cta {
                padding: 40px 20px;
            }

            .cta-actions {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }
            
            .banner-features {
                gap: 12px;
            }
            
            .feature-item {
                gap: 10px;
            }
            
            .banner-description {
                font-size: 1rem;
                margin-bottom: 30px;
            }
            
            .divider-text {
                font-size: 1rem;
                padding: 0 15px;
            }
            
            .team-member-card {
                padding: 25px 20px;
                border-radius: 22px;
            }
            
            .card-glow {
                border-radius: 22px;
            }
            
            .member-header {
                margin-bottom: 22px;
            }
            
            .member-name {
                font-size: 1.3rem;
            }
            
            .member-description {
                font-size: 0.95rem;
                line-height: 1.6;
            }
            
            .member-specialties {
                gap: 8px;
                margin-bottom: 22px;
            }
        }

        @media (max-width: 576px) {
            .banner-title {
                font-size: 2rem;
            }

            .section-title {
                font-size: 1.8rem;
            }
            
            .team-main-title {
                font-size: 2rem;
            }

            .banner-features {
                gap: 10px;
            }

            .premium-service-card.featured {
                transform: none;
            }

            .premium-service-card.featured:hover {
                transform: translateY(-10px);
            }
            
            .stat-item {
                min-width: 100px;
            }
            
            .stat-number {
                font-size: 2rem;
            }
            
            .stat-symbol {
                font-size: 1.4rem;
            }
            
            .trust-item {
                min-width: 120px;
                padding: 15px;
            }
            
            .trust-number {
                font-size: 1.5rem;
            }
            
            .banner-badge {
                padding: 10px 20px;
                margin-bottom: 25px;
            }
            
            .badge-icon {
                width: 24px;
                height: 24px;
                font-size: 12px;
            }
            
            .badge-text {
                font-size: 0.85rem;
            }
            
            .premium-brand-wrapper {
                padding: 30px 15px;
                border-radius: 15px;
            }
            
            .brand-title {
                font-size: 1.8rem;
            }
            
            .team-subtitle {
                font-size: 1rem;
                margin-bottom: 40px;
            }
            
            .section-divider {
                margin: 40px 0 30px;
                gap: 15px;
            }
            
            .divider-text {
                font-size: 0.9rem;
                padding: 0 12px;
            }
            
            .team-member-card {
                padding: 20px;
            }
            
            .member-avatar {
                width: 70px;
                height: 70px;
            }
            
            .avatar-image {
                width: 70px;
                height: 70px;
                font-size: 28px;
            }
            
            .member-name {
                font-size: 1.2rem;
            }
            
            .member-title {
                font-size: 0.9rem;
            }
            
            .member-description {
                font-size: 0.9rem;
            }
            
            .specialty {
                font-size: 0.75rem;
                padding: 5px 10px;
            }
            
            .social-btn {
                width: 35px;
                height: 35px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .banner-title {
                font-size: 1.8rem;
                line-height: 1.2;
            }
            
            .section-title {
                font-size: 1.6rem;
            }
            
            .team-main-title {
                font-size: 1.8rem;
                line-height: 1.3;
            }
            
            .premium-banner-section {
                padding: 60px 0;
            }
            
            .banner-description {
                font-size: 0.95rem;
            }
            
            .btn-premium-primary,
            .btn-premium-secondary {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
            
            .service-card-inner {
                padding: 25px;
            }
            
            .service-title {
                font-size: 1.3rem;
            }
            
            .services-cta {
                padding: 30px 15px;
            }
            
            .cta-content h3 {
                font-size: 1.6rem;
            }
            
            .cta-content p {
                font-size: 1rem;
            }
            
            .trust-indicators {
                gap: 10px;
            }
            
            .premium-brand-wrapper {
                padding: 25px 10px;
            }
        }

        /* Utility Classes */
        .section-padding {
            padding: 100px 0;
        }

        @media (max-width: 1200px) {
            .section-padding {
                padding: 80px 0;
            }
        }

        @media (max-width: 992px) {
            .section-padding {
                padding: 70px 0;
            }
        }

        @media (max-width: 768px) {
            .section-padding {
                padding: 60px 0;
            }
        }

        @media (max-width: 576px) {
            .section-padding {
                padding: 40px 0;
            }
        }

        /* Container overflow fixes */
        .container {
            overflow-x: hidden;
        }

        /* Prevent horizontal scroll on small screens */
        body {
            overflow-x: hidden;
        }

        /* Fix for elements extending outside container */
        .row {
            margin-left: 0;
            margin-right: 0;
        }

        .row > * {
            padding-right: calc(var(--bs-gutter-x) * 0.5);
            padding-left: calc(var(--bs-gutter-x) * 0.5);
        }

        /* Better spacing for medium screens */
        @media (min-width: 768px) and (max-width: 1199px) {
            .container {
                max-width: 95%;
                padding-left: 15px;
                padding-right: 15px;
            }
            
            .premium-services-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
            
            .trust-indicators {
                flex-wrap: wrap;
                gap: 20px;
                justify-content: center;
            }
            
            .trust-item {
                flex: 0 1 calc(50% - 10px);
                min-width: 180px;
            }
        }

        /*team section styles*/
        .team-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
            z-index: 0;
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

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(-30px) rotate(120deg);
            }

            66% {
                transform: translateY(-20px) rotate(240deg);
            }
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
            0% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.1);
                opacity: 0.7;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
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

            0%,
            50% {
                opacity: 1;
            }

            51%,
            100% {
                opacity: 0.5;
            }
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

        /* ========================================
           COMPLETE MOBILE RESPONSIVE FIXES
           ======================================== */
        
        /* ===== GLOBAL FIXES ===== */
        * {
            box-sizing: border-box;
        }
        
        html {
            overflow-x: hidden !important;
            max-width: 100vw !important;
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden !important;
            max-width: 100vw !important;
            position: relative;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }
        
        img {
            max-width: 100%;
            height: auto;
            display: block;
        }
        
        .container, .container-fluid {
            overflow-x: hidden !important;
            max-width: 100% !important;
            padding-left: 15px;
            padding-right: 15px;
        }
        
        .row {
            margin-left: -12px;
            margin-right: -12px;
            overflow-x: hidden;
        }
        
        .row > * {
            padding-left: 12px;
            padding-right: 12px;
        }
        
        /* ===== TECHNOLOGY SECTION FIXES ===== */
        .tech-item {
            padding: 15px 10px;
            text-align: center;
            border-radius: 12px;
            background: #f8fafc;
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
            height: auto;
            min-height: 130px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .tech-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background: white;
        }
        
        .tech-item img {
            max-width: 90% !important;
            max-height: 70px !important;
            width: auto !important;
            height: auto !important;
            object-fit: contain !important;
            margin: 0 auto 12px;
            display: block;
        }
        
        .tech-item h4 {
            font-size: 0.85rem;
            font-weight: 600;
            color: #1e293b;
            margin: 0;
            word-wrap: break-word;
            line-height: 1.3;
            text-align: center;
        }
        
        /* ===== BRAND SECTION FIXES ===== */
        .brand-image-wrapper {
            padding: 15px !important;
            height: 70px !important;
        }
        
        .brand-image-wrapper img {
            max-width: 100% !important;
            max-height: 50px !important;
            width: auto !important;
            height: auto !important;
            object-fit: contain !important;
        }
        
        .premium-brand-item {
            height: 80px !important;
        }
        
        /* ===== BANNER IMAGE FIXES ===== */
        .main-banner-image {
            max-width: 100% !important;
            height: auto !important;
            width: 100% !important;
            object-fit: cover;
        }
        
        .banner-image-wrapper {
            border-radius: 20px;
            overflow: hidden;
        }
        
        /* ===== RESPONSIVE BREAKPOINTS ===== */
        
        /* Large tablets and small desktops */
        @media (max-width: 991px) {
            .premium-banner-section {
                padding: 80px 0 60px;
                min-height: auto;
            }
            
            .banner-title {
                font-size: 2.5rem;
                line-height: 1.2;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .team-main-title {
                font-size: 2.5rem;
            }
            
            .premium-brand-wrapper {
                padding: 40px 25px;
            }
            
            .trust-indicators {
                justify-content: center;
                gap: 20px;
            }
        }
        
        /* Tablets */
        @media (max-width: 768px) {
            .premium-banner-section {
                padding: 60px 0 40px;
            }
            
            .banner-title {
                font-size: 2.2rem;
                margin-bottom: 20px;
            }
            
            .banner-description {
                font-size: 1rem;
                margin-bottom: 25px;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .team-main-title {
                font-size: 2.2rem;
            }
            
            .banner-badge {
                padding: 10px 18px;
                margin-bottom: 25px;
            }
            
            .badge-text {
                font-size: 0.85rem;
            }
            
            .banner-features {
                gap: 12px;
                margin-bottom: 30px;
            }
            
            .feature-item {
                font-size: 0.9rem;
            }
            
            .banner-actions {
                flex-direction: column;
                gap: 12px;
            }
            
            .btn-premium-primary,
            .btn-premium-secondary {
                width: 100%;
                justify-content: center;
                padding: 12px 24px;
                font-size: 0.95rem;
            }
            
            .banner-stats {
                justify-content: center;
                gap: 25px;
                flex-wrap: wrap;
            }
            
            .stat-item {
                flex-direction: column;
                text-align: center;
                gap: 5px;
                min-width: 100px;
            }
            
            .stat-number {
                font-size: 2.2rem;
            }
            
            .stat-symbol {
                font-size: 1.6rem;
            }
            
            .banner-image-wrapper {
                margin-top: 40px;
            }
            
            .premium-brand-wrapper {
                padding: 35px 20px;
                border-radius: 18px;
            }
            
            .brand-title {
                font-size: 1.8rem;
            }
            
            .brand-description {
                font-size: 1rem;
            }
            
            .brand-slider-container {
                margin-bottom: 35px;
            }
            
            .trust-indicators {
                gap: 15px;
                flex-wrap: wrap;
            }
            
            .trust-item {
                flex: 0 1 calc(50% - 10px);
                padding: 18px 20px;
                min-width: 140px;
            }
            
            .trust-icon {
                width: 45px;
                height: 45px;
                font-size: 18px;
            }
            
            .trust-number {
                font-size: 1.6rem;
            }
            
            .tech-item {
                padding: 12px 8px;
                min-height: 110px;
            }
            
            .tech-item img {
                max-height: 55px !important;
                margin-bottom: 10px;
            }
            
            .tech-item h4 {
                font-size: 0.8rem;
            }
            
            .col-6 {
                padding-left: 8px;
                padding-right: 8px;
            }
            
            .service-card-inner {
                padding: 28px 24px;
            }
            
            .service-title {
                font-size: 1.4rem;
            }
            
            .service-description {
                font-size: 0.95rem;
            }
            
            .services-cta {
                padding: 40px 25px;
                border-radius: 20px;
            }
            
            .cta-content h3 {
                font-size: 1.8rem;
            }
            
            .cta-actions {
                flex-direction: column;
                gap: 12px;
            }
            
            .team-subtitle {
                font-size: 1.05rem;
                margin-bottom: 50px;
            }
            
            .section-divider {
                margin: 50px 0 35px;
            }
            
            .divider-text {
                font-size: 0.95rem;
                padding: 0 16px;
            }
            
            .team-member-card {
                padding: 25px 20px;
            }
            
            .member-name {
                font-size: 1.35rem;
            }
            
            .member-title {
                font-size: 0.95rem;
            }
        }
        
        /* Mobile Large */
        @media (max-width: 576px) {
            .premium-banner-section {
                padding: 50px 0 30px;
            }
            
            .banner-title {
                font-size: 1.9rem;
                line-height: 1.25;
                margin-bottom: 18px;
            }
            
            .banner-description {
                font-size: 0.95rem;
                margin-bottom: 22px;
            }
            
            .section-title {
                font-size: 1.75rem;
                line-height: 1.3;
            }
            
            .team-main-title {
                font-size: 1.9rem;
                line-height: 1.3;
            }
            
            .banner-badge {
                padding: 8px 16px;
                margin-bottom: 20px;
            }
            
            .badge-icon {
                width: 22px;
                height: 22px;
                font-size: 11px;
            }
            
            .badge-text {
                font-size: 0.8rem;
            }
            
            .banner-features {
                gap: 10px;
                margin-bottom: 25px;
            }
            
            .feature-item {
                font-size: 0.85rem;
                gap: 8px;
            }
            
            .feature-icon {
                width: 20px;
                height: 20px;
                font-size: 10px;
            }
            
            .btn-premium-primary,
            .btn-premium-secondary {
                padding: 11px 20px;
                font-size: 0.9rem;
            }
            
            .banner-stats {
                gap: 18px;
            }
            
            .stat-item {
                min-width: 90px;
            }
            
            .stat-number {
                font-size: 2rem;
            }
            
            .stat-symbol {
                font-size: 1.4rem;
            }
            
            .stat-label {
                font-size: 0.85rem;
            }
            
            .premium-brand-wrapper {
                padding: 30px 15px;
                border-radius: 15px;
            }
            
            .brand-title {
                font-size: 1.6rem;
                margin-bottom: 12px;
            }
            
            .brand-description {
                font-size: 0.95rem;
            }
            
            .brand-badge {
                padding: 8px 16px;
                font-size: 0.85rem;
            }
            
            .trust-indicators {
                gap: 12px;
            }
            
            .trust-item {
                flex: 1 1 100%;
                max-width: 160px;
                padding: 16px 18px;
                min-width: 130px;
            }
            
            .trust-icon {
                width: 42px;
                height: 42px;
                font-size: 16px;
            }
            
            .trust-number {
                font-size: 1.5rem;
            }
            
            .trust-label {
                font-size: 0.85rem;
            }
            
            .tech-item {
                padding: 10px 6px;
                min-height: 100px;
            }
            
            .tech-item img {
                max-height: 48px !important;
                margin-bottom: 8px;
            }
            
            .tech-item h4 {
                font-size: 0.75rem;
                line-height: 1.2;
            }
            
            .col-6 {
                padding-left: 6px;
                padding-right: 6px;
                margin-bottom: 10px;
            }
            
            .premium-services-grid {
                gap: 15px;
            }
            
            .service-card-inner {
                padding: 24px 20px;
            }
            
            .service-icon {
                width: 65px;
                height: 65px;
                font-size: 28px;
            }
            
            .service-title {
                font-size: 1.25rem;
            }
            
            .service-description {
                font-size: 0.9rem;
            }
            
            .service-features li {
                font-size: 0.85rem;
            }
            
            .services-cta {
                padding: 35px 20px;
            }
            
            .cta-content h3 {
                font-size: 1.6rem;
            }
            
            .cta-content p {
                font-size: 0.95rem;
            }
            
            .team-subtitle {
                font-size: 1rem;
                margin-bottom: 45px;
            }
            
            .section-divider {
                margin: 45px 0 30px;
                gap: 12px;
            }
            
            .divider-text {
                font-size: 0.9rem;
                padding: 0 14px;
            }
            
            .team-member-card {
                padding: 20px 16px;
                border-radius: 20px;
                margin-bottom: 20px;
            }
            
            .card-glow {
                border-radius: 20px;
            }
            
            .member-header {
                flex-direction: column;
                align-items: center;
                gap: 12px;
                margin-bottom: 20px;
            }
            
            .member-avatar {
                width: 70px;
                height: 70px;
            }
            
            .avatar-ring {
                top: -4px;
                left: -4px;
                right: -4px;
                bottom: -4px;
                border-width: 2px;
            }
            
            .avatar-image {
                width: 70px;
                height: 70px;
                font-size: 28px;
            }
            
            .status-indicator {
                width: 16px;
                height: 16px;
                border-width: 2px;
                bottom: 3px;
                right: 3px;
            }
            
            .member-role-badge {
                padding: 6px 14px;
                font-size: 0.8rem;
                gap: 6px;
            }
            
            .member-role-badge i {
                font-size: 12px;
            }
            
            .member-info {
                text-align: center;
            }
            
            .member-name {
                font-size: 1.25rem;
                margin-bottom: 6px;
            }
            
            .member-title {
                font-size: 0.9rem;
                margin-bottom: 12px;
            }
            
            .member-description {
                font-size: 0.88rem;
                line-height: 1.5;
                margin-bottom: 16px;
            }
            
            .member-specialties {
                justify-content: center;
                gap: 6px;
                margin-bottom: 20px;
            }
            
            .specialty {
                font-size: 0.72rem;
                padding: 5px 10px;
            }
            
            .social-btn {
                width: 36px;
                height: 36px;
                font-size: 14px;
            }
        }
        
        /* Mobile Small */
        @media (max-width: 480px) {
            .premium-banner-section {
                padding: 40px 0 25px;
            }
            
            .banner-title {
                font-size: 1.7rem;
                line-height: 1.25;
            }
            
            .banner-description {
                font-size: 0.9rem;
            }
            
            .section-title {
                font-size: 1.6rem;
            }
            
            .team-main-title {
                font-size: 1.7rem;
            }
            
            .btn-premium-primary,
            .btn-premium-secondary {
                padding: 10px 18px;
                font-size: 0.85rem;
            }
            
            .stat-number {
                font-size: 1.8rem;
            }
            
            .stat-symbol {
                font-size: 1.3rem;
            }
            
            .premium-brand-wrapper {
                padding: 25px 12px;
            }
            
            .brand-title {
                font-size: 1.5rem;
            }
            
            .trust-item {
                padding: 14px 16px;
                min-width: 120px;
            }
            
            .tech-item {
                padding: 8px 5px;
                min-height: 95px;
            }
            
            .tech-item img {
                max-height: 42px !important;
                margin-bottom: 6px;
            }
            
            .tech-item h4 {
                font-size: 0.7rem;
            }
            
            .service-card-inner {
                padding: 20px 16px;
            }
            
            .service-icon {
                width: 60px;
                height: 60px;
                font-size: 26px;
            }
            
            .service-title {
                font-size: 1.15rem;
            }
            
            .services-cta {
                padding: 30px 16px;
            }
            
            .cta-content h3 {
                font-size: 1.5rem;
            }
            
            .team-member-card {
                padding: 18px 14px;
                border-radius: 18px;
            }
            
            .card-glow {
                border-radius: 18px;
            }
            
            .member-avatar {
                width: 65px;
                height: 65px;
            }
            
            .avatar-ring {
                border-width: 2px;
            }
            
            .avatar-image {
                width: 65px;
                height: 65px;
                font-size: 26px;
            }
            
            .status-indicator {
                width: 14px;
                height: 14px;
            }
            
            .member-role-badge {
                padding: 5px 12px;
                font-size: 0.75rem;
            }
            
            .member-name {
                font-size: 1.15rem;
            }
            
            .member-title {
                font-size: 0.85rem;
            }
            
            .member-description {
                font-size: 0.85rem;
            }
            
            .specialty {
                font-size: 0.7rem;
                padding: 4px 9px;
            }
        }
        
        /* Mobile Extra Small */
        @media (max-width: 375px) {
            .banner-title {
                font-size: 1.6rem;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
            
            .team-main-title {
                font-size: 1.6rem;
            }
            
            .stat-number {
                font-size: 1.6rem;
            }
            
            .tech-item {
                min-height: 90px;
            }
            
            .tech-item img {
                max-height: 38px !important;
            }
            
            .tech-item h4 {
                font-size: 0.68rem;
            }
            
            .trust-item {
                min-width: 110px;
                padding: 12px 14px;
            }
            
            .team-member-card {
                padding: 16px 12px;
                border-radius: 16px;
            }
            
            .card-glow {
                border-radius: 16px;
            }
            
            .member-avatar {
                width: 60px;
                height: 60px;
            }
            
            .avatar-image {
                width: 60px;
                height: 60px;
                font-size: 24px;
            }
            
            .status-indicator {
                width: 12px;
                height: 12px;
            }
            
            .member-role-badge {
                padding: 4px 10px;
                font-size: 0.7rem;
            }
            
            .member-name {
                font-size: 1.1rem;
            }
            
            .member-title {
                font-size: 0.8rem;
            }
            
            .member-description {
                font-size: 0.82rem;
            }
            
            .specialty {
                font-size: 0.68rem;
                padding: 4px 8px;
            }
            
            .social-btn {
                width: 34px;
                height: 34px;
                font-size: 13px;
            }
        }
        
        /* ===== ADDITIONAL FIXES ===== */
        
        /* Fix tabs navigation */
        .tabs-nav {
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
            flex-wrap: nowrap !important;
        }
        
        .tabs-nav .nav-item {
            flex-shrink: 0;
        }
        
        @media (max-width: 576px) {
            .tabs-nav .nav-item .nav-link {
                padding: 8px 12px;
                font-size: 0.85rem;
            }
        }
        
        /* Fix portfolio slider */
        .portfolio__one-slider {
            overflow: visible !important;
        }
        
        .swiper-wrapper {
            overflow: visible !important;
        }
        
        /* Fix blog cards on mobile */
        @media (max-width: 576px) {
            .blog__one-single-blog {
                margin-bottom: 25px;
            }
            
            .blog__one-single-blog-content {
                padding: 18px 16px;
            }
        }
        
        /* Bootstrap container fixes */
        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }
        
        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }
        
        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }
        
        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }
        
        @media (min-width: 1400px) {
            .container {
                max-width: 1320px;
            }
        }
        
        /* ===== END COMPLETE MOBILE RESPONSIVE FIXES ===== */
{{-- All Home Page Styles moved to /public/assets/css/custom.css --}}
    </style>
@endsection
