@extends('frontend.master')
@section('content')
@foreach($Menu as $menu)
<div class="card mb-3 ml-5" style="max-width: 540px; float:left">
  <div class="row no-gutters">
    <div class="col-md-5 mt-4 ml-4">
      <img height="100" width="100" src="{{url('uploads/'.$menu->photo)}}" class="card-img" alt="menu_photo">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title">{{$menu->name}}</h5>
        <p class="card-text">BDT- {{$menu->price}}/-</p>
        <p class="card-text">Category- {{$menu->category_id}}</p>
        <a href="{{route('view.details', $menu->id)}}" class="btn btn-outline-dark px-auto">view details</a>
        <a class="btn btn-outline-dark mt-auto" href="{{route('add.to.order',$menu->id)}}">Add to order</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection