@extends('web.admin.layouts.master')

@section('title','FAQ')
    
@section('content')

<div class="container px-4">

<div class="card mt-4">
    <div class="card-header">
        <div class="float-end">
            <a class="btn rounded-3 px-3 text-white" href="{{url('admin/faq')}}" style="background-color:#008374">All FAQ</a>
        </div>
        <h4>FAQ</h4>
</div>
    <div class="card-body">
        @include('web.front.layout.messages')
        <form action="{{url('admin/add-faq')}}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="col-12 mb-3">
                <label for="name" class="form-label fw-bold">Question</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Question" name="ques">
            </div>
            
            <div class="col-12 mb-4">
                <label for="inputPassword4" class="form-label fw-bold">Answer</label>
                <input class="form-control" id="exampleFormControlTextarea1" rows="3"
                 placeholder="Enter Answer" name= "answer">
            </div>
            <button class="btn rounded-3 px-3 text-white" style="background-color:#f85a40">Save</button>
        </form>
        </div>
    </div>  
</div>      
    
@endsection