@extends('web.admin.layouts.master')

@section('title','services')
    
@section('content')

<div class="container px-4">

<div class="card mt-4">
    <div class="card-header">
        <div class="float-end">
            <a class="btn rounded-3 px-3 text-white" href="{{url('admin/service')}}" style="background-color:#008374">All Services</a>
        </div>
        <h4>Service</h4>
</div>
    <div class="card-body">
        @include('web.front.layout.messages')
        <form action="{{url('admin/update-service/'  . $service->id)}}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div class="col-12 mb-3">
                <label for="name" class="form-label fw-bold">Title</label>
                <input type="text" class="form-control" id="name"
                placeholder="Enter Title" name="title" value="{{$service->title}}">
            </div>
            
            <div class="col-12 mb-4">
                <label for="inputPassword4" class="form-label fw-bold">Description</label>
                <input class="form-control" id="exampleFormControlTextarea1"
                rows="3" placeholder="Enter Description" name= "description" value="{{$service->description}}"></input>
            </div>

            <div class="input-group col-4 mb-4">
                <input type="file" class="form-control fw-bold" id="inputGroupFile02" name= "image">
                <label class="input-group-text fw-bold" for="inputGroupFile02">Upload Image</label>
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