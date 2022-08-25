@extends('web.admin.layouts.master')

@section('title','Brands')
    
@section('content')

<div class="container px-4">

    <div class="card mt-4">
        <div class="card-header">
            <div class="float-end">
                <a class="btn rounded-3 px-3 text-white" href="{{url('admin/brand')}}" style="background-color:#008374">All Brands</a>
            </div>
            <h4>Edit Brand</h4>
        </div>
            <div class="card-body">
                @include('web.front.layout.messages')
                <form action="{{url('admin/update-brand/' . $brand->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="input-group col-4 mb-3">
                        <input type="file" class="form-control fw-bold" name= "image" value="{{$brand->image}}">
                        <label class="input-group-text fw-bold">Upload Image</label>
                  </div>
                  
                    <button class="btn rounded-3 px-3 text-white" style="background-color:#f85a40">Update</button>
                </form>
            </div>
    </div>  

</div>      
    
@endsection