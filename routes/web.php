<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Front\BlogHomeController;
use App\Http\Controllers\Front\BlogMainController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Front\HomeController; // =================


Route::get('/', function () {
    return redirect()->route('home.index'); 
});


Route::get('blog',[BlogHomeController::class,'index'])->name('blog.index');

Route::get('blog_main',[BlogMainController::class,'index'])->name('blog.main');


Route::get('/home',[App\Http\Controllers\Front\HomeController::class,'index'])->name('home.index');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Panel

Route::prefix('admin')->middleware(['auth','is.admin'])->group(function(){

Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index'])->name('home');

// ===========category routes===============

Route::get('category',[CategoryController::class,'index']);

Route::get('add-category',[CategoryController::class,'create']);

Route::post('add-category',[CategoryController::class,'store']);

Route::get('edit-category/{category}',[CategoryController::class,'edit']);

Route::put('update-category/{category}',[CategoryController::class,'update']);

Route::delete('delete-category/{category}',[CategoryController::class,'destroy']);

// Route::resource('/category', CategoryController::class); // php artisan route:list 

//========== about routes============

Route::get('about',[AboutController::class,'index']);

Route::get('add-about',[AboutController::class,'create']);

Route::post('add-about',[AboutController::class,'store']);

Route::get('edit-about/{about}',[AboutController::class,'edit']);

Route::put('update-about/{about}',[AboutController::class,'update']);

Route::delete('delete-about/{about}',[AboutController::class,'destroy']);

// Route::resource('/about', AboutController::class);

// =================brand route==================

Route::get('brand',[BrandController::class,'index']);

Route::get('add-brand',[BrandController::class,'create']);

Route::post('add-brand',[BrandController::class,'store']);

Route::get('edit-brand/{brand}',[BrandController::class,'edit']);

Route::put('update-brand/{brand}',[BrandController::class,'update']);

Route::delete('delete-brand/{brand}',[BrandController::class,'destroy']);

// Route::resource('/brand', BrandController::class);


// ==================  Service Route=======================

Route::get('service',[ServiceController::class,'index']);

Route::get('add-service',[ServiceController::class,'create']);

Route::post('add-service',[ServiceController::class,'store']);

Route::get('edit-service/{service}',[ServiceController::class,'edit']);

Route::put('update-service/{service}',[ServiceController::class,'update']);

Route::delete('delete-service/{service}',[ServiceController::class,'destroy']);

// Route::resource('/service', ServiceController::class);

// =================== testimonial Routes

Route::get('testimonial',[TestimonialController::class,'index']);

Route::get('add-testimonial',[TestimonialController::class,'create']);

Route::post('add-testimonial',[TestimonialController::class,'store']);

Route::get('edit-testimonial/{testimonial}',[TestimonialController::class,'edit']);

Route::put('update-testimonial/{testimonial}',[TestimonialController::class,'update']);

Route::delete('delete-testimonial/{testimonial}',[TestimonialController::class,'destroy']);

// Route::resource('/testimonial', TestimonialController::class);

// ================= Team Routes====================

Route::get('team',[TeamController::class,'index']);

Route::get('add-team',[TeamController::class,'create']);

Route::post('add-team',[TeamController::class,'store']);

Route::get('edit-team/{team}',[TeamController::class,'edit']);

Route::put('update-team/{team}',[TeamController::class,'update']);

Route::delete('delete-team/{team}',[TeamController::class,'destroy']);

// Route::resource('/team', TeamController::class);


// ================= FAQ Routes====================

Route::get('faq',[FaqController::class,'index']);

Route::get('add-faq',[FaqController::class,'create']);

Route::post('add-faq',[FaqController::class,'store']);

Route::get('edit-faq/{faq}',[FaqController::class,'edit']);

Route::put('update-faq/{faq}',[FaqController::class,'update']);

Route::delete('delete-faq/{faq}',[FaqController::class,'destroy']);

// Route::resource('/faq', FaqController::class);

// =============Blog route ====================

Route::get('blog',[BlogController::class,'index']);

Route::get('add-blog',[BlogController::class,'create']);

Route::post('add-blog',[BlogController::class,'store']);

Route::get('edit-blog/{blog}',[BlogController::class,'edit']);

Route::put('update-blog/{blog}',[BlogController::class,'update']);

Route::delete('delete-blog/{blog}',[BlogController::class,'destroy']);

// Route::resource('/blog', BlogController::class);

// =============Portfolio route ====================

Route::get('portfolio',[PortfolioController::class,'index']);

Route::get('add-portfolio',[PortfolioController::class,'create']);

Route::post('add-portfolio',[PortfolioController::class,'store']);

Route::get('edit-portfolio/{portfolio}',[PortfolioController::class,'edit']);

Route::put('update-portfolio/{portfolio}',[PortfolioController::class,'update']);

Route::delete('delete-portfolio/{portfolio}',[PortfolioController::class,'destroy']);

// Route::resource('/portfolio', PortfolioController::class);


// =============Contact route ====================

Route::get('contact', [ContactController::class, 'index']);

Route::post('add-contact', [ContactController::class, 'save'])->name('contact.store');

});



