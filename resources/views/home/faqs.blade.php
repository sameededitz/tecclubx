@extends('layout.home-layout')
@section('title')
    Faqs | TecClub - Technology
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
                        <h2>Question and Answer</h2>
                        <span><a href="{{ route('home') }}">Home</a>
                            <span>|</span>
                            Faqs
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Fqp Area Start -->
    <div class="faq__three section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="faq-collapse">
                        <div class="faq-collapse-item" data-aos="fade-right">
                            <div class="faq-collapse-item-card active">
                                <div class="faq-collapse-item-card-header">
                                    <i class="fas fa-minus"></i>
                                    <h6> What services does TecClub Technology offer?</h6>
                                </div>
                                <div class="faq-collapse-item-card-header-content active">
                                    <p>TecClub Technology specializes in app development, web development, iOS development,
                                        digital marketing, SEO, e-commerce solutions, and UI/UX design.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-collapse-item" data-aos="fade-right">
                            <div class="faq-collapse-item-card">
                                <div class="faq-collapse-item-card-header">
                                    <i class="fas fa-plus"></i>
                                    <h6>How can TecClub help my business with app development?</h6>
                                </div>
                                <div class="faq-collapse-item-card-header-content display-none">
                                    <p>We develop custom mobile applications for both Android and iOS platforms, ensuring
                                        they are user-friendly, scalable, and aligned with your business goals.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-collapse-item" data-aos="fade-right">
                            <div class="faq-collapse-item-card">
                                <div class="faq-collapse-item-card-header">
                                    <i class="fas fa-plus"></i>
                                    <h6>Does TecClub provide e-commerce solutions?</h6>
                                </div>
                                <div class="faq-collapse-item-card-header-content display-none">
                                    <p>Yes, we offer tailored e-commerce solutions, from website development to payment
                                        gateway integration, to create a seamless online shopping experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-collapse-item" data-aos="fade-right">
                            <div class="faq-collapse-item-card">
                                <div class="faq-collapse-item-card-header">
                                    <i class="fas fa-plus"></i>
                                    <h6>What makes TecClub’s UI/UX design unique?</h6>
                                </div>
                                <div class="faq-collapse-item-card-header-content display-none">
                                    <p> Our UI/UX design focuses on aesthetics and user experience, ensuring that your
                                        product is not only visually appealing but also easy to navigate and engaging.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="faq-collapse">
                        <div class="faq-collapse-item" data-aos="fade-left">
                            <div class="faq-collapse-item-card active">
                                <div class="faq-collapse-item-card-header">
                                    <i class="fas fa-minus"></i>
                                    <h6>How can TecClub help improve my website's SEO?</h6>
                                </div>
                                <div class="faq-collapse-item-card-header-content active">
                                    <p>Our SEO services boost your website’s visibility on search engines, helping to
                                        attract more organic traffic and increase conversions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-collapse-item" data-aos="fade-left">
                            <div class="faq-collapse-item-card">
                                <div class="faq-collapse-item-card-header">
                                    <i class="fas fa-plus"></i>
                                    <h6>Do you offer digital marketing services?</h6>
                                </div>
                                <div class="faq-collapse-item-card-header-content display-none">
                                    <p>Yes, TecClub offers a full range of digital marketing services, including social
                                        media marketing, email marketing, and pay-per-click campaigns to enhance your online
                                        presence.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-collapse-item" data-aos="fade-left">
                            <div class="faq-collapse-item-card">
                                <div class="faq-collapse-item-card-header">
                                    <i class="fas fa-plus"></i>
                                    <h6>How experienced is TecClub in web development?</h6>
                                </div>
                                <div class="faq-collapse-item-card-header-content display-none">
                                    <p>With five years of experience in web development, TecClub builds responsive,
                                        high-performance websites tailored to meet client needs and industry standards.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-collapse-item" data-aos="fade-left">
                            <div class="faq-collapse-item-card">
                                <div class="faq-collapse-item-card-header">
                                    <i class="fas fa-plus"></i>
                                    <h6>Can TecClub develop iOS-specific applications?</h6>
                                </div>
                                <div class="faq-collapse-item-card-header-content display-none">
                                    <p>Absolutely! Our team has expertise in iOS development, creating apps that meet
                                        Apple’s quality standards and provide an exceptional user experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
