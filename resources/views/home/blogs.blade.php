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
                                <div class="blog__one-single-blog-content-top">
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
    <style>
        /* Compact blog cards: show only 3-word titles and reduce card content height */
        .blog__one-single-blog { border-radius:14px; overflow:hidden; box-shadow:0 18px 40px rgba(11,20,30,0.04); }
        .blog__one-single-blog-image img { height:170px; object-fit:cover; width:100%; display:block }
        .blog__one-single-blog-content { padding:14px; min-height:110px; display:flex; flex-direction:column; }
        .blog-heading { font-weight:700; font-size:1.05rem; color:#071127; margin-bottom:.6rem; display:block; line-height:1.2; max-height:2.4rem; overflow:hidden; }
        .blog__one-single-blog-content .btn-three { margin-top:auto; align-self:flex-start }

        @media (min-width: 1200px) {
            .blog__one-single-blog-image img { height:190px }
            .blog__one-single-blog-content { min-height:120px }
        }
    </style>
@endsection
