@extends('backend.master')
@section('content')
<div class="container">
  <form action="{{route('Menu.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Name</label>
      <input name="food_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="write food name">
    </div>
    <div class="form-group">
      <label for="exampleFormControlinput1">Category</label>
      <select name="food_type" class="form-control">
        <option>Select food Category</option>
        @foreach($category as $item)
        <option value="{{$item->id}}">{{$item->category}}</option>
        @endforeach

      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlphoto">Photo</label>
      <input name="photo" type="file" class="form-control" id="exampleFormControlphoto">
    </div>
    <div class="form-group">
      <label for="exampleFormControlinput2">Price</label>
      <input name="price" type="number" class="form-control" id="exampleFormControlinput1">
    </div>
    <div class="form-group">
      <label for="exampleFormControlinput2">Description</label>
      <input name="description" type="text" class="form-control" id="exampleFormControlinput1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection