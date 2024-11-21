@extends('layout.home-layout')
@section('title')
    Portfolio | TecClub - Technology
@endsection

@section('home_content')
    <!-- Banner Area Start -->
    <div class="page__banner">
        <div class="page__banner-shape">
            <img src="{{ asset('assets/img/shape/page-banner-shape.png') }}" alt="image">
        </div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="page__banner-content py-5">
                        <h2>{{ $portfolio->title }}</h2>
                        <span>
                            <a href="{{ route('home') }}">Home</a>
                            <span>|</span>
                            <a href="{{ route('portfolio') }}">Portfolios</a>
                            <span>|</span>
                            {{ $portfolio->title }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Project Details Area Start -->
    <div class="project__details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project__details-thumb">
                        <img src="{{ $portfolio->getFirstMediaUrl('thumbnail') ?? asset('assets/img/project/project-details-thumb.png') }}"
                            alt="image">
                        <div class="project-info">
                            <div class="project-info-top">
                                <h4>Project Details</h4>
                            </div>
                            <ul>
                                <li>Category:<span>{{ $portfolio->category }}</span></li>
                                <li>Date:<span>{{ $portfolio->date->toFormattedDayDateString() }}</span></li>
                                <li class="project-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="project__details-content">
                        <div class="project__details-content-mid">
                            <h3>{{ $portfolio->title }}</h3>
                        </div>
                    </div>
                </div>
                <!--<div class="project__details-images">-->
                <!--    <img src="{{ $portfolio->getFirstMediaUrl('cover') ?? asset('assets/img/project/project-details.png') }}"-->
                <!--        alt="image">-->
                <!--    <img src="{{ $portfolio->getFirstMediaUrl('preview') ?? asset('assets/img/project/project-details-2.png') }}"-->
                <!--        alt="image">-->
                <!--</div>-->
                <div class="project__details-content">
                    <div class="project__details-content-bottom">
                        <p>{!! $portfolio->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Details Area End -->

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
