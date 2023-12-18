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
        <th scope="col">Sl</th>
        <th scope="col">photo</th>
        <th scope="col">name</th>
        <th scope="col">Category name</th>
        <th scope="col">Description</th>
        <th scope="col">price</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($menu as $key=>$item)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$item->photo}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->category_name}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->price}}</td>
        <td>
          dd($menu);
          <a href="{{route('Menu.delete',$item->id)}}" type="button" class="btn btn-danger">delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection