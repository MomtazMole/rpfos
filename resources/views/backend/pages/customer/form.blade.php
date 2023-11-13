
@extends('backend.master')
@section('content')
<div class="container m-4">
<form action="{{route('Customer.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Customer Name</label>
    <input name="customer name"input type="text" class="form-control" id="exampleFormControlInput1" placeholder="write customer name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput1">Address</label>
    <input name="address"input type="text"class="form-control" id="exampleFormControlinput1">
     
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput2">Other Information</label>
    <input name="info"input type="text"class="form-control" id="exampleFormControlinput1">
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection