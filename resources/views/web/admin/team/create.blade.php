@extends('web.admin.layouts.master')

@section('title','Team')
    
@section('content')

<div class="container px-4">

<div class="card mt-4">
    <div class="card-header">
        <div class="float-end">
            <a class="btn rounded-3 px-3 text-white" href="{{url('admin/team')}}" style="background-color:#008374">View All</a>
        </div>
        <h4>Team</h4>
</div>
    <div class="card-body">
        @include('web.front.layout.messages')
        <form class="row g-2" action="{{url('admin/add-team')}}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="col-12 mb-3">
                <label for="name" class="form-label fw-bold">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Title" name="name">
            </div>

            <div class="col-12 mb-3">
                <label for="name" class="form-label fw-bold">Position</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Title" name="position">
            </div>
            
            <div class="input-group col-4 mb-4">
                  <input type="file" class="form-control fw-bold" required  name= "image">
                  <label class="input-group-text fw-bold">Upload Image</label>
            </div>

            <div class="col-md-6 mb-3">
                <label for="name" class="form-label fw-bold">Twitter</label>
                <input type="text" class="form-control fw-bold" name= "twitter">
            </div>

            <div class="col-md-6 mb-3">
                <label  for="name" class="form-label fw-bold">Facebook</label>
                <input type="text" class="form-control fw-bold" name= "facebook">
            </div>

            <div class="col-md-6 mb-3">
                <label  for="name" class="form-label fw-bold">Instagram</label>
                <input type="text" class="form-control fw-bold" name= "instagram">
            </div>

            <div class="col-md-6 mb-3">
                <label  for="name" class="form-label fw-bold">Linledin</label>
                <input type="text" class="form-control fw-bold" name= "linkedin">
            </div>
        <div class=" mb-3">
            <button class="btn rounded-3 px-3 text-white" style="background-color:#f85a40">Save</button>
        </div>
        </form>
        </div>
    </div>  
</div>      
    
@endsection