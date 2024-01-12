@extends('backend.master')

@section('content')

<div class="container p-4">
  <h1>Payment Details</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No.</th>
      <th scope="col">Customer id</th>
      <th scope="col">Order id</th>
      <th scope="col">Amount</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Reciept</th>
    </tr>
  </thead>
  <tbody>
  @foreach($payment as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->user_id}}</td>
      <td>{{$item->id}}</td>
      <td>{{$item->total_price}}.BDT</td>
      <td>{{$item->payment_status}}</td>
      <td><a href="{{route('Order_Details',$item->id)}}" type="button" class="btn btn-success">Order slip</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>

@endsection