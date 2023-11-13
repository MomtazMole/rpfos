@extends('backend.master')

@section('content')

<a href="{{route('Menu.form')}}" type="button" class="btn btn-info">Add Menu</a>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">food name</th>
      <th scope="col">id</th>
      <th scope="col">price</th>
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