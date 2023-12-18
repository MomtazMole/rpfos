@extends('backend.master')

@section('content')
<div class="container">
  <h1>Category List</h1>

  <a href="{{route('Category.form')}}" class="btn btn-success">Create New Category</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Category Name</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($categories as $key=>$category)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$category->category}}</td>
        <td>{{$category->description}}</td>
        <td>
          <a href="" class="btn btn-warning">Edit</a>
          <a href="" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach



    </tbody>
  </table>
</div>
@endsection