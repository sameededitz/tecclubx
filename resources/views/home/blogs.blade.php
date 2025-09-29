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
                @forelse ($blogs as $blog)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog__one-single-blog">
                            <div class="blog__one-single-blog-image">
                                <img src="{{ $blog->getFirstMediaUrl('thumbnail') }}" alt="image">
                            </div>
                            <div class="blog__one-single-blog-date">
                                <span class="date">{{ $blog->published_at->format('d') }}</span>
                                <span class="month">{{ $blog->published_at->format('M') }}</span>
                            </div>
                            <div class="blog__one-single-blog-content">
                                <div class="blog__one-single-blog-content-top" style="padding: 17px;">
                                    <span>
                                        <i class="fas fa-user"></i>
                                        {{ $blog->author->name }}
                                    </span>
                                </div>
                                <a href="{{ route('show-blog', $blog->slug) }}" class="blog-heading">
                                    {{ Str::words($blog->title, 3, '...') }}
                                </a>
                                <a href="{{ route('show-blog', $blog->slug) }}" class="btn-three">Read More
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="blog__sidebar-single-blog">
                        <div class="blog__sidebar-single-blog-content">
                            <h3 class="blog-heading">No Blogs Found</h3>
                            <p>Currently, there are no published blogs available. Please check back later.</p>
                        </div>
                    </div>
            </div>
            @endforelse
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

@endsection
@section('home_scripts')
@endsection

@section('styles')
@endsection
