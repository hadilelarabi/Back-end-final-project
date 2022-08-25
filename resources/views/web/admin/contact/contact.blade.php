
@extends('web.admin.layouts.master')

@section('title','Caontact-Us')
    
@section('content')

<div class="container px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Caontact-Us</h4>
           
        </div>
            <div class="card-body">
        @include('web.front.layout.messages')
        <form action="add-contact" method="POST">

            @csrf
            <div class="col-12 mb-3">
                <label for="name" class="form-label fw-bold">Name</label>
                <input class="form-control" type="text" class="form-control" id="name"
                placeholder="Enter Name" name="name">
            </div>
            
            <div class="col-12 mb-4">
                <label for="inputPassword4" class="form-label fw-bold">Email</label>
                <input class="form-control" type="email"
                placeholder="Enter Email" name= "email">
            </div>

            <div class="col-12 mb-4">
                <label for="inputPassword4" class="form-label fw-bold">Subject</label>
                <input class="form-control" type="text"
                placeholder="Enter Subject" name= "subject">
            </div>

            <div class="col-12 mb-4">
                <label for="inputPassword4" class="form-label fw-bold">Message</label>
                <input class="form-control" type="text"
                placeholder="Enter Message" name= "message">
            </div>
        

    
    </div>
</div>  

</div>      
    
@endsection
