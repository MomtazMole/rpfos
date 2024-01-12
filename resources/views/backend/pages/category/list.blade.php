@extends('backend.master')

@section('content')
<div class="container p-4">
<pre><h1>Category List                     <span><a href="{{route('Category.form')}}" class="btn btn-success">Create New Category</a></span></h1></pre>

  
  <table class="table">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Photo</th>
        <th scope="col">Category Name</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($categories as $key=>$category)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td><img height="100px" width="100px" src="{{url('uploads/'.$category->photo)}}" alt=""></td>
        <td>{{$category->category}}</td>
        <td>{{$category->description}}</td>
        <td>
          <a href="" class="btn btn-warning">Edit</a>
          <a href="{{route('delete_category',$category->id)}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach



    </tbody>
  </table>
</div>
@endsection