@extends('backend.master')

@section('content')

<h1>Order List</h1>

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">phone_number</th>
        <th scope="col">email</th>
        <th scope="col">order_note</th>
        <th scope="col">total_price</th>
        <th scope="col">payment_method</th>
      </tr>
    </thead>
    <tbody>
      @foreach($order as $key=>$item)
      <tr>
        <th scope="row">{{$key+1}}</th>
        
        <td>{{$item->name}}</td>
        <td>{{$item->phone_number}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->order_note}}</td>
        <td>{{$item->total_price}}</td>
        <td>{{$item->payment_method}}</td>
          
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection