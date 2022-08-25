@extends('web.admin.layouts.master')

@section('title','Categories')
    
@section('content')

<div class="container px-4">

    <div class="card mt-4">
        <div class="card-header">
            <div class="float-end">
                <a class="btn rounded-3 px-3 text-white" href="{{url('admin/add-category')}}" style="background-color:#008374">Add Category</a>
            </div>
            <h4>All Categories</h4>

        </div>
            <div class="card-body">
                @include('web.front.layout.messages')
                <table id="myTable" class="table table-bordered table-striped data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Blogs</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$category->name}}</td>
                            <td>
                                @foreach ($category->blogs as $blog)
                                <span class="badge" style="background-color: #f85a40">{{$blog->title}} <br></span>  
                                @endforeach
                            </td>
                            <td> <a href ="{{url('admin/edit-category/' . $category->id )}}" class ="btn btn-sm px-3 text-white" style="background-color: #008374">  Edit</i> </a> </td>
                            <td>  
                                <form action="{{url('admin/delete-category/' . $category->id)}}" method="POST">
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