@extends('web.admin.layouts.master')

@section('title','Testimonial')
    
@section('content')

<div class="container px-4">

    <div class="card mt-4">
        <div class="card-header">
            <div class="float-end">
                <a class="btn rounded-3 px-3 text-white" href="{{url('admin/add-testimonial')}}" style="background-color:#008374">Add</a>
            </div>
            <h4>All Testimonials</h4>

        </div>
            <div class="card-body">
                @include('web.front.layout.messages')
                <table id="myTable" class="table table-bordered table-striped data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonials as $testimonial)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$testimonial->name}}</td>
                            <td>{{$testimonial->title}}</td>

                            <td>
	                        <img src="{{ asset('/images/testimonials/' . $testimonial->image) }}"
                            style="height: 100px; width: 150px;">
	                        </td>

                            <td>{{$testimonial->description}}</td>
                            <td> <a href ="{{url('admin/edit-testimonial/' . $testimonial->id )}}" class ="btn btn-sm px-3 text-white" style="background-color: #008374">  Edit</i> </a> </td>

                            <td>  
                                <form action="{{url('admin/delete-testimonial/' . $testimonial->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class ="btn btn-sm text-white" type="submit" style="background-color: #f85a40">
                                        <i class="bi bi-trash3"> Delete</i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>  

</div>      
    
@endsection

{{-- <a class ="btn btn-sm px-3 text-white" style="background-color: #f85a40" href =""> Delete</i> </a> --}}