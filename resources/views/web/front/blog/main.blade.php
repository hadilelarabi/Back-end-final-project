@extends('web.front.master')

@section('title','Blog')

@section('section-hero')
   
 
@endsection

@section('content')
    

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Blog</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{url('/home')}}">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
          <div class="container" data-aos="fade-up">
    
            <div class="row gy-4 posts-list">
              @foreach ($blogs as $blog)
                  
              
              <div class="col-xl-4 col-md-6">
                <article>
    
                  <div class="post-img">
                    <img src="{{ asset('/images/blogs/' . $blog->image) }}" alt="" class="img-fluid">
                  </div>
    
                  <p class="post-category">{{$blog->category->name}}</p>
    
                  <h2 class="title">
                    <a href="{{url('blog')}}">{{$blog->title}}</a>
                  </h2>
    
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('/images/blogs/' . $blog->image) }}" alt="" class="img-fluid post-author-img flex-shrink-0">
                    <div class="post-meta">
                      <p class="post-author-list">{{$blog->description}}</p>
                      <p class="post-date">
                        <time datetime="2022-01-01">Jan 1, 2022</time>
                      </p>
                    </div>
                  </div>
    
                </article>
              </div>
              @endforeach
              <!-- End post list item -->
    
            </div><!-- End blog posts list -->
    
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div><!-- End blog pagination -->
    
          </div>
        </section><!-- End Blog Section -->

@endsection
    
