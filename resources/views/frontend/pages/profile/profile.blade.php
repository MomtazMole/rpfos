@extends('frontend.master')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title mb-4">
                        <div class="d-flex justify-content-start">
                            <div class="image-container">
                                <img src="https://th.bing.com/th/id/OIP.HSmrYdiz3uKTN_Y6Z3TBVAHaHd?rs=1&pid=ImgDetMain" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                
                            </div>
                            
                            <div class="ml-auto">
                                <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                </li>

                            </ul>
                            <div class="tab-content ml-1" id="myTabContent">
                                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">


                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Full Name</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{ auth()->user()->name }}
                                        </div>
                                    </div>
                                    <hr />


                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Email</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{ auth()->user()->email }}
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Role</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{ auth()->user()->role }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">phone number</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{ auth()->user()->phone_number}}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <hr>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Order Id</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Total Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($order as $item)
            <tr>
                <td scope="row">{{$item->id}}</td>
                <td>{{$item->payment_status}}</td>
                <td>BDT- {{$item->total_price}}/-</td>
                <td><a href="{{route('Order_Details',$item->id)}}" type="button" class="btn btn-success">View order slip</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection