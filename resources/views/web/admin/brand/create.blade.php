@extends('web.admin.layouts.master')

@section('title','Brands')
    
@section('content')

<div class="container px-4">

    <div class="card mt-4">
        <div class="card-header">
            <div class="float-end">
                <a class="btn rounded-3 px-3 text-white" href="{{url('admin/brand')}}" style="background-color:#008374">All Brands</a>
            </div>
            <h4>Add Brand</h4>
        </div>
            <div class="card-body">
                @include('web.front.layout.messages')
                <form action="{{url('admin/add-brand')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group col-4 mb-3">
                        <input type="file" class="form-control fw-bold" name= "image">
                        <label class="input-group-text fw-bold">Upload Image</label>
                  </div>
                    <button class="btn rounded-3 px-3 text-white" style="background-color:#f85a40">Save</button>
                </form>
            </div>
    </div>  

</div>      
    
@endsection