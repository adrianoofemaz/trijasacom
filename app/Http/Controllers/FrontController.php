<?php

namespace App\Http\Controllers;

use App\Models\CompanyAbout;
use App\Models\CompanyService;
use App\Models\Project;
use App\Models\BlogPost;
use App\Models\NewsletterSubscriber;

use Illuminate\Http\Request;
use App\Models\CompanyStatistic;
use App\Models\HeroSection;
use App\Models\OurPrinciple;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\ProjectClient;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function index(){
        
        $testimonials = Testimonial::take(4)->get();
        $statistics = CompanyStatistic::take(4)->get();
        $products = Product::take(3)->get();
        $hero_sections = HeroSection::orderByDesc('id')->paginate(10);
        $teams = OurTeam::take(7)->get();
        return view("front.index",compact("statistics", "hero_sections","products", "teams","testimonials"));
    }

    public function team(){
        $teams = OurTeam::take(7)->get();
        $statistics = CompanyStatistic::take(4)->get();
        return view("front.team",compact( "teams","statistics"));
    }

    public function about(){
        $abouts = CompanyAbout::take(2)->get();
        return view("front.about", compact ('abouts'));
    }

    public function contact(){
        $testimonials = Testimonial::take(4)->get();
        return view("front.contact", compact('testimonials'));
    }

    public function service(){
        $services = CompanyService::all();
        $statistics = CompanyStatistic::take(4)->get();
        $projectClients = ProjectClient::take(6)->get();
        return view("front.service", compact('services', 'statistics', 'projectClients'));
    }

    public function portofolio(){
        $projects = Project::with('projectClient')
                        ->orderBy('created_at', 'desc')
                        ->paginate(12);
        
        $projectClients = ProjectClient::withCount('projects')
                                    ->having('projects_count', '>', 0)
                                    ->get();
        
        $statistics = CompanyStatistic::take(4)->get();
        
        return view("front.portofolio", compact('projects', 'projectClients', 'statistics'));
    }

    /**
     * Display blog index page
     */
    public function blog(Request $request)
    {
        // Get featured article
        $featuredPost = BlogPost::published()
                                ->featured()
                                ->latest('published_at')
                                ->first();

        // Build query for blog posts
        $query = BlogPost::published()->latest('published_at');

        // Apply category filter if provided
        if ($request->has('category')) {
            $query->byCategory($request->category);
        }

        // Get paginated posts (excluding featured post if exists)
        $posts = $query->when($featuredPost, function ($q) use ($featuredPost) {
                        return $q->where('id', '!=', $featuredPost->id);
                    })
                    ->paginate(6);

        // Get categories with their post counts for filter buttons
        $categories = [
            'all' => BlogPost::published()->count(),
            'construction' => BlogPost::published()->byCategory('construction')->count(),
            'design' => BlogPost::published()->byCategory('design')->count(),
            'interior' => BlogPost::published()->byCategory('interior')->count(),
            'tips' => BlogPost::published()->byCategory('tips')->count(),
        ];

        return view('front.blog', compact('featuredPost', 'posts', 'categories'));
    }

    /**
     * Display a specific blog post
     */
    public function blogShow($slug)
    {
        $post = BlogPost::published()
                       ->where('slug', $slug)
                       ->firstOrFail();

        // Increment view count (only once per session per post)
        $viewedPosts = session('viewed_posts', []);
        if (!in_array($post->id, $viewedPosts)) {
            $post->incrementViewCount();
            $viewedPosts[] = $post->id;
            session(['viewed_posts' => $viewedPosts]);
        }

        // Get related posts (same category, excluding current post)
        $relatedPosts = BlogPost::published()
                               ->byCategory($post->category)
                               ->where('id', '!=', $post->id)
                               ->latest('published_at')
                               ->take(3)
                               ->get();

        return view('front.blog_detail', compact('post', 'relatedPosts'));
    }

    /**
     * Handle newsletter subscription
     */
    public function newsletterSubscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:newsletter_subscribers,email',
        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Email is required and must be valid. This email might already be subscribed.'
                ], 422);
            }
            
            return back()->withErrors($validator)->withInput();
        }

        try {
            NewsletterSubscriber::create([
                'email' => $request->email,
                'is_active' => true,
            ]);

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Thank you for subscribing! Check your email for confirmation.'
                ]);
            }

            return back()->with('success', 'Thank you for subscribing to our newsletter!');

        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong. Please try again later.'
                ], 500);
            }

            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }

    /**
     * Get filtered blog posts via AJAX
     */
    public function blogFilter(Request $request)
    {
        $category = $request->get('category', 'all');
        
        $query = BlogPost::published()->latest('published_at');
        
        if ($category !== 'all') {
            $query->byCategory($category);
        }

        $posts = $query->take(12)->get();

        $html = '';
        foreach ($posts as $post) {
            $html .= view('front.partials.blog_card', compact('post'))->render();
        }

        return response()->json([
            'success' => true,
            'html' => $html,
            'count' => $posts->count()
        ]);
    }

    /**
     * Load more blog posts via AJAX
     */
    public function blogLoadMore(Request $request)
    {
        $offset = $request->get('offset', 0);
        $category = $request->get('category', 'all');
        
        $query = BlogPost::published()->latest('published_at');
        
        if ($category !== 'all') {
            $query->byCategory($category);
        }

        $posts = $query->skip($offset)->take(6)->get();

        $html = '';
        foreach ($posts as $post) {
            $html .= view('front.partials.blog_card', compact('post'))->render();
        }

        return response()->json([
            'success' => true,
            'html' => $html,
            'hasMore' => $posts->count() === 6
        ]);
    }
}