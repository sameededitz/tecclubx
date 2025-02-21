@extends('layout.home-layout')
@section('title')
    Contact | TecClub - Technology
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

    <!-- Testimonial Area Start -->

    <div class="testimonial__six section-padding" data-aos="zoom-out-up">
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
    <!-- Testimonial Area End -->

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
