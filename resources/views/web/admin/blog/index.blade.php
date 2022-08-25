@extends('web.admin.layouts.master')

@section('title','Blog')
    
@section('content')

<div class="container px-4">

    <div class="card mt-4">
        <div class="card-header">
            <div class="float-end">
                <a class="btn rounded-3 px-3 text-white" href="{{url('admin/add-blog')}}" style="background-color:#008374">Add Blog</a>
            </div>
            <h4>All Blogs</h4>

        </div>
            <div class="card-body">
                @include('web.front.layout.messages')
                <table id="myTable" class="table table-bordered table-striped data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Img</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>

                            <td>{{$blog->category->name}}</td>

                            <td>{{$blog->name}}</td>

                            <td>{{$blog->title}}</td>

                            <td>
	                        <img src="{{ asset('/images/blogs/' . $blog->image) }}"
                            style="height: 100px; width: 150px;">
	                        </td>

                            <td>{{$blog->description}}</td>

                            <td>
                                <img src="{{ asset('/images/blogs/' . $blog->img) }}"
                                style="height: 100px; width: 150px;">
                                </td>

                            <td> <a href ="{{url('admin/edit-blog/' . $blog->id )}}" class ="btn btn-sm px-3 text-white" style="background-color: #008374">  Edit</i> </a> </td>

                            <td>  
                                <form action="{{url('admin/delete-blog/' . $blog->id)}}" method="POST">
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