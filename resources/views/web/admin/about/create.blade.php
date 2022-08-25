@extends('web.admin.layouts.master')

@section('title','About Us')
    
@section('content')

<div class="container px-4">

<div class="card mt-4">
    <div class="card-header">
        <div class="float-end">
            <a class="btn rounded-3 px-3 text-white" href="{{url('admin/about')}}" style="background-color:#008374">View All</a>
        </div>
        <h4>About</h4>
</div>
    <div class="card-body">
        @include('web.front.layout.messages')
        <form action="{{url('admin/add-about')}}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="col-12 mb-3">
                <label for="name" class="form-label fw-bold">Title</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Title" name="title">
            </div>
            
            <div class="col-12 mb-4">
                <label for="inputPassword4" class="form-label fw-bold">Description</label>
                <input class="form-control" id="exampleFormControlTextarea1" rows="3"
                 placeholder="Enter Description" name= "description"></input>
            </div>

            <div class="input-group col-4 mb-4">
                  <input type="file" class="form-control fw-bold" required  name= "image">
                  <label class="input-group-text fw-bold">Upload Image</label>
            </div>

            {{-- <div class="mb-3">
                <iframe width="420" height="315" src="//www.youtube.com/embed/BstTBw6BLrE" frameborder="0" allowfullscreen></iframe>
            </div> --}}
            <button class="btn rounded-3 px-3 text-white" style="background-color:#f85a40">Save</button>
        </form>
        </div>
    </div>  
</div>      
    
@endsection