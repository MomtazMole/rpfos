@extends('backend.master')

@section('content')
<div>
 <h1> Menu List</h1>
<a href="{{route('Menu.form')}}" type="button" class="btn btn-info">Add Menu</a>
</div>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">photo</th>
      <th scope="col">food name</th>
      <th scope="col">type</th>
      <th scope="col">price</th>
              <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($Menu as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>
                     <img width="20%" src="{{url('uploads/'.$item->Photo)}}" alt="">
                </td>
                <td>{{$item->name}}</td>
                <td>{{$item->type}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->photo}}</td>
                <td>
                    <a href="{{route('Menu.view',$item->id)}}" type="button" class="btn btn-primary">view</a>
                    <a href="{{route('Menu.edit',$item->id)}}" type="button" class="btn btn-success">update</a>
                    <a href="{{route('Menu.delete',$item->id)}}" type="button" class="btn btn-danger">delete</a>
                </td>
            </tr>
            @endforeach
</tbody>
</table>
</div>

@endsection