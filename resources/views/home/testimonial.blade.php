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
        <div class="container" data-aos="zoom-out-up">
            <div class="row justify-content-center text-center mb-50">
                <div class="col-xl-7 col-lg-7 col-md-9">
                    <span class="subtitle-one">Praise & Feedback</span>
                    <h2>Customer Experiencess</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4" data-aos="zoom-out-up">
                    <div class="testimonial__six-card">
                        <h4>Garth Van Sittert</h4>
                        <span>South Africa</span>
                        <p>Working with Hassan and his team has been a game-changer for our business. His team
                            delivered a quality app tailored to our needs, with excellent attention to detail
                            and communication throughout the project.</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4" data-aos="zoom-out-up">
                    <div class="testimonial__six-card">
                        <h4>Cyril Selivanov</h4>
                        <span>Germany</span>
                        <p> {{ config('app.name') }} is a true professional. Is able to work on processes and deliver the
                            result
                            on time. They understands the delivery methodology and is attentive to details. Highly
                            recommend.</p>
                        <div class="testimonial-rating mt-5">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4" data-aos="zoom-out-up">
                    <div class="testimonial__six-card">
                        <h4>Ankit Sharma</h4>
                        <span>India</span>
                        <p> {{ config('app.name') }} is knowledgeable and helped with what we needed. They jumped on a call
                            quickly and
                            answered all the questions we had, showing dedication and a true commitment to client success.
                        </p>


                        <div class="testimonial-rating mt-5">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
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
