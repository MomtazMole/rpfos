@extends('backend.master')
@section('content')
<div class="container p-4">
    <h3 class="text-success text-center"><b><i><u>Add Delivery Man</u></i></b></h3>
    <form action="{{route('Delivery.man.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <label> Deliveryman name </label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name"><br>
        <label> Phone number </label>
        <input type="number" class="form-control" name="phone" placeholder="Enter your phone number"><br>
        <label> address </label>
        <textarea type="text" class="form-control" name="address" placeholder="Enter your address"></textarea><br>
        <label> Email </label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email"><br>
        <label> password </label>
        <input type="password" class="form-control" name="password" placeholder="Enter your password"><br>
        <label> Photo </label>
        <input type="file" class="form-control" name="photo" placeholder="Enter your photo"><br>
        <button type="submit" class="btn btn-success">Submit</button>

    </form>
</div>

@endsection