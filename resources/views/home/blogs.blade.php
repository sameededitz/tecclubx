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
        /* Show full image and compact overlay text box for premium cards */
        .blog__one-single-blog { border-radius:14px; overflow:visible; box-shadow:0 18px 40px rgba(11,20,30,0.04); position:relative; }

        /* Image area: keep full image visible (contain) with a soft bg */
        .blog__one-single-blog-image { background:#f6f9fc; display:flex; align-items:center; justify-content:center; padding:12px; border-top-left-radius:14px; border-top-right-radius:14px; }
        .blog__one-single-blog-image img { width:100%; height:auto; max-height:240px; object-fit:contain; display:block; border-radius:10px; }

        /* Compact overlay text box sitting on the lower part of the image */
        .blog__one-single-blog-content {
            position:absolute;
            left:18px;
            right:18px;
            bottom:14px;
            background: rgba(255,255,255,0.98);
            border-radius:12px;
            padding:10px 12px;
            min-height:62px;
            display:flex;
            flex-direction:column;
            box-shadow: 0 12px 30px rgba(11,20,30,0.06);
        }

        .blog__one-single-blog-content .blog__one-single-blog-content-top { font-size:0.86rem; color:#6b7a86; margin-bottom:6px }
        .blog-heading { font-weight:700; font-size:1rem; color:#071127; margin:0 0 6px; display:block; line-height:1.2; overflow:hidden; }
        .blog__one-single-blog-content .btn-three { margin-top:auto; align-self:flex-start; padding:.35rem .6rem; font-size:.9rem }

        /* When stacked on small screens, make content static below image */
        @media (max-width: 767px) {
            .blog__one-single-blog { overflow:hidden }
            .blog__one-single-blog-content { position:static; margin:0; padding:12px; min-height:auto; box-shadow:none; border-bottom-left-radius:14px; border-bottom-right-radius:14px }
            .blog__one-single-blog-image img { max-height:300px }
        }
    </style>
@endsection
