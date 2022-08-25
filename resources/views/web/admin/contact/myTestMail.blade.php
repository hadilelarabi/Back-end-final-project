@extends('web.admin.layouts.master')

@section('title','Caontact')
    
@section('content')

<div class="container px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>{{ $details['title'] }}</h4>
            <p>{{ $details['body'] }}</p>
                <p>Thank you</p>

        </div>
            <div class="card-body">
                @include('web.front.layout.messages')

            
            </div>
        </div>  

</div>      
    
@endsection
