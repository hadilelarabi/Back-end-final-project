@extends('web.admin.layouts.master')

@section('title','Team')
    
@section('content')

<div class="container px-4">

    <div class="card mt-4">
        <div class="card-header">
            <div class="float-end">
                <a class="btn rounded-3 px-3 text-white" href="{{url('admin/add-team')}}" style="background-color:#008374">Add Team</a>
            </div>
            <h4>All Teams</h4>

        </div>
            <div class="card-body">
                @include('web.front.layout.messages')
                <table id="myTable" class="table table-bordered table-striped data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Position</th>

                            <th>Twitter</th>
                            <th>Facebook</th>
                            <th>Instagram</th>
                            <th>Linkedin</th>

                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$team->name}}</td>
                            <td>{{$team->position}}</td>
                            
                            {{-- icons --}}
                            <td>{{$team->twitter}}</td>
                            <td>{{$team->facebook}}</td>
                            <td>{{$team->instagram}}</td>
                            <td>{{$team->linkedin}}</td>

                            <td>
	                        <img src="{{ asset('/images/teams/' . $team->image) }}"
                            style="height: 100px; width: 150px;">
	                        </td>

                            <td> <a href ="{{url('admin/edit-team/' . $team->id )}}" class ="btn btn-sm px-3 text-white" style="background-color: #008374">  Edit</i> </a> </td>

                            <td>  
                                <form action="{{url('admin/delete-team/' . $team->id)}}" method="POST">
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
