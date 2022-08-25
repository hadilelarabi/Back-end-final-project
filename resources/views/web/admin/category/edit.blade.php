@extends('web.admin.layouts.master')

@section('title','Categories')
    
@section('content')

<div class="container px-4">

    <div class="card mt-4">
        <div class="card-header">
            <div class="float-end">
                <a class="btn rounded-3 px-3 text-white" href="{{url('admin/category')}}" style="background-color:#008374">All Categories</a>
            </div>
            <h4>Edit Category</h4>
        </div>
            <div class="card-body">
                @include('web.front.layout.messages')
                <form action="{{url('admin/update-category/' . $category->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Category Name</label>
                        <input type="text" name="name" class="form-control" value="{{$category->name}}">
                    </div>
                    <button class="btn rounded-3 px-3 text-white" style="background-color:#f85a40">Update</button>
                </form>
            </div>
    </div>  

</div>      
    
@endsection