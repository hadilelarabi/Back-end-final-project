@extends('web.admin.layouts.master')

@section('title','Portfolio')
    
@section('content')

<div class="container px-4">

<div class="card mt-4">
    <div class="card-header">
        <div class="float-end">
            <a class="btn rounded-3 px-3 text-white" href="{{url('admin/portfolio')}}" style="background-color:#008374">All Portfolios</a>
        </div>
        <h4>Portfolio</h4>
</div>
    <div class="card-body">
        @include('web.front.layout.messages')
        <form action="{{url('admin/update-portfolio/'  . $portfolio->id)}}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div class="col-12 mb-3">
                <label for="name" class="form-label fw-bold">Name</label>
                <input type="text" class="form-control" id="name"
                 placeholder="Enter Name" name="name"  value="{{$portfolio->name}}">
            </div>

            <div class="col-12 mb-3">
                <label for="name" class="form-label fw-bold">Title</label>
                <input type="text" class="form-control" id="name"
                placeholder="Enter Title" name="title" value="{{$portfolio->title}}">
            </div>
            
            <div class="col-12 mb-4">
                <label for="inputPassword4" class="form-label fw-bold">Description</label>
                <input class="form-control" id="exampleFormControlTextarea1"
                rows="3" placeholder="Enter Description" name= "description" value="{{$portfolio->description}}">
            </div>

            <div class="input-group col-4 mb-4">
                <input type="file" class="form-control fw-bold" id="inputGroupFile02" name= "image">
                <label class="input-group-text fw-bold" for="inputGroupFile02">Upload Image</label>
            </div>

            <div class="form-group mb-3">
                <label for="name" class="form-label fw-bold">Category</label>
                <select class="form-select" name="category_id">
                 @foreach ($categories as $category)
                 <option value="{{$category->id}}" @if($portfolio->category_id == $category->id) selected
                     @endif>{{$category->name}}</option>
                 @endforeach
                </select>
                </div>

            <button class="btn rounded-3 px-3 text-white" style="background-color:#f85a40">Save</button>
        </form>
        </div>
    </div>  
</div>      
    
@endsection