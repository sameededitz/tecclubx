@extends('layout.home-layout')
@section('title')
    Blogs | TecClub - Technology
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
                        <h2>Blogs</h2>
                        <span><a href="{{ route('home') }}">Home</a>
                            <span>|</span>
                            Blog
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Blog With Sidebar Area End -->

    <div class="blog__two section-padding">
        <div class="container">
            <div class="row gy-4 flex-wrap">
                <div class="col-xl-8">
                    @forelse ($blogs as $blog)
                        <div class="blog__sidebar-single-blog">
                            <div class="blog__sidebar-single-blog-image">
                                <img src="{{ $blog->getFirstMediaUrl('thumbnail') }}" alt="image">
                            </div>
                            <div class="blog__sidebar-single-blog-date">
                                <span>{{ $blog->published_at->toFormattedDayDateString() }}</span>
                            </div>
                            <div class="blog__sidebar-single-blog-content">
                                <div class="blog__sidebar-single-blog-content-top">
                                    <span>
                                        <i class="far fa-user"></i>
                                        {{ $blog->author->name }}
                                    </span>
                                    <span>
                                        <i class="far fa-folder-open"></i>
                                        {{ $blog->category->name }}
                                    </span>
                                </div>
                                <a href="{{route('show-blog', $blog->slug)}}" class="blog-heading">{{ Str::limit($blog->title, 30) }}</a>
                                <a href="{{route('show-blog', $blog->slug)}}" class="btn-one">Read More
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="blog__sidebar-single-blog">
                            <div class="blog__sidebar-single-blog-content">
                                <h3 class="blog-heading">No Blogs Found</h3>
                                <p>Currently, there are no published blogs available. Please check back later.</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-xl-8">
                    <div class="portfolio__two-pagination">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog With Sidebar Area End -->

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
