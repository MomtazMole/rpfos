
@extends('backend.master')
@section('content')
<form action="{{route('Menu.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input name="food name"input type="text" class="form-control" id="exampleFormControlInput1" placeholder="write food name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput1">Type</label>
    <input name="food type"input type="text"class="form-control" id="exampleFormControlinput1">
     
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput2">Others</label>
    <input name="info"input type="text"class="form-control" id="exampleFormControlinput1">
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection