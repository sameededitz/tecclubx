@extends('layout.home-layout')
@section('title')
    Portfolio | TecClub - Technology
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
                        <h2>Portfolios</h2>
                        <span><a href="{{ route('home') }}">Home</a>
                            <span>|</span>
                            Portfolio
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Portfolio Two Area End -->
    <div class="portfolio__two section-padding">
        <div class="container">
            <div class="row">
                @forelse ($portfolios as $portfolio)
                    <div class="col-xl-6">
                        <div class="portfolio__two-single-item">
                            <div class="portfolio__two-single-item-img-wrapper">
                                <img src="{{ $portfolio->getFirstMediaUrl('cover') }}" alt="image" >
                            </div>
                            <div class="portfolio__two-single-item-content">
                                <div class="portfolio__two-single-item-content-left">
                                    <h3>{{ $portfolio->title }}</h3>
                                    <p>{{ $portfolio->category }}</p>
                                </div>
                                <div class="portfolio__two-single-item-content-right">
                                    <a href="{{ route('show-portfolio', $portfolio->slug) }}">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="portfolio__two-pagination">
                        {{ $portfolios->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Two Area End -->

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
