@extends('layout.home-layout')
@section('title')
    Contact | TecClub- Technology
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
                        <h2>Request Quote</h2>
                        <span><a href="{{ route('home') }}">Home</a>
                            <span>|</span>
                            Request Quote
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Request Quote Start -->

    <div class="request-quote__area section-padding">
        <div class="container">
            @if (session('status'))
                <div class="row py-2">
                    <div class="col-12">
                        <x-alert :type="session('status', 'info')" :message="session('message', 'Operation completed successfully.')" />
                    </div>
                </div>
            @endif
            @livewire('contact-form')
        </div>
    </div>

    <!-- Request Quote End -->
@endsection
@section('home_scripts')
@endsection
