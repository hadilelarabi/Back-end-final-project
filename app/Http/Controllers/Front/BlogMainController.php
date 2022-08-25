<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogMainController extends Controller
{
    public function index(){
        
        $blogs = Blog::all();
        return view('web.front.blog.main', compact('blogs'));
    }
}
