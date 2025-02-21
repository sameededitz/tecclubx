@extends('layout.home-layout')
@section('title')
    Services | TecClub- Technology
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
                        <h2>Services</h2>
                        <span><a href="{{ route('home') }}">Home</a>
                            <span>|</span>
                            Service
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Services Two Area Start -->
    <div class="services__one section-padding">
        <div class="container"data-aos="fade-right">
            <div class="row justify-content-center text-center">
                <div class="col-xl-7 col-lg-7 col-md-9 services__one-title">
                    <span class="subtitle-one">Our Services</span>
                    <h2>We Offer Solutions</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-xl-4" data-aos="fade-right">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i> <img src="{{ asset('assets/img/service/mobile-app.png') }}" alt=""></i>
                        </div>
                        <div class="services__one-single-service-content">
                            <h4>App Development</h4>
                            <p>We specialize in creating high-quality mobile applications for both iOS and Android
                                platforms. Our team handles everything from concept to deployment, ensuring your app is
                                intuitive, user-friendly, and tailored to your business goals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4" data-aos="fade-right">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i><img src="{{ asset('assets/img/service/website-codes.png') }}" alt=""></i>
                        </div>
                        <div class="services__one-single-service-content">
                            <h4>Web development</h4>
                            <p>Our web development services focus on building robust, responsive, and scalable websites.
                                Whether you need an e-commerce platform, a corporate website, or a custom web solution, we
                                deliver sites that perform exceptionally and provide a seamless user experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4" data-aos="fade-right">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i><img src="{{ asset('assets/img/service/web-development.png') }}" alt=""></i>
                        </div>
                        <div class="services__one-single-service-content">
                            <h4>UI & UX Design</h4>
                            <p>
                                Our UX/UI design services focus on creating intuitive, visually appealing interfaces that
                                captivate users while ensuring seamless navigation. We aim to blend aesthetics with
                                functionality, enhancing the overall user experience of your website or app.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4" data-aos="fade-right">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i><img src="{{ asset('assets/img/service/seo.png') }}" alt=""></i>
                        </div>
                        <div class=" services__one-single-service-content">
                            <h4>Digital Marketing</h4>
                            <p>Our digital marketing solutions are crafted to amplify your brand's visibility online. We
                                specialize in SEO, PPC, social media management, and content marketing, creating targeted
                                strategies that attract more visitors, boost engagement etc.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4" data-aos="fade-right">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i><img src="{{ asset('assets/img/service/profit.png') }}" alt=""></i>
                        </div>
                        <div class="services__one-single-service-content">
                            <h4>E-Commerce</h4>
                            <p>We offer a training program to enhance e-commerce strategies, covering website development,
                                digital marketing, and logistics. Participants gain practical tools to improve their online
                                presence. This program is ideal for small to medium-sized businesses etc.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4" data-aos="fade-right">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i><img src="{{ asset('assets/img/service/design-software.png') }}" alt=""></i>
                        </div>
                        <div class="services__one-single-service-content">
                            <h4>Graphics Designing</h4>
                            <p>Our graphic design team brings your brand to life with creative and impactful visuals. From
                                logos and branding to promotional materials and digital assets, we design graphics that
                                capture your brand’s essence and resonate with your audience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Two Area End -->

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
