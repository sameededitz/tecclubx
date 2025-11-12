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
            <div class="row gy-4 flex-wrap justify-content-center">
                @forelse ($blogs as $blog)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="blog__one-single-blog">
                            <div class="blog__one-single-blog-image">
                                <img src="{{ $blog->getFirstMediaUrl('thumbnail') }}" alt="{{ $blog->title }}">
                            </div>
                            <div class="blog__one-single-blog-date">
                                <span class="date">{{ $blog->published_at->format('d') }}</span>
                                <span class="month">{{ $blog->published_at->format('M') }}</span>
                            </div>
                            <div class="blog__one-single-blog-content" style="padding: 17px;">
                                <div class="blog__one-single-blog-content-top">
                                    <span>
                                        <i class="fas fa-user"></i>
                                        {{ $blog->author->name }}
                                    </span>
                                </div>
                                <a href="{{ route('show-blog', $blog->slug) }}" class="blog-heading">
                                    {{ Str::words($blog->title, 5, '...') }}
                                </a>
                                <a href="{{ route('show-blog', $blog->slug) }}" class="btn-three">Read More
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="blog__sidebar-single-blog text-center">
                            <div class="blog__sidebar-single-blog-content">
                                <h3 class="blog-heading">No Blogs Found</h3>
                                <p>Currently, there are no published blogs available. Please check back later.</p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="row mt-4">
                <div class="col-12">
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
        /* Ensure author line and title do not add extra bottom spacing */
        .blog__one-single-blog-content-top { margin-bottom: 0 !important; }
        .blog-heading { margin-bottom: 0 !important; display: block; }
        
        /* Blog Responsive Fixes */
        .blog__two .container {
            overflow-x: hidden;
        }
        
        .blog__one-single-blog {
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }
        
        .blog__one-single-blog:hover {
            transform: translateY(-5px);
        }
        
        /* Fix for 50% screen width and responsive issues */
        @media (max-width: 1400px) {
            .blog__two .row.gy-4 {
                gap: 20px;
            }
        }
        
        @media (max-width: 1200px) {
            .blog__two .container {
                padding-left: 15px;
                padding-right: 15px;
            }
            
            .blog__one-single-blog {
                margin-bottom: 25px;
            }
        }
        
        /* Specific fix for medium screens (50% width issue) */
        @media (min-width: 768px) and (max-width: 1199px) {
            .blog__two .col-xl-4 {
                flex: 0 0 50%;
                max-width: 50%;
            }
            
            .blog__one-single-blog-content {
                padding: 15px !important;
            }
            
            .blog__one-single-blog-image img {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }
        }
        
        @media (max-width: 992px) {
            .blog__two .col-xl-4.col-lg-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        
        @media (max-width: 768px) {
            .blog__two .col-xl-4.col-lg-6.col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }
            
            .blog__one-single-blog {
                margin-bottom: 20px;
                max-width: 100%;
            }
            
            .blog__one-single-blog-content {
                padding: 12px !important;
            }
        }
        
        @media (max-width: 576px) {
            .blog__two {
                padding: 40px 0;
            }
            
            .blog__one-single-blog-content {
                padding: 10px !important;
            }
            
            .blog-heading {
                font-size: 1.1rem;
                line-height: 1.4;
            }
        }
        
        /* Fix for pagination */
        .portfolio__two-pagination {
            margin-top: 20px;
            text-align: center;
        }
        
        .portfolio__two-pagination .pagination {
            justify-content: center;
        }
        
        /* Better spacing for blog cards */
        .blog__one-single-blog-image {
            overflow: hidden;
            border-radius: 8px 8px 0 0;
        }
        
        .blog__one-single-blog-image img {
            transition: transform 0.3s ease;
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .blog__one-single-blog:hover .blog__one-single-blog-image img {
            transform: scale(1.05);
        }
        
        /* Responsive image heights */
        @media (max-width: 992px) {
            .blog__one-single-blog-image img {
                height: 220px;
            }
        }
        
        @media (max-width: 768px) {
            .blog__one-single-blog-image img {
                height: 200px;
            }
        }
    </style>
@endsection
