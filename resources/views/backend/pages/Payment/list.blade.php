@extends('backend.master')

@section('content')
<h1>Payment Details</h1>

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
      <td>07</td>
      <td>05</td>
      <td>1020.BDT</td>
      <td>COD</td>
      <td>Paid</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>10</td>
      <td>08</td>
      <td>1240.BDT</td>
      <td>PO</td>
      <td>Paid</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>10</td>
      <td>09</td>
      <td>1360.BDT</td>
      <td>COD</td>
      <td>Paid</td>
    </tr>
  </tbody>
</table>
</div>

@endsection