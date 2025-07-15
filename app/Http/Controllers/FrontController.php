<?php

namespace App\Http\Controllers;

use App\Models\CompanyAbout;
use App\Models\Project;

use Illuminate\Http\Request;
use App\Models\CompanyStatistic;
use App\Models\HeroSection;
use App\Models\OurPrinciple;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\Testimonial;

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
}
