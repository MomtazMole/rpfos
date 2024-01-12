@extends('frontend.master')

@section('content')

@include('frontend.partials.banner')

@endsection

@section('category')

<div class="coffee_section border">
    <div class="container">
        <div class="row">
            <h1 class="coffee_taital">All Categories</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($category as $item)
            
                <div style="float: left;" class="col-md-3">
                    <div class="coffee_img"><img height="100px" width="100px" src="{{url('uploads/'.$item->photo)}}" alt=""></div>
                    <h3 class="types_text">{{$item->category}}</h3>
                    <p class="looking_text">{{$item->description}}</p>
                    <div class="read_bt"><a href="{{route('menu.under.category',$item->id)}}">Read More</a></div>
                </div>

            @endforeach
        </div>
    </div>
</div>

@endsection