@extends('backend.master')

@section('content')

<a href="{{route('Payment.form')}}" type="button" class="btn btn-info">Add Payment</a>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No.</th>
      <th scope="col">Customer id</th>
      <th scope="col">Order id</th>
      <th scope="col">Amount</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">1</th>
      <td>abc</td>
      <td>Opq</td>
      <td>@mdo</td>
    </tr>
    
  </tbody>
</table>
</div>

@endsection