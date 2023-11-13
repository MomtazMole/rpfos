
@extends('backend.master')
@section('content')
<form action="{{route('Payment.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Customer Name</label>
    <input name="Customer name"input type="text" class="form-control" id="exampleFormControlInput1" placeholder="write customer name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput1">Amount</label>
    <input name="Amount"input type="text"class="form-control" id="exampleFormControlinput1">
     
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlinput2">Status</label>
    <input name="info"input type="text"class="form-control" id="exampleFormControlinput1">
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection