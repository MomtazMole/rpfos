@extends('backend.master')

@section('content')

<a href="{{route('Customer.form')}}" type="button" class="btn btn-info">Add Customer</a>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">customer name</th>
      <th scope="col">id</th>
      <th scope="col">contact number</th>
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