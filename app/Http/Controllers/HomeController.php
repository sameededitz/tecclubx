<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\SectionImages;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $bannerimg = SectionImages::where('section', 'banner')->first();
        $sliderimg = SectionImages::where('section', 'slider')->get();
        $aboutImages = SectionImages::where('section', 'about')->get();
        $whychoose = SectionImages::where('section', 'why_choose')->first();
        $recentPosts = Portfolio::latest()->take(5)->get();
        $recentblogs = Post::where('is_published', true)->latest()->take(3)->get();
        return view('home.home', compact('bannerimg', 'sliderimg', 'aboutImages', 'whychoose', 'recentPosts', 'recentblogs'));
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function about()
    {
        $sliderimg = SectionImages::where('section', 'slider')->get();
        $aboutImages = SectionImages::where('section', 'about')->get();
        return view('home.about', compact('aboutImages', 'sliderimg'));
    }

    public function service()
    {
        return view('home.services');
    }

    public function faq()
    {
        return view('home.faqs');
    }

    public function testimonial()
    {
        return view('home.testimonial');
    }
    public function portfolio()
    {
        $portfolios = Portfolio::paginate(4);
        return view('home.portfolio', compact('portfolios'));
    }

    public function viewPortfolio(Portfolio $portfolio)
    {
        return view('home.show-portfolio', compact('portfolio'));
    }

    public function blogs(Request $request)
    {
        $query = Post::query();

        if ($request->has('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        if ($request->has('tag')) {
            $query->whereHas('tags', function ($q) use ($request) {
                $q->where('tags.slug', $request->tag);
            });
        }

        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('body', 'like', '%' . $request->search . '%');
        }

        // Get only published posts and order by latest
        $blogs = $query->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->paginate(4);

        $categories = Category::all();
        $tags = Tag::all();
        $recentPosts = Post::where('is_published', true)->latest()->take(3)->get();

        return view('home.blogs', compact('blogs', 'categories', 'tags', 'recentPosts'));
    }

    public function showBlog(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $recentPosts = Post::where('is_published', true)->latest()->take(3)->get();

        return view('home.show-blog', compact('post', 'categories', 'tags', 'recentPosts'));
    }
}
