
@extends('backend.master')
@section('content')
<div class="container">
<form action="{{route('Menu.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input name="food_name"input type="text" class="form-control" id="exampleFormControlInput1" placeholder="write food name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput1">Type</label>
    <select name="food_type" class="form-control">
      <option>Select food type</option>
      <option value="asian">Asian</option>
      <option value="chinese">chinese</option>
      
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlphoto">photo</label>
    <input name="photo" type="file"class="form-control" id="exampleFormControlphoto">
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput2">Others</label>
    <input name="info"input type="text"class="form-control" id="exampleFormControlinput1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection