<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogHomeController extends Controller
{
    public function index(){
        
        return view('web.front.blog.index');
    }
}
