<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $abouts = About::all();

        $category = Category::all();

        $blogs = Blog::paginate(3);

        $portfolis = Portfolio::all();

        $brands = Brand::all();

        $services = Service::all();

        $faqs = Faq::all();

        $teams = Team::all();

        $contacts = Contact::all();

        $testimonials = Testimonial::all();



        return view('web.Front.home.main'
        ,compact('blogs','abouts','portfolis','category','faqs','brands','services','teams','contacts','testimonials'));
    }
}
