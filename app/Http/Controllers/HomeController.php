<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\SectionImages;
use App\Models\Tag;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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

    public function caseStudy()
    {
        return view('home.case-study');
    }

    public function developmentProcess()
    {
        return view('home.development-process');
    }

    public function privacyPolicy()
    {
        return view('home.privacy-policy');
    }

    public function termsOfService()
    {
        return view('home.terms-of-service');
    }

    public function securityPolicy()
    {
        return view('home.security-policy');
    }

    public function ourTeam()
    {
        return view('home.our-team');
    }

    public function nda()
    {
        return view('home.nda');
    }

    public function ndaRequest(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'position' => 'required|string|max:255',
            'project_type' => 'required|string',
            'project_description' => 'required|string|min:50',
            'urgency' => 'required|string',
            'terms_agree' => 'required|accepted',
        ], [
            'company_name.required' => 'Company name is required.',
            'contact_person.required' => 'Contact person name is required.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'position.required' => 'Your position/title is required.',
            'project_type.required' => 'Please select a project type.',
            'project_description.required' => 'Project description is required.',
            'project_description.min' => 'Project description must be at least 50 characters.',
            'urgency.required' => 'Please select urgency level.',
            'terms_agree.accepted' => 'You must agree to the terms and conditions.',
        ]);

        try {
            // Send email notification to admin
            $adminEmail = 'info@tecclubx.com'; // Change this to your email
            $subject = 'New NDA Request from ' . $validated['company_name'];
            
            $message = "New NDA Request Details:\n\n";
            $message .= "Company: " . $validated['company_name'] . "\n";
            $message .= "Contact Person: " . $validated['contact_person'] . "\n";
            $message .= "Email: " . $validated['email'] . "\n";
            $message .= "Phone: " . ($validated['phone'] ?? 'Not provided') . "\n";
            $message .= "Position: " . $validated['position'] . "\n";
            $message .= "Project Type: " . ucwords(str_replace('_', ' ', $validated['project_type'])) . "\n";
            $message .= "Urgency: " . ucwords(str_replace('_', ' ', $validated['urgency'])) . "\n\n";
            $message .= "Project Description:\n" . $validated['project_description'] . "\n\n";
            $message .= "Submitted: " . now()->format('Y-m-d H:i:s') . "\n";
            $message .= "From IP: " . request()->ip();
            
            // Using PHP mail function (basic)
            $headers = "From: noreply@tecclubx.com\r\n";
            $headers .= "Reply-To: " . $validated['email'] . "\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
            
            mail($adminEmail, $subject, $message, $headers);
            
            return redirect()->back()->with('success', 
                'Your NDA request has been submitted successfully! We will send you a customized NDA within 24 hours to your email address: ' . $validated['email']
            );
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 
                'There was an error processing your request. Please try again or contact us directly.'
            )->withInput();
        }
    }

    public function downloadNdaTemplate()
    {
        try {
            // Generate PDF from the template
            $pdf = Pdf::loadView('templates.nda-pdf-template');
            
            // Set PDF options for better formatting
            $pdf->setPaper('A4', 'portrait');
            $pdf->setOptions([
                'isHtml5ParserEnabled' => true,
                'isRemoteEnabled' => true,
                'defaultFont' => 'DejaVu Sans'
            ]);
            
            // Generate filename with current date
            $filename = 'TecClub-NDA-Template-' . date('Y-m-d') . '.pdf';
            
            // Download the PDF
            return $pdf->download($filename);
            
        } catch (\Exception $e) {
            // Fallback to HTML version if PDF generation fails
            $filePath = public_path('assets/documents/standard-nda-template.html');
            
            if (file_exists($filePath)) {
                return response()->download($filePath, 'TecClub-NDA-Template.html', [
                    'Content-Type' => 'text/html',
                ]);
            }
            
            return redirect()->back()->with('error', 'NDA template file not found. Please contact us for assistance.');
        }
    }
    
    public function portfolio()
    {
        $portfolios = Portfolio::query()->paginate(6);
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
            ->paginate(6);

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
