
@extends('backend.master')
@section('content')
<div class="container m-4">
<form action="{{route('Order.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Item Name</label>
    <input name="Item name"input type="text" class="form-control" id="exampleFormControlInput1" placeholder="write item name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput1">Description</label>
    <input name="Description"input type="text"class="form-control" id="exampleFormControlinput1">
     
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput2">Other Information</label>
    <input name="info"input type="text"class="form-control" id="exampleFormControlinput1">
    </select>
  </div>
  <button type="Enter" class="btn btn-success">enter</button>
</form>
</div>
@endsection