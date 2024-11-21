@extends('layout.home-layout')
@section('title')
    Home | TecClub - Technology 
@endsection

@section('home_content')

    <!-- Banner Area Start -->
    <div class="banner__one">
        <div class="banner-shape">
            <div class="shape banner-shape-1"></div>
            <div class="shape banner-shape-2"></div>
            <div class="shape banner-shape-3"></div>
            <div class="shape banner-shape-4"></div>
            <img class="shape banner-shape-5" src="assets/img/shape/banner-shape.png" alt="image">
            <div class="shape banner-shape-7"></div>
            <div class="shape banner-shape-6"></div>
        </div>
        <div class="container">
            <div class="row align-items-center gy-4 justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="banner__one-content">
                        <span class="subtitle-one">TecClub Technology</span>
                        <h2>Welcome to <span>TecClub</span></h2>
                        <p>TecClub is a leading software development agency specializing in web development, mobile app
                            development, and custom software solutions. Our team of experienced engineers delivers
                            innovative, high-quality products that meet your unique business needs.</p>
                        <a href="{{ route('services') }}" class="btn-two">Find Solutions
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-9">
                    <div class="banner__one-image">
                        <div class="banner__one-image-wrapper">
                            <div class="banner__one-image-wrapper-shapes animate-rotate">
                                <div class="shape shape-1"></div>
                                <div class="shape shape-2"></div>
                            </div>
                            @if ($bannerimg)
                                <img src="{{ $bannerimg->getFirstMediaUrl('section_img') ?? asset('assets/img/banner/banner-right-img.png') }}"
                                    alt="banner image">
                            @else
                                <img src="{{ asset('assets/img/banner/banner-right-img.png') }}" alt="banner image">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Brand Area Start -->
    <div class="brand__area pt-115">
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

    <!-- Services Two Area Start -->
    <div class="services__one section-padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-7 col-lg-7 col-md-9 services__one-title">
                    <span class="subtitle-one">Our Services</span>
                    <h2>We Offer Solutions</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-xl-4">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i> <img src="{{ asset('assets/img/service/mobile-app.png') }}" alt=""></i>
                        </div>
                        <div class="services__one-single-service-content">
                            <h4>App Development</h4>
                            <a href="{{ route('services') }}">
                                <p>We specialize in creating high-quality mobile applications for both iOS and Android
                                    platforms...</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i><img src="{{ asset('assets/img/service/website-codes.png') }}" alt=""></i>
                        </div>
                        <div class="services__one-single-service-content">
                            <h4>Web development</h4>
                            <a href="{{ route('services') }}">
                                <p>Our web development services focus on building robust, responsive, and scalable
                                    websites...
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i><img src="{{ asset('assets/img/service/web-development.png') }}" alt=""></i>
                        </div>
                        <div class="services__one-single-service-content">
                            <h4>UI & UX Design</h4>
                            <a href="{{ route('services') }}">
                                <p> Our UX/UI design services focus on creating intuitive, visually appealing interfaces
                                    that...</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i><img src="{{ asset('assets/img/service/seo.png') }}" alt=""></i>
                        </div>
                        <div class=" services__one-single-service-content">
                            <h4>Digital Marketing</h4>
                            <a href="{{ route('services') }}">
                                <p>Our digital marketing solutions are crafted to amplify your brand's visibility online...
                                </p>
                        </div> </a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i><img src="{{ asset('assets/img/service/profit.png') }}" alt=""></i>
                        </div>
                        <div class="services__one-single-service-content">
                            <h4>E-Commerce</h4>
                            <a href="{{ route('services') }}">
                                <p>We offer a training program to enhance e-commerce strategies, covering website
                                    development...
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i><img src="{{ asset('assets/img/service/design-software.png') }}" alt=""></i>
                        </div>
                        <div class="services__one-single-service-content">
                            <h4>Graphics Designing</h4>
                            <a href="{{ route('services') }}">
                                <p>Our graphic design team brings your brand to life with creative and impactful visuals...
                                </p>
                            </a>
                        </div>
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
                <div class="col-xl-6 col-lg-5">
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
                <div class="col-xl-6 col-lg-7 col-md-9">
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
                <div class="col-xl-6 col-lg-7 col-md-9">
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
                                    <p>With over five years in the industry, we bring deep expertise in web development, app
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
                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-10">
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
    <div class="testimonial__one section-padding">
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
                                    <p>Zentronix is knowledgeable and helped with what we needed, they jumped on call quickly
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
                                    <p>TecClub is a true professional. Is able to work on processes and deliver the result
                                        on time. They understands the delivery methodology and is attentive to details. Highly
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
    <div class="portfolio__one section-padding">
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
    <div class="services__one section-padding">
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

    <!--  Start review section -->
    <div class="container highlights-container">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-7 col-lg-7 col-md-9 services__one-title">
                    <span class="subtitle-one">Our Results</span>
                    <h2>A Journey of Success and Growth</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- Card 1 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="highlight-card">
                        <i class="bi bi-calendar3" style="font-size: 3rem; color: #007bff;"></i>
                        <h1 class="mt-2">5+</h1>
                        <p>Years</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="highlight-card">
                        <i class="bi bi-person" style="font-size: 3rem; color: #007bff;"></i>
                        <h1 class="mt-2">10+</h1>
                        <p>Engineers</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="highlight-card">
                        <i class="bi bi-briefcase" style="font-size: 3rem; color: #007bff;"></i>
                        <h1 class="mt-2">30+</h1>
                        <p>Projects</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="highlight-card">
                        <i class="bi bi-star" style="font-size: 3rem; color: #007bff;"></i>
                        <h1 class="mt-2">40+</h1>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->


    <!-- TEAM Area Start -->
    <div class="testimonial__six section-padding">
        <div class="container">
            <div class="row justify-content-center text-center mb-50">
                <div class="col-xl-7 col-lg-7 col-md-9">
                    <span class="subtitle-one">Our Team</span>
                    <h2>Your Project’s Dedicated Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="testimonial__six-card">
                        <h4>Hassan Nisar</h4>
                        <span>Ceo & Co-Founder</span>
                        <p>Hassan Nisar, CEO and Co-Founder at TecClub Technology, leads with vision and technical
                            expertise, driving innovation and excellence across all digital solutions.</p>

                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="testimonial__six-card">
                        <h4>M.Sohaib Abbas</h4>
                        <span>CTO</span>
                        <p>M.Sohaib Abbas, CTO of TecClub Technology, leads tech innovation and strategic growth, ensuring
                            cutting-edge solutions that drive the company’s success.</p>

                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="testimonial__six-card">
                        <h4>Farhan Ali</h4>
                        <span>Director</span>
                        <p>Farhan Ali, Director at TecClub Technology, leads with a focus on innovation and strategic
                            growth, driving the company's success through impactful digital solutions.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xl-4">
                    <div class="testimonial__six-card">
                        <h4>Uzair Ahmad</h4>
                        <span>App Development Lead</span>
                        <p>Uzair Ahmad, App Development Lead at TecClub Technology, specializes in creating high-quality,
                            user-focused applications that drive innovation and enhance user experience.</p>

                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="testimonial__six-card">
                        <h4>M.Sameed</h4>
                        <span>Web Development Lead</span>
                        <p>M.Sameed, Web Development Lead at TecClub Technology, crafts responsive and innovative web
                            solutions,
                            enhancing user engagement and supporting the company’s digital growth.</p>

                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="testimonial__six-card">
                        <h4>M.Haroon</h4>
                        <span>E-commerce Developer</span>
                        <p>Haroon, Ecommerce Development Lead at TecClub Technology, specializes in creating optimized,
                            user-friendly online stores that enhance customer experience and digital commerce success.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TEAM Area End -->


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
