@extends('backend.master')

@section('content')
<div class="container p-4">

  <form action="{{route('Category.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="">Enter Category Name:</label>
      <input required type="text" class="form-control" id="" placeholder="Enter name" name="category_name">
    </div>

    <div class="form-group">
      <label for="">Enter Category Photo</label>
      <input required type="file" class="form-control" placeholder="Enter photo" name="photo">
    </div>

    <div class="form-group">
      <label for="">Enter Category Description:</label>
      <textarea class="form-control" name="category_description" id="" cols="30" rows="10"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection