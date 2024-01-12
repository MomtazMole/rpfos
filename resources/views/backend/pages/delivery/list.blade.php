@extends('backend.master')
@section('content')


<div class="container p-4">
    <h1>Delivery details</h1>
    <div class="col-9">
        <a class="btn btn-primary" href="{{route('Delivery.man.form')}}">Add New Deliveryman</a>
        
    </div>
    <div class="col-2"></div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">photo</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">address</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Delivery_data as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td><img width="60px" src="{{url('uploads/'.$item->photo)}}" alt=""></td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->phone}}</td>
                <td>
                    <a href="{{route('Delivery.man.delete',$item->id)}}" class="btn btn-danger btn-sm" href="#">Delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection