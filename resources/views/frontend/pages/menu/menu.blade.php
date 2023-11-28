@extends('frontend.master')
@section('content')
@foreach($Menu as $menu)
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{url('uploads/'.$menu->Photo)}}" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$menu->name}}</h5>
        <p class="card-text">{{$menu->price}}</p>
        <a href="#" class="btn details px-auto">view details</a>
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('Cart.view')}}">Add to order</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection