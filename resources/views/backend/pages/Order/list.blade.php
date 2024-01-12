@extends('backend.master')

@section('content')


<div class="container p-4">
  <h1>Order List</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Sl No.</th>
        <th scope="col">Customer id</th>
        <th scope="col">Order id</th>
        <th scope="col">Amount</th>
        <th scope="col">Payment Method</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($order as $key=>$item)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$item->user_id}}</td>
        <td>{{$item->id}}</td>
        <td>{{$item->total_price}}.BDT</td>
        <td>{{$item->payment_status}}</td>
       
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection