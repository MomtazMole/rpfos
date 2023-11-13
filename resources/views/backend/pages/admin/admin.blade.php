@extends('backend.master')

@section('content')
<div class="container p-4">
    <h1>User List</h1>
    <a href="{{route('Admin.form')}}" class="btn btn-success">Add User</a>
</div>
<div class="container p-4">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user_data as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->photo}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->role}}</td>
                <td>{{$item->email}}</td>
                <td>
                    <a href="#" type="button" class="btn btn-primary">view</a>
                    <a type="button" class="btn btn-success">update</a>
                    <a type="button" class="btn btn-danger">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection()